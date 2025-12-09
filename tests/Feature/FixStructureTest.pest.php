<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;
=======
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
>>>>>>> 5a14301c (.)

uses(TestCase::class);

beforeEach(function () {
    // Create a temporary directory for testing
<<<<<<< HEAD
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
=======
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
    mkdir($this->testDir, 0o755, true);

    // Set the working directory
    chdir($this->testDir);
});

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
<<<<<<< HEAD
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
                    unlink($dir.DIRECTORY_SEPARATOR.$object);
=======
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
                }
            }
        }
        rmdir($dir);
    }
}

test('creates necessary directories and files', function () {
    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);

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
<<<<<<< HEAD
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
=======
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
        $this->assertFileExists($this->testDir.'/'.$file);
=======
        $this->assertFileExists($this->testDir . '/' . $file);
>>>>>>> 5a14301c (.)
    }
});

test('does not overwrite existing files', function () {
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
<<<<<<< HEAD
    $testFile = $this->testDir.'/routes/web.php';
=======
    $testFile = $this->testDir . '/routes/web.php';
>>>>>>> 5a14301c (.)
    file_put_contents($testFile, $testContent);

    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);

    // Verify the file was not overwritten
    $this->assertStringEqualsFile($testFile, $testContent);
});

test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
<<<<<<< HEAD
<<<<<<< HEAD
    $nonWritableDir = $this->testDir.'/app';
=======
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 5a14301c (.)
=======
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 3fbbf1f5 (.)
    chmod($nonWritableDir, 0o555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0o755);
});
<<<<<<< HEAD
=======
});
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
