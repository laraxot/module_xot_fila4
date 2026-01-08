<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Xot\Models\Module;
use Tests\TestCase;

class ModuleBusinessLogicTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_module(): void
    {
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
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('modules', [
            'id' => $module->id,
            'name' => 'TestModule',
            'slug' => 'test-module',
            'version' => '1.0.0',
            'enabled' => true,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('TestModule', $module->name);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('test-module', $module->slug);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('1.0.0', $module->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($module->enabled);
    }

    /** @test */
    public function it_can_enable_and_disable_module(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['enabled' => false]);

        // Act - Enable module
        /** @phpstan-ignore-next-line method.nonObject */
        $module->update(['enabled' => true]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($module->fresh()->enabled);

        // Act - Disable module
        /** @phpstan-ignore-next-line method.nonObject */
        $module->update(['enabled' => false]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($module->fresh()->enabled);
    }

    /** @test */
    public function it_can_update_module_version(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['version' => '1.0.0']);

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $module->update(['version' => '2.0.0']);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('2.0.0', $module->fresh()->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('modules', [
            'id' => $module->id,
            'version' => '2.0.0',
        ]);
    }

    /** @test */
    public function it_can_manage_module_dependencies(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create([
            'dependencies' => ['user', 'auth'],
        ]);

        // Act
        $dependencies = $module->dependencies;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($dependencies);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('user', $dependencies);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('auth', $dependencies);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(2, $dependencies);
    }

    /** @test */
    public function it_can_validate_module_slug_uniqueness(): void
    {
        // Arrange
        Module/** @phpstan-ignore-line */ ::factory()->create(['slug' => 'unique-module']);

        // Act & Assert - Try to create module with same slug
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(QueryException::class);

        Module::create([
            'name' => 'Another Module',
            'slug' => 'unique-module', // Same slug
            'version' => '1.0.0',
            'enabled' => true,
        ]);
    }

    /** @test */
    public function it_can_manage_module_configuration(): void
    {
        // Arrange
        $config = [
            'setting1' => 'value1',
            'setting2' => 'value2',
            'nested' => [
                'key' => 'value',
            ],
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['config' => $config]);

        // Act
        $moduleConfig = $module->config;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleConfig);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('value1', $moduleConfig['setting1']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('value2', $moduleConfig['setting2']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('value', $moduleConfig['nested']['key']);
    }

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

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['metadata' => $metadata]);

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
            /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['version' => $version]);

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
        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create([
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

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['update_history' => $updateHistory]);

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
        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create([
            'laravel_version' => '^10.0',
            'php_version' => '^8.1',
        ]);

        // Act
        $laravelVersion = $module->laravel_version;
        $phpVersion = $module->php_version;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('^10.0', $laravelVersion);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('^8.1', $phpVersion);
    }

    /** @test */
    public function it_can_manage_module_permissions(): void
    {
        // Arrange
        $permissions = [
            'module.read',
            'module.write',
            'module.delete',
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['permissions' => $permissions]);

        // Act
        $modulePermissions = $module->permissions;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($modulePermissions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('module.read', $modulePermissions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('module.write', $modulePermissions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('module.delete', $modulePermissions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $modulePermissions);
    }

    /** @test */
    public function it_can_manage_module_routes(): void
    {
        // Arrange
        $routes = [
            'web' => ['prefix' => 'module', 'middleware' => ['web']],
            'api' => ['prefix' => 'api/module', 'middleware' => ['api']],
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['routes' => $routes]);

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

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['assets' => $assets]);

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

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['settings' => $settings]);

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
        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create([
            'enabled' => false,
            'activation_date' => null,
        ]);

        // Act - Activate module
        /** @phpstan-ignore-next-line method.nonObject */
        $module->update([
            'enabled' => true,
            'activation_date' => now(),
        ]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($module->fresh()->enabled);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($module->fresh()->activation_date);

        // Act - Deactivate module
        /** @phpstan-ignore-next-line method.nonObject */
        $module->update([
            'enabled' => false,
            'deactivation_date' => now(),
        ]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($module->fresh()->enabled);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($module->fresh()->deactivation_date);
    }

    /** @test */
    public function it_can_track_module_usage_statistics(): void
    {
        // Arrange
        $usageStats = [
            'total_requests' => 1000,
            'unique_users' => 150,
            'last_used' => now()->subHours(2),
            'popular_features' => ['feature1', 'feature2'],
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['usage_statistics' => $usageStats]);

        // Act
        $moduleUsageStats = $module->usage_statistics;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleUsageStats);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals(1000, $moduleUsageStats['total_requests']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals(150, $moduleUsageStats['unique_users']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertNotNull($moduleUsageStats['last_used']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('feature1', $moduleUsageStats['popular_features']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertContains('feature2', $moduleUsageStats['popular_features']);
    }

    /** @test */
    public function it_can_manage_module_error_logging(): void
    {
        // Arrange
        $errorLog = [
            [
                'level' => 'error',
                'message' => 'Test error message',
                'timestamp' => now()->subMinutes(5),
                'context' => ['file' => 'test.php', 'line' => 42],
            ],
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $module = Module/** @phpstan-ignore-line */ ::factory()->create(['error_log' => $errorLog]);

        // Act
        $moduleErrorLog = $module->error_log;

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($moduleErrorLog);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $moduleErrorLog);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('error', $moduleErrorLog[0]['level']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Test error message', $moduleErrorLog[0]['message']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('test.php', $moduleErrorLog[0]['context']['file']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals(42, $moduleErrorLog[0]['context']['line']);
    }
}
