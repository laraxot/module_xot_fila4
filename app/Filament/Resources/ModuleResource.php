<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Select;
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Select;
=======
>>>>>>> ab8cc3f3 (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Models\Module;
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\Xot\Filament\Resources\ModuleResource\Pages;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
use Modules\Xot\Models\Module;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;




>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Filament\Schemas\Components\Component;
use Override;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Filament\Forms;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Models\Module;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Modules\Xot\Models\Module;
use Override;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\Xot\Filament\Resources\ModuleResource\Pages;
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
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> ce6fc085 (.)
use Modules\Xot\Models\Module;




<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





class ModuleResource extends XotBaseResource
{
    protected static ?string $model = Module::class;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Component;
use Override;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\ListModules;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\CreateModule;
use Modules\Xot\Filament\Resources\ModuleResource\Pages\EditModule;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use \Filament\Forms\Forms\Components\IconPicker;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Modules\Xot\Filament\Resources\ModuleResource\Pages;
use \Filament\Forms\Forms\Components\IconPicker;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Modules\Xot\Filament\Resources\ModuleResource\Pages;
=======
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\Module;

class ModuleResource extends XotBaseResource
{
    protected static null|string $model = Module::class;

    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
    #[Override]
    #[Override]
    /**
     * @return array<string, \Filament\Schemas\Components\Component>
     */
    #[Override]
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
use Modules\Xot\Models\Module;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





class ModuleResource extends XotBaseResource
{
    protected static ?string $model = Module::class;

    /**
     * @return array<string, Forms\Components\Component>
     */
<<<<<<< HEAD
=======
    /**
     * @return array<string, \Filament\Schemas\Components\Component>
     */
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
>>>>>>> ab8cc3f3 (.)
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required(),
            'description' => TextInput::make('description'),
            'icon' => Select::make('icon')->options([]),
            'icon' => IconPicker::make('icon'),
            'icon' => IconPicker::make('icon'),
            'icon' => IconPicker::make('icon'),
            'icon' => IconPicker::make('icon'),
            'icon' => Select::make('icon')->options([]),
            'icon' => IconPicker::make('icon'),
            'icon' => IconPicker::make('icon'),
            'icon' => IconPicker::make('icon'),
            'icon' => IconPicker::make('icon'),
            'icon' => IconPicker::make('icon'),
            'priority' => TextInput::make('priority'),
            'status' => Toggle::make('status'),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
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
    public static function getPages(): array
    {
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
    public static function getPages(): array
    {
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
        return [
            'index' => ListModules::route('/'),
            'create' => CreateModule::route('/create'),
            'edit' => EditModule::route('/{record}/edit'),
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
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        ];
    }
}
