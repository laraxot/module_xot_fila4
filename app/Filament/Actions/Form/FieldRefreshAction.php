<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace \Filament\Forms\Form;

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
            ->action(function ($state, $set, $record) {
                $name = $this->getName();
                if ($name === null) {
                    return;
                }

                $method = 'get'.Str::studly($name).'';
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato '.$name)
                    ->body('vecchio valore: '.$state.' nuovo valore: '.$value)
                    ->success()
                    ->send();
            });
    }

    public static function getDefaultName(): ?string
    {
        return 'field_refresh';
    }
}
