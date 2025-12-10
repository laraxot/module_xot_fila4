<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use ReflectionMethod;
use Throwable;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use ReflectionMethod;
use Throwable;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

/**
 * Widget per mostrare una panoramica dei moduli disponibili.
 * Utilizza l'action GetModulesNavigationItems per caricare dinamicamente i moduli.
 */
class ModulesOverviewWidget extends Widget
{
    protected string $view = 'xot::filament.widgets.modules-overview';

<<<<<<< HEAD
    protected int|string|array $columnSpan = 'full';
    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected int|string|array $columnSpan = 'full';
=======
    protected int | string | array $columnSpan = 'full';

>>>>>>> 5a14301c (.)
=======
    protected int | string | array $columnSpan = 'full';

>>>>>>> 5a14301c (.)
=======
    protected int | string | array $columnSpan = 'full';

>>>>>>> 5a14301c (.)
=======
    protected int | string | array $columnSpan = 'full';

>>>>>>> 5a14301c (.)
=======
    protected int | string | array $columnSpan = 'full';

>>>>>>> 5a14301c (.)
=======
    protected int | string | array $columnSpan = 'full';

>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

    /**
     * Ottiene i moduli disponibili per l'utente corrente.
     * Dati ricavati in modo dinamico e cached da GetModulesNavigationItems.
     *
     * @return array<int, array<string, mixed>>
     */
    public function getModules(): array
    {
        $modules = [];

        try {
            /** @var array<int, array{module:string,module_low:string,icon:string,sort:int}> $configs */
            $configs = app(GetModulesNavigationItems::class)->getCachedModuleConfigs();

            // Ordina per sort
            usort($configs, static fn ($a, $b) => ($a['sort'] <=> $b['sort']));

            $user = Auth::user();
            $hasRoleFn = static function (string $role) use ($user): bool {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
                if (! $user) {
                    return false;
                }
                if (! method_exists($user, 'hasRole')) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                if (!$user) {
                    return false;
                }
                if (!method_exists($user, 'hasRole')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                    return true; // fallback: mostra se non abbiamo sistema ruoli
                }
                try {
                    // Usa reflection per evitare errori di linting
                    $reflection = new ReflectionMethod($user, 'hasRole');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                    return (bool) $reflection->invoke($user, $role);
                } catch (Throwable $e) {
                    return false;
                }
            };

            foreach ($configs as $cfg) {
<<<<<<< HEAD
                $role = $cfg['module_low'].'::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $role = $cfg['module_low'].'::admin';
=======
                $role = $cfg['module_low'] . '::admin';
>>>>>>> 5a14301c (.)
=======
                $role = $cfg['module_low'] . '::admin';
>>>>>>> 5a14301c (.)
=======
                $role = $cfg['module_low'] . '::admin';
>>>>>>> 5a14301c (.)
=======
                $role = $cfg['module_low'] . '::admin';
>>>>>>> 5a14301c (.)
=======
                $role = $cfg['module_low'] . '::admin';
>>>>>>> 5a14301c (.)
=======
                $role = $cfg['module_low'] . '::admin';
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                if (! $hasRoleFn($role)) {
                    continue;
                }

                $modules[] = [
                    'name' => $cfg['module'],
                    'name_lower' => $cfg['module_low'],
<<<<<<< HEAD
                    'url' => '/'.$cfg['module_low'].'/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    'url' => '/'.$cfg['module_low'].'/admin',
=======
                    'url' => '/' . $cfg['module_low'] . '/admin',
>>>>>>> 5a14301c (.)
=======
                    'url' => '/' . $cfg['module_low'] . '/admin',
>>>>>>> 5a14301c (.)
=======
                    'url' => '/' . $cfg['module_low'] . '/admin',
>>>>>>> 5a14301c (.)
=======
                    'url' => '/' . $cfg['module_low'] . '/admin',
>>>>>>> 5a14301c (.)
=======
                    'url' => '/' . $cfg['module_low'] . '/admin',
>>>>>>> 5a14301c (.)
=======
                    'url' => '/' . $cfg['module_low'] . '/admin',
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                    'icon' => $cfg['icon'] ?: 'heroicon-o-cube',
                    'description' => $this->getModuleDescription($cfg['module']),
                ];
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop

            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: '.$e->getMessage());

<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            
            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: ' . $e->getMessage());
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            return $this->getDefaultModules();
        }
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * Determina se il widget deve essere visibile.
     */
    public static function canView(): bool
    {
        return true;
    }

    /**
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * Restituisce una lista di moduli di default in caso di errori.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getDefaultModules(): array
    {
        return [
            [
                'name' => 'User',
                'name_lower' => 'user',
                'url' => '/user/admin',
                'icon' => 'heroicon-o-users',
                'description' => $this->getModuleDescription('User'),
            ],
            [
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> laraxot/develop
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> laraxot/develop
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> laraxot/develop
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
<<<<<<< HEAD
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> laraxot/develop
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> laraxot/develop
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> laraxot/develop
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
<<<<<<< HEAD
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            ],
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param  string  $module  Nome del modulo
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param string $module Nome del modulo
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @return string Descrizione del modulo
     */
    private function getModuleDescription(string $module): string
    {
        $descriptions = [
            'User' => 'Gestione utenti e autenticazione',
<<<<<<< HEAD
            '<main module>' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            '<main module>' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            '<main module>' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '<main module>' => 'Pianificazione tecnica e progetti',
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 5a14301c (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 5a14301c (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 5a14301c (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 5a14301c (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 53d6a6ba (.)
=======
            '<main module>' => 'Pianificazione tecnica e progetti',
>>>>>>> b7afadf9 (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 71586de2 (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 5a14301c (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 53d6a6ba (.)
=======
            '<main module>' => 'Pianificazione tecnica e progetti',
>>>>>>> b7afadf9 (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 71586de2 (.)
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
            'Geo' => 'Gestione dati geografici e mappe',
            'Cms' => 'Sistema di gestione contenuti',
            'Notify' => 'Sistema di notifiche',
            'Lang' => 'Gestione lingue e traduzioni',
            'Job' => 'Gestione lavori e processi',
            'Activity' => 'Monitoraggio attività e log',
            'Media' => 'Gestione file multimediali',
            'UI' => 'Componenti interfaccia utente',
        ];

<<<<<<< HEAD
        return $descriptions[$module] ?? 'Modulo '.$module;
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $descriptions[$module] ?? 'Modulo '.$module;
    }
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        return $descriptions[$module] ?? 'Modulo ' . $module;
    }

    /**
     * Determina se il widget deve essere visibile.
     */
    public static function canView(): bool
    {
        return true;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
}
