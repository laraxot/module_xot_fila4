<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;

use function Safe\scandir;

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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

use function Safe\scandir;

use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\scandir;

<<<<<<< HEAD
=======
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
class GetModulePathAction
{
    use QueueableAction;

    /**
     * Ottiene il percorso di un modulo.
     *
     * @param  string  $moduleName  Il nome del modulo
     * @param  string  $moduleName  Il nome del modulo
     *
     *
     * 
     * @param string $moduleName Il nome del modulo
     * 
     *
     * 
     *
     * @param string $moduleName Il nome del modulo
<<<<<<< HEAD
     *
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
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
>>>>>>> 2f3197ab (.)
     * 
     *
     * @param string $moduleName Il nome del modulo
     *
     * 
     *
     * 
     *
     * @param  string  $moduleName  Il nome del modulo
     * @param string $moduleName Il nome del modulo
     *
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Il nome del modulo
     * @param  string  $moduleName  Il nome del modulo
<<<<<<< HEAD
=======
=======
     * @param string $moduleName Il nome del modulo
     *
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
>>>>>>> 5a14301c (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
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
>>>>>>> 218dfed3 (.)
     * @param string $moduleName Il nome del modulo
     *
     * 
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
     *
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
     * 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
     * @param string $moduleName Il nome del modulo
     *
>>>>>>> 5a14301c (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
     *
     * 
     *
     * @param  string  $moduleName  Il nome del modulo
     * @param  string  $moduleName  Il nome del modulo
     * @param string $moduleName Il nome del modulo
     *
     * 
     *
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
=======
     * 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
     *
>>>>>>> 73eab74 (.)
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
     * @return string Il percorso completo del modulo
     */
    public function execute(string $moduleName): string
    {
        try {
            $module_path = Module::getModulePath($moduleName);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        } catch (Exception) {
            $modulesPath = base_path('Modules');
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
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
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
>>>>>>> 5a14301c (.)
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
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
        } catch (Exception) {
            $modulesPath = base_path('Modules');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
=======
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
>>>>>>> a12f125f4a (.)
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 218dfed3 (.)
        } catch (\Exception) {
            $modulesPath = base_path('Modules');
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
=======
>>>>>>> ed734516 (.)
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
>>>>>>> 7131bd09 (.)
=======
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
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
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
>>>>>>> 218dfed3 (.)
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
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
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
            }

            $files = scandir($modulesPath);
            $moduleNameLower = Str::lower($moduleName);

            $foundModule = collect($files)->filter(static function ($item) use ($moduleNameLower): bool {
                if (! is_string($item)) {
                    return false;
                }

                if (!is_string($item)) {
                    return false;
                }
                if (!is_string($item)) {
                    return false;
                }
                if (!is_string($item)) {
                    return false;
                }
                if (!is_string($item)) {
                    return false;
                }
                if (!is_string($item)) {
                    return false;
                }
                return Str::lower($item) === $moduleNameLower;
            })->first();

            // Se non troviamo il modulo, restituiamo un percorso di fallback
            if ($foundModule === null || ! is_string($foundModule)) {
                return base_path('Modules/'.$moduleName);
            }

            $module_path = base_path('Modules/'.$foundModule);
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/' . $moduleName);
            }

            $module_path = base_path('Modules/' . $foundModule);
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> 17684f52 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            
            $foundModule = collect($files)
                ->filter(
                    static function ($item) use ($moduleNameLower): bool {
                        if (!is_string($item)) {
                            return false;
                        }
                        return Str::lower($item) === $moduleNameLower;
                    }
                )->first();
            
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 2f3197ab (.)
            // Se non troviamo il modulo, restituiamo un percorso di fallback
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/' . $moduleName);
            }

            $module_path = base_path('Modules/' . $foundModule);
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            // Se non troviamo il modulo, restituiamo un percorso di fallback
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/'.$moduleName);
            }
            
            $module_path = base_path('Modules/'.$foundModule);
<<<<<<< HEAD
            // Se non troviamo il modulo, restituiamo un percorso di fallback
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/'.$moduleName);
            }

            $module_path = base_path('Modules/'.$foundModule);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        }

        return $module_path;
    }
}
