<?php

declare(strict_types=1);

use Illuminate\Database\QueryException;
use Modules\Xot\Models\Module;
use Modules\Xot\Tests\TestCase;

uses(TestCase::class);

test('it can create module', function (): void {
    // Arrange
    $moduleData = [
        'name' => 'TestModule',
        'slug' => 'test-module',
        'version' => '1.0.0',
        'description' => 'Test module for testing',
        'enabled' => true,
    ];

    // Act
    $module = Module::create($moduleData);

    // Assert
    expect($module->id)->not->toBeNull()
        ->and($module->name)->toBe('TestModule')
        ->and($module->slug)->toBe('test-module')
        ->and($module->version)->toBe('1.0.0')
        ->and($module->enabled)->toBeTrue();

    // Clean up
    $module->delete();
});

<<<<<<< HEAD
test('it can enable and disable module', function (): void {
    // Arrange
    /** @var Module */
    $module = Module::factory()->create(['enabled' => false]);
=======
    /** @test */
    public function it_can_enable_and_disable_module(): void
    {
        // Arrange
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['enabled' => false]);
>>>>>>> c07dd86 (.)

    // Act - Enable module
    $module->update(['enabled' => true]);

    // Assert
    expect($module->fresh()->enabled)->toBeTrue();

    // Act - Disable module
    $module->update(['enabled' => false]);

    // Assert
    expect($module->fresh()->enabled)->toBeFalse();

<<<<<<< HEAD
    // Clean up
    $module->delete();
});
=======
    /** @test */
    public function it_can_update_module_version(): void
    {
        // Arrange
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['version' => '1.0.0']);
>>>>>>> c07dd86 (.)

test('it can update module version', function (): void {
    // Arrange
    /** @var Module */
    $module = Module::factory()->create(['version' => '1.0.0']);

    // Act
    $module->update(['version' => '2.0.0']);

<<<<<<< HEAD
    // Assert
    expect($module->fresh()->version)->toBe('2.0.0');

    // Clean up
    $module->delete();
});

test('it can manage module dependencies', function (): void {
    // Arrange
    /** @var Module */
    $module = Module::factory()->create([
=======
    /** @test */
    public function it_can_manage_module_dependencies(): void
    {
        // Arrange
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create([
>>>>>>> c07dd86 (.)
            'dependencies' => ['user', 'auth'],
        ]);

    // Act
    $dependencies = $module->dependencies;

    // Assert
    expect($dependencies)->toBeArray()
        ->and($dependencies)->toContain('user')
        ->and($dependencies)->toContain('auth')
        ->and($dependencies)->toHaveCount(2);

    // Clean up
    $module->delete();
});

test('it can validate module slug uniqueness', function (): void {
    // Arrange
    $firstModule = Module::factory()->create(['slug' => 'unique-module']);

    // Act & Assert - Try to create module with same slug
    expect(fn () => Module::create([
        'name' => 'Another Module',
        'slug' => 'unique-module', // Same slug
        'version' => '1.0.0',
        'enabled' => true,
    ]))->toThrow(QueryException::class);

    // Clean up
    $firstModule->delete();
});

test('it can manage module configuration', function (): void {
    // Arrange
    $config = [
        'setting1' => 'value1',
        'setting2' => 'value2',
        'nested' => [
            'key' => 'value',
        ],
    ];

    /** @var Module */
    $module = Module::factory()->create(['config' => $config]);

    // Act
    $moduleConfig = $module->config;

    // Assert
    expect($moduleConfig)->toBeArray()
        ->and($moduleConfig['setting1'])->toBe('value1')
        ->and($moduleConfig['setting2'])->toBe('value2')
        ->and($moduleConfig['nested']['key'])->toBe('value');

    // Clean up
    $module->delete();
});

test('it can check module status', function (): void {
    // Arrange
    /** @var Module */
    $enabledModule = Module::factory()->create(['enabled' => true]);
    /** @var Module */
    $disabledModule = Module::factory()->create(['enabled' => false]);

    // Act & Assert
    expect($enabledModule->isEnabled())->toBeTrue()
        ->and($disabledModule->isEnabled())->toBeFalse()
        ->and($enabledModule->isDisabled())->toBeFalse()
        ->and($disabledModule->isDisabled())->toBeTrue();

    // Clean up
    $enabledModule->delete();
    $disabledModule->delete();
});

test('it can manage module metadata', function (): void {
    // Arrange
    $metadata = [
        'author' => 'Test Author',
        'website' => 'https://example.com',
        'license' => 'MIT',
        'tags' => ['test', 'example'],
    ];

    /** @var Module */
    $module = Module::factory()->create(['metadata' => $metadata]);

    // Act
    $moduleMetadata = $module->metadata;

    // Assert
    expect($moduleMetadata)->toBeArray()
        ->and($moduleMetadata['author'])->toBe('Test Author')
        ->and($moduleMetadata['website'])->toBe('https://example.com')
        ->and($moduleMetadata['license'])->toBe('MIT')
        ->and($moduleMetadata['tags'])->toContain('test')
        ->and($moduleMetadata['tags'])->toContain('example');

    // Clean up
    $module->delete();
});

test('it can validate module version format', function (): void {
    // Arrange
    $validVersions = ['1.0.0', '2.1.3', '10.5.2', '0.1.0'];

    foreach ($validVersions as $version) {
        // Act
        /** @var Module */
        $module = Module::factory()->create(['version' => $version]);

        // Assert
        expect($module->version)->toBe($version);

        // Clean up
        $module->delete();
    }
});

<<<<<<< HEAD
test('it can manage module installation date', function (): void {
    // Arrange
    $installationDate = now()->subDays(30);
    /** @var Module */
    $module = Module::factory()->create([
            'installed_at' => $installationDate,
        ]);
=======
    /** @test */
    public function it_can_validate_module_slug_uniqueness(): void
    {
        // Arrange
        Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['slug' => 'unique-module']);
>>>>>>> c07dd86 (.)

    // Act
    $moduleInstalledAt = $module->installed_at;

    // Assert
    expect($moduleInstalledAt->toDateTimeString())->toBe($installationDate->toDateTimeString());

    // Clean up
    $module->delete();
});

test('it can manage module update history', function (): void {
    // Arrange
    $updateHistory = [
        [
            'version' => '1.0.0',
            'date' => '2024-01-01',
            'changes' => 'Initial release',
        ],
        [
            'version' => '1.1.0',
            'date' => '2024-02-01',
            'changes' => 'Bug fixes and improvements',
        ],
    ];

    /** @var Module */
    $module = Module::factory()->create(['update_history' => $updateHistory]);

<<<<<<< HEAD
    // Act
    $moduleUpdateHistory = $module->update_history;
=======
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['config' => $config]);
>>>>>>> c07dd86 (.)

    // Assert
    expect($moduleUpdateHistory)->toBeArray()
        ->and($moduleUpdateHistory)->toHaveCount(2)
        ->and($moduleUpdateHistory[0]['version'])->toBe('1.0.0')
        ->and($moduleUpdateHistory[0]['changes'])->toBe('Initial release')
        ->and($moduleUpdateHistory[1]['version'])->toBe('1.1.0')
        ->and($moduleUpdateHistory[1]['changes'])->toBe('Bug fixes and improvements');

    // Clean up
    $module->delete();
});

<<<<<<< HEAD
test('it can check module compatibility', function (): void {
    // Arrange
    /** @var Module */
    $module = Module::factory()->create([
=======
    /** @test */
    public function it_can_check_module_status(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $enabledModule = Module/** @phpstan-ignore-line */ ::factory()->create(['enabled' => true]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $disabledModule = Module/** @phpstan-ignore-line */ ::factory()->create(['enabled' => false]);

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($enabledModule->isEnabled());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($disabledModule->isEnabled());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($enabledModule->isDisabled());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($disabledModule->isDisabled());
    }

    /** @test */
    public function it_can_manage_module_metadata(): void
    {
        // Arrange
        $metadata = [
            'author' => 'Test Author',
            'website' => 'https://example.com',
            'license' => 'MIT',
            'tags' => ['test', 'example'],
        ];

        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['metadata' => $metadata]);

        // Act
        $moduleMetadata = $module->metadata;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleMetadata);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Test Author', $moduleMetadata['author']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('https://example.com', $moduleMetadata['website']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('MIT', $moduleMetadata['license']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('test', $moduleMetadata['tags']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('example', $moduleMetadata['tags']);
    }

    /** @test */
    public function it_can_validate_module_version_format(): void
    {
        // Arrange
        $validVersions = ['1.0.0', '2.1.3', '10.5.2', '0.1.0'];

        foreach ($validVersions as $version) {
            // Act
            /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['version' => $version]);

            // Assert
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertEquals($version, $module->version);
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertDatabaseHas('modules', [
                'id' => $module->id,
                'version' => $version,
            ]);
        }
    }

    /** @test */
    public function it_can_manage_module_installation_date(): void
    {
        // Arrange
        $installationDate = now()->subDays(30);
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create([
            'installed_at' => $installationDate,
        ]);

        // Act
        $moduleInstalledAt = $module->installed_at;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($installationDate, $moduleInstalledAt);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('modules', [
            'id' => $module->id,
            'installed_at' => $installationDate,
        ]);
    }

    /** @test */
    public function it_can_manage_module_update_history(): void
    {
        // Arrange
        $updateHistory = [
            [
                'version' => '1.0.0',
                'date' => '2024-01-01',
                'changes' => 'Initial release',
            ],
            [
                'version' => '1.1.0',
                'date' => '2024-02-01',
                'changes' => 'Bug fixes and improvements',
            ],
        ];

        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['update_history' => $updateHistory]);

        // Act
        $moduleUpdateHistory = $module->update_history;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleUpdateHistory);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(2, $moduleUpdateHistory);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('1.0.0', $moduleUpdateHistory[0]['version']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Initial release', $moduleUpdateHistory[0]['changes']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('1.1.0', $moduleUpdateHistory[1]['version']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Bug fixes and improvements', $moduleUpdateHistory[1]['changes']);
    }

    /** @test */
    public function it_can_check_module_compatibility(): void
    {
        // Arrange
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create([
>>>>>>> c07dd86 (.)
            'laravel_version' => '^10.0',
            'php_version' => '^8.1',
        ]);

    // Act
    $laravelVersion = $module->laravel_version;
    $phpVersion = $module->php_version;

    // Assert
    expect($laravelVersion)->toBe('^10.0')
        ->and($phpVersion)->toBe('^8.1');

    // Clean up
    $module->delete();
});

test('it can manage module permissions', function (): void {
    // Arrange
    $permissions = [
        'module.read',
        'module.write',
        'module.delete',
    ];

    /** @var Module */
    $module = Module::factory()->create(['permissions' => $permissions]);

    // Act
    $modulePermissions = $module->permissions;

    // Assert
    expect($modulePermissions)->toBeArray()
        ->and($modulePermissions)->toContain('module.read')
        ->and($modulePermissions)->toContain('module.write')
        ->and($modulePermissions)->toContain('module.delete')
        ->and($modulePermissions)->toHaveCount(3);

    // Clean up
    $module->delete();
});

test('it can manage module routes', function (): void {
    // Arrange
    $routes = [
        'web' => ['prefix' => 'module', 'middleware' => ['web']],
        'api' => ['prefix' => 'api/module', 'middleware' => ['api']],
    ];

    /** @var Module */
    $module = Module::factory()->create(['routes' => $routes]);

    // Act
    $moduleRoutes = $module->routes;

    // Assert
    expect($moduleRoutes)->toBeArray()
        ->and($moduleRoutes)->toHaveKey('web')
        ->and($moduleRoutes)->toHaveKey('api')
        ->and($moduleRoutes['web']['prefix'])->toBe('module')
        ->and($moduleRoutes['api']['prefix'])->toBe('api/module');

    // Clean up
    $module->delete();
});

test('it can manage module assets', function (): void {
    // Arrange
    $assets = [
        'css' => ['app.css', 'vendor.css'],
        'js' => ['app.js', 'vendor.js'],
        'images' => ['logo.png', 'icon.svg'],
    ];

    /** @var Module */
    $module = Module::factory()->create(['assets' => $assets]);

    // Act
    $moduleAssets = $module->assets;

    // Assert
    expect($moduleAssets)->toBeArray()
        ->and($moduleAssets)->toHaveKey('css')
        ->and($moduleAssets)->toHaveKey('js')
        ->and($moduleAssets)->toHaveKey('images')
        ->and($moduleAssets['css'])->toContain('app.css')
        ->and($moduleAssets['js'])->toContain('app.js')
        ->and($moduleAssets['images'])->toContain('logo.png');

    // Clean up
    $module->delete();
});

test('it can manage module settings', function (): void {
    // Arrange
    $settings = [
        'debug' => false,
        'cache' => true,
        'timeout' => 30,
        'features' => ['feature1', 'feature2'],
    ];

    /** @var Module */
    $module = Module::factory()->create(['settings' => $settings]);

    // Act
    $moduleSettings = $module->settings;

    // Assert
    expect($moduleSettings)->toBeArray()
        ->and($moduleSettings['debug'])->toBeFalse()
        ->and($moduleSettings['cache'])->toBeTrue()
        ->and($moduleSettings['timeout'])->toBe(30)
        ->and($moduleSettings['features'])->toContain('feature1')
        ->and($moduleSettings['features'])->toContain('feature2');

    // Clean up
    $module->delete();
});

test('it can validate module required fields', function (): void {
    // Arrange
    $requiredFields = ['name', 'slug', 'version'];

    foreach ($requiredFields as $field) {
        $moduleData = [
            'name' => 'Test Module',
            'slug' => 'test-module',
            'version' => '1.0.0',
            'enabled' => true,
        ];

<<<<<<< HEAD
        // Remove required field
        unset($moduleData[$field]);
=======
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['permissions' => $permissions]);
>>>>>>> c07dd86 (.)

        // Act & Assert
        expect(fn () => Module::create($moduleData))->toThrow(QueryException::class);
    }
});

<<<<<<< HEAD
test('it can manage module activation workflow', function (): void {
    // Arrange
    /** @var Module */
    $module = Module::factory()->create([
=======
    /** @test */
    public function it_can_manage_module_routes(): void
    {
        // Arrange
        $routes = [
            'web' => ['prefix' => 'module', 'middleware' => ['web']],
            'api' => ['prefix' => 'api/module', 'middleware' => ['api']],
        ];

        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['routes' => $routes]);

        // Act
        $moduleRoutes = $module->routes;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleRoutes);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('web', $moduleRoutes);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('api', $moduleRoutes);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('module', $moduleRoutes['web']['prefix']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('api/module', $moduleRoutes['api']['prefix']);
    }

    /** @test */
    public function it_can_manage_module_assets(): void
    {
        // Arrange
        $assets = [
            'css' => ['app.css', 'vendor.css'],
            'js' => ['app.js', 'vendor.js'],
            'images' => ['logo.png', 'icon.svg'],
        ];

        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['assets' => $assets]);

        // Act
        $moduleAssets = $module->assets;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleAssets);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('css', $moduleAssets);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('js', $moduleAssets);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('images', $moduleAssets);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('app.css', $moduleAssets['css']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('app.js', $moduleAssets['js']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('logo.png', $moduleAssets['images']);
    }

    /** @test */
    public function it_can_manage_module_settings(): void
    {
        // Arrange
        $settings = [
            'debug' => false,
            'cache' => true,
            'timeout' => 30,
            'features' => ['feature1', 'feature2'],
        ];

        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['settings' => $settings]);

        // Act
        $moduleSettings = $module->settings;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleSettings);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertFalse($moduleSettings['debug']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertTrue($moduleSettings['cache']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals(30, $moduleSettings['timeout']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('feature1', $moduleSettings['features']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('feature2', $moduleSettings['features']);
    }

    /** @test */
    public function it_can_validate_module_required_fields(): void
    {
        // Arrange
        $requiredFields = ['name', 'slug', 'version'];

        foreach ($requiredFields as $field) {
            $moduleData = [
                'name' => 'Test Module',
                'slug' => 'test-module',
                'version' => '1.0.0',
                'enabled' => true,
            ];

            // Remove required field
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            unset($moduleData[$field]);

            // Act & Assert
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->expectException(QueryException::class);

            Module::create($moduleData);
        }
    }

    /** @test */
    public function it_can_manage_module_activation_workflow(): void
    {
        // Arrange
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create([
>>>>>>> c07dd86 (.)
            'enabled' => false,
            'activation_date' => null,
        ]);

    // Act - Activate module
    $module->update([
        'enabled' => true,
        'activation_date' => now(),
    ]);

    // Assert
    expect($module->fresh()->enabled)->toBeTrue()
        ->and($module->fresh()->activation_date)->not->toBeNull();

    // Act - Deactivate module
    $module->update([
        'enabled' => false,
        'deactivation_date' => now(),
    ]);

    // Assert
    expect($module->fresh()->enabled)->toBeFalse()
        ->and($module->fresh()->deactivation_date)->not->toBeNull();

    // Clean up
    $module->delete();
});

<<<<<<< HEAD
test('it can track module usage statistics', function (): void {
    // Arrange
    $usageStats = [
        'total_requests' => 1000,
        'unique_users' => 150,
        'last_used' => now()->subHours(2),
        'popular_features' => ['feature1', 'feature2'],
    ];
=======
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['usage_statistics' => $usageStats]);
>>>>>>> c07dd86 (.)

    /** @var Module */
    $module = Module::factory()->create(['usage_statistics' => $usageStats]);

    // Act
    $moduleUsageStats = $module->usage_statistics;

    // Assert
    expect($moduleUsageStats)->toBeArray()
        ->and($moduleUsageStats['total_requests'])->toBe(1000)
        ->and($moduleUsageStats['unique_users'])->toBe(150)
        ->and($moduleUsageStats['last_used'])->not->toBeNull()
        ->and($moduleUsageStats['popular_features'])->toContain('feature1')
        ->and($moduleUsageStats['popular_features'])->toContain('feature2');

<<<<<<< HEAD
    // Clean up
    $module->delete();
});
=======
        /** @var Module */
        $module = Module/** @phpstan-ignore-line method.notFound */ ::factory()->create(['error_log' => $errorLog]);
>>>>>>> c07dd86 (.)

test('it can manage module error logging', function (): void {
    // Arrange
    $errorLog = [
        [
            'level' => 'error',
            'message' => 'Test error message',
            'timestamp' => now()->subMinutes(5),
            'context' => ['file' => 'test.php', 'line' => 42],
        ],
    ];

    /** @var Module */
    $module = Module::factory()->create(['error_log' => $errorLog]);

    // Act
    $moduleErrorLog = $module->error_log;

    // Assert
    expect($moduleErrorLog)->toBeArray()
        ->and($moduleErrorLog)->toHaveCount(1)
        ->and($moduleErrorLog[0]['level'])->toBe('error')
        ->and($moduleErrorLog[0]['message'])->toBe('Test error message')
        ->and($moduleErrorLog[0]['context']['file'])->toBe('test.php')
        ->and($moduleErrorLog[0]['context']['line'])->toBe(42);

    // Clean up
    $module->delete();
});
