<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Tables\Columns\Column;
=======
use Filament\Tables\Columns\Column;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
>>>>>>> 5a14301c (.)
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
            'created_at' => TextColumn::make('created_at')->dateTime(),
            'updated_at' => TextColumn::make('updated_at')->dateTime(),
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
                ->url(fn($record): string => route('filament.resources.' . $this->getResourceSlug() . '.edit', [
>>>>>>> 5a14301c (.)
                    'record' => $record,
                ])),
            'delete' => Action::make('delete')
                ->label('Elimina')
<<<<<<< HEAD
                ->action(fn ($record) => $record->delete())
=======
                ->action(fn($record) => $record->delete())
>>>>>>> 5a14301c (.)
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get the table bulk actions.
     *
     * @return array<string, BulkAction>
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => BulkAction::make('delete')
                ->label('Elimina selezionati')
<<<<<<< HEAD
                ->action(fn ($records) => $records->each->delete())
=======
                ->action(fn($records) => $records->each->delete())
>>>>>>> 5a14301c (.)
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get the resource slug.
<<<<<<< HEAD
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
