<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
=======
namespace Modules\Xot\Tests\Unit\Models\BaseModelTest;

namespace Modules\Xot\Tests\Unit\Models;


>>>>>>> f1d4085 (.)

uses(TestCase::class);

beforeEach(function () {
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
    $this->baseModel = new class extends BaseModel
    {
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 5a14301c (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 3fbbf1f5 (.)
=======
    $this->baseModel = new class extends BaseModel {
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 399f46d3 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 17684f52 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel {
=======

>>>>>>> a12f125f4a (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> b93ef594b4 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> ca9324a4 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
    $this->baseModel = new class extends BaseModel {
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> ca9324a4 (.)
=======
    $this->baseModel = new class extends BaseModel {
=======

>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 9db27d12 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 5a14301c (.)
=======
    $this->baseModel = new class extends BaseModel {
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> ca9324a4 (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 5a14301c (.)
=======
    $this->baseModel = new class extends BaseModel {
=======

>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        protected $table = 'test_table';
    };
});

test('base model extends eloquent model', function () {
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function () {
    expect($this->baseModel->getTable())->toBe('test_table');
});

test('base model has timestamps enabled', function () {
    expect($this->baseModel->usesTimestamps())->toBeTrue();
});

test('base model has soft deletes disabled by default', function () {
    expect($this->baseModel->usesSoftDeletes())->toBeFalse();
});

test('base model can be instantiated', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
});
