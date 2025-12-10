<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class GetTransKeyByModelClassAction
{
    use QueueableAction;

    public function execute(string $modelClass): string
    {
        $moduleName = Str::between($modelClass, 'Modules\\', '\Models');
        $modelName = Str::after($modelClass, '\Models\\');

<<<<<<< HEAD
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
=======
=======
=======
>>>>>>> 091f883c (.)
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 5a14301c (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3fbbf1f5 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 17684f52 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> a12f125f4a (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> b93ef594b4 (.)
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> ca9324a4 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
<<<<<<< HEAD
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
>>>>>>> ca9324a4 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
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
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    }
}
