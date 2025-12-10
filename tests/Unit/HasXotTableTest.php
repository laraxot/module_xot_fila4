<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
namespace Modules\Xot\Tests\Unit;

use Filament\Tables\Table;
use Mockery;
use Modules\Xot\Tests\Unit\Support\DummyTestModel;
use Modules\Xot\Tests\Unit\Support\HasTableWithoutOptionalMethodsTestClass;
use Modules\Xot\Tests\Unit\Support\HasTableWithXotTestClass;
<<<<<<< HEAD
use Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
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
>>>>>>> 5cf46378 (.)

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

afterEach(function (): void {
    Mockery::close();
});

<<<<<<< HEAD
<<<<<<< HEAD
it('tests table method with all methods implemented', function () {
=======
<<<<<<< HEAD
it('tests table method with all methods implemented', function (): void {
=======
it('tests table method with all methods implemented', function () {
=======
it('tests table method with all methods implemented', function (): void {
=======
it('tests table method with all methods implemented', function () {
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    // Avoid DB/Schema access inside TableExistsByModelClassActions
    /** @phpstan-ignore-next-line method.notFound */
    Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
        ->shouldReceive('execute')
        ->andReturn(true);

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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        // Avoid DB/Schema access inside TableExistsByModelClassActions
        Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
            ->shouldReceive('execute')
            ->andReturn(true);
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

>>>>>>> 7468a7d2 (.)
=======

>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

    // Other required method stubs
=======

    // Other required method stubs
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======

    // Other required method stubs
>>>>>>> 7468a7d2 (.)
=======

    // Other required method stubs
>>>>>>> 5cf46378 (.)
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
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    // Stub optional methods to avoid resolving translator / actions
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableHeaderActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableBulkActions')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5cf46378 (.)
    /** @phpstan-ignore-next-line method.nonObject */
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
<<<<<<< HEAD
=======
=======
    $mock->shouldReceive('getTableFiltersFormColumns')
        ->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')
        ->andReturn([]);
>>>>>>> f1d4085 (.)
=======
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 300ef70 (.)
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    $mock->shouldReceive('getTableFiltersFormColumns')
        ->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')
        ->andReturn([]);
>>>>>>> f1d4085 (.)
=======
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

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
    /* @phpstan-ignore-next-line argument.templateType */
    expect($result)->toBe($tableMock);
});

<<<<<<< HEAD
<<<<<<< HEAD
it('tests table method with no optional methods implemented', function () {
=======
<<<<<<< HEAD
it('tests table method with no optional methods implemented', function (): void {
=======
it('tests table method with no optional methods implemented', function () {
=======
it('tests table method with no optional methods implemented', function (): void {
=======
it('tests table method with no optional methods implemented', function () {
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    // Avoid DB/Schema access inside TableExistsByModelClassActions
    /* @phpstan-ignore-next-line method.notFound */
    Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
        ->shouldReceive('execute')
        ->andReturn(true);

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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        // Avoid DB/Schema access inside TableExistsByModelClassActions
        Mockery::mock('overload:Modules\\Xot\\Actions\\Model\\TableExistsByModelClassActions')
            ->shouldReceive('execute')
            ->andReturn(true);
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

>>>>>>> 7468a7d2 (.)
=======

>>>>>>> 5cf46378 (.)
        // Create partial mock and defer missing to real methods so trait's table() runs
        $mock = Mockery::mock(HasTableWithoutOptionalMethods::class)
            ->makePartial()
            ->shouldDeferMissing();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

    // Other required method stubs
=======

    // Other required method stubs
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======

    // Other required method stubs
>>>>>>> 7468a7d2 (.)
=======

    // Other required method stubs
>>>>>>> 5cf46378 (.)
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
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    // Avoid constructing Filament Actions which require translator binding
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableHeaderActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableActions')->andReturn([]);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableBulkActions')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5cf46378 (.)
    /** @phpstan-ignore-next-line method.nonObject */
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
<<<<<<< HEAD
=======
=======
    $mock->shouldReceive('getTableFiltersFormColumns')
        ->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')
        ->andReturn([]);
>>>>>>> f1d4085 (.)
=======
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 300ef70 (.)
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    /** @phpstan-ignore-next-line method.nonObject */
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    $mock->shouldReceive('getTableFiltersFormColumns')
        ->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')
        ->andReturn([]);
>>>>>>> f1d4085 (.)
=======
    $mock->shouldReceive('getTableFiltersFormColumns')->andReturn(1);
    $mock->shouldReceive('getTableEmptyStateActions')->andReturn([]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
class DummyModel extends \Illuminate\Database\Eloquent\Model
{
    // Empty dummy model just to satisfy instanceof checks
}
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
class DummyModel extends Model
{
    // Empty dummy model just to satisfy instanceof checks
}
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
