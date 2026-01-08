<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

use function Safe\preg_replace;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0e51323 (.)
=======
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
use function Safe\preg_replace;
<<<<<<< HEAD
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
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
>>>>>>> 48515e368 (.)

/**
 * Action per normalizzare i nomi dei driver.
<<<<<<< HEAD
<<<<<<< HEAD
 *
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
=======
 *
>>>>>>> 300ef70 (.)
 * Questa action centralizza la logica di normalizzazione dei nomi dei driver
 * per evitare duplicazione di codice e garantire consistenza in tutta l'applicazione.
 */
class NormalizeDriverNameAction
{
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 472bd9dc (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> b7ea1cd1 (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> 16dc7ab0 (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
     * @param  string  $driver  Nome del driver da normalizzare
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> 0218cd5 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
        $driver = preg_replace('/[^a-zA-Z0-9]/', '', $driver);
        Assert::string($driver, 'Driver name must be a string after normalization');

        return strtolower($driver);
<<<<<<< HEAD
=======
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
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
        $result = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));

        // Assicuriamo che il risultato sia sempre una stringa
        return is_string($result) ? $result : '';
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
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> 0e51323 (.)
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> 0218cd5 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
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
=======
}
>>>>>>> 300ef70 (.)
