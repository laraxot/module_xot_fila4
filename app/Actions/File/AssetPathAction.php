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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        [$ns, $file] = explode('::', $asset);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        [$ns,$file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
<<<<<<< HEAD
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        [$ns, $file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 218dfed3 (.)
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
<<<<<<< HEAD
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
        [$ns, $file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

        [$ns,$file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
        $module_path = Module::getModulePath($ns) . 'resources';

        return $module_path . '/' . $file;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
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
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
=======
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
>>>>>>> b7afadf9 (.)
=======
        [$ns,$file] = explode('::', $asset);
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
>>>>>>> 551c768c4 (.)
=======
        $module_path = Module::getModulePath($ns).'resources';

        return $module_path.'/'.$file;
>>>>>>> 414a4ffcb (.)
    }
}
