<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use stdClass;
>>>>>>> 5a14301c (.)
=======
use stdClass;
>>>>>>> 5a14301c (.)
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
use stdClass;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class GetAllModelsByModuleNameAction
{
    use QueueableAction;

    /**
     * Execute the action.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return array<string, class-string>
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(string $moduleName): array
    {
        $mod = Module::find($moduleName);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        /** @var array<string, class-string> $data */
        $data = [];
        $ns = 'Modules\\'.$mod->getName().'\\Models';
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
        if (!($mod instanceof \Nwidart\Modules\Module)) {
=======
        if (! $mod instanceof \Nwidart\Modules\Module) {
>>>>>>> f1d4085 (.)
=======
        if (!($mod instanceof \Nwidart\Modules\Module)) {
>>>>>>> 73eab74 (.)
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
        $ns = 'Modules\\' . $mod->getName() . '\\Models';
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        // con la barra davanti non va il search ?
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $tmp = new stdClass;
=======
                $tmp = new stdClass();
>>>>>>> 5a14301c (.)
=======
                $tmp = new stdClass();
=======
<<<<<<< HEAD
                $tmp = new stdClass();
=======
                $tmp = new \stdClass();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
                $tmp = new stdClass();
>>>>>>> ca9324a4 (.)
=======
                $tmp = new stdClass();
>>>>>>> 5a14301c (.)
                $name = mb_substr($filename, 0, -mb_strlen($ext));
                // dddx(['name' => $name, 'name1' => $file->getFilenameWithoutExtension()]);
                /**
                 * @var class-string
                 */
<<<<<<< HEAD
<<<<<<< HEAD
                $class = $ns.'\\'.$name;
                // if ($tmp !== null) {
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;
                // }
                // 434    Parameter #1 $argument of class ReflectionClass constructor expects class-string<T of object>|T of object, string given.
                try {
                    $reflection_class = new ReflectionClass($tmp->class);
                    if (! $reflection_class->isAbstract()) {
=======
=======
>>>>>>> 5a14301c (.)
                $class = $ns . '\\' . $name;
                //if ($tmp !== null) {
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;
                //}
                // 434    Parameter #1 $argument of class ReflectionClass constructor expects class-string<T of object>|T of object, string given.
                try {
                    $reflection_class = new ReflectionClass($tmp->class);
<<<<<<< HEAD
<<<<<<< HEAD
                    if (!$reflection_class->isAbstract()) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
                }
            }
        }

        return $data;
    }
}
