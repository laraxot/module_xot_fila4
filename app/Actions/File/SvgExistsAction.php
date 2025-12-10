<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Exception;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Exception;
use BladeUI\Icons\Factory as IconFactory;
use Exception;
use BladeUI\Icons\Factory as IconFactory;
use Exception;
use BladeUI\Icons\Factory as IconFactory;
use Exception;
use BladeUI\Icons\Factory as IconFactory;
use Exception;
use BladeUI\Icons\Factory as IconFactory;
use Exception;
use BladeUI\Icons\Factory as IconFactory;
=======
use BladeUI\Icons\Factory as IconFactory;
use Exception;
>>>>>>> 551c768c4 (.)
=======
use BladeUI\Icons\Factory as IconFactory;
use Exception;
>>>>>>> 414a4ffcb (.)
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
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
=======
     * @param  string  $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
>>>>>>> 551c768c4 (.)
=======
     * @param  string  $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        } catch (Exception $e) {
>>>>>>> 091f883c (.)
=======
        } catch (Exception $e) {
>>>>>>> 414a4ffcb (.)
            return false;
        }

        return true;
    }
}
