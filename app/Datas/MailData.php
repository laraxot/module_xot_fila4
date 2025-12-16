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
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
        public readonly ?string $reply_to = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
        public readonly ?string $reply_to = null,
        public readonly ?string $reply_to = null,
        public readonly ?string $reply_to = null,
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
        public readonly ?string $reply_to = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        public readonly null|string $reply_to = null,
        public readonly null|string $reply_to = null,
        public readonly null|string $reply_to = null,
        public readonly null|string $reply_to = null,
        public readonly null|string $reply_to = null,
        public readonly null|string $reply_to = null,
        public readonly null|string $reply_to = null,
        public readonly bool $verify_peer = true,
    ) {}
        public readonly ?string $reply_to = null,
        public readonly bool $verify_peer = true,
    ) {
    }
        public readonly null|string $reply_to = null,
=======
        public readonly ?string $reply_to = null,
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        public readonly bool $verify_peer = true,
    ) {}

    /**
     * Create a new instance of MailData with default values.
     */
    public static function make(): static
    {
        return new static;
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }
}
