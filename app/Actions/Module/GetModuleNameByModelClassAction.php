<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class GetModuleNameByModelClassAction
{
    use QueueableAction;

    public function execute(string $model_class): string
    {
        $module = Str::between($model_class, 'Modules\\', '\Models\\');

<<<<<<< HEAD
        return is_string($module) ? $module : ((string) $module);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return is_string($module) ? $module : ((string) $module);
=======
        return is_string($module) ? $module : (string) $module;
>>>>>>> a12f125f4a (.)
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> b93ef594b4 (.)
=======
        return is_string($module) ? $module : (string) $module;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
}
