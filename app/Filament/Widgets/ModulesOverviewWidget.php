<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use ReflectionMethod;
use Throwable;
=======
use ReflectionMethod;
use Throwable;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
>>>>>>> 5a14301c (.)

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
                if (! $user) {
                    return false;
                }
                if (! method_exists($user, 'hasRole')) {
=======
                if (!$user) {
                    return false;
                }
                if (!method_exists($user, 'hasRole')) {
>>>>>>> 5a14301c (.)
                    return true; // fallback: mostra se non abbiamo sistema ruoli
                }
                try {
                    // Usa reflection per evitare errori di linting
                    $reflection = new ReflectionMethod($user, 'hasRole');
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
                    return (bool) $reflection->invoke($user, $role);
                } catch (Throwable $e) {
                    return false;
                }
            };

            foreach ($configs as $cfg) {
<<<<<<< HEAD
                $role = $cfg['module_low'].'::admin';
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
                    'url' => '/'.$cfg['module_low'].'/admin',
=======
                    'url' => '/' . $cfg['module_low'] . '/admin',
>>>>>>> 5a14301c (.)
                    'icon' => $cfg['icon'] ?: 'heroicon-o-cube',
                    'description' => $this->getModuleDescription($cfg['module']),
                ];
            }
<<<<<<< HEAD

            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: '.$e->getMessage());

=======
            
            return $modules;
        } catch (Throwable $e) {
            Log::error('Errore nel caricamento moduli per widget: ' . $e->getMessage());
>>>>>>> 5a14301c (.)
            return $this->getDefaultModules();
        }
    }

    /**
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
                'name' => '<main module>',
                'name_lower' => '<nome progetto>',
                'url' => '/<nome progetto>/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('<main module>'),
=======
                'name' => 'TechPlanner',
                'name_lower' => 'techplanner',
                'url' => '/techplanner/admin',
                'icon' => 'heroicon-o-clipboard-document-list',
                'description' => $this->getModuleDescription('TechPlanner'),
>>>>>>> 5a14301c (.)
            ],
        ];
    }

<<<<<<< HEAD
    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param  string  $module  Nome del modulo
=======

    /**
     * Ottiene la descrizione per un modulo.
     *
     * @param string $module Nome del modulo
>>>>>>> 5a14301c (.)
     * @return string Descrizione del modulo
     */
    private function getModuleDescription(string $module): string
    {
        $descriptions = [
            'User' => 'Gestione utenti e autenticazione',
<<<<<<< HEAD
            '<main module>' => 'Pianificazione tecnica e progetti',
=======
            'TechPlanner' => 'Pianificazione tecnica e progetti',
>>>>>>> 5a14301c (.)
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
        return $descriptions[$module] ?? 'Modulo ' . $module;
    }

    /**
     * Determina se il widget deve essere visibile.
     */
    public static function canView(): bool
    {
        return true;
    }

>>>>>>> 5a14301c (.)
}
