<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

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
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Modules\Xot\Models\Module;
use Override;

class ModuleResource extends XotBaseResource
{
    protected static ?string $model = Module::class;

=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Filament\Schemas\Components\Component;
use Override;
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 3310e9c6 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 5a14301c (.)
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
<<<<<<< HEAD
<<<<<<< HEAD
use \Filament\Forms\Forms\Components\IconPicker;
=======
use Modules\UI\Filament\Forms\Components\IconPicker;
>>>>>>> 5a14301c (.)
=======
use Modules\UI\Filament\Forms\Components\IconPicker;
>>>>>>> 5a14301c (.)
use Modules\Xot\Filament\Resources\ModuleResource\Pages;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\Module;

class ModuleResource extends XotBaseResource
{
    protected static null|string $model = Module::class;

    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required(),
            'description' => TextInput::make('description'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'icon' => Select::make('icon')->options([]),
=======
            'icon' => IconPicker::make('icon'),
>>>>>>> 5a14301c (.)
=======
            'icon' => IconPicker::make('icon'),
>>>>>>> 5a14301c (.)
=======
            'icon' => IconPicker::make('icon'),
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $prefix = static::class.'\\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();

        /** @var class-string<Page> $index */
        $index = $index;
        /** @var class-string<Page> $create */
        $create = $create;
        /** @var class-string<Page> $edit */
        $edit = $edit;

        return [
            'index' => $index::route('/'),
            'create' => $create::route('/create'),
            'edit' => $edit::route('/{record}/edit'),
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return [
            'index' => ListModules::route('/'),
            'create' => CreateModule::route('/create'),
            'edit' => EditModule::route('/{record}/edit'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
        ];
    }
}
