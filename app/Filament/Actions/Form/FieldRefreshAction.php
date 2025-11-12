<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace \Filament\Forms\Form;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

use function Safe\json_encode;

class FieldRefreshAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
<<<<<<< HEAD
            ->action(function ($state, Set $set, $record): void {
=======
            ->action(function ($state, $set, $record) {
>>>>>>> f1570712 (.)
                $name = $this->getName();
                if ($name === null) {
                    return;
                }

                if (! is_object($record) && ! is_string($record)) {
<<<<<<< HEAD
                    return;
                }

                $method = 'get' . Str::studly($name);

                if (! method_exists($record, $method)) {
                    return;
                }

                $value = $record->{$method}();

                $set($name, $value);

                $stateStr = match (true) {
                    is_string($state), is_numeric($state) => (string) $state,
                    is_array($state), is_object($state) => json_encode($state),
                    default => '',
                };

                $valueStr = match (true) {
                    is_string($value), is_numeric($value) => (string) $value,
                    is_array($value), is_object($value) => json_encode($value),
                    default => '',
                };

                Notification::make()
                    ->title('Ricalcolato ' . $name)
                    ->body('vecchio valore: ' . $stateStr . ' nuovo valore: ' . $valueStr)
=======
                    return;
                }

                $method = 'get'.Str::studly($name).'';

                if (! method_exists($record, $method)) {
                    return;
                }

                $value = $record->$method();

                if (! is_callable($set)) {
                    return;
                }

                $set($name, $value);

                $stateStr = is_string($state) || is_numeric($state) ? (string) $state : (is_array($state) || is_object($state) ? json_encode($state) : '');
                $valueStr = is_string($value) || is_numeric($value) ? (string) $value : (is_array($value) || is_object($value) ? json_encode($value) : '');

                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$stateStr.' nuovo valore: '.$valueStr)
>>>>>>> f1570712 (.)
                    ->success()
                    ->send();
            });
    }

    public static function getDefaultName(): ?string
    {
        return 'field_refresh';
    }
}
