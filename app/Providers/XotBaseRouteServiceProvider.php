<?php

declare(strict_types=1);

namespace Modules\Xot\Providers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir.'/../../routes/web.php');
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> ed734516 (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 7131bd09 (.)
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group($this->module_dir.'/../../routes/web.php');
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        Route::middleware('web')->namespace($this->moduleNamespace)->group($this->module_dir . '/../../routes/web.php');
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        if ('' === $this->name) {
>>>>>>> 2f3197ab (.)
            throw new Exception('name is empty on [' . static::class . ']');
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
            throw new Exception('name is empty on [' . static::class . ']');
            throw new \Exception('name is empty on ['.static::class.']');
<<<<<<< HEAD
        if ('' === $this->name) {
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
            throw new Exception('name is empty on [' . static::class . ']');
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
            throw new Exception('name is empty on ['.static::class.']');
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('name is empty on [' . static::class . ']');
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
=======
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        if ('' === $this->name) {
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception('name is empty on ['.static::class.']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            throw new Exception('name is empty on [' . static::class . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir . '/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
            ->group($this->module_dir.'/../../routes/api.php');
            ->group($this->module_dir.'/../../routes/api.php');
=======
=======
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
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 399f46d3 (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 17684f52 (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 399f46d3 (.)
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
            ->group($this->module_dir . '/../../routes/api.php');
=======
            ->group($this->module_dir.'/../../routes/api.php');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            ->group($this->module_dir . '/../../routes/api.php');
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    }
}
