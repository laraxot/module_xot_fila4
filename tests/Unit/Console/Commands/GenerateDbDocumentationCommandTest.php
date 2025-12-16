<?php

declare(strict_types=1);
 
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;
use Modules\Xot\Tests\TestCase;
<<<<<<<< HEAD:tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.php

use function Safe\file_put_contents;
use function Safe\json_encode;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Xot\Console\Commands\GenerateDbDocumentationCommand;
>>>>>>>> a6ef6dc7 (.):tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.pest.php
=======
>>>>>>> 7ee87c138 (.)
=======
========
<<<<<<< HEAD
=======
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
>>>>>>> d2b0a27 (.)
>>>>>>>> a6ef6dc7 (.):tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.pest.php
>>>>>>> 5cf46378 (.)
=======
=======
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;
>>>>>>> 249a0067 (.)
=======
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

uses(TestCase::class);

<<<<<<< HEAD:tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.php
/**
 * @property string $testSchemaPath
 * @property string $testOutputDir
 */
=======
>>>>>>> eeaa032 (.):tests/Unit/Console/Commands/generatedbdocumentationcommandtest.pest.php
beforeEach(function (): void {
    $this->testSchemaPath = storage_path('tests/schema.json');
    $this->testOutputDir = storage_path('tests/docs');

    // Create test directory if it doesn't exist
<<<<<<<< HEAD:tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.php
    $schemaDir = dirname($this->testSchemaPath);
    if (! File::exists($schemaDir)) {
        File::makeDirectory($schemaDir, 0o755, true);
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    if (!File::exists(dirname($this->testSchemaPath))) {
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>>> a6ef6dc7 (.):tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.pest.php
=======
>>>>>>> 7ee87c138 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
========
<<<<<<< HEAD
    if (! File::exists(dirname($this->testSchemaPath))) {
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
    if (!File::exists(dirname($this->testSchemaPath))) {
<<<<<<< HEAD
<<<<<<< HEAD
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0755, true);
>>>>>>> f1d4085 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>>> a6ef6dc7 (.):tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.pest.php
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
    if (isset($this->testSchemaPath) && is_string($this->testSchemaPath) && File::exists($this->testSchemaPath)) {
        File::delete($this->testSchemaPath);
    }
    if (isset($this->testOutputDir) && is_string($this->testOutputDir) && File::exists($this->testOutputDir)) {
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
<<<<<<<< HEAD:tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.php
    expect(File::exists($this->testOutputDir.'/database-documentation.md'))
========
<<<<<<< HEAD
    expect(File::exists($this->testOutputDir.'/database-documentation.md'))
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))
>>>>>>> d2b0a27 (.)
>>>>>>>> a6ef6dc7 (.):tests/Unit/Console/Commands/GenerateDbDocumentationCommandTest.pest.php
        ->toBeTrue()
        ->and(File::exists($this->testOutputDir.'/tables/users.md'))
        ->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    expect(File::exists($this->testOutputDir . '/database-documentation.md'))->toBeTrue()
        ->and(File::exists($this->testOutputDir . '/tables/users.md'))->toBeTrue();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
<<<<<<< HEAD
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
=======
    expect($exitCode)->toBe(0)
        ->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> f1d4085 (.)
=======
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
});
