<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 358ba79a7 (.)
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 7468a7d2 (.)
=======
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
>>>>>>> f1d4085 (.)
=======
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

use function Safe\file_put_contents;

uses(TestCase::class);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

uses(TestCase::class);
=======
>>>>>>> ce6fc085 (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

uses(\Modules\Xot\Tests\TestCase::class);
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

beforeEach(function (): void {
=======
=======
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
>>>>>>> 300ef70 (.)
=======
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
>>>>>>> 4dafbb257 (.)
=======
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

uses(TestCase::class);
=======
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

uses(TestCase::class);
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

beforeEach(function () {
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 4dafbb257 (.)
    $this->testSchemaPath = storage_path('tests/schema.json');
    $this->testOutputDir = storage_path('tests/docs');

    // Create test directory if it doesn't exist
    if (!File::exists(dirname($this->testSchemaPath))) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> a12f125f4a (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> b93ef594b4 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
=======
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> f1d4085 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 4dafbb257 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
    }

    // Create a test schema file
    $testSchema = [
        'database' => 'test_db',
        'connection' => 'mysql',
        'tables' => [
            'users' => [
                'columns' => [
                    'id' => [
                        'type' => 'bigint',
                        'nullable' => false,
                        'default' => null,
                        'extra' => 'auto_increment',
                    ],
                    'name' => [
                        'type' => 'varchar(255)',
                        'nullable' => false,
                        'default' => null,
                    ],
                ],
                'primary_key' => [
                    'columns' => ['id'],
                ],
                'indexes' => [
                    'name_index' => [
                        'columns' => ['name'],
                        'type' => 'index',
                    ],
                ],
                'foreign_keys' => [],
                'record_count' => 10,
            ],
        ],
        'relationships' => [],
    ];

    file_put_contents($this->testSchemaPath, json_encode($testSchema, JSON_PRETTY_PRINT));

    // Ensure output directory is clean
    if (File::exists($this->testOutputDir)) {
        File::deleteDirectory($this->testOutputDir);
    }
});

<<<<<<< HEAD
<<<<<<< HEAD
afterEach(function (): void {
=======
afterEach(function () {
>>>>>>> 5cf46378 (.)
=======
afterEach(function () {
>>>>>>> 4dafbb257 (.)
    // Clean up test files
    if (File::exists($this->testSchemaPath)) {
        File::delete($this->testSchemaPath);
    }
    if (File::exists($this->testOutputDir)) {
        File::deleteDirectory($this->testOutputDir);
    }
});

<<<<<<< HEAD
<<<<<<< HEAD
test('it generates database documentation', function (): void {
=======
test('it generates database documentation', function () {
>>>>>>> 5cf46378 (.)
=======
test('it generates database documentation', function () {
>>>>>>> 4dafbb257 (.)
    // Run the command
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        '--schema' => $this->testSchemaPath,
        '--output' => $this->testOutputDir,
    ]);

    // Assert command was successful
    expect($exitCode)->toBe(0);

    // Check if output files were created
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
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))
        ->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))
        ->toBeTrue();
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
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
});

test('it handles missing schema file', function (): void {
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
});

test('it handles missing schema file', function () {
>>>>>>> 5cf46378 (.)
=======
});

test('it handles missing schema file', function () {
>>>>>>> 4dafbb257 (.)
    // Delete the schema file
    File::delete($this->testSchemaPath);

    // Run the command and expect an error
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        '--schema' => $this->testSchemaPath,
        '--output' => $this->testOutputDir,
    ]);

    // Assert command failed
    expect($exitCode)->not->toBe(0);
});

<<<<<<< HEAD
<<<<<<< HEAD
test('it handles invalid schema file', function (): void {
=======
test('it handles invalid schema file', function () {
>>>>>>> 5cf46378 (.)
=======
test('it handles invalid schema file', function () {
>>>>>>> 4dafbb257 (.)
    // Write invalid JSON to the schema file
    file_put_contents($this->testSchemaPath, 'invalid json');

    // Run the command and expect an error
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        '--schema' => $this->testSchemaPath,
        '--output' => $this->testOutputDir,
    ]);

    // Assert command failed
    expect($exitCode)->not->toBe(0);
});

<<<<<<< HEAD
<<<<<<< HEAD
test('it handles missing output directory', function (): void {
=======
test('it handles missing output directory', function () {
>>>>>>> 5cf46378 (.)
=======
test('it handles missing output directory', function () {
>>>>>>> 4dafbb257 (.)
    // Delete the output directory if it exists
    if (File::exists($this->testOutputDir)) {
        File::deleteDirectory($this->testOutputDir);
    }

    // Run the command
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        '--schema' => $this->testSchemaPath,
        '--output' => $this->testOutputDir,
    ]);

    // Assert command was successful and created the output directory
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
=======
=======
<<<<<<< HEAD
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> dbce41cec (.)
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> b93ef594b4 (.)
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
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
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 4dafbb257 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
});
