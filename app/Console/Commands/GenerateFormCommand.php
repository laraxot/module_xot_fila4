<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Filament\GenerateFormByFileAction;
=======
use Modules\Xot\Actions\Filament\GenerateFormByFileAction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
     */
=======
     *
     * @return void
     */
    
>>>>>>> 5a14301c (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
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
        Assert::string($module_name = $this->argument('module'), '[' . __LINE__ . '][' . class_basename($this) . ']');
        $module_path = Module::getModulePath($module_name);
        if (!Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path . 'Filament/Resources';

        $this->info($module_name); // = Progressioni
        $this->info($module_path); // = /var/www/html/ptvx/laravel/Modules/Progressioni/
>>>>>>> 5a14301c (.)
        $this->info($filament_resources_path);

        $files = File::files($filament_resources_path);
        foreach ($files as $file) {
            app(GenerateFormByFileAction::class)->execute($file);
        }
    }
}
