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
<<<<<<< HEAD
<<<<<<< HEAD
        [$ns, $file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        [$ns, $file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

<<<<<<< HEAD
        return $module_path.'/'.$file;
=======
        return $module_path . '/' . $file;
<<<<<<< HEAD
<<<<<<< HEAD
=======
        [$ns,$file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
    }
}
