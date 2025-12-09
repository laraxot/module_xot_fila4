<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class NotificationData - Gestisce la configurazione delle notifiche per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class NotificationData extends Data
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array  $channels  Canali di notifica disponibili
     * @param  string  $default_channel  Canale predefinito
     * @param  bool  $queue  Se accodare le notifiche
     * @param  array  $mail  Configurazione email di notifica
     * @param  array  $broadcast  Configurazione broadcast
     * @param  array  $slack  Configurazione Slack
     * @param  array  $telegram  Configurazione Telegram
=======
=======
>>>>>>> 5a14301c (.)
     * @param array  $channels        Canali di notifica disponibili
     * @param string $default_channel Canale predefinito
     * @param bool   $queue           Se accodare le notifiche
     * @param array  $mail            Configurazione email di notifica
     * @param array  $broadcast       Configurazione broadcast
     * @param array  $slack           Configurazione Slack
     * @param array  $telegram        Configurazione Telegram
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function __construct(
        public readonly array $channels = ['mail', 'database'],
        public readonly string $default_channel = 'mail',
        public readonly bool $queue = true,
        public readonly array $mail = [
            'template' => 'mail.notification',
            'from' => [
                'address' => 'noreply@example.com',
                'name' => 'Laraxot App',
            ],
        ],
        public readonly array $broadcast = [
            'driver' => 'pusher',
            'app_id' => '',
            'app_key' => '',
            'app_secret' => '',
            'options' => [
                'cluster' => 'eu',
                'encrypted' => true,
            ],
        ],
        public readonly array $slack = [
            'webhook_url' => '',
        ],
        public readonly array $telegram = [
            'bot_token' => '',
            'chat_id' => '',
        ],
    ) {}

    /**
     * Create a new instance of NotificationData with default values.
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
