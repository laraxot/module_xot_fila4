<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
// use Filament\Tables\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
use Filament\Actions\Action;
// use Filament\Tables\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Export\ExportXlsByCollection;
use Modules\Xot\Actions\GetTransKeyAction;
use Modules\Xot\Contracts\HasRecursiveRelationshipsContract;
use Webmozart\Assert\Assert;

/**
 * Undocumented class.
 *
 * @property Model $record
 */
class ExportTreeXlsAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            ->tooltip(__('xot::actions.export_xls'))
            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (Page $livewire, Model $record, $_data) {
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 88ea7103 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';

            
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';

            
            ->tooltip(__('xot::actions.export_xls'))
            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (Page $livewire, Model $record, $_data) {
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

            
            ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
<<<<<<< HEAD
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (Page $livewire, Model $record, $data) {
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
=======
>>>>>>> 399f46d3 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 218dfed3 (.)
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';
                // $query = $livewire->getFilteredTableQuery(); // ->getQuery(); // Staudenmeir\LaravelCte\Query\Builder
                // $rows = $query->get();
                Assert::implementsInterface($record, HasRecursiveRelationshipsContract::class);
                $rows = $record->descendantsAndSelf;
                Assert::isInstanceOf($rows, Collection::class);
                Assert::isInstanceOf($rows, Collection::class);
                Assert::isInstanceOf($rows, Collection::class);
                $resource = $livewire->getResource();
                $fields = [];
                if (method_exists($resource, 'getXlsFields')) {
                    $fields = $resource::getXlsFields($tableFilters);
                    // Convertiamo tutti i valori a stringhe
<<<<<<< HEAD
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
                    Assert::isArray($fields);
                }

                /** @var array<int, string> $fields */
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                }

                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
                    Assert::isArray($fields);
                }

                /** @var array<int, string> $fields */
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                }

                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                }

                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
                /** @var array<int, string> $typedFields */
                $typedFields = array_values($fields);

                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $typedFields);
            });
    }

    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                }

            });
    }

    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    $fields = array_map(fn ($field) => is_string($field) ? $field : (string) $field, (array) $fields);
                    Assert::isArray($fields);
                }

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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
                }

                /** @var array<int, string> $fields */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
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
=======
>>>>>>> 88ea7103 (.)
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : (string) $field, (array) $fields);
>>>>>>> f1d4085 (.)
=======
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
>>>>>>> 73eab74 (.)
                    Assert::isArray($fields);
                }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 2f3197ab (.)
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
            });
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
<<<<<<< HEAD
=======
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
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
<<<<<<< HEAD
=======
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
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
            });
    }

    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
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
        return 'export_tree_xls';
    }
}
