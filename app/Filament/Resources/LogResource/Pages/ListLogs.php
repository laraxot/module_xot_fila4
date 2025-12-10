<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Override;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
use Filament\Tables;
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 300ef70 (.)
use Filament\Actions\BulkAction;
>>>>>>> a6ef6dc7 (.)
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
<<<<<<< HEAD
use Filament\Actions\ViewAction;
=======
use Filament\Tables;
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Xot\Filament\Resources\LogResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Filament\Actions\BulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\LogResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Filament\Tables;
use Filament\Tables;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\LogResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
>>>>>>> 551c768c4 (.)

/**
 * @see LogResource
 */
class ListLogs extends XotBaseListRecords
{
    protected static string $resource = LogResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
            'message' => TextColumn::make('message')
                ->searchable()
                ->wrap()
                ->label('Message'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
            'level' => TextColumn::make('level')
                ->searchable()
                ->sortable()
                ->label('Level'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
            'level_name' => TextColumn::make('level_name')
                ->searchable()
                ->sortable()
                ->label('Level Name'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
            'context' => TextColumn::make('context')
                ->searchable()
                ->wrap()
                ->label('Context'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->label('Created At'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    #[Override]
    /**
     * @return array<string, mixed>
     */
    public function getTableFilters(): array
    {
        return [
            'level_name' => SelectFilter::make('level_name')->options([
                'emergency' => 'Emergency',
                'alert' => 'Alert',
                'critical' => 'Critical',
                'error' => 'Error',
                'warning' => 'Warning',
                'notice' => 'Notice',
                'info' => 'Info',
                'debug' => 'Debug',
            ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
    public function getTableFilters(): array
    {
        return [
            'level_name' => SelectFilter::make('level_name')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function getTableFilters(): array
    {
        return [
            'level_name' => Tables\Filters\SelectFilter::make('level_name')
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
                ->options([
                    'emergency' => 'Emergency',
                    'alert' => 'Alert',
                    'critical' => 'Critical',
                    'error' => 'Error',
                    'warning' => 'Warning',
                    'notice' => 'Notice',
                    'info' => 'Info',
                    'debug' => 'Debug',
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    #[Override]
    public function getTableFilters(): array
    {
        return [
            'level_name' => SelectFilter::make('level_name')->options([
                'emergency' => 'Emergency',
                'alert' => 'Alert',
                'critical' => 'Critical',
                'error' => 'Error',
                'warning' => 'Warning',
                'notice' => 'Notice',
                'info' => 'Info',
                'debug' => 'Debug',
            ]),
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
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        ];
    }

    /**
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
    #[Override]
     * @return array<string, Action|ActionGroup>
     */
    #[Override]
    #[Override]
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
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
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
    #[Override]
    /**
     * @return array<string, mixed>
     */
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'delete' => DeleteAction::make(),
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
     * @return array<string, BulkAction>
     */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
<<<<<<< HEAD
    #[Override]
     * @return array<string, BulkAction>
     */
    #[Override]
     * @return array<string, BulkAction>
     */
    #[Override]
     * @return array<string, Tables\Actions\BulkAction>
     */
=======
=======
     * @return array<string, \Filament\Actions\BulkAction>
     */
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
    #[Override]
=======
     * @return array<string, \Filament\Actions\BulkAction>
     */
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
    /**
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
     * @return array<string, BulkAction>
     */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, Tables\Actions\BulkAction>
     */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @return array<string, BulkAction>
     */
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
