<?php

declare(strict_types=1);

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Models\Module;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Tests\TestCase;

use function Safe\json_encode;

uses(TestCase::class);

test('it extends correct base class', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel)->toBeInstanceOf(XotBaseModel::class)
        ->and($baseModel)->toBeInstanceOf(Model::class);
});

test('it has required eloquent methods', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getTable'))->toBeTrue()
        ->and(method_exists($baseModel, 'getConnection'))->toBeTrue()
        ->and(method_exists($baseModel, 'getKeyName'))->toBeTrue();
});

test('it can be instantiated without database', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel)->toBeInstanceOf(BaseModel::class)
        ->and($baseModel)->not->toBeNull();
});

test('it supports table name override', function (): void {
    $baseModel = new BaseModel;
    $tableName = $baseModel->getTable();

    expect($tableName)->toBeString()
        ->and($tableName)->not->toBeEmpty();
});

test('it supports connection override', function (): void {
    $baseModel = new BaseModel;
    $connection = $baseModel->getConnection();

    expect($connection)->not->toBeNull()
        ->and($connection)->toBeInstanceOf(ConnectionInterface::class);
});

test('it supports key name configuration', function (): void {
    $baseModel = new BaseModel;
    $keyName = $baseModel->getKeyName();

    expect($keyName)->toBeString()
        ->and($keyName)->toBe('id');
});

test('it can be used as base for other models', function (): void {
    $module = new Module;

    expect($module)->toBeInstanceOf(XotBaseModel::class)
        ->and($module)->toBeInstanceOf(Model::class);
});

test('it supports model configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getFillable())->toBeArray()
        ->and($baseModel->getHidden())->toBeArray()
        ->and($baseModel->getCasts())->toBeArray();
});

test('it can be serialized and unserialized', function (): void {
    $baseModel = new BaseModel;
    $serialized = serialize($baseModel);

    expect($serialized)->toBeString()->and($serialized)->not->toBeEmpty();

    $unserialized = unserialize($serialized);
    expect($unserialized)->toBeInstanceOf(BaseModel::class);
});

test('it supports json serialization', function (): void {
    $baseModel = new BaseModel;
    $json = json_encode($baseModel);

    expect($json)->toBeString()
        ->and($json)->not->toBeEmpty()
        ->and($json)->not->toBeFalse();
});

test('it supports array conversion', function (): void {
    $baseModel = new BaseModel;
    $array = $baseModel->toArray();

    expect($array)->toBeArray()
        ->and($array)->not->toBeEmpty();
});

test('it supports json conversion', function (): void {
    $baseModel = new BaseModel;
    $json = $baseModel->toJson();

    expect($json)->toBeString()
        ->and($json)->not->toBeEmpty();
});

test('it supports relationship loading', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'load'))->toBeTrue();
});

test('it supports attribute access methods', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getAttribute'))->toBeTrue()
        ->and(method_exists($baseModel, 'setAttribute'))->toBeTrue();
});

test('it supports mass assignment configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getFillable())->toBeArray()
        ->and($baseModel->getGuarded())->toBeArray();
});

test('it supports model events', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'fireModelEvent'))->toBeTrue();
});

test('it supports observers', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getObservableEvents'))->toBeTrue();
});

test('it supports scopes', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'addGlobalScope'))->toBeTrue();
});

test('it supports accessors and mutators', function (): void {
    $baseModel = new BaseModel;

    expect(method_exists($baseModel, 'getAttributeValue'))->toBeTrue()
        ->and(method_exists($baseModel, 'setAttribute'))->toBeTrue();
});

test('it supports casting configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getCasts())->toBeArray();
});

test('it supports timestamps configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->usesTimestamps())->toBeBool();
});

test('it supports dates configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getDates())->toBeArray();
});

test('it supports hidden attributes', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getHidden())->toBeArray();
});

test('it supports visible attributes', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getVisible())->toBeArray();
});

test('it supports appends configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getAppends())->toBeArray();
});

test('it supports eager loading configuration', function (): void {
    $baseModel = new BaseModel;

    expect($baseModel->getWith())->toBeArray();
});
