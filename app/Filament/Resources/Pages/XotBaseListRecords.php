<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords as FilamentListRecords;
use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords as FilamentListRecords;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Modules\UI\Enums\TableLayoutEnum;
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
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
>>>>>>> 2f3197ab (.)
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\TransTrait;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\TransTrait;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
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
    use TransTrait;

    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    use TransTrait;

    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

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





    /*
     * Get the table columns.
     *
     * @return array<string, Tables\Columns\Column>
<<<<<<< HEAD
     *
     * abstract public function getTableColumns(): array;
     */

<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
     
    abstract public function getTableColumns(): array;
    */

    
<<<<<<< HEAD
     *
     * abstract public function getTableColumns(): array;
     */

=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
     * @return array<string, Action>
     * @return array<string, Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            // \Filament\Actions\CreateAction::make(),
<<<<<<< HEAD
            // ExportXlsAction::make('export_xls'),
<<<<<<< HEAD
            // ExportXlsAction::make('export_xls'),
            // ExportXlsAction::make('export_xls'),
            // ExportXlsAction::make('export_xls'),
           // ExportXlsAction::make('export_xls'),
=======
=======
           // ExportXlsAction::make('export_xls'),
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
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
    /**
    /**
     * Paginate the table query.
     */
    protected function paginateTableQuery(Builder $query): Paginator
    {
        $paginator = $query->fastPaginate(
            $this->getTableRecordsPerPage() === 'all' ? $query->count() : $this->getTableRecordsPerPage(),
        );

        Assert::isInstanceOf($paginator, Paginator::class);
            $this->getTableRecordsPerPage() === 'all' ? $query->count() : $this->getTableRecordsPerPage(),
        );

        Assert::isInstanceOf($paginator, Paginator::class);
        $count = $paginator->total();
        $modelClass = $this->getModel();
        // dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);

        if (is_object($paginator) && method_exists($paginator, 'total')) {
            $count = $paginator->total();
            Assert::integer($count, 'Total must be an integer');

            $modelClass = $this->getModel();
            app(UpdateCountAction::class)->execute($modelClass, $count);
        }
        Assert::isInstanceOf($paginator, Paginator::class);

        if (is_object($paginator) && method_exists($paginator, 'total')) {
            $count = $paginator->total();
            Assert::integer($count, 'Total must be an integer');

            $modelClass = $this->getModel();
            app(UpdateCountAction::class)->execute($modelClass, $count);
        }
        Assert::isInstanceOf($paginator, Paginator::class);

        if (! method_exists($paginator, 'total')) {
            return $paginator;
        }

        $totalResult = $paginator->total();
        $count = is_int($totalResult) ? $totalResult : (is_numeric($totalResult) ? (int) $totalResult : 0);
        $modelClass = $this->getModel();
        // dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);

            'all' === $this->getTableRecordsPerPage() ? $query->count() : $this->getTableRecordsPerPage(),
        );
        $count = $paginator->total();
        $modelClass = $this->getModel();
        //dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);
        return $paginator;
    }
}
<<<<<<< HEAD
     * Paginate the table query.
     */
    protected function paginateTableQuery(Builder $query): Paginator
    {
        $paginator = $query->fastPaginate(
            'all' === $this->getTableRecordsPerPage() ? $query->count() : $this->getTableRecordsPerPage(),
        );
        $count = $paginator->total();
        $modelClass = $this->getModel();
        //dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);
        return $paginator;
    }
}

=======
=======
>>>>>>> 2f3197ab (.)
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

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
