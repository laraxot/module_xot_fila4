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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
            ->tooltip('sanitize')
            ->icon('heroicon-o-shield-exclamation')
=======
=======
>>>>>>> 300ef70 (.)
            ->tooltip('sanitize')
            ->icon('heroicon-o-shield-exclamation')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            ->action(function (ListRecords $livewire): void {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
            ->action(function (ListRecords $livewire) {
<<<<<<< HEAD
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
=======
>>>>>>> 53d6a6ba (.)
=======
            ->action(function (ListRecords $livewire): void {
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
                if (! is_iterable($rows)) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                if (! is_iterable($rows)) {
=======
                if (!is_iterable($rows)) {
>>>>>>> 5a14301c (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> 3fbbf1f5 (.)
=======
                if (!is_iterable($rows)) {
=======
                if (!is_iterable($rows)) {
>>>>>>> 399f46d3 (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> 17684f52 (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> 399f46d3 (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
                if (! is_iterable($rows)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                if (! is_iterable($rows)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                if (!is_iterable($rows)) {
=======
                if (! is_iterable($rows)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                if (!is_iterable($rows)) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
                if (!is_iterable($rows)) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
                if (!is_iterable($rows)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                if (!is_iterable($rows)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                if (! is_iterable($rows)) {
>>>>>>> 53d6a6ba (.)
=======
=======
                if (!is_iterable($rows)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                        if (! is_string($field)) {
                            continue;
                        }

                        $item = $row->{$field};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));

>>>>>>> ab8cc3f3 (.)
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
>>>>>>> f1d4085 (.)
=======
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
                        Assert::string($item = $row->{$field}, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        if (! is_string($field)) {
                            continue;
                        }

                        $item = $row->{$field};
                        Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));

>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a6ef6dc7 (.)
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
>>>>>>> d2b0a27 (.)
=======
                        Assert::string($item = $row->{$field}, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                        $string = app(SanitizeAction::class)->execute($item);
                        if ($string !== $item) {
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
                    ->title(''.$c.' record sanitized')
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
                    ->title(''.$c.' record sanitized')
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 5a14301c (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 3fbbf1f5 (.)
=======
                    ->title('' . $c . ' record sanitized')
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 399f46d3 (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 17684f52 (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 399f46d3 (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
                    ->title(''.$c.' record sanitized')
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                    ->title(''.$c.' record sanitized')
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                    ->title('' . $c . ' record sanitized')
=======
                    ->title(''.$c.' record sanitized')
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                    ->title(''.$c.' record sanitized')
>>>>>>> 53d6a6ba (.)
=======
=======
                    ->title('' . $c . ' record sanitized')
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
    public static function getDefaultName(): ?string
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): null|string
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 17684f52 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
    public static function getDefaultName(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public static function getDefaultName(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static function getDefaultName(): ?string
>>>>>>> 53d6a6ba (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    {
        return 'sanitize-fields-header';
    }
}
