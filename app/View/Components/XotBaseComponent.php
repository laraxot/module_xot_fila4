<?php

declare(strict_types=1);

namespace Modules\Xot\View\Components;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component as IlluminateComponent;
use InvalidArgumentException;
=======
use InvalidArgumentException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component as IlluminateComponent;
>>>>>>> 5a14301c (.)

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
     * @var array<string, string>
=======
     * @var array<string, view-string>
>>>>>>> 5a14301c (.)
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
     * Get the view name for this component.
=======
     * Summary of getView.
>>>>>>> 5a14301c (.)
     *
     * @return view-string
     */
    public function getView(): string
    {
        $class = static::class;

        if (isset(self::$viewCache[$class])) {
<<<<<<< HEAD
            /** @var view-string */
=======
>>>>>>> 5a14301c (.)
            return self::$viewCache[$class];
        }

        $module_name = Str::between($class, 'Modules\\', '\Views\\');
        $module_name_low = Str::lower($module_name);

        $comp_name = Str::after($class, '\View\Components\\');
        $comp_name = str_replace('\\', '.', $comp_name);
        $comp_name = Str::snake($comp_name);

<<<<<<< HEAD
<<<<<<< HEAD
        $view = $module_name_low.'::components.'.$comp_name;
        $view = str_replace('._', '.', $view);

        if (! view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
        }

        /** @var view-string $view */
=======
=======
>>>>>>> 3fbbf1f5 (.)
        $view = $module_name_low . '::components.' . $comp_name;
        $view = str_replace('._', '.', $view);

        if (!view()->exists($view)) {
            throw new InvalidArgumentException("View [{$view}] does not exist.");
        }
>>>>>>> 5a14301c (.)
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
