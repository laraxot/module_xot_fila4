<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
use Illuminate\Support\Str;
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
<<<<<<< HEAD
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
=======
=======
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)

describe('ModuleService Integration', function () {
    beforeEach(function () {
        $this->service = new ModuleService('Xot');
    });

    it('integrates with Nwidart Modules system', function () {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        expect(class_exists('Nwidart\Modules\Facades\Module'))
            ->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))
            ->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))->toBeTrue();
=======
=======
>>>>>>> 218dfed3 (.)
=======
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))->toBeTrue();
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
=======
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    });

    it('can find existing modules', function () {
        // Test with known existing modules
        $chartService = new ModuleService('Chart');
        $userService = new ModuleService('User');
        $xotService = new ModuleService('Xot');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        expect($chartService)
            ->toBeInstanceOf(ModuleService::class)
            ->and($userService)
            ->toBeInstanceOf(ModuleService::class)
            ->and($xotService)
            ->toBeInstanceOf(ModuleService::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($chartService)->toBeInstanceOf(ModuleService::class)
            ->and($userService)->toBeInstanceOf(ModuleService::class)
            ->and($xotService)->toBeInstanceOf(ModuleService::class);
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
        expect($chartService)->toBeInstanceOf(ModuleService::class)
            ->and($userService)->toBeInstanceOf(ModuleService::class)
            ->and($xotService)->toBeInstanceOf(ModuleService::class);
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        expect($chartService)->toBeInstanceOf(ModuleService::class)
            ->and($userService)->toBeInstanceOf(ModuleService::class)
            ->and($xotService)->toBeInstanceOf(ModuleService::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    });

    it('returns models from existing modules', function () {
        // Test with Chart module (we know it exists)
        $chartService = new ModuleService('Chart');
        $models = $chartService->getModels();

        expect($models)->toBeArray();
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // Should contain Chart model
        $hasChartModel = false;
        foreach ($models as $key => $modelClass) {
            if (str_contains($modelClass, 'Chart\\Models\\Chart')) {
                $hasChartModel = true;
                break;
            }
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        expect($hasChartModel)->toBeTrue();
    });

    it('handles User module models correctly', function () {
        $userService = new ModuleService('User');
        $models = $userService->getModels();

        expect($models)->toBeArray();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Check for common User module models
        $modelClasses = array_values($models);
        $hasUserModels = false;

<<<<<<< HEAD
=======
=======
        
        // Check for common User module models
        $modelClasses = array_values($models);
        $hasUserModels = false;
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        foreach ($modelClasses as $modelClass) {
            if (str_contains($modelClass, 'User\\Models\\')) {
                $hasUserModels = true;
                break;
            }
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        expect($hasUserModels)->toBeTrue();
    });

    it('filters abstract models correctly', function () {
        $models = $this->service->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // BaseModel should not be included (it's abstract)
        $modelNames = array_keys($models);
        expect($modelNames)->not->toContain('base_model');
    });

    it('returns class strings as values', function () {
        $models = $this->service->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
=======

        foreach ($models as $key => $modelClass) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======

        foreach ($models as $key => $modelClass) {
=======
<<<<<<< HEAD

        foreach ($models as $key => $modelClass) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
            expect($key)
                ->toBeString()
                ->and($modelClass)
                ->toBeString()
                ->and(str_contains($modelClass, 'Modules\\'))
                ->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
            expect($key)->toBeString()
                ->and($modelClass)->toBeString()
                ->and(str_contains($modelClass, 'Modules\\'))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        
        foreach ($models as $key => $modelClass) {
            expect($key)->toBeString()
                ->and($modelClass)->toBeString()
                ->and(str_contains($modelClass, 'Modules\\'))->toBeTrue();
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
            expect($key)->toBeString()
                ->and($modelClass)->toBeString()
                ->and(str_contains($modelClass, 'Modules\\'))->toBeTrue();
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
        }
    });

    it('handles reflection operations safely', function () {
        // Test that reflection operations don't cause crashes
        $models = $this->service->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // Test each returned model class
        foreach ($models as $modelClass) {
            expect(class_exists($modelClass) || interface_exists($modelClass))->toBeTrue();
        }
    });

    it('processes module directory structure', function () {
        // Test that the service can process module directories
        $models = $this->service->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        expect($models)->toBeArray();
    });

    it('handles snake_case conversion correctly', function () {
        // Test string conversion logic
        $testString = 'TestModelName';
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $snakeCase = Str::snake($testString);

=======
<<<<<<< HEAD
        $snakeCase = Str::snake($testString);

=======
        $snakeCase = \Illuminate\Support\Str::snake($testString);
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        expect($snakeCase)->toBe('test_model_name');
    });

    it('integrates with Laravel filesystem', function () {
        // Test filesystem operations
        expect(class_exists('Illuminate\Support\Facades\File'))->toBeTrue();
    });

    it('can handle multiple module instances', function () {
        $services = [
            new ModuleService('Chart'),
            new ModuleService('User'),
            new ModuleService('Xot'),
            new ModuleService('Job'),
        ];

        foreach ($services as $service) {
            expect($service)->toBeInstanceOf(ModuleService::class);
            $models = $service->getModels();
            expect($models)->toBeArray();
        }
    });

    it('validates module existence checking', function () {
        // Test with non-existent module
        $nonExistentService = new ModuleService('NonExistentModule');
        $models = $nonExistentService->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
        
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
=======

        expect($models)->toBeArray()->and($models)->toBeEmpty();
<<<<<<< HEAD
=======
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======

        expect($models)->toBeArray()->and($models)->toBeEmpty();
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
=======
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
>>>>>>> a12f125f4a (.)
=======
        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> b93ef594b4 (.)
=======
        
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    });

    it('handles namespace construction correctly', function () {
        // Test namespace building logic
        $chartService = new ModuleService('Chart');
        $models = $chartService->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        foreach ($models as $modelClass) {
            expect($modelClass)->toContain('Modules\\Chart\\');
        }
    });

    it('processes file extensions correctly', function () {
        // Test that only .php files are processed
        $models = $this->service->getModels();
<<<<<<< HEAD

        // All returned classes should be valid PHP classes
        foreach ($models as $modelClass) {
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
=======
<<<<<<< HEAD

        // All returned classes should be valid PHP classes
        foreach ($models as $modelClass) {
<<<<<<< HEAD
<<<<<<< HEAD
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
            expect(is_string($modelClass))->toBeTrue()
                ->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> a12f125f4a (.)
=======
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        
        // All returned classes should be valid PHP classes
        foreach ($models as $modelClass) {
            expect(is_string($modelClass))->toBeTrue()
                ->and(strlen($modelClass))->toBeGreaterThan(0);
<<<<<<< HEAD
=======
=======
            expect(is_string($modelClass))->toBeTrue()
                ->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        }
    });

    it('handles exception scenarios gracefully', function () {
        // Test various edge cases that might cause exceptions
        $edgeCaseServices = [
            new ModuleService(''),
            new ModuleService('InvalidModule'),
            new ModuleService('Test123'),
        ];

        foreach ($edgeCaseServices as $service) {
<<<<<<< HEAD
            expect($service->getModels(...))->not->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            expect(fn () => $service->getModels())->not->toThrow(Exception::class);
=======
=======
            expect(fn () => $service->getModels())->not->toThrow(Exception::class);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            expect($service->getModels(...))->not->toThrow(Exception::class);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            expect($service->getModels(...))->not->toThrow(Exception::class);
=======
            expect(fn () => $service->getModels())->not->toThrow(Exception::class);
>>>>>>> a12f125f4a (.)
=======
            expect($service->getModels(...))->not->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
            expect(fn () => $service->getModels())->not->toThrow(Exception::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        }
    });

    it('validates return type consistency', function () {
        $models = $this->service->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        expect($models)->toBeArray();

        // Validate that all keys are strings and all values are class strings
        foreach ($models as $key => $value) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            expect($key)
                ->toBeString()
                ->and($value)
                ->toBeString()
                ->and(strlen($key))
                ->toBeGreaterThan(0)
                ->and(strlen($value))
                ->toBeGreaterThan(0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
        
        expect($models)->toBeArray();
        
        // Validate that all keys are strings and all values are class strings
        foreach ($models as $key => $value) {
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
            expect($key)->toBeString()
                ->and($value)->toBeString()
                ->and(strlen($key))->toBeGreaterThan(0)
                ->and(strlen($value))->toBeGreaterThan(0);
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        }
    });

    it('can work with Laravel service container', function () {
        // Test service container integration
        $serviceFromContainer = app(ModuleService::class, ['name' => 'TestModule']);
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        expect($serviceFromContainer)->toBeInstanceOf(ModuleService::class);
    });

    it('handles concurrent access correctly', function () {
        // Test multiple simultaneous calls
        $results = [];
        for ($i = 0; $i < 3; $i++) {
            $service = new ModuleService('Xot');
            $results[] = $service->getModels();
        }

        // All results should be consistent
<<<<<<< HEAD
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
=======
=======
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
=======
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
>>>>>>> a12f125f4a (.)
=======
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
>>>>>>> b93ef594b4 (.)
=======
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    });

    it('validates module path resolution', function () {
        // Test that module paths are resolved correctly
        $models = $this->service->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        foreach ($models as $modelClass) {
            // Each model class should follow the correct namespace pattern
            expect($modelClass)->toMatch('/^Modules\\\\[A-Za-z]+\\\\Models\\\\[A-Za-z]+$/');
        }
    });

    it('handles file system operations safely', function () {
        // Test file system operations
        $models = $this->service->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        // Should not cause file system errors
        expect($models)->toBeArray();
    });

    it('integrates with Laravel string helpers', function () {
        // Test string helper integration
        expect(class_exists('Illuminate\Support\Str'))->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD

        $testStudly = Str::studly('test_string');
=======
<<<<<<< HEAD

        $testStudly = Str::studly('test_string');
=======
        
        $testStudly = \Illuminate\Support\Str::studly('test_string');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
        expect($testStudly)->toBe('TestString');
    });

    it('validates class instantiation patterns', function () {
        // Test that the service follows proper instantiation patterns
        $reflection = new ReflectionClass($this->service);
        $constructor = $reflection->getConstructor();
<<<<<<< HEAD
<<<<<<< HEAD
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
        
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
=======

        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
<<<<<<< HEAD
=======
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======

        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
=======
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> b93ef594b4 (.)
=======
        
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    });

    it('can handle model discovery efficiently', function () {
        // Test performance of model discovery
        $startTime = microtime(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $models = $this->service->getModels();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

<<<<<<< HEAD
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
=======
        expect($models)->toBeArray()
            ->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> a12f125f4a (.)
=======
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        
        $models = $this->service->getModels();
        
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
        expect($models)->toBeArray()
            ->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
<<<<<<< HEAD
=======
=======
        expect($models)->toBeArray()
            ->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    });
});
