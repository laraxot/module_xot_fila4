<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

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
use BladeUI\Icons\Factory as IconFactory;
use Exception;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use BladeUI\Icons\Factory as IconFactory;
>>>>>>> 5a14301c (.)
=======
use Exception;
use BladeUI\Icons\Factory as IconFactory;
>>>>>>> 5a14301c (.)
=======
use Exception;
use BladeUI\Icons\Factory as IconFactory;
>>>>>>> 5a14301c (.)
=======
use Exception;
use BladeUI\Icons\Factory as IconFactory;
>>>>>>> 5a14301c (.)
=======
use Exception;
use BladeUI\Icons\Factory as IconFactory;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Facades\App;

/**
 * Verifica l'esistenza di un SVG registrato utilizzando BladeUI Icons.
 *
 * @method bool execute(string $svgName)
 */
class SvgExistsAction
{
    /**
     * Verifica se l'SVG esiste nei set di icone registrati.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
=======
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
>>>>>>> 5a14301c (.)
=======
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
>>>>>>> 5a14301c (.)
=======
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
>>>>>>> 5a14301c (.)
=======
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
>>>>>>> 5a14301c (.)
=======
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
>>>>>>> 5a14301c (.)
     * @return bool true se l'SVG esiste, false altrimenti
     */
    public function execute(string $svgName): bool
    {
        if (empty($svgName)) {
            return false;
        }

        $iconsFactory = App::make(IconFactory::class);
        try {
            $iconsFactory->svg($svgName);
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return false;
        }

        return true;
    }
}
