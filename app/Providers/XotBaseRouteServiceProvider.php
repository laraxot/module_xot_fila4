<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

use Exception;
use Filament\Notifications\Notification;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/**
 * Class XotBaseRouteServiceProvider.
 */
abstract class XotBaseRouteServiceProvider extends RouteServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
    public string $name = '';

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    protected string $moduleNamespace = 'Modules\Xot\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $name = '';

>>>>>>> 5a14301c (.)
=======
    public string $name = '';

>>>>>>> 5a14301c (.)
    /**
     * Undocumented function.
     */
    public function boot(): void
    {
        Config::set('extra_conn', Request::segment(2)); // Se configurato va a prendere db diverso
        parent::boot();
    }

    /**
     * Undocumented function.
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Undocumented function.
     */
    protected function mapWebRoutes(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->name === '') {
=======
        if ('' === $this->name) {
>>>>>>> 5a14301c (.)
=======
        if ('' === $this->name) {
>>>>>>> 5a14301c (.)
            Notification::make()
                ->title('Error')
                ->danger()
                ->persistent()
                ->body('on [Name]ServiceProvider and RouteServiceProvider add $name variable')
                ->send();

            return;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
=======
=======
>>>>>>> 21348520 (.)
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 5a14301c (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 3fbbf1f5 (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> ed734516 (.)
=======
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> b93ef594b4 (.)
=======
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> ca9324a4 (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    }

    /**
     * Undocumented function.
     */
    protected function mapApiRoutes(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
=======
        if ('' === $this->name) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
        }
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->group($this->module_dir.'/../../routes/api.php');
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 5a14301c (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 3fbbf1f5 (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->group($this->module_dir . '/../../routes/api.php');
=======
            ->group($this->module_dir.'/../../routes/api.php');
>>>>>>> a12f125f4a (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> b93ef594b4 (.)
=======
            ->group($this->module_dir.'/../../routes/api.php');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> ca9324a4 (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            ->group($this->module_dir . '/../../routes/api.php');
=======
            ->group($this->module_dir.'/../../routes/api.php');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
    }
}
