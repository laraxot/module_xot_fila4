<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Exception;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
=======
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Spatie\QueueableAction\QueueableAction;

class GetModuleConfigAction
{
    use QueueableAction;

    public function execute(string $moduleName, string $config): array
    {
        $configPath = app(GetModulePathByGeneratorAction::class)->execute($moduleName, 'config');
<<<<<<< HEAD
<<<<<<< HEAD
        $configFile = $configPath.'/'.$config.'.php';
        if (! file_exists($configFile)) {
            throw new Exception('Config file not found: '.$configFile);
        }
        dddx(File::getRequire($configFile));

=======
=======
>>>>>>> 5a14301c (.)
        $configFile = $configPath . '/' . $config . '.php';
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found: ' . $configFile);
        }
        dddx(File::getRequire($configFile));
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        return [];
    }
}
