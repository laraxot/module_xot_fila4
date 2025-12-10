<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit\Support;

use Mockery;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Filament\Schemas\Schema;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Filters\Indicator;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Filament\Actions\Action;
use Filament\Support\Contracts\TranslatableContentDriver;
<<<<<<< HEAD
use Override;
use Override;
use Override;
use Override;
=======
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 5a14301c (.)
=======
use Override;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Modules\Xot\Filament\Traits\HasXotTable;

/**
 * Test class without the optional methods for testing.
 */
class HasTableWithoutOptionalMethodsTestClass implements HasTable
{
    use HasXotTable;

    public function getLayoutView(): mixed
    {
        $mock = Mockery::mock();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
        $mock->allows([
            'getTableColumns' => [],
            'getTableContentGrid' => [],
        ]);

        return $mock;
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        $mock->shouldReceive('getTableColumns')->andReturn([]);
        $mock->shouldReceive('getTableContentGrid')->andReturn([]);
        return $mock;
    }

    #[Override]
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
        /** @var Table */
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): int|string
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): null|int
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    public function getSelectedTableRecordsQuery(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = 500): Builder
    {
        return Model::query();
    }

    public function getTableFilterFormState(string $name): array
    {
        return [];
    }

    public function getTableSortColumn(): ?string
<<<<<<< HEAD
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
=======
=======
    public function getTableSortColumn(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortColumn(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortColumn(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortColumn(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortColumn(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortColumn(): null|string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableSortDirection(): ?string
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTableSortDirection(): ?string
=======
    public function getTableSortDirection(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortDirection(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortDirection(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortDirection(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortDirection(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getTableSortDirection(): null|string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

    public function getTableFilters(): array
    {
        return [];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
=======
=======
    public function getTableFiltersForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableFiltersForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableFiltersForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableFiltersForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableFiltersForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableFiltersForm(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    public function getTableSearchIndicator(): Indicator
    {
        /** @var Indicator */
        return Mockery::mock(Indicator::class);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    public function getTableRecords(): Collection|Paginator|CursorPaginator
    {
        return new Collection;
    }

    public function getTableRecord(mixed $key): array|Model|null
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    public function getTableRecords(): array
    {
        return [];
    }

    public function getTableRecord(): mixed
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    public function getTableRecordKey(Model|array $record): string
    {
        return '';
    }

    public function getSelectedTableRecords(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = null): Collection
    {
        return new Collection;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    public function getTableRecordKey(): mixed
    {
        return null;
    }

    public function getSelectedTableRecords(): array
    {
        return [];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    public function getTableQueryForExport(): Builder
    {
        return Model::query();
    }

    public function getFilteredTableQuery(): ?Builder
<<<<<<< HEAD
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
=======
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getFilteredSortedTableQuery(): ?Builder
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFilteredSortedTableQuery(): ?Builder
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getAllTableSummaryQuery(): ?Builder
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getAllTableSummaryQuery(): ?Builder
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getPageTableSummaryQuery(): ?Builder
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getPageTableSummaryQuery(): ?Builder
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableAction(): ?Action
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getMountedTableAction(): ?Action
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionForm(): ?Schema
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getMountedTableActionForm(): ?Schema
=======
    public function getMountedTableAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableAction(): null|string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionRecord(): ?Model
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getMountedTableActionRecord(): ?Model
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    public function getMountedTableActionForm(): mixed
    {
        return null;
    }

    public function getMountedTableActionRecord(): mixed
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

    public function getMountedTableActionRecordKey(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkAction(): ?Action
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getMountedTableBulkAction(): ?Action
=======
    public function getMountedTableBulkAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkAction(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkAction(): null|string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkActionForm(): ?Schema
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getMountedTableBulkActionForm(): ?Schema
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 5a14301c (.)
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

<<<<<<< HEAD
    public function getActiveTableLocale(): ?string
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getActiveTableLocale(): ?string
=======
    public function getActiveTableLocale(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getActiveTableLocale(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getActiveTableLocale(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getActiveTableLocale(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getActiveTableLocale(): null|string
>>>>>>> 5a14301c (.)
=======
    public function getActiveTableLocale(): null|string
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function isTableColumnToggledHidden(string $name): bool
=======
    public function isTableColumnToggledHidden(): bool
>>>>>>> 5a14301c (.)
=======
    public function isTableColumnToggledHidden(): bool
>>>>>>> 5a14301c (.)
=======
    public function isTableColumnToggledHidden(): bool
>>>>>>> 5a14301c (.)
=======
    public function isTableColumnToggledHidden(): bool
>>>>>>> 5a14301c (.)
=======
    public function isTableColumnToggledHidden(): bool
>>>>>>> 5a14301c (.)
=======
    public function isTableColumnToggledHidden(): bool
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return false;
    }

<<<<<<< HEAD
    public function callMountedTableAction(mixed $arguments = []): mixed
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function callMountedTableAction(mixed $arguments = []): mixed
=======
    public function callMountedTableAction(): mixed
>>>>>>> 5a14301c (.)
=======
    public function callMountedTableAction(): mixed
>>>>>>> 5a14301c (.)
=======
    public function callMountedTableAction(): mixed
>>>>>>> 5a14301c (.)
=======
    public function callMountedTableAction(): mixed
>>>>>>> 5a14301c (.)
=======
    public function callMountedTableAction(): mixed
>>>>>>> 5a14301c (.)
=======
    public function callMountedTableAction(): mixed
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }

    public function callTableColumnAction(string $name, string $recordKey): mixed
    {
        return null;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    public function deselectAllTableRecords(): void {}

    public function mountTableAction(string $name, mixed $record = null, mixed $arguments = []): void {}

    public function mountTableBulkAction(string $name, mixed $selectedRecords = []): void {}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    public function deselectAllTableRecords(): void
    {
    }

    public function mountTableAction(): void
    {
    }

    public function mountTableBulkAction(): void
    {
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop

    public function mountedTableActionRecord(): mixed
    {
        return null;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    {
        return null;
    }
}
