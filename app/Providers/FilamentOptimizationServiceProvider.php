<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Http\Middleware\FilamentMemoryMonitorMiddleware;
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Module;
use PDO;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
use PDO;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
=======
use Nwidart\Modules\Module;
use PDO;
use Webmozart\Assert\Assert;
>>>>>>> 50c0e1043 (.)

use function Safe\preg_match;

/**
 * Service Provider per ottimizzazioni Filament.
 * SuperMucca Optimization Provider 🐄.
 */
class FilamentOptimizationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Registra il config
        $this->mergeConfigFrom(
            base_path('config/filament_optimization.php'),
            'filament_optimization'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Applica ottimizzazioni solo se abilitato
        if (config('filament_optimization.memory.enabled', true)) {
            $this->applyMemoryOptimizations();
        }

        // Configura query logging per performance monitoring
        if (config('filament_optimization.monitoring.log_slow_queries', true)) {
            $this->configureQueryLogging();
        }

        // Registra middleware di monitoraggio
        if (config('filament_optimization.monitoring.memory_profiling', false)) {
            $this->registerMemoryMonitoring();
        }

        // Ottimizzazioni per l'ambiente di produzione
        if (app()->environment('production')) {
            $this->applyProductionOptimizations();
        }
    }

    /**
     * Applica ottimizzazioni per la memoria.
     */
    private function applyMemoryOptimizations(): void
    {
        // Ottimizza le query di default
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 50c0e1043 (.)
        DB::listen(function (QueryExecuted $query): void {
            // Log query che superano la soglia di tempo
            $threshold = config('filament_optimization.monitoring.slow_query_threshold', 1000);
            Assert::numeric($threshold);
            /** @var int|float $threshold */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        DB::listen(function ($query): void {
            // PHPStan: $query è \Illuminate\Database\Events\QueryExecuted
            if (! is_object($query) || ! isset($query->time)) {
                return;
            }

=======
        DB::listen(function ($query) {
>>>>>>> 53d6a6ba (.)
=======
        DB::listen(function ($query): void {
>>>>>>> b7afadf9 (.)
            // Log query che superano la soglia di tempo
            $threshold = config('filament_optimization.monitoring.slow_query_threshold', 1000);

<<<<<<< HEAD
            if ($query->time > $threshold) {
=======
            if (! is_object($query)) {
                return;
            }

            $time = property_exists($query, 'time') ? $query->time : 0;
            $timeValue = is_numeric($time) ? (float) $time : 0.0;

            if ($timeValue > $threshold) {
                $sql = property_exists($query, 'sql') ? (string) $query->sql : 'N/A';
                $bindings = property_exists($query, 'bindings') && is_array($query->bindings) ? $query->bindings : [];
                $connection = property_exists($query, 'connectionName') ? (string) $query->connectionName : 'unknown';
>>>>>>> a6ef6dc7 (.)
                Log::warning('Slow query detected', [
<<<<<<< HEAD
<<<<<<< HEAD
                    'sql' => $query->sql ?? '',
                    'bindings' => $query->bindings ?? [],
                    'time' => $query->time,
                    'connection' => $query->connectionName ?? '',
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 50c0e1043 (.)
            
>>>>>>> 8ab8fd81a (.)
            if ($query->time > $threshold) {
                Log::warning('Slow query detected', [
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
                    'sql' => $query->sql,
                    'bindings' => $query->bindings,
                    'time' => $query->time,
<<<<<<< HEAD
                    'connection' => $query->connection->getName(),
=======
                    'connection' => $query->connectionName,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
                    'sql' => $sql,
                    'bindings' => $bindings,
                    'time' => $timeValue,
                    'connection' => $connection,
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
=======
                    'sql' => $query->sql,
                    'bindings' => $query->bindings,
                    'time' => $query->time,
                    'connection' => $query->connection->getName(),
>>>>>>> 50c0e1043 (.)
                ]);
            }
        });

        // Limita il numero di query per richiesta in development
        if (app()->environment('local', 'development')) {
            $this->limitQueriesInDevelopment();
        }
    }

    /**
     * Configura il logging delle query.
     */
    private function configureQueryLogging(): void
    {
        // Abilita query logging solo per richieste Filament admin
        if ($this->isFilamentAdminRequest()) {
            DB::enableQueryLog();
<<<<<<< HEAD
<<<<<<< HEAD

            // Log delle query alla fine della richiesta
<<<<<<< HEAD
<<<<<<< HEAD
            app()->terminating(function (): void {
=======
            app()->terminating(function () {
=======
            app()->terminating(function (): void {
>>>>>>> 8b18e4bff (.)
                $queries = DB::getQueryLog();
                $totalQueries = count($queries);
                $totalTime = array_sum(array_column($queries, 'time'));

>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 50c0e1043 (.)
            
            // Log delle query alla fine della richiesta
            app()->terminating(function () {
>>>>>>> 8ab8fd81a (.)
                $queries = DB::getQueryLog();
                Assert::isArray($queries);
                /** @var array<int, array<string, mixed>> $queries */
                $totalQueries = count($queries);
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> 8ab8fd81a (.)
=======
                
>>>>>>> 50c0e1043 (.)
                $times = [];
                foreach ($queries as $query) {
                    Assert::isArray($query);
                    if (isset($query['time']) && \is_numeric($query['time'])) {
                        $times[] = (float) $query['time'];
                    }
                }
                $totalTime = array_sum($times);
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> 8ab8fd81a (.)
=======
                
>>>>>>> 50c0e1043 (.)
                if ($totalQueries > 50 || $totalTime > 1000) {
                    Log::info('High query count or time detected', [
                        'total_queries' => $totalQueries,
                        'total_time' => $totalTime,
                        'url' => request()->fullUrl(),
                    ]);
                }
            });
        }
    }

    /**
     * Registra il middleware di monitoraggio memoria.
     */
    private function registerMemoryMonitoring(): void
    {
        // Il middleware verrà registrato nel kernel HTTP
        app('router')->pushMiddlewareToGroup('web', FilamentMemoryMonitorMiddleware::class);
    }

    /**
     * Applica ottimizzazioni per l'ambiente di produzione.
     */
    private function applyProductionOptimizations(): void
    {
        // Disabilita query logging in produzione per performance
        DB::disableQueryLog();
<<<<<<< HEAD
<<<<<<< HEAD

        // Ottimizza la configurazione di Eloquent
        $this->optimizeEloquentConfiguration();

=======
=======
>>>>>>> 50c0e1043 (.)
        
        // Ottimizza la configurazione di Eloquent
        $this->optimizeEloquentConfiguration();
        
<<<<<<< HEAD
>>>>>>> 8ab8fd81a (.)
=======
>>>>>>> 50c0e1043 (.)
        // Configura caching aggressivo
        $this->configureAggressiveCaching();
    }

    /**
     * Ottimizza la configurazione di Eloquent.
     */
    private function optimizeEloquentConfiguration(): void
    {
        // Disabilita eventi Eloquent non necessari per performance
        if (config('filament_optimization.query.disable_events', false)) {
            // Questo può essere fatto per modelli specifici se necessario
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8ab8fd81a (.)
=======
        
>>>>>>> 50c0e1043 (.)
        // Configura connection pooling se disponibile
        $currentOptions = config('database.connections.mysql.options');
        if ($currentOptions) {
            $optionsArray = is_array($currentOptions) ? $currentOptions : [];
            config([
                'database.connections.mysql.options' => array_merge(
                    $optionsArray,
                    [
                        \PDO::ATTR_PERSISTENT => true,
                        \PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                    ]
                ),
            ]);
        }
    }

    /**
     * Configura caching aggressivo.
     */
    private function configureAggressiveCaching(): void
    {
        // Cache delle configurazioni
        if (config('filament_optimization.cache.module_configs', true)) {
            // Implementa caching per configurazioni moduli
            $this->cacheModuleConfigurations();
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8ab8fd81a (.)
=======
        
>>>>>>> 50c0e1043 (.)
        // Cache delle navigation items
        if (config('filament_optimization.cache.navigation', true)) {
            // Già implementato in GetModulesNavigationItems
        }
    }

    /**
     * Cache delle configurazioni dei moduli.
     */
    private function cacheModuleConfigurations(): void
    {
        // Implementa caching per le configurazioni dei moduli
        // Questo riduce l'I/O del filesystem
        app()->singleton('module.configs', function () {
            return cache()->remember('xot:module:configs', now()->addHours(1), function () {
                // Carica tutte le configurazioni dei moduli
                $configs = [];
                $modules = app('modules')->all();
<<<<<<< HEAD
<<<<<<< HEAD

                foreach ($modules as $module) {
<<<<<<< HEAD
<<<<<<< HEAD
                    Assert::isInstanceOf($module, Module::class);
=======
=======
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
                    // PHPStan: $module è \Nwidart\Modules\Module
                    if (! is_object($module) || ! method_exists($module, 'getPath') || ! method_exists($module, 'getName')) {
                        continue;
                    }

>>>>>>> 285375c74 (.)
                    $modulePath = $module->getPath();
                    $configPath = $modulePath.'/Config/config.php';
=======
                
                foreach ($modules as $module) {
                    Assert::isInstanceOf($module, Module::class);
                    $modulePath = $module->getPath();
                    $configPath = $modulePath . '/Config/config.php';
>>>>>>> 8ab8fd81a (.)
                    if (file_exists($configPath)) {
                        $moduleName = $module->getName();
<<<<<<< HEAD
                        $configs[$moduleName] = require $configPath;
=======
                        if (is_string($moduleName)) {
                            $configs[$moduleName] = require $configPath;
                        }
=======
=======
>>>>>>> b7afadf9 (.)
                    $configPath = $module->getPath().'/Config/config.php';
=======
                    if (! is_object($module)) {
                        continue;
                    }

                    if (! method_exists($module, 'getPath') || ! method_exists($module, 'getName')) {
                        continue;
                    }

                    $modulePath = $module->getPath();
                    $moduleName = $module->getName();

                    if (! is_string($modulePath) || ! is_string($moduleName)) {
                        continue;
                    }

                    $configPath = $modulePath.'/Config/config.php';
>>>>>>> a6ef6dc7 (.)
                    if (file_exists($configPath)) {
<<<<<<< HEAD
                        $configs[$module->getName()] = require $configPath;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
                    }
                }
<<<<<<< HEAD

=======
                
<<<<<<< HEAD
>>>>>>> 8ab8fd81a (.)
=======
                foreach ($modules as $module) {
                    $configPath = $module->getPath() . '/Config/config.php';
                    if (file_exists($configPath)) {
                        $configs[$module->getName()] = require $configPath;
=======
=======
                
                foreach ($modules as $module) {
                    Assert::isInstanceOf($module, Module::class);
                    $modulePath = $module->getPath();
                    $configPath = $modulePath . '/Config/config.php';
                    if (file_exists($configPath)) {
                        $moduleName = $module->getName();
>>>>>>> 50c0e1043 (.)
                        $configs[$moduleName] = require $configPath;
                    }
                }
                
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 8b18e4bff (.)
=======
>>>>>>> 50c0e1043 (.)
                return $configs;
            });
        });
    }

    /**
     * Limita il numero di query in development.
     */
    private function limitQueriesInDevelopment(): void
    {
        $maxQueries = config('filament_optimization.development.max_queries_per_request', 100);
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        app()->terminating(function () use ($maxQueries) {
=======
        app()->terminating(function () use ($maxQueries): void {
>>>>>>> a6ef6dc7 (.)
            $queries = DB::getQueryLog();
            $totalQueries = count($queries);

=======
=======
>>>>>>> 50c0e1043 (.)
        
        app()->terminating(function () use ($maxQueries) {
            $queries = DB::getQueryLog();
            $totalQueries = count($queries);
            
<<<<<<< HEAD
>>>>>>> 8ab8fd81a (.)
=======
>>>>>>> 50c0e1043 (.)
            if ($totalQueries > $maxQueries) {
                Log::warning("High query count detected: {$totalQueries} queries", [
                    'url' => request()->fullUrl(),
                    'queries' => array_slice($queries, 0, 10), // Solo le prime 10 per il log
                ]);
            }
        });
    }

    /**
     * Determina se la richiesta corrente è per un pannello admin Filament.
     */
    private function isFilamentAdminRequest(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! app()->runningInConsole() && request()) {
            $path = request()->path();

<<<<<<< HEAD
            return str_contains($path, '/admin') ||
                   str_ends_with($path, '/admin') ||
<<<<<<< HEAD
                   preg_match('/\/(user|techplanner|cms|geo|notify|tenant)\/admin/', $path);
=======
<<<<<<< HEAD
                   preg_match('/\/(user|<nome progetto>|cms|geo|notify|tenant)\/admin/', $path);
=======
                   preg_match('/\/(user|techplanner|cms|geo|notify|tenant)\/admin/', $path);
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
            return str_contains($path, '/admin')
                   || str_ends_with($path, '/admin')
                   || preg_match('/\/(user|<nome progetto>|cms|geo|notify|tenant)\/admin/', $path);
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        }

=======
=======
>>>>>>> 50c0e1043 (.)
        if (!app()->runningInConsole() && request()) {
            $path = request()->path();
            return str_contains($path, '/admin') || 
                   str_ends_with($path, '/admin') ||
                   preg_match('/\/(user|techplanner|cms|geo|notify|tenant)\/admin/', $path);
        }
        
<<<<<<< HEAD
>>>>>>> 8ab8fd81a (.)
=======
>>>>>>> 50c0e1043 (.)
        return false;
    }
}
