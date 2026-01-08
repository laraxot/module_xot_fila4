<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
use Nwidart\Modules\Laravel\Module as LaravelModule;
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
use Nwidart\Modules\Laravel\Module as LaravelModule;
=======
>>>>>>> 5a14301c (.)
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
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 6dcebf8a (.)
>>>>>>> 285375c74 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 8b18e4bff (.)
=======
use Nwidart\Modules\Module as ModuleInstance;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> f1d4085 (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
            $res = array_merge($res, $tmp);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
     *
     * @return array<int, class-string>
     */
    public function execute(): array
    {
        /** @var array<int, class-string> $res */
        $res = [];

        /** @var array<string, LaravelModule> $modules */
        $modules = Module::all();

        foreach ($modules as $module) {
            $moduleNameValue = $module->getName();

            // Type narrowing per PHPStan Level 10
            if (! is_string($moduleNameValue)) {
                continue;
            }

            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($moduleNameValue);
            /** @var array<int, class-string> $tmp */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
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
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
<<<<<<< HEAD
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
     *
     * @return array<int, string>
     */
    public function execute(): array
    {
        /** @var array<int, string> $res */
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
>>>>>>> b7afadf9 (.)
            if (! is_object($module) || ! method_exists($module, 'getName')) {
                continue;
            }

            $moduleName = $module->getName();
            if (! is_string($moduleName)) {
                continue;
            }

            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($moduleName);
<<<<<<< HEAD
            /** @var array<int, string> $tmp */
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
            $res = array_merge($res, $tmp);
=======
            Assert::isArray($tmp, 'GetAllModelsByModuleNameAction must return array');

            // Type-safe merge per mantenere array<string, string>
            foreach ($tmp as $key => $value) {
                Assert::string($key, 'Key must be string');
                Assert::string($value, 'Value must be string');
                $res[$key] = $value;
            }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        }

        return $res;
    }
}
