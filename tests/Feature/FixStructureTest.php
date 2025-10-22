<?php

declare(strict_types=1);

use Modules\Xot\Tests\TestCase;

use function Safe\chdir;
use function Safe\mkdir;
use function Safe\rmdir;
use function Safe\scandir;
use function Safe\unlink;

uses(TestCase::class);

/**
 * @property string $testDir
 */
beforeEach(function (): void {
    // Create a temporary directory for testing
    /* @phpstan-ignore-next-line property.notFound */
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
    /* @phpstan-ignore-next-line property.notFound */
    mkdir($this->testDir, 0o755, true);

    // Set the working directory
    chdir($this->testDir);
});

afterEach(function (): void {
    // Clean up the test directory
    /* @phpstan-ignore-next-line property.notFound */
    if (isset($this->testDir) && is_string($this->testDir)) {
        /* @phpstan-ignore-next-line property.notFound */
        removeDirectory($this->testDir);
    }
});

// Recursive function to remove a directory and its contents
function removeDirectory(string $dir): void
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                /* @phpstan-ignore-next-line binaryOp.invalid */
                $fullPath = $dir.DIRECTORY_SEPARATOR.$object;
                if (is_dir($fullPath) && ! is_link($fullPath)) {
                    removeDirectory($fullPath);
                } else {
                    unlink($fullPath);
                }
            }
        }
        rmdir($dir);
    }
}

test('move to app functionality', function (): void {
    // Test implementation here
    expect(true)->toBeTrue();
});
