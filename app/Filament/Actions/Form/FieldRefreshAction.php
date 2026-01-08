<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Form;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Set;

class FieldRefreshAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(function ($record, Set $set): void {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
            ->action(function ($state, Set $set, $record) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
            ->action(function ($state, $set, $record) {
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
            ->action(function ($state, $set, $record): void {
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                $name = $this->getName();
                if ($name === null) {
                    return;
                }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
                if (! is_object($record) && ! is_string($record)) {
                    Notification::make()
                        ->title('Errore')
                        ->body('Record non valido')
                        ->danger()
                        ->send();

                    return;
                }

                Notification::make()
                    ->title('Valore ricalcolato')
                    ->body('Il valore del campo è stato ricalcolato con successo')
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
                $method = 'get' . Str::studly($name) . '';
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato ' . $name)
                    ->body('vecchio valore: ' . $state . ' nuovo valore: ' . $value)
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
                $method = 'get'.Str::studly($name).'';
<<<<<<< HEAD
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======

                if (! is_object($record) || ! method_exists($record, $method)) {
                    return;
                }

                $callable = [$record, $method];
                if (! is_callable($callable)) {
                    return;
                }

                $value = call_user_func($callable);
                if (is_callable($set)) {
                    $set($name, $value);
                }

                $oldValue = is_scalar($state) ? (string) $state : 'non-scalar';
                $newValue = is_scalar($value) ? (string) $value : 'non-scalar';

                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$oldValue.' nuovo valore: '.$newValue)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                    ->success()
                    ->send();
            });
    }

    public static function getDefaultName(): ?string
    {
        return 'field_refresh';
    }
}
