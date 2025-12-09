<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
declare(strict_types=1);

use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

<<<<<<< HEAD
uses(TestCase::class);
=======
=======
=======
declare(strict_types=1);

>>>>>>> b93ef594b4 (.)
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

>>>>>>> b93ef594b4 (.)
uses(TestCase::class);
=======
use function Pest\Laravel\{artisan, assertDatabaseHas};
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

beforeEach(function () {
    // Create a temporary directory for testing
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
<<<<<<< HEAD
    mkdir($this->testDir, 0o755, true);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    mkdir($this->testDir, 0o755, true);

=======
    mkdir($this->testDir, 0755, true);
    
>>>>>>> a12f125f4a (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> b93ef594b4 (.)
=======
    mkdir($this->testDir, 0755, true);
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    // Set the working directory
    chdir($this->testDir);
});

afterEach(function () {
    // Clean up the test directory
    $this->rrmdir($this->testDir);
});

// Recursive function to remove a directory and its contents
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
=======
function rrmdir($dir) {
=======
function rrmdir($dir)
{
>>>>>>> b93ef594b4 (.)
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
<<<<<<< HEAD
                    unlink($dir. DIRECTORY_SEPARATOR .$object);
>>>>>>> a12f125f4a (.)
=======
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
>>>>>>> b93ef594b4 (.)
=======
function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object)) {
                    rrmdir($dir. DIRECTORY_SEPARATOR .$object);
                } else {
                    unlink($dir. DIRECTORY_SEPARATOR .$object);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                }
            }
        }
        rmdir($dir);
    }
}

test('creates necessary directories and files', function () {
    // Run the command
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> a12f125f4a (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> b93ef594b4 (.)
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
    }
});

test('does not overwrite existing files', function () {
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
    $testFile = $this->testDir . '/routes/web.php';
    file_put_contents($testFile, $testContent);

    // Run the command
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> a12f125f4a (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> b93ef594b4 (.)
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    // Verify the file was not overwritten
    $this->assertStringEqualsFile($testFile, $testContent);
});

test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    chmod($nonWritableDir, 0o555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0o755);
<<<<<<< HEAD
=======
=======
    chmod($nonWritableDir, 0555);
=======
    chmod($nonWritableDir, 0o555);
>>>>>>> b93ef594b4 (.)

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
<<<<<<< HEAD
    chmod($nonWritableDir, 0755);
>>>>>>> a12f125f4a (.)
=======
    chmod($nonWritableDir, 0o755);
>>>>>>> b93ef594b4 (.)
=======
    chmod($nonWritableDir, 0555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')
         ->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0755);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
});
