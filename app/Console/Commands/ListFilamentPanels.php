<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Nwidart\Modules\Facades\Module;

use function Safe\scandir;

class ListFilamentPanels extends Command
{
    protected $signature = 'filament:list-panels';

    protected $description = 'List all Filament panels in modules';

    public function handle(): int
    {
        $modules = Module::all();

        /** @var Collection<string, \Nwidart\Modules\Module> $modules */
        foreach ($modules as $moduleName => $module) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
                continue;
            }

<<<<<<< HEAD
            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });
=======
            /** @var Collection<int, string> $providerFiles */
            $providerFiles = collect(scandir($providersPath));
            $providers = $providerFiles
                ->filter(fn (mixed $file): bool => str_ends_with((string) $file, 'ServiceProvider.php'));
>>>>>>> eeaa032 (.)

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
                    continue;
                }

<<<<<<< HEAD
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
=======
                $providerClass = "Modules\\{$moduleName}\\Providers\\".$provider;
>>>>>>> eeaa032 (.)
                if (! class_exists($providerClass)) {
                    continue;
                }

                $this->info('Found panel in '.$moduleName.': '.$provider);
            }
        }

        return Command::SUCCESS;
    }
}
