<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Exception;
use Illuminate\Support\Facades\File;
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
=======
>>>>>>> 2f3197ab (.)
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
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
>>>>>>> ce6fc085 (.)
use Illuminate\Support\Str;
<<<<<<< HEAD
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
=======
>>>>>>> 88ea7103 (.)
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
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
>>>>>>> 218dfed3 (.)
use Illuminate\Support\Str;
<<<<<<< HEAD
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
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
use Spatie\QueueableAction\QueueableAction;

class GetModuleConfigAction
{
    use QueueableAction;

    /**
     * @return array<string, mixed>
     */
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile = $configPath.'/'.$config.'.php';
        if (! file_exists($configFile)) {
            throw new Exception('Config file not found: '.$configFile);
        }
        dddx(File::getRequire($configFile));

        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    public function execute(string $moduleName,string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile=$configPath.'/'.$config.'.php';
        if(!file_exists($configFile)){
<<<<<<< HEAD
<<<<<<< HEAD
=======
            throw new Exception('Config file not found: '.$configFile);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
<<<<<<< HEAD
            throw new \Exception('Config file not found: '.$configFile);
=======
            throw new Exception('Config file not found: '.$configFile);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('Config file not found: '.$configFile);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        }
        dddx(File::getRequire($configFile));
        return [];
    }
}
