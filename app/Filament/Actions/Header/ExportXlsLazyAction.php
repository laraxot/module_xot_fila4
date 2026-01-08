<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

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
use Filament\Resources\Pages\ListRecords;
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
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
        $this->label((string) __('xot::actions.export_xls.label'))
            ->tooltip((string) __('xot::actions.export_xls.tooltip'))
            ->icon((string) __('xot::actions.export_xls.icon'))
            ->modalHeading((string) __('xot::actions.export_xls.modal.heading'))
            ->modalDescription((string) __('xot::actions.export_xls.modal.description'))
            ->modalSubmitActionLabel((string) __('xot::actions.export_xls.modal.confirm'))
            ->modalCancelActionLabel((string) __('xot::actions.export_xls.modal.cancel'))
            ->successNotificationTitle((string) __('xot::actions.export_xls.success'))
=======
=======
>>>>>>> 8b18e4bff (.)
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
        $this->label(__('xot::actions.export_xls.label'))
            ->tooltip(__('xot::actions.export_xls.tooltip'))
            ->icon(__('xot::actions.export_xls.icon'))
            ->modalHeading(__('xot::actions.export_xls.modal.heading'))
            ->modalDescription(__('xot::actions.export_xls.modal.description'))
            ->modalSubmitActionLabel(__('xot::actions.export_xls.modal.confirm'))
            ->modalCancelActionLabel(__('xot::actions.export_xls.modal.cancel'))
            ->successNotificationTitle(__('xot::actions.export_xls.success'))
>>>>>>> 48515e368 (.)
            ->requiresConfirmation()
            ->action(static function (ListRecords $livewire) {
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
                $filename =
                    class_basename($livewire).
                    '-'.
                    collect($livewire->tableFilters)->flatten()->implode('-').
                    '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
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
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';

                $resource = $livewire->getResource();
                /** @var array<int, string> $fields */
                $fields = [];
                if (method_exists($resource, 'getXlsFields')) {
                    $rawFields = $resource::getXlsFields($livewire->tableFilters);
                    if (is_array($rawFields)) {
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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
                        $fields = array_map(static function ($field): string {
                            if (is_object($field) && method_exists($field, '__toString')) {
                                return (string) $field->__toString();
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
>>>>>>> 0516d3de0 (.)
                    }
                    Assert::isArray($fields);
                }

                $lazy = $livewire->getFilteredTableQuery();
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
                if ($lazy === null) {
                    throw new Exception('Query is null');
                }

                if ($lazy->count() < 7) {
                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);

                    // PHPStan knows $lazy is Builder|Relation here, no need for Assert
                    return app(ExportXlsByQuery::class)->execute($lazy, $filename, $stringFields, null);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                
                if ($lazy->count() < 7) {
                    Assert::isInstanceOf($lazy, Builder::class);
                    
                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);
                    
                    return app(ExportXlsByQuery::class)->execute(
                        $lazy, 
                        $filename, 
                        $stringFields, 
                        null
                    );
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 5a14301c (.)
                    return app(ExportXlsByQuery::class)->execute($lazy, $filename, $stringFields, null);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                
                if ($lazy->count() < 7) {
                    Assert::isInstanceOf($lazy, Builder::class);
                    
                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);
                    
                    return app(ExportXlsByQuery::class)->execute(
                        $lazy, 
                        $filename, 
                        $stringFields, 
                        null
                    );
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
                }

                $lazyCursor = $lazy->cursor();

                if ($lazyCursor->count() > 3000) {
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
                    return app(ExportXlsStreamByLazyCollection::class)
                        ->execute($lazyCursor, $filename, $transKey, array_values($fields));
                }

                return app(ExportXlsByLazyCollection::class)->execute($lazyCursor, $filename, array_values($fields));
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
=======
>>>>>>> ab8cc3f3 (.)
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
    public static function getDefaultName(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
    public static function getDefaultName(): ?string
=======
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                    return app(ExportXlsStreamByLazyCollection::class)->execute(
                        $lazyCursor, 
                        $filename, 
                        $transKey, 
                        array_values($fields)
                    );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                }

                return app(ExportXlsByLazyCollection::class)->execute(
                    $lazyCursor, 
                    $filename, 
                    array_values($fields)
                );
            });
    }

    public static function getDefaultName(): ?string
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
    public static function getDefaultName(): null|string
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
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
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    {
        return 'export_xls';
    }
}
