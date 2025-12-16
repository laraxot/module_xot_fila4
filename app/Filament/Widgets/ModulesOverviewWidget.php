<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use ReflectionMethod;
use Throwable;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use ReflectionMethod;
use Throwable;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

/**
 * Widget per mostrare una panoramica dei moduli disponibili.
 * Utilizza l'action GetModulesNavigationItems per caricare dinamicamente i moduli.
 */
class ModulesOverviewWidget extends Widget
{
    protected string $view = 'xot::filament.widgets.modules-overview';

<<<<<<< HEAD
    protected int|string|array $columnSpan = 'full';
=======
    protected int|string|array $columnSpan = 'full';
<<<<<<< HEAD
    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int|string|array $columnSpan = 'full';
    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

    protected int | string | array $columnSpan = 'full';

=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

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
                if (! $user) {
                    return false;
                }
                if (! method_exists($user, 'hasRole')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
                if (!$user) {
                    return false;
                }
                if (!method_exists($user, 'hasRole')) {
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                    return true; // fallback: mostra se non abbiamo sistema ruoli
                }
                try {
                    // Usa reflection per evitare errori di linting
                    $reflection = new ReflectionMethod($user, 'hasRole');
<<<<<<< HEAD

=======

<<<<<<< HEAD

=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                    return (bool) $reflection->invoke($user, $role);
                } catch (Throwable $e) {
                    return false;
                }
            };

            foreach ($configs as $cfg) {
<<<<<<< HEAD
                $role = $cfg['module_low'].'::admin';
=======
                $role = $cfg['module_low'].'::admin';
<<<<<<< HEAD
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'].'::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
                $role = $cfg['module_low'] . '::admin';
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                if (! $hasRoleFn($role)) {
                    continue;
                }

                $modules[] = [
                    'name' => $cfg['module'],
                    'name_lower' => $cfg['module_low'],
<<<<<<< HEAD
                    'url' => '/'.$cfg['module_low'].'/admin',
=======
                    'url' => '/'.$cfg['module_low'].'/admin',
<<<<<<< HEAD
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/'.$cfg['module_low'].'/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
                    'url' => '/' . $cfg['module_low'] . '/admin',
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                    'icon' => $cfg['icon'] ?: 'heroicon-o-cube',
                    'description' => $this->getModuleDescription($cfg['module']),
                ];
            }

            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: '.$e->getMessage());

<<<<<<< HEAD
=======
<<<<<<< HEAD
            
            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: ' . $e->getMessage());
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            return $this->getDefaultModules();
        }
    }

    /**
     * Determina se il widget deve essere visibile.
     */
    public static function canView(): bool
    {
        return true;
    }

    /**
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 5cf46378 (.)
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
<<<<<<< HEAD
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            ],
        ];
    }

    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param  string  $module  Nome del modulo
<<<<<<< HEAD
=======
<<<<<<< HEAD

    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param string $module Nome del modulo
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     * @return string Descrizione del modulo
     */
    private function getModuleDescription(string $module): string
    {
        $descriptions = [
            'User' => 'Gestione utenti e autenticazione',
<<<<<<< HEAD
            '<main module>' => 'Pianificazione tecnica e progetti',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            '<main module>' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
<<<<<<< HEAD
            '<main module>' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
            '<main module>' => 'Pianificazione tecnica e progetti',
            'TechPlanner' => 'Pianificazione tecnica e progetti',
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
            'TechPlanner' => 'Pianificazione tecnica e progetti',
=======
>>>>>>> 53d6a6ba (.)
=======
            '<main module>' => 'Pianificazione tecnica e progetti',
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            '<main module>' => 'Pianificazione tecnica e progetti',
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
        return $descriptions[$module] ?? 'Modulo '.$module;
    }
<<<<<<< HEAD
        return $descriptions[$module] ?? 'Modulo '.$module;
    }
        return $descriptions[$module] ?? 'Modulo ' . $module;
    }

    /**
     * Determina se il widget deve essere visibile.
     */
    public static function canView(): bool
    {
        return true;
    }

=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
}
