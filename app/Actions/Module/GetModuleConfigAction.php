<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Exception;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Str;
>>>>>>> 3fbbf1f5 (.)
use Spatie\QueueableAction\QueueableAction;

class GetModuleConfigAction
{
    use QueueableAction;

    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
<<<<<<< HEAD
        $configFile = $configPath.'/'.$config.'.php';
        if (! file_exists($configFile)) {
            throw new Exception('Config file not found: '.$configFile);
        }
        dddx(File::getRequire($configFile));

=======
        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
        }
        dddx(File::getRequire($configFile));
>>>>>>> 5a14301c (.)
        return [];
    }
}
