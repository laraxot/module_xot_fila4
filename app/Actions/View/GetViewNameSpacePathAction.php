<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Exception;
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
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
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
=======
use Illuminate\Support\Arr;
use Illuminate\View\FileViewFinder;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
<<<<<<< HEAD
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

class GetViewNameSpacePathAction
{
    use QueueableAction;

    /**
     * @throws Exception
     */
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
    public function execute(?string $module_name = null): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(null|string $module_name = null): string
=======
    public function execute(?string $module_name = null): string
>>>>>>> f1d4085 (.)
=======
    public function execute(null|string $module_name = null): string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
    public function execute(?string $module_name = null): string
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(?string $module_name = null): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(null|string $module_name = null): string
=======
    public function execute(?string $module_name = null): string
>>>>>>> f1d4085 (.)
=======
    public function execute(null|string $module_name = null): string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public function execute(null|string $module_name = null): string
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
    {
        if ($module_name !== null && $module_name !== '') {
            $module_path = Module::getModulePath($module_name);
            /** @var non-falsy-string $namespace_path */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
            $namespace_path = $module_path.'resources/views';
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
            $namespace_path = $module_path.'resources/views';
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
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
    public function execute(null|string $module_name = null): string
    {
        if (null !== $module_name && '' !== $module_name) {
            $module_path = Module::getModulePath($module_name);
            /** @var non-falsy-string $namespace_path */
            $namespace_path = $module_path . 'resources/views';
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $namespace_path = $module_path.'resources/views';
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            $namespace_path = $module_path . 'resources/views';
=======
            $namespace_path = $module_path.'resources/views';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $namespace_path = $module_path . 'resources/views';
>>>>>>> b93ef594b4 (.)
=======
            $namespace_path = $module_path.'resources/views';
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
=======
            $namespace_path = $module_path.'resources/views';
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
            $namespace_path = $module_path . 'resources/views';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
            $namespace_path = $module_path . 'resources/views';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
            $namespace_path = $module_path . 'resources/views';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        } else {
            /** @var non-falsy-string $namespace_path */
            $namespace_path = resource_path('views');
        }

        return $namespace_path;
    }
}
