<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Trans;

use Throwable;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Throwable;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Throwable;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Throwable;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Throwable;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Throwable;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Webmozart\Assert\Assert;

class GetTransFilenameAction
{
    public function execute(string $filename): string
    {
        $lang = app()->getLocale();
        $ns = Str::before($filename, '::');
        $file = Str::between($filename, '::', '.');

        try {
            $langPath = app(GetModulePathByGeneratorAction::class)->execute($ns, 'lang');
            Assert::string($langPath, 'Percorso lang non valido');
<<<<<<< HEAD
=======
        } catch (Throwable $e) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $langPath = base_path('Modules/'.$ns.'/lang');
        }

        $lang_path_full = $langPath.'/'.$lang.'/'.$file.'.php';

        return str_replace(['\\', '/'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $lang_path_full);
=======
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
<<<<<<< HEAD
        } catch (Throwable $e) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
=======
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
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            $langPath = base_path('Modules/' . $ns . '/lang');
        }

        $lang_path_full = $langPath . '/' . $lang . '/' . $file . '.php';
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (\Throwable $e) {
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
            $langPath = base_path('Modules/'.$ns.'/lang');
        }

        $lang_path_full = $langPath.'/'.$lang.'/'.$file.'.php';
<<<<<<< HEAD
            $langPath = base_path('Modules/' . $ns . '/lang');
        }

        $lang_path_full = $langPath . '/' . $lang . '/' . $file . '.php';
            $langPath = base_path('Modules/'.$ns.'/lang');
        }

        $lang_path_full = $langPath.'/'.$lang.'/'.$file.'.php';
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        $lang_path_full = str_replace(['\\', '/'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $lang_path_full);

        return $lang_path_full;
        $lang_path_full = str_replace(['\\', '/'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $lang_path_full);

        return $lang_path_full;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        $lang_path_full = str_replace(['\\', '/'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $lang_path_full);

        return $lang_path_full;
    }
}
