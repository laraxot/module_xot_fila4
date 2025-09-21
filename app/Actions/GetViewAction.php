<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
use Modules\Xot\Actions\File\FixPathAction;
use Exception;
=======
<<<<<<< HEAD
use Modules\Xot\Actions\File\FixPathAction;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetViewAction
{
    use QueueableAction;

    /**
     * Summary of execute.
     *
<<<<<<< HEAD
     * @throws Exception
=======
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     *
     * @return view-string
     */
    public function execute(string $tpl = '', string $file0 = ''): string
    {
        if ('' === $file0) {
            $backtrace = debug_backtrace();
<<<<<<< HEAD
            $file0 = app(FixPathAction::class)->execute($backtrace[0]['file'] ?? '');
=======
<<<<<<< HEAD
            $file0 = app(FixPathAction::class)->execute($backtrace[0]['file'] ?? '');
=======
            $file0 = app(File\FixPathAction::class)->execute($backtrace[0]['file'] ?? '');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        $file0 = Str::after($file0, base_path());
        $arr = explode(DIRECTORY_SEPARATOR, $file0);
        if ('' === $arr[0]) {
            $arr = array_slice($arr, 1);
            $arr = array_values($arr);
        }

        $mod = $arr[1];
        // $tmp = array_slice($arr, 3);//senza "app"
        $tmp = array_slice($arr, 4); // con "app"

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $tmp = collect($tmp)
            ->map(static function ($item) {
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            })
            ->implode('.');

        $pub_view = 'pub_theme::' . $tmp;
        Assert::string($pub_view, '[' . __LINE__ . '][' . class_basename($this) . ']');

        if ('' !== $tpl) {
            $pub_view .= '.' . $tpl;
<<<<<<< HEAD
=======
=======
        $tmp = collect($tmp)->map(
            static function ($item) {
=======
        $tmp = collect($tmp)
            ->map(static function ($item) {
>>>>>>> b93ef594b4 (.)
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            })
            ->implode('.');

        $pub_view = 'pub_theme::' . $tmp;
        Assert::string($pub_view, '[' . __LINE__ . '][' . class_basename($this) . ']');

        if ('' !== $tpl) {
<<<<<<< HEAD
            $pub_view .= '.'.$tpl;
>>>>>>> a12f125f4a (.)
=======
            $pub_view .= '.' . $tpl;
>>>>>>> b93ef594b4 (.)
=======
        $tmp = collect($tmp)->map(
            static function ($item) {
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            }
        )->implode('.');

        $pub_view = 'pub_theme::'.$tmp;
        Assert::string($pub_view, '['.__LINE__.']['.class_basename($this).']');

        if ('' !== $tpl) {
            $pub_view .= '.'.$tpl;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
        if (view()->exists($pub_view)) {
            return $pub_view;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $view = Str::lower($mod).'::'.$tmp;

        if ('' !== $tpl) {
            $view .= '.'.$tpl;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        // if (inAdmin()) {
        if (Str::contains($view, '::panels.actions.')) {
<<<<<<< HEAD
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
=======
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
>>>>>>> a12f125f4a (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> b93ef594b4 (.)
=======
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            $view = Str::replace('::panels.actions.', $to, $view);
            $view = Str::replace('-action', '', $view);
        }

        // }
<<<<<<< HEAD
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
=======
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
>>>>>>> a12f125f4a (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new \Exception('View ['.$view.'] not found');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return $view;
    }
}
