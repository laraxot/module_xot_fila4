<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GenerateTableColumnsByFileAction;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Actions\Filament\GenerateTableColumnsByFileAction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Nwidart\Modules\Facades\Module;
use Webmozart\Assert\Assert;

class GenerateTableColumnsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:generate-table-columns {module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'refresh table columns';

    /**
     * Create a new command instance.
<<<<<<< HEAD
<<<<<<< HEAD
     */
=======
=======
>>>>>>> 5a14301c (.)
     *
     * @return void
     */
<<<<<<< HEAD
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($module_name = $this->argument('module'), '['.__LINE__.']['.class_basename($this).']');
        $module_path = Module::getModulePath($module_name);
        if (! Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path.'Filament/Resources';

        $this->info($module_name);
        $this->info($module_path);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
        Assert::string($module_name = $this->argument('module'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $module_path = Module::getModulePath($module_name);
        if (!Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path . 'Filament/Resources';
=======
        Assert::string($module_name = $this->argument('module'), '['.__LINE__.']['.class_basename($this).']');
        $module_path = Module::getModulePath($module_name);
        if (! Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path.'Filament/Resources';
>>>>>>> f1d4085 (.)

        $this->info($module_name); // = Progressioni
        $this->info($module_path); // = /var/www/html/ptvx/laravel/Modules/Progressioni/
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $this->info($filament_resources_path);

        $files = File::files($filament_resources_path);
        foreach ($files as $file) {
            app(GenerateTableColumnsByFileAction::class)->execute($file);
        }
    }
}
