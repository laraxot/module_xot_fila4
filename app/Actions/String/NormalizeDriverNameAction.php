<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 43d67f21 (.)
use Spatie\QueueableAction\QueueableAction;

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

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0e51323 (.)
=======
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
use function Safe\preg_replace;
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
>>>>>>> 5a14301c (.)

/**
 * Action per normalizzare i nomi dei driver.
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
 * Questa action centralizza la logica di normalizzazione dei nomi dei driver
 * per evitare duplicazione di codice e garantire consistenza in tutta l'applicazione.
 */
class NormalizeDriverNameAction
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    use QueueableAction;
<<<<<<< HEAD
=======
>>>>>>> 0e51323 (.)
=======
    use QueueableAction;
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    use QueueableAction;
>>>>>>> 43d67f21 (.)

>>>>>>> 5a14301c (.)
=======
    use QueueableAction;

>>>>>>> 5a14301c (.)
    /**
     * Normalizza il nome del driver eliminando caratteri non alfanumerici
     * e gestendo eventuali casi speciali/alias.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param string $driver Nome del driver da normalizzare
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> 43d67f21 (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> 5842a556 (.)
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> 5a14301c (.)
     * @return string Nome normalizzato
     */
    public function execute(string $driver): string
    {
        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
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
        $result = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));

        // Assicuriamo che il risultato sia sempre una stringa
        return is_string($result) ? $result : '';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> 0e51323 (.)
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> 5a14301c (.)
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> f1d4085 (.)
