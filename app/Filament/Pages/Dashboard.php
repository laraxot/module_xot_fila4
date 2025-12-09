<?php

/**
 * @see https://medium.com/@laravelprotips/filament-streamline-multiple-widgets-with-one-dynamic-livewire-filter-ed05c978a97f
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as BaseBashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
>>>>>>> 5a14301c (.)
use Filament\Widgets\Widget;
use Filament\Widgets\WidgetConfiguration;

<<<<<<< HEAD
class Dashboard extends XotBaseDashboard
{
=======

class Dashboard extends XotBaseDashboard
{
    
>>>>>>> f1d4085 (.)
    /**
     * @return array<class-string<Widget>|WidgetConfiguration>
     */
    public function getWidgets(): array
    {
        return [];
    }
<<<<<<< HEAD
=======

    
>>>>>>> f1d4085 (.)
}
