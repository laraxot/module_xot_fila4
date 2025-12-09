<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit\Support;

use Mockery;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Filament\Schemas\Schema;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Filters\Indicator;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Filament\Actions\Action;
use Filament\Support\Contracts\TranslatableContentDriver;
=======
use Override;
>>>>>>> 5a14301c (.)
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Modules\Xot\Filament\Traits\HasXotTable;

/**
 * Test class that uses HasTable and HasXotTable traits for testing.
 */
class HasTableWithXotTestClass implements HasTable
{
    use HasXotTable;

    public function getLayoutView(): mixed
    {
        $mock = Mockery::mock();
<<<<<<< HEAD
        $mock->allows([
            'getTableColumns' => [],
            'getTableContentGrid' => [],
        ]);

        return $mock;
    }

=======
        $mock->shouldReceive('getTableColumns')->andReturn([]);
        $mock->shouldReceive('getTableContentGrid')->andReturn([]);
        return $mock;
    }

    #[Override]
>>>>>>> 5a14301c (.)
    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
<<<<<<< HEAD
        /** @var Table */
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): int|string
=======
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): null|int
>>>>>>> 5a14301c (.)
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
    }

<<<<<<< HEAD
    public function getSelectedTableRecordsQuery(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = 500): Builder
    {
        return Model::query();
    }

    public function getTableFilterFormState(string $name): array
    {
        return [];
    }

    public function getTableSortColumn(): ?string
=======
    public function getTableSortColumn(): null|string
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableSortDirection(): ?string
=======
    public function getTableSortDirection(): null|string
>>>>>>> 5a14301c (.)
    {
        return null;
    }

    public function getTableFilters(): array
    {
        return [];
    }

<<<<<<< HEAD
    public function getTableFiltersForm(): Schema
    {
        /** @var Schema */
        return Mockery::mock(Schema::class);
    }

    public function getTableFilterState(string $name): ?array
    {
        return [];
    }

    public function getTableGrouping(): ?Group
=======
    public function getTableFiltersForm(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableSearchIndicator(): Indicator
    {
        /** @var Indicator */
        return Mockery::mock(Indicator::class);
=======
    public function getTableFilterState(string $name): null|array
    {
        return [];
    }

    public function getTableGrouping(): null|string
    {
        return null;
    }

    public function getTableSearchIndicator(): null|string
    {
        return null;
>>>>>>> 5a14301c (.)
    }

    public function getTableColumnSearchIndicators(): array
    {
        return [];
    }

    public function getTableColumnToggleForm(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableRecords(): Collection|Paginator|CursorPaginator
    {
        return new Collection;
    }

    public function getTableRecord(mixed $key): array|Model|null
=======
    public function getTableRecords(): array
    {
        return [];
    }

    public function getTableRecord(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableRecordKey(Model|array $record): string
    {
        return '';
    }

    public function getSelectedTableRecords(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = null): Collection
    {
        return new Collection;
=======
    public function getTableRecordKey(): mixed
    {
        return null;
    }

    public function getSelectedTableRecords(bool $shouldFetchSelectedRecords = true): Collection
    {
        return new Collection();
>>>>>>> 5a14301c (.)
    }

    public function getAllTableRecordsCount(): int
    {
        return 0;
    }

    public function getAllSelectableTableRecordsCount(): int
    {
        return 0;
    }

    public function getAllSelectableTableRecordKeys(): array
    {
        return [];
    }

<<<<<<< HEAD
    public function getTableQueryForExport(): Builder
    {
        return Model::query();
    }

    public function getFilteredTableQuery(): ?Builder
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getFilteredSortedTableQuery(): ?Builder
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getAllTableSummaryQuery(): ?Builder
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getPageTableSummaryQuery(): ?Builder
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableAction(): ?Action
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionForm(): ?Schema
=======
    public function getMountedTableAction(): null|string
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionRecord(): ?Model
=======
    public function getMountedTableActionForm(): mixed
    {
        return null;
    }

    public function getMountedTableActionRecord(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

    public function getMountedTableActionRecordKey(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkAction(): ?Action
=======
    public function getMountedTableBulkAction(): null|string
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkActionForm(): ?Schema
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getActiveTableLocale(): ?string
=======
    public function getActiveTableLocale(): null|string
>>>>>>> 5a14301c (.)
    {
        return null;
    }

    public function isTableLoaded(): bool
    {
        return true;
    }

    public function isTableReordering(): bool
    {
        return false;
    }

    public function hasTableSearch(): bool
    {
        return false;
    }

<<<<<<< HEAD
    public function isTableColumnToggledHidden(string $name): bool
=======
    public function isTableColumnToggledHidden(): bool
>>>>>>> 5a14301c (.)
    {
        return false;
    }

<<<<<<< HEAD
    public function callMountedTableAction(mixed $arguments = []): mixed
=======
    public function callMountedTableAction(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }

    public function callTableColumnAction(string $name, string $recordKey): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function deselectAllTableRecords(): void {}

    public function mountTableAction(string $name, mixed $record = null, mixed $arguments = []): void {}

    public function mountTableBulkAction(string $name, mixed $selectedRecords = []): void {}
=======
    public function deselectAllTableRecords(): void
    {
    }

    public function mountTableAction(): void
    {
    }

    public function mountTableBulkAction(): void
    {
    }
>>>>>>> 5a14301c (.)

    public function mountedTableActionRecord(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function replaceMountedTableAction(string $name, mixed $record = null, mixed $arguments = []): void {}

    public function replaceMountedTableBulkAction(string $name, mixed $selectedRecords = []): void {}

    public function resetTableSearch(): void {}

    public function resetTableColumnSearch(string $column): void {}

    public function toggleTableReordering(): void {}

    public function parseTableFilterName(string $name): string
    {
        return $name;
    }

    public function makeFilamentTranslatableContentDriver(): ?TranslatableContentDriver
=======
    public function replaceMountedTableAction(): void
    {
    }

    public function replaceMountedTableBulkAction(): void
    {
    }

    public function resetTableSearch(): void
    {
    }

    public function resetTableColumnSearch(): void
    {
    }

    public function toggleTableReordering(): void
    {
    }

    public function parseTableFilterName(): string
    {
        return '';
    }

    public function makeFilamentTranslatableContentDriver(): mixed
>>>>>>> 5a14301c (.)
    {
        return null;
    }
}
