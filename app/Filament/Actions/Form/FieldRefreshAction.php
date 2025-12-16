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
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Set;
<<<<<<< HEAD
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Export\ExportXlsByCollection;
use Modules\Xot\Actions\GetTransKeyAction;
use Webmozart\Assert\Assert;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

class FieldRefreshAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
<<<<<<< HEAD
            ->action(function ($record, Set $set): void {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            ->action(function ($record, Set $set): void {
            ->action(function ($record, Set $set): void {
        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
            ->action(function ($state, Set $set, $record) {
            ->action(function ($state, $set, $record) {
<<<<<<< HEAD
            ->action(function ($state, $set, $record): void {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record): void {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record): void {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record) {
            ->action(function ($state, $set, $record): void {
            ->action(function ($state, $set, $record) {
=======
>>>>>>> 53d6a6ba (.)
=======
            ->action(function ($state, $set, $record): void {
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            ->action(function ($record, Set $set): void {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                $name = $this->getName();
                if ($name === null) {
                    return;
                }

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
<<<<<<< HEAD
                $method = 'get' . Str::studly($name) . '';
                $method = 'get'.Str::studly($name).'';
                $method = 'get' . Str::studly($name) . '';
                $method = 'get'.Str::studly($name).'';
                $method = 'get' . Str::studly($name) . '';
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato ' . $name)
                    ->body('vecchio valore: ' . $state . ' nuovo valore: ' . $value)
                $method = 'get'.Str::studly($name).'';
<<<<<<< HEAD
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
<<<<<<< HEAD
                $method = 'get'.Str::studly($name).'';
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
=======
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 5cf46378 (.)

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
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                    ->success()
                    ->send();
            });
    }

<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): ?string
<<<<<<< HEAD
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return 'field_refresh';
    }
}
