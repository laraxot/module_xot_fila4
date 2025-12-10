<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Mockery;
use Modules\Xot\Filament\Traits\HasXotTable;
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
use Mockery;
use Override;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Modules\Xot\Filament\Traits\HasXotTable;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

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
=======
    public function getTablePage(): ?int
>>>>>>> 414a4ffcb (.)
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
    }

<<<<<<< HEAD
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
=======
    public function getTableSortColumn(): ?string
>>>>>>> 414a4ffcb (.)
    {
        return null;
    }

<<<<<<< HEAD
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
=======
    public function getTableSortDirection(): ?string
>>>>>>> 414a4ffcb (.)
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
=======
    public function getTableFilterState(string $_name): ?array
>>>>>>> 414a4ffcb (.)
    {
        return [];
    }

<<<<<<< HEAD
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
=======
    public function getTableGrouping(): ?string
>>>>>>> 414a4ffcb (.)
    {
        return null;
    }

<<<<<<< HEAD
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
=======
    public function getTableSearchIndicator(): ?string
>>>>>>> 414a4ffcb (.)
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
=======
        return new Collection;
>>>>>>> 414a4ffcb (.)
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
=======
    public function getMountedTableAction(): ?string
>>>>>>> 414a4ffcb (.)
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
=======
    public function getMountedTableBulkAction(): ?string
>>>>>>> 414a4ffcb (.)
    {
        return null;
    }

    public function getMountedTableBulkActionForm(): mixed
    {
        return null;
    }

<<<<<<< HEAD
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
=======
    public function getActiveTableLocale(): ?string
>>>>>>> 414a4ffcb (.)
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
=======
>>>>>>> 414a4ffcb (.)

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
=======
>>>>>>> 414a4ffcb (.)

    public function parseTableFilterName(): string
    {
        return '';
    }

    public function makeFilamentTranslatableContentDriver(): mixed
    {
        return null;
    }
}
