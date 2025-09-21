<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Trans;

<<<<<<< HEAD
use Throwable;
=======
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        } catch (Throwable $e) {
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            $langPath = base_path('Modules/' . $ns . '/lang');
        }

        $lang_path_full = $langPath . '/' . $lang . '/' . $file . '.php';
<<<<<<< HEAD
=======
=======
=======
        } catch (\Throwable $e) {
>>>>>>> origin/develop
            $langPath = base_path('Modules/'.$ns.'/lang');
        }

        $lang_path_full = $langPath.'/'.$lang.'/'.$file.'.php';
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $langPath = base_path('Modules/' . $ns . '/lang');
        }

        $lang_path_full = $langPath . '/' . $lang . '/' . $file . '.php';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $lang_path_full = str_replace(['\\', '/'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $lang_path_full);

        return $lang_path_full;
    }
}
