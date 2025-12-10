<?php

declare(strict_types=1);


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
>>>>>>> 5a14301c (.)
=======

>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
declare(strict_types=1);




declare(strict_types=1);



<<<<<<< HEAD

declare(strict_types=1);


=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
declare(strict_types=1);


>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 218dfed3 (.)

<<<<<<< HEAD

declare(strict_types=1);



declare(strict_types=1);





declare(strict_types=1);



declare(strict_types=1);





declare(strict_types=1);





declare(strict_types=1);


declare(strict_types=1);




declare(strict_types=1);




=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> a67e542f (.)
return [
    'navigation' => [
        'name' => 'Comandi Artisan',
        'plural' => 'Comandi Artisan',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione dei comandi Artisan',
        ],
        'sort' => '28',
        'label' => 'Comandi Artisan',
        'icon' => 'heroicon-o-command-line',
    ],
    'pages' => [
        'artisan-commands' => [
            'title' => 'Gestione Comandi Artisan',
            'description' => 'Esegui e gestisci i comandi Artisan',
            'commands' => [
                'migrate' => [
                    'label' => 'Migrazione Database',
                    'description' => 'Esegue le migrazioni del database',
                ],
                'optimize' => [
                    'label' => 'Ottimizzazione',
                    'description' => 'Ottimizza le prestazioni dell\'applicazione',
                ],
                'cache' => [
                    'label' => 'Gestione Cache',
                    'description' => 'Comandi per la gestione della cache',
                ],
            ],
            'notifications' => [
                'success' => 'Comando eseguito con successo',
                'error' => 'Errore nell\'esecuzione del comando',
            ],
        ],
    ],
    'actions' => [
        'queue_restart' => [
            'label' => 'queue_restart',
        ],
        'event_cache' => [
            'label' => 'event_cache',
        ],
        'route_cache' => [
            'label' => 'route_cache',
        ],
        'config_cache' => [
            'label' => 'config_cache',
        ],
        'view_cache' => [
            'label' => 'view_cache',
        ],
        'filament_optimize' => [
            'label' => 'filament_optimize',
        ],
        'filament_upgrade' => [
            'label' => 'filament_upgrade',
        ],
        'migrate' => [
            'label' => 'migrate',
        ],
    ],
    'title' => 'artisan commands manager',
];
