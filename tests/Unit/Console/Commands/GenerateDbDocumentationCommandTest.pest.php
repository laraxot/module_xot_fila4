<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Modules\Xot\Tests\TestCase;
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
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
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)

uses(TestCase::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
=======
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> 849568d9 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 71f31700 (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
=======
=======
>>>>>>> 492d6d3c (.)
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;

uses(\Modules\Xot\Tests\TestCase::class);
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

uses(TestCase::class);
>>>>>>> 5a14301c (.)
=======
>>>>>>> 849568d9 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)

beforeEach(function () {
    $this->testSchemaPath = storage_path('tests/schema.json');
    $this->testOutputDir = storage_path('tests/docs');

    // Create test directory if it doesn't exist
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    if (! File::exists(dirname($this->testSchemaPath))) {
=======
    if (!File::exists(dirname($this->testSchemaPath))) {
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
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
    if (!File::exists(dirname($this->testSchemaPath))) {
<<<<<<< HEAD
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 492d6d3c (.)
=======
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
>>>>>>> 399f46d3 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> ca9324a4 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 43d67f21 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 5842a556 (.)
=======
    if (!File::exists(dirname($this->testSchemaPath))) {
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    if (!File::exists(dirname($this->testSchemaPath))) {
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 399f46d3 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> ca9324a4 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 43d67f21 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 5842a556 (.)
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

afterEach(function () {
    // Clean up test files
    if (File::exists($this->testSchemaPath)) {
        File::delete($this->testSchemaPath);
    }
    if (File::exists($this->testOutputDir)) {
        File::deleteDirectory($this->testOutputDir);
    }
});

test('it generates database documentation', function () {
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
    expect(File::exists($this->testOutputDir.'/database-documentation.md'))
        ->toBeTrue()
        ->and(File::exists($this->testOutputDir.'/tables/users.md'))
=======
=======
>>>>>>> 43d67f21 (.)
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))
        ->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))
>>>>>>> 5a14301c (.)
        ->toBeTrue();
<<<<<<< HEAD
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> 849568d9 (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
=======
=======
>>>>>>> 492d6d3c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> c06600c (.)
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
});

test('it handles missing schema file', function () {
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

test('it handles invalid schema file', function () {
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

test('it handles missing output directory', function () {
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
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> e59778ae (.)
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 492d6d3c (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 399f46d3 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 5842a556 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 849568d9 (.)
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 399f46d3 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 5842a556 (.)
});
