<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
// use Filament\Tables\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> ab8cc3f3 (.)
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======

            
=======
>>>>>>> b93ef594b4 (.)
            ->tooltip(__('xot::actions.export_xls'))
            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (Page $livewire, Model $record, $_data) {
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
<<<<<<< HEAD
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> a12f125f4a (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
=======
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d1255a8 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
=======
>>>>>>> 6d1255a8 (.)
=======
=======
>>>>>>> ed734516 (.)

            
            ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
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
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ed734516 (.)
=======
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
>>>>>>> 399f46d3 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> 7131bd09 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ed734516 (.)
=======
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
>>>>>>> 399f46d3 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ed734516 (.)
=======
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
>>>>>>> 399f46d3 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> 7131bd09 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ab8cc3f3 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> b7afadf9 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> 6d1255a8 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ed734516 (.)
=======
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
>>>>>>> 399f46d3 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> 7131bd09 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ab8cc3f3 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> b7afadf9 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> 6d1255a8 (.)
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ed734516 (.)
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
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
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> 71586de2 (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7d72abc (.)
<<<<<<< HEAD
>>>>>>> 6d1255a8 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 15def8d (.)
>>>>>>> 3ae5e299 (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> 249a0067 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
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
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> 71586de2 (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7d72abc (.)
<<<<<<< HEAD
>>>>>>> 6d1255a8 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 15def8d (.)
>>>>>>> 3ae5e299 (.)
=======
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> 249a0067 (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';
                // $query = $livewire->getFilteredTableQuery(); // ->getQuery(); // Staudenmeir\LaravelCte\Query\Builder
                // $rows = $query->get();
                Assert::implementsInterface($record, HasRecursiveRelationshipsContract::class);
                $rows = $record->descendantsAndSelf;
                Assert::isInstanceOf($rows, Collection::class);
                $resource = $livewire->getResource();
                $fields = [];
                if (method_exists($resource, 'getXlsFields')) {
                    $fields = $resource::getXlsFields($tableFilters);
                    // Convertiamo tutti i valori a stringhe
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
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 3ae5e299 (.)
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
=======
=======
>>>>>>> 15def8d (.)
<<<<<<< HEAD
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
<<<<<<< HEAD
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : (string) $field, (array) $fields);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3ae5e299 (.)
=======
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
>>>>>>> 73eab74 (.)
                    Assert::isArray($fields);
>>>>>>> 7d72abc (.)
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
>>>>>>> 249a0067 (.)
=======
                    Assert::isArray($fields);
>>>>>>> 7d72abc (.)
>>>>>>> 6d1255a8 (.)
                }

                /** @var array<int, string> $fields */
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
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
=======
=======
>>>>>>> 6dcebf8a (.)
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
=======
<<<<<<< HEAD
<<<<<<< HEAD
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : (string) $field, (array) $fields);
>>>>>>> f1d4085 (.)
=======
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
                    Assert::isArray($fields);
                }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
=======
=======
>>>>>>> b7afadf9 (.)
                /** @var array<int, string> $typedFields */
                $typedFields = array_values($fields);

                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $typedFields);
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            });
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 399f46d3 (.)
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
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
=======
    public static function getDefaultName(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3310e9c6 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> 5a14301c (.)
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
                }

                /** @var array<int, string> $fields */
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
            });
    }

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
    public static function getDefaultName(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 71586de2 (.)
=======
=======
=======
>>>>>>> 15def8d (.)
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 3ae5e299 (.)
    public static function getDefaultName(): ?string
=======
=======
>>>>>>> 15def8d (.)
<<<<<<< HEAD
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7d72abc (.)
<<<<<<< HEAD
>>>>>>> 6d1255a8 (.)
=======
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 15def8d (.)
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 249a0067 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
=======
>>>>>>> b7afadf9 (.)
=======
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
>>>>>>> 71586de2 (.)
            });
    }

    public static function getDefaultName(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 7d72abc (.)
>>>>>>> 6d1255a8 (.)
=======
<<<<<<< HEAD
>>>>>>> 7d72abc (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 15def8d (.)
>>>>>>> 3ae5e299 (.)
=======
    public static function getDefaultName(): ?string
>>>>>>> 249a0067 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    {
        return 'export_tree_xls';
    }
}
