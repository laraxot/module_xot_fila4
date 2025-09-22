<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD

=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;
>>>>>>> 0e51323 (.)

/**
 * Action per normalizzare i nomi dei driver.
 *
 * Questa action centralizza la logica di normalizzazione dei nomi dei driver
 * per evitare duplicazione di codice e garantire consistenza in tutta l'applicazione.
 */
class NormalizeDriverNameAction
{
<<<<<<< HEAD
=======
    use QueueableAction;
>>>>>>> 0e51323 (.)

    /**
     * Normalizza il nome del driver eliminando caratteri non alfanumerici
     * e gestendo eventuali casi speciali/alias.
     *
<<<<<<< HEAD
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> 0e51323 (.)
     * @return string Nome normalizzato
     */
    public function execute(string $driver): string
    {
        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
<<<<<<< HEAD
=======
        return preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
>>>>>>> 0e51323 (.)
    }
}
