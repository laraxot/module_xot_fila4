<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

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
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
use Exception;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
=======
use Modules\Xot\Models\Traits\HasExtraTrait;
use Modules\Xot\Contracts\ExtraContract;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
use Exception;
>>>>>>> f1d4085 (.)

describe('HasExtraTrait', function () {
    beforeEach(function () {
        // Create a test model that uses the trait
<<<<<<< HEAD
<<<<<<< HEAD
        $this->testModel = new class extends Model
        {
            use HasExtraTrait;

            protected $table = 'test_models';

=======
=======
>>>>>>> 5a14301c (.)
        $this->testModel = new class extends Model {
            use HasExtraTrait;
<<<<<<< HEAD

            protected $table = 'test_models';
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            protected $fillable = ['name'];

=======
            
            protected $table = 'test_models';
            protected $fillable = ['name'];
            
>>>>>>> f1d4085 (.)
            // Mock the getExtraClass method
            public function getExtraClass(): string
            {
                return HasExtraTraitTest::class;
            }
        };

        // Create a mock Extra class
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
            protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
            protected function casts(): array
            {
                return [
                    'extra_attributes' => 'collection',
                ];
            }
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
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
        
>>>>>>> f1d4085 (.)
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
        
        $result = $this->testModel->getExtra('non_existent_key');
        
>>>>>>> f1d4085 (.)
        expect($result)->toBeNull();
    });

    it('can set and get extra attributes', function () {
        // Mock the extra relationship
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
            public $extra_attributes;
<<<<<<< HEAD

            public function __construct()
            {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        $this->testModel->extra = $mockExtra;

        $result = $this->testModel->getExtra('test_key');

=======
            
            public function __construct() {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
        $result = $this->testModel->getExtra('test_key');
        
>>>>>>> f1d4085 (.)
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
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
            public $extra_attributes;
<<<<<<< HEAD

            public function __construct()
            {
=======
            
            public function __construct() {
>>>>>>> f1d4085 (.)
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
=======
        
        $this->testModel->extra = $mockExtra;
        
        expect($this->testModel->getExtra('string_value'))->toBe('test_string')
            ->and($this->testModel->getExtra('int_value'))->toBe(123)
            ->and($this->testModel->getExtra('bool_value'))->toBe(true)
            ->and($this->testModel->getExtra('array_value'))->toBe(['nested', 'array'])
            ->and($this->testModel->getExtra('null_value'))->toBeNull();
>>>>>>> f1d4085 (.)
    });

    it('throws exception for invalid data types', function () {
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
            public $extra_attributes;
<<<<<<< HEAD

            public function __construct()
            {
=======
            
            public function __construct() {
>>>>>>> f1d4085 (.)
                $this->extra_attributes = collect([
<<<<<<< HEAD
<<<<<<< HEAD
                    'invalid_value' => new stdClass, // Object that's not allowed
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

        $this->testModel->extra = $mockExtra;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
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
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
        
        $this->testModel->extra = $mockExtra;
        
        expect(fn () => $this->testModel->getExtra('invalid_value'))
            ->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    });

    it('has setExtra method', function () {
        expect(method_exists($this->testModel, 'setExtra'))->toBeTrue();
    });

    it('validates method signatures', function () {
        $reflection = new ReflectionClass($this->testModel);
<<<<<<< HEAD

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
    });

    it('has proper return type annotations', function () {
        $reflection = new ReflectionClass($this->testModel);
        $method = $reflection->getMethod('getExtra');
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
        // Check that method has return type hint
        $returnType = $method->getReturnType();
        expect($returnType)->not->toBeNull();
    });

    it('handles extra relationship correctly', function () {
        $extraMethod = new ReflectionMethod($this->testModel, 'extra');
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
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
            public $extra_attributes;
<<<<<<< HEAD

            public function __construct()
            {
                $this->extra_attributes = collect([]);
            }
        };

        $this->testModel->extra = $mockExtra;

=======
            
            public function __construct() {
                $this->extra_attributes = collect([]);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
>>>>>>> f1d4085 (.)
        $result = $this->testModel->getExtra('non_existent');
        expect($result)->toBeNull();
    });

    it('validates extra class contract', function () {
        // Test that the extra class implements the required contract
        $extraClass = $this->testModel->getExtraClass();
        $reflection = new ReflectionClass($extraClass);
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
        expect($reflection->implementsInterface(ExtraContract::class))->toBeTrue();
    });

    it('has proper documentation', function () {
        $reflection = new ReflectionClass(HasExtraTrait::class);
        $getExtraMethod = $reflection->getMethod('getExtra');
<<<<<<< HEAD

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
=======
        
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()
            ->and($docComment)->toContain('@return');
>>>>>>> f1d4085 (.)
    });
});

/**
 * Helper class for testing HasExtraTrait.
 */
<<<<<<< HEAD
class HasExtraTraitTest extends Model implements ExtraContract
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];

=======
class HasExtraTraitTest extends Model implements ExtraContract 
{
    protected $table = 'test_extras';
    
    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
    
>>>>>>> f1d4085 (.)
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
    
>>>>>>> f1d4085 (.)
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
