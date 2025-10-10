<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;

uses(TestCase::class);

beforeEach(function (): void {
    $this->baseModel = new class extends BaseModel
    {
        protected $table = 'test_table';
    };
});

test('base model extends eloquent model', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel->getTable())->toBe('test_table');
});

test('base model has timestamps enabled', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel->usesTimestamps())->toBeTrue();
});

test('base model has soft deletes disabled by default', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel->usesSoftDeletes())->toBeFalse();
});

test('base model can be instantiated', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
});
