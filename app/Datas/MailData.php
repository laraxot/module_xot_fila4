<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class MailData - Gestisce la configurazione delle email per il framework Laraxot.
 * Utilizzato nel contesto dell'architettura Filament-first senza controller tradizionali.
 */
class MailData extends Data
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $driver  Driver per l'invio delle email
     * @param  string  $host  Host SMTP
     * @param  int  $port  Porta SMTP
     * @param  string  $encryption  Tipo di encryption (tls, ssl)
     * @param  string  $username  Username SMTP
     * @param  string  $password  Password SMTP
     * @param  string  $from_address  Indirizzo mittente
     * @param  string  $from_name  Nome mittente
     * @param  string|null  $reply_to  Indirizzo per le risposte
     * @param  bool  $verify_peer  Verifica certificato peer SSL
=======
=======
>>>>>>> 5a14301c (.)
     * @param string $driver         Driver per l'invio delle email
     * @param string $host           Host SMTP
     * @param int         $port           Porta SMTP
     * @param string $encryption     Tipo di encryption (tls, ssl)
     * @param string $username       Username SMTP
     * @param string $password       Password SMTP
     * @param string $from_address   Indirizzo mittente
     * @param string $from_name      Nome mittente
     * @param string|null $reply_to       Indirizzo per le risposte
     * @param bool        $verify_peer    Verifica certificato peer SSL
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function __construct(
        public readonly string $driver = 'smtp',
        public readonly string $host = 'smtp.mailtrap.io',
        public readonly int $port = 2525,
        public readonly string $encryption = 'tls',
        public readonly string $username = '',
        public readonly string $password = '',
        public readonly string $from_address = 'no-reply@example.com',
        public readonly string $from_name = 'Laraxot App',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public readonly ?string $reply_to = null,
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        public readonly null|string $reply_to = null,
>>>>>>> 5a14301c (.)
=======
        public readonly null|string $reply_to = null,
>>>>>>> 3fbbf1f5 (.)
=======
        public readonly null|string $reply_to = null,
>>>>>>> 5a14301c (.)
        public readonly bool $verify_peer = true,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public readonly null|string $reply_to = null,
        public readonly bool $verify_peer = true,
    ) {}
=======
=======
>>>>>>> origin/develop
        public readonly ?string $reply_to = null,
        public readonly bool $verify_peer = true,
    ) {
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        public readonly null|string $reply_to = null,
        public readonly bool $verify_peer = true,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    /**
     * Create a new instance of MailData with default values.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public static function make(): static
    {
        return new static;
=======
=======
>>>>>>> 5a14301c (.)
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    }
}
