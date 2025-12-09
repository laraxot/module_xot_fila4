<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Tests\Feature;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
namespace Modules\Xot\Tests\Feature;

use Illuminate\Support\Facades\File;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 5a14301c (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
namespace Modules\Xot\Tests\Feature;

use Illuminate\Support\Facades\File;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
=======
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        mkdir($this->testDir, 0o755, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        mkdir($this->testDir, 0o755, true);
=======
        mkdir($this->testDir, 0755, true);
>>>>>>> a12f125f4a (.)
=======
        mkdir($this->testDir, 0o755, true);
>>>>>>> b93ef594b4 (.)
=======
        mkdir($this->testDir, 0755, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
                if ($object !== '.' && $object !== '..') {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                        $this->rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                    } else {
                        unlink($dir.DIRECTORY_SEPARATOR.$object);
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                        $this->rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                    } else {
                        unlink($dir . DIRECTORY_SEPARATOR . $object);
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
                if ($object != "." && $object != "..") {
                    if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object)) {
                        $this->rrmdir($dir. DIRECTORY_SEPARATOR .$object);
                    } else {
                        unlink($dir. DIRECTORY_SEPARATOR .$object);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                if ($object !== '.' && $object !== '..') {
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                        $this->rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                    } else {
                        unlink($dir . DIRECTORY_SEPARATOR . $object);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
                    }
                }
            }
            rmdir($dir);
        }
    }

    #[Test]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function test_move_to_app_functionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir.'/Actions', 0o755, true);
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    public function testMoveToAppFunctionality(): void
    {
        // Creiamo una struttura di directory di test
<<<<<<< HEAD
        mkdir($this->testDir . '/Actions', 0o755, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        mkdir($this->testDir . '/Actions', 0o755, true);
=======
        mkdir($this->testDir . '/Actions', 0755, true);
>>>>>>> a12f125f4a (.)
=======
        mkdir($this->testDir . '/Actions', 0o755, true);
>>>>>>> b93ef594b4 (.)
=======
        mkdir($this->testDir . '/Actions', 0755, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        file_put_contents($this->testDir . '/Actions/test.php', '<?php echo "test";');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
<<<<<<< HEAD
        chmod($this->testDir . '/fix_structure.sh', 0o755);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        chmod($this->testDir . '/fix_structure.sh', 0o755);
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> a12f125f4a (.)
=======
        chmod($this->testDir . '/fix_structure.sh', 0o755);
>>>>>>> b93ef594b4 (.)
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che la cartella Actions sia stata spostata in app/
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
=======
        $this->assertDirectoryExists($this->testDir . '/app/Actions');
        $this->assertFileExists($this->testDir . '/app/Actions/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Actions');
>>>>>>> a12f125f4a (.)
=======
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
>>>>>>> b93ef594b4 (.)
=======
        $this->assertDirectoryExists($this->testDir . '/app/Actions');
        $this->assertFileExists($this->testDir . '/app/Actions/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Actions');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    #[Test]
    public function testRenameToLowerFunctionality(): void
    {
        // Creiamo una struttura di directory di test
<<<<<<< HEAD
        mkdir($this->testDir . '/Config', 0o755, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        mkdir($this->testDir . '/Config', 0o755, true);
=======
        mkdir($this->testDir . '/Config', 0755, true);
>>>>>>> a12f125f4a (.)
=======
        mkdir($this->testDir . '/Config', 0o755, true);
>>>>>>> b93ef594b4 (.)
=======
        mkdir($this->testDir . '/Config', 0755, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        file_put_contents($this->testDir . '/Config/test.php', '<?php echo "test";');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
<<<<<<< HEAD
        chmod($this->testDir . '/fix_structure.sh', 0o755);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        chmod($this->testDir . '/fix_structure.sh', 0o755);
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> a12f125f4a (.)
=======
        chmod($this->testDir . '/fix_structure.sh', 0o755);
>>>>>>> b93ef594b4 (.)
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che la cartella Config sia stata rinominata in config
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
=======
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
>>>>>>> a12f125f4a (.)
=======
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
>>>>>>> b93ef594b4 (.)
=======
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    #[Test]
    public function testMoveConfigFunctionality(): void
    {
        // Creiamo una struttura di directory di test con entrambe le versioni
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        mkdir($this->testDir . '/Config', 0o755, true);
        file_put_contents($this->testDir . '/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir . '/config', 0o755, true);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        mkdir($this->testDir . '/Config', 0755, true);
        file_put_contents($this->testDir . '/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir . '/config', 0755, true);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        mkdir($this->testDir . '/Config', 0o755, true);
        file_put_contents($this->testDir . '/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir . '/config', 0o755, true);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        file_put_contents($this->testDir . '/config/secondary.php', '<?php echo "secondary";');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/main.php');
        static::assertFileExists($this->testDir.'/config/secondary.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
        static::assertDirectoryExists($this->testDir.'/config_old');
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
<<<<<<< HEAD
        chmod($this->testDir . '/fix_structure.sh', 0o755);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        chmod($this->testDir . '/fix_structure.sh', 0o755);
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> a12f125f4a (.)
=======
        chmod($this->testDir . '/fix_structure.sh', 0o755);
>>>>>>> b93ef594b4 (.)
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/main.php');
        static::assertFileExists($this->testDir . '/config/secondary.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
        static::assertDirectoryExists($this->testDir . '/config_old');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/main.php');
        $this->assertFileExists($this->testDir . '/config/secondary.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
        $this->assertDirectoryExists($this->testDir . '/config_old');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    }
}
