<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
use Webmozart\Assert\Assert;
use SplFileInfo;
use Exception;
use Exception;
use SplFileInfo;
use Exception;
use SplFileInfo;
use Exception;
<<<<<<< HEAD
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Webmozart\Assert\Assert;
use SplFileInfo;
use Exception;
use Exception;
use SplFileInfo;
use Exception;
use SplFileInfo;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
use Exception;
=======
>>>>>>> 53d6a6ba (.)
=======
use Exception;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\File\AddStrictTypesDeclarationAction;
use SplFileInfo;
use Exception;
use SplFileInfo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\File\AddStrictTypesDeclarationAction;
=======
use Webmozart\Assert\Assert;
use SplFileInfo;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\File\AddStrictTypesDeclarationAction;
>>>>>>> 551c768c4 (.)

class AddStrictTypesDeclarationCommand extends Command
{
    protected $signature = 'xot:add-strict-types 
                            {--module= : Nome del modulo specifico da processare}
                            {--dry-run : Mostra solo i file che verrebbero modificati senza apportare modifiche}';

    protected $description = 'Aggiunge la dichiarazione strict_types=1 ai file PHP che ne sono sprovvisti';

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @var array<string>
     */
    /**
     * @var array<int, string>
     */
    /**
     * @var array<int, string>
     */
    /**
     * @var array<string>
     */
    /**
     * @var array<int, string>
     */
    /**
     * @var array<int, string>
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @var array<string>
     */
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
    /**
     * @var array<int, string>
     */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
    /**
     * @var array<string>
     */
>>>>>>> 551c768c4 (.)
    private array $excludedPaths = [
        'views',
        'config',
        'routes',
        'lang',
        'docs',
        '.php-cs-fixer',
    ];

    public function handle(AddStrictTypesDeclarationAction $action): int
    {
        $modulePath = base_path('Modules');
        $moduleOption = $this->option('module');
        $dryRun = $this->option('dry-run');

        if ($moduleOption && is_string($moduleOption)) {
            $modulePath .= '/'.$moduleOption;
            if (! File::isDirectory($modulePath)) {
                $this->error("Il modulo {$moduleOption} non esiste");

<<<<<<< HEAD
        if ($moduleOption) {
            $modulePath .= '/' . $moduleOption;
            if (!File::isDirectory($modulePath)) {
                $this->error("Il modulo {$moduleOption} non esiste");
=======
>>>>>>> 551c768c4 (.)
                return 1;
            }
        }

        $files = $this->findPhpFiles($modulePath);
        $count = 0;

        foreach ($files as $file) {
            Assert::isInstanceOf($file, SplFileInfo::class);
            if ($this->shouldProcessFile($file)) {
                if ($dryRun) {
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::isInstanceOf($file, SplFileInfo::class);
            if ($this->shouldProcessFile($file)) {
                if ($dryRun) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
                    $fileName = $file->getRealPath();
                    if ($fileName === false) {
                        $fileName = $file->getPathname();
                    }
                    $this->info("Verrebbe processato: {$fileName}");
<<<<<<< HEAD
                    $filePath = $file->getRealPath();
                    $this->info('Verrebbe processato: '.($filePath !== false ? $filePath : $file->getFilename()));
                    $this->info("Verrebbe processato: {$file}");
                    $this->info("Verrebbe processato: {$file}");
                    $filePath = $file->getRealPath();
                    $this->info('Verrebbe processato: '.($filePath !== false ? $filePath : $file->getFilename()));
                    $this->info("Verrebbe processato: {$file}");
                    $filePath = $file->getRealPath();
                    $this->info('Verrebbe processato: '.($filePath !== false ? $filePath : $file->getFilename()));
                    $this->info("Verrebbe processato: {$file}");
                    $this->info("Verrebbe processato: {$file}");
                    $filePath = $file->getRealPath();
                    $this->info('Verrebbe processato: '.($filePath !== false ? $filePath : $file->getFilename()));
                    $this->info("Verrebbe processato: {$file}");
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
                    $filePath = $file->getRealPath();
                    $this->info('Verrebbe processato: '.($filePath !== false ? $filePath : $file->getFilename()));
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
                    $count++;

                    continue;
                }

                $path = $file->getRealPath();
                if ($path === false) {
                    continue;
                }

                // PHPStan hint: at this point $path is definitely a string
                assert(is_string($path));

                try {
<<<<<<< HEAD
            if ($this->shouldProcessFile($file)) {
                if ($dryRun) {
                    $this->info("Verrebbe processato: {$file}");
                    $count++;
                    continue;
                }

                try {
                    $path = $file->getRealPath();
                    if ($path === false) {
                        continue;
                    }
                    
=======
>>>>>>> 551c768c4 (.)
                    $action->execute($path);
                    $this->info("Aggiunta dichiarazione strict_types a: {$path}");
                    $count++;
<<<<<<< HEAD
                } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                } catch (\Exception $e) {
                } catch (\Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
=======
                } catch (\Exception $e) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
                    $this->error("Errore nel processare {$path}: ".$e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                } catch (\Exception $e) {
                } catch (\Exception $e) {
                    $this->error("Errore nel processare {$path}: ".$e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
=======
                    $this->error("Errore nel processare {$path}: ".$e->getMessage());
>>>>>>> 551c768c4 (.)
                }
            }
        }

        $action = $dryRun ? 'Trovati' : 'Processati';
        $this->info("{$action} {$count} file");

        return 0;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
    /**
     * @return array<SplFileInfo>
    /**
     * @return array<\SplFileInfo>
     */
    /**
     * @return array<int, \Symfony\Component\Finder\SplFileInfo>
     */
    /**
     * @return array<int, \Symfony\Component\Finder\SplFileInfo>
     */
    /**
     * @return array<SplFileInfo>
    /**
     * @return array<\SplFileInfo>
     */
    /**
     * @return array<int, \Symfony\Component\Finder\SplFileInfo>
     */
    /**
     * @return array<int, \Symfony\Component\Finder\SplFileInfo>
     */
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
    /**
     * @return array<int, \Symfony\Component\Finder\SplFileInfo>
     */
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
    /**
     * @return array<SplFileInfo>
     */
>>>>>>> 551c768c4 (.)
    private function findPhpFiles(string $path): array
    {
        /** @var array<int, \Symfony\Component\Finder\SplFileInfo> $files */
        $files = array_values(File::allFiles($path));

        return $files;
    }

    private function shouldProcessFile(SplFileInfo $file): bool
<<<<<<< HEAD
    private function shouldProcessFile(SplFileInfo $file): bool
    private function shouldProcessFile(SplFileInfo $file): bool
    private function shouldProcessFile(\SplFileInfo $file): bool
=======
    private function shouldProcessFile(\Symfony\Component\Finder\SplFileInfo $file): bool
>>>>>>> 5cf46378 (.)
    {
        // Verifica l'estensione
        if (! str_ends_with($file->getFilename(), '.php')) {
        if (!str_ends_with($file->getFilename(), '.php')) {
        if (!str_ends_with($file->getFilename(), '.php')) {
    private function shouldProcessFile(SplFileInfo $file): bool
    private function shouldProcessFile(\Symfony\Component\Finder\SplFileInfo $file): bool
    {
        // Verifica l'estensione
        if (!str_ends_with($file->getFilename(), '.php')) {
    private function shouldProcessFile(SplFileInfo $file): bool
    private function shouldProcessFile(SplFileInfo $file): bool
    private function shouldProcessFile(SplFileInfo $file): bool
    private function shouldProcessFile(\SplFileInfo $file): bool
    {
        // Verifica l'estensione
        if (! str_ends_with($file->getFilename(), '.php')) {
        if (!str_ends_with($file->getFilename(), '.php')) {
        if (!str_ends_with($file->getFilename(), '.php')) {
    private function shouldProcessFile(SplFileInfo $file): bool
    private function shouldProcessFile(\Symfony\Component\Finder\SplFileInfo $file): bool
    {
        // Verifica l'estensione
        if (!str_ends_with($file->getFilename(), '.php')) {
    private function shouldProcessFile(SplFileInfo $file): bool
    {
        // Verifica l'estensione
        if (!str_ends_with($file->getFilename(), '.php')) {
=======
    {
        // Verifica l'estensione
        if (! str_ends_with($file->getFilename(), '.php')) {
>>>>>>> 551c768c4 (.)
            return false;
        }

        $path = $file->getRealPath();
        if ($path === false) {
            return false;
        }

        // Verifica se il file è in un percorso escluso
        foreach ($this->excludedPaths as $excludedPath) {
            if (str_contains($path, '/'.$excludedPath.'/')) {
                return false;
            }
        }

        // Verifica se il file ha già la dichiarazione strict_types
        $content = File::get($path);

        return ! str_contains($content, 'declare(strict_types=1)');
<<<<<<< HEAD
        return !str_contains($content, 'declare(strict_types=1)');
        return !str_contains($content, 'declare(strict_types=1)');
        return !str_contains($content, 'declare(strict_types=1)');

        return ! str_contains($content, 'declare(strict_types=1)');
        return !str_contains($content, 'declare(strict_types=1)');
        return !str_contains($content, 'declare(strict_types=1)');
        return !str_contains($content, 'declare(strict_types=1)');
        return !str_contains($content, 'declare(strict_types=1)');
=======
>>>>>>> 551c768c4 (.)
    }
}
