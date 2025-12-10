<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
// use Filament\Tables\Actions\Action;
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
<<<<<<< HEAD
=======
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            ->tooltip('sanitize')
            ->icon('heroicon-o-shield-exclamation')
            ->action(function (ListRecords $livewire): void {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire): void {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire): void {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            
            ->tooltip('sanitize')
            ->icon('heroicon-o-shield-exclamation')
            ->action(function (ListRecords $livewire): void {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire): void {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire): void {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
                $resource = $livewire->getResource();
                $modelClass = $resource::getModel();
                // @phpstan-ignore staticMethod.nonObject
                $rows = $modelClass::get();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
<<<<<<< HEAD
                if (! is_iterable($rows)) {
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> ca9324a4 (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
                if (!is_iterable($rows)) {
=======
                if (! is_iterable($rows)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (! is_iterable($rows)) {
                if (!is_iterable($rows)) {
                if (!is_iterable($rows)) {
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
                if (!is_iterable($rows)) {
=======
                if (! is_iterable($rows)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                if (!is_iterable($rows)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
                    $rows = [];
                }
                $c = 0;
                foreach ($rows as $row) {
                    Assert::isInstanceOf($row, Model::class);
                    $save = false;
                    foreach ($this->fields as $field) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
                        $fieldName = is_string($field) ? $field : (string) $field;
                        $item = $row->{$fieldName};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                            $row->{$fieldName} = $string;
                            $save = true;
                            $c++;
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field});
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string != $item) {
<<<<<<< HEAD
=======
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
>>>>>>> 399f46d3 (.)
=======
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
>>>>>>> ca9324a4 (.)
                            $row->{$field} = $string;
                            $save = true;
                            ++$c;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
=======
                        Assert::string($item = $row->{$field});
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string != $item) {
>>>>>>> f1d4085 (.)
=======
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
>>>>>>> 73eab74 (.)
                            $row->{$field} = $string;
                            $save = true;
                            ++$c;
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field});
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string != $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                            $row->{$field} = $string;
                            $save = true;
                            ++$c;
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        if (! is_string($field)) {
                            continue;
                        }

                        $item = $row->{$field};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));

                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        if (! is_string($field)) {
                            continue;
                        }

                        $item = $row->{$field};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));

                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        $fieldName = is_string($field) ? $field : (string) $field;
                        $item = $row->{$fieldName};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        $fieldName = is_string($field) ? $field : (string) $field;
                        $item = $row->{$fieldName};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        $fieldName = is_string($field) ? $field : (string) $field;
                        $item = $row->{$fieldName};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        $fieldName = is_string($field) ? $field : (string) $field;
                        $item = $row->{$fieldName};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                            $row->{$field} = $string;
                            $save = true;
                            ++$c;
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                            $row->{$field} = $string;
                            $save = true;
                            ++$c;
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
                        Assert::string($item = $row->{$field});
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string != $item) {
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
<<<<<<< HEAD
                    ->title(''.$c.' record sanitized')
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> ca9324a4 (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
                    ->title('' . $c . ' record sanitized')
=======
                    ->title(''.$c.' record sanitized')
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title(''.$c.' record sanitized')
                    ->title('' . $c . ' record sanitized')
                    ->title('' . $c . ' record sanitized')
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
                    ->title('' . $c . ' record sanitized')
=======
                    ->title(''.$c.' record sanitized')
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    {
        return 'sanitize-fields-header';
    }
}
