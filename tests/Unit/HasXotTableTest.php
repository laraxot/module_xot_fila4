<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

use Filament\Tables\Table;
use Mockery;
use Modules\Xot\Tests\Unit\Support\DummyTestModel;
use Modules\Xot\Tests\Unit\Support\HasTableWithoutOptionalMethodsTestClass;
use Modules\Xot\Tests\Unit\Support\HasTableWithXotTestClass;
use Tests\TestCase;
use Tests\TestCase;
use Mockery;
use Filament\Tables\Table;
use Modules\Xot\Tests\Unit\Support\DummyTestModel;
use Modules\Xot\Tests\Unit\Support\HasTableWithoutOptionalMethodsTestClass;
use Modules\Xot\Tests\Unit\Support\HasTableWithXotTestClass;
<<<<<<< HEAD
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
use Tests\TestCase;
use Illuminate\Database\Eloquent\Model;
use Mockery;
use Filament\Tables\Table;
use Filament\Tables\Contracts\HasTable;
use Modules\Xot\Filament\Traits\HasXotTable;
use Illuminate\Support\Collection;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)

uses(TestCase::class);
namespace Modules\Xot\Tests\Unit;

use Tests\TestCase;
use Mockery;
use Filament\Tables\Table;
use Modules\Xot\Tests\Unit\Support\DummyTestModel;
use Modules\Xot\Tests\Unit\Support\HasTableWithoutOptionalMethodsTestClass;
use Modules\Xot\Tests\Unit\Support\HasTableWithXotTestClass;

uses(TestCase::class);
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)

uses(TestCase::class);
<<<<<<< HEAD
=======
=======
=======
namespace Modules\Xot\Tests\Unit;

>>>>>>> b93ef594b4 (.)
use Tests\TestCase;
use Mockery;
use Filament\Tables\Table;
<<<<<<< HEAD
use Filament\Tables\Contracts\HasTable;
use Modules\Xot\Filament\Traits\HasXotTable;
use Illuminate\Support\Collection;
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Tests\Unit\Support\DummyTestModel;
use Modules\Xot\Tests\Unit\Support\HasTableWithoutOptionalMethodsTestClass;
use Modules\Xot\Tests\Unit\Support\HasTableWithXotTestClass;
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======
>>>>>>> ce6fc085 (.)
use Mockery;
use Filament\Tables\Table;
use Filament\Tables\Contracts\HasTable;
use Modules\Xot\Filament\Traits\HasXotTable;
use Illuminate\Support\Collection;

uses(Tests\TestCase::class);
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

afterEach(function () {
    Mockery::close();
});

it('tests table method with all methods implemented', function () {
    // Avoid DB/Schema access inside TableExistsByModelClassActions
    $mock = Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions');
    $mock->shouldReceive('execute')->andReturn(true);

    // Create partial mock and defer missing to real methods so trait's table() runs
    $mock = Mockery::mock(HasTableWithXotTestClass::class)->makePartial()->shouldDeferMissing();

    // Expect getTableHeaderActions to be called
    $mock->shouldReceive('getTableHeaderActions')->once()->andReturn([]);

    // Expect getTableActions to be called
    $mock->shouldReceive('getTableActions')->once()->andReturn([]);

    // Expect getTableBulkActions to be called
    $mock->shouldReceive('getTableBulkActions')->once()->andReturn([]);

    // Other required method stubs
    $mock->shouldReceive('getModelClass')->andReturn(DummyTestModel::class);
    $mock->shouldReceive('getTableRecordTitleAttribute')->andReturn('name');
    $mock->shouldReceive('getTableHeading')->andReturn('Test Table');
    $mock->shouldReceive('getTableFilters')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        // Avoid DB/Schema access inside TableExistsByModelClassActions
        Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
            ->shouldReceive('execute')
            ->andReturn(true);
<<<<<<< HEAD

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

>>>>>>> ce6fc085 (.)
    // Create partial mock and defer missing to real methods so trait's table() runs
    $mock = Mockery::mock(HasTableWithXotTestClass::class)->makePartial()->shouldDeferMissing();

    // Expect getTableHeaderActions to be called
    $mock->shouldReceive('getTableHeaderActions')->once()->andReturn([]);

    // Expect getTableActions to be called
    $mock->shouldReceive('getTableActions')->once()->andReturn([]);

    // Expect getTableBulkActions to be called
    $mock->shouldReceive('getTableBulkActions')->once()->andReturn([]);
<<<<<<< HEAD
=======
=======

    // Other required method stubs
<<<<<<< HEAD
=======

>>>>>>> ce6fc085 (.)
        // Create partial mock and defer missing to real methods so trait's table() runs
        $mock = Mockery::mock(HasTableWithXot::class)
            ->makePartial()
            ->shouldDeferMissing();

    // Expect getTableHeaderActions to be called
    $mock->shouldReceive('getTableHeaderActions')
        ->once()
        ->andReturn([]);

    // Expect getTableActions to be called
    $mock->shouldReceive('getTableActions')
        ->once()
        ->andReturn([]);

    // Expect getTableBulkActions to be called
    $mock->shouldReceive('getTableBulkActions')
        ->once()
        ->andReturn([]);
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

    // Other required method stubs
=======

    // Other required method stubs
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    $mock->shouldReceive('getModelClass')
        ->andReturn(DummyModel::class);
    $mock->shouldReceive('getTableRecordTitleAttribute')
        ->andReturn('name');
    $mock->shouldReceive('getTableHeading')
        ->andReturn('Test Table');
    $mock->shouldReceive('getTableFilters')
        ->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    $mock->shouldReceive('getModelClass')->andReturn(DummyTestModel::class);
    $mock->shouldReceive('getTableRecordTitleAttribute')->andReturn('name');
    $mock->shouldReceive('getTableHeading')->andReturn('Test Table');
    $mock->shouldReceive('getTableFilters')->andReturn([]);
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    // Stub optional methods to avoid resolving translator / actions
    $mock->shouldReceive('getTableHeaderActions')->andReturn([]);
    $mock->shouldReceive('getTableActions')->andReturn([]);
    $mock->shouldReceive('getTableBulkActions')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $mock->shouldReceive('getTableFiltersFormColumns')
        ->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')
        ->andReturn([]);
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);

    // Create a mock for Table
    $tableMock = Mockery::mock(Table::class);
    $tableMock->shouldReceive('recordTitleAttribute')->andReturnSelf();
    $tableMock->shouldReceive('heading')->andReturnSelf();
    $tableMock->shouldReceive('columns')->andReturnSelf();
    $tableMock->shouldReceive('contentGrid')->andReturnSelf();
    $tableMock->shouldReceive('filters')->andReturnSelf();
    $tableMock->shouldReceive('filtersLayout')->andReturnSelf();
    $tableMock->shouldReceive('filtersFormColumns')->andReturnSelf();
    $tableMock->shouldReceive('persistFiltersInSession')->andReturnSelf();
    $tableMock->shouldReceive('headerActions')->andReturnSelf();
    $tableMock->shouldReceive('actions')->andReturnSelf();
    $tableMock->shouldReceive('bulkActions')->andReturnSelf();
    $tableMock->shouldReceive('actionsPosition')->andReturnSelf();
    $tableMock->shouldReceive('emptyStateActions')->andReturnSelf();
    $tableMock->shouldReceive('striped')->andReturnSelf();
    $tableMock->shouldReceive('paginated')->andReturnSelf();

    // Call the table method
    $result = $mock->table($tableMock);

    // Assert the result is a Table instance
    /** @var mixed $result */
    expect($result)->toBe($tableMock);
});

it('tests table method with no optional methods implemented', function () {
    // Avoid DB/Schema access inside TableExistsByModelClassActions
    $mockTableExists = Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions');
    $mockTableExists->shouldReceive('execute')->andReturn(true);

    // Create partial mock and defer missing to real methods so trait's table() runs
    $mock = Mockery::mock(HasTableWithoutOptionalMethodsTestClass::class)->makePartial()->shouldDeferMissing();

    // Other required method stubs
    $mock->shouldReceive('getModelClass')->andReturn(DummyTestModel::class);
    $mock->shouldReceive('getTableRecordTitleAttribute')->andReturn('name');
    $mock->shouldReceive('getTableHeading')->andReturn('Test Table');
    $mock->shouldReceive('getTableFilters')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        // Avoid DB/Schema access inside TableExistsByModelClassActions
        Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
            ->shouldReceive('execute')
            ->andReturn(true);
<<<<<<< HEAD

<<<<<<< HEAD
    // Create partial mock and defer missing to real methods so trait's table() runs
    $mock = Mockery::mock(HasTableWithoutOptionalMethodsTestClass::class)->makePartial()->shouldDeferMissing();
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

    // Create partial mock and defer missing to real methods so trait's table() runs
    $mock = Mockery::mock(HasTableWithoutOptionalMethodsTestClass::class)->makePartial()->shouldDeferMissing();

    // Other required method stubs
<<<<<<< HEAD
=======

>>>>>>> ce6fc085 (.)
        // Create partial mock and defer missing to real methods so trait's table() runs
        $mock = Mockery::mock(HasTableWithoutOptionalMethods::class)
            ->makePartial()
            ->shouldDeferMissing();
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

    // Other required method stubs
=======

    // Other required method stubs
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    $mock->shouldReceive('getModelClass')
        ->andReturn(DummyModel::class);
    $mock->shouldReceive('getTableRecordTitleAttribute')
        ->andReturn('name');
    $mock->shouldReceive('getTableHeading')
        ->andReturn('Test Table');
    $mock->shouldReceive('getTableFilters')
        ->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    $mock->shouldReceive('getModelClass')->andReturn(DummyTestModel::class);
    $mock->shouldReceive('getTableRecordTitleAttribute')->andReturn('name');
    $mock->shouldReceive('getTableHeading')->andReturn('Test Table');
    $mock->shouldReceive('getTableFilters')->andReturn([]);
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    // Avoid constructing Filament Actions which require translator binding
    $mock->shouldReceive('getTableHeaderActions')->andReturn([]);
    $mock->shouldReceive('getTableActions')->andReturn([]);
    $mock->shouldReceive('getTableBulkActions')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $mock->shouldReceive('getTableFiltersFormColumns')
        ->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')
        ->andReturn([]);
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);

    // Create a mock for Table
    $tableMock = Mockery::mock(Table::class);
    $tableMock->shouldReceive('recordTitleAttribute')->andReturnSelf();
    $tableMock->shouldReceive('heading')->andReturnSelf();
    $tableMock->shouldReceive('columns')->andReturnSelf();
    $tableMock->shouldReceive('contentGrid')->andReturnSelf();
    $tableMock->shouldReceive('filters')->andReturnSelf();
    $tableMock->shouldReceive('filtersLayout')->andReturnSelf();
    $tableMock->shouldReceive('filtersFormColumns')->andReturnSelf();
    $tableMock->shouldReceive('persistFiltersInSession')->andReturnSelf();
    // headerActions, actions, and bulkActions are called with empty arrays
    $tableMock->shouldReceive('headerActions')->andReturnSelf();
    $tableMock->shouldReceive('actions')->andReturnSelf();
    $tableMock->shouldReceive('bulkActions')->andReturnSelf();
    $tableMock->shouldReceive('actionsPosition')->andReturnSelf();
    $tableMock->shouldReceive('emptyStateActions')->andReturnSelf();
    $tableMock->shouldReceive('striped')->andReturnSelf();
    $tableMock->shouldReceive('paginated')->andReturnSelf();

    // Call the table method
    $result = $mock->table($tableMock);

    // Assert the result is a Table instance
    expect($result)->toBe($tableMock);
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

/**
 * Dummy class that uses HasTable and HasXotTable traits for testing.
 */
class HasTableWithXot
{
    use HasXotTable;

    public function getLayoutView(): mixed
    {
        $mock = Mockery::mock();
        $mock->shouldReceive('getTableColumns')->andReturn([]);
        $mock->shouldReceive('getTableContentGrid')->andReturn([]);
        return $mock;
    }

    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): ?int
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
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

    public function getTableFiltersForm(): mixed
    {
        return null;
    }

    public function getTableFilterState(string $name): ?array
    {
        return [];
    }

    public function getTableGrouping(): ?string
    {
        return null;
    }

    public function getTableSearchIndicator(): ?string
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

    public function getSelectedTableRecords(bool $shouldFetchSelectedRecords = true): Collection
    {
        return new Collection();
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

    public function getMountedTableAction(): ?string
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

    public function getMountedTableBulkAction(): ?string
    {
        return null;
    }

    public function getMountedTableBulkActionForm(): mixed
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

    public function isTableColumnToggledHidden(): bool
    {
        return false;
    }

    public function callMountedTableAction(): mixed
    {
        return null;
    }

    public function callTableColumnAction(string $name, string $recordKey): mixed
    {
        return null;
    }

    public function deselectAllTableRecords(): void
    {
    }

    public function mountTableAction(): void
    {
    }

    public function mountTableBulkAction(): void
    {
    }

    public function mountedTableActionRecord(): mixed
    {
        return null;
    }

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
    {
        return null;
    }
}

/**
 * Dummy class without the optional methods.
 */
class HasTableWithoutOptionalMethods
{
    use HasXotTable;

    public function getLayoutView(): mixed
    {
        $mock = Mockery::mock();
        $mock->shouldReceive('getTableColumns')->andReturn([]);
        $mock->shouldReceive('getTableContentGrid')->andReturn([]);
        return $mock;
    }

    public function getTableColumns(): array
    {
        return [];
    }

    public function getTable(): Table
    {
        return Mockery::mock(Table::class);
    }

    public function getTablePage(): ?int
    {
        return 1;
    }

    public function getTableRecordsPerPage(): int
    {
        return 10;
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

    public function getTableFiltersForm(): mixed
    {
        return null;
    }

    public function getTableFilterState(string $name): ?array
    {
        return [];
    }

    public function getTableGrouping(): ?string
    {
        return null;
    }

    public function getTableSearchIndicator(): ?string
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

    public function getSelectedTableRecords(): array
    {
        return [];
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

    public function getMountedTableAction(): ?string
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

    public function getMountedTableBulkAction(): ?string
    {
        return null;
    }

    public function getMountedTableBulkActionForm(): mixed
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

    public function isTableColumnToggledHidden(): bool
    {
        return false;
    }

    public function callMountedTableAction(): mixed
    {
        return null;
    }

    public function callTableColumnAction(string $name, string $recordKey): mixed
    {
        return null;
    }

    public function deselectAllTableRecords(): void
    {
    }

    public function mountTableAction(): void
    {
    }

    public function mountTableBulkAction(): void
    {
    }

    public function mountedTableActionRecord(): mixed
    {
        return null;
    }

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
    {
        return null;
    }
}

/**
 * Dummy model class for testing.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class DummyModel extends \Illuminate\Database\Eloquent\Model
{
    // Empty dummy model just to satisfy instanceof checks
}
=======
=======
>>>>>>> ce6fc085 (.)
class DummyModel extends Model
{
    // Empty dummy model just to satisfy instanceof checks
}
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
class DummyModel extends \Illuminate\Database\Eloquent\Model
{
    // Empty dummy model just to satisfy instanceof checks
}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
