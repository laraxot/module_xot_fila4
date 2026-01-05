<?php

declare(strict_types=1);

namespace Modules\Xot\Providers\Filament;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Xot';

    /**
     * Register pages for the Xot admin panel.
     */
    public function panel(\Filament\Panel $panel): \Filament\Panel
    {
        $panel = parent::panel($panel);

        // Ensure a dashboard page exists for this panel so the topbar home link works.
        return $panel->pages([
            \Modules\Xot\Filament\Pages\MainDashboard::class,
        ]);
    }
}
