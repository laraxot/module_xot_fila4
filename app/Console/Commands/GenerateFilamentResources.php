<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Exception;
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

        // Assicuriamoci che $moduleName sia una stringa
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($moduleName)) {
            $this->error('Il nome del modulo deve essere una stringa.');

=======
        if (!is_string($moduleName)) {
            $this->error('Il nome del modulo deve essere una stringa.');
>>>>>>> 5a14301c (.)
            return Command::FAILURE;
        }

        $module = Module::find($moduleName);

<<<<<<< HEAD
<<<<<<< HEAD
        if (! $module) {
=======
        if (!$module) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if (!$module) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Assicuriamoci che $moduleName sia una stringa
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        if (!is_string($moduleName)) {
            $this->error('Il nome del modulo deve essere una stringa.');
            return Command::FAILURE;
        }

        $module = Module::find($moduleName);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $module) {
>>>>>>> a12f125f4a (.)
=======
        if (!$module) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        
        // Assicuriamoci che $moduleName sia una stringa
        if (!is_string($moduleName)) {
            $this->error("Il nome del modulo deve essere una stringa.");
            return Command::FAILURE;
        }
        
        $module = Module::find($moduleName);

        if (! $module) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!$module) {
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!$module) {
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!$module) {
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!$module) {
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!$module) {
>>>>>>> 5a14301c (.)
            $this->error("Il modulo '{$moduleName}' non esiste.");

            return Command::FAILURE;
        }

        $this->info("Generazione delle Filament Resources per il modulo: {$moduleName}");

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $modelsPath = $module->getPath().'/app/Models';
        if (! File::isDirectory($modelsPath)) {
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 5a14301c (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 3fbbf1f5 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ca9324a4 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ed734516 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ed734516 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ed734516 (.)
=======
        $modelsPath = $module->getPath().'/app/Models';
        if (! File::isDirectory($modelsPath)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ca9324a4 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ca9324a4 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ca9324a4 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> ca9324a4 (.)
=======
        $modelsPath = $module->getPath() . '/app/Models';
        if (!File::isDirectory($modelsPath)) {
>>>>>>> 5a14301c (.)
            $this->error("Nessuna cartella 'Models' trovata nel modulo {$moduleName}.");

            return Command::FAILURE;
        }

        $models = File::files($modelsPath);
        foreach ($models as $model) {
            $modelName = $model->getFilenameWithoutExtension();

            // Assicuriamoci che $moduleName sia una stringa per strtolower
            $panelName = strtolower($moduleName);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $panel = $panelName.'::admin';
            $params = [
                $modelName, // Resource name as positional argument
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
            $panel = $panelName . '::admin';
            $params = [
                'name' => $modelName,
>>>>>>> 5a14301c (.)
=======
            $panel = $panelName . '::admin';
            $params = [
                'name' => $modelName,
>>>>>>> 5a14301c (.)
=======
            $panel = $panelName . '::admin';
            $params = [
                'name' => $modelName,
>>>>>>> 5a14301c (.)
=======
            $panel = $panelName . '::admin';
            $params = [
                'name' => $modelName,
>>>>>>> 5a14301c (.)
=======
            $panel = $panelName . '::admin';
            $params = [
                'name' => $modelName,
>>>>>>> 5a14301c (.)
=======
            $panel = $panelName . '::admin';
            $params = [
                'name' => $modelName,
>>>>>>> 5a14301c (.)
                '--panel' => $panel,
                '--model-namespace' => "Modules\\{$moduleName}\\Models",
                '--generate' => true,
                '--factory' => true,
                '--force' => true,
            ];
            try {
                Artisan::call('make:filament-resource', $params);
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $this->info("Resource generata per il modello: {$modelName}");
        }

        $this->info('Tutte le resources sono state generate con successo!');

        return Command::SUCCESS;
    }
}
