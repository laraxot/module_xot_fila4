<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
use Spatie\QueueableAction\QueueableAction;

class GetModuleConfigAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile = $configPath.'/'.$config.'.php';
        if (! file_exists($configFile)) {
            throw new Exception('Config file not found: '.$configFile);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
<<<<<<< HEAD
        $configFile = $configPath.'/'.$config.'.php';
        if (! file_exists($configFile)) {
            throw new Exception('Config file not found: '.$configFile);
=======
        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
<<<<<<< HEAD
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
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
        }
        dddx(File::getRequire($configFile));

        return [];
    }
}
