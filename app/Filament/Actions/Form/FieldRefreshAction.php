<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Form;

use Filament\Actions\Action;
<<<<<<< HEAD

=======
use Filament\Schemas\Components\Utilities\Set;
>>>>>>> 54cbe5d (.)
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Export\ExportXlsByCollection;
use Modules\Xot\Actions\GetTransKeyAction;
use Webmozart\Assert\Assert;

class FieldRefreshAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel();
        $this->icon('heroicon-o-arrow-path')
            ->tooltip('Ricalcola valore')
<<<<<<< HEAD
            ->action(function ($state, $set, $record) {
=======
            ->action(function ($state, Set $set, $record) {
>>>>>>> 54cbe5d (.)
                $name = $this->getName();
                if ($name === null) {
                    return;
                }

                $method = 'get' . Str::studly($name) . '';
                $value = $record->$method();
                $set($name, $value);
                Notification::make()
                    ->title('Ricalcolato ' . $name)
                    ->body('vecchio valore: ' . $state . ' nuovo valore: ' . $value)
                    ->success()
                    ->send();
            });
    }

    public static function getDefaultName(): null|string
    {
        return 'field_refresh';
    }
}
