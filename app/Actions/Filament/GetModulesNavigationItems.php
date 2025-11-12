<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Throwable;
>>>>>>> 3df5f27e (.)
use Exception;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Spatie\QueueableAction\QueueableAction;
use Throwable;
use Webmozart\Assert\Assert;

=======
use Exception;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Filament\Navigation\NavigationItem;
use Modules\Tenant\Services\TenantService;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> 54cbe5d (.)
use function Safe\json_encode;

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

        $modules = TenantService::allModules();
        // TenantService::allModules() restituisce sempre array

        // Pre-load user roles to avoid N+1 queries
        /** @var \Illuminate\Contracts\Auth\Authenticatable|null $user */
        $user = auth()->user();
<<<<<<< HEAD

<<<<<<< HEAD
        /** @var array<int, string> $userRoles */
=======
=======
        
>>>>>>> 54cbe5d (.)
>>>>>>> 3df5f27e (.)
        $userRoles = [];
        if ($user !== null && method_exists($user, 'roles') && method_exists($user, 'pluck')) {
            try {
                /** @var \Illuminate\Support\Collection<int, string> $rolesCollection */
                $rolesCollection = $user->roles()->pluck('name');
                $userRoles = $rolesCollection->toArray();
            } catch (Exception $e) {
<<<<<<< HEAD
=======
                
>>>>>>> 54cbe5d (.)
                $userRoles = [];
            }
        }

<<<<<<< HEAD
=======
        
       
>>>>>>> 54cbe5d (.)
        foreach ($modules as $module) {
            Assert::string($module, 'Il nome del modulo deve essere una stringa');

            $module_low = Str::lower($module);
            Assert::stringNotEmpty($module_low, 'Il nome del modulo convertito in minuscolo non può essere vuoto');

<<<<<<< HEAD
            // Tolleranza: durante comandi CLI alcuni moduli possono non avere ancora struttura completa
            try {
                $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
            } catch (Throwable $e) {
                // Skip modulo non pronto/senza generator path config
                continue;
            }
            $configFilePath = $configPath.'/config.php';

            // Verifichiamo che il file esista
            if (! File::exists($configFilePath)) {
=======
            $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
            $configFilePath = $configPath . '/config.php';

            // Verifichiamo che il file esista
            if (!File::exists($configFilePath)) {
              
>>>>>>> 54cbe5d (.)
                continue;
            }

            // Carichiamo la configurazione
            try {
                /** @var array<string, mixed> $config */
                $config = File::getRequire($configFilePath);
                Assert::isArray($config, 'Il file di configurazione deve restituire un array');
            } catch (Exception $e) {
                continue;
            }

            // Estraiamo i valori di configurazione con valori predefiniti
            $icon = $config['icon'] ?? 'heroicon-o-question-mark-circle';
            Assert::string($icon, "L'icona deve essere una stringa");

<<<<<<< HEAD
            // $role è sempre stringa non vuota (concatenazione di stringhe non vuote), check ridondante rimosso
            $role = $module_low.'::admin';
=======
<<<<<<< HEAD
            $role = $module_low.'::admin';
=======
            $role = $module_low . '::admin';
>>>>>>> 54cbe5d (.)
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
>>>>>>> 3df5f27e (.)

            $navigation_sort = $config['navigation_sort'] ?? 1;
            Assert::integerish($navigation_sort, 'navigation_sort deve essere un intero');
            $navigation_sort = (int) $navigation_sort;

            // Check role using pre-loaded roles instead of hasRole() method
<<<<<<< HEAD
            /*
             $hasRole = in_array($role, $userRoles, true);

             // Only create NavigationItem if user has the role (memory optimization)
             if ($hasRole) {
                 $nav = NavigationItem::make($module)
                     ->url('/' . $module_low . '/admin')
                     ->icon($icon)
                     ->group('Modules')
                     ->sort($navigation_sort)
                     ->visible(true); // Already checked above

                 $navs[] = $nav;
             }
             */
            $role = $module_low.'::admin';
            // Creiamo l'elemento di navigazione
            $nav = NavigationItem::make($module)
                ->url('/'.$module_low.'/admin')
=======
           /*
            $hasRole = in_array($role, $userRoles, true);

            // Only create NavigationItem if user has the role (memory optimization)
            if ($hasRole) {
                $nav = NavigationItem::make($module)
                    ->url('/' . $module_low . '/admin')
                    ->icon($icon)
                    ->group('Modules')
                    ->sort($navigation_sort)
                    ->visible(true); // Already checked above

                $navs[] = $nav;
            }
            */

            // Creiamo l'elemento di navigazione
            $nav = NavigationItem::make($module)
                ->url('/' . $module_low . '/admin')
>>>>>>> 54cbe5d (.)
                ->icon($icon)
                ->group('Modules')
                ->sort($navigation_sort)
                ->visible(static function () use ($role): bool {
                    /**
                     * @var \Illuminate\Contracts\Auth\Authenticatable|null $user
                     */
                    $user = Filament::auth()->user();
<<<<<<< HEAD
                    if ($user === null) {
=======
                    if (null === $user) {
>>>>>>> 54cbe5d (.)
                        return false;
                    }

                    // Verifichiamo che il metodo hasRole esista
<<<<<<< HEAD
                    if (! method_exists($user, 'hasRole')) {
=======
                    if (!method_exists($user, 'hasRole')) {
>>>>>>> 54cbe5d (.)
                        return false;
                    }

                    /**
                     * @var bool $result
                     */
                    $result = $user->hasRole($role);

                    return $result;
                });

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
        $modules = TenantService::allModules();
        // TenantService::allModules() restituisce sempre array

<<<<<<< HEAD
        $cacheKey = 'xot:navigation:modules:'.md5(json_encode($modules));
=======
        $cacheKey = 'xot:navigation:modules:' . md5(json_encode($modules));
>>>>>>> 54cbe5d (.)

        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $cached */
        $cached = Cache::get($cacheKey);
        if (is_array($cached)) {
            return $cached;
        }

        // Se non presente in cache, rigenera usando la stessa logica di execute()
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
            $out = [];
            foreach ($modules as $module) {
                Assert::string($module, 'Il nome del modulo deve essere una stringa');
                $module_low = Str::lower($module);
                Assert::stringNotEmpty($module_low, 'Il nome del modulo convertito in minuscolo non può essere vuoto');
                $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
<<<<<<< HEAD
                $configFilePath = $configPath.'/config.php';
                if (! File::exists($configFilePath)) {
=======
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
>>>>>>> 54cbe5d (.)
                    continue;
                }
                try {
                    /** @var array<string, mixed> $config */
                    $config = File::getRequire($configFilePath);
                    Assert::isArray($config);
                } catch (Exception $e) {
                    continue;
                }
                $icon = $config['icon'] ?? 'heroicon-o-cube';
                $navigation_sort = (int) ($config['navigation_sort'] ?? 1);
                $out[] = [
                    'module' => $module,
                    'module_low' => $module_low,
                    'icon' => (string) $icon,
                    'sort' => $navigation_sort,
                ];
            }
<<<<<<< HEAD

=======
>>>>>>> 54cbe5d (.)
            return $out;
        });

        return $regen;
    }
}
