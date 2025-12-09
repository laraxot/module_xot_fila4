<?php

<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
return [
    'navigation' => [
        'name' => 'Cache Lock',
        'plural' => 'Cache Locks',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione dei lock di cache',
        ],
        'label' => 'cache-lock',
        'sort' => '20',
        'icon' => 'xot-lock',
    ],
    'fields' => [
        'key' => [
            'label' => 'Chiave',
            'placeholder' => 'Inserisci la chiave del lock',
            'help' => 'Identificativo univoco del lock in cache',
        ],
        'owner' => [
            'label' => 'Proprietario',
            'placeholder' => 'Identificativo del proprietario',
            'help' => 'Identificativo del processo che detiene il lock',
        ],
        'expiration' => [
            'label' => 'Scadenza',
            'placeholder' => 'Timestamp di scadenza',
            'help' => 'Momento in cui il lock scadrà automaticamente',
        ],
    ],
    'actions' => [
        'view' => [
            'label' => 'Visualizza',
            'success' => 'Lock visualizzato',
            'error' => 'Impossibile visualizzare il lock',
        ],
        'delete' => [
            'label' => 'Elimina',
            'success' => 'Lock eliminato con successo',
            'error' => 'Impossibile eliminare il lock',
            'confirm' => 'Sei sicuro di voler eliminare questo lock?',
        ],
        'release' => [
            'label' => 'Rilascia',
            'success' => 'Lock rilasciato con successo',
            'error' => 'Impossibile rilasciare il lock',
        ],
        'refresh' => [
            'label' => 'Aggiorna',
            'success' => 'Lock aggiornato',
            'error' => 'Impossibile aggiornare il lock',
        ],
    ],
    'messages' => [
        'status' => [
            'active' => 'Lock attivo',
            'expired' => 'Lock scaduto',
            'released' => 'Lock rilasciato',
        ],
        'errors' => [
            'not_found' => 'Lock non trovato',
            'already_acquired' => 'Lock già acquisito',
            'expired' => 'Lock scaduto',
            'permission' => 'Permessi insufficienti',
        ],
        'warnings' => [
            'expiring_soon' => 'Il lock scadrà a breve',
            'stale_lock' => 'Lock potenzialmente bloccato',
        ],
        'info' => [
            'auto_release' => 'Il lock verrà rilasciato automaticamente alla scadenza',
            'lock_extended' => 'Durata del lock estesa',
        ],
    ],
];
