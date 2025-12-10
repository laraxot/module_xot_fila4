<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
declare(strict_types=1);


namespace Modules\Xot\Tests\Feature;

use Illuminate\Support\Facades\File;

namespace Modules\Xot\Tests\Feature;
use Modules\Xot\Tests\TestCase;

use Modules\Xot\Tests\TestCase;

use Modules\Xot\Tests\TestCase;

use function Safe\chdir;
use function Safe\mkdir;
use function Safe\rmdir;
use function Safe\scandir;
use function Safe\unlink;
declare(strict_types=1);


namespace Modules\Xot\Tests\Feature;



use Illuminate\Support\Facades\File;
namespace Modules\Xot\Tests\Feature;

namespace Modules\Xot\Tests\Feature;

namespace Modules\Xot\Tests\Feature;


declare(strict_types=1);


namespace Modules\Xot\Tests\Feature;

use Illuminate\Support\Facades\File;
namespace Modules\Xot\Tests\Feature;



namespace Modules\Xot\Tests\Feature;

namespace Modules\Xot\Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * Test per verificare il corretto funzionamento dello script fix_structure.sh.
 */
class FixStructureTest extends TestCase
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
    private string $testDir;

    protected function setUp(): void
    {
        parent::setUp();

        // Creiamo una directory temporanea per i test
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
        $this->testDir = sys_get_temp_dir().'/fix_structure_test_'.uniqid();
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
<<<<<<< HEAD
        mkdir($this->testDir, 0o755, true);
        mkdir($this->testDir, 0o755, true);
        mkdir($this->testDir, 0755, true);
=======
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
        mkdir($this->testDir, 0o755, true);
=======
        mkdir($this->testDir, 0755, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        mkdir($this->testDir, 0o755, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

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
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                        $this->rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                    } else {
                        unlink($dir . DIRECTORY_SEPARATOR . $object);
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
                if ($object != "." && $object != "..") {
                    if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object)) {
                        $this->rrmdir($dir. DIRECTORY_SEPARATOR .$object);
                    } else {
                        unlink($dir. DIRECTORY_SEPARATOR .$object);
<<<<<<< HEAD
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
                if ($object !== '.' && $object !== '..') {
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                        $this->rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                    } else {
                        unlink($dir . DIRECTORY_SEPARATOR . $object);
<<<<<<< HEAD
                    }
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
    private string $testDir;

    protected function setUp(): void
    {
        parent::setUp();

        // Creiamo una directory temporanea per i test
        $this->testDir = sys_get_temp_dir() . '/fix_structure_test_' . uniqid();
        mkdir($this->testDir, 0o755, true);
        mkdir($this->testDir, 0755, true);
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
                    if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                        $this->rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                    } else {
                        unlink($dir.DIRECTORY_SEPARATOR.$object);
                    }
                    }
                if ($object !== '.' && $object !== '..') {
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . '/' . $object)) {
                        $this->rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                    if (is_dir($dir.DIRECTORY_SEPARATOR.$object) && ! is_link($dir.'/'.$object)) {
                        $this->rrmdir($dir.DIRECTORY_SEPARATOR.$object);
                    } else {
                        unlink($dir.DIRECTORY_SEPARATOR.$object);
                    }
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                    }
                }
            }
            rmdir($dir);
        }
    public function test_move_to_app_functionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir.'/Actions', 0o755, true);
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');
    }

    #[Test]
    public function testMoveToAppFunctionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir . '/Actions', 0o755, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        mkdir($this->testDir . '/Actions', 0755, true);
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        file_put_contents($this->testDir . '/Actions/test.php', '<?php echo "test";');
        rmdir($dir);
    }

    #[Test]
    public function test_move_to_app_functionality(): void
        rmdir($dir);
    }

    #[Test]
    public function testMoveToAppFunctionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir . '/Actions', 0o755, true);
        mkdir($this->testDir.'/Actions', 0o755, true);
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');
        mkdir($this->testDir.'/Actions', 0o755, true);
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');
        mkdir($this->testDir . '/Actions', 0755, true);
        mkdir($this->testDir . '/Actions', 0o755, true);
        file_put_contents($this->testDir . '/Actions/test.php', '<?php echo "test";');
        rmdir($dir);
    }

    #[Test]
    public function test_move_to_app_functionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir.'/Actions', 0o755, true);
        file_put_contents($this->testDir.'/Actions/test.php', '<?php echo "test";');
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir . '/Actions', 0o755, true);
=======
=======
        mkdir($this->testDir . '/Actions', 0755, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        mkdir($this->testDir . '/Actions', 0o755, true);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
        file_put_contents($this->testDir . '/Actions/test.php', '<?php echo "test";');

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
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        chmod($this->testDir . '/fix_structure.sh', 0755);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');
=======
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        chmod($this->testDir . '/fix_structure.sh', 0o755);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che la cartella Actions sia stata spostata in app/
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->assertDirectoryExists($this->testDir . '/app/Actions');
        $this->assertFileExists($this->testDir . '/app/Actions/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Actions');
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
        static::assertDirectoryExists($this->testDir.'/app/Actions');
        static::assertFileExists($this->testDir.'/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Actions');
    }

    #[Test]
    public function test_rename_to_lower_functionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir . '/Config', 0o755, true);
        file_put_contents($this->testDir . '/Config/test.php', '<?php echo "test";');
        mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/test.php', '<?php echo "test";');
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che la cartella Actions sia stata spostata in app/
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
        static::assertDirectoryExists($this->testDir.'/app/Actions');
        static::assertFileExists($this->testDir.'/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Actions');
    }

    #[Test]
    public function test_rename_to_lower_functionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir . '/Config', 0o755, true);
        file_put_contents($this->testDir . '/Config/test.php', '<?php echo "test";');
        mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/test.php', '<?php echo "test";');
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        chmod($this->testDir . '/fix_structure.sh', 0755);

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che la cartella Actions sia stata spostata in app/
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
        $this->assertDirectoryExists($this->testDir . '/app/Actions');
        $this->assertFileExists($this->testDir . '/app/Actions/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Actions');
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
>>>>>>> ce6fc085 (.)
=======
        $this->assertDirectoryExists($this->testDir . '/app/Actions');
        $this->assertFileExists($this->testDir . '/app/Actions/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Actions');
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
        static::assertDirectoryExists($this->testDir . '/app/Actions');
        static::assertFileExists($this->testDir . '/app/Actions/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Actions');
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $this->assertDirectoryExists($this->testDir . '/app/Actions');
        $this->assertFileExists($this->testDir . '/app/Actions/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Actions');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    }

    #[Test]
    public function testRenameToLowerFunctionality(): void
    {
        // Creiamo una struttura di directory di test
        mkdir($this->testDir . '/Config', 0o755, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        mkdir($this->testDir . '/Config', 0755, true);
=======
=======
        mkdir($this->testDir . '/Config', 0755, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        mkdir($this->testDir . '/Config', 0o755, true);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        file_put_contents($this->testDir . '/Config/test.php', '<?php echo "test";');

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
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        chmod($this->testDir . '/fix_structure.sh', 0755);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');
=======
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        chmod($this->testDir . '/fix_structure.sh', 0o755);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che la cartella Config sia stata rinominata in config
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
    }

    #[Test]
    public function test_move_config_functionality(): void
    {
        // Creiamo una struttura di directory di test con entrambe le versioni
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che la cartella Config sia stata rinominata in config
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
    }

    #[Test]
    public function test_move_config_functionality(): void
    {
        // Creiamo una struttura di directory di test con entrambe le versioni
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        chmod($this->testDir . '/fix_structure.sh', 0755);

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che la cartella Config sia stata rinominata in config
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
>>>>>>> ce6fc085 (.)
=======
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> ce6fc085 (.)
=======
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/test.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/test.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
    }

    #[Test]
    public function testMoveConfigFunctionality(): void
    {
        // Creiamo una struttura di directory di test con entrambe le versioni
        mkdir($this->testDir . '/Config', 0o755, true);
        file_put_contents($this->testDir . '/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir . '/config', 0o755, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        mkdir($this->testDir . '/Config', 0755, true);
        file_put_contents($this->testDir . '/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir . '/config', 0755, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        mkdir($this->testDir . '/Config', 0o755, true);
        file_put_contents($this->testDir . '/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir . '/config', 0o755, true);
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        file_put_contents($this->testDir . '/config/secondary.php', '<?php echo "secondary";');
        mkdir($this->testDir . '/Config', 0755, true);
        file_put_contents($this->testDir . '/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir . '/config', 0755, true);
        file_put_contents($this->testDir . '/config/secondary.php', '<?php echo "secondary";');
        mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir.'/config', 0o755, true);
        file_put_contents($this->testDir.'/config/secondary.php', '<?php echo "secondary";');
        file_put_contents($this->testDir . '/config/secondary.php', '<?php echo "secondary";');
        file_put_contents($this->testDir . '/config/secondary.php', '<?php echo "secondary";');
        mkdir($this->testDir.'/Config', 0o755, true);
        file_put_contents($this->testDir.'/Config/main.php', '<?php echo "main";');

        mkdir($this->testDir.'/config', 0o755, true);
        file_put_contents($this->testDir.'/config/secondary.php', '<?php echo "secondary";');
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        file_put_contents($this->testDir . '/config/secondary.php', '<?php echo "secondary";');

        // Copiamo lo script nella directory di test
        $script = base_path('../bashscripts/fix_structure.sh');
        $scriptContent = file_get_contents($script);
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
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        chmod($this->testDir . '/fix_structure.sh', 0755);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        file_put_contents($this->testDir.'/fix_structure.sh', $scriptContent);
        chmod($this->testDir.'/fix_structure.sh', 0o755);

        // Eseguiamo lo script
        exec('cd '.$this->testDir.' && ./fix_structure.sh');

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
        file_put_contents($this->testDir . '/fix_structure.sh', $scriptContent);
        chmod($this->testDir . '/fix_structure.sh', 0o755);
        chmod($this->testDir . '/fix_structure.sh', 0755);
=======
=======
        chmod($this->testDir . '/fix_structure.sh', 0755);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        chmod($this->testDir . '/fix_structure.sh', 0o755);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

        // Eseguiamo lo script
        exec('cd ' . $this->testDir . ' && ./fix_structure.sh');

        // Verifichiamo che i contenuti siano stati uniti e che la cartella minuscola contenga tutto
        static::assertDirectoryExists($this->testDir . '/config');
        static::assertFileExists($this->testDir . '/config/main.php');
        static::assertFileExists($this->testDir . '/config/secondary.php');
        static::assertDirectoryDoesNotExist($this->testDir . '/Config');
        static::assertDirectoryExists($this->testDir . '/config_old');
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        $this->assertDirectoryExists($this->testDir . '/config');
        $this->assertFileExists($this->testDir . '/config/main.php');
        $this->assertFileExists($this->testDir . '/config/secondary.php');
        $this->assertDirectoryDoesNotExist($this->testDir . '/Config');
        $this->assertDirectoryExists($this->testDir . '/config_old');
<<<<<<< HEAD
        static::assertDirectoryExists($this->testDir.'/config');
        static::assertFileExists($this->testDir.'/config/main.php');
        static::assertFileExists($this->testDir.'/config/secondary.php');
        static::assertDirectoryDoesNotExist($this->testDir.'/Config');
        static::assertDirectoryExists($this->testDir.'/config_old');
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    }
}
