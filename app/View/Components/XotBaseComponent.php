<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component as IlluminateComponent;
use InvalidArgumentException;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use InvalidArgumentException;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use InvalidArgumentException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component as IlluminateComponent;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<string, view-string>
     * @var array<string, view-string>
     * @var array<string, view-string>
     * @var array<string, view-string>
     * @var array<string, view-string>
=======
     * @var array<string, string>
>>>>>>> 551c768c4 (.)
=======
     * @var array<string, string>
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * Summary of getView.
     * Summary of getView.
     * Summary of getView.
     * Summary of getView.
     * Summary of getView.
=======
     * Get the view name for this component.
>>>>>>> 551c768c4 (.)
=======
     * Get the view name for this component.
>>>>>>> 414a4ffcb (.)
     *
     * @return view-string
     */
    public function getView(): string
    {
        $class = static::class;

        if (isset(self::$viewCache[$class])) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
            /** @var view-string */
>>>>>>> 551c768c4 (.)
=======
            /** @var view-string */
>>>>>>> 414a4ffcb (.)
            return self::$viewCache[$class];
        }

        $module_name = Str::between($class, 'Modules\\', '\Views\\');
        $module_name_low = Str::lower($module_name);

        $comp_name = Str::after($class, '\View\Components\\');
        $comp_name = str_replace('\\', '.', $comp_name);
        $comp_name = Str::snake($comp_name);

<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (!view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $view = $module_name_low.'::components.'.$comp_name;
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
        $view = $module_name_low . '::components.' . $comp_name;
>>>>>>> a6ef6dc7 (.)
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
<<<<<<< HEAD
            throw new InvalidArgumentException("View [{$view}] does not exist.");
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        $view = $module_name_low.'::components.'.$comp_name;
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
<<<<<<< HEAD
            throw new InvalidArgumentException("View [{$view}] does not exist.");
>>>>>>> 5cf46378 (.)
=======
            throw new InvalidArgumentException("View [$view] does not exist.");
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        }

        /** @var view-string $view */
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (!view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        $view = $module_name_low.'::components.'.$comp_name;
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
            throw new InvalidArgumentException("View [$view] does not exist.");
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (!view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
<<<<<<< HEAD
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
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            throw new \InvalidArgumentException("View [$view] does not exist.");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        }
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
