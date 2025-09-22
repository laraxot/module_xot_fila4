<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Exception;
<<<<<<< HEAD
=======
use Symfony\Component\Process\Process;
>>>>>>> 0e51323 (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function Safe\preg_match;

/**
 * Comando per ottimizzare la memory usage di Filament.
 * SuperMucca Memory Optimizer Command 🐄
 */
class OptimizeFilamentMemoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'filament:optimize-memory 
                            {--clear-cache : Clear all caches before optimization}
                            {--analyze : Only analyze without applying changes}
                            {--verbose : Show detailed output}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimize Filament admin panels for better memory usage';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('🐄 SuperMucca Filament Memory Optimizer');
        $this->info('=====================================');
        $this->newLine();

        $analyzeOnly = (bool) $this->option('analyze');
        $clearCache = (bool) $this->option('clear-cache');
        $verbose = (bool) $this->option('verbose');

        if ($clearCache) {
            $this->clearAllCaches();
        }

        // Analizza i problemi di memoria
        $issues = $this->analyzeMemoryIssues($verbose);
<<<<<<< HEAD
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
>>>>>>> 0e51323 (.)
            return self::SUCCESS;
        }

        // Applica le ottimizzazioni
        $this->applyOptimizations($issues, $verbose);

        $this->info('✅ Ottimizzazione completata!');
        $this->newLine();
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        $this->info('Prossimi passi:');
        $this->line('1. Testa i pannelli admin per verificare le performance');
        $this->line('2. Monitora i log per eventuali errori');
        $this->line('3. Esegui: php artisan filament:optimize-memory --analyze per verificare');

        return self::SUCCESS;
    }

    /**
     * Pulisce tutte le cache.
     */
    private function clearAllCaches(): void
    {
        $this->info('🧹 Pulizia cache...');
<<<<<<< HEAD
=======
        
        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache', 
>>>>>>> 0e51323 (.)
            'view:clear' => 'View cache',
            'cache:clear' => 'Application cache',
        ];

        foreach ($caches as $command => $description) {
            $this->line("  - {$description}");
            Artisan::call($command);
        }

        $this->info('✅ Cache pulite');
        $this->newLine();
    }

    /**
     * Analizza i problemi di memoria.
     *
     * @return array<string, mixed>
     */
    private function analyzeMemoryIssues(bool $verbose = false): array
    {
        $this->info('🔍 Analisi problemi di memoria...');
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        $issues = [
            'models_with_eager_loading' => $this->findModelsWithEagerLoading(),
            'heavy_widgets' => $this->findHeavyWidgets(),
            'unoptimized_resources' => $this->findUnoptimizedResources(),
            'migration_code_in_forms' => $this->findMigrationCodeInForms(),
            'missing_pagination' => $this->findMissingPagination(),
        ];

        if ($verbose) {
            $this->displayDetailedIssues($issues);
        }

        return $issues;
    }

    /**
     * Trova modelli con eager loading eccessivo.
     *
     * @return array<string>
     */
    private function findModelsWithEagerLoading(): array
    {
        $models = [];
        $files = File::allFiles(base_path('Modules'));
<<<<<<< HEAD
=======
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());
                
                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') || 
                        str_contains($withContent, 'permissions') ||
                        str_contains($withContent, 'teams') ||
                        str_contains($withContent, 'media')) {
                        $models[] = $file->getPathname();
>>>>>>> 0e51323 (.)
                    }
                }
            }
        }
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        return $models;
    }

    /**
     * Trova widget pesanti.
     *
     * @return array<string>
     */
    private function findHeavyWidgets(): array
    {
        $widgets = [];
        $files = File::allFiles(base_path('Modules'));
<<<<<<< HEAD
=======
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());
                
                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
>>>>>>> 0e51323 (.)
                    $widgets[] = $file->getPathname();
                }
            }
        }
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        return $widgets;
    }

    /**
     * Trova risorse non ottimizzate.
     *
     * @return array<string>
     */
    private function findUnoptimizedResources(): array
    {
        $resources = [];
        $files = File::allFiles(base_path('Modules'));
<<<<<<< HEAD
=======
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());
                
>>>>>>> 0e51323 (.)
                // Cerca eager loading eccessivo
                if (str_contains($content, '->with(') || str_contains($content, '->load(')) {
                    $resources[] = $file->getPathname();
                }
            }
        }
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        return $resources;
    }

    /**
     * Trova codice di migrazione nei form.
     *
     * @return array<string>
     */
    private function findMigrationCodeInForms(): array
    {
        $forms = [];
        $files = File::allFiles(base_path('Modules'));
<<<<<<< HEAD
=======
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());
                
                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
>>>>>>> 0e51323 (.)
                    str_contains($content, '->update(') &&
                    str_contains($content, 'getFormSchema')) {
                    $forms[] = $file->getPathname();
                }
            }
        }
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        return $forms;
    }

    /**
     * Trova risorse senza paginazione.
     *
     * @return array<string>
     */
    private function findMissingPagination(): array
    {
        $resources = [];
        $files = File::allFiles(base_path('Modules'));
<<<<<<< HEAD
=======
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());
                
                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> 0e51323 (.)
                    $resources[] = $file->getPathname();
                }
            }
        }
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        return $resources;
    }

    /**
     * Mostra i risultati dell'analisi.
     *
<<<<<<< HEAD
=======
     * @param array<string, mixed> $issues
>>>>>>> 0e51323 (.)
     */
    private function displayAnalysisResults(array $issues): void
    {
        $this->info('📊 Risultati analisi:');
        $this->newLine();

        $totalIssues = 0;
<<<<<<< HEAD
=======
        
        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;
            
            $label = match($type) {
>>>>>>> 0e51323 (.)
                'models_with_eager_loading' => 'Modelli con eager loading eccessivo',
                'heavy_widgets' => 'Widget pesanti',
                'unoptimized_resources' => 'Risorse non ottimizzate',
                'migration_code_in_forms' => 'Codice migrazione nei form',
                'missing_pagination' => 'Risorse senza paginazione',
                default => $type,
            };
<<<<<<< HEAD
=======
            
>>>>>>> 0e51323 (.)
            if ($count > 0) {
                $this->warn("⚠️  {$label}: {$count}");
            } else {
                $this->info("✅ {$label}: OK");
            }
        }

        $this->newLine();
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        if ($totalIssues > 0) {
            $this->error("🚨 Trovati {$totalIssues} problemi di performance");
            $this->line('Esegui senza --analyze per applicare le correzioni automatiche');
        } else {
            $this->info('🎉 Nessun problema di performance trovato!');
        }
    }

    /**
     * Mostra dettagli sui problemi trovati.
     *
<<<<<<< HEAD
=======
     * @param array<string, mixed> $issues
>>>>>>> 0e51323 (.)
     */
    private function displayDetailedIssues(array $issues): void
    {
        foreach ($issues as $type => $items) {
            if (is_array($items) && count($items) > 0) {
                $this->newLine();
                $this->warn("Dettagli {$type}:");
                foreach ($items as $item) {
                    $itemString = is_string($item) ? $item : (string) $item;
<<<<<<< HEAD
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> 0e51323 (.)
                }
            }
        }
    }

    /**
     * Applica le ottimizzazioni.
     *
<<<<<<< HEAD
=======
     * @param array<string, mixed> $issues
>>>>>>> 0e51323 (.)
     */
    private function applyOptimizations(array $issues, bool $verbose = false): void
    {
        $this->info('🔧 Applicazione ottimizzazioni...');
<<<<<<< HEAD
=======
        
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();
        
        // Ottimizzazione 2: Database
        $this->optimizeDatabase();
        
        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
        
>>>>>>> 0e51323 (.)
        $this->info('✅ Ottimizzazioni applicate');
    }

    /**
     * Ottimizza le configurazioni.
     */
    private function optimizeConfigurations(): void
    {
        $this->line('  - Ottimizzazione configurazioni...');
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
    }

    /**
     * Ottimizza il database.
     */
    private function optimizeDatabase(): void
    {
        $this->line('  - Ottimizzazione database...');
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        // Ottimizza le tabelle MySQL se possibile
        try {
            if (config('database.default') === 'mysql') {
                DB::statement('OPTIMIZE TABLE users');
                // Aggiungi altre tabelle critiche se necessario
            }
        } catch (Exception $e) {
            // Ignora errori di ottimizzazione database
        }
    }

    /**
     * Ottimizza l'autoloader.
     */
    private function optimizeAutoloader(): void
    {
        $this->line('  - Ottimizzazione autoloader...');
<<<<<<< HEAD
=======
        
>>>>>>> 0e51323 (.)
        $process = new Process(['composer', 'dump-autoload', '--optimize']);
        $process->setWorkingDirectory(base_path());
        $process->run();
    }
}
