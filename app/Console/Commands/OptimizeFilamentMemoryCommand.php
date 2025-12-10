<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Exception;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

=======
use Symfony\Component\Process\Process;
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
use Symfony\Component\Process\Process;
>>>>>>> 0e51323 (.)
=======
use Symfony\Component\Process\Process;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
use Symfony\Component\Process\Process;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
use Symfony\Component\Process\Process;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
use Symfony\Component\Process\Process;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
use Symfony\Component\Process\Process;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
use Symfony\Component\Process\Process;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
use Symfony\Component\Process\Process;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
use Symfony\Component\Process\Process;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
use Symfony\Component\Process\Process;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
use Symfony\Component\Process\Process;

>>>>>>> ca9324a4 (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> ca9324a4 (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> ca9324a4 (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> ca9324a4 (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> ca9324a4 (.)
=======
use Symfony\Component\Process\Process;

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->info('=====================================');
>>>>>>> 5a14301c (.)
=======
        $this->info('=====================================');
>>>>>>> 5a14301c (.)
=======
        $this->info('=====================================');
>>>>>>> 5a14301c (.)
=======
        $this->info('=====================================');
>>>>>>> 5a14301c (.)
=======
        $this->info('=====================================');
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
>>>>>>> 5a14301c (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
>>>>>>> 5a14301c (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
>>>>>>> 5a14301c (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);
>>>>>>> 5a14301c (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

        if ($analyzeOnly) {
            $this->displayAnalysisResults($issues);

>>>>>>> 43d67f21 (.)
            return self::SUCCESS;
        }

        // Applica le ottimizzazioni
        $this->applyOptimizations($issues, $verbose);

        $this->info('✅ Ottimizzazione completata!');
        $this->newLine();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
        
        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache', 
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

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        $caches = [
            'config:clear' => 'Config cache',
            'route:clear' => 'Route cache',
>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
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
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') ||
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
<<<<<<< HEAD
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') || 
>>>>>>> 5a14301c (.)
                        str_contains($withContent, 'permissions') ||
                        str_contains($withContent, 'teams') ||
                        str_contains($withContent, 'media')) {
                        $models[] = $file->getPathname();
<<<<<<< HEAD
=======
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> e59778ae (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> e59778ae (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> e59778ae (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Models/')) {
                $content = File::get($file->getPathname());

                if (preg_match('/protected\s+\$with\s*=\s*\[([^\]]+)\]/', $content, $matches)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
                    $withContent = $matches[1];
                    // Controlla se ha relazioni pesanti
                    if (str_contains($withContent, 'roles') || 
                        str_contains($withContent, 'permissions') ||
                        str_contains($withContent, 'teams') ||
                        str_contains($withContent, 'media')) {
                        $models[] = $file->getPathname();
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
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ca9324a4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
                    }
                }
            }
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

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
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
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
<<<<<<< HEAD
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
<<<<<<< HEAD
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
<<<<<<< HEAD
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
<<<<<<< HEAD
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Widgets/')) {
                $content = File::get($file->getPathname());

                // Cerca query senza limitazioni
<<<<<<< HEAD
                if (str_contains($content, '->get()') && 
                    !str_contains($content, '->limit(') &&
                    !str_contains($content, '->take(')) {
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->get()') &&
                    ! str_contains($content, '->limit(') &&
                    ! str_contains($content, '->take(')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
                    $widgets[] = $file->getPathname();
                }
            }
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

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());
                
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

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Resources/') && str_ends_with($file->getFilename(), 'Resource.php')) {
                $content = File::get($file->getPathname());

>>>>>>> 43d67f21 (.)
                // Cerca eager loading eccessivo
                if (str_contains($content, '->with(') || str_contains($content, '->load(')) {
                    $resources[] = $file->getPathname();
                }
            }
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

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
                if (str_contains($content, '->whereNull(') &&
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
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
<<<<<<< HEAD
                if (str_contains($content, '->whereNull(') && 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->whereNull(') &&
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (str_contains($content, '->whereNull(') && 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
<<<<<<< HEAD
                if (str_contains($content, '->whereNull(') && 
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->whereNull(') &&
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (str_contains($content, '->whereNull(') && 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
<<<<<<< HEAD
                if (str_contains($content, '->whereNull(') && 
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->whereNull(') &&
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (str_contains($content, '->whereNull(') && 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
<<<<<<< HEAD
                if (str_contains($content, '->whereNull(') && 
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->whereNull(') &&
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (str_contains($content, '->whereNull(') && 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && (str_contains($file->getPathname(), '/Resources/') || str_contains($file->getPathname(), '/Forms/'))) {
                $content = File::get($file->getPathname());

                // Cerca query di migrazione nei form
<<<<<<< HEAD
                if (str_contains($content, '->whereNull(') && 
>>>>>>> 5a14301c (.)
=======
                if (str_contains($content, '->whereNull(') &&
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
                    str_contains($content, '->update(') &&
                    str_contains($content, 'getFormSchema')) {
                    $forms[] = $file->getPathname();
                }
            }
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

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
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
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
<<<<<<< HEAD
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
<<<<<<< HEAD
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> 5a14301c (.)
=======
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
<<<<<<< HEAD
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> 5a14301c (.)
=======
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
<<<<<<< HEAD
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> 5a14301c (.)
=======
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getPathname(), '/Pages/List')) {
                $content = File::get($file->getPathname());

                // Cerca liste senza paginazione
<<<<<<< HEAD
                if (!str_contains($content, 'paginate') && !str_contains($content, 'simplePaginate')) {
>>>>>>> 5a14301c (.)
=======
                if (! str_contains($content, 'paginate') && ! str_contains($content, 'simplePaginate')) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
                    $resources[] = $file->getPathname();
                }
            }
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

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
        return $resources;
    }

    /**
     * Mostra i risultati dell'analisi.
     *
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 0e51323 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
     */
    private function displayAnalysisResults(array $issues): void
    {
        $this->info('📊 Risultati analisi:');
        $this->newLine();

        $totalIssues = 0;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
        
        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;
            
            $label = match($type) {
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

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======

        foreach ($issues as $type => $items) {
            $count = is_array($items) ? count($items) : 0;
            $totalIssues += $count;

            $label = match ($type) {
>>>>>>> 43d67f21 (.)
                'models_with_eager_loading' => 'Modelli con eager loading eccessivo',
                'heavy_widgets' => 'Widget pesanti',
                'unoptimized_resources' => 'Risorse non ottimizzate',
                'migration_code_in_forms' => 'Codice migrazione nei form',
                'missing_pagination' => 'Risorse senza paginazione',
                default => $type,
            };
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
            
>>>>>>> 0e51323 (.)
=======
            
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
            
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
            
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
            
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
            
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
            
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
            
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
            
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
            
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
            if ($count > 0) {
                $this->warn("⚠️  {$label}: {$count}");
            } else {
                $this->info("✅ {$label}: OK");
            }
        }

        $this->newLine();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 0e51323 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
                    $this->line('  - '.str_replace(base_path(), '', (string) $itemString));
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> 5a14301c (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> 0e51323 (.)
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 43d67f21 (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 5842a556 (.)
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> 5a14301c (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 43d67f21 (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 5842a556 (.)
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> 5a14301c (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 43d67f21 (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 5842a556 (.)
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> 5a14301c (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 43d67f21 (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 5842a556 (.)
=======
                    $this->line("  - " . str_replace(base_path(), '', $itemString));
>>>>>>> 5a14301c (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
                    $this->line('  - '.str_replace(base_path(), '', $itemString));
>>>>>>> 43d67f21 (.)
                }
            }
        }
    }

    /**
     * Applica le ottimizzazioni.
     *
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 0e51323 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
=======
     * @param  array<string, mixed>  $issues
=======
     * @param array<string, mixed> $issues
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 5842a556 (.)
=======
     * @param array<string, mixed> $issues
>>>>>>> 5a14301c (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
     * @param  array<string, mixed>  $issues
>>>>>>> 43d67f21 (.)
     */
    private function applyOptimizations(array $issues, bool $verbose = false): void
    {
        $this->info('🔧 Applicazione ottimizzazioni...');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======

>>>>>>> 43d67f21 (.)
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();

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
=======
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> ca9324a4 (.)
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
<<<<<<< HEAD
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
<<<<<<< HEAD
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
<<<<<<< HEAD
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
<<<<<<< HEAD
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        
=======

>>>>>>> ca9324a4 (.)
        // Ottimizzazione 1: Cache delle configurazioni
        $this->optimizeConfigurations();

        // Ottimizzazione 2: Database
        $this->optimizeDatabase();

        // Ottimizzazione 3: Autoloader
        $this->optimizeAutoloader();
<<<<<<< HEAD
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
        $this->info('✅ Ottimizzazioni applicate');
    }

    /**
     * Ottimizza le configurazioni.
     */
    private function optimizeConfigurations(): void
    {
        $this->line('  - Ottimizzazione configurazioni...');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
        
>>>>>>> 0e51323 (.)
=======
        
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
=======

=======
        
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======

>>>>>>> 5842a556 (.)
=======
        
>>>>>>> 5a14301c (.)
=======

>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======

>>>>>>> 43d67f21 (.)
        $process = new Process(['composer', 'dump-autoload', '--optimize']);
        $process->setWorkingDirectory(base_path());
        $process->run();
    }
}
