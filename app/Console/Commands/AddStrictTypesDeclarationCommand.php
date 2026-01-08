<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Exception;
=======
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
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\File\AddStrictTypesDeclarationAction;
use SplFileInfo;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
>>>>>>> 285375c74 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @var array<string>
     */
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
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
                    $fileName = $file->getRealPath();
                    if ($fileName === false) {
                        $fileName = $file->getPathname();
                    }
                    $this->info("Verrebbe processato: {$fileName}");
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
                    $action->execute($path);
                    $this->info("Aggiunta dichiarazione strict_types a: {$path}");
                    $count++;
                } catch (Exception $e) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                    $this->error("Errore nel processare {$path}: ".$e->getMessage());
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
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<SplFileInfo>
     */
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
    private function findPhpFiles(string $path): array
    {
        return File::allFiles($path);
    }

    private function shouldProcessFile(SplFileInfo $file): bool
    {
        // Verifica l'estensione
        if (! str_ends_with($file->getFilename(), '.php')) {
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

        return ! str_contains($content, 'declare(strict_types=1)');
    }
}
