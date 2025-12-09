<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> ed734516 (.)
=======
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> ed734516 (.)
=======
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
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
            'created_at' => TextColumn::make('created_at')
                ->dateTime(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime(),
>>>>>>> f1d4085 (.)
=======
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
>>>>>>> 5a14301c (.)
                    'record' => $record,
                ])),
            'delete' => Action::make('delete')
                ->label('Elimina')
<<<<<<< HEAD
<<<<<<< HEAD
                ->action(fn ($record) => $record->delete())
=======
                ->action(fn($record) => $record->delete())
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
                ->url(fn ($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', ['record' => $record])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn ($record) => $record->delete())
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
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
                    'record' => $record,
                ])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn($record) => $record->delete())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
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
                ->url(fn ($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', ['record' => $record])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn ($record) => $record->delete())
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
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
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> f1d4085 (.)
=======
     * @return array<string, BulkAction>
>>>>>>> 73eab74 (.)
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => BulkAction::make('delete')
                ->label('Elimina selezionati')
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
                ->action(fn($records) => $records->each->delete())
=======
                ->action(fn ($records) => $records->each->delete())
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get the resource slug.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    protected function getResourceSlug(): string
    {
        // Questa funzione dovrebbe essere sovrascritta nelle classi che utilizzano il trait
        return 'default';
    }
}
