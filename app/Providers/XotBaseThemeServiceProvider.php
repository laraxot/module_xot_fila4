<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;

abstract class XotBaseThemeServiceProvider extends ServiceProvider
{
    public string $name = '';

    public string $nameLower = '';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
=======
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
>>>>>>> f1d4085 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        $this->registerBladeComponents();
    }

    public function register(): void
    {
<<<<<<< HEAD
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
>>>>>>> f1d4085 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    }

    protected function registerBladeComponents(): void
    {
<<<<<<< HEAD
        $componentNamespace = $this->module_ns.'\View\Components';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        $componentNamespace = $this->module_ns . '\View\Components';
>>>>>>> a6ef6dc7 (.)
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir.'/../View/Components', $this->module_ns);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        $componentNamespace = $this->module_ns.'\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir.'/../View/Components', $this->module_ns);
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
