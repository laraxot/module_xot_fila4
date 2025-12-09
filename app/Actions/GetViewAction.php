<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\FixPathAction;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5a14301c (.)

class GetViewAction
{
    use QueueableAction;

    /**
     * Summary of execute.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return view-string
     *
     * @throws Exception
     */
    public function execute(string $tpl = '', string $file0 = ''): string
    {
        if ($file0 === '') {
=======
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
        if ($arr[0] === '') {
=======
        if ('' === $arr[0]) {
>>>>>>> 5a14301c (.)
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

<<<<<<< HEAD
        $pub_view = 'pub_theme::'.$tmp;
        // $pub_view è sempre stringa perché costruita da stringhe

        if ($tpl !== '') {
            $pub_view .= '.'.$tpl;
        }
        // PHPStan: $pub_view è sempre non-falsy-string, Assert ridondante rimosso
=======
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
>>>>>>> 5a14301c (.)
        if (view()->exists($pub_view)) {
            return $pub_view;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $view = Str::lower($mod).'::'.$tmp;

        if ($tpl !== '') {
            $view .= '.'.$tpl;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
        }

        // if (inAdmin()) {
        if (Str::contains($view, '::panels.actions.')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 5a14301c (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
            $view = Str::replace('::panels.actions.', $to, $view);
            $view = Str::replace('-action', '', $view);
        }

        // }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $view è sempre stringa perché costruita da stringhe
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new \Exception('View ['.$view.'] not found');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        }

        return $view;
    }
}
