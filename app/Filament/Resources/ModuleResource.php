<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Models\Module;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
use Filament\Schemas\Components\Component;
use Override;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Filament\Forms;
>>>>>>> a6ef6dc7 (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Models\Module;
use Override;

class ModuleResource extends XotBaseResource
{
    protected static ?string $model = Module::class;

    /**
     * @return array<string, Component>
     */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Models\Module;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;




>>>>>>> d2b0a27 (.)

class ModuleResource extends XotBaseResource
{
    protected static ?string $model = Module::class;

    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required(),
            'description' => TextInput::make('description'),
            'icon' => TextInput::make('icon'),
            'priority' => TextInput::make('priority'),
            'status' => Toggle::make('status'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function getRelations(): array
    {
        return [
        ];
    }

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListModules::route('/'),
            'create' => CreateModule::route('/create'),
            'edit' => EditModule::route('/{record}/edit'),
        ];
    }
}
