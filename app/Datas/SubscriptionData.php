<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
 * Class SubscriptionData - Gestisce la configurazione degli abbonamenti per il framework Laraxot.
 * Utilizzato esclusivamente nell'ambito dell'architettura Filament-first.
 */
class SubscriptionData extends Data
{
    /**
     * @param  bool  $enable  Se il sistema di abbonamenti è abilitato
     * @param  string  $driver  Driver per gli abbonamenti (stripe, paddle, ecc.)
     * @param  array<string, mixed>  $plans  Piani di abbonamento disponibili
     * @param  string  $currency  Valuta predefinita
     * @param  array<int, class-string>  $allowed_models  Modelli abilitati per gli abbonamenti
     * @param  bool  $trial_enabled  Se abilitare i periodi di prova
     * @param  int  $trial_days  Durata periodo di prova in giorni
     */
    public function __construct(
        public readonly bool $enable = false,
        public readonly string $driver = 'stripe',
        public readonly array $plans = [],
        public readonly string $currency = 'EUR',
        public readonly array $allowed_models = [],
        public readonly bool $trial_enabled = true,
        public readonly int $trial_days = 14,
    ) {}

    /**
     * Create a new instance of SubscriptionData with default values.
     */
    public static function make(): static
    {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return new static;
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
        return new static();
>>>>>>> 3fbbf1f5 (.)
=======
        return new static();
=======
        return new static();
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> 17684f52 (.)
=======
        return new static();
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return new static();
=======
        return new static;
>>>>>>> a12f125f4a (.)
=======
        return new static();
>>>>>>> b93ef594b4 (.)
=======
        return new static;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> ca9324a4 (.)
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        return new static;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return new static;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return new static();
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> ca9324a4 (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return new static();
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return new static();
>>>>>>> 9db27d12 (.)
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return new static();
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> ca9324a4 (.)
=======
        return new static();
>>>>>>> 5a14301c (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return new static();
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return new static();
>>>>>>> ca9324a4 (.)
=======
        return new static();
=======
        return new static;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return new static();
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return new static();
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return new static();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return new static();
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return new static;
>>>>>>> 53d6a6ba (.)
=======
=======
        return new static();
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
    }
}
