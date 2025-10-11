<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

use function Safe\exec;
use function Safe\file_get_contents;
use function Safe\file_put_contents;

/**
 * Test per verificare il corretto funzionamento dello script fix_structure.sh.
 */
class FixStructureTest extends TestCase
{
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
            $objects = \Safe\scandir($dir);
            foreach ($objects as $object) {
                if ($object !== '.' && $object !== '..') {
                    $fullPath = $dir.DIRECTORY_SEPARATOR.$object;
                    if (is_dir($fullPath) && ! is_link($dir.'/'.$object)) {
                        $this->rrmdir($fullPath);
                    } else {
                        \Safe\unlink($fullPath);
                    }
                }
            }
            \Safe\rmdir($dir);
        }
    }

    #[Test]
    public function test_move_to_app_functionality(): void
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
    public function test_rename_to_lower_functionality(): void
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
    public function test_move_config_functionality(): void
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
    }
}
