<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\SessionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Override;
>>>>>>> 300ef70 (.)
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\SessionResource;
use Override;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
/**
 * @see SessionResource
 */
class ListSessions extends XotBaseListRecords
{
    protected static string $resource = SessionResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    /**
     * @return array<string, mixed>
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    #[Override]
>>>>>>> 300ef70 (.)
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getTableColumns()),
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
    /**
     * @return array<string, mixed>
     */
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->label('ID'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            'user_id' => TextColumn::make('user_id')
                ->sortable()
                ->searchable()
                ->label('User ID'),
<<<<<<< HEAD
<<<<<<< HEAD
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
=======

            'ip_address' => TextColumn::make('ip_address')
                ->searchable()
                ->label('IP Address'),

>>>>>>> f1d4085 (.)
=======
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
>>>>>>> 300ef70 (.)
            'user_agent' => TextColumn::make('user_agent')
                ->searchable()
                ->wrap()
                ->label('User Agent'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            'payload' => TextColumn::make('payload')
                ->searchable()
                ->wrap()
                ->label('Payload'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            'last_activity' => TextColumn::make('last_activity')
                ->dateTime()
                ->sortable()
                ->label('Last Activity'),
        ];
    }
}
