<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Form;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;

class FieldRefreshAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
            ->action(function ($state, $set, $record): void {
                $name = $this->getName();
                if ($name === null) {
                    return;
                }

                $method = 'get'.Str::studly($name).'';
<<<<<<< HEAD
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
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
                    ->success()
                    ->send();
            });
    }

    public static function getDefaultName(): ?string
    {
        return 'field_refresh';
    }
}
