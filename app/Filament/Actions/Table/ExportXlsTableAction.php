<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Table;

<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Resources\RelationManagers\RelationManager;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
=======
>>>>>>> a12f125f4a (.)
=======
use Exception;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Resources\RelationManagers\RelationManager;
=======
use Filament\Resources\RelationManagers\RelationManager;
// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Modules\Xot\Actions\Export\ExportXlsByCollection;
use Modules\Xot\Actions\GetTransKeyAction;
use Webmozart\Assert\Assert;

class ExportXlsTableAction extends Action
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
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (RelationManager $livewire) {
                $livewire_class = $livewire::class;
                $filename =
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    '.xlsx';
                $transKey = app(GetTransKeyAction::class)->execute($livewire_class);
                $transKey .= '.fields';
                $query = $livewire->getFilteredTableQuery();
                if ($query === null) {
                    throw new Exception('Query is null');
                }
<<<<<<< HEAD
=======
=======
            
=======
>>>>>>> b93ef594b4 (.)
            ->tooltip(__('xot::actions.export_xls'))
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (RelationManager $livewire) {
                $livewire_class = $livewire::class;
                $filename =
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    '.xlsx';
                $transKey = app(GetTransKeyAction::class)->execute($livewire_class);
                $transKey .= '.fields';
                $query = $livewire->getFilteredTableQuery();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                if ($query === null) {
                    throw new Exception('Query is null');
                }
>>>>>>> b93ef594b4 (.)
=======
            
            ->tooltip(__('xot::actions.export_xls'))
             // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (RelationManager $livewire) {
                $livewire_class = $livewire::class;
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
                $transKey = app(GetTransKeyAction::class)->execute($livewire_class);
                $transKey .= '.fields';
                $query = $livewire->getFilteredTableQuery();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                // ->getQuery(); // Staudenmeir\LaravelCte\Query\Builder
                $rows = $query->get();
                /** @var array<int, string> $fields */
                $fields = [];
                if (method_exists($livewire_class, 'getXlsFields')) {
                    $rawFields = $livewire_class::getXlsFields($livewire->tableFilters);
                    Assert::isArray($rawFields);
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
                    // Ensure fields are properly formatted as array<int, string>
                    $fields = [];
                    foreach ($rawFields as $key => $field) {
                        if (is_string($field)) {
                            $fields[] = $field;
                        } elseif (is_array($field) && isset($field['name']) && is_string($field['name'])) {
                            $fields[] = $field['name'];
                        }
                    }
                }

                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
            });
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
        return 'export_xls';
    }
}
