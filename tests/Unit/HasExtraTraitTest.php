<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

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
=======
>>>>>>> ce6fc085 (.)
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
use function Safe\class_uses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphTo;
=======
>>>>>>> 3fbbf1f5 (.)
>>>>>>> 7468a7d2 (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
use Exception;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Database\Eloquent\Model;
=======
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Relations\MorphTo;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Exception;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Exception;
use Illuminate\Database\Eloquent\Model;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> a67e542f (.)
use Exception;
>>>>>>> 218dfed3 (.)
=======
=======
=======
use Modules\Xot\Models\Traits\HasExtraTrait;
use Modules\Xot\Contracts\ExtraContract;
=======
use Exception;
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
use Exception;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
use Modules\Xot\Models\Traits\HasExtraTrait;
use Modules\Xot\Contracts\ExtraContract;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;
use ReflectionMethod;
use stdClass;
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

describe('HasExtraTrait', function () {
    beforeEach(function () {
        // Create a test model that uses the trait
        $this->testModel = new class extends Model
        {
            use HasExtraTrait;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

            protected $table = 'test_models';

        $this->testModel = new class extends Model {
            use HasExtraTrait;

            protected $table = 'test_models';
            protected $fillable = ['name'];

            
            protected $table = 'test_models';
            protected $fillable = ['name'];
            

            protected $table = 'test_models';
            protected $fillable = ['name'];

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            
            protected $table = 'test_models';
            protected $fillable = ['name'];
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
<<<<<<< HEAD

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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
            protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            protected function casts(): array
            {
                return [
                    'extra_attributes' => 'collection',
                ];
            }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
            public function model()
=======
            public function model(): MorphTo
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
            public function model()
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        expect($traits)->toContain(HasExtraTrait::class);
    });

    it('has extra relationship method', function () {
        expect(method_exists($this->testModel, 'extra'))->toBeTrue();
    });

    it('returns null for non-existent extra', function () {
        // Mock the extra relationship to be null
        $this->testModel->extra = null;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)

        /** @phpstan-ignore-next-line property.notFound */

        $result = $this->testModel->getExtra('non_existent_key');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
        $result = $this->testModel->getExtra('non_existent_key');
        


        $result = $this->testModel->getExtra('non_existent_key');

        
        $result = $this->testModel->getExtra('non_existent_key');
        


        $result = $this->testModel->getExtra('non_existent_key');


        $result = $this->testModel->getExtra('non_existent_key');

        
        $result = $this->testModel->getExtra('non_existent_key');
        
=======
>>>>>>> 7468a7d2 (.)
=======
=======
        
        $result = $this->testModel->getExtra('non_existent_key');
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $result = $this->testModel->getExtra('non_existent_key');

=======
        
        $result = $this->testModel->getExtra('non_existent_key');
        
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======

        $result = $this->testModel->getExtra('non_existent_key');

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        $result = $this->testModel->getExtra('non_existent_key');
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        expect($result)->toBeNull();
    });

    it('can set and get extra attributes', function () {
        // Mock the extra relationship
<<<<<<< HEAD
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
        $mockExtra = new class {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
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
=======
        $mockExtra = new class
        {
            public \Illuminate\Support\Collection $extra_attributes;
=======
        $mockExtra = new class {
            public $extra_attributes;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)

            public function __construct()
            {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        $this->testModel->extra = $mockExtra;

        $result = $this->testModel->getExtra('test_key');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
            public function __construct() {

            public function __construct()
            {
=======
=======
=======
            
            public function __construct() {
=======

            public function __construct()
            {
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        $this->testModel->extra = $mockExtra;

        $result = $this->testModel->getExtra('test_key');
<<<<<<< HEAD

=======
=======
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
            
            public function __construct() {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
        $result = $this->testModel->getExtra('test_key');
        
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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

            public function __construct()
            {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mockExtra = new class {
            public $extra_attributes;

            public function __construct()
            {
            
            public function __construct() {
=======
=======
=======
<<<<<<< HEAD
=======
            
            public function __construct() {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
        $result = $this->testModel->getExtra('test_key');
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function () {
        $mockExtra = new class {
            public $extra_attributes;
<<<<<<< HEAD
<<<<<<< HEAD

            public function __construct()
            {
>>>>>>> 7468a7d2 (.)
=======
            
            public function __construct() {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            public function __construct()
            {
=======
            
            public function __construct() {
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======

            public function __construct()
            {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            
            public function __construct() {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

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

            public function __construct()
            {
=======
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
>>>>>>> d2b0a27 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        /** @phpstan-ignore-next-line property.notFound */
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)

        $this->testModel->extra = $mockExtra;

        expect(fn() => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
            ->toBe('name')
            ->and($setParameters[0]->getType()?->getName())
            ->toBe('string');
=======
<<<<<<< HEAD
            ->toBe('name');

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        $setExtraParamType = $setParameters[0]->getType();
        if ($setExtraParamType instanceof \ReflectionNamedType) {
            expect($setExtraParamType->getName())->toBe('string');
        }
=======
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
    });

    it('has proper return type annotations', function () {
        $reflection = new ReflectionClass($this->testModel);
        $method = $reflection->getMethod('getExtra');
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        // Check that method has return type hint
        $returnType = $method->getReturnType();
        expect($returnType)->not->toBeNull();
    });

    it('handles extra relationship correctly', function () {
        $extraMethod = new ReflectionMethod($this->testModel, 'extra');
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

            public function __construct()
            {
                $this->extra_attributes = collect([]);
            }
        };

        $this->testModel->extra = $mockExtra;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound */
            
            public function __construct() {

            public function __construct()
            {
=======
=======
=======
            
            public function __construct() {
=======

            public function __construct()
            {
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
                $this->extra_attributes = collect([]);
            }
        };

        $this->testModel->extra = $mockExtra;
<<<<<<< HEAD

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line property.notFound */
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
            
            public function __construct() {
                $this->extra_attributes = collect([]);
            }
        };
        
        $this->testModel->extra = $mockExtra;
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
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
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        expect($reflection->implementsInterface(ExtraContract::class))->toBeTrue();
    });

    it('has proper documentation', function () {
        $reflection = new ReflectionClass(HasExtraTrait::class);
        $getExtraMethod = $reflection->getMethod('getExtra');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
=======
=======
        
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()
            ->and($docComment)->toContain('@return');
>>>>>>> f1d4085 (.)
=======

        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    });
});

/**
 * Helper class for testing HasExtraTrait.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
class HasExtraTraitTest extends Model implements ExtraContract
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
class HasExtraTraitTest extends Model implements ExtraContract 
=======
class HasExtraTraitTest extends Model implements ExtraContract
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
<<<<<<< HEAD

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
class HasExtraTraitTest extends Model implements ExtraContract 
{
    protected $table = 'test_extras';
    
    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
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

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
