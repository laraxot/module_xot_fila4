<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords as FilamentListRecords;
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
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Modules\UI\Enums\TableLayoutEnum;
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

    /*
     * Get the table columns.
     *
     * @return array<string, Tables\Columns\Column>
     *
     * abstract public function getTableColumns(): array;
     */

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
            // ExportXlsAction::make('export_xls'),
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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

    /**
<<<<<<< HEAD
<<<<<<< HEAD
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
            $this->getTableRecordsPerPage() === 'all' ? $query->count() : $this->getTableRecordsPerPage(),
        );

        Assert::isInstanceOf($paginator, Paginator::class);

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
            'all' === $this->getTableRecordsPerPage() ? $query->count() : $this->getTableRecordsPerPage(),
        );
        $count = $paginator->total();
        $modelClass = $this->getModel();
        //dddx($modelClass);
        app(UpdateCountAction::class)->execute($modelClass, $count);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return $paginator;
    }
}
