<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
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
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
=======
>>>>>>> ed734516 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)

class GetViewNameSpacePathAction
{
    use QueueableAction;

    /**
     * @throws Exception
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(?string $module_name = null): string
    {
        if ($module_name !== null && $module_name !== '') {
            $module_path = Module::getModulePath($module_name);
            /** @var non-falsy-string $namespace_path */
            $namespace_path = $module_path.'resources/views';
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
    public function execute(null|string $module_name = null): string
=======
    public function execute(?string $module_name = null): string
>>>>>>> f1d4085 (.)
=======
    public function execute(null|string $module_name = null): string
>>>>>>> 73eab74 (.)
    {
        if (null !== $module_name && '' !== $module_name) {
            $module_path = Module::getModulePath($module_name);
            /** @var non-falsy-string $namespace_path */
<<<<<<< HEAD
<<<<<<< HEAD
            $namespace_path = $module_path . 'resources/views';
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $namespace_path = $module_path . 'resources/views';
=======
            $namespace_path = $module_path.'resources/views';
>>>>>>> a12f125f4a (.)
=======
            $namespace_path = $module_path . 'resources/views';
>>>>>>> b93ef594b4 (.)
=======
            $namespace_path = $module_path.'resources/views';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> ed734516 (.)
=======
=======
            $namespace_path = $module_path . 'resources/views';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
        } else {
            /** @var non-falsy-string $namespace_path */
            $namespace_path = resource_path('views');
        }

        return $namespace_path;
    }
}
