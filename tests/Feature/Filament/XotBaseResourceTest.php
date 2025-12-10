<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Tests\Feature\Filament;

use Filament\Resources\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Tests\TestCase;
=======
namespace Modules\Xot\Tests\Feature\Filament;

use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Tests\TestCase;
use Filament\Resources\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
    $this->resource = new class extends XotBaseResource {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
<<<<<<< HEAD
        protected static null|string $model = null;

        protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

        protected static string | \UnitEnum | null $navigationGroup = 'Test Group';

        protected static null|int $navigationSort = 1;
=======
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;

=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
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
namespace Modules\Xot\Tests\Feature\Filament;

use Filament\Resources\Resource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class TestXotBaseResource extends XotBaseResource
{
    protected static ?string $model = null;

<<<<<<< HEAD
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

    protected static ?int $navigationSort = 1;

    /**
     * @return array<int, \Filament\Support\Contracts\HasLabel|string>
     */
    public static function getFormSchema(): array
    {
        return [];
    }
}
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;

        protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

    protected static ?int $navigationSort = 1;

<<<<<<< HEAD
    /**
     * @return array<int, \Filament\Support\Contracts\HasLabel|string>
     */
    public static function getFormSchema(): array
    {
        return [];
    }
}
=======
        protected static null|int $navigationSort = 1;
<<<<<<< HEAD
=======
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)

        protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

<<<<<<< HEAD
        protected static string | \UnitEnum | null $navigationGroup = 'Test Group';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
        protected static ?int $navigationSort = 1;
    };

    // Assert
    expect($resource)->toBeInstanceOf(XotBaseResource::class);
});
        protected static null|int $navigationSort = 1;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
        protected static null|int $navigationSort = 1;
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        protected static ?string $model = null;
        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
        protected static ?string $navigationGroup = 'Test Group';
        protected static ?int $navigationSort = 1;
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        protected static null|int $navigationSort = 1;
<<<<<<< HEAD
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
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;

namespace Modules\Xot\Tests\Feature\Filament;


        protected static ?int $navigationSort = 1;
<<<<<<< HEAD
        protected static null|int $navigationSort = 1;
        protected static null|int $navigationSort = 1;
test('xot base resource extends filament resource', function (): void {
    /* @phpstan-ignore-next-line property.notFound */

        protected static ?int $navigationSort = 1;
beforeEach(function () {
    $this->resource = new class extends XotBaseResource
    {
        protected static ?string $model = null;
beforeEach(function () {
    $this->resource = new class extends XotBaseResource {
        protected static null|string $model = null;

        protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

        protected static string | \UnitEnum | null $navigationGroup = 'Test Group';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

    protected static ?int $navigationSort = 1;

    /**
     * @return array<int, \Filament\Support\Contracts\HasLabel|string>
     */
    public static function getFormSchema(): array
    {
        return [];
    }
}
beforeEach(function () {
    $this->resource = new class extends XotBaseResource
    {
        protected static ?string $model = null;

        protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';


        protected static ?int $navigationSort = 1;
        protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

        protected static ?int $navigationSort = 1;
        protected static null|int $navigationSort = 1;
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;

namespace Modules\Xot\Tests\Feature\Filament;


        protected static ?int $navigationSort = 1;
        protected static ?string $model = null;
        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
        protected static ?string $navigationGroup = 'Test Group';
        protected static ?int $navigationSort = 1;
beforeEach(function () {
    $this->resource = new class() extends XotBaseResource
    {
        protected static ?string $model = null;

        protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

        protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

        protected static ?int $navigationSort = 1;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

    protected static ?int $navigationSort = 1;

    /**
     * @return array<int, \Filament\Support\Contracts\HasLabel|string>
     */
    public static function getFormSchema(): array
    {
        return [];
    }
}
        protected static null|int $navigationSort = 1;
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;
beforeEach(function () {
    $this->resource = new class extends XotBaseResource
    {
        protected static ?string $model = null;

        protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';


        protected static ?int $navigationSort = 1;
        protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

        protected static ?int $navigationSort = 1;
        protected static null|int $navigationSort = 1;
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
        protected static null|int $navigationSort = 1;
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
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
test('xot base resource extends filament resource', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
=======

        protected static ?int $navigationSort = 1;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> b7afadf9 (.)
beforeEach(function () {
    $this->resource = new class extends XotBaseResource
    {
        protected static ?string $model = null;

        protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

        protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

        protected static ?int $navigationSort = 1;
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
=======
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string|\UnitEnum|null $navigationGroup = 'Test Group';

    protected static ?int $navigationSort = 1;

<<<<<<< HEAD
    /**
     * @return array<int, \Filament\Support\Contracts\HasLabel|string>
     */
    public static function getFormSchema(): array
    {
        return [];
    }
}
=======
        protected static null|int $navigationSort = 1;
<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace Modules\Xot\Tests\Feature\Filament\XotBaseResourceTest;
>>>>>>> d2b0a27 (.)

uses(TestCase::class);

<<<<<<< HEAD
test('xot base resource extends filament resource', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
=======

        protected static ?int $navigationSort = 1;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    };
});

test('xot base resource extends filament resource', function () {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    expect($this->resource)->toBeInstanceOf(Resource::class);
});

test('xot base resource has navigation icon', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
    expect($this->resource::getNavigationIcon())->toBe('heroicon-o-rectangle-stack');
});

test('xot base resource has navigation group', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
    expect($this->resource::getNavigationGroup())->toBe('Test Group');
});

test('xot base resource has navigation sort', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
    expect($this->resource::getNavigationSort())->toBe(1);
});

test('xot base resource can be instantiated', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
    expect($this->resource)->toBeInstanceOf(XotBaseResource::class);
});
