<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

use Modules\Xot\Tests\TestCase;
declare(strict_types=1);

declare(strict_types=1);

declare(strict_types=1);

declare(strict_types=1);

use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;




uses(TestCase::class);

    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
beforeEach(function () {
    // Create a temporary directory for testing
    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0o755, true);


use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



uses(TestCase::class);
declare(strict_types=1);

use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

uses(TestCase::class);
use function Pest\Laravel\{artisan, assertDatabaseHas};
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

uses(\Modules\Xot\Tests\TestCase::class);

beforeEach(function () {
    // Create a temporary directory for testing
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    mkdir($this->testDir, 0755, true);
    
    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0755, true);
    
    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0755, true);
    
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0755, true);
    
    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0755, true);
    
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0755, true);
    
    mkdir($this->testDir, 0o755, true);

    mkdir($this->testDir, 0755, true);
    
    // Set the working directory
    chdir($this->testDir);
});

afterEach(function () {
afterEach(function () {
afterEach(function () {
afterEach(function () {
afterEach(function () {
afterEach(function () {
    // Clean up the test directory
    $this->rrmdir($this->testDir);
});

// Recursive function to remove a directory and its contents
function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
function rrmdir($dir) {
function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
function rrmdir($dir) {
function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object)) {
                    rrmdir($dir. DIRECTORY_SEPARATOR .$object);
                } else {
                    unlink($dir. DIRECTORY_SEPARATOR .$object);
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object)) {
                    rrmdir($dir. DIRECTORY_SEPARATOR .$object);
                } else {
                    unlink($dir. DIRECTORY_SEPARATOR .$object);
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
                    unlink($dir.DIRECTORY_SEPARATOR.$object);
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
                    unlink($dir.DIRECTORY_SEPARATOR.$object);
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
                    unlink($dir.DIRECTORY_SEPARATOR.$object);
                }
            }
        }
        rmdir($dir);
    }
}

    // Run the command
test('creates necessary directories and files', function () {
    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
test('creates necessary directories and files', function () {
    // Run the command
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
test('creates necessary directories and files', function () {
    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
test('creates necessary directories and files', function () {
    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
test('creates necessary directories and files', function () {
    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);

    // Check if directories were created
    $directories = [
        'app/Models',
        'app/Http/Controllers',
        'app/Http/Requests',
        'app/Http/Resources',
        'app/Http/Middleware',
        'app/Providers',
        'database/migrations',
        'database/seeders',
        'database/factories',
        'resources/views',
        'routes',
        'tests/Feature',
        'tests/Unit',
    ];

    foreach ($directories as $directory) {
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
    }

    // Check if .gitkeep files were created in empty directories
    $gitkeepFiles = [
        'app/Models/.gitkeep',
        'app/Http/Controllers/.gitkeep',
        'app/Http/Requests/.gitkeep',
        'app/Http/Resources/.gitkeep',
        'database/seeders/.gitkeep',
        'resources/views/.gitkeep',
    ];

    foreach ($gitkeepFiles as $file) {
        $this->assertFileExists($this->testDir . '/' . $file);
        $this->assertFileExists($this->testDir . '/' . $file);
        $this->assertFileExists($this->testDir . '/' . $file);
        $this->assertFileExists($this->testDir.'/'.$file);
    }
});

test('does not overwrite existing files', function (): void {
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
    $testFile = $this->testDir . '/routes/web.php';
    $testFile = $this->testDir . '/routes/web.php';
    $testFile = $this->testDir . '/routes/web.php';
    $testFile = $this->testDir.'/routes/web.php';
        $this->assertFileExists($this->testDir.'/'.$file);
        $this->assertFileExists($this->testDir . '/' . $file);
        $this->assertFileExists($this->testDir . '/' . $file);
        $this->assertFileExists($this->testDir.'/'.$file);
        $this->assertFileExists($this->testDir.'/'.$file);
        $this->assertFileExists($this->testDir . '/' . $file);
        $this->assertFileExists($this->testDir . '/' . $file);
    }
});

test('does not overwrite existing files', function () {
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
    $testFile = $this->testDir.'/routes/web.php';
    file_put_contents($testFile, $testContent);

    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $testFile = $this->testDir . '/routes/web.php';
    $testFile = $this->testDir.'/routes/web.php';
    file_put_contents($testFile, $testContent);

    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $testFile = $this->testDir . '/routes/web.php';
    file_put_contents($testFile, $testContent);

    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);
    $this->artisan('xot:fix-structure')->assertExitCode(0);

    // Verify the file was not overwritten
    $this->assertStringEqualsFile($testFile, $testContent);
});

test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir.'/app';
    $nonWritableDir = $this->testDir . '/app';
    $nonWritableDir = $this->testDir . '/app';
    $nonWritableDir = $this->testDir . '/app';
    $nonWritableDir = $this->testDir . '/app';
    $nonWritableDir = $this->testDir . '/app';
    $nonWritableDir = $this->testDir.'/app';
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
    $nonWritableDir = $this->testDir.'/app';
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
    chmod($nonWritableDir, 0o555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0o755);
    chmod($nonWritableDir, 0555);
    chmod($nonWritableDir, 0o555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0o755);
    chmod($nonWritableDir, 0555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')
         ->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0755);
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
});
