<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\Xot\Filament\Resources\ModuleResource\Pages;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\Module;

class ModuleResource extends XotBaseResource
{
    protected static null|string $model = Module::class;

    /**
     * @return array<string, Component>
     */
    #[Override]
<<<<<<< HEAD
=======
=======
use Modules\Xot\Models\Module;




=======
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\Module;

class ModuleResource extends XotBaseResource
{
    protected static null|string $model = Module::class;

    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Models\Module;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





class ModuleResource extends XotBaseResource
{
    protected static ?string $model = Module::class;

    /**
     * @return array<string, Forms\Components\Component>
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
=======
=======
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
    public static function getRelations(): array
    {
        return [];
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public static function getPages(): array
    {
        return [
            'index' => ListModules::route('/'),
            'create' => CreateModule::route('/create'),
            'edit' => EditModule::route('/{record}/edit'),
<<<<<<< HEAD
=======
=======
    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListModules::route('/'),
            'create' => Pages\CreateModule::route('/create'),
            'edit' => Pages\EditModule::route('/{record}/edit'),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }
}
