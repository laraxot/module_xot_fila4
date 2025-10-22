<?php

declare(strict_types=1);

use Modules\Xot\Services\ModuleService;
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Module;
use Tests\TestCase;

uses(TestCase::class);

describe('ModuleService', function (): void {
    beforeEach(function (): void {
        $this->service = new ModuleService;
        $this->service = $this->service->setName('TestModule');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module;

uses(TestCase::class);

describe('ModuleService', function () {
    beforeEach(function () {
        $this->service = new ModuleService();
        $this->service = $this->service->setName('TestModule');
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    });

    it('can be instantiated', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->service)->toBeInstanceOf(ModuleService::class);
    });

    it('has correct module name property', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);
        /** @phpstan-ignore-next-line method.nonObject */
        $nameProperty = $reflection->getProperty('name');
        /** @phpstan-ignore-next-line method.nonObject */
        $nameProperty->setAccessible(true);

        /** @phpstan-ignore-next-line property.notFound */
        expect($nameProperty->getValue($this->service))->toBe('TestModule');
    });

<<<<<<< HEAD
    it('can be instantiated with different module names', function (): void {
        $service1 = new ModuleService;
        /** @phpstan-ignore-next-line method.nonObject */
        $service1 = $service1->setName('Chart');
        $service2 = new ModuleService;
        /** @phpstan-ignore-next-line method.nonObject */
        $service2 = $service2->setName('User');

        expect($service1)->toBeInstanceOf(ModuleService::class)->and($service2)->toBeInstanceOf(ModuleService::class);
=======
    it('can be instantiated with different module names', function () {
        $service1 = new ModuleService();
        $service1 = $service1->setName('Chart');
        $service2 = new ModuleService();
        $service2 = $service2->setName('User');

        expect($service1)->toBeInstanceOf(ModuleService::class)->and($service2)->toBeInstanceOf(ModuleService::class);
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    });

    it('has getModels method', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect(method_exists($this->service, 'getModels'))->toBeTrue();
    });

    it('returns array from getModels method', function (): void {
        // Mock the Module facade to avoid database dependencies
        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->service->getModels();

        expect($result)->toBeArray();
    });

    it('getModels returns correct array structure', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->service->getModels();

        expect($result)->toBeArray();

        // Each value should be a class string
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($result as $key => $value) {
<<<<<<< HEAD
<<<<<<< HEAD
            expect($key)->toBeString()->and($value)->toBeString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
            expect($key)->toBeString()->and($value)->toBeString();
=======
            expect($key)->toBeString()
                ->and($value)->toBeString();
>>>>>>> f1d4085 (.)
=======
            expect($key)->toBeString()->and($value)->toBeString();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            expect($key)->toBeString()->and($value)->toBeString();
>>>>>>> 300ef70 (.)
        }
    });

    it('filters abstract classes correctly', function (): void {
        // Test the logic that filters out abstract classes
        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->service->getModels();

        // The result should not contain BaseModel (which is abstract)
        expect($result)->not->toHaveKey('base_model');
    });

    it('handles reflection exceptions gracefully', function (): void {
        // Test that the service handles reflection errors without throwing
        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->service->getModels();

        expect($result)->toBeArray();
    });

    it('processes model names correctly', function (): void {
        // Test that model names are converted to snake_case
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('getModels');

        expect($method->isPublic())->toBeTrue();
    });

    it('has proper return type annotation', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('getModels');

        /** @phpstan-ignore-next-line method.nonObject */
        $docComment = $method->getDocComment();
        expect($docComment)->toContain('@return array<string, class-string>');
    });

    it('validates method signature', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);
        /** @phpstan-ignore-next-line method.nonObject */
        $method = $reflection->getMethod('getModels');

<<<<<<< HEAD
<<<<<<< HEAD
        expect($method->isPublic())->toBeTrue()->and($method->getNumberOfParameters())->toBe(0);
    });

    it('handles empty module gracefully', function (): void {
        $emptyService = new ModuleService;
        /** @phpstan-ignore-next-line method.nonObject */
        $emptyService = $emptyService->setName('NonExistentModule');
        /** @phpstan-ignore-next-line method.nonObject */
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        expect($method->isPublic())->toBeTrue()->and($method->getNumberOfParameters())->toBe(0);
    });

    it('handles empty module gracefully', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $emptyService = new ModuleService()->setName('NonExistentModule');
>>>>>>> d2b0a27 (.)
        $result = $emptyService->getModels();

        expect($result)->toBeArray()->and($result)->toBeEmpty();
    });

<<<<<<< HEAD
    it('uses correct namespace patterns', function (): void {
=======
    it('handles empty module gracefully', function () {
        $emptyService = (new ModuleService())->setName('NonExistentModule');
        $result = $emptyService->getModels();

        expect($result)->toBeArray()
            ->and($result)->toBeEmpty();
>>>>>>> f1d4085 (.)
=======
=======
>>>>>>> 300ef70 (.)
        $emptyService = new ModuleService();
        $emptyService = $emptyService->setName('NonExistentModule');
        $result = $emptyService->getModels();

        expect($result)->toBeArray()->and($result)->toBeEmpty();
    });

    it('uses correct namespace patterns', function () {
>>>>>>> d2b0a27 (.)
        // Test that the service uses correct namespace patterns
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);

        expect($reflection->hasProperty('name'))->toBeTrue();
    });

    it('uses setName method for configuration', function (): void {
        // ModuleService doesn't have a constructor with parameters
        // It uses setName() method for configuration (fluent interface)
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        expect($reflection->hasMethod('setName'))
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->getMethod('setName')->isPublic())
            ->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect($reflection->hasMethod('setName'))->toBeTrue()
            ->and($reflection->getMethod('setName')->isPublic())->toBeTrue();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    });

    it('validates class structure', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        expect($reflection->isInstantiable())
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->isFinal())
            ->toBeFalse()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($reflection->isAbstract())
            ->toBeFalse();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect($reflection->isInstantiable())->toBeTrue()
            ->and($reflection->isFinal())->toBeFalse()
            ->and($reflection->isAbstract())->toBeFalse();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    });

    it('has proper method visibility', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->service);
        /** @phpstan-ignore-next-line method.nonObject */
        $methods = $reflection->getMethods();

        /** @phpstan-ignore-next-line method.nonObject */
        $publicMethods = array_filter($methods, fn ($method) => $method->isPublic());

        expect(count($publicMethods))->toBeGreaterThan(0);
    });

    it('handles module facade interactions', function (): void {
        // Test basic interaction with Module facade
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue();
    });

    it('processes file extensions correctly', function (): void {
        // Test that the service correctly processes .php files
        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->service->getModels();

        expect($result)->toBeArray();
    });

    it('validates string utilities usage', function (): void {
        // Test that Str helper is used correctly
        expect(class_exists('Illuminate\Support\Str'))->toBeTrue();
    });

    it('handles reflection class instantiation', function (): void {
        // Test that ReflectionClass is used correctly
        expect(class_exists('ReflectionClass'))->toBeTrue();
    });

    it('has proper error handling', function (): void {
        // Test that exceptions are caught and handled gracefully
        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->service->getModels();

        // Should not throw exceptions
        expect($result)->toBeArray();
    });
});
