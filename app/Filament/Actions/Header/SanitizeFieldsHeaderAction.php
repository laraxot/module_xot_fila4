<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Actions\Action;
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            ->tooltip('sanitize')
            ->icon('heroicon-o-shield-exclamation')
            ->action(function (ListRecords $livewire) {
                $resource = $livewire->getResource();
                $modelClass = $resource::getModel();
                // @phpstan-ignore staticMethod.nonObject
                $rows = $modelClass::get();
<<<<<<< HEAD
                if (!is_iterable($rows)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (!is_iterable($rows)) {
=======
                if (! is_iterable($rows)) {
>>>>>>> a12f125f4a (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> b93ef594b4 (.)
=======
                if (! is_iterable($rows)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                    $rows = [];
                }
                $c = 0;
                foreach ($rows as $row) {
                    Assert::isInstanceOf($row, Model::class);
                    $save = false;
                    foreach ($this->fields as $field) {
<<<<<<< HEAD
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
=======
                        Assert::string($item = $row->{$field});
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string != $item) {
>>>>>>> a12f125f4a (.)
=======
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
>>>>>>> b93ef594b4 (.)
=======
                        Assert::string($item = $row->{$field});
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string != $item) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                            $row->{$field} = $string;
                            $save = true;
                            ++$c;
                        }
                    }
                    if ($save) {
                        $row->save();
                    }
                }
                Notification::make()
<<<<<<< HEAD
                    ->title('' . $c . ' record sanitized')
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    ->title('' . $c . ' record sanitized')
=======
                    ->title(''.$c.' record sanitized')
>>>>>>> a12f125f4a (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> b93ef594b4 (.)
=======
                    ->title(''.$c.' record sanitized')
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
    public static function getDefaultName(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> a12f125f4a (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public static function getDefaultName(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return 'sanitize-fields-header';
    }
}
