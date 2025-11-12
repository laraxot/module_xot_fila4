<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit\Support;

use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\HasXotTable;
=======
use Mockery;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
>>>>>>> 713050e (.)

/**
 * Test class without the optional methods for testing.
 */
class HasTableWithoutOptionalMethodsTestClass implements HasTable
{
    use HasXotTable;

    public function getLayoutView(): mixed
    {
        $mock = \Mockery::mock();
<<<<<<< HEAD
        $mock->allows([
            'getTableColumns' => [],
            'getTableContentGrid' => [],
        ]);
=======
        $mock->shouldReceive('getTableColumns')->andReturn([]);
        $mock->shouldReceive('getTableContentGrid')->andReturn([]);
>>>>>>> 713050e (.)

        return $mock;
    }

    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
<<<<<<< HEAD
        /** @var Table */
        return \Mockery::mock(Table::class);
    }

    public function getTablePage(): int|string
=======
        return \Mockery::mock(Table::class);
    }

    public function getTablePage(): ?int
>>>>>>> 713050e (.)
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
    }

<<<<<<< HEAD
    public function getSelectedTableRecordsQuery(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = 500): \Illuminate\Database\Eloquent\Builder
    {
        return \Illuminate\Database\Eloquent\Model::query();
    }

    public function getTableFilterFormState(string $name): array
    {
        return [];
    }

=======
>>>>>>> 713050e (.)
    public function getTableSortColumn(): ?string
    {
        return null;
    }

    public function getTableSortDirection(): ?string
    {
        return null;
    }

    public function getTableFilters(): array
    {
        return [];
    }

<<<<<<< HEAD
    public function getTableFiltersForm(): \Filament\Schemas\Schema
    {
        /** @var \Filament\Schemas\Schema */
        return \Mockery::mock(\Filament\Schemas\Schema::class);
=======
    public function getTableFiltersForm(): mixed
    {
        return null;
>>>>>>> 713050e (.)
    }

    public function getTableFilterState(string $name): ?array
    {
        return [];
    }

<<<<<<< HEAD
    public function getTableGrouping(): ?\Filament\Tables\Grouping\Group
=======
    public function getTableGrouping(): ?string
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableSearchIndicator(): \Filament\Tables\Filters\Indicator
    {
        /** @var \Filament\Tables\Filters\Indicator */
        return \Mockery::mock(\Filament\Tables\Filters\Indicator::class);
=======
    public function getTableSearchIndicator(): ?string
    {
        return null;
>>>>>>> 713050e (.)
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
    public function getTableRecords(): \Illuminate\Support\Collection|\Illuminate\Contracts\Pagination\Paginator|\Illuminate\Contracts\Pagination\CursorPaginator
    {
        return new \Illuminate\Support\Collection;
    }

    public function getTableRecord(mixed $key): array|\Illuminate\Database\Eloquent\Model|null
=======
    public function getTableRecords(): array
    {
        return [];
    }

    public function getTableRecord(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableRecordKey(mixed $record): string
    {
        return '';
    }

    public function getSelectedTableRecords(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = null): \Illuminate\Support\Collection
    {
        return new \Illuminate\Support\Collection;
=======
    public function getTableRecordKey(): mixed
    {
        return null;
    }

    public function getSelectedTableRecords(): array
    {
        return [];
>>>>>>> 713050e (.)
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
    public function getTableQueryForExport(): \Illuminate\Database\Eloquent\Builder
    {
        return \Illuminate\Database\Eloquent\Model::query();
    }

    public function getFilteredTableQuery(): ?\Illuminate\Database\Eloquent\Builder
=======
    public function getTableQueryForExport(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getFilteredSortedTableQuery(): ?\Illuminate\Database\Eloquent\Builder
=======
    public function getFilteredTableQuery(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getAllTableSummaryQuery(): ?\Illuminate\Database\Eloquent\Builder
=======
    public function getFilteredSortedTableQuery(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getPageTableSummaryQuery(): ?\Illuminate\Database\Eloquent\Builder
=======
    public function getAllTableSummaryQuery(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableAction(): ?\Filament\Actions\Action
=======
    public function getPageTableSummaryQuery(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionForm(): ?\Filament\Schemas\Schema
=======
    public function getMountedTableAction(): ?string
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableActionRecord(): ?\Illuminate\Database\Eloquent\Model
=======
    public function getMountedTableActionForm(): mixed
    {
        return null;
    }

    public function getMountedTableActionRecord(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

    public function getMountedTableActionRecordKey(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkAction(): ?\Filament\Actions\Action
=======
    public function getMountedTableBulkAction(): ?string
>>>>>>> 713050e (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkActionForm(): ?\Filament\Schemas\Schema
=======
    public function getMountedTableBulkActionForm(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

    public function getActiveTableLocale(): ?string
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
>>>>>>> 713050e (.)
    {
        return false;
    }

<<<<<<< HEAD
    public function callMountedTableAction(mixed $arguments = []): mixed
=======
    public function callMountedTableAction(): mixed
>>>>>>> 713050e (.)
    {
        return null;
    }

    public function callTableColumnAction(string $name, string $recordKey): mixed
    {
        return null;
    }

    public function deselectAllTableRecords(): void {}

<<<<<<< HEAD
    public function mountTableAction(string $name, mixed $record = null, mixed $arguments = []): void {}

    public function mountTableBulkAction(string $name, mixed $selectedRecords = []): void {}
=======
    public function mountTableAction(): void {}

    public function mountTableBulkAction(): void {}
>>>>>>> 713050e (.)

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

    public function makeFilamentTranslatableContentDriver(): ?\Filament\Support\Contracts\TranslatableContentDriver
    {
        return null;
    }
}
=======
    public function replaceMountedTableAction(): void {}

    public function replaceMountedTableBulkAction(): void {}

    public function resetTableSearch(): void {}

    public function resetTableColumnSearch(): void {}

    public function toggleTableReordering(): void {}

    public function parseTableFilterName(): string
    {
        return '';
    }

    public function makeFilamentTranslatableContentDriver(): mixed
    {
        return null;
    }
}
>>>>>>> 713050e (.)
