<?php

declare(strict_types=1);


namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
use Filament\Forms\Form;
=======
use Filament\Schemas\Schema;
>>>>>>> 518e053 (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Get;
use Filament\Pages\Dashboard as FilamentDashboard;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static null|int $navigationSort = 1;
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $form): Schema
    {
<<<<<<< HEAD
        return $form->components([
=======
        return $form->schema([
>>>>>>> 518e053 (.)
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
