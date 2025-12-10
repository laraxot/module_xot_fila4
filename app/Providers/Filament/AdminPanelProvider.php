<?php

declare(strict_types=1);

namespace Modules\Xot\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8cf76e7 (.)
use Filament\Panel;
use Modules\Xot\Filament\Pages\MainDashboard;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Xot';

    /**
     * Register pages for the Xot admin panel.
     */
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);

        // Ensure a dashboard page exists for this panel so the topbar home link works.
        return $panel->pages([
            MainDashboard::class,
        ]);
    }
<<<<<<< HEAD
=======
class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Xot';
>>>>>>> f1d4085 (.)
=======
>>>>>>> 8cf76e7 (.)
}
