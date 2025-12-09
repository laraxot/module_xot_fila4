<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;

class AssetPathAction
{
    use QueueableAction;

    public function execute(string $asset): string
    {
        [$ns, $file] = explode('::', $asset);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
=======
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
        [$ns,$file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        [$ns, $file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    }
}
