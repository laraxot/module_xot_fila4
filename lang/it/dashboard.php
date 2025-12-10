<?php

declare(strict_types=1);

return [
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
    // NAVIGATION & STRUCTURE
    'navigation' => [
        'label' => 'Dashboard',
        'plural_label' => 'Dashboard',
        'group' => 'Sistema Xot',
        'icon' => 'heroicon-o-squares-2x2',
        'sort' => 10,
        'badge' => 'Pannello di controllo principale',
        // Legacy support
        'name' => 'dashboard',
        'plural' => 'dashboard',
    ],
    // MODEL INFORMATION
    'model' => [
        'label' => 'Dashboard',
        'plural' => 'Dashboard',
        'description' => 'Pannello di controllo principale del sistema Xot',
    ],
    // FIELDS - STRUTTURA ESPANSA OBBLIGATORIA
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Nome identificativo',
            'helper_text' => 'Nome univoco per identificare l\'elemento',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'placeholder' => 'Seleziona la guardia',
            'tooltip' => 'Sistema di autenticazione',
            'helper_text' => 'Guardia utilizzata per l\'autenticazione',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'placeholder' => 'Seleziona i permessi',
            'tooltip' => 'Permessi associati',
            'helper_text' => 'Elenco dei permessi disponibili',
        ],
        'updated_at' => [
            'label' => 'Aggiornato il',
            'tooltip' => 'Data ultimo aggiornamento',
            'helper_text' => 'Data e ora dell\'ultimo aggiornamento',
        ],
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Nome proprio',
            'helper_text' => 'Nome proprio della persona',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'tooltip' => 'Cognome',
            'helper_text' => 'Cognome della persona',
        ],
        'select_all' => [
            'label' => 'Seleziona Tutti',
            'tooltip' => 'Seleziona tutti gli elementi',
            'helper_text' => 'Seleziona tutti gli elementi disponibili nella lista',
        ],
    ],
    // ACTIONS - STRUTTURA ESPANSA OBBLIGATORIA
    'actions' => [
        'import' => [
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
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
    'resources' => 'Risorse',
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
=======
    // NAVIGATION & STRUCTURE
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
    'navigation' => [
        'label' => 'Dashboard',
        'plural_label' => 'Dashboard',
        'group' => 'Sistema Xot',
        'icon' => 'heroicon-o-squares-2x2',
        'sort' => 10,
        'badge' => 'Pannello di controllo principale',
        // Legacy support
        'name' => 'dashboard',
        'plural' => 'dashboard',
    ],
    // MODEL INFORMATION
    'model' => [
        'label' => 'Dashboard',
        'plural' => 'Dashboard',
        'description' => 'Pannello di controllo principale del sistema Xot',
    ],
    // FIELDS - STRUTTURA ESPANSA OBBLIGATORIA
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Nome identificativo',
            'helper_text' => 'Nome univoco per identificare l\'elemento',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'placeholder' => 'Seleziona la guardia',
            'tooltip' => 'Sistema di autenticazione',
            'helper_text' => 'Guardia utilizzata per l\'autenticazione',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'placeholder' => 'Seleziona i permessi',
            'tooltip' => 'Permessi associati',
            'helper_text' => 'Elenco dei permessi disponibili',
        ],
        'updated_at' => [
            'label' => 'Aggiornato il',
            'tooltip' => 'Data ultimo aggiornamento',
            'helper_text' => 'Data e ora dell\'ultimo aggiornamento',
        ],
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Nome proprio',
            'helper_text' => 'Nome proprio della persona',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'tooltip' => 'Cognome',
            'helper_text' => 'Cognome della persona',
        ],
        'select_all' => [
            'label' => 'Seleziona Tutti',
            'tooltip' => 'Seleziona tutti gli elementi',
            'helper_text' => 'Seleziona tutti gli elementi disponibili nella lista',
        ],
    ],
    // ACTIONS - STRUTTURA ESPANSA OBBLIGATORIA
    'actions' => [
        'import' => [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 5e6e0d054 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 5e6e0d054 (.)
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
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
=======
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
    ],
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
=======
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
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
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
];
