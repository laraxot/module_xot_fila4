<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Illuminate\Support\Str;
use Modules\Xot\Actions\Module\GetModuleNameByModelClassAction;
use Spatie\QueueableAction\QueueableAction;

class GetViewByModelClassAction
{
    use QueueableAction;

    /**
     * ---.
     */
    public function execute(string $model_class, string $suffix): string
    {
        $module = app(GetModuleNameByModelClassAction::class)->execute($model_class);
        $module_low = Str::of($module)->lower()->toString();
        $model_name = class_basename($model_class);
        $model_name = Str::of($model_name)->snake()->toString();
<<<<<<< HEAD
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low.'::'.$model_name.$suffix;
        $view = $module_low.'::'.$model_name.$suffix;
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low.'::'.$model_name.$suffix;
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low.'::'.$model_name.$suffix;
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low.'::'.$model_name.$suffix;
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low.'::'.$model_name.$suffix;
        $view = $module_low.'::'.$model_name.$suffix;

        return $view;
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low . '::' . $model_name . $suffix;
        $view = $module_low.'::'.$model_name.$suffix;

        return $view;
        $view = $module_low . '::' . $model_name . $suffix;

        return $view;
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

        return $module_low.'::'.$model_name.$suffix;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        $view = $module_low . '::' . $model_name . $suffix;
=======
        $view = $module_low.'::'.$model_name.$suffix;
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
        $view = $module_low . '::' . $model_name . $suffix;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $view = $module_low . '::' . $model_name . $suffix;
=======
        $view = $module_low.'::'.$model_name.$suffix;
>>>>>>> a12f125f4a (.)
=======
        $view = $module_low . '::' . $model_name . $suffix;
>>>>>>> b93ef594b4 (.)
=======
        $view = $module_low.'::'.$model_name.$suffix;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $view;
        $view = $module_low . '::' . $model_name . $suffix;

        return $view;
        $view = $module_low . '::' . $model_name . $suffix;

        return $view;
    }
}
