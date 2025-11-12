<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
<<<<<<< HEAD
use Filament\Schemas\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Get;
<<<<<<< HEAD
>>>>>>> a0b522b (.)
=======
=======
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
>>>>>>> 54cbe5d (.)
>>>>>>> 3df5f27 (.)
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
    protected static null|int $navigationSort = 1;
>>>>>>> f5516a5 (.)
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
<<<<<<< HEAD
        /** @var array<Component> $filterSchema */
        $filterSchema = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($filterSchema)->columns(3),
=======
        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
>>>>>>> a0b522b (.)
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
