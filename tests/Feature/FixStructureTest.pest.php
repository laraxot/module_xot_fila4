<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;

use function Safe\chdir;
use function Safe\chmod;
use function Safe\file_put_contents;
use function Safe\mkdir;
use function Safe\rmdir;
use function Safe\scandir;
use function Safe\unlink;

uses(TestCase::class);

beforeEach(function (): void {
    // Create a temporary directory for testing
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
    mkdir($this->testDir, 0o755, true);

    // Set the working directory
    chdir($this->testDir);
});

afterEach(function (): void {
    // Clean up the test directory
    $this->rrmdir($this->testDir);
});

// Recursive function to remove a directory and its contents
function rrmdir(string $dir): void
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                $fullPath = $dir.DIRECTORY_SEPARATOR.$object;
                if (is_dir($fullPath) && ! is_link($dir.'/'.$object)) {
                    rrmdir($fullPath);
                } else {
                    unlink($fullPath);
                }
            }
        }
        rmdir($dir);
    }
}

test('creates necessary directories and files', function (): void {
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
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
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
        $this->assertFileExists($this->testDir.'/'.$file);
    }
});

test('does not overwrite existing files', function (): void {
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
    $testFile = $this->testDir.'/routes/web.php';
    file_put_contents($testFile, $testContent);

    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);

    // Verify the file was not overwritten
    $this->assertStringEqualsFile($testFile, $testContent);
});

test('handles errors gracefully', function (): void {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir.'/app';
    chmod($nonWritableDir, 0o555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0o755);
});
