<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

use Filament\Facades\Filament;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
use Filament\Facades\Filament;
use Filament\Facades\Filament;
<<<<<<< HEAD
use Filament\Facades\Filament;
use Filament\Facades\Filament;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
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
>>>>>>> 7131bd09 (.)
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Routing\Router;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
use Modules\Xot\Http\Middleware\SetDefaultTenantForUrlsMiddleware;
<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
=======
<<<<<<< HEAD
=======
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

// public function boot(\Illuminate\Routing\Router $router)

// --- bases -----

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     */
    protected string $rootNamespace = 'Modules\Xot\Http\Controllers';

    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Xot\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $name = 'Xot';

    public string $name = 'Xot';

    public string $name = 'Xot';

    public string $name = 'Xot';

    public string $name = 'Xot';

    /**
     * Called before routes are registered.
     * Register any model bindings or pattern based filters.
     */
    public function boot(): void
    {
        parent::boot();
        $router = app('router');

        // $this->registerLang(); // ✅ Temporaneamente disabilitato per debug
        $this->registerRoutePattern($router);
        $this->registerMyMiddleware($router);
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
<<<<<<< HEAD
        Route::middleware('web')->namespace($this->moduleNamespace)->group(base_path('Modules/Xot/routes/web.php'));
<<<<<<< HEAD
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(base_path('Modules/Xot/routes/web.php'));
=======
=======
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(base_path('Modules/Xot/routes/web.php'));
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    }

    /**
     * Define the "api" routes for the application.
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(base_path('Modules/Xot/routes/api.php'));
    }

    public function registerMyMiddleware(Router $router): void
    {
        $router->prependMiddlewareToGroup('web', SetDefaultTenantForUrlsMiddleware::class);
        $router->prependMiddlewareToGroup('api', SetDefaultTenantForUrlsMiddleware::class);
    }

    public function registerLang(): void
    {
        $langs = ['it', 'en'];
        $user = request()->user();
        $lang = app()->getLocale();
        if ($user !== null) {
            $lang = $user->lang ?? $lang;
        }

        // ✅ Controllo sicuro della configurazione laravellocalization
<<<<<<< HEAD
        $locales = config()->has('laravellocalization.supportedLocales')
            ? config('laravellocalization.supportedLocales')
=======
        $locales = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
>>>>>>> f1d4085 (.)
            : null;

        $locales = config()->has('laravellocalization.supportedLocales')
            ? config('laravellocalization.supportedLocales')
            : null;

        
        // ✅ Controllo sicuro della configurazione laravellocalization
        $locales = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : null;
            
        if (is_array($locales)) {
            $langs = array_keys($locales);
        }

        if (in_array(request()->segment(1), $langs, false)) {
            $lang = request()->segment(1);
            if ($lang !== null) {
                app()->setLocale($lang);
            }
        }

        URL::defaults([
            'lang' => $lang,
        ]);
    }

    public function registerRoutePattern(Router $router): void
    {
        // ✅ Controllo sicuro della configurazione laravellocalization
<<<<<<< HEAD
        $langs = config()->has('laravellocalization.supportedLocales')
            ? config('laravellocalization.supportedLocales')
            : ['it' => 'it', 'en' => 'en'];

        if (! is_array($langs)) {
        if (!is_array($langs)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 2f3197ab (.)
        if (!is_array($langs)) {
        if (!is_array($langs)) {
        if (!is_array($langs)) {
<<<<<<< HEAD
        if (!is_array($langs)) {
        if (!is_array($langs)) {
        if (! is_array($langs)) {
        if (! is_array($langs)) {
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => 'it', 'en' => 'en'];

        if (! is_array($langs)) {
<<<<<<< HEAD
=======
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
        $langs = config()->has('laravellocalization.supportedLocales')
            ? config('laravellocalization.supportedLocales')
            : ['it' => 'it', 'en' => 'en'];

        if (!is_array($langs)) {
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => 'it', 'en' => 'en'];
            
        if (! is_array($langs)) {
        if (!is_array($langs)) {
        if (!is_array($langs)) {
<<<<<<< HEAD
        if (!is_array($langs)) {
        if (! is_array($langs)) {
        if (! is_array($langs)) {
        if (!is_array($langs)) {
        if (!is_array($langs)) {
        if (!is_array($langs)) {
        if (! is_array($langs)) {
        if (! is_array($langs)) {
        if (!is_array($langs)) {
        if (!is_array($langs)) {
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
>>>>>>> 2f3197ab (.)
            $langs = ['it' => 'it', 'en' => 'en'];
        }

        $lang_pattern = collect(array_keys($langs))->implode('|');
<<<<<<< HEAD
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
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
>>>>>>> 2f3197ab (.)
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
<<<<<<< HEAD
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|'.$lang_pattern.'|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
>>>>>>> ca9324a4 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

        $router->pattern('lang', $lang_pattern);

        $models = config('morph_map');
<<<<<<< HEAD
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
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
>>>>>>> 2f3197ab (.)
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (! is_array($models)) {
        if (! is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
<<<<<<< HEAD
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
        if (! is_array($models)) {
        if (!is_array($models)) {
        if (!is_array($models)) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            $models = [];
        }

        $models_collect = collect(array_keys($models));
        $models_collect->implode('|');
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
>>>>>>> 2f3197ab (.)
        $models_collect->map(fn ($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
    }

    /**
     * Define the "web" routes for the application.
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')->namespace($this->moduleNamespace)->group(base_path('Modules/Xot/routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(base_path('Modules/Xot/routes/api.php'));
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
<<<<<<< HEAD
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
=======
>>>>>>> ed734516 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 7131bd09 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    }

    // end registerRoutePattern
}
