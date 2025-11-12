<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit\Support;

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
        $mock = \Mockery::mock();
        $mock->allows([
            'getTableColumns' => [],
            'getTableContentGrid' => [],
        ]);

        return $mock;
    }

    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
        /** @var Table */
        /* @phpstan-ignore-next-line return.type */
        return \Mockery::mock(Table::class);
    }

    public function getTablePage(): int|string
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
    }

    public function getSelectedTableRecordsQuery(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = 500): \Illuminate\Database\Eloquent\Builder
    {
        return \Illuminate\Database\Eloquent\Model::query();
    }

    public function getTableFilterFormState(string $name): array
    {
        return [];
    }

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

    public function getTableFiltersForm(): \Filament\Schemas\Schema
    {
        /** @var \Filament\Schemas\Schema */
        return \Mockery::mock(\Filament\Schemas\Schema::class);
    }

    public function getTableFilterState(string $name): ?array
    {
        return [];
    }

    public function getTableGrouping(): ?\Filament\Tables\Grouping\Group
    {
        return null;
    }

    public function getTableSearchIndicator(): \Filament\Tables\Filters\Indicator
    {
        /** @var \Filament\Tables\Filters\Indicator */
        return \Mockery::mock(\Filament\Tables\Filters\Indicator::class);
    }

    public function getTableColumnSearchIndicators(): array
    {
        return [];
    }

    public function getTableColumnToggleForm(): mixed
    {
        return null;
    }

    public function getTableRecords(): \Illuminate\Support\Collection|\Illuminate\Contracts\Pagination\Paginator|\Illuminate\Contracts\Pagination\CursorPaginator
    {
        return new \Illuminate\Support\Collection;
    }

    public function getTableRecord(mixed $key): array|\Illuminate\Database\Eloquent\Model|null
    {
        return null;
    }

    public function getTableRecordKey(mixed $record): string
    {
        return '';
    }

    public function getSelectedTableRecords(bool $shouldFetchSelectedRecords = true, ?int $chunkSize = null): Collection
    {
        return new Collection;
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

    public function getTableQueryForExport(): \Illuminate\Database\Eloquent\Builder
    {
        return \Illuminate\Database\Eloquent\Model::query();
    }

    public function getFilteredTableQuery(): ?\Illuminate\Database\Eloquent\Builder
    {
        return null;
    }

    public function getFilteredSortedTableQuery(): ?\Illuminate\Database\Eloquent\Builder
    {
        return null;
    }

    public function getAllTableSummaryQuery(): ?\Illuminate\Database\Eloquent\Builder
    {
        return null;
    }

    public function getPageTableSummaryQuery(): ?\Illuminate\Database\Eloquent\Builder
    {
        return null;
    }

    public function getMountedTableAction(): ?\Filament\Actions\Action
    {
        return null;
    }

    public function getMountedTableActionForm(): ?\Filament\Schemas\Schema
    {
        return null;
    }

    public function getMountedTableActionRecord(): ?\Illuminate\Database\Eloquent\Model
    {
        return null;
    }

    public function getMountedTableActionRecordKey(): mixed
    {
        return null;
    }

    public function getMountedTableBulkAction(): ?\Filament\Actions\Action
    {
        return null;
    }

    public function getMountedTableBulkActionForm(): ?\Filament\Schemas\Schema
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

    public function isTableColumnToggledHidden(string $name): bool
    {
        return false;
    }

    public function callMountedTableAction(mixed $arguments = []): mixed
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

    public function makeFilamentTranslatableContentDriver(): ?\Filament\Support\Contracts\TranslatableContentDriver
    {
        return null;
    }
}
