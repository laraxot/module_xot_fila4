<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Exception;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\FixPathAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetViewAction
{
    use QueueableAction;

    /**
     * Summary of execute.
     *
     *
     * @return view-string
     *
     * @throws Exception
     */
    public function execute(string $tpl = '', string $file0 = ''): string
    {
        if ($file0 === '') {
            $backtrace = debug_backtrace();
            $file0 = app(FixPathAction::class)->execute($backtrace[0]['file'] ?? '');
        }

        $file0 = Str::after($file0, base_path());
        $arr = explode(DIRECTORY_SEPARATOR, $file0);
        if ($arr[0] === '') {
            $arr = array_slice($arr, 1);
            $arr = array_values($arr);
        }

        $mod = $arr[1];
        // $tmp = array_slice($arr, 3);//senza "app"
        $tmp = array_slice($arr, 4); // con "app"

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
        $tmp = collect($tmp)
            ->map(static function ($item) {
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            })
            ->implode('.');

<<<<<<< HEAD
        $pub_view = 'pub_theme::'.$tmp;
        Assert::string($pub_view, '['.__LINE__.']['.class_basename($this).']');

        if ($tpl !== '') {
            $pub_view .= '.'.$tpl;
=======
<<<<<<< HEAD
=======
        $pub_view = 'pub_theme::' . $tmp;
        Assert::string($pub_view, '[' . __LINE__ . '][' . class_basename($this) . ']');

        if ('' !== $tpl) {
            $pub_view .= '.' . $tpl;
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $tmp = collect($tmp)->map(
            static function ($item) {
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            }
        )->implode('.');

>>>>>>> d2b0a27 (.)
        $pub_view = 'pub_theme::'.$tmp;
        Assert::string($pub_view, '['.__LINE__.']['.class_basename($this).']');

        if ($tpl !== '') {
            $pub_view .= '.'.$tpl;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        }
        if (view()->exists($pub_view)) {
            return $pub_view;
        }

<<<<<<< HEAD
        $view = Str::lower($mod).'::'.$tmp;

        if ($tpl !== '') {
            $view .= '.'.$tpl;
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
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        $view = Str::lower($mod).'::'.$tmp;

        if ($tpl !== '') {
            $view .= '.'.$tpl;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        }

        // if (inAdmin()) {
        if (Str::contains($view, '::panels.actions.')) {
<<<<<<< HEAD
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
=======
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
>>>>>>> f1d4085 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            $view = Str::replace('::panels.actions.', $to, $view);
            $view = Str::replace('-action', '', $view);
        }

        // }
<<<<<<< HEAD
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
=======
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
>>>>>>> f1d4085 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        }

        return $view;
    }
}
