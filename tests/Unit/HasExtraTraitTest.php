<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use function Safe\class_uses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Exception;
>>>>>>> 218dfed3 (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
use Modules\Xot\Models\Traits\HasExtraTrait;
use Modules\Xot\Contracts\ExtraContract;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
use Exception;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

describe('HasExtraTrait', function () {
    beforeEach(function () {
        // Create a test model that uses the trait
        $this->testModel = new class extends Model
        {
            use HasExtraTrait;

            protected $table = 'test_models';

        $this->testModel = new class extends Model {
            use HasExtraTrait;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            protected $table = 'test_models';
            protected $fillable = ['name'];

            
            protected $table = 'test_models';
            protected $fillable = ['name'];
            

            protected $table = 'test_models';
            protected $fillable = ['name'];

<<<<<<< HEAD
=======
            
            protected $table = 'test_models';
            protected $fillable = ['name'];
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            // Mock the getExtraClass method
            public function getExtraClass(): string
            {
                return HasExtraTraitTest::class;
            }
        };

        // Create a mock Extra class
        $this->extraClass = new class extends Model implements ExtraContract
        {
            protected $table = 'test_extras';

        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
            protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
            
=======
=======
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            protected function casts(): array
            {
                return [
                    'extra_attributes' => 'collection',
                ];
            }
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD


            public function model(): MorphTo


            
            public function model()

            public function model()

            public function model()
            public function model()

            public function model()

            

            public function model()

            public function model()

            public function model()

            public function model()
            public function model()

=======
=======
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            public function model()
            {
                return $this->morphTo();
            }
        };
    });

    it('uses the trait correctly', function () {
        $traits = class_uses($this->testModel);
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        expect($traits)->toContain(HasExtraTrait::class);
    });

    it('has extra relationship method', function () {
        expect(method_exists($this->testModel, 'extra'))->toBeTrue();
    });

    it('returns null for non-existent extra', function () {
        // Mock the extra relationship to be null
        $this->testModel->extra = null;
<<<<<<< HEAD
<<<<<<< HEAD

        /** @phpstan-ignore-next-line property.notFound */

        $result = $this->testModel->getExtra('non_existent_key');

<<<<<<< HEAD
        
        $result = $this->testModel->getExtra('non_existent_key');
        


        $result = $this->testModel->getExtra('non_existent_key');

        
        $result = $this->testModel->getExtra('non_existent_key');
        


        $result = $this->testModel->getExtra('non_existent_key');


        $result = $this->testModel->getExtra('non_existent_key');

        
        $result = $this->testModel->getExtra('non_existent_key');
        
=======
=======
        
        $result = $this->testModel->getExtra('non_existent_key');
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

        $result = $this->testModel->getExtra('non_existent_key');

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        expect($result)->toBeNull();
    });

    it('can set and get extra attributes', function () {
        // Mock the extra relationship
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class
        {
        $mockExtra = new class {
            public $extra_attributes;
        $mockExtra = new class
        {
            public $extra_attributes;
            public $extra_attributes;
        $mockExtra = new class {
            public $extra_attributes;
        $mockExtra = new class
        {
            public $extra_attributes;
            public $extra_attributes;
        $mockExtra = new class {
            public $extra_attributes;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            public function __construct()
            {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        $this->testModel->extra = $mockExtra;

        $result = $this->testModel->getExtra('test_key');

<<<<<<< HEAD
<<<<<<< HEAD
            
            public function __construct() {

            public function __construct()
            {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        $this->testModel->extra = $mockExtra;

        $result = $this->testModel->getExtra('test_key');

=======
=======
>>>>>>> 218dfed3 (.)
            
            public function __construct() {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
        $result = $this->testModel->getExtra('test_key');
        
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
            public $extra_attributes;
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
        $mockExtra = new class
        {

            public function __construct()
            {
=======
=======
>>>>>>> 2f3197ab (.)
            
            public function __construct() {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
        $result = $this->testModel->getExtra('test_key');
        
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
        $mockExtra = new class
        {
        $mockExtra = new class {
            public $extra_attributes;
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
        $mockExtra = new class
        {

            public function __construct()
            {
            
            public function __construct() {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
        $result = $this->testModel->getExtra('test_key');
        
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
        $mockExtra = new class
        {
            public $extra_attributes;
<<<<<<< HEAD
<<<<<<< HEAD

            public function __construct()
            {
<<<<<<< HEAD
        $mockExtra = new class {
            public $extra_attributes;

            public function __construct()
            {
            
            public function __construct() {
=======
=======
            
            public function __construct() {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

            public function __construct()
            {
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                $this->extra_attributes = collect([
                    'string_value' => 'test_string',
                    'int_value' => 123,
                    'bool_value' => true,
                    'array_value' => ['nested', 'array'],
                    'null_value' => null,
                ]);
            }
        };
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        $this->testModel->extra = $mockExtra;

        expect($this->testModel->getExtra('string_value'))
            ->toBe('test_string')
            ->and($this->testModel->getExtra('int_value'))
            ->toBe(123)
            ->and($this->testModel->getExtra('bool_value'))
            ->toBe(true)
            ->and($this->testModel->getExtra('array_value'))
            ->toBe(['nested', 'array'])
            ->and($this->testModel->getExtra('null_value'))
            ->toBeNull();
<<<<<<< HEAD
=======
        
        $this->testModel->extra = $mockExtra;
        
        expect($this->testModel->getExtra('string_value'))->toBe('test_string')
            ->and($this->testModel->getExtra('int_value'))->toBe(123)
            ->and($this->testModel->getExtra('bool_value'))->toBe(true)
            ->and($this->testModel->getExtra('array_value'))->toBe(['nested', 'array'])
            ->and($this->testModel->getExtra('null_value'))->toBeNull();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    });

    it('throws exception for invalid data types', function () {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
            public $extra_attributes;
    });

    it('throws exception for invalid data types', function () {
        $mockExtra = new class
        {

            public function __construct()
            {
        
        $this->testModel->extra = $mockExtra;
        
        expect($this->testModel->getExtra('string_value'))->toBe('test_string')
            ->and($this->testModel->getExtra('int_value'))->toBe(123)
            ->and($this->testModel->getExtra('bool_value'))->toBe(true)
            ->and($this->testModel->getExtra('array_value'))->toBe(['nested', 'array'])
            ->and($this->testModel->getExtra('null_value'))->toBeNull();
    });

    it('throws exception for invalid data types', function () {
        $mockExtra = new class
        {

        $this->testModel->extra = $mockExtra;

        expect($this->testModel->getExtra('string_value'))
            ->toBe('test_string')
            ->and($this->testModel->getExtra('int_value'))
            ->toBe(123)
            ->and($this->testModel->getExtra('bool_value'))
            ->toBe(true)
            ->and($this->testModel->getExtra('array_value'))
            ->toBe(['nested', 'array'])
            ->and($this->testModel->getExtra('null_value'))
            ->toBeNull();
    });

    it('throws exception for invalid data types', function () {
        $mockExtra = new class {
            public $extra_attributes;
    });

    it('throws exception for invalid data types', function () {
        $mockExtra = new class
        {

            public function __construct()
            {
        
        $this->testModel->extra = $mockExtra;
        
        expect($this->testModel->getExtra('string_value'))->toBe('test_string')
            ->and($this->testModel->getExtra('int_value'))->toBe(123)
            ->and($this->testModel->getExtra('bool_value'))->toBe(true)
            ->and($this->testModel->getExtra('array_value'))->toBe(['nested', 'array'])
            ->and($this->testModel->getExtra('null_value'))->toBeNull();
    });

    it('throws exception for invalid data types', function () {
        $mockExtra = new class
        {
            public $extra_attributes;
<<<<<<< HEAD
<<<<<<< HEAD

            public function __construct()
            {
=======
            
            public function __construct() {
>>>>>>> f1d4085 (.)
=======

            public function __construct()
            {
>>>>>>> 73eab74 (.)
                $this->extra_attributes = collect([
            public $extra_attributes;

            public function __construct()
            {
            
            public function __construct() {
                $this->extra_attributes = collect([
                    'invalid_value' => new stdClass(), // Object that's not allowed
                    'invalid_value' => new stdClass(), // Object that's not allowed
                    'invalid_value' => new stdClass(), // Object that's not allowed
                    'invalid_value' => new stdClass(), // Object that's not allowed
                    'invalid_value' => new stdClass(), // Object that's not allowed
                    'invalid_value' => new stdClass(), // Object that's not allowed
                ]);
            }
        };
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        $this->testModel->extra = $mockExtra;

<<<<<<< HEAD
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 88ea7103 (.)
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        
        $this->testModel->extra = $mockExtra;
        
        expect(fn () => $this->testModel->getExtra('invalid_value'))
            ->toThrow(Exception::class);
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)

        $this->testModel->extra = $mockExtra;

        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
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
>>>>>>> 218dfed3 (.)
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    });

    it('has setExtra method', function () {
        expect(method_exists($this->testModel, 'setExtra'))->toBeTrue();
    });

    it('validates method signatures', function () {
        $reflection = new ReflectionClass($this->testModel);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        // Check getExtra method signature
        $getExtraMethod = $reflection->getMethod('getExtra');
        expect($getExtraMethod->isPublic())->toBeTrue();

        $parameters = $getExtraMethod->getParameters();
        expect(count($parameters))
            ->toBe(1)
            ->and($parameters[0]->getName())
            ->toBe('name')
            ->and($parameters[0]->getType()?->getName())
            ->toBe('string');

        // Check setExtra method signature
        $setExtraMethod = $reflection->getMethod('setExtra');
        expect($setExtraMethod->isPublic())->toBeTrue();

        $setParameters = $setExtraMethod->getParameters();
        expect(count($setParameters))
            ->toBe(2)
            ->and($setParameters[0]->getName())
            ->toBe('name');

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        $setExtraParamType = $setParameters[0]->getType();
        if ($setExtraParamType instanceof \ReflectionNamedType) {
            expect($setExtraParamType->getName())->toBe('string');
        }
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name');

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        $setExtraParamType = $setParameters[0]->getType();
        if ($setExtraParamType instanceof \ReflectionNamedType) {
            expect($setExtraParamType->getName())->toBe('string');
        }
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name');

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        $setExtraParamType = $setParameters[0]->getType();
        if ($setExtraParamType instanceof \ReflectionNamedType) {
            expect($setExtraParamType->getName())->toBe('string');
        }
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
        

        // Check getExtra method signature
        $getExtraMethod = $reflection->getMethod('getExtra');
        expect($getExtraMethod->isPublic())->toBeTrue();

        $parameters = $getExtraMethod->getParameters();
        expect(count($parameters))
            ->toBe(1)
            ->and($parameters[0]->getName())
            ->toBe('name')
            ->and($parameters[0]->getType()?->getName())
            ->toBe('string');

        // Check setExtra method signature
        $setExtraMethod = $reflection->getMethod('setExtra');
        expect($setExtraMethod->isPublic())->toBeTrue();

        $setParameters = $setExtraMethod->getParameters();
        expect(count($setParameters))
            ->toBe(2)
            ->and($setParameters[0]->getName())
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
        
        // Check getExtra method signature
        $getExtraMethod = $reflection->getMethod('getExtra');
        expect($getExtraMethod->isPublic())->toBeTrue();
        
        $parameters = $getExtraMethod->getParameters();
        expect(count($parameters))->toBe(1)
            ->and($parameters[0]->getName())->toBe('name')
            ->and($parameters[0]->getType()?->getName())->toBe('string');
        
        // Check setExtra method signature
        $setExtraMethod = $reflection->getMethod('setExtra');
        expect($setExtraMethod->isPublic())->toBeTrue();
        
        $setParameters = $setExtraMethod->getParameters();
        expect(count($setParameters))->toBe(2)
            ->and($setParameters[0]->getName())->toBe('name')
            ->and($setParameters[0]->getType()?->getName())->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
<<<<<<< HEAD
=======
        
        // Check getExtra method signature
        $getExtraMethod = $reflection->getMethod('getExtra');
        expect($getExtraMethod->isPublic())->toBeTrue();
        
        $parameters = $getExtraMethod->getParameters();
        expect(count($parameters))->toBe(1)
            ->and($parameters[0]->getName())->toBe('name')
            ->and($parameters[0]->getType()?->getName())->toBe('string');
        
        // Check setExtra method signature
        $setExtraMethod = $reflection->getMethod('setExtra');
        expect($setExtraMethod->isPublic())->toBeTrue();
        
        $setParameters = $setExtraMethod->getParameters();
        expect(count($setParameters))->toBe(2)
            ->and($setParameters[0]->getName())->toBe('name')
            ->and($setParameters[0]->getType()?->getName())->toBe('string');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    });

    it('has proper return type annotations', function () {
        $reflection = new ReflectionClass($this->testModel);
        $method = $reflection->getMethod('getExtra');
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        // Check that method has return type hint
        $returnType = $method->getReturnType();
        expect($returnType)->not->toBeNull();
    });

    it('handles extra relationship correctly', function () {
        $extraMethod = new ReflectionMethod($this->testModel, 'extra');
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        expect($extraMethod->isPublic())->toBeTrue();
    });

    it('validates trait requirements', function () {
        // Check that the trait requires certain methods to be implemented
        expect(method_exists($this->testModel, 'getExtraClass'))->toBeTrue();
    });

    it('handles empty extra attributes', function () {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class
        {
    it('handles empty extra attributes', function (): void {
        $mockExtra = new class
        {
            /** @var \Illuminate\Support\Collection<int, mixed> */
        $mockExtra = new class
        {
        $mockExtra = new class {
        $mockExtra = new class
        {
        $mockExtra = new class
        {
        $mockExtra = new class {
            public $extra_attributes;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            public function __construct()
            {
                $this->extra_attributes = collect([]);
            }
        };

        $this->testModel->extra = $mockExtra;

<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound */
            
            public function __construct() {

            public function __construct()
            {
                $this->extra_attributes = collect([]);
            }
        };

        $this->testModel->extra = $mockExtra;

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
            
            public function __construct() {
                $this->extra_attributes = collect([]);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        $result = $this->testModel->getExtra('non_existent');
        expect($result)->toBeNull();
    });

    it('validates extra class contract', function () {
        // Test that the extra class implements the required contract
        $extraClass = $this->testModel->getExtraClass();
        $reflection = new ReflectionClass($extraClass);
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        expect($reflection->implementsInterface(ExtraContract::class))->toBeTrue();
    });

    it('has proper documentation', function () {
        $reflection = new ReflectionClass(HasExtraTrait::class);
        $getExtraMethod = $reflection->getMethod('getExtra');
<<<<<<< HEAD
<<<<<<< HEAD

        /** @phpstan-ignore-next-line method.nonObject */

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
        
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()
            ->and($docComment)->toContain('@return');


        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
        
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()
            ->and($docComment)->toContain('@return');


        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
        
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()
            ->and($docComment)->toContain('@return');

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
=======
        
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()
            ->and($docComment)->toContain('@return');
>>>>>>> f1d4085 (.)
=======

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
>>>>>>> 73eab74 (.)
    });
});

/**
 * Helper class for testing HasExtraTrait.
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
class HasExtraTraitTest extends Model implements ExtraContract
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];

<<<<<<< HEAD
<<<<<<< HEAD
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
class HasExtraTraitTest extends Model implements ExtraContract 
{
    protected $table = 'test_extras';
    
    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
    
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'extra_attributes' => 'collection',
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
    /**
     * Get the parent model.
     *
     * @return MorphTo
     */
    public function model()
    {
        return $this->morphTo();
    }
}
