<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Illuminate\Support\ServiceProvider;
use Modules\Xot\Actions\Blade\RegisterBladeComponentsAction;
use Illuminate\Support\ServiceProvider;

abstract class XotBaseThemeServiceProvider extends ServiceProvider
{
    public string $name = '';

    public string $nameLower = '';

    protected string $module_dir = __DIR__;

    public string $nameLower = '';
    protected string $module_dir = __DIR__;
    public string $nameLower = '';
    protected string $module_dir = __DIR__;
    public string $nameLower = '';
    protected string $module_dir = __DIR__;
    public string $nameLower = '';
    protected string $module_dir = __DIR__;
    public string $nameLower = '';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> a67e542f (.)
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
=======
>>>>>>> 218dfed3 (.)
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
=======
<<<<<<< HEAD
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 399f46d3 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 17684f52 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> ed734516 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 7131bd09 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 218dfed3 (.)
>>>>>>> ed734516 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 7131bd09 (.)
=======
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> 2f3197ab (.)
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
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
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
        $this->registerBladeComponents();
    }

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
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
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
>>>>>>> 2f3197ab (.)
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
<<<<<<< HEAD
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
=======
=======
=======
>>>>>>> a67e542f (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 218dfed3 (.)
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
>>>>>>> 7131bd09 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> ed734516 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 7131bd09 (.)
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
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
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
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
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
    }

    protected function registerBladeComponents(): void
    {
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
        $componentNamespace = $this->module_ns.'\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir.'/../View/Components', $this->module_ns);
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
<<<<<<< HEAD
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
>>>>>>> a67e542f (.)
        $componentNamespace = $this->module_ns . '\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir . '/../View/Components', $this->module_ns);
    }
}
<<<<<<< HEAD
        $componentNamespace = $this->module_ns.'\View\Components';
        $componentNamespace = $this->module_ns . '\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir.'/../View/Components', $this->module_ns);
        $componentNamespace = $this->module_ns . '\View\Components';
        $componentNamespace = $this->module_ns.'\View\Components';
        $componentNamespace = $this->module_ns . '\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir . '/../View/Components', $this->module_ns);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        $componentNamespace = $this->module_ns.'\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
<<<<<<< HEAD
    }
}
        $componentNamespace = $this->module_ns.'\View\Components';
        \Illuminate\Support\Facades\Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(\Modules\Xot\Actions\Blade\RegisterBladeComponentsAction::class)
=======
>>>>>>> 2f3197ab (.)
            ->execute(
                $this->module_dir.'/../View/Components',
                $this->module_ns
            );
    }
} 
<<<<<<< HEAD
            ->execute($this->module_dir.'/../View/Components', $this->module_ns);
    }
}
} 
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
