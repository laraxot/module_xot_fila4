<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
namespace Modules\Xot\Tests\Unit\Models\BaseModelTest;

namespace Modules\Xot\Tests\Unit\Models;


<<<<<<< HEAD
namespace Modules\Xot\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
namespace Modules\Xot\Tests\Unit\Models;

use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
use Illuminate\Database\Eloquent\Model;

uses(TestCase::class);

beforeEach(function () {
namespace Modules\Xot\Tests\Unit\Models\BaseModelTest;

namespace Modules\Xot\Tests\Unit\Models;


namespace Modules\Xot\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
namespace Modules\Xot\Tests\Unit\Models;

use Modules\Xot\Models\BaseModel;
use Modules\Xot\Tests\TestCase;
use Illuminate\Database\Eloquent\Model;

uses(TestCase::class);

beforeEach(function () {
namespace Modules\Xot\Tests\Unit\Models\BaseModelTest;

namespace Modules\Xot\Tests\Unit\Models;



uses(TestCase::class);

beforeEach(function () {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
namespace Modules\Xot\Tests\Unit\Models\BaseModelTest;

namespace Modules\Xot\Tests\Unit\Models;


=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)

uses(TestCase::class);

beforeEach(function () {
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> a67e542f (.)
    $this->baseModel = new class extends BaseModel
    {
=======
>>>>>>> 218dfed3 (.)
    $this->baseModel = new class extends BaseModel
    {
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    $this->baseModel = new class extends BaseModel {
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel
    {
    $this->baseModel = new class extends BaseModel
    {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel
    {
    $this->baseModel = new class extends BaseModel
    {
    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {

    $this->baseModel = new class extends BaseModel {
    $this->baseModel = new class extends BaseModel {
=======
>>>>>>> ca9324a4 (.)
=======
    $this->baseModel = new class extends BaseModel {
=======

>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
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
