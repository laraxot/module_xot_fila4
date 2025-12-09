<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

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
declare(strict_types=1);


<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
declare(strict_types=1);


>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
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
