# LangServiceProvider: Gestione automatica delle label nei Filament Forms

## Regola
Non usare mai il metodo `->label()` nei componenti Filament. Le label sono gestite automaticamente tramite LangServiceProvider e i file di traduzione.

## Motivazione
- **Uniformità**: Tutte le label sono centralizzate nei file di lingua, garantendo coerenza tra moduli e componenti.
- **Manutenibilità**: Cambiare una label in una sola posizione aggiorna tutta l'applicazione.
- **Facilità di traduzione**: Tutte le lingue sono gestite tramite i file di traduzione, senza duplicazione di label nel codice.
- **Pulizia del codice**: I form risultano più leggibili e privi di duplicazioni inutili.
- **Scalabilità**: Aggiungere nuove lingue o modificare la struttura è semplice e senza refactoring del codice.

## Come funziona
- Ogni campo viene risolto tramite la chiave `modulo::risorsa.fields.campo.label`.
- Il LangServiceProvider intercetta le richieste di label e restituisce il valore corretto dal file di lingua.

## Esempio
**File di traduzione**
```php
// modules/patient/lang/it/doctor-resource.php
return [
    'fields' => [
        'first_name' => [ 'label' => 'Nome' ],
        'last_name' => [ 'label' => 'Cognome' ],
        // ...
    ],
];
```
**Form Filament**
```php
TextInput::make('first_name') // la label viene risolta automaticamente
```

## Collegamenti
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
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 85cdef688 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 6ca989d8 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
=======
- [Doc specifica Patient](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 091f883c (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 67be6ac0 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
=======
- [Doc specifica Patient](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 59259b43 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 88ee35c4e (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
=======
- [Doc specifica Patient](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> aba62c408 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 92cca5ade (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
=======
- [Doc specifica Patient](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 5cb992cc6 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 6a52563d6 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
=======
- [Doc specifica Patient](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 3c8d62b79 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 317b552da (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
=======
- [Doc specifica Patient](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 60f0a1820 (.)
=======
- [Doc specifica Patient](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 80bc07e81 (.)

**Questa regola è obbligatoria per tutti i moduli.**

## Collegamenti tra versioni di langserviceprovider-labels.md
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
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 85cdef688 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 6ca989d8 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
=======
* [langserviceprovider-labels.md](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 091f883c (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 67be6ac0 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
=======
* [langserviceprovider-labels.md](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 59259b43 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 88ee35c4e (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
=======
* [langserviceprovider-labels.md](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> aba62c408 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 92cca5ade (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
=======
* [langserviceprovider-labels.md](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 5cb992cc6 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 6a52563d6 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
=======
* [langserviceprovider-labels.md](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 3c8d62b79 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 317b552da (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
=======
* [langserviceprovider-labels.md](../../Patient/project_docs/langserviceprovider-labels.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 60f0a1820 (.)
=======
* [langserviceprovider-labels.md](../../Patient/docs/langserviceprovider-labels.md)
>>>>>>> 80bc07e81 (.)

