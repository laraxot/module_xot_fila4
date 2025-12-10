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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
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
>>>>>>> ed734516 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
                continue;
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var Collection<int, string> $providerFiles */
            $providerFiles = collect(scandir($providersPath));
            $providers = $providerFiles
                ->filter(fn (mixed $file): bool => str_ends_with((string) $file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
            $providersPath = $module->getPath().'/Providers';
            if (! is_dir($providersPath)) {
>>>>>>> 71586de2 (.)
                continue;
            }

<<<<<<< HEAD
            $providers = collect(scandir($providersPath))
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
                continue;
            }

=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 249a0067 (.)
            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
            $providersPath = $module->getPath() . '/Providers';
            if (!is_dir($providersPath)) {
                continue;
            }

=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 249a0067 (.)
            $providers = collect(scandir($providersPath))
                ->filter(function ($file): bool {
                    return is_string($file) && str_ends_with($file, 'ServiceProvider.php');
                });

            foreach ($providers as $provider) {
                if (! is_string($provider)) {
                    continue;
                }

<<<<<<< HEAD
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
                    continue;
                }

<<<<<<< HEAD
=======
>>>>>>> 249a0067 (.)
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
                    continue;
                }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
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
>>>>>>> 7131bd09 (.)
=======
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
>>>>>>> 21348520 (.)
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

            $providers = collect(scandir($providersPath))
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
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
                ->filter(fn(string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (!class_exists($providerClass)) {
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
                ->filter(fn (string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (! class_exists($providerClass)) {
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
                ->filter(fn(string $file): bool => str_ends_with($file, 'ServiceProvider.php'));

            foreach ($providers as $provider) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$provider}";
                if (!class_exists($providerClass)) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
                    continue;
                }

=======
>>>>>>> 53d6a6ba (.)
                $this->info("Found panel in {$moduleName}: {$provider}");
=======
                $this->info('Found panel in '.$moduleName.': '.$provider);
>>>>>>> b7afadf9 (.)
=======
                $this->info("Found panel in {$moduleName}: {$provider}");
>>>>>>> 71586de2 (.)
=======
                $this->info("Found panel in {$moduleName}: {$provider}");
>>>>>>> 249a0067 (.)
=======
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
                    continue;
                }

<<<<<<< HEAD
                $this->info("Found panel in {$moduleName}: {$provider}");
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                    continue;
                }

                $this->info("Found panel in {$moduleName}: {$provider}");
<<<<<<< HEAD
>>>>>>> 53d6a6ba (.)
=======
                $this->info('Found panel in '.$moduleName.': '.$provider);
>>>>>>> b7afadf9 (.)
=======
                $this->info("Found panel in {$moduleName}: {$provider}");
>>>>>>> 71586de2 (.)
=======
                $this->info("Found panel in {$moduleName}: {$provider}");
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
            }
        }

        return Command::SUCCESS;
    }
}
