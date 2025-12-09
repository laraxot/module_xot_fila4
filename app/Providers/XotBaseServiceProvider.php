<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

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
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\File\GetComponentsAction;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
use Throwable;
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
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
>>>>>>> 5a14301c (.)
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
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 5a14301c (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 3fbbf1f5 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 399f46d3 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 399f46d3 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
=======
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
>>>>>>> a12f125f4a (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> b93ef594b4 (.)
=======
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> ca9324a4 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
=======
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> ca9324a4 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 5a14301c (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
=======
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> ca9324a4 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 5a14301c (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
=======
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
>>>>>>> ca9324a4 (.)
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
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 5a14301c (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 3fbbf1f5 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 399f46d3 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 399f46d3 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 399f46d3 (.)
=======
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
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
>>>>>>> a12f125f4a (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> b93ef594b4 (.)
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> ca9324a4 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> ed734516 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> ed734516 (.)
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
>>>>>>> f1d4085 (.)
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
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> ca9324a4 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> ca9324a4 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> ca9324a4 (.)
        $this->registerBladeIcons();
    }

    public function registerBladeIcons(): void
    {
        if ($this->name === '') {
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
            throw new Exception('name is empty on ['.static::class.']');
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
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
=======
            $svgPath = $assetsPath.'/../svg';
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> 5a14301c (.)
=======
=======
            $svgPath = $assetsPath.'/../svg';
>>>>>>> f1d4085 (.)
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
            try {
                $factory->add($this->nameLower, ['path' => $svgPath, 'prefix' => $this->nameLower]);
            } catch (Throwable $e) {
                // Ignore missing SVG path
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
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
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
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
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
        }

        $viewPath = module_path($this->name, 'resources/views');
        // if (! is_string($viewPath)) {
        //    throw new \Exception('Invalid view path');
        // }

        $this->loadViewsFrom($viewPath, $this->nameLower);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Restituisce il path della cartella lang del modulo, con fallback robusto.
     */
    protected function getLangPath(): string
    {
        try {
            return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'lang');
        } catch (Throwable $e) {
            return base_path('Modules/' . $this->name . '/lang');
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * Registra le traduzioni del modulo.
     *
     * @throws Exception
     */
    public function registerTranslations(): void
    {
        if ($this->name === '') {
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
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
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
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
            throw new Exception('name is empty on [' . static::class . ']');
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
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
        if (! app()->environment('production')) {
=======
        if (!app()->environment('production')) {
>>>>>>> 5a14301c (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!app()->environment('production')) {
=======
        if (!app()->environment('production')) {
>>>>>>> 399f46d3 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 399f46d3 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!app()->environment('production')) {
=======
        if (! app()->environment('production')) {
>>>>>>> a12f125f4a (.)
=======
        if (!app()->environment('production')) {
>>>>>>> b93ef594b4 (.)
=======
        if (! app()->environment('production')) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> ca9324a4 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        if (!app()->environment('production')) {
=======
        if (! app()->environment('production')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!app()->environment('production')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> ca9324a4 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 5a14301c (.)
=======
        if (!app()->environment('production')) {
=======
        if (! app()->environment('production')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!app()->environment('production')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> ca9324a4 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 5a14301c (.)
=======
        if (!app()->environment('production')) {
=======
        if (! app()->environment('production')) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!app()->environment('production')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!app()->environment('production')) {
>>>>>>> ca9324a4 (.)
            // app(Factory::class)->load($this->module_dir.'/../Database/factories');
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function registerBladeComponents(): void
    {
        $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        try {
            Blade::anonymousComponentPath($componentViewPath);
        } catch (Exception $e) {
            // Ignore missing component view path
            dddx([
                'name' => $this->name,
                'componentViewPath' => $componentViewPath,
                'e' => $e->getMessage(),
            ]);
        }

        $componentClassPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-class');

        $namespace = $this->module_ns.'\View\Components';
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        try {
            $configPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'config');

            $files = File::glob($configPath . '/*.php');

            foreach ($files as $file) {
                $content = File::getRequire($file);
                $info = pathinfo($file);
                $key = $this->nameLower . '::' . $info['filename'];
                Config::set($key, $content);
            }
        } catch (Exception $e) {
            // Ignore missing configuration
            return;
        }
    }

    public function registerBladeComponents(): void
    {
        $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        try{
            Blade::anonymousComponentPath($componentViewPath);
        } catch (Exception|\BladeUI\Icons\Exceptions\CannotRegisterIconSet $e) {
            // Ignore missing component view path
            dddx([
                'name'=>$this->name, 
                'componentViewPath'=>$componentViewPath, 
                'e'=>$e->getMessage()
            ]);
        }
=======
        Blade::anonymousComponentPath($componentViewPath);
>>>>>>> 5a14301c (.)
=======
        Blade::anonymousComponentPath($componentViewPath);
>>>>>>> 5a14301c (.)
=======
        Blade::anonymousComponentPath($componentViewPath);
>>>>>>> 5a14301c (.)

        $componentClassPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-class');

        $namespace = $this->module_ns . '\View\Components';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
            ->execute($this->module_dir.'/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 5a14301c (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
            ->execute(
                $this->module_dir.'/../Http/Livewire',
                Str::before($this->module_ns, '\Providers'),
                $prefix
            );
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> ca9324a4 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> ca9324a4 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> ca9324a4 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> ca9324a4 (.)
    }

    public function registerCommands(): void
    {
        $prefix = '';

        $comps = app(GetComponentsAction::class)
            ->execute(
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
                $this->module_dir.'/../Console/Commands',
                'Modules\\'.$this->name.'\\Console\\Commands',
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
        $comps = app(GetComponentsAction::class)
            ->execute(
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
>>>>>>> 5a14301c (.)
=======
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
>>>>>>> 5a14301c (.)
=======
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
>>>>>>> 5a14301c (.)
=======
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($item['ns'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
}
