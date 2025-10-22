<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Modules\Xot\Services\ModuleService;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
=======
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
=======
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

describe('ModuleService Integration', function (): void {
    beforeEach(function (): void {
        /* @phpstan-ignore-next-line property.notFound, new.noConstructor */
        $this->service = new ModuleService('Xot');
    });

<<<<<<< HEAD
    it('integrates with Nwidart Modules system', function (): void {
=======
    it('integrates with Nwidart Modules system', function () {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        expect(class_exists('Nwidart\Modules\Facades\Module'))
            ->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))
            ->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))->toBeTrue();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    });

    it('can find existing modules', function (): void {
        // Test with known existing modules
        /* @phpstan-ignore-next-line new.noConstructor */
        $chartService = new ModuleService('Chart');
        /* @phpstan-ignore-next-line new.noConstructor */
        $userService = new ModuleService('User');
        /* @phpstan-ignore-next-line new.noConstructor */
        $xotService = new ModuleService('Xot');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        expect($chartService)
            ->toBeInstanceOf(ModuleService::class)
            ->and($userService)
            ->toBeInstanceOf(ModuleService::class)
            ->and($xotService)
            ->toBeInstanceOf(ModuleService::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect($chartService)->toBeInstanceOf(ModuleService::class)
            ->and($userService)->toBeInstanceOf(ModuleService::class)
            ->and($xotService)->toBeInstanceOf(ModuleService::class);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    });

    it('returns models from existing modules', function (): void {
        // Test with Chart module (we know it exists)
        /* @phpstan-ignore-next-line new.noConstructor */
        $chartService = new ModuleService('Chart');
        /** @phpstan-ignore-next-line method.nonObject */
        $models = $chartService->getModels();

        expect($models)->toBeArray();

        // Should contain Chart model
        $hasChartModel = false;
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $modelClass) {
            if (str_contains($modelClass, 'Chart\\Models\\Chart')) {
                $hasChartModel = true;
                break;
            }
        }

        expect($hasChartModel)->toBeTrue();
    });

    it('handles User module models correctly', function (): void {
        /* @phpstan-ignore-next-line new.noConstructor */
        $userService = new ModuleService('User');
        /** @phpstan-ignore-next-line method.nonObject */
        $models = $userService->getModels();

        expect($models)->toBeArray();

        // Check for common User module models
        $modelClasses = array_values($models);
        $hasUserModels = false;

        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($modelClasses as $modelClass) {
            /* @phpstan-ignore-next-line argument.type */
            if (str_contains($modelClass, 'User\\Models\\')) {
                $hasUserModels = true;
                break;
            }
        }

        expect($hasUserModels)->toBeTrue();
    });

    it('filters abstract models correctly', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        // BaseModel should not be included (it's abstract)
        /* @phpstan-ignore-next-line argument.type */
        $modelNames = array_keys($models);
        expect($modelNames)->not->toContain('base_model');
    });

    it('returns class strings as values', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $key => $modelClass) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
            expect($key)
                ->toBeString()
                ->and($modelClass)
                ->toBeString()
                /* @phpstan-ignore-next-line argument.type */
                ->and(str_contains($modelClass, 'Modules\\'))
                ->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            expect($key)->toBeString()
                ->and($modelClass)->toBeString()
                ->and(str_contains($modelClass, 'Modules\\'))->toBeTrue();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }
    });

    it('handles reflection operations safely', function (): void {
        // Test that reflection operations don't cause crashes
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        // Test each returned model class
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $modelClass) {
            /* @phpstan-ignore-next-line argument.type */
            expect(class_exists($modelClass) || interface_exists($modelClass))->toBeTrue();
        }
    });

    it('processes module directory structure', function (): void {
        // Test that the service can process module directories
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        expect($models)->toBeArray();
    });

    it('handles snake_case conversion correctly', function (): void {
        // Test string conversion logic
        $testString = 'TestModelName';
        $snakeCase = Str::snake($testString);

        expect($snakeCase)->toBe('test_model_name');
    });

    it('integrates with Laravel filesystem', function (): void {
        // Test filesystem operations
        expect(class_exists('Illuminate\Support\Facades\File'))->toBeTrue();
    });

    it('can handle multiple module instances', function (): void {
        $services = [
            /* @phpstan-ignore-next-line new.noConstructor */
            new ModuleService('Chart'),
            /* @phpstan-ignore-next-line new.noConstructor */
            new ModuleService('User'),
            /* @phpstan-ignore-next-line new.noConstructor */
            new ModuleService('Xot'),
            /* @phpstan-ignore-next-line new.noConstructor */
            new ModuleService('Job'),
        ];

        foreach ($services as $service) {
            expect($service)->toBeInstanceOf(ModuleService::class);
            /** @phpstan-ignore-next-line method.nonObject */
            $models = $service->getModels();
            expect($models)->toBeArray();
        }
    });

    it('validates module existence checking', function (): void {
        // Test with non-existent module
        /* @phpstan-ignore-next-line new.noConstructor */
        $nonExistentService = new ModuleService('NonExistentModule');
        /** @phpstan-ignore-next-line method.nonObject */
        $models = $nonExistentService->getModels();

<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
=======
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
>>>>>>> f1d4085 (.)
=======
        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    });

    it('handles namespace construction correctly', function (): void {
        // Test namespace building logic
        /* @phpstan-ignore-next-line new.noConstructor */
        $chartService = new ModuleService('Chart');
        /** @phpstan-ignore-next-line method.nonObject */
        $models = $chartService->getModels();

        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $modelClass) {
            expect($modelClass)->toContain('Modules\\Chart\\');
        }
    });

    it('processes file extensions correctly', function (): void {
        // Test that only .php files are processed
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        // All returned classes should be valid PHP classes
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $modelClass) {
<<<<<<< HEAD
            /* @phpstan-ignore-next-line argument.type */
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
            expect(is_string($modelClass))->toBeTrue()
                ->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> f1d4085 (.)
=======
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }
    });

    it('handles exception scenarios gracefully', function (): void {
        // Test various edge cases that might cause exceptions
        $edgeCaseServices = [
            /* @phpstan-ignore-next-line new.noConstructor */
            new ModuleService(''),
            /* @phpstan-ignore-next-line new.noConstructor */
            new ModuleService('InvalidModule'),
            /* @phpstan-ignore-next-line new.noConstructor */
            new ModuleService('Test123'),
        ];

        foreach ($edgeCaseServices as $service) {
<<<<<<< HEAD
            expect($service->getModels(...))->not->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            expect($service->getModels(...))->not->toThrow(Exception::class);
=======
            expect(fn () => $service->getModels())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
=======
            expect($service->getModels(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }
    });

    it('validates return type consistency', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        expect($models)->toBeArray();

        // Validate that all keys are strings and all values are class strings
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $key => $value) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
            expect($key)
                ->toBeString()
                ->and($value)
                ->toBeString()
                /* @phpstan-ignore-next-line argument.type */
                ->and(strlen($key))
                ->toBeGreaterThan(0)
                /* @phpstan-ignore-next-line argument.type */
                ->and(strlen($value))
                ->toBeGreaterThan(0);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            expect($key)->toBeString()
                ->and($value)->toBeString()
                ->and(strlen($key))->toBeGreaterThan(0)
                ->and(strlen($value))->toBeGreaterThan(0);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }
    });

    it('can work with Laravel service container', function (): void {
        // Test service container integration
        $serviceFromContainer = app(ModuleService::class, ['name' => 'TestModule']);

        expect($serviceFromContainer)->toBeInstanceOf(ModuleService::class);
    });

    it('handles concurrent access correctly', function (): void {
        // Test multiple simultaneous calls
        $results = [];
        for ($i = 0; $i < 3; $i++) {
            /* @phpstan-ignore-next-line new.noConstructor */
            $service = new ModuleService('Xot');
            /** @phpstan-ignore-next-line method.nonObject, offsetAccess.nonOffsetAccessible */
            $results[] = $service->getModels();
        }

        // All results should be consistent
<<<<<<< HEAD
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
=======
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
>>>>>>> f1d4085 (.)
=======
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    });

    it('validates module path resolution', function (): void {
        // Test that module paths are resolved correctly
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $modelClass) {
            // Each model class should follow the correct namespace pattern
            expect($modelClass)->toMatch('/^Modules\\\\[A-Za-z]+\\\\Models\\\\[A-Za-z]+$/');
        }
    });

    it('handles file system operations safely', function (): void {
        // Test file system operations
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        // Should not cause file system errors
        expect($models)->toBeArray();
    });

    it('integrates with Laravel string helpers', function (): void {
        // Test string helper integration
        expect(class_exists('Illuminate\Support\Str'))->toBeTrue();

        $testStudly = Str::studly('test_string');
        expect($testStudly)->toBe('TestString');
    });

    it('validates class instantiation patterns', function (): void {
        // Test that the service follows proper instantiation patterns
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);
        /** @phpstan-ignore-next-line method.nonObject */
        $constructor = $reflection->getConstructor();

<<<<<<< HEAD
        /* @phpstan-ignore-next-line method.nonObject */
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
=======
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
>>>>>>> f1d4085 (.)
=======
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    });

    it('can handle model discovery efficiently', function (): void {
        // Test performance of model discovery
        $startTime = microtime(true);

        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

<<<<<<< HEAD
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
=======
        expect($models)->toBeArray()
            ->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> f1d4085 (.)
=======
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    });
});
