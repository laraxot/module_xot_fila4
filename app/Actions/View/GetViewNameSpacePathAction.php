<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Exception;
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
=======
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
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
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
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

class GetViewNameSpacePathAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * @throws Exception
     */
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
    public function execute(null|string $module_name = null): string
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
    {
        if (null !== $module_name && '' !== $module_name) {
            $module_path = Module::getModulePath($module_name);
            /** @var non-falsy-string $namespace_path */
<<<<<<< HEAD
            $namespace_path = $module_path . 'resources/views';
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
        } else {
            /** @var non-falsy-string $namespace_path */
            $namespace_path = resource_path('views');
        }

        return $namespace_path;
    }
}
