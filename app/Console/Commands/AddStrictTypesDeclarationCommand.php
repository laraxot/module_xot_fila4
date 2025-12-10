<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use SplFileInfo;
use Exception;
=======
use Exception;
use SplFileInfo;
>>>>>>> ed734516 (.)
=======
use Exception;
use SplFileInfo;
>>>>>>> ed734516 (.)
=======
use Exception;
use SplFileInfo;
>>>>>>> ed734516 (.)
=======
use Exception;
>>>>>>> 53d6a6ba (.)
=======
use Exception;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
use Exception;
>>>>>>> 71586de2 (.)
=======
use Exception;
>>>>>>> 53d6a6ba (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\File\AddStrictTypesDeclarationAction;
use SplFileInfo;
<<<<<<< HEAD
=======
use Exception;
use SplFileInfo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\File\AddStrictTypesDeclarationAction;
>>>>>>> ed734516 (.)
=======
>>>>>>> 53d6a6ba (.)

class AddStrictTypesDeclarationCommand extends Command
{
    protected $signature = 'xot:add-strict-types 
                            {--module= : Nome del modulo specifico da processare}
                            {--dry-run : Mostra solo i file che verrebbero modificati senza apportare modifiche}';

    protected $description = 'Aggiunge la dichiarazione strict_types=1 ai file PHP che ne sono sprovvisti';

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
>>>>>>> 249a0067 (.)
    /**
     * @var array<string>
     */
=======
>>>>>>> ed734516 (.)
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 53d6a6ba (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($moduleOption && is_string($moduleOption)) {
            $modulePath .= '/'.$moduleOption;
            if (! File::isDirectory($modulePath)) {
                $this->error("Il modulo {$moduleOption} non esiste");

=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
        if ($moduleOption) {
            $modulePath .= '/' . $moduleOption;
            if (!File::isDirectory($modulePath)) {
                $this->error("Il modulo {$moduleOption} non esiste");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
                return 1;
            }
        }

        $files = $this->findPhpFiles($modulePath);
        $count = 0;

        foreach ($files as $file) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::isInstanceOf($file, SplFileInfo::class);
            if ($this->shouldProcessFile($file)) {
                if ($dryRun) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 249a0067 (.)
                    $fileName = $file->getRealPath();
                    if ($fileName === false) {
                        $fileName = $file->getPathname();
                    }
                    $this->info("Verrebbe processato: {$fileName}");
<<<<<<< HEAD
=======
                    $this->info("Verrebbe processato: {$file}");
>>>>>>> 53d6a6ba (.)
=======
                    $filePath = $file->getRealPath();
                    $this->info('Verrebbe processato: '.($filePath !== false ? $filePath : $file->getFilename()));
>>>>>>> b7afadf9 (.)
=======
                    $this->info("Verrebbe processato: {$file}");
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
                    $this->info("Verrebbe processato: {$file}");
>>>>>>> 53d6a6ba (.)
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
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
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
                    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
                    $action->execute($path);
                    $this->info("Aggiunta dichiarazione strict_types a: {$path}");
                    $count++;
                } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 53d6a6ba (.)
                    $this->error("Errore nel processare {$path}: ".$e->getMessage());
=======
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
>>>>>>> ed734516 (.)
=======
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
>>>>>>> ed734516 (.)
=======
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
>>>>>>> ed734516 (.)
=======
                    $this->error("Errore nel processare {$path}: " . $e->getMessage());
>>>>>>> ed734516 (.)
                }
            }
        }

        $action = $dryRun ? 'Trovati' : 'Processati';
        $this->info("{$action} {$count} file");

        return 0;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<SplFileInfo>
=======
    /**
     * @return array<\SplFileInfo>
>>>>>>> 249a0067 (.)
     */
=======
>>>>>>> ed734516 (.)
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
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 53d6a6ba (.)
    private function findPhpFiles(string $path): array
    {
        return File::allFiles($path);
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private function shouldProcessFile(SplFileInfo $file): bool
=======
    private function shouldProcessFile(\SplFileInfo $file): bool
>>>>>>> 249a0067 (.)
=======
    private function shouldProcessFile(SplFileInfo $file): bool
>>>>>>> 53d6a6ba (.)
    {
        // Verifica l'estensione
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! str_ends_with($file->getFilename(), '.php')) {
=======
        if (!str_ends_with($file->getFilename(), '.php')) {
>>>>>>> ed734516 (.)
=======
        if (!str_ends_with($file->getFilename(), '.php')) {
>>>>>>> ed734516 (.)
=======
        if (!str_ends_with($file->getFilename(), '.php')) {
>>>>>>> ed734516 (.)
=======
    private function shouldProcessFile(SplFileInfo $file): bool
    {
        // Verifica l'estensione
        if (!str_ends_with($file->getFilename(), '.php')) {
>>>>>>> ed734516 (.)
            return false;
        }

        $path = $file->getRealPath();
        if ($path === false) {
            return false;
        }

        // Verifica se il file è in un percorso escluso
        foreach ($this->excludedPaths as $excludedPath) {
            if (str_contains($path, "/{$excludedPath}/")) {
                return false;
            }
        }

        // Verifica se il file ha già la dichiarazione strict_types
        $content = File::get($path);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return ! str_contains($content, 'declare(strict_types=1)');
=======
        return !str_contains($content, 'declare(strict_types=1)');
>>>>>>> ed734516 (.)
=======
        return !str_contains($content, 'declare(strict_types=1)');
>>>>>>> ed734516 (.)
=======
        return !str_contains($content, 'declare(strict_types=1)');
>>>>>>> ed734516 (.)
=======
        return !str_contains($content, 'declare(strict_types=1)');
>>>>>>> ed734516 (.)
    }
}
