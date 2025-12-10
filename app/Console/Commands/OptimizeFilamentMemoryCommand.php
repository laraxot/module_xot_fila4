<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

<<<<<<< HEAD
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

use Symfony\Component\Process\Process;

=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
        $this->info('=====================================');
        $this->info('=====================================');
        $this->info('=====================================');
        $this->info('=====================================');
        $this->info('=====================================');
        $this->info('=====================================');
        $this->info('=====================================');
        $this->info('=====================================');
        $this->info('=====================================');
=======
>>>>>>> 551c768c4 (.)
        $this->newLine();

        $analyzeOnly = (bool) $this->option('analyze');
        $clearCache = (bool) $this->option('clear-cache');
        $verbose = (bool) $this->option('verbose');

        if ($clearCache) {
            $this->clearAllCaches();
        }

        // Analizza i problemi di memoria
        $issues = $this->analyzeMemoryIssues($verbose);

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

<<<<<<< HEAD
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);


        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);


        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);


        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);


        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
=======
>>>>>>> 551c768c4 (.)
            return self::SUCCESS;
        }

        // Applica le ottimizzazioni
        $this->applyOptimizations($issues, $verbose);

        $this->info('✅ Ottimizzazione completata!');
        $this->newLine();

<<<<<<< HEAD

        
        


        

        



        

        



        

        



        

        



        



        
        


        

        



        

        



        

        



        

        



        

        
=======
>>>>>>> 551c768c4 (.)
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

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
<<<<<<< HEAD
        
        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache', 

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
=======
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') ||
<<<<<<< HEAD
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') ||
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') || 
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') || 
=======
>>>>>>> 551c768c4 (.)
                        str_contains($withContent, 'permissions') ||
                        str_contains($withContent, 'teams') ||
                        str_contains($withContent, 'media')) {
                        $models[] = $file->getPathname();
<<<<<<< HEAD
                    // Verifica che l'indice 1 esista nell'array $matches prima di accedervi
                    if (isset($matches[1])) {
                        $withContent = $matches[1];
                        // Controlla se ha relazioni pesanti
                        if (str_contains($withContent, 'roles') ||
                            str_contains($withContent, 'permissions') ||
                            str_contains($withContent, 'teams') ||
                            str_contains($withContent, 'media')) {
                            $models[] = $file->getPathname();
                        }
        

        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
        

        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
        

        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
        

        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
        
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
                    // Verifica che l'indice 1 esista nell'array $matches prima di accedervi
                    if (isset($matches[1])) {
                        $withContent = $matches[1];
                        // Controlla se ha relazioni pesanti
                        if (str_contains($withContent, 'roles') ||
                            str_contains($withContent, 'permissions') ||
                            str_contains($withContent, 'teams') ||
                            str_contains($withContent, 'media')) {
                            $models[] = $file->getPathname();
                        }
=======
>>>>>>> 551c768c4 (.)
                    }
                }
            }
        }

<<<<<<< HEAD

        
        


        

        



        

        



        

        



        

        



        



        
        


        

        



        

        



        

        



        

        



        

        
=======
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
<<<<<<< HEAD
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
        

                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
        

                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
        

                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());
                
                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
=======
>>>>>>> 551c768c4 (.)
                    $widgets[] = $file->getPathname();
                }
            }
        }

<<<<<<< HEAD

        
        


        

        



        

        



        

        



        

        



        



        
        


        

        



        

        



        

        



        

        



        

        
=======
>>>>>>> 551c768c4 (.)
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

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

<<<<<<< HEAD
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());
                

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());


        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

=======
>>>>>>> 551c768c4 (.)
                // Cerca eager loading eccessivo
                if (str_contains($content, '->with(') || str_contains($content, '->load(')) {
                    $resources[] = $file->getPathname();
                }
            }
        }

<<<<<<< HEAD

        
        


        

        



        

        



        

        



        

        



        



        
        


        

        



        

        



        

        



        

        



        

        
=======
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') &&
<<<<<<< HEAD
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
                if (str_contains($content, '->whereNull(') &&
                if (str_contains($content, '->whereNull(') && 
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());
                
                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') && 
=======
>>>>>>> 551c768c4 (.)
                    str_contains($content, '->update(') &&
                    str_contains($content, 'getFormSchema')) {
                    $forms[] = $file->getPathname();
                }
            }
        }

<<<<<<< HEAD

        
        


        

        



        

        



        

        



        

        



        



        
        


        

        



        

        



        

        



        

        



        

        
=======
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
<<<<<<< HEAD
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());
                
                // Cerca liste senza paginazione
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
=======
>>>>>>> 551c768c4 (.)
                    $resources[] = $file->getPathname();
                }
            }
        }

<<<<<<< HEAD

        
        


        

        



        

        



        

        



        

        



        



        
        


        

        



        

        



        

        



        

        



        

        
=======
>>>>>>> 551c768c4 (.)
        return $resources;
    }

    /**
     * Mostra i risultati dell'analisi.
     *
     * @param  array<string, mixed>  $issues
<<<<<<< HEAD
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
=======
>>>>>>> 551c768c4 (.)
     */
    private function displayAnalysisResults(array $issues): void
    {
        $this->info('📊 Risultati analisi:');
        $this->newLine();

        $totalIssues = 0;

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
<<<<<<< HEAD
        
        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;
            
            $label = match($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
=======
>>>>>>> 551c768c4 (.)
                'models_with_eager_loading' => 'Modelli con eager loading eccessivo',
                'heavy_widgets' => 'Widget pesanti',
                'unoptimized_resources' => 'Risorse non ottimizzate',
                'migration_code_in_forms' => 'Codice migrazione nei form',
                'missing_pagination' => 'Risorse senza paginazione',
                default => $type,
            };

<<<<<<< HEAD

            
            


            

            



            

            



            

            



            

            



            



            
            


            

            



            

            



            

            



            

            



            

            
=======
>>>>>>> 551c768c4 (.)
            if ($count > 0) {
                $this->warn("⚠️  {$label}: {$count}");
            } else {
                $this->info("✅ {$label}: OK");
            }
        }

        $this->newLine();

<<<<<<< HEAD

        
        


        

        



        

        



        

        



        

        



        



        
        


        

        



        

        



        

        



        

        



        

        
=======
>>>>>>> 551c768c4 (.)
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
     * @param  array<string, mixed>  $issues
<<<<<<< HEAD
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
=======
>>>>>>> 551c768c4 (.)
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
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
                    $this->line('  - '.str_replace(base_path(), '', (string) $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
<<<<<<< HEAD
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', (string) $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
=======
>>>>>>> 5842a556 (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
=======
                    $this->line('  - '.str_replace(base_path(), '', (string) $itemString));
>>>>>>> 8cf76e7 (.)
>>>>>>> 0ae90b17 (.)
<<<<<<< HEAD
>>>>>>> 8fd88dd43 (.)
=======
=======
                    $this->line('  - '.str_replace(base_path(), '', (string) $itemString));
>>>>>>> 28fc70fe (.)
>>>>>>> 851793957 (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', (string) $itemString));
>>>>>>> 551c768c4 (.)
                }
            }
        }
    }

    /**
     * Applica le ottimizzazioni.
     *
     * @param  array<string, mixed>  $issues
<<<<<<< HEAD
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
     * @param  array<string, mixed>  $issues
     * @param array<string, mixed> $issues
=======
>>>>>>> 551c768c4 (.)
     */
    private function applyOptimizations(array $issues, bool $verbose = false): void
    {
        $this->info('🔧 Applicazione ottimizzazioni...');

<<<<<<< HEAD
        


        



        



        



        



        


        


        



        



        



        



        

=======
>>>>>>> 551c768c4 (.)
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();

<<<<<<< HEAD
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
        

        
        

        

        
        

        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
        

        
        

        

        
        

        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
        

        
        

        

        
        

        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
        

        
        

        

        
        

        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
        

        
        

        
        
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();
        
        // Ottimizzazione 2: Database
        $this->optimizeDatabase();
        
        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
        
=======
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
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
>>>>>>> 551c768c4 (.)
        $process = new Process(['composer', 'dump-autoload', '--optimize']);
        $process->setWorkingDirectory(base_path());
        $process->run();
    }
}
