<?php

declare(strict_types=1);

namespace Modules\Xot\View\Composers;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
<<<<<<< HEAD
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
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Illuminate\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;
use Modules\Xot\Actions\File\AssetPathAction;
use Nwidart\Modules\Laravel\Module as LaravelModule;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

/**
 * Class XotComposer.
 */
class XotComposer
{
    /**
     * Undocumented function.
     *
     * @param  array<mixed|void>  $arguments
     */
    public function __call(string $name, array $arguments): mixed
    {
        $modules = Module::getOrdered();

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        $module = Arr::first($modules, static function ($module) use ($name): bool {
            // Ensure the module is an instance of LaravelModule
            if (! ($module instanceof LaravelModule)) {
                return false;
            }

            Assert::string($moduleName = $module->getName());
            $class = '\Modules\\'.$moduleName.'\View\Composers\ThemeComposer';

            return method_exists($class, $name);
        });

<<<<<<< HEAD
        if (! \is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.
                $name.
                '] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '['.__LINE__.']['.class_basename($this).']');
        $class = '\Modules\\'.$module->getName().'\View\Composers\ThemeComposer';
=======
<<<<<<< HEAD
=======
        if (!\is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with [' .
                $name .
                '] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $module = Arr::first(
            $modules,
            static function ($module) use ($name): bool {
                // Ensure the module is an instance of LaravelModule
                if (! $module instanceof LaravelModule) {
                    return false;
                }

                Assert::string($moduleName = $module->getName());
                $class = '\Modules\\'.$moduleName.'\View\Composers\ThemeComposer';

                return method_exists($class, $name);
            }
        );

>>>>>>> d2b0a27 (.)
        if (! \is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.
                $name.
                '] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '['.__LINE__.']['.class_basename($this).']');
        $class = '\Modules\\'.$module->getName().'\View\Composers\ThemeComposer';
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

        $app = app($class);
        $callback = [$app, $name];
        Assert::isCallable($callback);

        return call_user_func_array($callback, $arguments);
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $lang = app()->getLocale();
        $view->with('lang', $lang);
        $view->with('_theme', $this);

<<<<<<< HEAD
<<<<<<< HEAD
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
        if (class_exists('\Jenssegers\Agent\Agent')) {
<<<<<<< HEAD
            $agent = new Agent;
=======
            $agent = new Agent();
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
            $view->with('isMobile', $agent->isMobile());
            $view->with('isTablet', $agent->isTablet());
            $view->with('isDesktop', $agent->isDesktop());
        }

        if (Auth::check()) {
            $profile = XotData::make()->getProfileModel();
            $view->with('profile', $profile);
            $view->with('user', auth()->user());
        }
    }

    public function asset(string $str): string
    {
        return asset(app(AssetAction::class)->execute($str));
    }

    public function path(string $str): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return app(AssetPathAction::class)->execute($str);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return app(AssetPathAction::class)->execute($str);
=======
        return (app(AssetPathAction::class)->execute($str));
>>>>>>> f1d4085 (.)
=======
        return app(AssetPathAction::class)->execute($str);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        return app(AssetPathAction::class)->execute($str);
>>>>>>> 300ef70 (.)
    }

    public function metatag(string $str): string|bool|null
    {
        $metatag = MetatagData::make();
<<<<<<< HEAD
        $fun = 'get'.Str::studly($str);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $fun = 'get'.Str::studly($str);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $fun = 'get' . Str::studly($str);
=======
        $fun = 'get'.Str::studly($str);
>>>>>>> f1d4085 (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        if (method_exists($metatag, $fun)) {
            // @phpstan-ignore return.type
            return $metatag->{$fun}();
        }

        // @phpstan-ignore return.type
        return $metatag->{$str};
    }
}
