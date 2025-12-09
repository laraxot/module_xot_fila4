<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;

use function Safe\file_put_contents;
use function Safe\json_encode;

uses(TestCase::class);

beforeEach(function (): void {
    /* @phpstan-ignore-next-line property.notFound */
    $this->testSchemaPath = storage_path('tests/schema.json');
    /* @phpstan-ignore-next-line property.notFound */
    $this->testOutputDir = storage_path('tests/docs');

    // Create test directory if it doesn't exist
    /* @phpstan-ignore-next-line property.notFound */
    if (! File::exists(dirname($this->testSchemaPath))) {
        /* @phpstan-ignore-next-line property.notFound */
        File::makeDirectory(dirname($this->testSchemaPath), 0o755, true);
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

    /* @phpstan-ignore-next-line property.notFound */
    file_put_contents($this->testSchemaPath, json_encode($testSchema, JSON_PRETTY_PRINT));

    // Ensure output directory is clean
    /* @phpstan-ignore-next-line property.notFound */
    if (File::exists($this->testOutputDir)) {
        /* @phpstan-ignore-next-line property.notFound */
        File::deleteDirectory($this->testOutputDir);
    }
});

afterEach(function (): void {
    // Clean up test files
    /* @phpstan-ignore-next-line property.notFound */
    if (File::exists($this->testSchemaPath)) {
        /* @phpstan-ignore-next-line property.notFound */
        File::delete($this->testSchemaPath);
    }
    /* @phpstan-ignore-next-line property.notFound */
    if (File::exists($this->testOutputDir)) {
        /* @phpstan-ignore-next-line property.notFound */
        File::deleteDirectory($this->testOutputDir);
    }
});

test('it generates database documentation', function (): void {
    // Run the command
    /* @phpstan-ignore-next-line property.notFound */
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        /* @phpstan-ignore-next-line property.notFound */
        '--schema' => $this->testSchemaPath,
        /* @phpstan-ignore-next-line property.notFound */
        '--output' => $this->testOutputDir,
    ]);

    // Assert command was successful
    expect($exitCode)->toBe(0);

    // Check if output files were created
    /* @phpstan-ignore-next-line property.notFound, binaryOp.invalid */
    expect(File::exists($this->testOutputDir.'/database-documentation.md'))
        ->toBeTrue()
        /* @phpstan-ignore-next-line property.notFound, binaryOp.invalid */
        ->and(File::exists($this->testOutputDir.'/tables/users.md'))
        ->toBeTrue();
});

test('it handles missing schema file', function (): void {
    // Delete the schema file
    /* @phpstan-ignore-next-line property.notFound */
    File::delete($this->testSchemaPath);

    // Run the command and expect an error
    /* @phpstan-ignore-next-line property.notFound */
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        /* @phpstan-ignore-next-line property.notFound */
        '--schema' => $this->testSchemaPath,
        /* @phpstan-ignore-next-line property.notFound */
        '--output' => $this->testOutputDir,
    ]);

    // Assert command failed
    expect($exitCode)->not->toBe(0);
});

test('it handles invalid schema file', function (): void {
    // Write invalid JSON to the schema file
    /* @phpstan-ignore-next-line property.notFound, argument.type */
    file_put_contents($this->testSchemaPath, 'invalid json');

    // Run the command and expect an error
    /* @phpstan-ignore-next-line property.notFound */
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        /* @phpstan-ignore-next-line property.notFound */
        '--schema' => $this->testSchemaPath,
        /* @phpstan-ignore-next-line property.notFound */
        '--output' => $this->testOutputDir,
    ]);

    // Assert command failed
    expect($exitCode)->not->toBe(0);
});

test('it handles missing output directory', function (): void {
    // Delete the output directory if it exists
    /* @phpstan-ignore-next-line property.notFound */
    if (File::exists($this->testOutputDir)) {
        /* @phpstan-ignore-next-line property.notFound */
        File::deleteDirectory($this->testOutputDir);
    }

    // Run the command
    /* @phpstan-ignore-next-line property.notFound */
    $exitCode = Artisan::call('xot:generate-db-documentation', [
        /* @phpstan-ignore-next-line property.notFound */
        '--schema' => $this->testSchemaPath,
        /* @phpstan-ignore-next-line property.notFound */
        '--output' => $this->testOutputDir,
    ]);

    // Assert command was successful and created the output directory
    /* @phpstan-ignore-next-line property.notFound */
    expect($exitCode)->toBe(0)->and(File::isDirectory($this->testOutputDir))->toBeTrue();
});
