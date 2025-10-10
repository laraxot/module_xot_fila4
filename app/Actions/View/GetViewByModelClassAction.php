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
    }
}
