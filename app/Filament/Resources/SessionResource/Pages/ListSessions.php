<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\SessionResource\Pages;

<<<<<<< HEAD
=======
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
>>>>>>> 2f3197ab (.)
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
=======
>>>>>>> ca9324a4 (.)
=======
use Override;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\SessionResource;
use Override;

use Override;


<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
/**
 * @see SessionResource
 */
class ListSessions extends XotBaseListRecords
{
    protected static string $resource = SessionResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getTableColumns()),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->label('ID'),
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

<<<<<<< HEAD
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->label('ID'),
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            'user_id' => TextColumn::make('user_id')
                ->sortable()
                ->searchable()
                ->label('User ID'),
<<<<<<< HEAD
<<<<<<< HEAD
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
<<<<<<< HEAD
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
=======
=======
>>>>>>> 2f3197ab (.)

            'ip_address' => TextColumn::make('ip_address')
                ->searchable()
                ->label('IP Address'),

<<<<<<< HEAD
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            'user_agent' => TextColumn::make('user_agent')
                ->searchable()
                ->wrap()
                ->label('User Agent'),
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            'payload' => TextColumn::make('payload')
                ->searchable()
                ->wrap()
                ->label('Payload'),
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            'last_activity' => TextColumn::make('last_activity')
                ->dateTime()
                ->sortable()
                ->label('Last Activity'),
        ];
    }
}
