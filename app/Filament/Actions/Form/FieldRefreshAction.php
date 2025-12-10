<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Form;

use Filament\Actions\Action;
<<<<<<< HEAD
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Set;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Set;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Filament\Schemas\Components\Utilities\Set;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Export\ExportXlsByCollection;
use Modules\Xot\Actions\GetTransKeyAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

class FieldRefreshAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop

        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
<<<<<<< HEAD
            ->action(function ($record, Set $set): void {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(function ($record, Set $set): void {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
            ->action(function ($state, Set $set, $record) {
<<<<<<< HEAD
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record): void {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record): void {
            ->action(function ($state, $set, $record) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
            ->action(function ($state, $set, $record) {
>>>>>>> 53d6a6ba (.)
=======
            ->action(function ($state, $set, $record): void {
>>>>>>> b7afadf9 (.)
=======
            ->action(function ($state, $set, $record) {
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
            ->action(function ($state, $set, $record) {
>>>>>>> 53d6a6ba (.)
=======
            ->action(function ($state, $set, $record): void {
>>>>>>> b7afadf9 (.)
=======
            ->action(function ($state, $set, $record) {
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                $name = $this->getName();
                if ($name === null) {
                    return;
                }

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
>>>>>>> laraxot/develop
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
                $method = 'get' . Str::studly($name) . '';
                $method = 'get'.Str::studly($name).'';
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                $method = 'get' . Str::studly($name) . '';
=======
                $method = 'get'.Str::studly($name).'';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
                $method = 'get' . Str::studly($name) . '';
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato ' . $name)
                    ->body('vecchio valore: ' . $state . ' nuovo valore: ' . $value)
<<<<<<< HEAD
                $method = 'get'.Str::studly($name).'';
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
                $method = 'get'.Str::studly($name).'';
                $value = $record->$method();
                $set($name, $value);
<<<<<<< HEAD
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> laraxot/develop

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
<<<<<<< HEAD
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
=======
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
=======
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                    ->success()
                    ->send();
            });
    }

<<<<<<< HEAD
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return 'field_refresh';
    }
}
