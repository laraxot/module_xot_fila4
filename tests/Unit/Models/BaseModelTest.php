<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
namespace Modules\Xot\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
=======
=======
namespace Modules\Xot\Tests\Unit\Models\BaseModelTest;

namespace Modules\Xot\Tests\Unit\Models;


>>>>>>> a12f125f4a (.)
=======
namespace Modules\Xot\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
>>>>>>> b93ef594b4 (.)
=======
namespace Modules\Xot\Tests\Unit\Models;

use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
use Illuminate\Database\Eloquent\Model;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

uses(TestCase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel {
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
