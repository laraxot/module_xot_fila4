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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
<<<<<<< HEAD
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
    }
}
