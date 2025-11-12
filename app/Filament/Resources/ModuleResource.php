<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
=======
<<<<<<< HEAD
=======
use Modules\UI\Filament\Forms\Components\IconPicker;
>>>>>>> 54cbe5d (.)
use Modules\Xot\Filament\Resources\ModuleResource\Pages;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 3df5f27e (.)
use Modules\Xot\Models\Module;
use Override;

class ModuleResource extends XotBaseResource
{
    protected static ?string $model = Module::class;

    /**
     * @return array<string, Component>
     */
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required(),
            'description' => TextInput::make('description'),
<<<<<<< HEAD
            'icon' => TextInput::make('icon'),
=======
            'icon' => IconPicker::make('icon'),
>>>>>>> 54cbe5d (.)
            'priority' => TextInput::make('priority'),
            'status' => Toggle::make('status'),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListModules::route('/'),
            'create' => CreateModule::route('/create'),
            'edit' => EditModule::route('/{record}/edit'),
        ];
    }
}
