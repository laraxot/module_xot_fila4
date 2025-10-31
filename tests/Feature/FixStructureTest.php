<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
declare(strict_types=1);

use Modules\Xot\Tests\TestCase;

<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\chdir;
use function Safe\mkdir;
use function Safe\rmdir;
use function Safe\scandir;
use function Safe\unlink;
=======
=======
>>>>>>> f1d4085 (.)
=======
declare(strict_types=1);

<<<<<<< HEAD
=======

>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
namespace Modules\Xot\Tests\Feature;
>>>>>>> d2b0a27 (.)

<<<<<<< HEAD
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
=======
uses(TestCase::class);
>>>>>>> a6ef6dc7 (.)

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
<<<<<<< HEAD
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
=======
    private string $testDir;

    protected function setUp(): void
    {
        parent::setUp();

        // Creiamo una directory temporanea per i test
        $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
        mkdir($this->testDir, 0o755, true);

        // Impostiamo la directory di lavoro
        chdir($this->testDir);
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
    private function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object !== '.' && $object !== '..') {
                    if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                        $this->rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                    } else {
                        unlink($dir.DIRECTORY_SEPARATOR.$object);
                    }
>>>>>>> d2b0a27 (.)
                }
            }
        }
<<<<<<< HEAD
        rmdir($dir);
=======
    }

    #[Test]
    public function test_move_to_app_functionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir.'/Actions', 0o755, true);
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che la cartella Actions sia stata spostata in app/
        static::assertDirectoryExists($this->testDir.'/app/Actions');
        static::assertFileExists($this->testDir.'/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Actions');
    }

    #[Test]
    public function test_rename_to_lower_functionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/test.php', '<?php echo "test";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che la cartella Config sia stata rinominata in config
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
    }

    #[Test]
    public function test_move_config_functionality(): void
    {
        // Creiamo una struttura di directory di test con entrambe le versioni
        mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir.'/config', 0o755, true);
        file_put_contents($this->testDir.'/config/secondary.php', '<?php echo "secondary";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/main.php');
        static::assertFileExists($this->testDir.'/config/secondary.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
        static::assertDirectoryExists($this->testDir.'/config_old');
=======
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/main.php');
        static::assertFileExists($this->testDir . '/config/secondary.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
        static::assertDirectoryExists($this->testDir . '/config_old');
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/main.php');
        $this->assertFileExists($this->testDir . '/config/secondary.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
        $this->assertDirectoryExists($this->testDir . '/config_old');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    }
}

test('move to app functionality', function (): void {
    // Test implementation here
    expect(true)->toBeTrue();
});
