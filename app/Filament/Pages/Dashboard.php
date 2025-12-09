<?php

/**
 * @see https://medium.com/@laravelprotips/filament-streamline-multiple-widgets-with-one-dynamic-livewire-filter-ed05c978a97f
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\DatePicker;
<<<<<<< HEAD
use Filament\Schemas\Components\Section;
=======
use Filament\Forms\Components\Section;
>>>>>>> ca9324a4 (.)
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

class Dashboard extends XotBaseDashboard
{
<<<<<<< HEAD
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
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
=======
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
>>>>>>> 5a14301c (.)
use Filament\Forms\Get;
use Filament\Pages\Dashboard as BaseBashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Widgets\Widget;
use Filament\Widgets\WidgetConfiguration;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Dashboard extends XotBaseDashboard
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Dashboard extends XotBaseDashboard
{
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
class Dashboard extends XotBaseDashboard
{
=======
>>>>>>> ed734516 (.)

class Dashboard extends XotBaseDashboard
{
    
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
class Dashboard extends XotBaseDashboard
{
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
class Dashboard extends XotBaseDashboard
{
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
class Dashboard extends XotBaseDashboard
{
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======

    
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
}
