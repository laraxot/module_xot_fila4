<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Nwidart\Modules\Facades\Module;

class GenerateFilamentResources extends Command
{
    protected $signature = 'filament:generate-resources {module : Il nome del modulo per cui generare le risorse}';

    protected $description = 'Generate Filament resources for all models';

    public function handle(): int
    {
        $moduleName = $this->argument('module');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // Assicuriamoci che $moduleName sia una stringa
        if (!is_string($moduleName)) {
            $this->error('Il nome del modulo deve essere una stringa.');
            return Command::FAILURE;
        }

        $module = Module::find($moduleName);

        if (!$module) {
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Assicuriamoci che $moduleName sia una stringa
        if (!is_string($moduleName)) {
            $this->error('Il nome del modulo deve essere una stringa.');
            return Command::FAILURE;
        }

        $module = Module::find($moduleName);

<<<<<<< HEAD
        if (! $module) {
>>>>>>> a12f125f4a (.)
=======
        if (!$module) {
>>>>>>> b93ef594b4 (.)
=======
        
        // Assicuriamoci che $moduleName sia una stringa
        if (!is_string($moduleName)) {
            $this->error("Il nome del modulo deve essere una stringa.");
            return Command::FAILURE;
        }
        
        $module = Module::find($moduleName);

        if (! $module) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $this->error("Il modulo '{$moduleName}' non esiste.");

            return Command::FAILURE;
        }

        $this->info("Generazione delle Filament Resources per il modulo: {$moduleName}");

<<<<<<< HEAD
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
=======
        $modelsPath = $module->getPath().'/app/Models';
        if (! File::isDirectory($modelsPath)) {
>>>>>>> a12f125f4a (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> b93ef594b4 (.)
=======
        $modelsPath = $module->getPath().'/app/Models';
        if (! File::isDirectory($modelsPath)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $this->error("Nessuna cartella 'Models' trovata nel modulo {$moduleName}.");

            return Command::FAILURE;
        }

        $models = File::files($modelsPath);
        foreach ($models as $model) {
            $modelName = $model->getFilenameWithoutExtension();

            // Assicuriamoci che $moduleName sia una stringa per strtolower
            $panelName = strtolower($moduleName);
<<<<<<< HEAD
            $panel = $panelName . '::admin';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $panel = $panelName . '::admin';
=======
            $panel = $panelName.'::admin';
>>>>>>> a12f125f4a (.)
=======
            $panel = $panelName . '::admin';
>>>>>>> b93ef594b4 (.)
=======
            $panel = $panelName.'::admin';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $params = [
                'name' => $modelName,
                '--panel' => $panel,
                '--model-namespace' => "Modules\\{$moduleName}\\Models",
                '--generate' => true,
                '--factory' => true,
                '--force' => true,
            ];
            try {
                Artisan::call('make:filament-resource', $params);
<<<<<<< HEAD
            } catch (Exception $e) {
=======
<<<<<<< HEAD
            } catch (Exception $e) {
=======
            } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $this->error($e->getMessage());
            }
            $this->info("Resource generata per il modello: {$modelName}");
        }

        $this->info('Tutte le resources sono state generate con successo!');

        return Command::SUCCESS;
    }
}
