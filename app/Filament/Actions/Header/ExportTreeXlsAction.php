<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
<<<<<<< HEAD
// use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
=======
// use Filament\Tables\Actions\Action;
<<<<<<< HEAD
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
=======
<<<<<<< HEAD
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Collection;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Actions\Action;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
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

            
            ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (\Filament\Resources\Pages\Page $livewire, Model $record, $data) {
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';
                // $query = $livewire->getFilteredTableQuery(); // ->getQuery(); // Staudenmeir\LaravelCte\Query\Builder
                // $rows = $query->get();
                Assert::implementsInterface($record, HasRecursiveRelationshipsContract::class);
                $rows = $record->descendantsAndSelf;
<<<<<<< HEAD
                Assert::isInstanceOf($rows, Collection::class);
=======
<<<<<<< HEAD
                Assert::isInstanceOf($rows, Collection::class);
=======
                Assert::isInstanceOf($rows, \Illuminate\Database\Eloquent\Collection::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $resource = $livewire->getResource();
                $fields = [];
                if (method_exists($resource, 'getXlsFields')) {
                    $fields = $resource::getXlsFields($tableFilters);
                    // Convertiamo tutti i valori a stringhe
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
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : (string) $field, (array) $fields);
>>>>>>> a12f125f4a (.)
=======
                    $fields = array_map(fn($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
>>>>>>> b93ef594b4 (.)
=======
                    $fields = array_map(fn ($field) => is_string($field) ? $field : (string) $field, (array) $fields);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                    Assert::isArray($fields);
                }

>>>>>>> 5a14301c (.)
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
            });
    }

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
    {
        return 'export_tree_xls';
    }
}
