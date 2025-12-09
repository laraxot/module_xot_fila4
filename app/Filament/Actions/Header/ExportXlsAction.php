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
=======
// use Filament\Tables\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
// use Filament\Tables\Actions\Action;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
use Exception;
=======
>>>>>>> f1d4085 (.)
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Actions\Export\ExportXlsByCollection;
use Modules\Xot\Actions\GetTransKeyAction;
use Webmozart\Assert\Assert;

class ExportXlsAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
<<<<<<< HEAD
            ->label('')
            ->tooltip(__('xot::actions.export_xls'))
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (ListRecords $livewire) {
                $filename =
<<<<<<< HEAD
<<<<<<< HEAD
                    class_basename($livewire).
                    '-'.
                    collect($livewire->tableFilters)->flatten()->implode('-').
=======
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
>>>>>>> 5a14301c (.)
=======
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
>>>>>>> 5a14301c (.)
                    '.xlsx';
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';
                $query = $livewire->getFilteredTableQuery();
                if ($query === null) {
                    throw new Exception('Query is null');
                }
                $rows = $query->get();

                $resource = $livewire->getResource();

=======
            ->tooltip(__('xot::actions.export_xls'))
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (ListRecords $livewire) {
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';
                $query = $livewire->getFilteredTableQuery();
                $rows = $query->get();
                
                $resource = $livewire->getResource();
                
>>>>>>> f1d4085 (.)
                /** @var array<int, string> $fields */
                $fields = [];
                if (method_exists($resource, 'getXlsFields')) {
                    $rawFields = $resource::getXlsFields($livewire->tableFilters);
<<<<<<< HEAD
=======
                  
>>>>>>> f1d4085 (.)
                    if (is_array($rawFields)) {
<<<<<<< HEAD
<<<<<<< HEAD
                        $fields = array_map(
                            /**
                             * @param  mixed  $field
                             */
                            static function ($field): string {
                                // Handle objects with __toString method
                                if (is_object($field) && method_exists($field, '__toString')) {
                                    $stringValue = $field->__toString();

                                    // Type narrowing for PHPStan Level 10
                                    return is_string($stringValue) ? $stringValue : '';
                                }

                                // Handle scalar values
                                if (is_scalar($field)) {
                                    return (string) $field;
                                }

                                return '';
                            },
                            $rawFields
                        );
=======
=======
>>>>>>> 5a14301c (.)
                        $fields = array_map(static function ($field): string {
                            if (is_object($field) && method_exists($field, '__toString')) {
                                return $field->__toString();
                            }
                            if (is_scalar($field)) {
                                return (string) $field;
                            }
                            return '';
                        }, $rawFields);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    }
                    Assert::isArray($fields);
                }

<<<<<<< HEAD
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, array_values($fields));
            });
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
                return app(ExportXlsByCollection::class)->execute(
                    $rows, 
                    $filename, 
                    $transKey, 
                    array_values($fields)
                );
            });
    }

    public static function getDefaultName(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, array_values($fields));
            });
    }

    public static function getDefaultName(): null|string
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
    {
        return 'export_xls';
    }
}
