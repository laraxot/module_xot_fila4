<?php

/**
 * @see https://medium.com/@laravelprotips/filament-streamline-multiple-widgets-with-one-dynamic-livewire-filter-ed05c978a97f
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as BaseBashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
>>>>>>> 5a14301c (.)
=======
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Dashboard extends XotBaseDashboard
{
=======
=======
>>>>>>> origin/develop

class Dashboard extends XotBaseDashboard
{
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
class Dashboard extends XotBaseDashboard
{
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as BaseBashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Widgets\Widget;
use Filament\Widgets\WidgetConfiguration;

<<<<<<< HEAD
class Dashboard extends XotBaseDashboard
{
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======

class Dashboard extends XotBaseDashboard
{
    
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    /**
     * @return array<class-string<Widget>|WidgetConfiguration>
     */
    public function getWidgets(): array
    {
        return [];
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
>>>>>>> 5a14301c (.)
=======
=======

    
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
}
