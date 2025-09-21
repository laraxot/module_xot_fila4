<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Modules\Xot\Actions\Filament\GenerateFormByFileAction;
=======
<<<<<<< HEAD
use Modules\Xot\Actions\Filament\GenerateFormByFileAction;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use Webmozart\Assert\Assert;

class GenerateFormCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:generate-form {module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fill form with inputs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> origin/develop
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        Assert::string($module_name = $this->argument('module'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $module_path = Module::getModulePath($module_name);
        if (!Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path . 'Filament/Resources';
<<<<<<< HEAD
=======
=======
        Assert::string($module_name = $this->argument('module'), '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::string($module_name = $this->argument('module'), '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
        $module_path = Module::getModulePath($module_name);
        if (!Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
<<<<<<< HEAD
        $filament_resources_path = $module_path.'Filament/Resources';
>>>>>>> a12f125f4a (.)
=======
        $filament_resources_path = $module_path . 'Filament/Resources';
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($module_name = $this->argument('module'), '['.__LINE__.']['.class_basename($this).']');
        $module_path = Module::getModulePath($module_name);
        if (! Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path.'Filament/Resources';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        $this->info($module_name); // = Progressioni
        $this->info($module_path); // = /var/www/html/ptvx/laravel/Modules/Progressioni/
        $this->info($filament_resources_path);

        $files = File::files($filament_resources_path);
        foreach ($files as $file) {
<<<<<<< HEAD
            app(GenerateFormByFileAction::class)->execute($file);
=======
<<<<<<< HEAD
            app(GenerateFormByFileAction::class)->execute($file);
=======
            app(\Modules\Xot\Actions\Filament\GenerateFormByFileAction::class)->execute($file);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
    }
}
