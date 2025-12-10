<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class GetModuleNameByClassAction
{
    use QueueableAction;

    public function execute(string $model_class): string
    {
        $module = Str::between($model_class, 'Modules\\', '\Models\\');

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
        return is_string($module) ? $module : ((string) $module);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return is_string($module) ? $module : (string) $module;
=======
=======
        return is_string($module) ? $module : (string) $module;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> 358ba79a7 (.)
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> f8f76a284 (.)
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> 5e6e0d054 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
        return is_string($module) ? $module : ((string) $module);
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
        return is_string($module) ? $module : ((string) $module);
=======
        return is_string($module) ? $module : (string) $module;
>>>>>>> f1d4085 (.)
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
        return is_string($module) ? $module : ((string) $module);
=======
        return is_string($module) ? $module : (string) $module;
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> aba62c408 (.)
=======
        return is_string($module) ? $module : ((string) $module);
=======
        return is_string($module) ? $module : (string) $module;
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
        return is_string($module) ? $module : ((string) $module);
>>>>>>> 5cb992cc6 (.)
=======
        return is_string($module) ? $module : ((string) $module);
=======
        return is_string($module) ? $module : (string) $module;
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
    }
}
