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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
<<<<<<< HEAD
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
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
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 218dfed3 (.)
>>>>>>> ed734516 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
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
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
                continue;
            }

            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
                continue;
            }

            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
                continue;
            }

            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
                continue;
            }

            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                continue;
            }

            $providers = collect(scandir($providersPath))
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
                    continue;
                }

                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
<<<<<<< HEAD
                    continue;
                }

                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
                    continue;
                }

                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
                    continue;
                }

                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
                continue;
            }

            $providers = collect(scandir($providersPath))
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                ->filter(fn(string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (!class_exists($providerClass)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
                ->filter(fn (string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
                ->filter(fn(string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (!class_exists($providerClass)) {
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                    continue;
                }

                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info('Found panel in '.$moduleName.': '.$provider);
                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info("Found panel in {$moduleName}: {$provider}");
                    continue;
                }

                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info('Found panel in '.$moduleName.': '.$provider);
                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info("Found panel in {$moduleName}: {$provider}");
                    continue;
                }

                $this->info("Found panel in {$moduleName}: {$provider}");
                    continue;
                }

                $this->info("Found panel in {$moduleName}: {$provider}");
                    continue;
                }

                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info('Found panel in '.$moduleName.': '.$provider);
                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info('Found panel in '.$moduleName.': '.$provider);
                $this->info("Found panel in {$moduleName}: {$provider}");
                $this->info("Found panel in {$moduleName}: {$provider}");
            }
        }

        return Command::SUCCESS;
    }
}
