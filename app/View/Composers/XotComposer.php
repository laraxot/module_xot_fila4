<?php

declare(strict_types=1);

namespace Modules\Xot\View\Composers;

use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 2f3197ab (.)
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
<<<<<<< HEAD
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
=======
=======
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

/**
 * Class XotComposer.
 */
class XotComposer
{
    /**
     * Undocumented function.
     *
     * @param array<mixed|void> $arguments
     * @param array<mixed|void> $arguments
     * @param array<mixed|void> $arguments
     * @param array<mixed|void> $arguments
     * @param array<mixed|void> $arguments
     */
    public function __call(string $name, array $arguments): mixed
    {
        $modules = Module::getOrdered();

<<<<<<< HEAD
        $module = Arr::first($modules, static function ($module) use ($name): bool {
            // Ensure the module is an instance of LaravelModule
            if (!($module instanceof LaravelModule)) {
            if (!($module instanceof LaravelModule)) {
            if (!($module instanceof LaravelModule)) {
            if (!($module instanceof LaravelModule)) {
            if (!($module instanceof LaravelModule)) {
                return false;
            }

            Assert::string($moduleName = $module->getName());

            return method_exists($class, $name);
        });

        if (!\is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with [' .
                $name .
                '] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
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

        if (! \is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.
                $name.
                '] method');
        }

        Assert::isInstanceOf($module, LaravelModule::class, '['.__LINE__.']['.class_basename($this).']');
        $class = '\Modules\\'.$module->getName().'\View\Composers\ThemeComposer';
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 2f3197ab (.)
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
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            }
        );

        if (! \is_object($module)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
<<<<<<< HEAD
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            }
        );

        if (! \is_object($module)) {
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.
                $name.
                '] method');
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
=======
>>>>>>> 399f46d3 (.)
=======
            throw new Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        }

        Assert::isInstanceOf($module, LaravelModule::class, '['.__LINE__.']['.class_basename($this).']');
        $class = '\Modules\\'.$module->getName().'\View\Composers\ThemeComposer';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
<<<<<<< HEAD
        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
        Assert::isInstanceOf($module, LaravelModule::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $class = '\Modules\\' . $module->getName() . '\View\Composers\ThemeComposer';
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

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
=======
<<<<<<< HEAD
        if (class_exists('\Jenssegers\Agent\Agent')) {
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
            $agent = new Agent;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
<<<<<<< HEAD
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
        if(class_exists('\Jenssegers\Agent\Agent')){
        if (class_exists('\Jenssegers\Agent\Agent')) {
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
        if(class_exists('\Jenssegers\Agent\Agent')){
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            $agent = new Agent();
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent();
        if(class_exists('\Jenssegers\Agent\Agent')){
            $agent = new \Jenssegers\Agent\Agent();
            $agent = new Agent();
            $agent = new Agent();
            $agent = new Agent();
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent;
            $agent = new Agent();
            $agent = new Agent();
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent();
            $agent = new Agent();
            $view->with('isMobile', $agent->isMobile());
            $view->with('isTablet', $agent->isTablet());
            $view->with('isDesktop', $agent->isDesktop());
        }

        if (Auth::check()) {
            $profile = XotData::make()->getProfileModel();
            $view->with('profile', $profile);
            $view->with('user', auth()->user());
            $view->with('user', auth()->user());
            $view->with('user', auth()->user());
            $view->with('user', auth()->user());
            $view->with('user', auth()->user());
        }
    }

    public function asset(string $str): string
    {
    }

    public function path(string $str): string
    {
<<<<<<< HEAD
        return app(AssetPathAction::class)->execute($str);
<<<<<<< HEAD
        return (app(AssetPathAction::class)->execute($str));
=======
=======
        return (app(AssetPathAction::class)->execute($str));
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    }

    public function metatag(string $str): string|bool|null
    {
        $metatag = MetatagData::make();
<<<<<<< HEAD
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
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
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
<<<<<<< HEAD
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
=======
>>>>>>> ca9324a4 (.)
=======
        $fun = 'get' . Str::studly($str);
=======
        $fun = 'get'.Str::studly($str);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        if (method_exists($metatag, $fun)) {
            // @phpstan-ignore return.type
            return $metatag->{$fun}();
        }

        // @phpstan-ignore return.type
        return $metatag->{$str};
    }
}
