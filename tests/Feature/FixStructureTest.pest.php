<?php

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
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Storage;
use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;
>>>>>>> cc7fb225 (.)
=======
>>>>>>> b7afadf9 (.)

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
uses(TestCase::class);

<<<<<<< HEAD
beforeEach(function (): void {
    // Create a temporary directory for testing
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
=======
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
>>>>>>> cc7fb225 (.)
=======
beforeEach(function () {
    // Create a temporary directory for testing
<<<<<<< HEAD
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
>>>>>>> b7afadf9 (.)
    mkdir($this->testDir, 0o755, true);

=======
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
    mkdir($this->testDir, 0o755, true);

<<<<<<< HEAD
=======
    mkdir($this->testDir, 0755, true);
    
>>>>>>> f1d4085 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    // Set the working directory
    chdir($this->testDir);
});

<<<<<<< HEAD
afterEach(function (): void {
=======
afterEach(function () {
>>>>>>> b7afadf9 (.)
    // Clean up the test directory
    $this->rrmdir($this->testDir);
});

// Recursive function to remove a directory and its contents
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
function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
<<<<<<< HEAD
                    unlink($dir.DIRECTORY_SEPARATOR.$object);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> b7afadf9 (.)
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object)) {
                    rrmdir($dir. DIRECTORY_SEPARATOR .$object);
                } else {
                    unlink($dir. DIRECTORY_SEPARATOR .$object);
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
                if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                    rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                } else {
                    unlink($dir.DIRECTORY_SEPARATOR.$object);
>>>>>>> cc7fb225 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
                }
            }
        }
        rmdir($dir);
    }
}

<<<<<<< HEAD
test('creates necessary directories and files', function (): void {
=======
test('creates necessary directories and files', function () {
>>>>>>> b7afadf9 (.)
    // Run the command
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> f1d4085 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 300ef70 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
=======
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
>>>>>>> 5a14301c (.)
=======
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
>>>>>>> 5a14301c (.)
=======
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
>>>>>>> 5a14301c (.)
=======
        $this->assertDirectoryExists($this->testDir . '/' . $directory);
>>>>>>> 5a14301c (.)
=======
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
>>>>>>> cc7fb225 (.)
=======
        $this->assertDirectoryExists($this->testDir.'/'.$directory);
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->assertFileExists($this->testDir.'/'.$file);
=======
        $this->assertFileExists($this->testDir . '/' . $file);
>>>>>>> 5a14301c (.)
=======
        $this->assertFileExists($this->testDir . '/' . $file);
>>>>>>> 5a14301c (.)
=======
        $this->assertFileExists($this->testDir . '/' . $file);
>>>>>>> 5a14301c (.)
=======
        $this->assertFileExists($this->testDir . '/' . $file);
>>>>>>> 5a14301c (.)
=======
        $this->assertFileExists($this->testDir.'/'.$file);
>>>>>>> cc7fb225 (.)
    }
});

test('does not overwrite existing files', function (): void {
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $testFile = $this->testDir.'/routes/web.php';
=======
    $testFile = $this->testDir . '/routes/web.php';
>>>>>>> 5a14301c (.)
=======
    $testFile = $this->testDir . '/routes/web.php';
>>>>>>> 5a14301c (.)
=======
    $testFile = $this->testDir . '/routes/web.php';
>>>>>>> 5a14301c (.)
=======
    $testFile = $this->testDir . '/routes/web.php';
>>>>>>> 5a14301c (.)
=======
    $testFile = $this->testDir.'/routes/web.php';
>>>>>>> cc7fb225 (.)
=======
        $this->assertFileExists($this->testDir.'/'.$file);
    }
});

test('does not overwrite existing files', function () {
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
    $testFile = $this->testDir.'/routes/web.php';
>>>>>>> b7afadf9 (.)
    file_put_contents($testFile, $testContent);

    // Run the command
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> f1d4085 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 300ef70 (.)

    // Verify the file was not overwritten
    $this->assertStringEqualsFile($testFile, $testContent);
});

<<<<<<< HEAD
test('handles errors gracefully', function (): void {
    // Make a directory non-writable to test error handling
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    $nonWritableDir = $this->testDir.'/app';
=======
    $nonWritableDir = $this->testDir . '/app';
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
    $nonWritableDir = $this->testDir.'/app';
>>>>>>> cc7fb225 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
    chmod($nonWritableDir, 0o555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0o755);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    chmod($nonWritableDir, 0555);

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')
         ->assertExitCode(1);

    // Restore permissions
    chmod($nonWritableDir, 0755);
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
});
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
});
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
});
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
});
=======
});
>>>>>>> c84488b (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
});
>>>>>>> 492d6d3c (.)
=======
});
=======
});
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
});
>>>>>>> 43d67f21 (.)
=======
});
=======
});
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
});
>>>>>>> 5842a556 (.)
=======
});
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
});
>>>>>>> fb8add77 (.)
=======
});
=======
});
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
});
>>>>>>> b7ea1cd1 (.)
=======
});
=======
});
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
});
>>>>>>> 16dc7ab0 (.)
=======
});
>>>>>>> 5a14301c (.)
=======
});
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
});
>>>>>>> 492d6d3c (.)
=======
});
=======
});
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
});
>>>>>>> 43d67f21 (.)
=======
});
=======
});
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
});
>>>>>>> 5842a556 (.)
=======
});
>>>>>>> 5a14301c (.)
=======
});
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
});
>>>>>>> 492d6d3c (.)
=======
});
=======
});
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
});
>>>>>>> 43d67f21 (.)
=======
});
=======
});
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
});
>>>>>>> 5842a556 (.)
=======
});
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
});
>>>>>>> fb8add77 (.)
=======
});
=======
});
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
});
>>>>>>> b7ea1cd1 (.)
=======
});
=======
});
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
});
>>>>>>> 16dc7ab0 (.)
=======
=======
});
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
});
=======
});
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
