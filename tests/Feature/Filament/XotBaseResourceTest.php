<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature\Filament;

use Filament\Resources\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->resource = new class extends XotBaseResource
    {
        protected static ?string $model = null;
=======
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;
>>>>>>> 5a14301c (.)

        protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

        protected static string | \UnitEnum | null $navigationGroup = 'Test Group';

<<<<<<< HEAD
        protected static ?int $navigationSort = 1;
=======
        protected static null|int $navigationSort = 1;
>>>>>>> 5a14301c (.)
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
