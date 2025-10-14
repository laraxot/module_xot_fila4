<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Xot\Contracts\ExtraContract;
use Modules\Xot\Models\Traits\HasExtraTrait;
use ReflectionClass;
use ReflectionMethod;
use stdClass;

use function Safe\class_uses;

describe('HasExtraTrait', function (): void {
    beforeEach(function (): void {
        /** @var object{testModel: Model, extraClass: Model} $this */
        // Create a test model that uses the trait
        /** @phpstan-ignore-next-line assign.propertyReadOnly */
        $this->testModel = new class extends Model
        {
            use HasExtraTrait;

            protected $table = 'test_models';

            protected $fillable = ['name'];

            // Mock the getExtraClass method
            public function getExtraClass(): string
            {
                return HasExtraTraitTest::class;
            }
        };

        // Create a mock Extra class
        /** @phpstan-ignore-next-line assign.propertyReadOnly */
        $this->extraClass = new class extends Model implements ExtraContract
        {
            protected $table = 'test_extras';

            protected $fillable = ['model_id', 'model_type', 'extra_attributes'];

            protected function casts(): array
            {
                return [
                    'extra_attributes' => 'collection',
                ];
            }

            public function model(): MorphTo
            {
                /** @phpstan-ignore-next-line property.notFound, method.nonObject */
                return $this->morphTo();
            }
        };
    });

    it('uses the trait correctly', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $traits = class_uses($this->testModel);

        expect($traits)->toContain(HasExtraTrait::class);
    });

    it('has extra relationship method', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->testModel, 'extra'))->toBeTrue();
    });

    it('returns null for non-existent extra', function (): void {
        // Mock the extra relationship to be null
        /** @phpstan-ignore-next-line property.notFound */
        $this->testModel->extra = null;

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->testModel->getExtra('non_existent_key');

        expect($result)->toBeNull();
    });

    it('can set and get extra attributes', function (): void {
        // Mock the extra relationship
        $mockExtra = new class
        {
            public \Illuminate\Support\Collection $extra_attributes;

            public function __construct()
            {
                $this->extra_attributes = collect(['test_key' => 'test_value']);
            }
        };

        /** @phpstan-ignore-next-line property.notFound */
        $this->testModel->extra = $mockExtra;

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->testModel->getExtra('test_key');

        expect($result)->toBe('test_value');
    });

    it('handles different data types correctly', function (): void {
        $mockExtra = new class
        {
            public \Illuminate\Support\Collection $extra_attributes;

            public function __construct()
            {
                $this->extra_attributes = collect([
                    'string_value' => 'test_string',
                    'int_value' => 123,
                    'bool_value' => true,
                    'array_value' => ['nested', 'array'],
                    'null_value' => null,
                ]);
            }
        };

        /** @phpstan-ignore-next-line property.notFound */
        $this->testModel->extra = $mockExtra;

        /** @phpstan-ignore-next-line property.notFound */
        expect($this->testModel->getExtra('string_value'))
            ->toBe('test_string')
            /** @phpstan-ignore-next-line property.notFound */
            ->and($this->testModel->getExtra('int_value'))
            ->toBe(123)
            /** @phpstan-ignore-next-line property.notFound */
            ->and($this->testModel->getExtra('bool_value'))
            ->toBe(true)
            /** @phpstan-ignore-next-line property.notFound */
            ->and($this->testModel->getExtra('array_value'))
            ->toBe(['nested', 'array'])
            /** @phpstan-ignore-next-line property.notFound */
            ->and($this->testModel->getExtra('null_value'))
            ->toBeNull();
    });

    it('throws exception for invalid data types', function (): void {
        $mockExtra = new class
        {
            public \Illuminate\Support\Collection $extra_attributes;

            public function __construct()
            {
                $this->extra_attributes = collect([
                    'invalid_value' => new stdClass, // Object that's not allowed
                ]);
            }
        };

        /** @phpstan-ignore-next-line property.notFound */
        $this->testModel->extra = $mockExtra;

        /** @phpstan-ignore-next-line property.notFound */
        expect(fn () => $this->testModel->getExtra('invalid_value'))->toThrow(Exception::class);
    });

    it('has setExtra method', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->testModel, 'setExtra'))->toBeTrue();
    });

    it('validates method signatures', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->testModel);

        // Check getExtra method signature
        /** @phpstan-ignore-next-line method.nonObject */
        $getExtraMethod = $reflection->getMethod('getExtra');
        expect($getExtraMethod->isPublic())->toBeTrue();

        /** @phpstan-ignore-next-line method.nonObject */
        $parameters = $getExtraMethod->getParameters();
        /** @phpstan-ignore-next-line argument.templateType */
        expect(count($parameters))
            ->toBe(1)
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($parameters[0]->getName())
            ->toBe('name');

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        $getExtraParamType = $parameters[0]->getType();
        if ($getExtraParamType instanceof \ReflectionNamedType) {
            expect($getExtraParamType->getName())->toBe('string');
        }

        // Check setExtra method signature
        /** @phpstan-ignore-next-line method.nonObject */
        $setExtraMethod = $reflection->getMethod('setExtra');
        expect($setExtraMethod->isPublic())->toBeTrue();

        /** @phpstan-ignore-next-line method.nonObject */
        $setParameters = $setExtraMethod->getParameters();
        /** @phpstan-ignore-next-line argument.templateType */
        expect(count($setParameters))
            ->toBe(2)
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($setParameters[0]->getName())
            ->toBe('name');

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        $setExtraParamType = $setParameters[0]->getType();
        if ($setExtraParamType instanceof \ReflectionNamedType) {
            expect($setExtraParamType->getName())->toBe('string');
        }
    });

    it('has proper return type annotations', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->testModel);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('getExtra');

        // Check that method has return type hint
        /** @phpstan-ignore-next-line method.nonObject */
        $returnType = $method->getReturnType();
        expect($returnType)->not->toBeNull();
    });

    it('handles extra relationship correctly', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $extraMethod = new ReflectionMethod($this->testModel, 'extra');

        expect($extraMethod->isPublic())->toBeTrue();
    });

    it('validates trait requirements', function (): void {
        // Check that the trait requires certain methods to be implemented
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->testModel, 'getExtraClass'))->toBeTrue();
    });

    it('handles empty extra attributes', function (): void {
        $mockExtra = new class
        {
            /** @var \Illuminate\Support\Collection<int|string, mixed> */
            public $extra_attributes;

            public function __construct()
            {
                $this->extra_attributes = collect([]);
            }
        };

        /** @phpstan-ignore-next-line property.notFound */
        $this->testModel->extra = $mockExtra;

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->testModel->getExtra('non_existent');
        expect($result)->toBeNull();
    });

    it('validates extra class contract', function (): void {
        // Test that the extra class implements the required contract
        /** @phpstan-ignore-next-line property.notFound */
        $extraClass = $this->testModel->getExtraClass();
        /** @var class-string $extraClass */
        $reflection = new ReflectionClass($extraClass);

        expect($reflection->implementsInterface(ExtraContract::class))->toBeTrue();
    });

    it('has proper documentation', function (): void {
        $reflection = new ReflectionClass(HasExtraTrait::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $getExtraMethod = $reflection->getMethod('getExtra');

        /** @phpstan-ignore-next-line method.nonObject */
        $docComment = $getExtraMethod->getDocComment();
        expect($docComment)->toBeString()->and($docComment)->toContain('@return');
    });
});

/**
 * Helper class for testing HasExtraTrait.
 */
class HasExtraTraitTest extends Model implements ExtraContract
{
    protected $table = 'test_extras';

    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];

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

    /**
     * Get the parent model.
     *
     * @return MorphTo
     */
    public function model()
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        return $this->morphTo();
    }
}
