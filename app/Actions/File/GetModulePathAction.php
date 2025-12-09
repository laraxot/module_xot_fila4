<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\scandir;

<<<<<<< HEAD
=======
=======
=======
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
>>>>>>> origin/develop

use function Safe\scandir;

use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\scandir;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
class GetModulePathAction
{
    use QueueableAction;

    /**
     * Ottiene il percorso di un modulo.
     *
<<<<<<< HEAD
     * @param  string  $moduleName  Il nome del modulo
=======
     * @param string $moduleName Il nome del modulo
<<<<<<< HEAD
     *
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
     * @return string Il percorso completo del modulo
     */
    public function execute(string $moduleName): string
    {
        try {
            $module_path = Module::getModulePath($moduleName);
<<<<<<< HEAD
        } catch (Exception) {
            $modulesPath = base_path('Modules');
<<<<<<< HEAD
<<<<<<< HEAD
            if (! File::exists($modulesPath)) {
                return __DIR__.'/../';
=======
            if (!File::exists($modulesPath)) {
                return __DIR__ . '/../';
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
            }

            $files = scandir($modulesPath);
            $moduleNameLower = Str::lower($moduleName);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

            $foundModule = collect($files)->filter(static function ($item) use ($moduleNameLower): bool {
<<<<<<< HEAD
                if (! is_string($item)) {
                    return false;
                }

=======
                if (!is_string($item)) {
                    return false;
                }
>>>>>>> 5a14301c (.)
                return Str::lower($item) === $moduleNameLower;
            })->first();

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
            // Se non troviamo il modulo, restituiamo un percorso di fallback
<<<<<<< HEAD
            if ($foundModule === null || ! is_string($foundModule)) {
                return base_path('Modules/'.$moduleName);
            }

            $module_path = base_path('Modules/'.$foundModule);
=======
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/' . $moduleName);
            }

            $module_path = base_path('Modules/' . $foundModule);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
=======
>>>>>>> origin/develop
            
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
            // Se non troviamo il modulo, restituiamo un percorso di fallback
            if ($foundModule === null || !is_string($foundModule)) {
                return base_path('Modules/'.$moduleName);
            }
            
            $module_path = base_path('Modules/'.$foundModule);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
        }

        return $module_path;
    }
}
