<?php

declare(strict_types=1);

namespace Modules\Xot\View\Composers;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\Authenticatable;
use Exception;
=======
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
<<<<<<< HEAD
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Webmozart\Assert\Assert;

/**
 * Class XotComposer.
 */
class XotComposer
{
    /**
     * Undocumented function.
     *
<<<<<<< HEAD
     * @param  array<mixed|void>  $arguments
=======
     * @param array<mixed|void> $arguments
>>>>>>> 5a14301c (.)
     */
    public function __call(string $name, array $arguments): mixed
    {
        $modules = Module::getOrdered();

        $module = Arr::first($modules, static function ($module) use ($name): bool {
            // Ensure the module is an instance of LaravelModule
<<<<<<< HEAD
            if (! ($module instanceof LaravelModule)) {
=======
            if (!($module instanceof LaravelModule)) {
>>>>>>> 5a14301c (.)
                return false;
            }

            Assert::string($moduleName = $module->getName());
<<<<<<< HEAD
            $class = '\Modules\\'.$moduleName.'\View\Composers\ThemeComposer';
=======
            $class = '\Modules\\' . $moduleName . '\View\Composers\ThemeComposer';
>>>>>>> 5a14301c (.)

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
        if (!\is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with [' .
                $name .
                '] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)

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

        if (class_exists('\Jenssegers\Agent\Agent')) {
<<<<<<< HEAD
<<<<<<< HEAD
            $agent = new Agent;
=======
=======
>>>>>>> 3fbbf1f5 (.)
            $agent = new Agent();
>>>>>>> 5a14301c (.)
            $view->with('isMobile', $agent->isMobile());
            $view->with('isTablet', $agent->isTablet());
            $view->with('isDesktop', $agent->isDesktop());
        }

        if (Auth::check()) {
            $profile = XotData::make()->getProfileModel();
            $view->with('profile', $profile);
<<<<<<< HEAD
            /** @var Authenticatable|null $user */
            $user = auth()->user();
            $view->with('user', $user);
=======
            $view->with('user', auth()->user());
>>>>>>> 5a14301c (.)
        }
    }

    public function asset(string $str): string
    {
        return asset(app(AssetAction::class)->execute($str));
    }

    public function path(string $str): string
    {
        return app(AssetPathAction::class)->execute($str);
    }

    public function metatag(string $str): string|bool|null
    {
        $metatag = MetatagData::make();
<<<<<<< HEAD
<<<<<<< HEAD
        $fun = 'get'.Str::studly($str);
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 5a14301c (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 3fbbf1f5 (.)
        if (method_exists($metatag, $fun)) {
            // @phpstan-ignore return.type
            return $metatag->{$fun}();
        }

        // @phpstan-ignore return.type
        return $metatag->{$str};
    }
}
