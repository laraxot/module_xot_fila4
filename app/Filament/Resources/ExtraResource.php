<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\CreateExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\EditExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\ListExtras;
use Modules\Xot\Models\Extra;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
use Filament\Schemas\Components\Component;
use Override;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\ListExtras;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\CreateExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\EditExtra;
>>>>>>> a6ef6dc7 (.)
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\CreateExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\EditExtra;
use Modules\Xot\Filament\Resources\ExtraResource\Pages\ListExtras;
use Modules\Xot\Models\Extra;
use Override;

class ExtraResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static ?string $model = Extra::class;
=======
    protected static null|string $model = Extra::class;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Models\Extra;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;




>>>>>>> d2b0a27 (.)

class ExtraResource extends XotBaseResource
{
    protected static ?string $model = Extra::class;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

    /**
     * Get the form schema for the resource.
     *
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
     * @return array<string, Component>
     */
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'id' => TextInput::make('id')->required()->maxLength(36),
            'post_type' => TextInput::make('post_type')->required()->maxLength(255),
            'post_id' => TextInput::make('post_id')->required()->numeric(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * @return array<string, \Filament\Schemas\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'id' => TextInput::make('id')
                ->required()
                ->maxLength(36),

            'post_type' => TextInput::make('post_type')
                ->required()
                ->maxLength(255),

            'post_id' => TextInput::make('post_id')
                ->required()
                ->numeric(),

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            'value' => KeyValue::make('value')
                ->keyLabel('Chiave')
                ->valueLabel('Valore')
                ->reorderable()
                ->columnSpanFull(),
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
            'index' => ListExtras::route('/'),
            'create' => CreateExtra::route('/create'),
            'edit' => EditExtra::route('/{record}/edit'),
        ];
    }
}
