<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Feature;

use function Safe\file_get_contents;
use function Safe\file_put_contents;


use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

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
        /** @phpstan-ignore-next-line property.notFound */
        mkdir($this->testDir, 0o755, true);

        // Impostiamo la directory di lavoro
        /** @phpstan-ignore-next-line property.notFound */
        chdir($this->testDir);
    }

    protected function tearDown(): void
    {
        // Puliamo la directory di test
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
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
                        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
                        $this->rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                    } else {
                        unlink($dir.DIRECTORY_SEPARATOR.$object);
                    }
                }
            }
            rmdir($dir);
        }
    }

    #[Test]
    public function test_move_to_app_functionality(): void
    {
        // Creiamo una struttura di directory di test
        /** @phpstan-ignore-next-line property.notFound */
        mkdir($this->testDir.'/Actions', 0o755, true);
        /** @phpstan-ignore-next-line property.notFound */
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        /** @phpstan-ignore-next-line property.notFound */
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        /** @phpstan-ignore-next-line property.notFound */
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        /** @phpstan-ignore-next-line property.notFound */
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che la cartella Actions sia stata spostata in app/
        /** @phpstan-ignore-next-line property.notFound */
        static::assertDirectoryExists($this->testDir.'/app/Actions');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertFileExists($this->testDir.'/app/Actions/test.php');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertDirectoryDoesNotExist($this->testDir.'/Actions');
    }

    #[Test]
    public function test_rename_to_lower_functionality(): void
    {
        // Creiamo una struttura di directory di test
        /** @phpstan-ignore-next-line property.notFound */
        mkdir($this->testDir.'/Config', 0o755, true);
        /** @phpstan-ignore-next-line property.notFound */
        file_put_contents($this->testDir.'/Config/test.php', '<?php echo "test";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        /** @phpstan-ignore-next-line property.notFound */
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        /** @phpstan-ignore-next-line property.notFound */
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        /** @phpstan-ignore-next-line property.notFound */
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che la cartella Config sia stata rinominata in config
        /** @phpstan-ignore-next-line property.notFound */
        static::assertDirectoryExists($this->testDir.'/config');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertFileExists($this->testDir.'/config/test.php');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
    }

    #[Test]
    public function test_move_config_functionality(): void
    {
        // Creiamo una struttura di directory di test con entrambe le versioni
        /** @phpstan-ignore-next-line property.notFound */
        mkdir($this->testDir.'/Config', 0o755, true);
        /** @phpstan-ignore-next-line property.notFound */
        file_put_contents($this->testDir.'/Config/main.php', '<?php echo "main";');

        /** @phpstan-ignore-next-line property.notFound */
        mkdir($this->testDir.'/config', 0o755, true);
        /** @phpstan-ignore-next-line property.notFound */
        file_put_contents($this->testDir.'/config/secondary.php', '<?php echo "secondary";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
        /** @phpstan-ignore-next-line property.notFound */
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        /** @phpstan-ignore-next-line property.notFound */
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        /** @phpstan-ignore-next-line property.notFound */
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
        /** @phpstan-ignore-next-line property.notFound */
        static::assertDirectoryExists($this->testDir.'/config');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertFileExists($this->testDir.'/config/main.php');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertFileExists($this->testDir.'/config/secondary.php');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
        /** @phpstan-ignore-next-line property.notFound */
        static::assertDirectoryExists($this->testDir.'/config_old');
    }
}
