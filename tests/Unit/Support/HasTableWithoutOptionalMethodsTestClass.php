<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit\Support;

use Mockery;
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
=======
<<<<<<< HEAD
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
        $mock->allows([
            'getTableColumns' => [],
            'getTableContentGrid' => [],
        ]);

        return $mock;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        $mock->shouldReceive('getTableColumns')->andReturn([]);
        $mock->shouldReceive('getTableContentGrid')->andReturn([]);
        return $mock;
    }

    #[Override]
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
        /** @var Table */
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): int|string
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): null|int
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
    }

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
=======
<<<<<<< HEAD
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableSortDirection(): ?string
=======
<<<<<<< HEAD
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
    public function getTableSortDirection(): null|string
=======
    public function getTableSortDirection(): ?string
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

    public function getTableFilters(): array
    {
        return [];
    }

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
=======
<<<<<<< HEAD
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
    public function getTableFiltersForm(): mixed
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

    public function getTableSearchIndicator(): Indicator
    {
        /** @var Indicator */
        return Mockery::mock(Indicator::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    public function getTableColumnSearchIndicators(): array
    {
        return [];
    }

    public function getTableColumnToggleForm(): mixed
    {
        return null;
    }

    public function getTableRecords(): Collection|Paginator|CursorPaginator
    {
        return new Collection;
    }

    public function getTableRecord(mixed $key): array|Model|null
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function getTableRecords(): array
    {
        return [];
    }

    public function getTableRecord(): mixed
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

    public function getTableRecordKey(Model|array $record): string
    {
        return '';
    }

    public function getSelectedTableRecords(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = null): Collection
    {
        return new Collection;
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function getTableRecordKey(): mixed
    {
        return null;
    }

    public function getSelectedTableRecords(): array
    {
        return [];
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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

    public function getTableQueryForExport(): Builder
    {
        return Model::query();
    }

    public function getFilteredTableQuery(): ?Builder
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
    public function getTableQueryForExport(): mixed
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getFilteredSortedTableQuery(): ?Builder
=======
<<<<<<< HEAD
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
    public function getFilteredTableQuery(): mixed
=======
    public function getFilteredSortedTableQuery(): ?Builder
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getAllTableSummaryQuery(): ?Builder
=======
<<<<<<< HEAD
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
    public function getFilteredSortedTableQuery(): mixed
=======
    public function getAllTableSummaryQuery(): ?Builder
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getPageTableSummaryQuery(): ?Builder
=======
<<<<<<< HEAD
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
    public function getAllTableSummaryQuery(): mixed
=======
    public function getPageTableSummaryQuery(): ?Builder
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableAction(): ?Action
=======
<<<<<<< HEAD
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
    public function getPageTableSummaryQuery(): mixed
=======
    public function getMountedTableAction(): ?Action
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionForm(): ?Schema
=======
<<<<<<< HEAD
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
=======
    public function getMountedTableActionForm(): ?Schema
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionRecord(): ?Model
=======
<<<<<<< HEAD
    public function getMountedTableActionForm(): mixed
    {
        return null;
    }

    public function getMountedTableActionRecord(): mixed
=======
    public function getMountedTableActionRecord(): ?Model
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
<<<<<<< HEAD
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
=======
    public function getMountedTableBulkAction(): ?Action
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkActionForm(): ?Schema
=======
<<<<<<< HEAD
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
    public function getMountedTableBulkActionForm(): mixed
=======
    public function getMountedTableBulkActionForm(): ?Schema
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getActiveTableLocale(): ?string
=======
<<<<<<< HEAD
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
    public function getActiveTableLocale(): null|string
=======
    public function getActiveTableLocale(): ?string
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
<<<<<<< HEAD
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
    public function isTableColumnToggledHidden(): bool
=======
    public function isTableColumnToggledHidden(string $name): bool
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return false;
    }

<<<<<<< HEAD
    public function callMountedTableAction(mixed $arguments = []): mixed
=======
<<<<<<< HEAD
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
    public function callMountedTableAction(): mixed
=======
    public function callMountedTableAction(mixed $arguments = []): mixed
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

    public function callTableColumnAction(string $name, string $recordKey): mixed
    {
        return null;
    }

    public function deselectAllTableRecords(): void {}

    public function mountTableAction(string $name, mixed $record = null, mixed $arguments = []): void {}

    public function mountTableBulkAction(string $name, mixed $selectedRecords = []): void {}
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function deselectAllTableRecords(): void
    {
    }

    public function mountTableAction(): void
    {
    }

    public function mountTableBulkAction(): void
    {
    }
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    public function mountedTableActionRecord(): mixed
    {
        return null;
    }

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
<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }
}
