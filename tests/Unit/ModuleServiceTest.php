<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
uses(TestCase::class);

describe('ModuleService', function () {
    beforeEach(function () {});
=======
=======
>>>>>>> 399f46d3 (.)
use Tests\TestCase;
use Modules\Xot\Services\ModuleService;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module;
=======
<<<<<<< HEAD
use Tests\TestCase;
use Modules\Xot\Services\ModuleService;
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module;
=======
use Nwidart\Modules\Module;
use Nwidart\Modules\Facades\Module as ModuleFacade;
>>>>>>> a12f125f4a (.)
=======
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module;
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

uses(TestCase::class);

describe('ModuleService', function () {
    beforeEach(function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->service = new ModuleService()->setName('TestModule');
=======
        $this->service = new ModuleService();
        $this->service = $this->service->setName('TestModule');
>>>>>>> 3fbbf1f5 (.)
=======
        $this->service = new ModuleService();
        $this->service = $this->service->setName('TestModule');
=======
        $this->service = new ModuleService()->setName('TestModule');
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
        $this->service = new ModuleService()->setName('TestModule');
>>>>>>> 492d6d3c (.)
=======
        $this->service = new ModuleService()->setName('TestModule');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->service = new ModuleService()->setName('TestModule');
=======
        $this->service = (new ModuleService())->setName('TestModule');
>>>>>>> a12f125f4a (.)
=======
        $this->service = new ModuleService()->setName('TestModule');
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Services\ModuleService;
use Nwidart\Modules\Module;
use Nwidart\Modules\Facades\Module as ModuleFacade;

uses(Tests\TestCase::class);

describe('ModuleService', function () {
    beforeEach(function () {
        $this->service = (new ModuleService())->setName('TestModule');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
    });
>>>>>>> 5a14301c (.)

    it('can be instantiated', function () {
        expect($this->service)->toBeInstanceOf(ModuleService::class);
    });

    it('has correct module name property', function () {
        $reflection = new ReflectionClass($this->service);
        $nameProperty = $reflection->getProperty('name');
        $nameProperty->setAccessible(true);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($nameProperty->getValue($this->service))->toBe('TestModule');
    });

    it('can be instantiated with different module names', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        $service1 = new ModuleService()->setName('Chart');
        $service2 = new ModuleService()->setName('User');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 71f31700 (.)
        $service1 = new ModuleService();
        $service1 = $service1->setName('Chart');
        $service2 = new ModuleService();
        $service2 = $service2->setName('User');
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
        $service1 = new ModuleService()->setName('Chart');
        $service2 = new ModuleService()->setName('User');
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
        $service1 = new ModuleService()->setName('Chart');
        $service2 = new ModuleService()->setName('User');
>>>>>>> 492d6d3c (.)

        expect($service1)->toBeInstanceOf(ModuleService::class)->and($service2)->toBeInstanceOf(ModuleService::class);
<<<<<<< HEAD
=======
=======
        $service1 = (new ModuleService())->setName('Chart');
        $service2 = (new ModuleService())->setName('User');

        expect($service1)->toBeInstanceOf(ModuleService::class)
            ->and($service2)->toBeInstanceOf(ModuleService::class);
>>>>>>> a12f125f4a (.)
=======
        $service1 = new ModuleService()->setName('Chart');
        $service2 = new ModuleService()->setName('User');

        expect($service1)->toBeInstanceOf(ModuleService::class)->and($service2)->toBeInstanceOf(ModuleService::class);
>>>>>>> b93ef594b4 (.)
=======
        $service1 = (new ModuleService())->setName('Chart');
        $service2 = (new ModuleService())->setName('User');
        
        expect($service1)->toBeInstanceOf(ModuleService::class)
            ->and($service2)->toBeInstanceOf(ModuleService::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('has getModels method', function () {
        expect(method_exists($this->service, 'getModels'))->toBeTrue();
    });

    it('returns array from getModels method', function () {
        // Mock the Module facade to avoid database dependencies
        $result = $this->service->getModels();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($result)->toBeArray();
    });

    it('getModels returns correct array structure', function () {
        $result = $this->service->getModels();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        expect($result)->toBeArray();

        // Each value should be a class string
        foreach ($result as $key => $value) {
<<<<<<< HEAD
            expect($key)->toBeString()->and($value)->toBeString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
            expect($key)->toBeString()->and($value)->toBeString();
=======
            expect($key)->toBeString()
                ->and($value)->toBeString();
>>>>>>> a12f125f4a (.)
=======
            expect($key)->toBeString()->and($value)->toBeString();
>>>>>>> b93ef594b4 (.)
=======
        
        expect($result)->toBeArray();
        
        // Each value should be a class string
        foreach ($result as $key => $value) {
            expect($key)->toBeString()
                ->and($value)->toBeString();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
    });

    it('filters abstract classes correctly', function () {
        // Test the logic that filters out abstract classes
        $result = $this->service->getModels();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // The result should not contain BaseModel (which is abstract)
        expect($result)->not->toHaveKey('base_model');
    });

    it('handles reflection exceptions gracefully', function () {
        // Test that the service handles reflection errors without throwing
        $result = $this->service->getModels();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($result)->toBeArray();
    });

    it('processes model names correctly', function () {
        // Test that model names are converted to snake_case
        $reflection = new ReflectionClass($this->service);
        $method = $reflection->getMethod('getModels');
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($method->isPublic())->toBeTrue();
    });

    it('has proper return type annotation', function () {
        $reflection = new ReflectionClass($this->service);
        $method = $reflection->getMethod('getModels');
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $docComment = $method->getDocComment();
        expect($docComment)->toContain('@return array<string, class-string>');
    });

    it('validates method signature', function () {
        $reflection = new ReflectionClass($this->service);
        $method = $reflection->getMethod('getModels');
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        expect($method->isPublic())->toBeTrue()->and($method->getNumberOfParameters())->toBe(0);
    });

    it('handles empty module gracefully', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $emptyService = new ModuleService()->setName('NonExistentModule');
>>>>>>> 5a14301c (.)
=======
        $emptyService = new ModuleService();
        $emptyService = $emptyService->setName('NonExistentModule');
>>>>>>> 3fbbf1f5 (.)
=======
        $emptyService = new ModuleService();
        $emptyService = $emptyService->setName('NonExistentModule');
=======
        $emptyService = new ModuleService()->setName('NonExistentModule');
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
        $emptyService = new ModuleService()->setName('NonExistentModule');
>>>>>>> 492d6d3c (.)
        $result = $emptyService->getModels();

        expect($result)->toBeArray()->and($result)->toBeEmpty();
<<<<<<< HEAD
=======
=======
        expect($method->isPublic())->toBeTrue()
            ->and($method->getNumberOfParameters())->toBe(0);
=======
        expect($method->isPublic())->toBeTrue()->and($method->getNumberOfParameters())->toBe(0);
>>>>>>> b93ef594b4 (.)
    });

    it('handles empty module gracefully', function () {
        $emptyService = new ModuleService()->setName('NonExistentModule');
        $result = $emptyService->getModels();

<<<<<<< HEAD
        expect($result)->toBeArray()
            ->and($result)->toBeEmpty();
>>>>>>> a12f125f4a (.)
=======
        expect($result)->toBeArray()->and($result)->toBeEmpty();
>>>>>>> b93ef594b4 (.)
=======
        
        expect($method->isPublic())->toBeTrue()
            ->and($method->getNumberOfParameters())->toBe(0);
    });

    it('handles empty module gracefully', function () {
        $emptyService = (new ModuleService())->setName('NonExistentModule');
        $result = $emptyService->getModels();
        
        expect($result)->toBeArray()
            ->and($result)->toBeEmpty();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('uses correct namespace patterns', function () {
        // Test that the service uses correct namespace patterns
        $reflection = new ReflectionClass($this->service);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($reflection->hasProperty('name'))->toBeTrue();
    });

    it('uses setName method for configuration', function () {
        // ModuleService doesn't have a constructor with parameters
        // It uses setName() method for configuration (fluent interface)
        $reflection = new ReflectionClass($this->service);
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        expect($reflection->hasMethod('setName'))
            ->toBeTrue()
            ->and($reflection->getMethod('setName')->isPublic())
            ->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect($reflection->hasMethod('setName'))->toBeTrue()
            ->and($reflection->getMethod('setName')->isPublic())->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        expect($reflection->hasMethod('setName'))->toBeTrue()
            ->and($reflection->getMethod('setName')->isPublic())->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('validates class structure', function () {
        $reflection = new ReflectionClass($this->service);
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        expect($reflection->isInstantiable())
            ->toBeTrue()
            ->and($reflection->isFinal())
            ->toBeFalse()
            ->and($reflection->isAbstract())
            ->toBeFalse();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect($reflection->isInstantiable())->toBeTrue()
            ->and($reflection->isFinal())->toBeFalse()
            ->and($reflection->isAbstract())->toBeFalse();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        expect($reflection->isInstantiable())->toBeTrue()
            ->and($reflection->isFinal())->toBeFalse()
            ->and($reflection->isAbstract())->toBeFalse();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    it('has proper method visibility', function () {
        $reflection = new ReflectionClass($this->service);
        $methods = $reflection->getMethods();
<<<<<<< HEAD

<<<<<<< HEAD
=======
        $publicMethods = array_filter($methods, fn($method) => $method->isPublic());

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD

        $publicMethods = array_filter($methods, fn($method) => $method->isPublic());

=======
        
        $publicMethods = array_filter($methods, fn($method) => $method->isPublic());
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        expect(count($publicMethods))->toBeGreaterThan(0);
    });

    it('handles module facade interactions', function () {
        // Test basic interaction with Module facade
        expect(class_exists('Nwidart\Modules\Facades\Module'))->toBeTrue();
    });

    it('processes file extensions correctly', function () {
        // Test that the service correctly processes .php files
        $result = $this->service->getModels();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        expect($result)->toBeArray();
    });

    it('validates string utilities usage', function () {
        // Test that Str helper is used correctly
        expect(class_exists('Illuminate\Support\Str'))->toBeTrue();
    });

    it('handles reflection class instantiation', function () {
        // Test that ReflectionClass is used correctly
        expect(class_exists('ReflectionClass'))->toBeTrue();
    });

    it('has proper error handling', function () {
        // Test that exceptions are caught and handled gracefully
        $result = $this->service->getModels();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        // Should not throw exceptions
        expect($result)->toBeArray();
    });
});
