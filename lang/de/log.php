<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======

>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======

>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
declare(strict_types=1);


>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 88ea7103 (.)
return [
    'navigation' => [
        'name' => 'Log',
        'plural' => 'Logs',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione e monitoraggio dei log di sistema',
        ],
        'label' => 'log',
        'sort' => '15',
        'icon' => 'xot-log',
    ],
    'fields' => [
        'level' => [
            'label' => 'Livello',
            'placeholder' => 'Seleziona il livello',
            'help' => 'Livello di gravità del log',
            'options' => [
                'debug' => 'Debug',
                'info' => 'Informazione',
                'notice' => 'Avviso',
                'warning' => 'Attenzione',
                'error' => 'Errore',
                'critical' => 'Critico',
                'alert' => 'Allarme',
                'emergency' => 'Emergenza',
            ],
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Contenuto del messaggio',
            'help' => 'Descrizione dettagliata dell\'evento registrato',
        ],
        'context' => [
            'label' => 'Contesto',
            'placeholder' => 'Informazioni contestuali',
            'help' => 'Dati aggiuntivi relativi all\'evento',
        ],
        'channel' => [
            'label' => 'Canale',
            'placeholder' => 'Seleziona il canale',
            'help' => 'Canale di registrazione del log',
            'options' => [
                'stack' => 'Stack',
                'single' => 'File Singolo',
                'daily' => 'Giornaliero',
                'slack' => 'Slack',
                'syslog' => 'Syslog',
                'errorlog' => 'Error Log',
                'papertrail' => 'Papertrail',
                'discord' => 'Discord',
            ],
        ],
        'timestamp' => [
            'label' => 'Data e Ora',
            'help' => 'Momento esatto della registrazione',
        ],
        'file' => [
            'label' => 'File',
            'help' => 'File sorgente dell\'evento',
        ],
        'line' => [
            'label' => 'Linea',
            'help' => 'Numero di linea nel file sorgente',
        ],
        'stack_trace' => [
            'label' => 'Stack Trace',
            'help' => 'Traccia dello stack per debug',
        ],
        'user' => [
            'label' => 'Utente',
            'help' => 'Utente che ha generato l\'evento',
        ],
        'ip' => [
            'label' => 'Indirizzo IP',
            'help' => 'IP di origine dell\'evento',
        ],
        'user_agent' => [
            'label' => 'User Agent',
            'help' => 'Browser o applicazione client',
        ],
    ],
    'actions' => [
        'view' => [
            'label' => 'Visualizza',
            'success' => 'Log visualizzato con successo',
            'error' => 'Errore durante la visualizzazione del log',
        ],
        'download' => [
            'label' => 'Scarica',
            'success' => 'Log scaricato con successo',
            'error' => 'Errore durante il download del log',
        ],
        'clear' => [
            'label' => 'Svuota',
            'success' => 'Log svuotati con successo',
            'error' => 'Errore durante la pulizia dei log',
            'confirm' => 'Sei sicuro di voler eliminare tutti i log?',
        ],
        'search' => [
            'label' => 'Cerca',
            'placeholder' => 'Cerca nei log...',
            'help' => 'Ricerca full-text nei messaggi di log',
        ],
        'filter' => [
            'label' => 'Filtra',
            'placeholder' => 'Filtra per livello...',
            'help' => 'Filtra i log per livello di gravità',
        ],
        'export' => [
            'label' => 'Esporta',
            'filename_prefix' => 'Log_Sistema_',
            'success' => 'Log esportati con successo',
            'error' => 'Errore durante l\'esportazione dei log',
        ],
        'archive' => [
            'label' => 'Archivia',
            'success' => 'Log archiviati con successo',
            'error' => 'Errore durante l\'archiviazione dei log',
        ],
    ],
    'messages' => [
        'empty' => 'Nessun log trovato nel periodo selezionato',
        'cleared' => 'I log sono stati svuotati correttamente',
        'archived' => 'I log sono stati archiviati correttamente',
        'errors' => [
            'download' => 'Impossibile scaricare il file di log',
            'clear' => 'Impossibile svuotare i log',
            'permission' => 'Permessi insufficienti per gestire i log',
            'file_corrupted' => 'Il file di log risulta corrotto',
            'disk_full' => 'Spazio su disco insufficiente',
        ],
        'warnings' => [
            'size' => 'I file di log occupano molto spazio',
            'rotation' => 'La rotazione dei log potrebbe fallire',
            'old_logs' => 'Presenza di log molto vecchi',
        ],
    ],
    'settings' => [
        'retention' => [
            'label' => 'Periodo di conservazione',
            'help' => 'Giorni di mantenimento dei log',
            'options' => [
                '7' => '1 settimana',
                '14' => '2 settimane',
                '30' => '1 mese',
                '90' => '3 mesi',
                '180' => '6 mesi',
                '365' => '1 anno',
            ],
        ],
        'max_files' => [
            'label' => 'Numero massimo file',
            'help' => 'Limite di file di log da mantenere',
            'placeholder' => 'Inserisci il numero massimo',
        ],
        'rotation' => [
            'label' => 'Rotazione',
            'help' => 'Impostazioni di rotazione dei log',
            'options' => [
                'size' => 'Per dimensione',
                'time' => 'Per tempo',
                'both' => 'Entrambi',
            ],
        ],
    ],
];
