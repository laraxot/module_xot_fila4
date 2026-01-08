<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Table;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
=======
>>>>>>> f1d4085 (.)
=======
use Exception;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Exception;
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
use Filament\Actions\Action;
use Filament\Resources\RelationManagers\RelationManager;
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            ->tooltip(__('xot::actions.export_xls'))
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (RelationManager $livewire) {
                $livewire_class = $livewire::class;
                $filename =
                    class_basename($livewire).
                    '-'.
                    collect($livewire->tableFilters)->flatten()->implode('-').
                    '.xlsx';
                $transKey = app(GetTransKeyAction::class)->execute($livewire_class);
                $transKey .= '.fields';
                $query = $livewire->getFilteredTableQuery();
                if ($query === null) {
                    throw new Exception('Query is null');
                }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
                // ->getQuery(); // Staudenmeir\LaravelCte\Query\Builder
                $rows = $query->get();
                /** @var array<int, string> $fields */
                $fields = [];
                if (method_exists($livewire_class, 'getXlsFields')) {
                    $rawFields = $livewire_class::getXlsFields($livewire->tableFilters);
                    Assert::isArray($rawFields);
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
                    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
                    // Ensure fields are properly formatted as array<int, string>
                    $fields = [];
                    foreach ($rawFields as $field) {
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
    public static function getDefaultName(): ?string
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
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
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
>>>>>>> 17684f52 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static function getDefaultName(): ?string
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    {
        return 'export_xls';
    }
}
