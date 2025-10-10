<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

<<<<<<< HEAD
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
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
use Spatie\QueueableAction\QueueableAction;

class GetModuleConfigAction
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function execute(string $moduleName,string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile=$configPath.'/'.$config.'.php';
        if(!file_exists($configFile)){
<<<<<<< HEAD
            throw new Exception('Config file not found: '.$configFile);
>>>>>>> a12f125f4a (.)
=======
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('Config file not found: '.$configFile);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
        dddx(File::getRequire($configFile));
        return [];
    }
}
