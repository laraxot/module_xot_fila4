<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

declare(strict_types=1);


declare(strict_types=1);



declare(strict_types=1);





declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

declare(strict_types=1);


declare(strict_types=1);



declare(strict_types=1);






namespace Modules\Xot\Filament\Pages;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static ?int $navigationSort = 1;

    protected static ?int $navigationSort = 1;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
namespace Modules\Xot\Filament\Pages;

use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static ?int $navigationSort = 1;

    protected static ?int $navigationSort = 1;

    /**
     * Navigation icon compatible with Filament 4.
     * Supports BackedEnum, string, or null values.
     */
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    
    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static ?int $navigationSort = 1;

    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;

    protected static ?int $navigationSort = 1;


    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static ?int $navigationSort = 1;

    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;

    protected static ?int $navigationSort = 1;


    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    use HasFiltersForm;

    protected static ?int $navigationSort = 1;

    protected static ?int $navigationSort = 1;

    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    /**
     * Navigation icon compatible with Filament 4.
     * Supports BackedEnum, string, or null values.
     */
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    
    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;
    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static ?int $navigationSort = 1;


abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
        /** @var array<Component> $filterSchema */
        $filterSchema = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($filterSchema)->columns(3),
        ]);
    }

    /**
     * @return array<Component>
     */
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
                Section::make()
                    ->schema($this->getFiltersFormSchema())
                    ->columns(3),
            ]);
    }

    public function getFiltersFormSchema(): array
    {
        return [];
    }
}



    }


    public function getFiltersFormSchema():array{
        return [
           
        ];
    }
}



