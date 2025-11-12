<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
use Filament\Forms\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Get;
>>>>>>> a8f8bb0 (.)
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

<<<<<<< HEAD
    protected static ?int $navigationSort = 1;

=======
<<<<<<< HEAD
=======
    /**
     * Navigation icon compatible with Filament 4.
     * Supports BackedEnum, string, or null values.
     */
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    
>>>>>>> a5dccfe (.)
    protected static null|int $navigationSort = 1;
>>>>>>> 6821f7a (.)
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $form): Schema
    {
<<<<<<< HEAD
        /** @var array<Component> $filterSchema */
        $filterSchema = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($filterSchema)->columns(3),
=======
        return $form->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
>>>>>>> a8f8bb0 (.)
        ]);
    }

    /**
     * @return array<Component>
     */
    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
