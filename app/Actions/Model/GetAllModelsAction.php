<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
use Nwidart\Modules\Module as ModuleInstance;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b93ef594b4 (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

class GetAllModelsAction
{
    use QueueableAction;

    /**
     * Execute the action.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
            $res = array_merge($res, $tmp);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     *
     * @return array<string, string> Array associativo con snake_case come chiave e FQCN come valore
=======
>>>>>>> b93ef594b4 (.)
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
<<<<<<< HEAD
            Assert::isInstanceOf($module, ModuleInstance::class, 'Module must be instance of ModuleInstance');
            $moduleName = $module->getName();
            Assert::string($moduleName, 'Module name must be a string');

            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($moduleName);
            Assert::isArray($tmp, 'GetAllModelsByModuleNameAction must return array');

            // Type-safe merge per mantenere array<string, string>
            foreach ($tmp as $key => $value) {
                Assert::string($key, 'Key must be string');
                Assert::string($value, 'Value must be string');
                $res[$key] = $value;
            }
>>>>>>> a12f125f4a (.)
=======
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
            $res = array_merge($res, $tmp);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return $res;
    }
}
