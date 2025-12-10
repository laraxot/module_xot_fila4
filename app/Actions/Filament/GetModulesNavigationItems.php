<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Exception;
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
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Exception;
use Exception;
use Exception;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\File;
use Filament\Navigation\NavigationItem;
use Modules\Tenant\Services\TenantService;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use function Safe\json_encode;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isArray($modules, 'TenantService::allModules() deve restituire un array');
        Assert::isArray($modules);
        Assert::isArray($modules, 'TenantService::allModules() deve restituire un array');
        Assert::isArray($modules, 'TenantService::allModules() deve restituire un array');
        Assert::isArray($modules, 'TenantService::allModules() deve restituire un array');
        Assert::isArray($modules);
        Assert::isArray($modules, 'TenantService::allModules() deve restituire un array');
        Assert::isArray($modules, 'TenantService::allModules() deve restituire un array');
=======
        Assert::isArray($modules);
>>>>>>> b7afadf9 (.)

        // Pre-load user roles to avoid N+1 queries
        $user = auth()->user();
        
        $userRoles = [];
        if ($user && method_exists($user, 'roles')) {
            try {
                $userRoles = $user->roles()->pluck('name')->toArray();
            } catch (Exception $e) {
                
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                $userRoles = [];
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        
       
        
       
        
       
        
       
        
       
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        foreach ($modules as $module) {
            Assert::string($module, 'Il nome del modulo deve essere una stringa');

            $module_low = Str::lower($module);
            Assert::stringNotEmpty($module_low, 'Il nome del modulo convertito in minuscolo non può essere vuoto');

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
<<<<<<< HEAD
<<<<<<< HEAD
            $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
            $configFilePath = $configPath . '/config.php';

            // Verifichiamo che il file esista
            if (!File::exists($configFilePath)) {
              
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
            $role = $module_low . '::admin';
            Assert::stringNotEmpty($role, 'Il ruolo non può essere vuoto');
=======
            // $role è sempre stringa non vuota (concatenazione di stringhe non vuote), check ridondante rimosso
            $role = $module_low.'::admin';
>>>>>>> 551c768c4 (.)
=======
            // $role è sempre stringa non vuota (concatenazione di stringhe non vuote), check ridondante rimosso
            $role = $module_low.'::admin';
>>>>>>> 414a4ffcb (.)

            $navigation_sort = $config['navigation_sort'] ?? 1;
            Assert::integerish($navigation_sort, 'navigation_sort deve essere un intero');
            $navigation_sort = (int) $navigation_sort;

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
            $nav = NavigationItem::make($module)
                ->url('/'.$module_low.'/admin')
<<<<<<< HEAD
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

            // Creiamo l'elemento di navigazione
            $nav = NavigationItem::make($module)
                ->url('/' . $module_low . '/admin')
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
                ->icon($icon)
                ->group('Modules')
                ->sort($navigation_sort)
                ->visible(static function () use ($role): bool {
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    /**
                     * @var Authenticatable|null $user
                     */
>>>>>>> 551c768c4 (.)
=======
                    /**
                     * @var Authenticatable|null $user
                     */
>>>>>>> 414a4ffcb (.)
                    $user = Filament::auth()->user();
                    if (null === $user) {
                        return false;
                    }

                    // Verifichiamo che il metodo hasRole esista
<<<<<<< HEAD
<<<<<<< HEAD
                    if (!method_exists($user, 'hasRole')) {
                        return false;
                    }

                    return (bool) $user->hasRole($role);
=======
                    if (! method_exists($user, 'hasRole')) {
                        return false;
                    }

                    return $user->hasRole($role);
>>>>>>> 551c768c4 (.)
=======
                    if (! method_exists($user, 'hasRole')) {
                        return false;
                    }

                    return $user->hasRole($role);
>>>>>>> 414a4ffcb (.)
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

        $cacheKey = 'xot:navigation:modules:'.md5((string) json_encode($modules));

        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $cached */
        $cached = Cache::get($cacheKey);
        if (\is_array($cached)) {
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isArray($modules);

        $cacheKey = 'xot:navigation:modules:' . md5(json_encode($modules));

        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $cached */
        $cached = Cache::get($cacheKey);
        if (is_array($cached)) {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
            return $cached;
        }

        // Se non presente in cache, rigenera usando la stessa logica di execute()
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
        /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $regen */
        $regen = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($modules): array {
=======
        /** @var array<int, array{module: string, module_low: string, icon: string, sort: int}> $result */
        $result = Cache::remember($cacheKey, now()->addMinutes(10), static function () use ($modules): array {
>>>>>>> 551c768c4 (.)
=======
        /** @var array<int, array{module: string, module_low: string, icon: string, sort: int}> $result */
        $result = Cache::remember($cacheKey, now()->addMinutes(10), static function () use ($modules): array {
>>>>>>> 414a4ffcb (.)
            $out = [];
            foreach ($modules as $module) {
                Assert::string($module, 'Il nome del modulo deve essere una stringa');
                $module_low = Str::lower($module);
                Assert::stringNotEmpty($module_low, 'Il nome del modulo convertito in minuscolo non può essere vuoto');
                $configPath = app(GetModulePathByGeneratorAction::class)->execute($module, 'config');
<<<<<<< HEAD
<<<<<<< HEAD
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
                $configFilePath = $configPath . '/config.php';
                if (!File::exists($configFilePath)) {
=======
                $configFilePath = $configPath.'/config.php';
                if (! File::exists($configFilePath)) {
>>>>>>> 551c768c4 (.)
=======
                $configFilePath = $configPath.'/config.php';
                if (! File::exists($configFilePath)) {
>>>>>>> 414a4ffcb (.)
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

            return $out;
        });

        return $result;
<<<<<<< HEAD
<<<<<<< HEAD
            return $out;
        });

        return $regen;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
    }
}
