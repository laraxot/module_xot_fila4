<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======

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
return [
    'pages' => [
        'artisan-commands-manager' => [
            'navigation_label' => 'Gestione Artisan',
            'navigation_group' => 'Sistema',
            'navigation_icon' => 'xot::terminal',
            'title' => 'Gestione Comandi Artisan',
            'commands' => [
                'migrate' => [
                    'label' => 'Migrate Database',
                    'icon' => 'xot::database-update',
                ],
                'filament_upgrade' => [
                    'label' => 'Upgrade Filament',
                    'icon' => 'xot::upgrade',
                ],
                'filament_optimize' => [
                    'label' => 'Optimize Filament',
                    'icon' => 'xot::optimize',
                ],
                'view_cache' => [
                    'label' => 'Cache Views',
                    'icon' => 'xot::view-cache',
                ],
                'config_cache' => [
                    'label' => 'Cache Config',
                    'icon' => 'xot::config-cache',
                ],
                'route_cache' => [
                    'label' => 'Cache Routes',
                    'icon' => 'xot::route-cache',
                ],
                'event_cache' => [
                    'label' => 'Cache Events',
                    'icon' => 'xot::event-cache',
                ],
                'queue_restart' => [
                    'label' => 'Restart Queue',
                    'icon' => 'xot::queue-restart',
                ],
            ],
            'status' => [
                'completed' => 'Completato',
                'failed' => 'Fallito',
                'waiting' => 'In attesa dell\'output...',
            ],
            'messages' => [
                'command_started' => 'Comando avviato',
                'command_completed' => 'Il comando :command è stato eseguito con successo',
                'command_failed' => 'Il comando :command è fallito',
            ],
        ],
    ],
];
