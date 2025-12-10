<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

<<<<<<< HEAD
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
>>>>>>> 5cf46378 (.)
use Exception;
use Throwable;
use Modules\Xot\Actions\File\GetComponentsAction;
use BladeUI\Icons\Factory as BladeIconsFactory;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use BladeUI\Icons\Exceptions\CannotRegisterIconSet;
=======
>>>>>>> a6ef6dc7 (.)
use BladeUI\Icons\Factory as BladeIconsFactory;
use Exception;
use BladeUI\Icons\Exceptions\CannotRegisterIconSet;
use BladeUI\Icons\Factory as BladeIconsFactory;
use Exception;
=======
use BladeUI\Icons\Factory as BladeIconsFactory;
use Exception;
>>>>>>> 551c768c4 (.)
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use BladeUI\Icons\Factory as BladeIconsFactory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Modules\Xot\Actions\File\GetComponentsAction;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
use Throwable;
<<<<<<< HEAD
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
use Modules\Xot\Actions\Livewire\RegisterLivewireComponentsAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Nwidart\Modules\Traits\PathNamespace;
=======
>>>>>>> 551c768c4 (.)
use Webmozart\Assert\Assert;

abstract class XotBaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
        $this->loadMigrationsFrom($this->module_dir . '/../Database/Migrations');
=======
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
>>>>>>> 551c768c4 (.)
        $this->registerLivewireComponents();
        $this->registerBladeComponents();
        $this->registerCommands();
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
<<<<<<< HEAD
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
=======
        $this->nameLower = Str::lower($this->name);
        $this->module_ns = collect(explode('\\', $this->module_ns))->slice(0, -1)->implode('\\');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
>>>>>>> 551c768c4 (.)
        $this->registerBladeIcons();
    }

    public function registerBladeIcons(): void
    {
        if ($this->name === '') {
<<<<<<< HEAD
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
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> a6ef6dc7 (.)
        }

        $this->callAfterResolving(BladeIconsFactory::class, function (BladeIconsFactory $factory): void {
            $assetsPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'assets');
            $svgPath = $assetsPath.'/../svg';
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new \Exception('name is empty on ['.static::class.']');
        }

        $this->callAfterResolving(BladeIconsFactory::class, function (BladeIconsFactory $factory) {
            $assetsPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'assets');
            $svgPath = $assetsPath . '/../svg';
            $svgPath = $assetsPath.'/../svg';
            $svgPath = $assetsPath . '/../svg';
            $svgPath = $assetsPath.'/../svg';
            $svgPath = $assetsPath . '/../svg';
            $svgPath = $assetsPath.'/../svg';
            $svgPath = $assetsPath . '/../svg';
            $svgPath = $assetsPath.'/../svg';
            $svgPath = $assetsPath . '/../svg';
            $svgPath = $assetsPath.'/../svg';
            $svgPath = $assetsPath . '/../svg';
=======
>>>>>>> 551c768c4 (.)
            try {
                $factory->add($this->nameLower, ['path' => $svgPath, 'prefix' => $this->nameLower]);
            } catch (\Throwable $e) {
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
        // $svgPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'svg');
        /*
        Assert::string($relativePath = config('modules.paths.generator.assets.path'));

        try {
            $svgPath = module_path($this->name, $relativePath.'/../svg');
            if (! is_string($svgPath)) {
                throw new \Exception('Invalid SVG path');
            }
            $resolvedPath = $svgPath;
            $svgPath = $resolvedPath;
        } catch (\Error $e) {
            $svgPath = base_path('Modules/'.$this->name.'/'.$relativePath.'/../svg');
            if (! is_string($svgPath)) {
                throw new \Exception('Invalid fallback SVG path');
            }
        }

        $basePath = base_path(DIRECTORY_SEPARATOR);
        $svgPath = str_replace($basePath, '', $svgPath);

        Config::set('blade-icons.sets.'.$this->nameLower.'.path', $svgPath);
        Config::set('blade-icons.sets.'.$this->nameLower.'.prefix', $this->nameLower);
        */

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
            throw new Exception('name is empty on ['.static::class.']');
=======
>>>>>>> 5cf46378 (.)
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new \Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new \Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new \Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
=======
>>>>>>> 53d6a6ba (.)
=======
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> 551c768c4 (.)
        }

        $viewPath = module_path($this->name, 'resources/views');
        // if (! is_string($viewPath)) {
        //    throw new \Exception('Invalid view path');
        // }

        $this->loadViewsFrom($viewPath, $this->nameLower);
    }

    /**
<<<<<<< HEAD
     * Restituisce il path della cartella lang del modulo, con fallback robusto.
     */
    protected function getLangPath(): string
    {
        try {
            return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'lang');
<<<<<<< HEAD
        } catch (\Throwable $e) {
            return base_path('Modules/'.$this->name.'/lang');
            return base_path('Modules/' . $this->name . '/lang');
            return base_path('Modules/' . $this->name . '/lang');
            return base_path('Modules/'.$this->name.'/lang');
            return base_path('Modules/' . $this->name . '/lang');
            return base_path('Modules/' . $this->name . '/lang');
            return base_path('Modules/' . $this->name . '/lang');
        } catch (\Throwable $e) {
            return base_path('Modules/'.$this->name.'/lang');
            return base_path('Modules/' . $this->name . '/lang');
            return base_path('Modules/' . $this->name . '/lang');
            return base_path('Modules/'.$this->name.'/lang');
            return base_path('Modules/' . $this->name . '/lang');
            return base_path('Modules/' . $this->name . '/lang');
=======
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
>>>>>>> 5cf46378 (.)
            return base_path('Modules/'.$this->name.'/lang');
        }
    }

    /**
=======
>>>>>>> 551c768c4 (.)
     * Registra le traduzioni del modulo.
     *
<<<<<<< HEAD
=======
     * @throws \Exception
>>>>>>> 5cf46378 (.)
     */
    public function registerTranslations(): void
    {
        if ($this->name === '') {
<<<<<<< HEAD
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
            throw new Exception('name is empty on ['.static::class.']');
=======
>>>>>>> 5cf46378 (.)
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new \Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new \Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new \Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
=======
>>>>>>> 53d6a6ba (.)
=======
            throw new Exception('name is empty on ['.static::class.']');
=======
            throw new \Exception('name is empty on ['.static::class.']');
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> 551c768c4 (.)
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
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (! app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (! app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (! app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (! app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (! app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
        if (! app()->environment('production')) {
        if (!app()->environment('production')) {
        if (!app()->environment('production')) {
=======
        if (! app()->environment('production')) {
>>>>>>> 551c768c4 (.)
            // app(Factory::class)->load($this->module_dir.'/../Database/factories');
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($file);
                if (! is_string($file)) {
                    continue;
                }
=======
<<<<<<< HEAD
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
>>>>>>> 5cf46378 (.)
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

=======
>>>>>>> 551c768c4 (.)
    public function registerBladeComponents(): void
    {
        $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        try {
            Blade::anonymousComponentPath($componentViewPath);
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (Exception|CannotRegisterIconSet $e) {
        } catch (\Exception $e) {
        } catch (Exception|CannotRegisterIconSet $e) {
        } catch (Exception $e) {
        } catch (Exception|CannotRegisterIconSet $e) {
        } catch (Exception|CannotRegisterIconSet $e) {
        } catch (\Exception $e) {
        } catch (Exception|CannotRegisterIconSet $e) {
        } catch (Exception $e) {
=======
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
>>>>>>> 5cf46378 (.)
=======
        } catch (Exception $e) {
>>>>>>> 551c768c4 (.)
            // Ignore missing component view path
            dddx([
                'name' => $this->name,
                'componentViewPath' => $componentViewPath,
                'e' => $e->getMessage(),
            ]);
        }

        $componentClassPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-class');

        $namespace = $this->module_ns.'\View\Components';
<<<<<<< HEAD
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
            $this->mergeConfigFrom($configPath, $this->nameLower);
        } catch (\Exception $e) {
            // Ignore missing configuration
            return;
        }
    }

    public function registerBladeComponents(): void
    {
        $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
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
        Blade::anonymousComponentPath($componentViewPath);
        Blade::anonymousComponentPath($componentViewPath);
        Blade::anonymousComponentPath($componentViewPath);
        Blade::anonymousComponentPath($componentViewPath);

        $componentClassPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-class');

        $namespace = $this->module_ns . '\View\Components';
        Blade::componentNamespace($namespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)->execute($componentClassPath, $this->module_ns);
        $namespace = $this->module_ns.'\View\Components';
        Blade::componentNamespace($namespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute(
                $componentClassPath,
                $this->module_ns
            );
        $namespace = $this->module_ns . '\View\Components';
=======
>>>>>>> 551c768c4 (.)
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
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute(
                $this->module_dir.'/../Http/Livewire',
                Str::before($this->module_ns, '\Providers'),
                $prefix
            );
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
            ->execute($this->module_dir . '/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
=======
            ->execute($this->module_dir.'/../Http/Livewire', Str::before($this->module_ns, '\Providers'), $prefix);
>>>>>>> 551c768c4 (.)
    }

    public function registerCommands(): void
    {
        $prefix = '';

<<<<<<< HEAD
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
                $prefix,
            );
        if ($comps->count() === 0) {
                $this->module_dir.'/../Console/Commands',
                'Modules\\'.$this->name.'\\Console\\Commands',
                $prefix,
            );
        if ($comps->count() == 0) {
                $this->module_dir . '/../Console/Commands',
                'Modules\\' . $this->name . '\\Console\\Commands',
=======
        $comps = app(GetComponentsAction::class)
            ->execute(
                $this->module_dir.'/../Console/Commands',
                'Modules\\'.$this->name.'\\Console\\Commands',
>>>>>>> 551c768c4 (.)
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
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($item['ns'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

            return $item['ns'];
        }, $commands);
        $commands = array_map(
            static function (mixed $item): string {
                Assert::isArray($item);
                Assert::keyExists($item, 'ns');
                Assert::string($item['ns']);

                return $item['ns'];
            },
            $commands
        );
=======
            Assert::string($item['ns'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
>>>>>>> 551c768c4 (.)

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
