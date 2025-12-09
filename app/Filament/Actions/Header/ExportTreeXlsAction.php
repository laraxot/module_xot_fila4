<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
<<<<<<< HEAD
<<<<<<< HEAD
// use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
=======
=======
>>>>>>> 5a14301c (.)
// use Filament\Tables\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
use Filament\Actions\Action;
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)

            
            ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
=======
            ->action(static function (Page $livewire, Model $record, $data) {
>>>>>>> ed734516 (.)
=======
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
>>>>>>> 399f46d3 (.)
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
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
                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
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
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    Assert::isArray($fields);
                }

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
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
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> f1d4085 (.)
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
    {
        return 'export_tree_xls';
    }
}
