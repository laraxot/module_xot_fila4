<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Webmozart\Assert\Assert;
use SplFileInfo;
use Exception;
=======
use Exception;
use SplFileInfo;
>>>>>>> ed734516 (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\File\AddStrictTypesDeclarationAction;

class AddStrictTypesDeclarationCommand extends Command
{
    protected $signature = 'xot:add-strict-types 
                            {--module= : Nome del modulo specifico da processare}
                            {--dry-run : Mostra solo i file che verrebbero modificati senza apportare modifiche}';

    protected $description = 'Aggiunge la dichiarazione strict_types=1 ai file PHP che ne sono sprovvisti';

<<<<<<< HEAD
    /**
     * @var array<string>
     */
=======
>>>>>>> ed734516 (.)
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
        if ($moduleOption && is_string($moduleOption)) {
            $modulePath .= '/'.$moduleOption;
            if (! File::isDirectory($modulePath)) {
                $this->error("Il modulo {$moduleOption} non esiste");

=======
        if ($moduleOption) {
            $modulePath .= '/' . $moduleOption;
            if (!File::isDirectory($modulePath)) {
                $this->error("Il modulo {$moduleOption} non esiste");
>>>>>>> ed734516 (.)
                return 1;
            }
        }

        $files = $this->findPhpFiles($modulePath);
        $count = 0;

        foreach ($files as $file) {
<<<<<<< HEAD
            Assert::isInstanceOf($file, SplFileInfo::class);
            if ($this->shouldProcessFile($file)) {
                if ($dryRun) {
                    $fileName = $file->getRealPath();
                    if ($fileName === false) {
                        $fileName = $file->getPathname();
                    }
                    $this->info("Verrebbe processato: {$fileName}");
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
                    
>>>>>>> ed734516 (.)
                    $action->execute($path);
                    $this->info("Aggiunta dichiarazione strict_types a: {$path}");
                    $count++;
                } catch (Exception $e) {
<<<<<<< HEAD
                    $this->error("Errore nel processare {$path}: ".$e->getMessage());
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
    /**
     * @return array<SplFileInfo>
     */
=======
>>>>>>> ed734516 (.)
    private function findPhpFiles(string $path): array
    {
        return File::allFiles($path);
    }

    private function shouldProcessFile(SplFileInfo $file): bool
    {
        // Verifica l'estensione
<<<<<<< HEAD
        if (! str_ends_with($file->getFilename(), '.php')) {
=======
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

        return ! str_contains($content, 'declare(strict_types=1)');
=======
        return !str_contains($content, 'declare(strict_types=1)');
>>>>>>> ed734516 (.)
    }
}
