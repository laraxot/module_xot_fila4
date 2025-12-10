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
declare(strict_types=1);





=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
declare(strict_types=1);







return [
    'fields' => [
        'view' => [
            'label' => 'Visualizza',
            'description' => 'Visualizza dettagli elemento',
            'placeholder' => 'Clicca per visualizzare',
            'help' => 'Visualizza i dettagli completi dell\'elemento selezionato',
        ],
        'delete' => [
            'label' => 'Elimina',
            'description' => 'Elimina elemento',
            'placeholder' => 'Clicca per eliminare',
            'help' => 'Elimina definitivamente l\'elemento selezionato',
        ],
        'edit' => [
            'label' => 'Modifica',
            'description' => 'Modifica elemento',
            'placeholder' => 'Clicca per modificare',
            'help' => 'Modifica i dati dell\'elemento selezionato',
        ],
        'detach' => [
            'label' => 'Scollega',
            'description' => 'Scollega elemento',
            'placeholder' => 'Clicca per scollegare',
            'help' => 'Rimuovi la connessione con l\'elemento selezionato',
        ],
        'attach' => [
            'label' => 'Collega',
            'description' => 'Collega elemento',
            'placeholder' => 'Clicca per collegare',
            'help' => 'Crea una connessione con l\'elemento selezionato',
        ],
        'pregnancy_certificate' => [
            'label' => 'Certificato di Gravidanza',
            'description' => 'Documento attestante lo stato di gravidanza',
            'placeholder' => 'Carica certificato di gravidanza',
            'help' => 'Carica il certificato medico che attesta lo stato di gravidanza',
        ],
        'health_card' => [
            'label' => 'Tessera Sanitaria',
            'description' => 'Tessera sanitaria del Sistema Sanitario Nazionale',
            'placeholder' => 'Carica tessera sanitaria',
            'help' => 'Carica la foto fronte/retro della tessera sanitaria',
        ],
        'identity_document' => [
            'label' => 'Documento di Identità',
            'description' => 'Documento di identità valido (CI, Patente, Passaporto)',
            'placeholder' => 'Carica documento di identità',
            'help' => 'Carica un documento di identità valido e non scaduto',
        ],
        'isee_certificate' => [
            'label' => 'Certificazione ISEE',
            'description' => 'Indicatore della Situazione Economica Equivalente',
            'placeholder' => 'Carica certificazione ISEE',
            'help' => 'Carica la certificazione ISEE per eventuali agevolazioni economiche',
        ],
        'certifications' => [
            'label' => 'Certificazioni',
            'description' => 'Certificazioni e documenti aggiuntivi',
            'placeholder' => 'Carica certificazioni',
            'help' => 'Carica eventuali certificazioni mediche o documenti aggiuntivi richiesti',
        ],
        'certification' => [
            'label' => 'Certificato',
            'description' => 'Certificato medico o documentazione sanitaria',
            'placeholder' => 'Carica certificato',
            'help' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
        ],
        'doctor_certificate' => [
            'label' => 'Certificato Medico',
            'description' => 'Certificato di abilitazione o iscrizione all\'Ordine',
            'placeholder' => 'Carica certificato medico',
            'help' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
        ],
    ],
    'validation' => [
        'required' => [
            'label' => 'Campo obbligatorio',
            'description' => 'Questo campo è obbligatorio e deve essere compilato',
        ],
        'email' => [
            'label' => 'Email non valida',
            'description' => 'Inserisci un indirizzo email valido',
        ],
        'numeric' => [
            'label' => 'Deve essere un numero',
            'description' => 'Questo campo deve contenere solo numeri',
        ],
        'date' => [
            'label' => 'Data non valida',
            'description' => 'Inserisci una data valida nel formato richiesto',
        ],
        'file' => [
            'label' => 'File non valido',
            'description' => 'Il file caricato non è valido o è troppo grande',
        ],
    ],
    'actions' => [
        'submit' => [
            'label' => 'submit',
        ],
    ],
    'steps' => [
        'confirm_step' => [
            'label' => 'confirm_step',
        ],
        'date_step' => [
            'label' => 'date_step',
        ],
        'studio_step' => [
            'label' => 'studio_step',
        ],
        'search_step' => [
            'label' => 'search_step',
        ],
        'delete' => [
            'label' => 'delete',
        ],
        'edit' => [
            'label' => 'edit',
        ],
        'detach' => [
            'label' => 'detach',
        ],
        'attach' => [
            'label' => 'attach',
        ],
    ],
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
return array (
  'fields' => 
  array (
    'view' => 
    array (
      'label' => 'Visualizza',
      'description' => 'Visualizza dettagli elemento',
      'placeholder' => 'Clicca per visualizzare',
      'help' => 'Visualizza i dettagli completi dell\'elemento selezionato',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'description' => 'Elimina elemento',
      'placeholder' => 'Clicca per eliminare',
      'help' => 'Elimina definitivamente l\'elemento selezionato',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'description' => 'Modifica elemento',
      'placeholder' => 'Clicca per modificare',
      'help' => 'Modifica i dati dell\'elemento selezionato',
    ),
    'detach' => 
    array (
      'label' => 'Scollega',
      'description' => 'Scollega elemento',
      'placeholder' => 'Clicca per scollegare',
      'help' => 'Rimuovi la connessione con l\'elemento selezionato',
    ),
    'attach' => 
    array (
      'label' => 'Collega',
      'description' => 'Collega elemento',
      'placeholder' => 'Clicca per collegare',
      'help' => 'Crea una connessione con l\'elemento selezionato',
    ),
    'pregnancy_certificate' => 
    array (
      'label' => 'Certificato di Gravidanza',
      'description' => 'Documento attestante lo stato di gravidanza',
      'placeholder' => 'Carica certificato di gravidanza',
      'help' => 'Carica il certificato medico che attesta lo stato di gravidanza',
    ),
    'health_card' => 
    array (
      'label' => 'Tessera Sanitaria',
      'description' => 'Tessera sanitaria del Sistema Sanitario Nazionale',
      'placeholder' => 'Carica tessera sanitaria',
      'help' => 'Carica la foto fronte/retro della tessera sanitaria',
    ),
    'identity_document' => 
    array (
      'label' => 'Documento di Identità',
      'description' => 'Documento di identità valido (CI, Patente, Passaporto)',
      'placeholder' => 'Carica documento di identità',
      'help' => 'Carica un documento di identità valido e non scaduto',
    ),
    'isee_certificate' => 
    array (
      'label' => 'Certificazione ISEE',
      'description' => 'Indicatore della Situazione Economica Equivalente',
      'placeholder' => 'Carica certificazione ISEE',
      'help' => 'Carica la certificazione ISEE per eventuali agevolazioni economiche',
    ),
    'certifications' => 
    array (
      'label' => 'Certificazioni',
      'description' => 'Certificazioni e documenti aggiuntivi',
      'placeholder' => 'Carica certificazioni',
      'help' => 'Carica eventuali certificazioni mediche o documenti aggiuntivi richiesti',
    ),
    'certification' => 
    array (
      'label' => 'Certificato',
      'description' => 'Certificato medico o documentazione sanitaria',
      'placeholder' => 'Carica certificato',
      'help' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
    ),
    'doctor_certificate' => 
    array (
      'label' => 'Certificato Medico',
      'description' => 'Certificato di abilitazione o iscrizione all\'Ordine',
      'placeholder' => 'Carica certificato medico',
      'help' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
    ),
  ),
  'validation' => 
  array (
    'required' => 
    array (
      'label' => 'Campo obbligatorio',
      'description' => 'Questo campo è obbligatorio e deve essere compilato',
    ),
    'email' => 
    array (
      'label' => 'Email non valida',
      'description' => 'Inserisci un indirizzo email valido',
    ),
    'numeric' => 
    array (
      'label' => 'Deve essere un numero',
      'description' => 'Questo campo deve contenere solo numeri',
    ),
    'date' => 
    array (
      'label' => 'Data non valida',
      'description' => 'Inserisci una data valida nel formato richiesto',
    ),
    'file' => 
    array (
      'label' => 'File non valido',
      'description' => 'Il file caricato non è valido o è troppo grande',
    ),
  ),
  'actions' => 
  array (
    'submit' => 
    array (
      'label' => 'submit',
    ),
  ),
  'steps' => 
  array (
    'confirm_step' => 
    array (
      'label' => 'confirm_step',
    ),
    'date_step' => 
    array (
      'label' => 'date_step',
    ),
    'studio_step' => 
    array (
      'label' => 'studio_step',
    ),
    'search_step' => 
    array (
      'label' => 'search_step',
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'detach' => 
    array (
      'label' => 'detach',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
  ),
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
=======
>>>>>>> f1d4085 (.)
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
