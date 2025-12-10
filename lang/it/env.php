<?php

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
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
declare(strict_types=1);





=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
declare(strict_types=1);







return [
    'navigation' => [
        'name' => 'Ambiente',
        'plural' => 'Ambiente',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione delle variabili d\'ambiente e configurazione del sistema',
        ],
        'label' => 'env',
        'sort' => 12,
        'icon' => 'xot-env',
    ],
    'fields' => [
        'key' => [
            'label' => 'Chiave',
            'placeholder' => 'Inserisci la chiave (es. APP_NAME)',
            'help' => 'Nome della variabile d\'ambiente in maiuscolo',
        ],
        'value' => [
            'label' => 'Valore',
            'placeholder' => 'Inserisci il valore',
            'help' => 'Valore della variabile d\'ambiente',
        ],
        'type' => [
            'label' => 'Tipo',
            'placeholder' => 'Seleziona il tipo di variabile',
            'help' => 'Tipo di dato della variabile',
            'options' => [
                'string' => 'Testo',
                'integer' => 'Numero intero',
                'float' => 'Numero decimale',
                'boolean' => 'Booleano',
                'array' => 'Array',
                'null' => 'Nullo',
            ],
        ],
        'environment' => [
            'label' => 'Ambiente',
            'placeholder' => 'Seleziona l\'ambiente di applicazione',
            'help' => 'Ambiente in cui la variabile è attiva',
            'options' => [
                'local' => 'Sviluppo locale',
                'testing' => 'Test',
                'staging' => 'Pre-produzione',
                'production' => 'Produzione',
                'all' => 'Tutti gli ambienti',
            ],
        ],
        'is_sensitive' => [
            'label' => 'Dato Sensibile',
            'help' => 'Indica se il valore contiene dati sensibili da mascherare',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Inserisci una descrizione',
            'help' => 'Descrizione dettagliata dello scopo della variabile',
        ],
        'group' => [
            'label' => 'Gruppo',
            'placeholder' => 'Seleziona il gruppo',
            'help' => 'Gruppo funzionale della variabile',
            'options' => [
                'app' => 'Applicazione',
                'database' => 'Database',
                'mail' => 'Email',
                'queue' => 'Code',
                'cache' => 'Cache',
                'services' => 'Servizi',
                'other' => 'Altro',
            ],
        ],
        'telegram_bot_token' => [
            'description' => 'telegram_bot_token',
            'helper_text' => 'telegram_bot_token',
            'placeholder' => 'telegram_bot_token',
            'label' => 'telegram_bot_token',
        ],
        'google_maps_api_key' => [
            'description' => 'google_maps_api_key',
            'helper_text' => 'google_maps_api_key',
            'placeholder' => 'google_maps_api_key',
            'placeholder' => 'google_maps_api_key',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Nuova Variabile',
            'success' => 'Variabile d\'ambiente creata con successo',
            'error' => 'Errore durante la creazione della variabile',
        ],
        'edit' => [
            'label' => 'Modifica',
            'success' => 'Variabile d\'ambiente aggiornata con successo',
            'error' => 'Errore durante l\'aggiornamento della variabile',
        ],
        'delete' => [
            'label' => 'Elimina',
            'success' => 'Variabile d\'ambiente eliminata con successo',
            'error' => 'Errore durante l\'eliminazione della variabile',
        ],
        'backup' => [
            'label' => 'Backup',
            'success' => 'Backup del file .env creato con successo',
            'error' => 'Errore durante la creazione del backup',
        ],
        'restore' => [
            'label' => 'Ripristina',
            'success' => 'File .env ripristinato con successo',
            'error' => 'Errore durante il ripristino del file',
        ],
        'encrypt' => [
            'label' => 'Cripta',
            'success' => 'Valore criptato con successo',
            'error' => 'Errore durante la criptazione',
        ],
    ],
    'messages' => [
        'validation' => [
            'key' => [
                'required' => 'La chiave è obbligatoria',
                'unique' => 'Questa chiave è già in uso',
                'regex' => 'La chiave può contenere solo lettere maiuscole, numeri e underscore',
                'reserved' => 'Questa chiave è riservata dal sistema',
            ],
            'value' => [
                'required' => 'Il valore è obbligatorio',
                'type' => 'Il valore deve essere del tipo :type',
            ],
            'environment' => [
                'required' => 'L\'ambiente è obbligatorio',
                'exists' => 'L\'ambiente selezionato non è valido',
            ],
        ],
        'warnings' => [
            'production_edit' => 'Attenzione: stai modificando variabili d\'ambiente in produzione',
            'backup_recommended' => 'Si consiglia di effettuare un backup prima di procedere',
            'sensitive_data' => 'Attenzione: questo valore contiene dati sensibili',
            'restart_required' => 'Potrebbe essere necessario riavviare l\'applicazione',
        ],
        'info' => [
            'env_loaded' => 'File .env caricato correttamente',
            'backup_created' => 'Backup creato in :path',
            'changes_saved' => 'Modifiche salvate nel file .env',
        ],
    ],
    'title' => 'env',
];
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
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)
=======
>>>>>>> 0117b849c (.)
=======
=======
>>>>>>> f2dd5676b (.)
return array (
  'navigation' => 
  array (
    'name' => 'Ambiente',
    'plural' => 'Ambiente',
    'group' => 
    array (
      'name' => 'Sistema',
      'description' => 'Gestione delle variabili d\'ambiente e configurazione del sistema',
    ),
    'label' => 'env',
    'sort' => 12,
    'icon' => 'xot-env',
  ),
  'fields' => 
  array (
    'key' => 
    array (
      'label' => 'Chiave',
      'placeholder' => 'Inserisci la chiave (es. APP_NAME)',
      'help' => 'Nome della variabile d\'ambiente in maiuscolo',
    ),
    'value' => 
    array (
      'label' => 'Valore',
      'placeholder' => 'Inserisci il valore',
      'help' => 'Valore della variabile d\'ambiente',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'placeholder' => 'Seleziona il tipo di variabile',
      'help' => 'Tipo di dato della variabile',
      'options' => 
      array (
        'string' => 'Testo',
        'integer' => 'Numero intero',
        'float' => 'Numero decimale',
        'boolean' => 'Booleano',
        'array' => 'Array',
        'null' => 'Nullo',
      ),
    ),
    'environment' => 
    array (
      'label' => 'Ambiente',
      'placeholder' => 'Seleziona l\'ambiente di applicazione',
      'help' => 'Ambiente in cui la variabile è attiva',
      'options' => 
      array (
        'local' => 'Sviluppo locale',
        'testing' => 'Test',
        'staging' => 'Pre-produzione',
        'production' => 'Produzione',
        'all' => 'Tutti gli ambienti',
      ),
    ),
    'is_sensitive' => 
    array (
      'label' => 'Dato Sensibile',
      'help' => 'Indica se il valore contiene dati sensibili da mascherare',
    ),
    'description' => 
    array (
      'label' => 'Descrizione',
      'placeholder' => 'Inserisci una descrizione',
      'help' => 'Descrizione dettagliata dello scopo della variabile',
    ),
    'group' => 
    array (
      'label' => 'Gruppo',
      'placeholder' => 'Seleziona il gruppo',
      'help' => 'Gruppo funzionale della variabile',
      'options' => 
      array (
        'app' => 'Applicazione',
        'database' => 'Database',
        'mail' => 'Email',
        'queue' => 'Code',
        'cache' => 'Cache',
        'services' => 'Servizi',
        'other' => 'Altro',
      ),
    ),
    'telegram_bot_token' => 
    array (
      'description' => 'telegram_bot_token',
      'helper_text' => 'telegram_bot_token',
      'placeholder' => 'telegram_bot_token',
      'label' => 'telegram_bot_token',
    ),
    'google_maps_api_key' => 
    array (
      'description' => 'google_maps_api_key',
      'helper_text' => 'google_maps_api_key',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Nuova Variabile',
      'success' => 'Variabile d\'ambiente creata con successo',
      'error' => 'Errore durante la creazione della variabile',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'success' => 'Variabile d\'ambiente aggiornata con successo',
      'error' => 'Errore durante l\'aggiornamento della variabile',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'success' => 'Variabile d\'ambiente eliminata con successo',
      'error' => 'Errore durante l\'eliminazione della variabile',
    ),
    'backup' => 
    array (
      'label' => 'Backup',
      'success' => 'Backup del file .env creato con successo',
      'error' => 'Errore durante la creazione del backup',
    ),
    'restore' => 
    array (
      'label' => 'Ripristina',
      'success' => 'File .env ripristinato con successo',
      'error' => 'Errore durante il ripristino del file',
    ),
    'encrypt' => 
    array (
      'label' => 'Cripta',
      'success' => 'Valore criptato con successo',
      'error' => 'Errore durante la criptazione',
    ),
  ),
  'messages' => 
  array (
    'validation' => 
    array (
      'key' => 
      array (
        'required' => 'La chiave è obbligatoria',
        'unique' => 'Questa chiave è già in uso',
        'regex' => 'La chiave può contenere solo lettere maiuscole, numeri e underscore',
        'reserved' => 'Questa chiave è riservata dal sistema',
      ),
      'value' => 
      array (
        'required' => 'Il valore è obbligatorio',
        'type' => 'Il valore deve essere del tipo :type',
      ),
      'environment' => 
      array (
        'required' => 'L\'ambiente è obbligatorio',
        'exists' => 'L\'ambiente selezionato non è valido',
      ),
    ),
    'warnings' => 
    array (
      'production_edit' => 'Attenzione: stai modificando variabili d\'ambiente in produzione',
      'backup_recommended' => 'Si consiglia di effettuare un backup prima di procedere',
      'sensitive_data' => 'Attenzione: questo valore contiene dati sensibili',
      'restart_required' => 'Potrebbe essere necessario riavviare l\'applicazione',
    ),
    'info' => 
    array (
      'env_loaded' => 'File .env caricato correttamente',
      'backup_created' => 'Backup creato in :path',
      'changes_saved' => 'Modifiche salvate nel file .env',
    ),
  ),
  'title' => 'env',
);
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
>>>>>>> 851793957 (.)
