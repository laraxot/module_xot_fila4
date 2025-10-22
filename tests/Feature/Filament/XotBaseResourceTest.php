<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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

uses(TestCase::class);

<<<<<<< HEAD
test('xot base resource extends filament resource', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
=======

        protected static ?int $navigationSort = 1;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    };
});

test('xot base resource extends filament resource', function () {
>>>>>>> d2b0a27 (.)
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
