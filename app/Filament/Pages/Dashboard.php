<?php

/**
 * @see https://medium.com/@laravelprotips/filament-streamline-multiple-widgets-with-one-dynamic-livewire-filter-ed05c978a97f
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as BaseBashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Widgets\Widget;
use Filament\Widgets\WidgetConfiguration;

<<<<<<< HEAD
<<<<<<< HEAD
class Dashboard extends XotBaseDashboard
{
=======

class Dashboard extends XotBaseDashboard
{
    
>>>>>>> f1d4085 (.)
=======
class Dashboard extends XotBaseDashboard
{
>>>>>>> 73eab74 (.)
    /**
     * @return array<class-string<Widget>|WidgetConfiguration>
     */
    public function getWidgets(): array
    {
        return [];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======

    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
}
