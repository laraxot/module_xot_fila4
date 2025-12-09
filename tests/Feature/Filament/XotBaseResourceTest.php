<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Tests\Feature\Filament;

use Filament\Resources\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->resource = new class extends XotBaseResource
    {
        protected static ?string $model = null;
=======
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;
>>>>>>> 5a14301c (.)

        protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

        protected static string | \UnitEnum | null $navigationGroup = 'Test Group';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        protected static ?int $navigationSort = 1;
=======
        protected static null|int $navigationSort = 1;
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
        protected static null|int $navigationSort = 1;
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        protected static ?string $model = null;
        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
        protected static ?string $navigationGroup = 'Test Group';
        protected static ?int $navigationSort = 1;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        protected static null|int $navigationSort = 1;
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
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;

namespace Modules\Xot\Tests\Feature\Filament;


        protected static ?int $navigationSort = 1;
>>>>>>> f1d4085 (.)
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
        protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
    };
});

test('xot base resource extends filament resource', function () {
    expect($this->resource)->toBeInstanceOf(Resource::class);
});

test('xot base resource has navigation icon', function () {
    expect($this->resource::getNavigationIcon())->toBe('heroicon-o-rectangle-stack');
});

test('xot base resource has navigation group', function () {
    expect($this->resource::getNavigationGroup())->toBe('Test Group');
});

test('xot base resource has navigation sort', function () {
    expect($this->resource::getNavigationSort())->toBe(1);
});

test('xot base resource can be instantiated', function () {
    expect($this->resource)->toBeInstanceOf(XotBaseResource::class);
});
