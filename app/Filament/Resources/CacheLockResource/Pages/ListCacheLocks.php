<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\CacheLockResource\Pages;

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
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\CacheLockResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Override;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
use Override;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\CacheLockResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
=======
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\CacheLockResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
class ListCacheLocks extends XotBaseListRecords
{
    protected static string $resource = CacheLockResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
    public function getTableColumns(): array
    {
        return [
            'key' => TextColumn::make('key')
                ->searchable()
                ->sortable()
                ->wrap(),
            'owner' => TextColumn::make('owner')
                ->searchable()
                ->sortable()
                ->wrap(),
<<<<<<< HEAD
<<<<<<< HEAD
            'expiration' => TextColumn::make('expiration')->numeric()->sortable(),
=======
            'expiration' => TextColumn::make('expiration')
                ->numeric()
                ->sortable(),
>>>>>>> f1d4085 (.)
=======
            'expiration' => TextColumn::make('expiration')->numeric()->sortable(),
>>>>>>> 73eab74 (.)
        ];
    }
}
