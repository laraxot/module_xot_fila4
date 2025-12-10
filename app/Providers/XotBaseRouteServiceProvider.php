<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

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

    public string $name = '';

    public string $name = '';

    public string $name = '';

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
        if ('' === $this->name) {
        if ('' === $this->name) {
        if ('' === $this->name) {
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
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
<<<<<<< HEAD
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
=======
>>>>>>> ed734516 (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 7131bd09 (.)
=======
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
<<<<<<< HEAD
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    }

    /**
     * Undocumented function.
     */
    protected function mapApiRoutes(): void
    {
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
        if ('' === $this->name) {
        if ('' === $this->name) {
<<<<<<< HEAD
            throw new Exception('name is empty on [' . static::class . ']');
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
>>>>>>> 5a14301c (.)
=======
        if ('' === $this->name) {
>>>>>>> 2f3197ab (.)
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new \Exception('name is empty on ['.static::class.']');
        if ('' === $this->name) {
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
<<<<<<< HEAD
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
        if ($this->name === '') {
            throw new Exception('name is empty on ['.static::class.']');
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
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
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        }
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
<<<<<<< HEAD
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
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
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
<<<<<<< HEAD
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
=======
>>>>>>> ca9324a4 (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
=======
            ->group($this->module_dir.'/../../routes/api.php');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    }
}
