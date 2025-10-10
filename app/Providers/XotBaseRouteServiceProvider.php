<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
    protected string $moduleNamespace = 'Modules\Xot\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $name = '';

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
        if ('' === $this->name) {
            Notification::make()
                ->title('Error')
                ->danger()
                ->persistent()
                ->body('on [Name]ServiceProvider and RouteServiceProvider add $name variable')
                ->send();

            return;
        }
<<<<<<< HEAD
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
=======
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
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
    }

    /**
     * Undocumented function.
     */
    protected function mapApiRoutes(): void
    {
        if ('' === $this->name) {
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
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
        }
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
<<<<<<< HEAD
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
    }
}
