<?php

declare(strict_types=1);

use Illuminate\Support\Str;
use Modules\Xot\Models\Module;
use Modules\Xot\Tests\TestCase;

uses(TestCase::class);

/**
 * @param array<string, mixed> $overrides
 */
function createModule(array $overrides = []): Module
{
    // NOTE: Modules\Xot\Models\Module is Sushi-based (in-memory rows) and does not persist to DB.
    // These tests must not assume a `modules` database table.
    $base = [
        'name' => 'TestModule',
        'description' => 'Test module for testing',
        'status' => true,
        'priority' => 10,
        'path' => '/tmp/'.Str::lower(Str::random(8)),
        'icon' => 'heroicon-o-question-mark-circle',
        'colors' => ['primary' => '#000000'],
    ];

    return new Module(array_merge($base, $overrides));
}

it('can create module', function () {
    $module = createModule([
        'name' => 'TestModule',
        'status' => true,
        'priority' => 10,
    ]);

    expect($module)->toBeInstanceOf(Module::class);
    expect($module->name)->toBe('TestModule');
    expect($module->status)->toBeTrue();
    expect($module->priority)->toBe(10);
});

it('can enable and disable module', function () {
    $module = createModule(['status' => false]);

    expect($module->status)->toBeFalse();

    $module->status = true;
    expect($module->status)->toBeTrue();

    $module->status = false;
    expect($module->status)->toBeFalse();
});

it('casts values correctly', function () {
    $module = createModule([
        'status' => 1,
        'priority' => '12',
        'colors' => ['primary' => '#ff0000'],
    ]);

    expect($module->status)->toBeTrue();
    expect($module->priority)->toBe(12);
    expect($module->colors)->toBeArray();
    expect($module->colors['primary'])->toBe('#ff0000');
});

it('returns null for unknown attributes', function () {
    $module = createModule();

    expect($module->dependencies)->toBeNull();
});

it('can manage module configuration', function () {
    // Arrange
    $colors = [
        'primary' => '#000000',
        'secondary' => '#ffffff',
        'accent' => '#ff0000',
    ];

    $module = createModule(['colors' => $colors]);

    // Act
    $moduleColors = $module->colors;

    // Assert
    expect($moduleColors)->toBeArray();
    expect($moduleColors['primary'])->toBe('#000000');
    expect($moduleColors['secondary'])->toBe('#ffffff');
    expect($moduleColors['accent'])->toBe('#ff0000');
});

it('can check module status', function () {
    // Arrange
    $enabledModule = createModule(['status' => true]);
    $disabledModule = createModule(['status' => false]);

    // Act & Assert
    expect($enabledModule->status)->toBeTrue();
    expect($disabledModule->status)->toBeFalse();
});



it('can validate module properties', function () {
    // Arrange
    $validNames = ['User', 'Quaeris', 'Xot', 'Tenant'];

    foreach ($validNames as $name) {
        // Act
        $module = createModule(['name' => $name]);

        // Assert
        expect($module->name)->toBe($name);
    }
});

it('can update module description', function () {
    // Arrange
    $description = 'Updated module description';
    $module = createModule(['description' => 'Original description']);

    // Act
    $module->description = $description;

    // Assert
    expect($module->description)->toBe($description);
});

it('can manage module priority', function () {
    // Arrange
    $module = createModule(['priority' => 5]);

    // Act
    $priority = $module->priority;

    // Assert
    expect($priority)->toBeInt();
    expect($priority)->toBe(5);
    
    // Test updating priority
    $module->priority = 10;
    expect($module->priority)->toBe(10);
});

it('can check module path', function () {
    // Arrange
    $path = '/tmp/test_module_path';
    $module = createModule([
        'path' => $path,
    ]);

    // Act
    $modulePath = $module->path;

    // Assert
    expect($modulePath)->toBe($path);
});

it('can manage module icon', function () {
    // Arrange
    $icon = 'heroicon-o-cube';
    $module = createModule(['icon' => $icon]);

    // Act
    $moduleIcon = $module->icon;

    // Assert
    expect($moduleIcon)->toBeString();
    expect($moduleIcon)->toBe($icon);
});

it('can validate module name', function () {
    // Arrange
    $name = 'TestModule';
    $module = createModule(['name' => $name]);

    // Act
    $moduleName = $module->name;

    // Assert
    expect($moduleName)->toBeString();
    expect($moduleName)->toBe($name);
});

it('can manage module colors', function () {
    // Arrange
    $colors = [
        'primary' => '#ff0000',
        'secondary' => '#00ff00',
        'accent' => '#0000ff',
    ];

    $module = createModule(['colors' => $colors]);

    // Act
    $moduleColors = $module->colors;

    // Assert
    expect($moduleColors)->toBeArray();
    expect($moduleColors['primary'])->toBe('#ff0000');
    expect($moduleColors['secondary'])->toBe('#00ff00');
    expect($moduleColors['accent'])->toBe('#0000ff');
});

it('can manage module settings', function () {
    // Arrange
    $colors = [
        'primary' => '#000000',
        'background' => '#ffffff',
    ];

    $module = createModule(['colors' => $colors]);

    // Act
    $moduleColors = $module->colors;

    // Assert
    expect($moduleColors)->toBeArray();
    expect($moduleColors['primary'])->toBe('#000000');
    expect($moduleColors['background'])->toBe('#ffffff');
});

it('can validate module required fields', function () {
    // Test creating a module with required fields
    $module = createModule([
        'name' => 'TestModule',
        'status' => true,
        'priority' => 10,
    ]);

    // Assert the module has the expected properties
    expect($module->name)->toBe('TestModule');
    expect($module->status)->toBeTrue();
    expect($module->priority)->toBe(10);
});

it('can manage module activation workflow', function () {
    // Arrange
    $module = createModule([
        'status' => false,
    ]);

    // Act - Activate module
    $module->status = true;

    // Assert
    expect($module->status)->toBeTrue();

    // Act - Deactivate module
    $module->status = false;

    // Assert
    expect($module->status)->toBeFalse();
});

it('can track module priority changes', function () {
    // Arrange
    $module = createModule(['priority' => 5]);

    // Act
    $originalPriority = $module->priority;
    $module->priority = 15;
    $newPriority = $module->priority;

    // Assert
    expect($originalPriority)->toBe(5);
    expect($newPriority)->toBe(15);
    expect($newPriority)->toBeGreaterThan($originalPriority);
});

it('can manage module path property', function () {
    // Arrange
    $path = '/modules/test_module';
    $module = createModule(['path' => $path]);

    // Act
    $modulePath = $module->path;

    // Assert
    expect($modulePath)->toBeString();
    expect($modulePath)->toBe($path);
    
    // Update path
    $newPath = '/modules/updated_test_module';
    $module->path = $newPath;
    expect($module->path)->toBe($newPath);
});
