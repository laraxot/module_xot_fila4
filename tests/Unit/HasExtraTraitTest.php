<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

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
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;
>>>>>>> ca9324a4 (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;
=======
>>>>>>> 3fbbf1f5 (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Database\Eloquent\Relations\MorphTo;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
<<<<<<< HEAD
=======
=======
use Modules\Xot\Models\Traits\HasExtraTrait;
use Modules\Xot\Contracts\ExtraContract;
=======
use Exception;
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
<<<<<<< HEAD
use Exception;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Models\Traits\HasExtraTrait;
use Modules\Xot\Contracts\ExtraContract;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
use Exception;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

describe('HasExtraTrait', function () {
    beforeEach(function () {
        // Create a test model that uses the trait
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->testModel = new class extends Model
        {
            use HasExtraTrait;

            protected $table = 'test_models';

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $this->testModel = new class extends Model {
            use HasExtraTrait;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            protected $table = 'test_models';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            protected $fillable = ['name'];

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            protected $table = 'test_models';
            protected $fillable = ['name'];
            
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            protected $table = 'test_models';
            protected $fillable = ['name'];

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            // Mock the getExtraClass method
            public function getExtraClass(): string
            {
                return HasExtraTraitTest::class;
            }
        };

        // Create a mock Extra class
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->extraClass = new class extends Model implements ExtraContract
        {
            protected $table = 'test_extras';

=======
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
>>>>>>> 5a14301c (.)
=======
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
>>>>>>> 5a14301c (.)
=======
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
>>>>>>> 5a14301c (.)
=======
        $this->extraClass = new class extends Model implements ExtraContract {
            protected $table = 'test_extras';
>>>>>>> 5a14301c (.)
            protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            protected function casts(): array
            {
                return [
                    'extra_attributes' => 'collection',
                ];
            }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            public function model()
            {
                return $this->morphTo();
            }
        };
    });

    it('uses the trait correctly', function () {
        $traits = class_uses($this->testModel);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($traits)->toContain(HasExtraTrait::class);
    });

    it('has extra relationship method', function () {
        expect(method_exists($this->testModel, 'extra'))->toBeTrue();
    });

    it('returns null for non-existent extra', function () {
        // Mock the extra relationship to be null
        $this->testModel->extra = null;
<<<<<<< HEAD

        $result = $this->testModel->getExtra('non_existent_key');

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $result = $this->testModel->getExtra('non_existent_key');

=======
        
        $result = $this->testModel->getExtra('non_existent_key');
        
>>>>>>> a12f125f4a (.)
=======

        $result = $this->testModel->getExtra('non_existent_key');

>>>>>>> b93ef594b4 (.)
=======
        
        $result = $this->testModel->getExtra('non_existent_key');
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($result)->toBeNull();
    });

    it('can set and get extra attributes', function () {
        // Mock the extra relationship
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mockExtra = new class
        {
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 3fbbf1f5 (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
            public $extra_attributes;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            public function __construct()
            {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        $this->testModel->extra = $mockExtra;

        $result = $this->testModel->getExtra('test_key');

<<<<<<< HEAD
=======
=======
            
            public function __construct() {
=======

            public function __construct()
            {
>>>>>>> b93ef594b4 (.)
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        $this->testModel->extra = $mockExtra;

        $result = $this->testModel->getExtra('test_key');
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
            public function __construct() {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
        $result = $this->testModel->getExtra('test_key');
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mockExtra = new class
        {
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
            public $extra_attributes;
<<<<<<< HEAD

            public function __construct()
            {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            public function __construct()
            {
=======
            
            public function __construct() {
>>>>>>> a12f125f4a (.)
=======

            public function __construct()
            {
>>>>>>> b93ef594b4 (.)
=======
            
            public function __construct() {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

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
=======
=======
>>>>>>> origin/develop
        
        $this->testModel->extra = $mockExtra;
        
        expect($this->testModel->getExtra('string_value'))->toBe('test_string')
            ->and($this->testModel->getExtra('int_value'))->toBe(123)
            ->and($this->testModel->getExtra('bool_value'))->toBe(true)
            ->and($this->testModel->getExtra('array_value'))->toBe(['nested', 'array'])
            ->and($this->testModel->getExtra('null_value'))->toBeNull();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('throws exception for invalid data types', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mockExtra = new class
        {
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
            public $extra_attributes;
<<<<<<< HEAD

            public function __construct()
            {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            public function __construct()
            {
=======
            
            public function __construct() {
>>>>>>> a12f125f4a (.)
=======

            public function __construct()
            {
>>>>>>> b93ef594b4 (.)
=======
            
            public function __construct() {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $this->extra_attributes = collect([
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    'invalid_value' => new stdClass, // Object that's not allowed
=======
                    'invalid_value' => new stdClass(), // Object that's not allowed
>>>>>>> 5a14301c (.)
=======
                    'invalid_value' => new stdClass(), // Object that's not allowed
>>>>>>> 5a14301c (.)
=======
                    'invalid_value' => new stdClass(), // Object that's not allowed
>>>>>>> 5a14301c (.)
=======
                    'invalid_value' => new stdClass(), // Object that's not allowed
>>>>>>> 5a14301c (.)
                ]);
            }
        };
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $this->testModel->extra = $mockExtra;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
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
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
        
        $this->testModel->extra = $mockExtra;
        
        expect(fn () => $this->testModel->getExtra('invalid_value'))
            ->toThrow(Exception::class);
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======

        $this->testModel->extra = $mockExtra;

        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
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
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
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
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
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
    });

    it('has setExtra method', function () {
        expect(method_exists($this->testModel, 'setExtra'))->toBeTrue();
    });

    it('validates method signatures', function () {
        $reflection = new ReflectionClass($this->testModel);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

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
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
        expect(count($setParameters))->toBe(2)
            ->and($setParameters[0]->getName())->toBe('name')
            ->and($setParameters[0]->getType()?->getName())->toBe('string');
>>>>>>> a12f125f4a (.)
=======
        expect(count($setParameters))
            ->toBe(2)
            ->and($setParameters[0]->getName())
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
>>>>>>> b93ef594b4 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('has proper return type annotations', function () {
        $reflection = new ReflectionClass($this->testModel);
        $method = $reflection->getMethod('getExtra');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Check that method has return type hint
        $returnType = $method->getReturnType();
        expect($returnType)->not->toBeNull();
    });

    it('handles extra relationship correctly', function () {
        $extraMethod = new ReflectionMethod($this->testModel, 'extra');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($extraMethod->isPublic())->toBeTrue();
    });

    it('validates trait requirements', function () {
        // Check that the trait requires certain methods to be implemented
        expect(method_exists($this->testModel, 'getExtraClass'))->toBeTrue();
    });

    it('handles empty extra attributes', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mockExtra = new class
        {
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 3fbbf1f5 (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
=======
        $mockExtra = new class {
>>>>>>> 5a14301c (.)
            public $extra_attributes;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

            public function __construct()
            {
                $this->extra_attributes = collect([]);
            }
        };

        $this->testModel->extra = $mockExtra;

<<<<<<< HEAD
=======
=======
            
            public function __construct() {
=======

            public function __construct()
            {
>>>>>>> b93ef594b4 (.)
                $this->extra_attributes = collect([]);
            }
        };

        $this->testModel->extra = $mockExtra;
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
            public function __construct() {
                $this->extra_attributes = collect([]);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $result = $this->testModel->getExtra('non_existent');
        expect($result)->toBeNull();
    });

    it('validates extra class contract', function () {
        // Test that the extra class implements the required contract
        $extraClass = $this->testModel->getExtraClass();
        $reflection = new ReflectionClass($extraClass);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($reflection->implementsInterface(ExtraContract::class))->toBeTrue();
    });

    it('has proper documentation', function () {
        $reflection = new ReflectionClass(HasExtraTrait::class);
        $getExtraMethod = $reflection->getMethod('getExtra');
<<<<<<< HEAD

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
=======
=======
>>>>>>> origin/develop
        
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()
            ->and($docComment)->toContain('@return');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });
});

/**
 * Helper class for testing HasExtraTrait.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
class HasExtraTraitTest extends Model implements ExtraContract
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];

<<<<<<< HEAD
=======
=======
class HasExtraTraitTest extends Model implements ExtraContract 
=======
class HasExtraTraitTest extends Model implements ExtraContract
>>>>>>> b93ef594b4 (.)
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
class HasExtraTraitTest extends Model implements ExtraContract 
{
    protected $table = 'test_extras';
    
    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    /**
     * Get the parent model.
     *
     * @return MorphTo
<<<<<<< HEAD
=======
=======
    
    /**
     * Get the parent model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function model()
    {
        return $this->morphTo();
    }
}
