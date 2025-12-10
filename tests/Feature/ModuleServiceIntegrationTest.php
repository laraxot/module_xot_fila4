<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
use Modules\Xot\Services\ModuleService;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
use Illuminate\Support\Str;
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
use Modules\Xot\Services\ModuleService;
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> 551c768c4 (.)
use Modules\Xot\Services\ModuleService;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
=======
=======
>>>>>>> 7468a7d2 (.)
=======
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
use Modules\Xot\Services\ModuleService;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
use Modules\Xot\Services\ModuleService;
>>>>>>> 414a4ffcb (.)

describe('ModuleService Integration', function (): void {
    beforeEach(function (): void {
=======
>>>>>>> d2b0a27 (.)
=======
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\ModuleService;
>>>>>>> 300ef70 (.)

describe('ModuleService Integration', function (): void {
    beforeEach(function (): void {
        /* @phpstan-ignore-next-line property.notFound, new.noConstructor */
>>>>>>> 5cf46378 (.)
        $this->service = new ModuleService('Xot');
    });

<<<<<<< HEAD
    it('integrates with Nwidart Modules system', function (): void {
=======
    it('integrates with Nwidart Modules system', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        expect(class_exists('Nwidart\Modules\Facades\Module'))
            ->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))
            ->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue()
            ->and(class_exists('Nwidart\Modules\Module'))->toBeTrue();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        expect($chartService)->toBeInstanceOf(ModuleService::class)
            ->and($userService)->toBeInstanceOf(ModuleService::class)
            ->and($xotService)->toBeInstanceOf(ModuleService::class);
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
    });

    it('returns models from existing modules', function (): void {
        // Test with Chart module (we know it exists)
        /* @phpstan-ignore-next-line new.noConstructor */
        $chartService = new ModuleService('Chart');
        /** @phpstan-ignore-next-line method.nonObject */
        $models = $chartService->getModels();

        expect($models)->toBeArray();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
        // Should contain Chart model
        $hasChartModel = false;
<<<<<<< HEAD
=======
        /* @phpstan-ignore-next-line foreach.nonIterable */
>>>>>>> 5cf46378 (.)
        foreach ($models as $modelClass) {
            if (str_contains($modelClass, 'Chart\\Models\\Chart')) {
                $hasChartModel = true;
                break;
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
        expect($hasChartModel)->toBeTrue();
    });

    it('handles User module models correctly', function (): void {
<<<<<<< HEAD
=======
        /* @phpstan-ignore-next-line new.noConstructor */
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
        expect($hasUserModels)->toBeTrue();
    });

    it('filters abstract models correctly', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
        // BaseModel should not be included (it's abstract)
        /* @phpstan-ignore-next-line argument.type */
        $modelNames = array_keys($models);
        expect($modelNames)->not->toContain('base_model');
    });

    it('returns class strings as values', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($models as $key => $modelClass) {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

        foreach ($models as $key => $modelClass) {
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======

        foreach ($models as $key => $modelClass) {
>>>>>>> 414a4ffcb (.)
            expect($key)
                ->toBeString()
                ->and($modelClass)
                ->toBeString()
                /* @phpstan-ignore-next-line argument.type */
                ->and(str_contains($modelClass, 'Modules\\'))
                ->toBeTrue();
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
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
            expect($key)->toBeString()
                ->and($modelClass)->toBeString()
                ->and(str_contains($modelClass, 'Modules\\'))->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        }
    });

    it('handles reflection operations safely', function (): void {
        // Test that reflection operations don't cause crashes
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
        expect($models)->toBeArray();
    });

    it('handles snake_case conversion correctly', function (): void {
        // Test string conversion logic
        $testString = 'TestModelName';
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $snakeCase = Str::snake($testString);

>>>>>>> 091f883c (.)
=======
        $snakeCase = Str::snake($testString);

>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
        
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
=======

<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> 7468a7d2 (.)
=======
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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

<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
=======
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
        expect($models)->toBeArray()->and($models)->toBeEmpty();
=======
        expect($models)->toBeArray()
            ->and($models)->toBeEmpty();
<<<<<<< HEAD
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
=======

        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======

        expect($models)->toBeArray()->and($models)->toBeEmpty();
>>>>>>> 414a4ffcb (.)
    });

    it('handles namespace construction correctly', function (): void {
        // Test namespace building logic
        /* @phpstan-ignore-next-line new.noConstructor */
        $chartService = new ModuleService('Chart');
        /** @phpstan-ignore-next-line method.nonObject */
        $models = $chartService->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======
        /* @phpstan-ignore-next-line foreach.nonIterable */
>>>>>>> 5cf46378 (.)
=======

>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
            /* @phpstan-ignore-next-line argument.type */
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
            /* @phpstan-ignore-next-line argument.type */
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
=======
>>>>>>> 5cf46378 (.)
            expect(is_string($modelClass))->toBeTrue()
                ->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> f1d4085 (.)
=======
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            expect(is_string($modelClass))->toBeTrue()->and(strlen($modelClass))->toBeGreaterThan(0);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
            expect($service->getModels(...))->not->toThrow(Exception::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
            expect($service->getModels(...))->not->toThrow(Exception::class);
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            expect($service->getModels(...))->not->toThrow(Exception::class);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
            expect($key)->toBeString()
                ->and($value)->toBeString()
                ->and(strlen($key))->toBeGreaterThan(0)
                ->and(strlen($value))->toBeGreaterThan(0);
<<<<<<< HEAD
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
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
        }
    });

    it('can work with Laravel service container', function (): void {
        // Test service container integration
        $serviceFromContainer = app(ModuleService::class, ['name' => 'TestModule']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
>>>>>>> 7468a7d2 (.)
=======
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
=======
        expect($results[0])->toBe($results[1])
            ->and($results[1])->toBe($results[2]);
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        expect($results[0])->toBe($results[1])->and($results[1])->toBe($results[2]);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
    });

    it('validates module path resolution', function (): void {
        // Test that module paths are resolved correctly
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======
        /* @phpstan-ignore-next-line foreach.nonIterable */
>>>>>>> 5cf46378 (.)
=======

>>>>>>> 414a4ffcb (.)
        foreach ($models as $modelClass) {
            // Each model class should follow the correct namespace pattern
            expect($modelClass)->toMatch('/^Modules\\\\[A-Za-z]+\\\\Models\\\\[A-Za-z]+$/');
        }
    });

    it('handles file system operations safely', function (): void {
        // Test file system operations
        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======

>>>>>>> 091f883c (.)
=======

>>>>>>> 414a4ffcb (.)
        // Should not cause file system errors
        expect($models)->toBeArray();
    });

    it('integrates with Laravel string helpers', function (): void {
        // Test string helper integration
        expect(class_exists('Illuminate\Support\Str'))->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

        $testStudly = Str::studly('test_string');
>>>>>>> 091f883c (.)
=======

        $testStudly = Str::studly('test_string');
>>>>>>> 414a4ffcb (.)
        expect($testStudly)->toBe('TestString');
    });

    it('validates class instantiation patterns', function (): void {
        // Test that the service follows proper instantiation patterns
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);
        /** @phpstan-ignore-next-line method.nonObject */
        $constructor = $reflection->getConstructor();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
        
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
=======

<<<<<<< HEAD
<<<<<<< HEAD
        /* @phpstan-ignore-next-line method.nonObject */
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
        /* @phpstan-ignore-next-line method.nonObject */
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> 7468a7d2 (.)
=======
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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

=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
=======
        expect($constructor)->not->toBeNull()
            ->and($constructor->isPublic())->toBeTrue();
<<<<<<< HEAD
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
=======

        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======

        expect($constructor)->not->toBeNull()->and($constructor->isPublic())->toBeTrue();
>>>>>>> 414a4ffcb (.)
    });

    it('can handle model discovery efficiently', function (): void {
        // Test performance of model discovery
        $startTime = microtime(true);

        /** @phpstan-ignore-next-line property.notFound */
        $models = $this->service->getModels();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
=======
        expect($models)->toBeArray()
            ->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        expect($models)->toBeArray()->and($executionTime)->toBeLessThan(5.0); // Should complete within 5 seconds
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 414a4ffcb (.)
    });
});
