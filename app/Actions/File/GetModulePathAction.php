<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\scandir;

<<<<<<< HEAD
=======

use function Safe\scandir;

use Spatie\QueueableAction\QueueableAction;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
class GetModulePathAction
{
    use QueueableAction;

    /**
     * Ottiene il percorso di un modulo.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $moduleName  Il nome del modulo
=======
     * @param string $moduleName Il nome del modulo
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
     * @param string $moduleName Il nome del modulo
     *
>>>>>>> 5a14301c (.)
=======
=======
     * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
     *
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
     * @return string Il percorso completo del modulo
     */
    public function execute(string $moduleName): string
    {
        try {
            $module_path = Module::getModulePath($moduleName);
        } catch (Exception) {
            $modulesPath = base_path('Modules');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
        } catch (Exception) {
            $modulesPath = base_path('Modules');
<<<<<<< HEAD
<<<<<<< HEAD
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
        } catch (\Exception) {
            $modulesPath = base_path('Modules');
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
=======
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
            }

            $files = scandir($modulesPath);
            $moduleNameLower = Str::lower($moduleName);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

            $foundModule = collect($files)->filter(static function ($item) use ($moduleNameLower): bool {
<<<<<<< HEAD
<<<<<<< HEAD
                if (! is_string($item)) {
                    return false;
                }

=======
                if (!is_string($item)) {
                    return false;
                }
>>>>>>> 5a14301c (.)
=======
                if (!is_string($item)) {
                    return false;
                }
>>>>>>> 5a14301c (.)
                return Str::lower($item) === $moduleNameLower;
            })->first();

            // Se non troviamo il modulo, restituiamo un percorso di fallback
<<<<<<< HEAD
<<<<<<< HEAD
            if ($foundModule === null || ! is_string($foundModule)) {
                return base_path('Modules/'.$moduleName);
            }

            $module_path = base_path('Modules/'.$foundModule);
=======
=======
>>>>>>> 5a14301c (.)
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/' . $moduleName);
            }

            $module_path = base_path('Modules/' . $foundModule);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> ed734516 (.)
            
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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
            // Se non troviamo il modulo, restituiamo un percorso di fallback
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/' . $moduleName);
            }
<<<<<<< HEAD
            
            $module_path = base_path('Modules/'.$foundModule);
>>>>>>> a12f125f4a (.)
=======

            $module_path = base_path('Modules/' . $foundModule);
>>>>>>> b93ef594b4 (.)
=======
=======
>>>>>>> ed734516 (.)
            // Se non troviamo il modulo, restituiamo un percorso di fallback
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/'.$moduleName);
            }
            
            $module_path = base_path('Modules/'.$foundModule);
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
        }

        return $module_path;
    }
}
