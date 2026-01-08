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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> ca9324a4 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
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
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        $this->loadViewsFrom($this->module_dir . '/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir . '/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir . '/../resources/lang');
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        $this->loadViewsFrom($this->module_dir.'/../resources/views', $this->nameLower);
        $this->loadTranslationsFrom($this->module_dir.'/../resources/lang', $this->nameLower);
        $this->loadJsonTranslationsFrom($this->module_dir.'/../resources/lang');
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        $this->app->register($this->module_ns . '\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns . '\Providers\EventServiceProvider');
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $componentNamespace = $this->module_ns . '\View\Components';
        Blade::componentNamespace($componentNamespace, $this->nameLower);

        app(RegisterBladeComponentsAction::class)
            ->execute($this->module_dir . '/../View/Components', $this->module_ns);
    }
}
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
>>>>>>> 8b18e4bff (.)
=======
} 
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
