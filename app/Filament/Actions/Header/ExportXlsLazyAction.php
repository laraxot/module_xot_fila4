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
>>>>>>> f1d4085 (.)
=======
use Exception;
>>>>>>> 73eab74 (.)
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Exception;
use Exception;
use Exception;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder;
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
<<<<<<< HEAD

<<<<<<< HEAD



        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                $filename =
                    class_basename($livewire).
                    '-'.
                    collect($livewire->tableFilters)->flatten()->implode('-').
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    '.xlsx';
<<<<<<< HEAD
<<<<<<< HEAD
                $filename =
                    class_basename($livewire).
                    '-'.
                    collect($livewire->tableFilters)->flatten()->implode('-').
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    class_basename($livewire) .
                    '-' .
                    collect($livewire->tableFilters)->flatten()->implode('-') .
                    '.xlsx';
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
=======
=======
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                if ($lazy === null) {
                    throw new Exception('Query is null');
                }

                if ($lazy->count() < 7) {
                if ($lazy->count() < 7) {
                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);

                    // PHPStan knows $lazy is Builder|Relation here, no need for Assert
                    Assert::isInstanceOf($lazy, Builder::class);

                    /** @var array<int, string> $stringFields */
                    $stringFields = array_values($fields);

                    return app(ExportXlsByQuery::class)->execute($lazy, $filename, $stringFields, null);
                    return app(ExportXlsByQuery::class)->execute($lazy, $filename, $stringFields, null);
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

                    return app(ExportXlsByQuery::class)->execute($lazy, $filename, $stringFields, null);
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
                }

                $lazyCursor = $lazy->cursor();

                if ($lazyCursor->count() > 3000) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                    return app(ExportXlsStreamByLazyCollection::class)
                        ->execute($lazyCursor, $filename, $transKey, array_values($fields));
                }

                return app(ExportXlsByLazyCollection::class)->execute($lazyCursor, $filename, array_values($fields));
            });
    }

    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
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
>>>>>>> 218dfed3 (.)
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                    return app(ExportXlsStreamByLazyCollection::class)->execute(
                        $lazyCursor, 
                        $filename, 
                        $transKey, 
                        array_values($fields)
                    );
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 2f3197ab (.)
                    return app(ExportXlsStreamByLazyCollection::class)
                        ->execute($lazyCursor, $filename, $transKey, array_values($fields));
                    return app(ExportXlsStreamByLazyCollection::class)
                        ->execute($lazyCursor, $filename, $transKey, array_values($fields));
                }

                return app(ExportXlsByLazyCollection::class)->execute($lazyCursor, $filename, array_values($fields));
            });
    }

    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
<<<<<<< HEAD
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
=======
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
>>>>>>> 2f3197ab (.)
    public static function getDefaultName(): null|string
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 218dfed3 (.)
    public static function getDefaultName(): null|string
<<<<<<< HEAD
    public static function getDefaultName(): null|string
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
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): ?string
    public static function getDefaultName(): null|string
    public static function getDefaultName(): null|string
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
    {
        return 'export_xls';
    }
}
