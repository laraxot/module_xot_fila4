<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords as FilamentListRecords;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Modules\UI\Enums\TableLayoutEnum;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
=======
>>>>>>> f1d4085 (.)
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> 300ef70 (.)
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Webmozart\Assert\Assert;

/**
 * Base class for list records pages.
 *
 * @property ?string $model
 * @property ?string $resource
 * @property ?string $slug
 * @property TableLayoutEnum $layoutView
 */
abstract class XotBaseListRecords extends FilamentListRecords
{
    use HasXotTable;

    /*
     * Get the table columns.
     *
     * @return array<string, Tables\Columns\Column>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
     *
     * abstract public function getTableColumns(): array;
     */

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     
    abstract public function getTableColumns(): array;
    */

    
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
     * Get the default sort column and direction.
     *
     * @return array{id: 'desc'|'asc'}
     */
    protected function getDefaultSort(): array
    {
        return ['id' => 'desc'];
    }

    /**
     * Get the header actions.
     *
     * @return array<string, Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            // \Filament\Actions\CreateAction::make(),
<<<<<<< HEAD
<<<<<<< HEAD
            // ExportXlsAction::make('export_xls'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            // ExportXlsAction::make('export_xls'),
=======
           // ExportXlsAction::make('export_xls'),
>>>>>>> f1d4085 (.)
=======
            // ExportXlsAction::make('export_xls'),
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            // ExportXlsAction::make('export_xls'),
>>>>>>> 300ef70 (.)
        ];
    }

    /**
     * Get the resource class name.
     *
     * @return class-string
     */
    public static function getResource(): string
    {
        $resource = Str::of(static::class)->before('\\Pages\\')->toString();
        Assert::classExists($resource);

        return $resource;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    /**
     * Paginate the table query.
     */
    protected function paginateTableQuery(Builder $query): Paginator
    {
        $paginator = $query->fastPaginate(
            $this->getTableRecordsPerPage() === 'all' ? $query->count() : $this->getTableRecordsPerPage(),
        );
<<<<<<< HEAD
        $count = $paginator->total();
        $modelClass = $this->getModel();
        // dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);
=======

        if (is_object($paginator) && method_exists($paginator, 'total')) {
            $count = $paginator->total();
            Assert::integer($count, 'Total must be an integer');

            $modelClass = $this->getModel();
            app(UpdateCountAction::class)->execute($modelClass, $count);
        }
        Assert::isInstanceOf($paginator, Paginator::class);
>>>>>>> a6ef6dc7 (.)

        return $paginator;
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    /** 
     * Paginate the table query.
    */
    protected function paginateTableQueryTMP(Builder $query): Paginator
    {
        return $query->fastPaginate(
            ('all' === $this->getTableRecordsPerPage()) 
            ? $query->count() 
            : $this->getTableRecordsPerPage()
        );
    }
}

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
