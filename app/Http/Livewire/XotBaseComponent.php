<?php

declare(strict_types=1);

namespace Modules\Xot\Http\Livewire;

// use Illuminate\Support\Carbon;
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
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
        $view = $module_name_low . '::livewire.' . $comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (!view()->exists($view)) {
            throw new Exception('View not Exists[' . $view . ']');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        $view = $module_name_low.'::livewire.'.$comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (! view()->exists($view)) {
            throw new Exception('View not Exists['.$view.']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
        $view = $module_name_low . '::livewire.' . $comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (!view()->exists($view)) {
            throw new Exception('View not Exists[' . $view . ']');
        $view = $module_name_low.'::livewire.'.$comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (! view()->exists($view)) {
            throw new Exception('View not Exists['.$view.']');
        $view = $module_name_low . '::livewire.' . $comp_name;
        $view = str_replace('._', '.', $view);
        // fare distinzione fra inAdmin o no ?
        if (!view()->exists($view)) {
            throw new Exception('View not Exists[' . $view . ']');
            throw new \Exception('View not Exists['.$view.']');
            throw new Exception('View not Exists['.$view.']');
<<<<<<< HEAD
            throw new Exception('View not Exists['.$view.']');
            throw new Exception('View not Exists['.$view.']');
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
=======
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
>>>>>>> 218dfed3 (.)
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
