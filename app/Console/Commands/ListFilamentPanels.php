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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
<<<<<<< HEAD
=======
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 5a14301c (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 3fbbf1f5 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 399f46d3 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
=======
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
>>>>>>> a12f125f4a (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> b93ef594b4 (.)
=======
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> ca9324a4 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 7131bd09 (.)
=======
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 9db27d12 (.)
=======
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
                continue;
            }

            /** @var Collection<int, string> $providerFiles */
            $providerFiles = collect(scandir($providersPath));
            $providers = $providerFiles
                ->filter(fn (mixed $file): bool => str_ends_with((string) $file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
                continue;
            }

<<<<<<< HEAD
            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
=======
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
>>>>>>> f1d4085 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 73eab74 (.)
                continue;
            }

<<<<<<< HEAD
            $providers = collect(scandir($providersPath))
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
                ->filter(fn(string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (!class_exists($providerClass)) {
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
=======
>>>>>>> 53d6a6ba (.)
            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
                    continue;
                }

                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
<<<<<<< HEAD
                if (! class_exists($providerClass)) {
=======
                if (!class_exists($providerClass)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->filter(fn (string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
                    continue;
                }

                $providerClass = "Modules\\{$moduleName}\\Providers\\".$provider;
                if (! class_exists($providerClass)) {
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
                    continue;
                }

<<<<<<< HEAD
<<<<<<< HEAD
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
                    continue;
                }

=======
>>>>>>> 53d6a6ba (.)
                $this->info("Found panel in {$moduleName}: {$provider}");
=======
                $this->info('Found panel in '.$moduleName.': '.$provider);
>>>>>>> b7afadf9 (.)
            }
        }

        return Command::SUCCESS;
    }
}
