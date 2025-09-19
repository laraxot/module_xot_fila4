<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\CacheLockResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Override;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\CacheLockResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

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
