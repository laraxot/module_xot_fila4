<?php

declare(strict_types=1);

namespace Modules\Xot\Http\Livewire;

// use Illuminate\Support\Carbon;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Livewire\Component;

/**
 * Class XotBaseComponent.
 */
abstract class XotBaseComponent extends Component
{
    /**
     * Undocumented function.
     *
     * @return view-string
     */
    public function getView(): string
    {
        $class = static::class;
        $module_name = Str::between($class, 'Modules\\', '\Http\\');
        $module_name_low = Str::lower($module_name);
        $comp_name = Str::after($class, '\Http\Livewire\\');
        $comp_name = str_replace('\\', '.', $comp_name);
        $comp_name = Str::snake($comp_name);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
        $view = $module_name_low . '::livewire.' . $comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (!view()->exists($view)) {
            throw new Exception('View not Exists[' . $view . ']');
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
        $view = $module_name_low.'::livewire.'.$comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (! view()->exists($view)) {
            throw new Exception('View not Exists['.$view.']');
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
        $view = $module_name_low . '::livewire.' . $comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (!view()->exists($view)) {
            throw new Exception('View not Exists[' . $view . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> ed734516 (.)
        $view = $module_name_low.'::livewire.'.$comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (! view()->exists($view)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('View not Exists['.$view.']');
>>>>>>> a12f125f4a (.)
=======
        $view = $module_name_low . '::livewire.' . $comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (!view()->exists($view)) {
            throw new Exception('View not Exists[' . $view . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('View not Exists['.$view.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
            throw new Exception('View not Exists['.$view.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
        }

        return $view;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    /**
     * Render the component.
     */
    public function render(): Renderable
    {
        // per fare copia ed incolla
        $view = $this->getView();
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
