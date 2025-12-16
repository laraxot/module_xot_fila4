<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Mockery;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Mockery;
use Override;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Modules\Xot\Filament\Traits\HasXotTable;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

/**
 * Dummy class that uses HasTable and HasXotTable traits for testing.
 */
class HasTableWithXotTestClass
{
    use HasXotTable;

    public function getLayoutView(): mixed
    {
        $mock = Mockery::mock();
        $mock->shouldReceive('getTableColumns')->andReturn([]);
        $mock->shouldReceive('getTableContentGrid')->andReturn([]);

        return $mock;
    }

    #[Override]
    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
        return Mockery::mock(Table::class);
    }

<<<<<<< HEAD
    public function getTablePage(): ?int
=======
<<<<<<< HEAD
    public function getTablePage(): null|int
    public function getTablePage(): null|int
    public function getTablePage(): null|int
    public function getTablePage(): null|int
    public function getTablePage(): null|int
    public function getTablePage(): null|int
=======
    public function getTablePage(): ?int
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
    }

<<<<<<< HEAD
    public function getTableSortColumn(): ?string
=======
<<<<<<< HEAD
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
    public function getTableSortColumn(): null|string
=======
    public function getTableSortColumn(): ?string
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

    public function getTableFiltersForm(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableFilterState(string $_name): ?array
=======
<<<<<<< HEAD
    public function getTableFilterState(string $_name): null|array
    public function getTableFilterState(string $_name): null|array
    public function getTableFilterState(string $_name): null|array
    public function getTableFilterState(string $_name): null|array
    public function getTableFilterState(string $_name): null|array
    public function getTableFilterState(string $_name): null|array
=======
    public function getTableFilterState(string $_name): ?array
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return [];
    }

<<<<<<< HEAD
    public function getTableGrouping(): ?string
=======
<<<<<<< HEAD
    public function getTableGrouping(): null|string
    public function getTableGrouping(): null|string
    public function getTableGrouping(): null|string
    public function getTableGrouping(): null|string
    public function getTableGrouping(): null|string
    public function getTableGrouping(): null|string
=======
    public function getTableGrouping(): ?string
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

<<<<<<< HEAD
    public function getTableSearchIndicator(): ?string
=======
<<<<<<< HEAD
    public function getTableSearchIndicator(): null|string
    public function getTableSearchIndicator(): null|string
    public function getTableSearchIndicator(): null|string
    public function getTableSearchIndicator(): null|string
    public function getTableSearchIndicator(): null|string
    public function getTableSearchIndicator(): null|string
=======
    public function getTableSearchIndicator(): ?string
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

    public function getTableColumnSearchIndicators(): array
    {
        return [];
    }

    public function getTableColumnToggleForm(): mixed
    {
        return null;
    }

    public function getTableRecords(): array
    {
        return [];
    }

    public function getTableRecord(): mixed
    {
        return null;
    }

    public function getTableRecordKey(): mixed
    {
        return null;
    }

    public function getSelectedTableRecords(bool $_shouldFetchSelectedRecords = true): Collection
    {
<<<<<<< HEAD
        return new Collection;
=======
<<<<<<< HEAD
        return new Collection();
        return new Collection();
        return new Collection();
        return new Collection();
        return new Collection();
        return new Collection();
=======
        return new Collection;
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

    public function getTableQueryForExport(): mixed
    {
        return null;
    }

    public function getFilteredTableQuery(): mixed
    {
        return null;
    }

    public function getFilteredSortedTableQuery(): mixed
    {
        return null;
    }

    public function getAllTableSummaryQuery(): mixed
    {
        return null;
    }

    public function getPageTableSummaryQuery(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableAction(): ?string
=======
<<<<<<< HEAD
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
    public function getMountedTableAction(): null|string
=======
    public function getMountedTableAction(): ?string
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

    public function getMountedTableActionForm(): mixed
    {
        return null;
    }

    public function getMountedTableActionRecord(): mixed
    {
        return null;
    }

    public function getMountedTableActionRecordKey(): mixed
    {
        return null;
    }

<<<<<<< HEAD
    public function getMountedTableBulkAction(): ?string
=======
<<<<<<< HEAD
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
    public function getMountedTableBulkAction(): null|string
=======
    public function getMountedTableBulkAction(): ?string
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    {
        return null;
    }

    public function getMountedTableBulkActionForm(): mixed
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

    public function isTableColumnToggledHidden(): bool
    {
        return false;
    }

    public function callMountedTableAction(): mixed
    {
        return null;
    }

    public function callTableColumnAction(string $_name, string $_recordKey): mixed
    {
        return null;
    }

    public function deselectAllTableRecords(): void {}

    public function mountTableAction(): void {}

    public function mountTableBulkAction(): void {}
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

    public function replaceMountedTableAction(): void {}

    public function replaceMountedTableBulkAction(): void {}

    public function resetTableSearch(): void {}

    public function resetTableColumnSearch(): void {}

    public function toggleTableReordering(): void {}
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
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    public function parseTableFilterName(): string
    {
        return '';
    }

    public function makeFilamentTranslatableContentDriver(): mixed
    {
        return null;
    }
}
