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

            
            ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
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
                $tableFilters = [
                    'id' => $record->getKey(),
                ];
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
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire).'-'.collect($tableFilters)->flatten()->implode('-').'.xlsx';
                $filename = class_basename($livewire) . '-' . collect($tableFilters)->flatten()->implode('-') . '.xlsx';
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

                    $fields = array_map(fn ($field) => is_string($field) ? $field : ((string) $field), (array) $fields);
                    // PHPStan: $fields is array after array_map
                }

                /** @var array<int, string> $fields */
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
            });
    }

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
    public static function getDefaultName(): ?string
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
    {
        return 'export_tree_xls';
    }
}
