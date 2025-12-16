<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Exception;
use Throwable;
use Filament\Navigation\NavigationItem;
use Modules\Tenant\Actions\Modules\GetTenantModulesAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;

use function Safe\json_encode;

use Spatie\QueueableAction\QueueableAction;

/**
 * Classe per gestire gli elementi di navigazione per i moduli.
 * Ottimizzata per ridurre memory usage.
 */
class GetModulesNavigationItems
{
    use QueueableAction;

    /**
     * Ottiene gli elementi di navigazione per i moduli.
     *
     * @return array<int, NavigationItem> Array di elementi di navigazione
     */
    public function execute(): array
    {
        $navs = [];

        $modules = app(GetTenantModulesAction::class)->execute();
        // GetTenantModulesAction::execute() restituisce sempre array
        foreach ($modules as $module) {
            if (! is_string($module) || $module === '') {
                continue;
            }

            $moduleLow = strtolower($module);

            $config = $this->getModuleConfig($module);
            if ($config === null) {
                continue;
            }

            // Estraiamo i valori di configurazione con valori predefiniti
            $icon = $config['icon'] ?? 'heroicon-o-question-mark-circle';
            if (! is_string($icon) || $icon === '') {
                $icon = 'heroicon-o-question-mark-circle';
            }

            // $role è sempre stringa non vuota (concatenazione di stringhe non vuote), check ridondante rimosso
            $role = $moduleLow.'::admin';

            $navigationSort = (int) ($config['navigation_sort'] ?? 1);

            // Check role using pre-loaded roles instead of hasRole() method
            /*
             $hasRole = in_array($role, $userRoles, true);

             // Only create NavigationItem if user has the role (memory optimization)
             if ($hasRole) {
                 $nav = NavigationItem::make($module)
                     ->url('/'.$module_low.'/admin')
                     ->icon($icon)
                     ->group('Modules')
                     ->sort($navigation_sort)
                     ->visible(true); // Already checked above

                 $navs[] = $nav;
             }
             */

            // Creiamo l'elemento di navigazione
            $nav = $this->makeNavigationItem(
                module: $module,
                moduleLow: $moduleLow,
                icon: $icon,
                role: $role,
                navigationSort: $navigationSort,
            );

            $navs[] = $nav;
        }

        return $navs;
    }

    /**
     * Restituisce la versione cached e minimale dei moduli per UI rendering.
     * Questo evita di hardcodare i moduli nelle viste.
     *
     * @return array<int, array{module:string,module_low:string,icon:string,sort:int}>
     */
    public function getCachedModuleConfigs(): array
    {
        $modules = app(GetTenantModulesAction::class)->execute();
        // GetTenantModulesAction::execute() restituisce sempre array

        $cacheKey = 'xot:navigation:modules:'.md5((string) json_encode($modules));

        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $cached */
        $cached = cache()->get($cacheKey);
        if (\is_array($cached)) {
            return $cached;
        }

        // Se non presente in cache, rigenera usando la stessa logica di execute()
        /** @var array<int, array{module: string, module_low: string, icon: string, sort: int}> $result */
        $result = cache()->remember($cacheKey, now()->addMinutes(10), static function () use ($modules): array {
            $out = [];
            foreach ($modules as $module) {
                if (! is_string($module) || $module === '') {
                    continue;
                }
                $moduleLow = strtolower($module);
                $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
                $configFilePath = $configPath.'/config.php';
                if (! is_file($configFilePath)) {
                    continue;
                }
                try {
                    /** @var array<string, mixed> $config */
                    $config = require $configFilePath;
                    if (! is_array($config)) {
                        continue;
                    }
                } catch (Exception $e) {
                    continue;
                }
                $icon = $config['icon'] ?? 'heroicon-o-cube';
                $navigationSort = (int) ($config['navigation_sort'] ?? 1);
                $out[] = [
                    'module' => $module,
                    'module_low' => $moduleLow,
                    'icon' => (string) $icon,
                    'sort' => $navigationSort,
                ];
            }

            return $out;
        });

        return $result;
    }

    private function makeNavigationItem(
        string $module,
        string $moduleLow,
        string $icon,
        string $role,
        int $navigationSort,
    ): NavigationItem {
        return NavigationItem::make($module)
            ->url('/'.$moduleLow.'/admin')
            ->icon($icon)
            ->group('Modules')
            ->sort($navigationSort)
            ->visible(static function () use ($role): bool {
                $user = auth()->user();

                if (! is_object($user) || ! method_exists($user, 'hasRole')) {
                    return false;
                }

                /** @phpstan-ignore-next-line */
                return (bool) $user->hasRole($role);
            });
    }

    /**
     * @return array<string, mixed>|null
     */
    private function getModuleConfig(string $module): ?array
    {
        try {
            $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
        } catch (Throwable) {
            return null;
        }

        $configFilePath = $configPath.'/config.php';
        if (! is_file($configFilePath)) {
            return null;
        }

        try {
            $config = require $configFilePath;
        } catch (Exception) {
            return null;
        }

        if (! is_array($config)) {
            return null;
        }

        /** @var array<string, mixed> $typed */
        $typed = $config;

        return $typed;
    }
}
