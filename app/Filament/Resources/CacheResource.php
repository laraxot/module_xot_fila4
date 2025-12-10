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
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 249a0067 (.)
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\CacheResource\Pages\CreateCache;
use Modules\Xot\Filament\Resources\CacheResource\Pages\EditCache;
use Modules\Xot\Filament\Resources\CacheResource\Pages\ListCaches;
use Modules\Xot\Models\Cache;
use Override;

class CacheResource extends XotBaseResource
{
    protected static ?string $model = Cache::class;
=======
use Override;
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Override;
=======
use Override;
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> ca9324a4 (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
use Modules\Xot\Filament\Resources\CacheResource\Pages\ListCaches;
use Modules\Xot\Filament\Resources\CacheResource\Pages\CreateCache;
use Modules\Xot\Filament\Resources\CacheResource\Pages\EditCache;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\CacheResource\Pages;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\Cache;

class CacheResource extends XotBaseResource
{
    protected static null|string $model = Cache::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * @return array<int, \Filament\Support\Components\Component>
     */
>>>>>>> 518e053 (.)
=======
    /**
     * @return array<int, \Filament\Support\Components\Component>
     */
>>>>>>> 6163c49 (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'key' => TextInput::make('key')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
            'value' => KeyValue::make('value')->columnSpanFull(),
=======
            TextInput::make('key')->required()->maxLength(255),
            TextInput::make('expiration')->required()->numeric(),
            KeyValue::make('value')->columnSpanFull(),
>>>>>>> 518e053 (.)
=======
            TextInput::make('key')->required()->maxLength(255),
            TextInput::make('expiration')->required()->numeric(),
            KeyValue::make('value')->columnSpanFull(),
>>>>>>> 6163c49 (.)
=======
            'key' => TextInput::make('key')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
            'value' => KeyValue::make('value')->columnSpanFull(),
>>>>>>> 5a14301c (.)
=======
            'key' => TextInput::make('key')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
            'value' => KeyValue::make('value')->columnSpanFull(),
>>>>>>> 5a14301c (.)
=======
            'key' => TextInput::make('key')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
            'value' => KeyValue::make('value')->columnSpanFull(),
>>>>>>> 5a14301c (.)
=======
            'key' => TextInput::make('key')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
            'value' => KeyValue::make('value')->columnSpanFull(),
>>>>>>> 5a14301c (.)
=======
            'key' => TextInput::make('key')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
            'value' => KeyValue::make('value')->columnSpanFull(),
>>>>>>> 5a14301c (.)
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
=======
use Modules\Xot\Models\Cache;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class CacheResource extends XotBaseResource
{
    protected static ?string $model = Cache::class;

    public static function getFormSchema(): array
    {
        return [
            'key' => TextInput::make('key')
                ->required()
                ->maxLength(255),

            'expiration' => TextInput::make('expiration')
                ->required()
                ->numeric(),

            'value' => KeyValue::make('value')
                ->columnSpanFull(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListCaches::route('/'),
            'create' => CreateCache::route('/create'),
            'edit' => EditCache::route('/{record}/edit'),
        ];
    }
}
