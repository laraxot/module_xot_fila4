<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
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
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
>>>>>>> a12f125f4a (.)
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Tables\Columns\TextColumn;

trait HasTableFunctionsTrait
{
    /**
     * Get the table columns for the list view.
     *
<<<<<<< HEAD
     * @return array<string, Column>
=======
<<<<<<< HEAD
     * @return array<string, Column>
=======
     * @return array<string, \Filament\Tables\Columns\Column>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id'),
            'name' => TextColumn::make('name'),
<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
=======
=======
>>>>>>> origin/develop
            'created_at' => TextColumn::make('created_at')
                ->dateTime(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }

    /**
     * Get the table actions.
     *
<<<<<<< HEAD
     * @return array<string, Action>
=======
<<<<<<< HEAD
     * @return array<string, Action>
=======
     * @return array<string, \Filament\Tables\Actions\Action>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableActions(): array
    {
        return [
            'edit' => Action::make('edit')
                ->label('Modifica')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
                    'record' => $record,
                ])),
            'delete' => Action::make('delete')
                ->label('Elimina')
                ->action(fn($record) => $record->delete())
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
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get the table bulk actions.
     *
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
=======
     * @return array<string, \Filament\Actions\BulkAction>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, BulkAction>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, \Filament\Tables\Actions\BulkAction>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => BulkAction::make('delete')
                ->label('Elimina selezionati')
<<<<<<< HEAD
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
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get the resource slug.
     *
     * @return string
     */
    protected function getResourceSlug(): string
    {
        // Questa funzione dovrebbe essere sovrascritta nelle classi che utilizzano il trait
        return 'default';
    }
}
