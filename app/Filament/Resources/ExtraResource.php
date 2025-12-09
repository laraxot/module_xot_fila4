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
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
=======
>>>>>>> 3fbbf1f5 (.)
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\CreateExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\EditExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\ListExtras;
use Modules\Xot\Models\Extra;
use Override;
<<<<<<< HEAD

class ExtraResource extends XotBaseResource
{
    protected static ?string $model = Extra::class;
=======
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> 3fbbf1f5 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
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
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> ca9324a4 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 3fbbf1f5 (.)
use Modules\Xot\Filament\Resources\ExtraResource\Pages\ListExtras;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\CreateExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\EditExtra;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\ExtraResource\Pages;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\Extra;

class ExtraResource extends XotBaseResource
{
    protected static null|string $model = Extra::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
use Modules\Xot\Models\Extra;




=======
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\Extra;

class ExtraResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static ?string $model = Extra::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $model = Extra::class;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\ExtraResource\Pages;
=======
=======
>>>>>>> ed734516 (.)
use Modules\Xot\Models\Extra;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





class ExtraResource extends XotBaseResource
{
    protected static ?string $model = Extra::class;
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)

    /**
     * Get the form schema for the resource.
     *
     * @return array<string, Component>
     */
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'id' => TextInput::make('id')->required()->maxLength(36),
            'post_type' => TextInput::make('post_type')->required()->maxLength(255),
            'post_id' => TextInput::make('post_id')->required()->numeric(),
            'value' => KeyValue::make('value')
                ->keyLabel('Chiave')
                ->valueLabel('Valore')
                ->reorderable()
                ->columnSpanFull(),
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
            'index' => ListExtras::route('/'),
            'create' => CreateExtra::route('/create'),
            'edit' => EditExtra::route('/{record}/edit'),
        ];
    }
}
