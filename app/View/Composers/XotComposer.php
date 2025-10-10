<?php

declare(strict_types=1);

namespace Modules\Xot\View\Composers;

<<<<<<< HEAD
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
=======
<<<<<<< HEAD
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use Illuminate\View\View;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Laravel\Module as LaravelModule;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

/**
 * Class XotComposer.
 */
class XotComposer
{
    /**
     * Undocumented function.
     *
     * @param array<mixed|void> $arguments
     */
    public function __call(string $name, array $arguments): mixed
    {
        $modules = Module::getOrdered();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $module = Arr::first($modules, static function ($module) use ($name): bool {
            // Ensure the module is an instance of LaravelModule
            if (!($module instanceof LaravelModule)) {
                return false;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            }

            Assert::string($moduleName = $module->getName());
            $class = '\Modules\\' . $moduleName . '\View\Composers\ThemeComposer';

            return method_exists($class, $name);
        });

        if (!\is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with [' .
                $name .
                '] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
            }

            Assert::string($moduleName = $module->getName());
            $class = '\Modules\\' . $moduleName . '\View\Composers\ThemeComposer';

            return method_exists($class, $name);
        });

        if (!\is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with [' .
                $name .
                '] method');
        }

<<<<<<< HEAD
        Assert::isInstanceOf($module, LaravelModule::class, '['.__LINE__.']['.class_basename($this).']');
        $class = '\Modules\\'.$module->getName().'\View\Composers\ThemeComposer';
>>>>>>> a12f125f4a (.)
=======
        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
>>>>>>> b93ef594b4 (.)
=======
            }
        );

        if (! \is_object($module)) {
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '['.__LINE__.']['.class_basename($this).']');
        $class = '\Modules\\'.$module->getName().'\View\Composers\ThemeComposer';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (class_exists('\Jenssegers\Agent\Agent')) {
=======
        if(class_exists('\Jenssegers\Agent\Agent')){
>>>>>>> a12f125f4a (.)
=======
        if (class_exists('\Jenssegers\Agent\Agent')) {
>>>>>>> b93ef594b4 (.)
            $agent = new Agent();
=======
        if(class_exists('\Jenssegers\Agent\Agent')){
            $agent = new \Jenssegers\Agent\Agent();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
        return asset(app(AssetAction::class)->execute($str));
=======
<<<<<<< HEAD
        return asset(app(AssetAction::class)->execute($str));
=======
        return asset(app(\Modules\Xot\Actions\File\AssetAction::class)->execute($str));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function path(string $str): string
    {
<<<<<<< HEAD
        return app(AssetPathAction::class)->execute($str);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return app(AssetPathAction::class)->execute($str);
=======
        return (app(AssetPathAction::class)->execute($str));
>>>>>>> a12f125f4a (.)
=======
        return app(AssetPathAction::class)->execute($str);
>>>>>>> b93ef594b4 (.)
=======
        return (app(AssetPathAction::class)->execute($str));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    public function metatag(string $str): string|bool|null
    {
        $metatag = MetatagData::make();
<<<<<<< HEAD
        $fun = 'get' . Str::studly($str);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $fun = 'get' . Str::studly($str);
=======
        $fun = 'get'.Str::studly($str);
>>>>>>> a12f125f4a (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> b93ef594b4 (.)
=======
        $fun = 'get'.Str::studly($str);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if (method_exists($metatag, $fun)) {
            // @phpstan-ignore return.type
            return $metatag->{$fun}();
        }

        // @phpstan-ignore return.type
        return $metatag->{$str};
    }
}
