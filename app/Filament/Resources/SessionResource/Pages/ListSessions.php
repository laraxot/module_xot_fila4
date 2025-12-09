<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\SessionResource\Pages;

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
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
=======
use Override;
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
use Override;
>>>>>>> 3310e9c6 (.)
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\SessionResource;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)

/**
 * @see SessionResource
 */
class ListSessions extends XotBaseListRecords
{
    protected static string $resource = SessionResource::class;

    #[Override]
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getTableColumns()),
        ];
    }

    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->label('ID'),
            'user_id' => TextColumn::make('user_id')
                ->sortable()
                ->searchable()
                ->label('User ID'),
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
            'user_agent' => TextColumn::make('user_agent')
                ->searchable()
                ->wrap()
                ->label('User Agent'),
            'payload' => TextColumn::make('payload')
                ->searchable()
                ->wrap()
                ->label('Payload'),
            'last_activity' => TextColumn::make('last_activity')
                ->dateTime()
                ->sortable()
                ->label('Last Activity'),
        ];
    }
}
