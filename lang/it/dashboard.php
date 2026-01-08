<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'resources' => 'Risorse',
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
=======
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    // NAVIGATION & STRUCTURE
>>>>>>> 48515e368 (.)
    'navigation' => [
        'name' => 'dashboard',
        'plural' => 'dashboard',
        'group' => [
            'name' => '',
        ],
    ],
    'fields' => [
        'name' => 'Nome',
        'guard_name' => 'Guard',
        'permissions' => 'Permessi',
        'updated_at' => 'Aggiornato il',
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'select_all' => [
            'name' => 'Seleziona Tutti',
            'message' => '',
        ],
    ],
    'actions' => [
        'import' => [
<<<<<<< HEAD
=======
            'label' => 'Importa Dati',
            'icon' => 'heroicon-o-arrow-up-tray',
            'color' => 'info',
            'tooltip' => 'Importa dati da file esterno',
            'modal' => [
                'heading' => 'Importa Dati',
                'description' => 'Seleziona un file da importare nel sistema',
                'confirm' => 'Importa',
                'cancel' => 'Annulla',
            ],
            'messages' => [
                'success' => 'Dati importati con successo',
                'error' => 'Errore durante l\'importazione',
            ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    'resources' => 'Risorse',
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'dashboard',
        'plural' => 'dashboard',
        'group' => [
            'name' => '',
        ],
    ],
    'fields' => [
        'name' => 'Nome',
        'guard_name' => 'Guard',
        'permissions' => 'Permessi',
        'updated_at' => 'Aggiornato il',
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'select_all' => [
            'name' => 'Seleziona Tutti',
            'message' => '',
        ],
    ],
    'actions' => [
        'import' => [
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            'label' => 'Esporta Dati',
            'icon' => 'heroicon-o-arrow-down-tray',
            'color' => 'success',
            'tooltip' => 'Esporta dati in formato file',
            'modal' => [
                'heading' => 'Esporta Dati',
                'description' => 'Seleziona il formato di esportazione',
                'confirm' => 'Esporta',
                'cancel' => 'Annulla',
            ],
            'messages' => [
                'success' => 'Dati esportati con successo',
                'error' => 'Errore durante l\'esportazione',
            ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    // SECTIONS - ORGANIZZAZIONE FORM
    'sections' => [
        'overview' => [
            'label' => 'Panoramica',
            'description' => 'Statistiche e informazioni generali',
            'icon' => 'heroicon-o-chart-bar',
        ],
        'widgets' => [
            'label' => 'Widgets',
            'description' => 'Componenti della dashboard',
            'icon' => 'heroicon-o-squares-plus',
        ],
        'resources' => [
            'label' => 'Risorse',
            'description' => 'Risorse del sistema',
            'icon' => 'heroicon-o-folder',
        ],
    ],
    // MESSAGES - FEEDBACK UTENTE
    'messages' => [
        'empty_state' => 'Nessun elemento trovato nella dashboard',
        'search_placeholder' => 'Cerca nella dashboard...',
        'loading' => 'Caricamento dashboard in corso...',
        'total_count' => 'Totale elementi: :count',
        'error_general' => 'Si è verificato un errore nella dashboard',
        'success_operation' => 'Operazione dashboard completata con successo',
    ],
    // COMPONENTS - COMPONENTI DASHBOARD
    'components' => [
        'resources' => 'Risorse',
        'pages' => 'Pagine',
        'widgets' => 'Widgets',
    ],
    // LEGACY SUPPORT - Compatibilità con codice esistente
    'resources' => 'Risorse',
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
];
