<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

<<<<<<< HEAD
use Filament\Actions\Action;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Resources\Pages\ListRecords as FilamentListRecords;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Modules\UI\Enums\TableLayoutEnum;
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
=======
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Actions\ModelClass\UpdateCountAction;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     *
     * abstract public function getTableColumns(): array;
     */

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     
    abstract public function getTableColumns(): array;
    */

    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
     * abstract public function getTableColumns(): array;
     */

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
     * @return array<string, Action>
=======
<<<<<<< HEAD
     * @return array<string, Action>
=======
     * @return array<string, \Filament\Actions\Action>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    protected function getHeaderActions(): array
    {
        return [
            // \Filament\Actions\CreateAction::make(),
<<<<<<< HEAD
            // ExportXlsAction::make('export_xls'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // ExportXlsAction::make('export_xls'),
=======
           // ExportXlsAction::make('export_xls'),
>>>>>>> a12f125f4a (.)
=======
            // ExportXlsAction::make('export_xls'),
>>>>>>> b93ef594b4 (.)
=======
           // ExportXlsAction::make('export_xls'),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    /**
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
<<<<<<< HEAD
=======
=======
    /** 
=======
    /**
>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
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

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
