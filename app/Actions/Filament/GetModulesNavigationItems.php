<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Throwable;
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Exception;
<<<<<<< HEAD
use Throwable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;

use function Safe\json_encode;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
=======
=======
use Exception;
>>>>>>> 5a14301c (.)
=======
use Exception;
>>>>>>> 5a14301c (.)
=======
use Exception;
>>>>>>> 5a14301c (.)
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
use function Safe\json_encode;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // TenantService::allModules() restituisce sempre array
        // Pre-load user roles to avoid N+1 queries
        /** @var Authenticatable|null $user */
        $user = auth()->user();

        /** @var array<int, string> $userRoles */
        $userRoles = [];
        if (null !== $user && method_exists($user, 'roles') && method_exists($user, 'pluck')) {
            try {
                /** @var Collection<int, string> $rolesCollection */
                $rolesCollection = $user->roles()->pluck('name');
                $userRoles = $rolesCollection->toArray();
            } catch (Exception $e) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
        Assert::isArray($modules, 'TenantService::allModules() deve restituire un array');

        // Pre-load user roles to avoid N+1 queries
        $user = auth()->user();
        
        $userRoles = [];
        if ($user && method_exists($user, 'roles')) {
            try {
                $userRoles = $user->roles()->pluck('name')->toArray();
            } catch (Exception $e) {
                
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                $userRoles = [];
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
       
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        
       
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        
       
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        
       
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        foreach ($modules as $module) {
            Assert::string($module, 'Il nome del modulo deve essere una stringa');

            $module_low = Str::lower($module);
            Assert::stringNotEmpty($module_low, 'Il nome del modulo convertito in minuscolo non può essere vuoto');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
            $configFilePath = $configPath . '/config.php';

            // Verifichiamo che il file esista
            if (!File::exists($configFilePath)) {
              
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // $role è sempre stringa non vuota (concatenazione di stringhe non vuote), check ridondante rimosso
            $role = $module_low.'::admin';
=======
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
>>>>>>> 5a14301c (.)
=======
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
>>>>>>> 5a14301c (.)
=======
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
>>>>>>> 5a14301c (.)
=======
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
>>>>>>> 5a14301c (.)

            $navigation_sort = $config['navigation_sort'] ?? 1;
            Assert::integerish($navigation_sort, 'navigation_sort deve essere un intero');
            $navigation_sort = (int) $navigation_sort;

            // Check role using pre-loaded roles instead of hasRole() method
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            $nav = NavigationItem::make($module)
                ->url('/'.$module_low.'/admin')
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                ->icon($icon)
                ->group('Modules')
                ->sort($navigation_sort)
                ->visible(static function () use ($role): bool {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    /**
                     * @var Authenticatable|null $user
                     */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    $user = Filament::auth()->user();
                    if (null === $user) {
                        return false;
                    }

                    // Verifichiamo che il metodo hasRole esista
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    if (! method_exists($user, 'hasRole')) {
                        return false;
                    }

                    return $user->hasRole($role);
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    if (!method_exists($user, 'hasRole')) {
                        return false;
                    }

                    return (bool) $user->hasRole($role);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // TenantService::allModules() restituisce sempre array

        $cacheKey = 'xot:navigation:modules:'.md5((string) json_encode($modules));

        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $cached */
        $cached = Cache::get($cacheKey);
        if (\is_array($cached)) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        Assert::isArray($modules);

        $cacheKey = 'xot:navigation:modules:' . md5(json_encode($modules));

        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $cached */
        $cached = Cache::get($cacheKey);
        if (is_array($cached)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $cached;
        }

        // Se non presente in cache, rigenera usando la stessa logica di execute()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<int, array{module: string, module_low: string, icon: string, sort: int}> $result */
        $result = Cache::remember($cacheKey, now()->addMinutes(10), static function () use ($modules): array {
=======
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
>>>>>>> 5a14301c (.)
=======
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
>>>>>>> 5a14301c (.)
=======
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
>>>>>>> 5a14301c (.)
=======
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
>>>>>>> 5a14301c (.)
            $out = [];
            foreach ($modules as $module) {
                Assert::string($module, 'Il nome del modulo deve essere una stringa');
                $module_low = Str::lower($module);
                Assert::stringNotEmpty($module_low, 'Il nome del modulo convertito in minuscolo non può essere vuoto');
                $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $configFilePath = $configPath.'/config.php';
                if (! File::exists($configFilePath)) {
=======
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
>>>>>>> 5a14301c (.)
=======
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
>>>>>>> 5a14301c (.)
=======
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
>>>>>>> 5a14301c (.)
=======
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            return $out;
        });

        return $result;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return $out;
        });

        return $regen;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    }
}
