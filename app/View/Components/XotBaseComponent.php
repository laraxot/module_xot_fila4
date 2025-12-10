<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component as IlluminateComponent;
use InvalidArgumentException;
use InvalidArgumentException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component as IlluminateComponent;

/**
 * Class XotBaseComponent.
 */
abstract class XotBaseComponent extends IlluminateComponent
{
    /**
     * Undocumented variable.
     *
     * @var array<mixed>
     */
    public array $attrs = [];

    /**
     * Summary of assets.
     *
     * @var list<string>
     */
    protected static array $assets = [];

    /**
     * Cache for resolved views.
     *
     * @var array<string, view-string>
     * @var array<string, view-string>
     * @var array<string, view-string>
     * @var array<string, view-string>
     * @var array<string, view-string>
     */
    protected static array $viewCache = [];

    /**
     * Summary of assets.
     *
     * @return list<string>
     */
    public static function assets(): array
    {
        return static::$assets;
    }

    /**
     * Summary of getView.
     * Summary of getView.
     * Summary of getView.
     * Summary of getView.
     * Summary of getView.
     *
     * @return view-string
     */
    public function getView(): string
    {
        $class = static::class;

        if (isset(self::$viewCache[$class])) {
            return self::$viewCache[$class];
        }

        $module_name = Str::between($class, 'Modules\\', '\Views\\');
        $module_name_low = Str::lower($module_name);

        $comp_name = Str::after($class, '\View\Components\\');
        $comp_name = str_replace('\\', '.', $comp_name);
        $comp_name = Str::snake($comp_name);

<<<<<<< HEAD
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (!view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
        $view = $module_name_low.'::components.'.$comp_name;
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
        $view = $module_name_low.'::components.'.$comp_name;
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $view = $module_name_low.'::components.'.$comp_name;
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
        }

        /** @var view-string $view */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (!view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        $view = $module_name_low.'::components.'.$comp_name;
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
<<<<<<< HEAD
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (!view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
            throw new \InvalidArgumentException("View [$view] does not exist.");
=======
            throw new InvalidArgumentException("View [$view] does not exist.");
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        }
        self::$viewCache[$class] = $view;

        return $view;
    }

    // ret \Closure|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\Factory|View|string

    public function render(): Renderable
    {
        $view = $this->getView();
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
