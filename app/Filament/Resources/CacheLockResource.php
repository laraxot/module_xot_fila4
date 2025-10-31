<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\CreateCacheLock;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\EditCacheLock;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\ListCacheLocks;
use Modules\Xot\Models\CacheLock;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\CreateCacheLock;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\EditCacheLock;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\ListCacheLocks;
use Modules\Xot\Models\CacheLock;
use Override;

class CacheLockResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static ?string $model = CacheLock::class;
=======
    protected static null|string $model = CacheLock::class;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Models\CacheLock;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;




>>>>>>> d2b0a27 (.)

class CacheLockResource extends XotBaseResource
{
    protected static ?string $model = CacheLock::class;
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
            'key' => TextInput::make('key')->required()->maxLength(255),
            'owner' => TextInput::make('owner')->required()->maxLength(255),
            'expiration' => TextInput::make('expiration')->required()->numeric(),
        ];
    }

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
     * @return array<string, \Filament\Schemas\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'key' => TextInput::make('key')
                ->required()
                ->maxLength(255),

            'owner' => TextInput::make('owner')
                ->required()
                ->maxLength(255),

            'expiration' => TextInput::make('expiration')
                ->required()
                ->numeric(),
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
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListCacheLocks::route('/'),
            'create' => CreateCacheLock::route('/create'),
            'edit' => EditCacheLock::route('/{record}/edit'),
        ];
    }
}
