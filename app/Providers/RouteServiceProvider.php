<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

use Filament\Facades\Filament;
<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Routing\Router;
>>>>>>> f1d4085 (.)
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
use Modules\Xot\Http\Middleware\SetDefaultTenantForUrlsMiddleware;
<<<<<<< HEAD
=======
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
>>>>>>> f1d4085 (.)

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
=======
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(base_path('Modules/Xot/routes/web.php'));
>>>>>>> f1d4085 (.)
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

        if (!is_array($langs)) {
=======
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => 'it', 'en' => 'en'];

        if (! is_array($langs)) {
>>>>>>> f1d4085 (.)
            $langs = ['it' => 'it', 'en' => 'en'];
        }

        $lang_pattern = collect(array_keys($langs))->implode('|');
<<<<<<< HEAD
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)

        $router->pattern('lang', $lang_pattern);

        $models = config('morph_map');
<<<<<<< HEAD
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
            $models = [];
        }

        $models_collect = collect(array_keys($models));
        $models_collect->implode('|');
<<<<<<< HEAD
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> f1d4085 (.)
    }

    // end registerRoutePattern
}
