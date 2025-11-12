<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Form;
=======
use Filament\Schemas\Schema;
>>>>>>> dfe51d0 (.)
use Filament\Schemas\Components\Section;
<<<<<<< HEAD
use Filament\Schemas\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Get;
<<<<<<< HEAD
>>>>>>> a8f8bb0 (.)
=======
=======
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
>>>>>>> 2850177 (.)
>>>>>>> 3a08b27 (.)
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
=======
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
>>>>>>> eeaa032 (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use HasFiltersForm;

    protected static ?int $navigationSort = 1;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?int $navigationSort = 1;

=======
<<<<<<< HEAD
=======
=======
>>>>>>> 3da9b2a (.)
    /**
     * Navigation icon compatible with Filament 4.
     * Supports BackedEnum, string, or null values.
     */
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
=======
>>>>>>> 3da9b2a (.)
    protected static null|int $navigationSort = 1;
>>>>>>> 6821f7a (.)
=======
>>>>>>> eeaa032 (.)
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<Component> $filterSchema */
        $filterSchema = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($filterSchema)->columns(3),
=======
        return $form->components([
=======
        return $schema->components([
>>>>>>> dfe51d0 (.)
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
>>>>>>> a8f8bb0 (.)
=======
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($schemaComponents)->columns(3),
>>>>>>> eeaa032 (.)
        ]);
    }

    /**
<<<<<<< HEAD
     * @return array<Component>
=======
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
>>>>>>> eeaa032 (.)
     */
    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
