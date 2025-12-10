<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Spatie\QueueableAction\QueueableAction;
use Spatie\QueueableAction\QueueableAction;
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
=======
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> dbce41cec (.)
use Nwidart\Modules\Module as ModuleInstance;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> b956ebe0 (.)
=======
=======
>>>>>>> 3ae5e299 (.)
use Nwidart\Modules\Laravel\Module as LaravelModule;
=======
<<<<<<< HEAD
>>>>>>> 7d72abc (.)
<<<<<<< HEAD
>>>>>>> 6d1255a8 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 15def8d (.)
>>>>>>> 3ae5e299 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> efbf15eba (.)
=======
use Nwidart\Modules\Module as ModuleInstance;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b93ef594b4 (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)

class GetAllModelsAction
{
    use QueueableAction;

    /**
     * Execute the action.
<<<<<<< HEAD
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
            $res = array_merge($res, $tmp);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
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
=======
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> b956ebe0 (.)
>>>>>>> aba62c408 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
>>>>>>> aba62c408 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6d1255a8 (.)
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 3ae5e299 (.)
>>>>>>> 9f27fc9a6 (.)
     *
     * @return array<int, class-string>
=======
<<<<<<< HEAD
>>>>>>> 7d72abc (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 15def8d (.)
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
>>>>>>> 091f883c (.)
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
<<<<<<< HEAD
     *
     * @return array<int, string>
     */
    public function execute(): array
    {
        /** @var array<int, string> $res */
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
            if (! is_object($module) || ! method_exists($module, 'getName')) {
                continue;
            }

            $moduleName = $module->getName();
            if (! is_string($moduleName)) {
                continue;
            }

            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($moduleName);
            $res = array_merge($res, $tmp);
     *
     * @return array<string, string> Array associativo con snake_case come chiave e FQCN come valore
     */
    public function execute(): array
    {
        /** @var array<string, string> $res */
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
            Assert::isInstanceOf($module, ModuleInstance::class, 'Module must be instance of ModuleInstance');
            $moduleName = $module->getName();
            Assert::string($moduleName, 'Module name must be a string');

            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($moduleName);
            $res = array_merge($res, $tmp);
            Assert::isArray($tmp, 'GetAllModelsByModuleNameAction must return array');

            // Type-safe merge per mantenere array<string, string>
            foreach ($tmp as $key => $value) {
                Assert::string($key, 'Key must be string');
                Assert::string($value, 'Value must be string');
                $res[$key] = $value;
            }
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
            $res = array_merge($res, $tmp);
            $res = array_merge($res, $tmp);
=======
<<<<<<< HEAD
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            $res = array_merge($res, $tmp);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 1c4bb8cf (.)
=======
=======
>>>>>>> 6d1255a8 (.)
     *
     * @return array<string, string> Array associativo con snake_case come chiave e FQCN come valore
     */
    public function execute(): array
    {
        /** @var array<string, string> $res */
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
<<<<<<< HEAD
=======
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
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> 6d1255a8 (.)
            Assert::isInstanceOf($module, ModuleInstance::class, 'Module must be instance of ModuleInstance');
            $moduleName = $module->getName();
            Assert::string($moduleName, 'Module name must be a string');

            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($moduleName);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5e58b29b (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> 6d1255a8 (.)
            Assert::isArray($tmp, 'GetAllModelsByModuleNameAction must return array');

            // Type-safe merge per mantenere array<string, string>
            foreach ($tmp as $key => $value) {
                Assert::string($key, 'Key must be string');
                Assert::string($value, 'Value must be string');
                $res[$key] = $value;
            }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> a12f125f4a (.)
=======
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
            $res = array_merge($res, $tmp);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> b956ebe0 (.)
<<<<<<< HEAD
>>>>>>> aba62c408 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 6d1255a8 (.)
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 3ae5e299 (.)
>>>>>>> 9f27fc9a6 (.)
        }

        return $res;
    }
}
