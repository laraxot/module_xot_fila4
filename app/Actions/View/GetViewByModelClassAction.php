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
        $view = $module_low . '::' . $model_name . $suffix;
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
        $view = $module_low.'::'.$model_name.$suffix;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $view = $module_low.'::'.$model_name.$suffix;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $view = $module_low . '::' . $model_name . $suffix;
=======
        $view = $module_low.'::'.$model_name.$suffix;
>>>>>>> f1d4085 (.)
=======
        $view = $module_low . '::' . $model_name . $suffix;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $view = $module_low . '::' . $model_name . $suffix;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $view = $module_low.'::'.$model_name.$suffix;
>>>>>>> 53d6a6ba (.)
=======
=======
        $view = $module_low . '::' . $model_name . $suffix;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $view = $module_low.'::'.$model_name.$suffix;
>>>>>>> 71586de2 (.)

        return $view;
>>>>>>> 5a14301c (.)
=======
        $view = $module_low . '::' . $model_name . $suffix;

        return $view;
>>>>>>> 5a14301c (.)
=======
        $view = $module_low . '::' . $model_name . $suffix;

        return $view;
>>>>>>> 5a14301c (.)
=======
        $view = $module_low . '::' . $model_name . $suffix;

        return $view;
>>>>>>> 5a14301c (.)
    }
}
