<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use BladeUI\Icons\Factory as IconFactory;
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
     * @param string $svgName Il nome dell'SVG da verificare (es: 'heroicon-o-user')
     *
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
