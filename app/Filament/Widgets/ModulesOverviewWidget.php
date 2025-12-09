<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use ReflectionMethod;
use Throwable;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use ReflectionMethod;
use Throwable;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
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
 * Widget per mostrare una panoramica dei moduli disponibili.
 * Utilizza l'action GetModulesNavigationItems per caricare dinamicamente i moduli.
 */
class ModulesOverviewWidget extends Widget
{
    protected string $view = 'xot::filament.widgets.modules-overview';

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (! $user) {
                    return false;
                }
                if (! method_exists($user, 'hasRole')) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                if (!$user) {
                    return false;
                }
                if (!method_exists($user, 'hasRole')) {
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
                    return true; // fallback: mostra se non abbiamo sistema ruoli
                }
                try {
                    // Usa reflection per evitare errori di linting
                    $reflection = new ReflectionMethod($user, 'hasRole');
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
                    return (bool) $reflection->invoke($user, $role);
                } catch (Throwable $e) {
                    return false;
                }
            };

            foreach ($configs as $cfg) {
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
                if (! $hasRoleFn($role)) {
                    continue;
                }

                $modules[] = [
                    'name' => $cfg['module'],
                    'name_lower' => $cfg['module_low'],
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
                    'icon' => $cfg['icon'] ?: 'heroicon-o-cube',
                    'description' => $this->getModuleDescription($cfg['module']),
                ];
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: '.$e->getMessage());

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            
            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: ' . $e->getMessage());
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
            return $this->getDefaultModules();
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Determina se il widget deve essere visibile.
     */
    public static function canView(): bool
    {
        return true;
    }

    /**
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
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
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
>>>>>>> 53d6a6ba (.)
=======
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
>>>>>>> b7afadf9 (.)
=======
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
>>>>>>> 71586de2 (.)
            ],
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param  string  $module  Nome del modulo
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param string $module Nome del modulo
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
     * @return string Descrizione del modulo
     */
    private function getModuleDescription(string $module): string
    {
        $descriptions = [
            'User' => 'Gestione utenti e autenticazione',
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
