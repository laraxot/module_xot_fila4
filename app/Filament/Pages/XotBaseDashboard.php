<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
=======

=======
>>>>>>> 3fbbf1f5 (.)
namespace Modules\Xot\Filament\Pages;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as FilamentDashboard;
>>>>>>> 5a14301c (.)

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?int $navigationSort = 1;

=======
=======
    /**
     * Navigation icon compatible with Filament 4.
     * Supports BackedEnum, string, or null values.
     */
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
    protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)
=======
    protected static null|int $navigationSort = 1;
>>>>>>> 3fbbf1f5 (.)
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<Component> $filterSchema */
        $filterSchema = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($filterSchema)->columns(3),
        ]);
    }

    /**
     * @return array<Component>
     */
=======
=======
>>>>>>> 3fbbf1f5 (.)
        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

>>>>>>> 5a14301c (.)
    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
