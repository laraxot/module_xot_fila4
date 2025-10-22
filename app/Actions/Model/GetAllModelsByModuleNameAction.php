<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use ReflectionClass;
use Spatie\QueueableAction\QueueableAction;
use stdClass;

class GetAllModelsByModuleNameAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $moduleName): array
    {
        $mod = Module::find($moduleName);
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($mod instanceof \Nwidart\Modules\Module)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($mod instanceof \Nwidart\Modules\Module)) {
=======
        if (! $mod instanceof \Nwidart\Modules\Module) {
>>>>>>> f1d4085 (.)
=======
        if (!($mod instanceof \Nwidart\Modules\Module)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (!($mod instanceof \Nwidart\Modules\Module)) {
>>>>>>> 300ef70 (.)
            return [];
        }

        $mod_path = $mod->getPath().'/Models';
        $mod_path = str_replace(['\\', '/'], [\DIRECTORY_SEPARATOR, \DIRECTORY_SEPARATOR], $mod_path);

        $files = File::files($mod_path);
        $data = [];
        $ns = 'Modules\\'.$mod->getName().'\\Models';
        // con la barra davanti non va il search ?
        foreach ($files as $file) {
            $filename = $file->getRelativePathname();
            $ext = '.php';
            // dddx(['ext' => $file->getExtension(), get_class_methods($file)]);
            if (Str::endsWith($filename, $ext)) {
                $tmp = new stdClass;
                $name = mb_substr($filename, 0, -mb_strlen($ext));
                // dddx(['name' => $name, 'name1' => $file->getFilenameWithoutExtension()]);
                /**
                 * @var class-string
                 */
                $class = $ns.'\\'.$name;
                // if ($tmp !== null) {
                $tmp->class = $class;
                $name = Str::snake($name);
                $tmp->name = $name;
                // }
                // 434    Parameter #1 $argument of class ReflectionClass constructor expects class-string<T of object>|T of object, string given.
                try {
                    $reflection_class = new ReflectionClass($tmp->class);
<<<<<<< HEAD
<<<<<<< HEAD
                    if (! $reflection_class->isAbstract()) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
                    if (!$reflection_class->isAbstract()) {
=======
                    if (! $reflection_class->isAbstract()) {
>>>>>>> f1d4085 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                    if (!$reflection_class->isAbstract()) {
>>>>>>> 300ef70 (.)
                        $data[$tmp->name] = $tmp->class;
                    }
                } catch (Exception) {
                }
            }
        }

        return $data;
    }
}
