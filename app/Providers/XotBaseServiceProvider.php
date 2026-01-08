<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

<<<<<<< HEAD
use BladeUI\Icons\Factory as BladeIconsFactory;
use Exception;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use BladeUI\Icons\Factory as BladeIconsFactory;
use Exception;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Exception;
use Throwable;
use Modules\Xot\Actions\File\GetComponentsAction;
use BladeUI\Icons\Factory as BladeIconsFactory;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> b7afadf9 (.)
use BladeUI\Icons\Exceptions\CannotRegisterIconSet;
=======
>>>>>>> a6ef6dc7 (.)
use BladeUI\Icons\Factory as BladeIconsFactory;
use Exception;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Modules\Xot\Actions\File\GetComponentsAction;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
use Throwable;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Webmozart\Assert\Assert;

/**
 * Class XotBaseServiceProvider.
 */
abstract class XotBaseServiceProvider extends ServiceProvider
{
    use PathNamespace;

    public string $name = '';

    public string $nameLower = '';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    protected string $module_base_ns;

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->registerLivewireComponents();
        $this->registerBladeComponents();
        $this->registerCommands();
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->nameLower = Str::lower($this->name);
        $this->module_ns = collect(explode('\\', $this->module_ns))->slice(0, -1)->implode('\\');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->registerBladeIcons();
    }

    public function registerBladeIcons(): void
    {
        if ($this->name === '') {
<<<<<<< HEAD
            throw new Exception('name is empty on ['.static::class.']');
        }

        $this->callAfterResolving(BladeIconsFactory::class, function (BladeIconsFactory $factory): void {
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
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> a6ef6dc7 (.)
        }

        $this->callAfterResolving(BladeIconsFactory::class, function (BladeIconsFactory $factory): void {
            $assetsPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'assets');
            $svgPath = $assetsPath.'/../svg';
=======
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
            throw new Exception('name is empty on [' . static::class . ']');
        }

        $this->callAfterResolving(BladeIconsFactory::class, function (BladeIconsFactory $factory) {
            $assetsPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'assets');
            $svgPath = $assetsPath . '/../svg';
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
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $svgPath = $assetsPath . '/../svg';
=======
            $svgPath = $assetsPath.'/../svg';
>>>>>>> a12f125f4a (.)
=======
            $svgPath = $assetsPath . '/../svg';
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            $svgPath = $assetsPath.'/../svg';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $svgPath = $assetsPath . '/../svg';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
>>>>>>> 285375c74 (.)
            try {
<<<<<<< HEAD
                $assetsPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'assets');
                $svgPath = $assetsPath.'/../svg';
                if (File::exists($svgPath)) {
                    $factory->add($this->nameLower, ['path' => $svgPath, 'prefix' => $this->nameLower]);
                }
            } catch (Throwable $e) {
                // Ignore - assets opzionali, modulo può funzionare senza
=======
                $factory->add($this->nameLower, ['path' => $svgPath, 'prefix' => $this->nameLower]);
            } catch (\Throwable $e) {
                // Ignore missing SVG path
>>>>>>> 8b18e4bff (.)
            }
        });

        // $svgPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'svg');
        /*
         * Assert::string($relativePath = config('modules.paths.generator.assets.path'));
         *
         * try {
         * $svgPath = module_path($this->name, $relativePath.'/../svg');
         * if (! is_string($svgPath)) {
         * throw new \Exception('Invalid SVG path');
         * }
         * $resolvedPath = $svgPath;
         * $svgPath = $resolvedPath;
         * } catch (\Error $e) {
         * $svgPath = base_path('Modules/'.$this->name.'/'.$relativePath.'/../svg');
         * if (! is_string($svgPath)) {
         * throw new \Exception('Invalid fallback SVG path');
         * }
         * }
         *
         * $basePath = base_path(DIRECTORY_SEPARATOR);
         * $svgPath = str_replace($basePath, '', $svgPath);
         *
         * Config::set('blade-icons.sets.'.$this->nameLower.'.path', $svgPath);
         * Config::set('blade-icons.sets.'.$this->nameLower.'.prefix', $this->nameLower);
         */
    }

    /**
     * Register views.
     */
    public function registerViews(): void
    {
        if ($this->name === '') {
<<<<<<< HEAD
            throw new Exception('name is empty on ['.static::class.']');
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
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 3fbbf1f5 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        }

        $viewPath = module_path($this->name, 'resources/views');
        // if (! is_string($viewPath)) {
        //    throw new \Exception('Invalid view path');
        // }

        $this->loadViewsFrom($viewPath, $this->nameLower);
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * Restituisce il path della cartella lang del modulo, con fallback robusto.
     */
    protected function getLangPath(): string
    {
        try {
            return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'lang');
<<<<<<< HEAD
        } catch (Throwable $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            return base_path('Modules/' . $this->name . '/lang');
=======
=======
=======
        } catch (\Throwable $e) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
            return base_path('Modules/'.$this->name.'/lang');
>>>>>>> 53d6a6ba (.)
        }
    }

    /**
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 285375c74 (.)
     * Registra le traduzioni del modulo.
     *
     * @throws \Exception
     */
    public function registerTranslations(): void
    {
        if ($this->name === '') {
<<<<<<< HEAD
            throw new Exception('name is empty on ['.static::class.']');
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
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 3fbbf1f5 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        }

        $langPath = $this->getLangPath();
        $this->loadTranslationsFrom($langPath, $this->nameLower);
        $this->loadJsonTranslationsFrom($langPath);
    }

    /**
     * Register an additional directory of factories.
     */
    public function registerFactories(): void
    {
        if (! app()->environment('production')) {
            // app(Factory::class)->load($this->module_dir.'/../Database/factories');
        }
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        try {
            $configPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'config');

            $files = File::glob($configPath.'/*.php');

            foreach ($files as $file) {
                Assert::string($file);
                $content = File::getRequire($file);
                $info = pathinfo($file);
<<<<<<< HEAD
=======
                Assert::isArray($info);
>>>>>>> a6ef6dc7 (.)
                $key = $this->nameLower.'::'.$info['filename'];
                Config::set($key, $content);
            }
        } catch (\Exception $e) {
            // Ignore missing configuration
            return;
        }
    }

>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
    public function registerBladeComponents(): void
    {
        $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        try {
            Blade::anonymousComponentPath($componentViewPath);
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (Exception|CannotRegisterIconSet $e) {
>>>>>>> 53d6a6ba (.)
=======
        } catch (Exception|CannotRegisterIconSet $e) {
=======
        } catch (\Exception $e) {
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
            // Ignore missing component view path
            dddx([
                'name' => $this->name,
                'componentViewPath' => $componentViewPath,
                'e' => $e->getMessage(),
            ]);
        }

        $componentClassPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-class');

        $namespace = $this->module_ns.'\View\Components';
        Blade::componentNamespace($namespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)->execute($componentClassPath, $this->module_ns);
    }

    /**
     * Register Livewire components.
     */
    public function registerLivewireComponents(): void
    {
        $prefix = '';
        app(RegisterLivewireComponentsAction::class)
            ->execute($this->module_dir.'/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
    }

    public function registerCommands(): void
    {
        $prefix = '';

        $comps = app(GetComponentsAction::class)
            ->execute(
                $this->module_dir.'/../Console/Commands',
                'Modules\\'.$this->name.'\\Console\\Commands',
                $prefix,
            );
        if ($comps->count() === 0) {
            return;
        }
        $commands = $comps->toArray();
        /** @var array<int, array{ns: string}> $commands */
        $commands = array_map(static function (mixed $item): string {
            Assert::isArray($item);
            Assert::keyExists($item, 'ns');
            Assert::string($item['ns'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));

            return $item['ns'];
        }, $commands);
        $this->commands($commands);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [];
    }

    /**
     * Restituisce il path della cartella lang del modulo, con fallback robusto.
     */
    protected function getLangPath(): string
    {
        try {
            return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'lang');
        } catch (Throwable $e) {
            return base_path('Modules/'.$this->name.'/lang');
        }
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        try {
            $configPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'config');

            $files = File::glob($configPath.'/*.php');

            foreach ($files as $file) {
                if (! is_string($file)) {
                    continue;
                }
                $content = File::getRequire($file);
                $info = pathinfo($file);
                $key = $this->nameLower.'::'.$info['filename'];
                Config::set($key, $content);
            }
        } catch (Exception $e) {
            // Ignore missing configuration
            return;
        }
    }
}
