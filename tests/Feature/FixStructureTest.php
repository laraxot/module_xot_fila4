<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Modules\Xot\Tests\TestCase;

<<<<<<< HEAD
use function Safe\chdir;
use function Safe\chmod;
=======
use PHPUnit\Framework\Attributes\Test;

use function Safe\exec;
>>>>>>> c07dd86 (.)
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\mkdir;
use function Safe\rmdir;
use function Safe\scandir;
use function Safe\unlink;

uses(TestCase::class);

use Tests\TestCase;

/**
 * @property string $testDir
 */
beforeEach(function (): void {
    // Create a temporary directory for testing
    $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
    mkdir($this->testDir, 0o755, true);

    // Set the working directory
    chdir($this->testDir);
});

afterEach(function (): void {
    // Clean up the test directory
    if (isset($this->testDir) && is_string($this->testDir)) {
        removeDirectory($this->testDir);
    }
});

// Recursive function to remove a directory and its contents
function removeDirectory(string $dir): void
{
<<<<<<< HEAD
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                $fullPath = $dir.DIRECTORY_SEPARATOR.$object;
                if (is_dir($fullPath) && ! is_link($fullPath)) {
                    removeDirectory($fullPath);
                } else {
                    unlink($fullPath);
=======
    private string $testDir;

    protected function setUp(): void
    {
        parent::setUp();

        // Creiamo una directory temporanea per i test
        $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
        \Safe\mkdir($this->testDir, 0o755, true);

        // Impostiamo la directory di lavoro
        \Safe\chdir($this->testDir);
    }

    protected function tearDown(): void
    {
        // Puliamo la directory di test
        $this->rrmdir($this->testDir);

        parent::tearDown();
    }

    /**
     * Funzione ricorsiva per eliminare una directory con tutti i suoi contenuti.
     */
    private function rrmdir(string $dir): void
    {
        if (is_dir($dir)) {
            /** @var array<int, string> $objects */
            $objects = \Safe\scandir($dir);
            foreach ($objects as $object) {
                if ('.' !== $object && '..' !== $object) {
                    $fullPath = $dir.DIRECTORY_SEPARATOR.$object;
                    if (is_dir($fullPath) && ! is_link($dir.'/'.$object)) {
                        $this->rrmdir($fullPath);
                    } else {
                        \Safe\unlink($fullPath);
                    }
>>>>>>> c07dd86 (.)
                }
            }
        }
<<<<<<< HEAD
        rmdir($dir);
=======
    }

    #[Test]
    public function testMoveToAppFunctionality(): void
    {
        // Creiamo una struttura di directory di test
        \Safe\mkdir($this->testDir.'/Actions', 0o755, true);
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        \Safe\chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh', $output, $resultCode);

        // Verifichiamo che la cartella Actions sia stata spostata in app/
        static::assertDirectoryExists($this->testDir.'/app/Actions');
        static::assertFileExists($this->testDir.'/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Actions');
    }

    #[Test]
    public function testRenameToLowerFunctionality(): void
    {
        // Creiamo una struttura di directory di test
        \Safe\mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/test.php', '<?php echo "test";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        \Safe\chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh', $output, $resultCode);

        // Verifichiamo che la cartella Config sia stata rinominata in config
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
    }

    #[Test]
    public function testMoveConfigFunctionality(): void
    {
        // Creiamo una struttura di directory di test con entrambe le versioni
        \Safe\mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/main.php', '<?php echo "main";');

        \Safe\mkdir($this->testDir.'/config', 0o755, true);
        file_put_contents($this->testDir.'/config/secondary.php', '<?php echo "secondary";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        \Safe\chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh', $output, $resultCode);

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/main.php');
        static::assertFileExists($this->testDir.'/config/secondary.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
        static::assertDirectoryExists($this->testDir.'/config_old');
>>>>>>> c07dd86 (.)
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
        expect($this->testDir.'/'.$directory)->toBeDirectory();
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
        expect($this->testDir.'/'.$file)->toBeFile();
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
    expect(file_get_contents($testFile))->toBe($testContent);
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
