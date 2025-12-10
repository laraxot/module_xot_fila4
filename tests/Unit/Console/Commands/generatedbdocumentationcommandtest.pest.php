<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
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
    $this->testSchemaPath = storage_path('tests/schema.json');
    $this->testOutputDir = storage_path('tests/docs');

    // Create test directory if it doesn't exist
    if (!File::exists(dirname($this->testSchemaPath))) {
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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

afterEach(function (): void {
    // Clean up test files
    if (File::exists($this->testSchemaPath)) {
        File::delete($this->testSchemaPath);
    }
    if (File::exists($this->testOutputDir)) {
        File::deleteDirectory($this->testOutputDir);
    }
});

test('it generates database documentation', function (): void {
    // Run the command
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        '--schema' => $this->testSchemaPath,
        '--output' => $this->testOutputDir,
    ]);

    // Assert command was successful
    expect($exitCode)->toBe(0);

    // Check if output files were created
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))
        ->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))
        ->toBeTrue();
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
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> f1d4085 (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
});

test('it handles missing schema file', function (): void {
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

test('it handles invalid schema file', function (): void {
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

test('it handles missing output directory', function (): void {
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
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> f1d4085 (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
});
