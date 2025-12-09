<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords as FilamentListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Tables;
use Filament\Tables\Table;
>>>>>>> 5a14301c (.)
=======
use Filament\Tables;
use Filament\Tables\Table;
>>>>>>> 5a14301c (.)
=======
use Filament\Tables;
use Filament\Tables\Table;
>>>>>>> 5a14301c (.)
=======
use Filament\Tables;
use Filament\Tables\Table;
>>>>>>> 5a14301c (.)
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Modules\UI\Enums\TableLayoutEnum;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
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
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Traits\TransTrait;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
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
=======
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
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
>>>>>>> ed734516 (.)
=======
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
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
=======
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Paginate the table query.
     */
    protected function paginateTableQuery(Builder $query): Paginator
    {
        $paginator = $query->fastPaginate(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $this->getTableRecordsPerPage() === 'all' ? $query->count() : $this->getTableRecordsPerPage(),
        );
<<<<<<< HEAD
<<<<<<< HEAD

        Assert::isInstanceOf($paginator, Paginator::class);
=======
=======
>>>>>>> b7afadf9 (.)
        $count = $paginator->total();
        $modelClass = $this->getModel();
        // dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======

        if (is_object($paginator) && method_exists($paginator, 'total')) {
            $count = $paginator->total();
            Assert::integer($count, 'Total must be an integer');

            $modelClass = $this->getModel();
            app(UpdateCountAction::class)->execute($modelClass, $count);
        }
        Assert::isInstanceOf($paginator, Paginator::class);
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)

        if (! method_exists($paginator, 'total')) {
            return $paginator;
        }

        $totalResult = $paginator->total();
        $count = is_int($totalResult) ? $totalResult : (is_numeric($totalResult) ? (int) $totalResult : 0);
        $modelClass = $this->getModel();
        // dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            'all' === $this->getTableRecordsPerPage() ? $query->count() : $this->getTableRecordsPerPage(),
        );
        $count = $paginator->total();
        $modelClass = $this->getModel();
        //dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
