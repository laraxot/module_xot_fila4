<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Exception;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\FixPathAction;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\File\FixPathAction;
use Exception;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetViewAction
{
    use QueueableAction;

    /**
     * Summary of execute.
     *
     * @return view-string
     *
     * @throws Exception
     */
    public function execute(string $tpl = '', string $file0 = ''): string
    {
        if ($file0 === '') {
     * @throws Exception
     *
     * @return view-string
     */
    public function execute(string $tpl = '', string $file0 = ''): string
    {
        if ('' === $file0) {
            $backtrace = debug_backtrace();
            $file0 = app(FixPathAction::class)->execute($backtrace[0]['file'] ?? '');
        }

        $file0 = Str::after($file0, base_path());
        $arr = explode(DIRECTORY_SEPARATOR, $file0);
        if ($arr[0] === '') {
        if ('' === $arr[0]) {
        if ('' === $arr[0]) {
        if ('' === $arr[0]) {
        if ('' === $arr[0]) {
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

        $pub_view = 'pub_theme::' . $tmp;
        Assert::string($pub_view, '[' . __LINE__ . '][' . class_basename($this) . ']');

        if ('' !== $tpl) {
            $pub_view .= '.' . $tpl;
        $tmp = collect($tmp)->map(
            static function ($item) {
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            }
        )->implode('.');

        $pub_view = 'pub_theme::'.$tmp;
        // $pub_view è sempre stringa perché costruita da stringhe

        if ($tpl !== '') {
            $pub_view .= '.'.$tpl;
        }
        // PHPStan: $pub_view è sempre non-falsy-string, Assert ridondante rimosso
        $pub_view = 'pub_theme::' . $tmp;
        Assert::string($pub_view, '[' . __LINE__ . '][' . class_basename($this) . ']');

        if ('' !== $tpl) {
            $pub_view .= '.' . $tpl;
        }
        if (view()->exists($pub_view)) {
            return $pub_view;
        }

        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
        $view = Str::lower($mod).'::'.$tmp;

        if ($tpl !== '') {
            $view .= '.'.$tpl;
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
        $view = Str::lower($mod).'::'.$tmp;

        if ('' !== $tpl) {
            $view .= '.'.$tpl;
        $view = Str::lower($mod) . '::' . $tmp;

        if ('' !== $tpl) {
            $view .= '.' . $tpl;
        $view = Str::lower($mod).'::'.$tmp;

        if ($tpl !== '') {
            $view .= '.'.$tpl;
        }

        // if (inAdmin()) {
        if (Str::contains($view, '::panels.actions.')) {
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::' . (inAdmin() ? 'admin.' : '') . 'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $view = Str::replace('::panels.actions.', $to, $view);
            $view = Str::replace('-action', '', $view);
        }

        // }
        // $view è sempre stringa perché costruita da stringhe
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new \Exception('View ['.$view.'] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '[' . __LINE__ . '][' . class_basename($this) . ']');
        if (!view()->exists($view)) {
            throw new Exception('View [' . $view . '] not found');
        Assert::string($view, '['.__LINE__.']['.class_basename($this).']');
        if (! view()->exists($view)) {
            throw new Exception('View ['.$view.'] not found');
        }

        return $view;
    }
}
