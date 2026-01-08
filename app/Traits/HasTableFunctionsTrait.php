<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 399f46d3 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> ca9324a4 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
use Filament\Tables\Columns\TextColumn;

trait HasTableFunctionsTrait
{
    /**
     * Get the table columns for the list view.
     *
     * @return array<string, Column>
     */
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id'),
            'name' => TextColumn::make('name'),
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
=======
            'created_at' => TextColumn::make('created_at')
                ->dateTime(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime(),
>>>>>>> f1d4085 (.)
=======
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        ];
    }

    /**
     * Get the table actions.
     *
     * @return array<string, Action>
     */
    public function getTableActions(): array
    {
        return [
            'edit' => Action::make('edit')
                ->label('Modifica')
<<<<<<< HEAD
                ->url(fn ($record): string => route('filament.resources.'.$this->getResourceSlug().'.edit', [
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
                ->url(fn ($record): string => route('filament.resources.'.$this->getResourceSlug().'.edit', [
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 9db27d12 (.)
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
                ->url(fn ($record): string => route('filament.resources.'.$this->getResourceSlug().'.edit', [
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                ->url(fn ($record): string => route('filament.resources.'.$this->getResourceSlug().'.edit', [
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
                ->url(fn ($record): string => route('filament.resources.'.$this->getResourceSlug().'.edit', [
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                    'record' => $record,
                ])),
            'delete' => Action::make('delete')
                ->label('Elimina')
<<<<<<< HEAD
                ->action(fn ($record) => $record->delete())
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
                ->action(fn ($record) => $record->delete())
=======
                ->action(fn($record) => $record->delete())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                ->action(fn($record) => $record->delete())
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
                ->action(fn ($record) => $record->delete())
=======
<<<<<<< HEAD
                ->action(fn ($record) => $record->delete())
=======
                ->action(fn($record) => $record->delete())
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                ->url(fn ($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', ['record' => $record])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn ($record) => $record->delete())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
                    'record' => $record,
                ])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn($record) => $record->delete())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
                ->url(fn ($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', ['record' => $record])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn ($record) => $record->delete())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
                    'record' => $record,
                ])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn($record) => $record->delete())
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->action(fn ($record) => $record->delete())
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get the table bulk actions.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
=======
     * @return array<string, BulkAction>
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
     * @return array<string, BulkAction>
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => BulkAction::make('delete')
                ->label('Elimina selezionati')
<<<<<<< HEAD
                ->action(fn ($records) => $records->each->delete())
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
                ->action(fn ($records) => $records->each->delete())
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 5a14301c (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 3fbbf1f5 (.)
=======
                ->action(fn($records) => $records->each->delete())
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 399f46d3 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->action(fn($records) => $records->each->delete())
=======
                ->action(fn ($records) => $records->each->delete())
>>>>>>> a12f125f4a (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> b93ef594b4 (.)
=======
                ->action(fn ($records) => $records->each->delete())
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> ca9324a4 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
                ->action(fn ($records) => $records->each->delete())
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                ->action(fn ($records) => $records->each->delete())
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                ->action(fn($records) => $records->each->delete())
=======
                ->action(fn ($records) => $records->each->delete())
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> ca9324a4 (.)
=======
                ->action(fn($records) => $records->each->delete())
=======
                ->action(fn ($records) => $records->each->delete())
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                ->action(fn ($records) => $records->each->delete())
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get the resource slug.
     */
    protected function getResourceSlug(): string
    {
        // Questa funzione dovrebbe essere sovrascritta nelle classi che utilizzano il trait
        return 'default';
    }
}
