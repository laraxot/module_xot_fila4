<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Facades\Filament;
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
use Filament\Facades\Filament;
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
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public string $name = 'Xot';

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $name = 'Xot';

>>>>>>> 5a14301c (.)
=======
    public string $name = 'Xot';

>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_array($langs)) {
=======
        if (!is_array($langs)) {
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
        if (!is_array($langs)) {
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
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => 'it', 'en' => 'en'];

        if (! is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        $langs = config()->has('laravellocalization.supportedLocales')
            ? config('laravellocalization.supportedLocales')
            : ['it' => 'it', 'en' => 'en'];

        if (!is_array($langs)) {
>>>>>>> b93ef594b4 (.)
=======
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => 'it', 'en' => 'en'];
            
        if (! is_array($langs)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!is_array($langs)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
            $langs = ['it' => 'it', 'en' => 'en'];
        }

        $lang_pattern = collect(array_keys($langs))->implode('|');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $lang_pattern = '/|'.$lang_pattern.'|/i';
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 5a14301c (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 3fbbf1f5 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> a12f125f4a (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> b93ef594b4 (.)
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> ca9324a4 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> ca9324a4 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)

        $router->pattern('lang', $lang_pattern);

        $models = config('morph_map');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_array($models)) {
=======
        if (!is_array($models)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_array($models)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!is_array($models)) {
=======
        if (!is_array($models)) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_array($models)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! is_array($models)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!is_array($models)) {
>>>>>>> ca9324a4 (.)
=======
        if (!is_array($models)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!is_array($models)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!is_array($models)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!is_array($models)) {
>>>>>>> ca9324a4 (.)
=======
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
            $models = [];
        }

        $models_collect = collect(array_keys($models));
        $models_collect->implode('|');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 21348520 (.)
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 5a14301c (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 3fbbf1f5 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
=======
<<<<<<< HEAD
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
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
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> b93ef594b4 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> ca9324a4 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
    }

    // end registerRoutePattern
}
