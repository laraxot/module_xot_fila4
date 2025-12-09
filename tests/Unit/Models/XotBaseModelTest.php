<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Traits\Updater;
use Tests\TestCase;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Tests\TestCase;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Traits\Updater;
>>>>>>> 5a14301c (.)

uses(TestCase::class);

test('xot base model extends eloquent model', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);

    expect($reflection->isSubclassOf(Model::class))->toBeTrue();
<<<<<<< HEAD
=======
=======
use Modules\Xot\Models\XotBaseModel;
use Modules\Xot\Traits\Updater;

uses(Tests\TestCase::class);

test('xot base model extends eloquent model', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
    
    expect($reflection->isSubclassOf(\Illuminate\Database\Eloquent\Model::class))->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
});

test('xot base model is abstract', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    expect($reflection->isAbstract())->toBeTrue();
});

test('xot base model uses updater trait', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
    $traits = $reflection->getTraitNames();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    expect($traits)->toContain(Updater::class);
});

test('xot base model has correct snake attributes setting', function (): void {
    expect(XotBaseModel::$snakeAttributes)->toBeTrue();
});

test('xot base model has correct per page setting', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
    $perPageProperty = $reflection->getProperty('perPage');
    // For protected instance property on abstract class, assert the default value
    $default = $perPageProperty->getDefaultValue();
    expect($default)->toBe(30);
});

test('xot base model has correct namespace', function (): void {
    expect(XotBaseModel::class)->toContain('Modules\Xot\Models');
});

test('xot base model has correct strict types declaration', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
    $filename = $reflection->getFileName();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    if ($filename) {
        $content = file_get_contents($filename);
        expect($content)->toContain('declare(strict_types=1);');
    }
});

test('xot base model has correct use statements', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
    $filename = $reflection->getFileName();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    if ($filename) {
        $content = file_get_contents($filename);
        expect($content)->toContain('use Illuminate\Database\Eloquent\Model;');
        expect($content)->toContain('use Modules\Xot\Traits\Updater;');
    }
});

test('xot base model has correct property types', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    $snakeAttributesProperty = $reflection->getProperty('snakeAttributes');
    $perPageProperty = $reflection->getProperty('perPage');

    $snakeType = $snakeAttributesProperty->getType();
    $perPageType = $perPageProperty->getType();

<<<<<<< HEAD
=======
=======
    
    $snakeAttributesProperty = $reflection->getProperty('snakeAttributes');
    $perPageProperty = $reflection->getProperty('perPage');
    
    $snakeType = $snakeAttributesProperty->getType();
    $perPageType = $perPageProperty->getType();
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    // Some properties may not have explicit type declarations; in that case just ensure defaults are as expected
    if ($snakeType !== null) {
        expect($snakeType->getName())->toBe('bool');
    } else {
        expect(XotBaseModel::$snakeAttributes)->toBeTrue();
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    if ($perPageType !== null) {
        expect($perPageType->getName())->toBe('int');
    } else {
        expect($perPageProperty->getDefaultValue())->toBe(30);
    }
});

test('xot base model has correct property visibility', function (): void {
    $reflection = new ReflectionClass(XotBaseModel::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    $snakeAttributesProperty = $reflection->getProperty('snakeAttributes');
    $perPageProperty = $reflection->getProperty('perPage');

<<<<<<< HEAD
=======
=======
    
    $snakeAttributesProperty = $reflection->getProperty('snakeAttributes');
    $perPageProperty = $reflection->getProperty('perPage');
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    expect($snakeAttributesProperty->isPublic())->toBeTrue();
    expect($perPageProperty->isProtected())->toBeTrue();
});
