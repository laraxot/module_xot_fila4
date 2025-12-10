<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

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
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
>>>>>>> 62cc8443 (.)

<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)
use Spatie\QueueableAction\QueueableAction;


use function Safe\preg_replace;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> ecd5ec32 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use function Safe\preg_replace;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
=======
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
>>>>>>> 5a14301c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)

/**
 * Action per normalizzare i nomi dei driver.
<<<<<<< HEAD
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
 * Questa action centralizza la logica di normalizzazione dei nomi dei driver
 * per evitare duplicazione di codice e garantire consistenza in tutta l'applicazione.
 */
class NormalizeDriverNameAction
{
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 62cc8443 (.)
    use QueueableAction;
    use QueueableAction;
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
    use QueueableAction;
    use QueueableAction;
    use QueueableAction;
    use QueueableAction;
<<<<<<< HEAD
    use QueueableAction;
    use QueueableAction;
    use QueueableAction;
    use QueueableAction;
    use QueueableAction;
    use QueueableAction;

    use QueueableAction;

    use QueueableAction;

    use QueueableAction;

=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    use QueueableAction;
>>>>>>> b7ea1cd1 (.)

>>>>>>> 5a14301c (.)
=======
>>>>>>> 62cc8443 (.)
    use QueueableAction;

    use QueueableAction;

    /**
     * Normalizza il nome del driver eliminando caratteri non alfanumerici
     * e gestendo eventuali casi speciali/alias.
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 62cc8443 (.)
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
<<<<<<< HEAD
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
     * @param  string  $driver  Nome del driver da normalizzare
     * @param string $driver Nome del driver da normalizzare
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
     * @param  string  $driver  Nome del driver da normalizzare
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> 16dc7ab0 (.)
>>>>>>> 01502290 (.)
     * @return string Nome normalizzato
     */
    public function execute(string $driver): string
    {
        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
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
<<<<<<< HEAD
        $driver = preg_replace('/[^a-zA-Z0-9]/', '', $driver);

        return strtolower($driver);
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
>>>>>>> 01502290 (.)
        $result = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));

        // Assicuriamo che il risultato sia sempre una stringa
        return is_string($result) ? $result : '';
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
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 62cc8443 (.)
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 62cc8443 (.)
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
<<<<<<< HEAD
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
>>>>>>> 01502290 (.)
    }
<<<<<<< HEAD
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
} 
=======
=======
} 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> f1d4085 (.)
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
