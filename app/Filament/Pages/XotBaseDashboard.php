<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
use Filament\Pages\Dashboard as FilamentDashboard;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> 53d6a6ba (.)
=======
=======
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
    use HasFiltersForm;

<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;

    protected static ?int $navigationSort = 1;

<<<<<<< HEAD
    protected static ?int $navigationSort = 1;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?int $navigationSort = 1;

<<<<<<< HEAD
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
=======
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
    protected static ?int $navigationSort = 1;

=======
<<<<<<< HEAD
=======
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
    /**
     * Navigation icon compatible with Filament 4.
     * Supports BackedEnum, string, or null values.
     */
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
=======
>>>>>>> fb8add77 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> fb8add77 (.)
<<<<<<< HEAD
>>>>>>> e6745a06 (.)
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
>>>>>>> 01502290 (.)
    protected static null|int $navigationSort = 1;
    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;

    protected static null|int $navigationSort = 1;
    protected static ?int $navigationSort = 1;
<<<<<<< HEAD

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
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
    protected static ?int $navigationSort = 1;

=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 71586de2 (.)
=======
    protected static ?int $navigationSort = 1;

>>>>>>> fe347873 (.)
=======
    protected static ?int $navigationSort = 1;

=======
    protected static null|int $navigationSort = 1;
>>>>>>> f5516a5 (.)
>>>>>>> 4a40af71 (.)
<<<<<<< HEAD
>>>>>>> 9985e14a3 (.)
=======
=======
>>>>>>> a5dccfe (.)
    protected static null|int $navigationSort = 1;
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> 551c768c4 (.)
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        /** @var array<Component> $filterSchema */
        $filterSchema = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($filterSchema)->columns(3),
        ]);
    }

    /**
     * @return array<Component>
     */
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
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
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        return $schema->components([
            Section::make()->schema($schemaComponents)->columns(3),
        ]);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5cf46378 (.)
        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

<<<<<<< HEAD
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
=======
>>>>>>> 53d6a6ba (.)
=======
    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
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



