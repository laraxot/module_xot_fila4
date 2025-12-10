# Regole per i file di traduzione in Laraxot PTVX

## Struttura dei file di traduzione

Ogni modulo deve avere i propri file di traduzione nella directory `Modules/<NomeModulo>/lang/<lingua>/`. La struttura standard di questi file deve seguire il seguente schema:

```php
<?php

return [
    'navigation' => [
        'group' => [
            'label' => 'Nome Gruppo',
        ],
        'resource' => [
            'label' => 'Nome Risorsa',
            'plural' => 'Nome Risorse',
        ],
    ],
    'page' => [
        'title' => 'Titolo Pagina',
        'description' => 'Descrizione Pagina',
    ],
    'fields' => [
        'nome_campo' => [
            'label' => 'Etichetta Campo',
            'placeholder' => 'Placeholder Campo',
            'tooltip' => 'Tooltip Campo',
            'help' => 'Testo di aiuto',
        ],
    ],
    'actions' => [
        'nome_azione' => [
            'label' => 'Etichetta Azione',
            'tooltip' => 'Tooltip Azione',
            'success' => 'Messaggio di successo',
            'error' => 'Messaggio di errore',
        ],
    ],
    'validation' => [
        'required' => 'Il campo :attribute è obbligatorio',
        'email' => 'Il campo :attribute deve essere un indirizzo email valido',
    ],
    'messages' => [
        'success' => 'Operazione completata con successo',
        'error' => 'Si è verificato un errore',
    ],
];
```

## Sintassi

1. **Utilizzare sintassi array breve**:
   ```php
   // CORRETTO
   return [
       'key' => 'value',
   ];
   
   // ERRATO
   return array(
       'key' => 'value',
   );
   ```

2. **Dichiarazione strict types**:
   ```php
   <?php
   
   declare(strict_types=1);
   
   return [
       'key' => 'value',
   ];
   ```

3. **Indentazione e formattazione coerente**:
   - Utilizzare 4 spazi per l'indentazione
   - Mantenere coerenza tra virgole e parentesi
   - Chiudere sempre correttamente gli array annidati

## Regole di naming

1. **Chiavi in snake_case**:
   ```php
   'nome_campo' => [
       'label' => 'Etichetta Campo',
   ],
   ```

2. **Prefissi per icone**:
   - Utilizzare il prefisso del modulo per le icone personalizzate
   - Esempio: `'icl-upload-animated'` per un'icona del modulo IndennitaCondizioniLavoro

3. **Evitare chiavi generiche**:
   - Usare nomi specifici e descrittivi
   - Evitare nomi come `button1`, `action2`, ecc.

## Pattern comuni

1. **Riferimento alle traduzioni nel codice**:
   ```php
   // CORRETTO
   ->label(__('modulo::risorsa.fields.nome_campo.label'))
   
   // ERRATO
   ->label('Etichetta hardcoded')
   ```

2. **Registrazione di icone SVG**:
   ```php
   // Nel ServiceProvider
   Blade::component('modulo::components.icons.nome-icona', 'modulo-nome-icona');
   
   // Nel file di traduzione
   'icona' => 'modulo-nome-icona',
   ```

## Errori comuni da evitare

1. **Parentesi mancanti in array annidati**
2. **Virgole mancanti tra elementi dell'array**
3. **Etichette non tradotte (stesse chiavi come valori)**
4. **Mescolanza di stili array (`array()` e `[]`)**
5. **Riferimenti a traduzioni inesistenti**
6. **Mancanza di `declare(strict_types=1);`**
7. **Campi `helper_text` vuoti o duplicati**
8. **Conflitti di merge non risolti**

## Manutenzione dei file di traduzione

1. **Controllo sintassi prima del commit**:
   ```bash
   php -l Modules/<NomeModulo>/lang/<lingua>/<file>.php
   ```

2. **Aggiornare le traduzioni quando si aggiungono funzionalità**
3. **Mantenere coerenza tra le diverse lingue**
4. **Rimuovere traduzioni obsolete**

## Link alla documentazione correlata

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

*Ultimo aggiornamento: 3 Giugno 2025*
=======
=======
>>>>>>> 80bc07e81 (.)
- [Errori comuni nei file di traduzione](/laravel/Modules/Lang/project_docs/errori_comuni_traduzione.md)
- [Convenzioni di documentazione](/laravel/Modules/Xot/project_docs/documentation_conventions.md)
- [Documentazione principale sulle traduzioni](/project_docs/translation_rules.md)

<<<<<<< HEAD
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 85cdef688 (.)
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 5df5c7505 (.)
- [Errori comuni nei file di traduzione](/laravel/Modules/Lang/docs/errori_comuni_traduzione.md)
- [Convenzioni di documentazione](/laravel/Modules/Xot/docs/documentation_conventions.md)
- [Documentazione principale sulle traduzioni](/docs/translation_rules.md)

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
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> d9f43fce9 (.)
=======
- [Errori comuni nei file di traduzione](/laravel/Modules/Lang/project_docs/errori_comuni_traduzione.md)
- [Convenzioni di documentazione](/laravel/Modules/Xot/project_docs/documentation_conventions.md)
- [Documentazione principale sulle traduzioni](/project_docs/translation_rules.md)

*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 317b552da (.)
=======
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 5df5c7505 (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 80bc07e81 (.)
