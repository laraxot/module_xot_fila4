<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
use stdClass;
>>>>>>> 5a14301c (.)
use Exception;
=======
<<<<<<< HEAD
use stdClass;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use stdClass;
=======
>>>>>>> 5a14301c (.)

class GetAllModelsByModuleNameAction
{
    use QueueableAction;

    /**
     * Execute the action.
<<<<<<< HEAD
     *
     * @return array<string, class-string>
=======
>>>>>>> 5a14301c (.)
     */
    public function execute(string $moduleName): array
    {
        $mod = Module::find($moduleName);
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
        if (!($mod instanceof \Nwidart\Modules\Module)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($mod instanceof \Nwidart\Modules\Module)) {
=======
        if (! $mod instanceof \Nwidart\Modules\Module) {
>>>>>>> a12f125f4a (.)
=======
        if (!($mod instanceof \Nwidart\Modules\Module)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! $mod instanceof \Nwidart\Modules\Module) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return [];
        }

        $mod_path = $mod->getPath() . '/Models';
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
        $ns = 'Modules\\' . $mod->getName() . '\\Models';
>>>>>>> 5a14301c (.)
        // con la barra davanti non va il search ?
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
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
                $name = mb_substr($filename, 0, -mb_strlen($ext));
                // dddx(['name' => $name, 'name1' => $file->getFilenameWithoutExtension()]);
                /**
                 * @var class-string
                 */
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
                $class = $ns . '\\' . $name;
                //if ($tmp !== null) {
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;
                //}
                // 434    Parameter #1 $argument of class ReflectionClass constructor expects class-string<T of object>|T of object, string given.
                try {
<<<<<<< HEAD
                    $reflection_class = new ReflectionClass($tmp->class);
                    if (!$reflection_class->isAbstract()) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
=======
<<<<<<< HEAD
                    $reflection_class = new ReflectionClass($tmp->class);
<<<<<<< HEAD
<<<<<<< HEAD
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> a12f125f4a (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> b93ef594b4 (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
=======
                    $reflection_class = new \ReflectionClass($tmp->class);
                    if (! $reflection_class->isAbstract()) {
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (\Exception) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                }
            }
        }

        return $data;
    }
}
