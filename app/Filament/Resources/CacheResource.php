<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Support\Components\Component;
=======
>>>>>>> 54cbe5d (.)
use Override;
use Modules\Xot\Filament\Resources\CacheResource\Pages\ListCaches;
use Modules\Xot\Filament\Resources\CacheResource\Pages\CreateCache;
use Modules\Xot\Filament\Resources\CacheResource\Pages\EditCache;
>>>>>>> 3df5f27e (.)
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Support\Components\Component;
use Modules\Xot\Filament\Resources\CacheResource\Pages\CreateCache;
use Modules\Xot\Filament\Resources\CacheResource\Pages\EditCache;
use Modules\Xot\Filament\Resources\CacheResource\Pages\ListCaches;
use Modules\Xot\Models\Cache;
use Override;

class CacheResource extends XotBaseResource
{
    protected static ?string $model = Cache::class;

<<<<<<< HEAD
    /**
     * @return array<int, Component>
     */
=======
>>>>>>> 54cbe5d (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            TextInput::make('key')->required()->maxLength(255),
            TextInput::make('expiration')->required()->numeric(),
            KeyValue::make('value')->columnSpanFull(),
=======
            'key' => TextInput::make('key')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
            'value' => KeyValue::make('value')->columnSpanFull(),
>>>>>>> 54cbe5d (.)
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
            'index' => ListCaches::route('/'),
            'create' => CreateCache::route('/create'),
            'edit' => EditCache::route('/{record}/edit'),
        ];
    }
}
