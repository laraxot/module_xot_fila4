<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
=======
>>>>>>> 3fbbf1f5 (.)
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\CreateCacheLock;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\EditCacheLock;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\ListCacheLocks;
use Modules\Xot\Models\CacheLock;
use Override;
<<<<<<< HEAD

class CacheLockResource extends XotBaseResource
{
    protected static ?string $model = CacheLock::class;
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
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\ListCacheLocks;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\CreateCacheLock;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages\EditCacheLock;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\CacheLock;

class CacheLockResource extends XotBaseResource
{
    protected static null|string $model = CacheLock::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
use Modules\Xot\Models\CacheLock;




=======
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Models\CacheLock;

class CacheLockResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static ?string $model = CacheLock::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $model = CacheLock::class;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages;
=======
=======
>>>>>>> ed734516 (.)
use Modules\Xot\Models\CacheLock;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





class CacheLockResource extends XotBaseResource
{
    protected static ?string $model = CacheLock::class;
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
>>>>>>> ed734516 (.)

    /**
     * Get the form schema for the resource.
     *
<<<<<<< HEAD
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
    public static function getPages(): array
    {
        return [
            'index' => ListCacheLocks::route('/'),
            'create' => CreateCacheLock::route('/create'),
            'edit' => EditCacheLock::route('/{record}/edit'),
        ];
    }
}
