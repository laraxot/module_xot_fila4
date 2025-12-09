<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

use Illuminate\Support\Facades\Blade;
<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
=======
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Illuminate\Support\ServiceProvider;
>>>>>>> 5a14301c (.)

abstract class XotBaseThemeServiceProvider extends ServiceProvider
{
    public string $name = '';
<<<<<<< HEAD

    public string $nameLower = '';

    protected string $module_dir = __DIR__;

=======
    public string $nameLower = '';
    protected string $module_dir = __DIR__;
>>>>>>> 5a14301c (.)
    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 5a14301c (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 3fbbf1f5 (.)
        $this->registerBladeComponents();
    }

    public function register(): void
    {
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
    }

    protected function registerBladeComponents(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $componentNamespace = $this->module_ns.'\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir.'/../View/Components', $this->module_ns);
=======
=======
>>>>>>> 3fbbf1f5 (.)
        $componentNamespace = $this->module_ns . '\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir . '/../View/Components', $this->module_ns);
>>>>>>> 5a14301c (.)
    }
}
