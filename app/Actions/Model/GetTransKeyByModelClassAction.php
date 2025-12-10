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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 17684f52 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 399f46d3 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> ca9324a4 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 9db27d12 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 5a14301c (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> ca9324a4 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 5a14301c (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> ca9324a4 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> 53d6a6ba (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> 71586de2 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 5a14301c (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> ca9324a4 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
=======
        return Str::lower($moduleName).'::'.Str::kebab($modelName);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return Str::lower($moduleName) . '::' . Str::kebab($modelName);
>>>>>>> 3310e9c6 (.)
    }
}
