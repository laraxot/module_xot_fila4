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
>>>>>>> 2f3197ab (.)
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
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
>>>>>>> 2f3197ab (.)
    }
}
