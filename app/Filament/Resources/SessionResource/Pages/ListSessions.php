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
=======
>>>>>>> 399f46d3 (.)
=======
use Override;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
use Override;
use Override;
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
use Override;
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
use Override;
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\SessionResource;
use Override;

use Override;


/**
 * @see SessionResource
 */
class ListSessions extends XotBaseListRecords
{
    protected static string $resource = SessionResource::class;

    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->label('ID'),
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            'user_id' => TextColumn::make('user_id')
                ->sortable()
                ->searchable()
                ->label('User ID'),
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

            'ip_address' => TextColumn::make('ip_address')
                ->searchable()
                ->label('IP Address'),

<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
            'ip_address' => TextColumn::make('ip_address')->searchable()->label('IP Address'),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            'user_agent' => TextColumn::make('user_agent')
                ->searchable()
                ->wrap()
                ->label('User Agent'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            'payload' => TextColumn::make('payload')
                ->searchable()
                ->wrap()
                ->label('Payload'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            'last_activity' => TextColumn::make('last_activity')
                ->dateTime()
                ->sortable()
                ->label('Last Activity'),
        ];
    }
}
