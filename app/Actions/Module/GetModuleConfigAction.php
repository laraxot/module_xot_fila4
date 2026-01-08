<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
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
use Illuminate\Support\Str;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use Exception;
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> 73eab74 (.)
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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Spatie\QueueableAction\QueueableAction;

class GetModuleConfigAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
=======
>>>>>>> 285375c74 (.)
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile = $configPath.'/'.$config.'.php';
        if (! file_exists($configFile)) {
            throw new Exception('Config file not found: '.$configFile);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
<<<<<<< HEAD
=======
    public function execute(string $moduleName,string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile=$configPath.'/'.$config.'.php';
        if(!file_exists($configFile)){
            throw new Exception('Config file not found: '.$configFile);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
        }
        dddx(File::getRequire($configFile));

        return [];
    }
}
