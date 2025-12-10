<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
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
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
>>>>>>> 399f46d3 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
>>>>>>> 17684f52 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
>>>>>>> 399f46d3 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 2f3197ab (.)
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
>>>>>>> ce6fc085 (.)

class GetViewNameSpacePathAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
     * @throws Exception
     */
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
    public function execute(?string $module_name = null): string
    {
        if ($module_name !== null && $module_name !== '') {
            $module_path = Module::getModulePath($module_name);
            /** @var non-falsy-string $namespace_path */
            $namespace_path = $module_path.'resources/views';
<<<<<<< HEAD
    public function execute(null|string $module_name = null): string
    public function execute(null|string $module_name = null): string
     * @throws \Exception
     */
    public function execute(?string $module_name = null): string
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
    public function execute(null|string $module_name = null): string
=======
    public function execute(?string $module_name = null): string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
    public function execute(null|string $module_name = null): string
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
     * @throws Exception
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(null|string $module_name = null): string
=======
    public function execute(?string $module_name = null): string
>>>>>>> a12f125f4a (.)
=======
    public function execute(null|string $module_name = null): string
>>>>>>> b93ef594b4 (.)
=======
     * @throws \Exception
     */
    public function execute(?string $module_name = null): string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    {
        if (null !== $module_name && '' !== $module_name) {
            $module_path = Module::getModulePath($module_name);
            /** @var non-falsy-string $namespace_path */
<<<<<<< HEAD
            $namespace_path = $module_path . 'resources/views';
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
>>>>>>> 5a14301c (.)
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
            $namespace_path = $module_path . 'resources/views';
=======
>>>>>>> 2f3197ab (.)
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path.'resources/views';
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
=======
            $namespace_path = $module_path.'resources/views';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            $namespace_path = $module_path . 'resources/views';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            $namespace_path = $module_path.'resources/views';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $namespace_path = $module_path . 'resources/views';
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
=======
            $namespace_path = $module_path.'resources/views';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path . 'resources/views';
<<<<<<< HEAD
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path . 'resources/views';
            $namespace_path = $module_path.'resources/views';
            $namespace_path = $module_path . 'resources/views';
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
=======
            $namespace_path = $module_path.'resources/views';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            $namespace_path = $module_path . 'resources/views';
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
>>>>>>> ce6fc085 (.)
        } else {
            /** @var non-falsy-string $namespace_path */
            $namespace_path = resource_path('views');
        }

        return $namespace_path;
    }
}
