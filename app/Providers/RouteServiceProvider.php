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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
>>>>>>> 5a14301c (.)
use Modules\Xot\Http\Middleware\SetDefaultTenantForUrlsMiddleware;

// public function boot(\Illuminate\Routing\Router $router)

// --- bases -----

class RouteServiceProvider extends ServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public string $name = 'Xot';

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $name = 'Xot';

>>>>>>> 5a14301c (.)
=======
    public string $name = 'Xot';

>>>>>>> 5a14301c (.)
=======
    public string $name = 'Xot';

>>>>>>> 5a14301c (.)
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
=======
>>>>>>> 5a14301c (.)
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
    }

<<<<<<< HEAD
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
        $langs = config()->has('laravellocalization.supportedLocales')
            ? config('laravellocalization.supportedLocales')
            : ['it' => 'it', 'en' => 'en'];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
=======
        if (!is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        if (!is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        if (!is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        if (!is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ea7103 (.)
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
>>>>>>> ed734516 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
        if (! is_array($langs)) {
=======
<<<<<<< HEAD
        if (! is_array($langs)) {
=======
        if (!is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => 'it', 'en' => 'en'];

        if (! is_array($langs)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!is_array($langs)) {
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
        if (!is_array($langs)) {
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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! is_array($langs)) {
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! is_array($langs)) {
>>>>>>> 71586de2 (.)
=======
        if (!is_array($langs)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!is_array($langs)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!is_array($langs)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 17684f52 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 399f46d3 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 399f46d3 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 17684f52 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 399f46d3 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $lang_pattern = '/|'.$lang_pattern.'|/i';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 9db27d12 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 5a14301c (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)
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
=======
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> 53d6a6ba (.)
=======
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> 71586de2 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 5a14301c (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
=======
        $lang_pattern = '/|'.$lang_pattern.'|/i';
>>>>>>> f1d4085 (.)
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
=======
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $lang_pattern = '/|' . $lang_pattern . '|/i';
>>>>>>> 9db27d12 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!is_array($models)) {
>>>>>>> 17684f52 (.)
=======
        if (!is_array($models)) {
>>>>>>> 399f46d3 (.)
=======
        if (!is_array($models)) {
>>>>>>> 399f46d3 (.)
=======
        if (!is_array($models)) {
>>>>>>> 17684f52 (.)
=======
        if (!is_array($models)) {
>>>>>>> 399f46d3 (.)
=======
        if (!is_array($models)) {
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! is_array($models)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! is_array($models)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
        if (!is_array($models)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!is_array($models)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!is_array($models)) {
>>>>>>> 9db27d12 (.)
=======
        if (!is_array($models)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
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
=======
=======
        if (!is_array($models)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!is_array($models)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!is_array($models)) {
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!is_array($models)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        if (!is_array($models)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! is_array($models)) {
>>>>>>> 53d6a6ba (.)
=======
=======
        if (!is_array($models)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! is_array($models)) {
>>>>>>> 71586de2 (.)
=======
        if (!is_array($models)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_array($models)) {
=======
        if (! is_array($models)) {
>>>>>>> f1d4085 (.)
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
=======
=======
        if (!is_array($models)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!is_array($models)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!is_array($models)) {
>>>>>>> 9db27d12 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 17684f52 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 17684f52 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> ed734516 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 7131bd09 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> ed734516 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> ed734516 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 7131bd09 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 17684f52 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 17684f52 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 399f46d3 (.)
=======
        $models_collect->map(
            fn ($item) => Str::plural(is_string($item) ? $item : (string) $item)
        )->implode('|');
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 9db27d12 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
=======
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 9db27d12 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
=======
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $models_collect->map(fn($item) => Str::plural(is_string($item) ? $item : ((string) $item)))->implode('|');
>>>>>>> 9db27d12 (.)
    }

    // end registerRoutePattern
}
