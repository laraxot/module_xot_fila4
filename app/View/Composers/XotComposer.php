<?php

declare(strict_types=1);

namespace Modules\Xot\View\Composers;

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
use Illuminate\Contracts\Auth\Authenticatable;
use Exception;
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Exception;
use Jenssegers\Agent\Agent;
use Modules\Xot\Actions\File\AssetAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
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
<<<<<<< HEAD
=======
=======
=======
use Illuminate\View\View;
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
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
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)

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
            if (!($module instanceof LaravelModule)) {
            if (!($module instanceof LaravelModule)) {
            if (!($module instanceof LaravelModule)) {
            if (!($module instanceof LaravelModule)) {
                return false;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 88ea7103 (.)
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
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            }
        );

        if (! \is_object($module)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            throw new \Exception('Create a View\Composers\ThemeComposer.php inside a module with ['.$name.'] method');
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
            $agent = new Agent;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        if(class_exists('\Jenssegers\Agent\Agent')){
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
        if (class_exists('\Jenssegers\Agent\Agent')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
        if(class_exists('\Jenssegers\Agent\Agent')){
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (class_exists('\Jenssegers\Agent\Agent')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
        if(class_exists('\Jenssegers\Agent\Agent')){
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        if (class_exists('\Jenssegers\Agent\Agent')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
            $agent = new Agent();
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
>>>>>>> 5a14301c (.)
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
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent();
        if(class_exists('\Jenssegers\Agent\Agent')){
            $agent = new \Jenssegers\Agent\Agent();
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
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            $agent = new Agent();
            $agent = new Agent();
<<<<<<< HEAD
            $agent = new Agent();
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent;
            $agent = new Agent();
            $agent = new Agent();
        if (class_exists('\Jenssegers\Agent\Agent')) {
            $agent = new Agent();
            $agent = new Agent();
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return asset(app(AssetAction::class)->execute($str));
=======
<<<<<<< HEAD
        return asset(app(AssetAction::class)->execute($str));
=======
        return asset(app(\Modules\Xot\Actions\File\AssetAction::class)->execute($str));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    }

    public function path(string $str): string
    {
<<<<<<< HEAD
        return app(AssetPathAction::class)->execute($str);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return (app(AssetPathAction::class)->execute($str));
=======
=======
        return (app(AssetPathAction::class)->execute($str));
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        return app(AssetPathAction::class)->execute($str);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $fun = 'get'.Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get' . Str::studly($str);
        $fun = 'get'.Str::studly($str);
        $fun = 'get'.Str::studly($str);
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        $fun = 'get'.Str::studly($str);
        $fun = 'get'.Str::studly($str);
=======
=======
        $fun = 'get'.Str::studly($str);
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 5a14301c (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 3fbbf1f5 (.)
=======
        $fun = 'get' . Str::studly($str);
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 399f46d3 (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 17684f52 (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 399f46d3 (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> ca9324a4 (.)
=======
        $fun = 'get' . Str::studly($str);
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
        $fun = 'get' . Str::studly($str);
=======
        $fun = 'get'.Str::studly($str);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        $fun = 'get' . Str::studly($str);
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        if (method_exists($metatag, $fun)) {
            // @phpstan-ignore return.type
            return $metatag->{$fun}();
        }

        // @phpstan-ignore return.type
        return $metatag->{$str};
    }
}
