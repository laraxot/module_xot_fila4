<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GenerateTableColumnsByFileAction;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Xot\Actions\Filament\GenerateTableColumnsByFileAction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GenerateTableColumnsByFileAction;
use Modules\Xot\Actions\Filament\GenerateTableColumnsByFileAction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
     */
=======
     */
<<<<<<< HEAD
     *
     * @return void
     */
    
    
     */
     *
     * @return void
     */
    
    
    public function __construct()
    {
        parent::__construct();
    }
    
    
    
    
    
    
    
    
    
    
    
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Assert::string($module_name = $this->argument('module'), '['.__LINE__.']['.class_basename($this).']');
        $module_path = Module::getModulePath($module_name);
        if (! Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path.'Filament/Resources';

        $this->info($module_name);
        $this->info($module_path);
<<<<<<< HEAD
=======
<<<<<<< HEAD
        Assert::string($module_name = $this->argument('module'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $module_path = Module::getModulePath($module_name);
        if (!Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path . 'Filament/Resources';

        $this->info($module_name); // = Progressioni
        $this->info($module_path); // = /var/www/html/ptvx/laravel/Modules/Progressioni/
        $module_path = Module::getModulePath($module_name);
        if (!Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path.'Filament/Resources';
        $filament_resources_path = $module_path . 'Filament/Resources';
        Assert::string($module_name = $this->argument('module'), '['.__LINE__.']['.class_basename($this).']');
        $module_path = Module::getModulePath($module_name);
        if (! Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path.'Filament/Resources';

        $this->info($module_name); // = Progressioni
        $this->info($module_path); // = /var/www/html/ptvx/laravel/Modules/Progressioni/
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        $this->info($filament_resources_path);

        $files = File::files($filament_resources_path);
        foreach ($files as $file) {
            app(GenerateTableColumnsByFileAction::class)->execute($file);
<<<<<<< HEAD
=======
            app(GenerateTableColumnsByFileAction::class)->execute($file);
            app(GenerateTableColumnsByFileAction::class)->execute($file);
>>>>>>> 38b70c7ba (.)
        }
    }
}
