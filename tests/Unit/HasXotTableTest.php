<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Table;
use Mockery;
use Modules\Xot\Tests\Unit\Support\DummyTestModel;
use Modules\Xot\Tests\Unit\Support\HasTableWithoutOptionalMethodsTestClass;
use Modules\Xot\Tests\Unit\Support\HasTableWithXotTestClass;
use Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Tests\TestCase;
use Mockery;
use Filament\Tables\Table;
use Modules\Xot\Tests\Unit\Support\DummyTestModel;
use Modules\Xot\Tests\Unit\Support\HasTableWithoutOptionalMethodsTestClass;
use Modules\Xot\Tests\Unit\Support\HasTableWithXotTestClass;
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
use Tests\TestCase;
use Illuminate\Database\Eloquent\Model;
use Mockery;
use Filament\Tables\Table;
use Filament\Tables\Contracts\HasTable;
use Modules\Xot\Filament\Traits\HasXotTable;
use Illuminate\Support\Collection;
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)

uses(TestCase::class);

afterEach(function (): void {
    Mockery::close();
});

it('tests table method with all methods implemented', function (): void {
    // Avoid DB/Schema access inside TableExistsByModelClassActions
<<<<<<< HEAD
    $mock = Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions');
    $mock->shouldReceive('execute')->andReturn(true);
=======
    /* @phpstan-ignore-next-line method.notFound */
    Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
        ->shouldReceive('execute')
        ->andReturn(true);
>>>>>>> c07dd86 (.)

    // Create partial mock and defer missing to real methods so trait's table() runs
    $mock = Mockery::mock(HasTableWithXotTestClass::class)->makePartial()->shouldDeferMissing();

    // Expect getTableHeaderActions to be called
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableHeaderActions')->once()->andReturn([]);

    // Expect getTableActions to be called
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableActions')->once()->andReturn([]);

    // Expect getTableBulkActions to be called
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableBulkActions')->once()->andReturn([]);

    // Other required method stubs
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getModelClass')->andReturn(DummyTestModel::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableRecordTitleAttribute')->andReturn('name');
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableHeading')->andReturn('Test Table');
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableFilters')->andReturn([]);
    // Stub optional methods to avoid resolving translator / actions
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableHeaderActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableBulkActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);

    // Create a mock for Table
    $tableMock = Mockery::mock(Table::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('recordTitleAttribute')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('heading')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('columns')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('contentGrid')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('filters')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('filtersLayout')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('filtersFormColumns')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('persistFiltersInSession')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('headerActions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('actions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('bulkActions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('actionsPosition')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('emptyStateActions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('striped')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('paginated')->andReturnSelf();

    // Call the table method
    /** @phpstan-ignore-next-line method.nonObject */
    $result = $mock->table($tableMock);

    // Assert the result is a Table instance
<<<<<<< HEAD
    /** @var mixed $result */
=======
    /* @phpstan-ignore-next-line argument.templateType */
>>>>>>> c07dd86 (.)
    expect($result)->toBe($tableMock);
});

it('tests table method with no optional methods implemented', function (): void {
    // Avoid DB/Schema access inside TableExistsByModelClassActions
<<<<<<< HEAD
    $mockTableExists = Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions');
    $mockTableExists->shouldReceive('execute')->andReturn(true);
=======
    /* @phpstan-ignore-next-line method.notFound */
    Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
        ->shouldReceive('execute')
        ->andReturn(true);
>>>>>>> c07dd86 (.)

    // Create partial mock and defer missing to real methods so trait's table() runs
    $mock = Mockery::mock(HasTableWithoutOptionalMethodsTestClass::class)->makePartial()->shouldDeferMissing();

    // Other required method stubs
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getModelClass')->andReturn(DummyTestModel::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableRecordTitleAttribute')->andReturn('name');
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableHeading')->andReturn('Test Table');
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableFilters')->andReturn([]);
    // Avoid constructing Filament Actions which require translator binding
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableHeaderActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableBulkActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);

    // Create a mock for Table
    $tableMock = Mockery::mock(Table::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('recordTitleAttribute')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('heading')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('columns')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('contentGrid')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('filters')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('filtersLayout')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('filtersFormColumns')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('persistFiltersInSession')->andReturnSelf();
    // headerActions, actions, and bulkActions are called with empty arrays
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('headerActions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('actions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('bulkActions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('actionsPosition')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('emptyStateActions')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('striped')->andReturnSelf();
    /** @phpstan-ignore-next-line method.nonObject */
    $tableMock->shouldReceive('paginated')->andReturnSelf();

    // Call the table method
    /** @phpstan-ignore-next-line method.nonObject */
    $result = $mock->table($tableMock);

    // Assert the result is a Table instance
    /* @phpstan-ignore-next-line argument.templateType */
    expect($result)->toBe($tableMock);
});
