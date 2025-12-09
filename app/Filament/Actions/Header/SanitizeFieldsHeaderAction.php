<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
<<<<<<< HEAD
// use Filament\Actions\Action;
=======
// use Filament\Tables\Actions\Action;
>>>>>>> 5a14301c (.)
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\String\SanitizeAction;
use Webmozart\Assert\Assert;

class SanitizeFieldsHeaderAction extends Action
{
    public array $fields = [];

    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            ->tooltip('sanitize')
            ->icon('heroicon-o-shield-exclamation')
<<<<<<< HEAD
            ->action(function (ListRecords $livewire): void {
=======
            ->action(function (ListRecords $livewire) {
>>>>>>> 5a14301c (.)
                $resource = $livewire->getResource();
                $modelClass = $resource::getModel();
                // @phpstan-ignore staticMethod.nonObject
                $rows = $modelClass::get();
<<<<<<< HEAD
<<<<<<< HEAD
                if (! is_iterable($rows)) {
=======
                if (!is_iterable($rows)) {
>>>>>>> 5a14301c (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> 3fbbf1f5 (.)
                    $rows = [];
                }
                $c = 0;
                foreach ($rows as $row) {
                    Assert::isInstanceOf($row, Model::class);
                    $save = false;
                    foreach ($this->fields as $field) {
<<<<<<< HEAD
<<<<<<< HEAD
                        $fieldName = is_string($field) ? $field : (string) $field;
                        $item = $row->{$fieldName};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                            $row->{$fieldName} = $string;
                            $save = true;
                            $c++;
=======
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
=======
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
>>>>>>> 3fbbf1f5 (.)
                            $row->{$field} = $string;
                            $save = true;
                            ++$c;
>>>>>>> 5a14301c (.)
                        }
                    }
                    if ($save) {
                        $row->save();
                    }
                }
                Notification::make()
<<<<<<< HEAD
<<<<<<< HEAD
                    ->title(''.$c.' record sanitized')
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 5a14301c (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 3fbbf1f5 (.)
                    ->success()
                    ->send();
            });
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
    {
        return 'sanitize-fields-header';
    }
}
