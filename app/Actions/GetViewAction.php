<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\FixPathAction;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
use Modules\Xot\Actions\File\FixPathAction;
use Exception;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class GetViewAction
{
    use QueueableAction;

    /**
     * Summary of execute.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
     * @throws Exception
     *
     * @return view-string
     */
    public function execute(string $tpl = '', string $file0 = ''): string
    {
        if ('' === $file0) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            $backtrace = debug_backtrace();
            $file0 = app(FixPathAction::class)->execute($backtrace[0]['file'] ?? '');
        }

        $file0 = Str::after($file0, base_path());
        $arr = explode(DIRECTORY_SEPARATOR, $file0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($arr[0] === '') {
=======
        if ('' === $arr[0]) {
>>>>>>> 5a14301c (.)
=======
        if ('' === $arr[0]) {
>>>>>>> 5a14301c (.)
=======
        if ('' === $arr[0]) {
>>>>>>> 5a14301c (.)
            $arr = array_slice($arr, 1);
            $arr = array_values($arr);
        }

        $mod = $arr[1];
        // $tmp = array_slice($arr, 3);//senza "app"
        $tmp = array_slice($arr, 4); // con "app"

        $tmp = collect($tmp)
            ->map(static function ($item) {
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            })
            ->implode('.');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $pub_view = 'pub_theme::'.$tmp;
        // $pub_view è sempre stringa perché costruita da stringhe

        if ($tpl !== '') {
            $pub_view .= '.'.$tpl;
        }
        // PHPStan: $pub_view è sempre non-falsy-string, Assert ridondante rimosso
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $pub_view = 'pub_theme::' . $tmp;
        Assert::string($pub_view, '[' . __LINE__ . '][' . class_basename($this) . ']');

        if ('' !== $tpl) {
            $pub_view .= '.' . $tpl;
        }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        if (view()->exists($pub_view)) {
            return $pub_view;
        }

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
        $view = Str::lower($mod).'::'.$tmp;

        if ($tpl !== '') {
            $view .= '.'.$tpl;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
        $view = Str::lower($mod).'::'.$tmp;

        if ('' !== $tpl) {
            $view .= '.'.$tpl;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
        }

        // if (inAdmin()) {
        if (Str::contains($view, '::panels.actions.')) {
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
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 399f46d3 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> ca9324a4 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
=======
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> ca9324a4 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
=======
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 9db27d12 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 5a14301c (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
=======
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
>>>>>>> 3fbbf1f5 (.)
            $view = Str::replace('::panels.actions.', $to, $view);
            $view = Str::replace('-action', '', $view);
        }

        // }
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
        // $view è sempre stringa perché costruita da stringhe
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 399f46d3 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> ed734516 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 7131bd09 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> ed734516 (.)
=======
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new \Exception('View ['.$view.'] not found');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> ca9324a4 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 9db27d12 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
>>>>>>> 3fbbf1f5 (.)
        }

        return $view;
    }
}
