<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

<<<<<<< HEAD
use Exception;
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Actions\Export\ExportXlsByLazyCollection;
use Modules\Xot\Actions\Export\ExportXlsByQuery;
use Modules\Xot\Actions\Export\ExportXlsStreamByLazyCollection;
use Modules\Xot\Actions\GetTransKeyAction;
use Webmozart\Assert\Assert;

class ExportXlsLazyAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
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
        $this->label(__('xot::actions.export_xls.label'))
            ->tooltip(__('xot::actions.export_xls.tooltip'))
            ->icon(__('xot::actions.export_xls.icon'))
            ->modalHeading(__('xot::actions.export_xls.modal.heading'))
            ->modalDescription(__('xot::actions.export_xls.modal.description'))
            ->modalSubmitActionLabel(__('xot::actions.export_xls.modal.confirm'))
            ->modalCancelActionLabel(__('xot::actions.export_xls.modal.cancel'))
            ->successNotificationTitle(__('xot::actions.export_xls.success'))
            ->requiresConfirmation()
            ->action(static function (ListRecords $livewire) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                $filename =
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    '.xlsx';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';

                $resource = $livewire->getResource();
                /** @var array<int, string> $fields */
                $fields = [];
                if (method_exists($resource, 'getXlsFields')) {
                    $rawFields = $resource::getXlsFields($livewire->tableFilters);
                    if (is_array($rawFields)) {
                        $fields = array_map(static function ($field): string {
                            if (is_object($field) && method_exists($field, '__toString')) {
                                return $field->__toString();
                            }
                            if (is_scalar($field)) {
                                return (string) $field;
                            }
                            return '';
                        }, $rawFields);
                    }
                    Assert::isArray($fields);
                }

                $lazy = $livewire->getFilteredTableQuery();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                if ($lazy === null) {
                    throw new Exception('Query is null');
                }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                if ($lazy->count() < 7) {
                    Assert::isInstanceOf($lazy, Builder::class);

                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);

                    return app(ExportXlsByQuery::class)->execute($lazy, $filename, $stringFields, null);
<<<<<<< HEAD
=======
=======
                
=======
>>>>>>> b93ef594b4 (.)
                if ($lazy->count() < 7) {
                    Assert::isInstanceOf($lazy, Builder::class);

                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);
<<<<<<< HEAD
=======
                
                if ($lazy->count() < 7) {
                    Assert::isInstanceOf($lazy, Builder::class);
                    
                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);
>>>>>>> origin/develop
                    
                    return app(ExportXlsByQuery::class)->execute(
                        $lazy, 
                        $filename, 
                        $stringFields, 
                        null
                    );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

                    return app(ExportXlsByQuery::class)->execute($lazy, $filename, $stringFields, null);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                }

                $lazyCursor = $lazy->cursor();

                if ($lazyCursor->count() > 3000) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                    return app(ExportXlsStreamByLazyCollection::class)
                        ->execute($lazyCursor, $filename, $transKey, array_values($fields));
                }

                return app(ExportXlsByLazyCollection::class)->execute($lazyCursor, $filename, array_values($fields));
            });
    }

    public static function getDefaultName(): null|string
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                    return app(ExportXlsStreamByLazyCollection::class)->execute(
                        $lazyCursor, 
                        $filename, 
                        $transKey, 
                        array_values($fields)
                    );
<<<<<<< HEAD
=======
                    return app(ExportXlsStreamByLazyCollection::class)
                        ->execute($lazyCursor, $filename, $transKey, array_values($fields));
>>>>>>> b93ef594b4 (.)
                }

                return app(ExportXlsByLazyCollection::class)->execute($lazyCursor, $filename, array_values($fields));
            });
    }

<<<<<<< HEAD
    public static function getDefaultName(): ?string
>>>>>>> a12f125f4a (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> b93ef594b4 (.)
=======
                }

                return app(ExportXlsByLazyCollection::class)->execute(
                    $lazyCursor, 
                    $filename, 
                    array_values($fields)
                );
            });
    }

    public static function getDefaultName(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        return 'export_xls';
    }
}
