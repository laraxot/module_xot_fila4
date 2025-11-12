<?php

declare(strict_types=1);

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

    /**
     * @return array<int, \Filament\Support\Contracts\HasLabel|string>
     */
    public static function getFormSchema(): array
    {
        return [];
    }
}

uses(TestCase::class);

<<<<<<< HEAD
/**
 * @property TestXotBaseResource $resource
 */
beforeEach(function (): void {
    $this->resource = new TestXotBaseResource();
});

=======
>>>>>>> c07dd86 (.)
test('xot base resource extends filament resource', function (): void {
    $resource = new TestXotBaseResource();
    expect($resource)->toBeInstanceOf(Resource::class);
});

test('xot base resource has navigation icon', function (): void {
    expect(TestXotBaseResource::getNavigationIcon())->toBe('heroicon-o-rectangle-stack');
});

test('xot base resource has navigation group', function (): void {
    expect(TestXotBaseResource::getNavigationGroup())->toBe('Test Group');
});

test('xot base resource has navigation sort', function (): void {
    expect(TestXotBaseResource::getNavigationSort())->toBe(1);
});

test('xot base resource can be instantiated', function (): void {
    $resource = new TestXotBaseResource();
    expect($resource)->toBeInstanceOf(XotBaseResource::class);
});
