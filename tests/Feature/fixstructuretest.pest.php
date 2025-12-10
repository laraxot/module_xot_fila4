<?php

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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f2dd5676b (.)
declare(strict_types=1);

use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

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
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
=======
=======
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f2dd5676b (.)
=======
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
uses(TestCase::class);
>>>>>>> 7468a7d2 (.)

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

=======
=======
>>>>>>> 218dfed3 (.)
=======
use Modules\Xot\Tests\TestCase;
use function Pest\Laravel\{artisan, assertDatabaseHas};
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
uses(TestCase::class);
=======
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
>>>>>>> ce6fc085 (.)
use function Pest\Laravel\{artisan, assertDatabaseHas};
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

uses(\Modules\Xot\Tests\TestCase::class);
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
uses(TestCase::class);
>>>>>>> 091f883c (.)

beforeEach(function (): void {
    // Create a temporary directory for testing
    $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
<<<<<<< HEAD
    mkdir($this->testDir, 0o755, true);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    mkdir($this->testDir, 0755, true);
    
=======
=======
=======
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f2dd5676b (.)
uses(TestCase::class);

beforeEach(function () {
    // Create a temporary directory for testing
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
    mkdir($this->testDir, 0o755, true);

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    mkdir($this->testDir, 0o755, true);

<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> dbce41cec (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> f2dd5676b (.)
=======
    mkdir($this->testDir, 0755, true);
    
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
    mkdir($this->testDir, 0o755, true);

=======
    mkdir($this->testDir, 0755, true);
    
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> a12f125f4a (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> b93ef594b4 (.)
=======
    mkdir($this->testDir, 0755, true);
    
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> 4dafbb257 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> f1d4085 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> aba62c408 (.)
=======
    mkdir($this->testDir, 0o755, true);

>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f2dd5676b (.)
    // Set the working directory
    chdir($this->testDir);
});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
afterEach(function (): void {
=======
afterEach(function () {
>>>>>>> 5cf46378 (.)
=======
afterEach(function () {
>>>>>>> 4dafbb257 (.)
=======
afterEach(function () {
>>>>>>> 80bc07e81 (.)
    // Clean up the test directory
    $this->rrmdir($this->testDir);
});

// Recursive function to remove a directory and its contents
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f2dd5676b (.)
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
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
function rrmdir($dir) {
=======
function rrmdir($dir)
{
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 358ba79a7 (.)
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
<<<<<<< HEAD
<<<<<<< HEAD
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
                    unlink($dir. DIRECTORY_SEPARATOR .$object);
>>>>>>> a12f125f4a (.)
=======
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> f2dd5676b (.)
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
                }
            }
        }
        rmdir($dir);
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('creates necessary directories and files', function (): void {
    // Run the command
    $this->artisan('xot:fix-structure')->assertExitCode(0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
=======
=======
=======
test('creates necessary directories and files', function () {
    // Run the command
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
test('creates necessary directories and files', function () {
    // Run the command
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
<<<<<<< HEAD
>>>>>>> 4dafbb257 (.)
=======
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
test('creates necessary directories and files', function () {
    // Run the command
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
<<<<<<< HEAD
>>>>>>> 80bc07e81 (.)
=======
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)

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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('does not overwrite existing files', function (): void {
=======
test('does not overwrite existing files', function () {
>>>>>>> 5cf46378 (.)
=======
test('does not overwrite existing files', function () {
>>>>>>> 4dafbb257 (.)
=======
test('does not overwrite existing files', function () {
>>>>>>> 80bc07e81 (.)
    // Create a test file that should not be overwritten
    $testContent = 'Test content';
    $testFile = $this->testDir . '/routes/web.php';
    file_put_contents($testFile, $testContent);

    // Run the command
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
>>>>>>> 6be8834c2 (.)
    $this->artisan('xot:fix-structure')->assertExitCode(0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
=======
=======
=======
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $this->artisan('xot:fix-structure')->assertExitCode(0);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> dbce41cec (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> f2dd5676b (.)
=======
    $this->artisan('xot:fix-structure')
         ->assertExitCode(0);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 358ba79a7 (.)
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> aba62c408 (.)
=======
    $this->artisan('xot:fix-structure')->assertExitCode(0);
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f2dd5676b (.)

    // Verify the file was not overwritten
    $this->assertStringEqualsFile($testFile, $testContent);
});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('handles errors gracefully', function (): void {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
<<<<<<< HEAD
=======
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
test('handles errors gracefully', function () {
    // Make a directory non-writable to test error handling
    $nonWritableDir = $this->testDir . '/app';
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f2dd5676b (.)
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
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
    chmod($nonWritableDir, 0555);
=======
    chmod($nonWritableDir, 0o555);
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 358ba79a7 (.)

    // Run the command and expect an error
    $this->artisan('xot:fix-structure')->assertExitCode(1);

    // Restore permissions
<<<<<<< HEAD
<<<<<<< HEAD
    chmod($nonWritableDir, 0o755);
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
    chmod($nonWritableDir, 0755);
>>>>>>> a12f125f4a (.)
=======
    chmod($nonWritableDir, 0o755);
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> f2dd5676b (.)
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
});
