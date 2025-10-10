<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature\Filament;

use Filament\Resources\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function (): void {
    $this->resource = new TestXotBaseResource();
});

test('xot base resource extends filament resource', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->resource)->toBeInstanceOf(Resource::class);
});

test('xot base resource has navigation icon', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->resource::getNavigationIcon())->toBe('heroicon-o-rectangle-stack');
});

test('xot base resource has navigation group', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->resource::getNavigationGroup())->toBe('Test Group');
});

test('xot base resource has navigation sort', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->resource::getNavigationSort())->toBe(1);
});

test('xot base resource can be instantiated', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->resource)->toBeInstanceOf(XotBaseResource::class);
});
