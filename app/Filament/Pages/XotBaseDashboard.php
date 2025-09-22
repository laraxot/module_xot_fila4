<?php

declare(strict_types=1);


namespace Modules\Xot\Filament\Pages;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as FilamentDashboard;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

<<<<<<< HEAD
=======
    /**
     * Navigation icon compatible with Filament 4.
     * Supports BackedEnum, string, or null values.
     */
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    
>>>>>>> c06600c (.)
    protected static null|int $navigationSort = 1;
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
