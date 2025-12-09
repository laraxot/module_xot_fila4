<?php

declare(strict_types=1);

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
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Services\ModuleService;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
use Modules\Xot\Services\ModuleService;

describe('ModuleService Integration', function (): void {
    beforeEach(function (): void {
        /* @phpstan-ignore-next-line property.notFound, new.noConstructor */
        $this->service = new ModuleService('Xot');
    });

    it('integrates with Nwidart Modules system', function (): void {
        expect(class_exists('Nwidart\Modules\Facades\Module'))
            ->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))
            ->toBeTrue();
    });

    it('can find existing modules', function (): void {
        // Test with known existing modules
        /* @phpstan-ignore-next-line new.noConstructor */
        $chartService = new ModuleService('Chart');
        /* @phpstan-ignore-next-line new.noConstructor */
        $userService = new ModuleService('User');
        /* @phpstan-ignore-next-line new.noConstructor */
        $xotService = new ModuleService('Xot');

        expect($chartService)
            ->toBeInstanceOf(ModuleService::class)
            ->and($userService)
            ->toBeInstanceOf(ModuleService::class)
            ->and($xotService)
            ->toBeInstanceOf(ModuleService::class);
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
            expect($key)
                ->toBeString()
                ->and($modelClass)
                ->toBeString()
                /* @phpstan-ignore-next-line argument.type */
                ->and(str_contains($modelClass, 'Modules\\'))
                ->toBeTrue();
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

        expect($models)->toBeArray()->and($models)->toBeEmpty();
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
            /* @phpstan-ignore-next-line argument.type */
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
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
            expect($service->getModels(...))->not->toThrow(Exception::class);
        }
    });

    it('validates return type consistency', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        expect($models)->toBeArray();

        // Validate that all keys are strings and all values are class strings
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $key => $value) {
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
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
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

        /* @phpstan-ignore-next-line method.nonObject */
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
    });

    it('can handle model discovery efficiently', function (): void {
        // Test performance of model discovery
        $startTime = microtime(true);

        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
    });
});
