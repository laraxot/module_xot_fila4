<?php

<<<<<<< HEAD
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
namespace Modules\Xot\Filament\Pages;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
<<<<<<< HEAD
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
=======
use Filament\Forms\Get;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
>>>>>>> a12f125f4a (.)
=======
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
>>>>>>> b93ef594b4 (.)
=======
namespace Modules\Xot\Filament\Pages;

use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\DatePicker;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Pages\Dashboard as FilamentDashboard;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use FilamentDashboard\Concerns\HasFiltersForm;
<<<<<<< HEAD

    protected static null|int $navigationSort = 1;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    protected static null|int $navigationSort = 1;
=======
    protected static ?int $navigationSort = 1;
>>>>>>> a12f125f4a (.)
=======

    protected static null|int $navigationSort = 1;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
    }

    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
<<<<<<< HEAD
=======
=======
        return $schema
            ->components([
=======
    protected static ?int $navigationSort = 1;
    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
>>>>>>> origin/develop
                Section::make()
                    ->schema($this->getFiltersFormSchema())
                    ->columns(3),
            ]);
<<<<<<< HEAD
=======
        return $schema->components([
            Section::make()->schema($this->getFiltersFormSchema())->columns(3),
        ]);
>>>>>>> b93ef594b4 (.)
    }

    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
<<<<<<< HEAD



>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    }


    public function getFiltersFormSchema():array{
        return [
           
        ];
    }
}



>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
