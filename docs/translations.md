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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
### Versione HEAD

# Traduzioni

## Struttura delle Traduzioni

Le traduzioni sono organizzate in:

```
Modules/[Nome]/
└── lang/
    ├── it/
    │   └── [nome].php
    └── en/
        └── [nome].php
```

## Regole per le Traduzioni

## Struttura Base

Ogni modulo deve avere:
1. Una cartella `lang/` con le traduzioni
2. Un file `translations.md` nella cartella `docs/` con i collegamenti bidirezionali

## Struttura delle Cartelle

```
Modules/<NomeModulo>/
├── lang/
│   ├── it/
│   │   └── <nome_modulo>.php
│   └── en/
│       └── <nome_modulo>.php
└── docs/
    └── translations.md
```

## Regole per i File di Traduzione

1. **Naming**:
   - Il file di traduzione deve avere lo stesso nome del modulo in minuscolo
   - Esempio: `patient.php` per il modulo Patient

2. **Struttura**:
   - Le chiavi devono essere organizzate gerarchicamente
   - Usare array annidati per raggruppare le traduzioni correlate
   - Esempio:
     ```php
     return [
         'registration' => [
             'label' => 'Registrazione',
             'tooltip' => 'Completa la registrazione'
         ]
     ];
     ```

3. **Collegamenti**:
   - Ogni file `translations.md` deve contenere:
     - Link al modulo Lang
     - Link alle regole generali in Xot
     - Esempi di implementazione

## Esempio di File translations.md

```markdown

# Traduzioni del Modulo <NomeModulo>

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
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 6dcebf8a (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> b3cc10f7 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> cafe8bed (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 5bd842e3 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 5cd593a5 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 03ceeac3 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 3baa48bd (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 5b07d268 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 5a14301c (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 3fbbf1f5 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 71f31700 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
=======
- [Modulo Lang](../../Lang/project_docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/project_docs/translations.md) - Regole base
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 3310e9c6 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> c35986f4 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale
- [Regole Generali](../../Xot/docs/translations.md) - Regole base
>>>>>>> 6dcebf8a (.)

## Struttura

```
Modules/<NomeModulo>/
└── lang/
    ├── it/
    │   └── <nome_modulo>.php
    └── en/
        └── <nome_modulo>.php
```

## Contenuto

Il file `<nome_modulo>.php` contiene le traduzioni per:
- [Lista delle sezioni tradotte]

## Esempi

```php
return [
    'sezione' => [
        'label' => 'Etichetta',
        'tooltip' => 'Descrizione'
    ]
];
```

## Regole per le Traduzioni

1. **Organizzazione**:
   - Ogni modulo ha le proprie traduzioni
   - Le traduzioni vanno in `lang/[lingua]/[nome].php`
   - Non usare mai `->label()` nei componenti
   - Usare sempre i file di traduzione

2. **Struttura dei File**:
   - Chiavi in snake_case
   - Valori in formato array con label
   - Supporto per tooltip e placeholder
   - Esempio:
     ```php
     return [
         'field_name' => [
             'label' => 'Nome Campo',
             'tooltip' => 'Descrizione del campo',
             'placeholder' => 'Inserisci il valore'
         ]
     ];
     ```

3. **Best Practices**:
   - Mantenere le traduzioni aggiornate
   - Usare chiavi descrittive
   - Documentare le traduzioni
   - Verificare la coerenza

4. **Integrazione con Filament**:
   - Le traduzioni sono automaticamente caricate
   - Non usare `->label()` nei componenti
   - Usare le chiavi di traduzione
   - Mantenere la coerenza


### Versione Incoming

# Sistema di Traduzioni

## Struttura

### File di Traduzione
```
resources/lang/
├── it/
│   ├── broker.php
│   ├── ui.php
│   └── validation.php
└── en/
    ├── broker.php
    ├── ui.php
    └── validation.php
```

### Formato File
```php
return [
    'resources' => [
        'polizza_convenzione' => [
            'label' => 'Polizza in Convenzione',
            'plural_label' => 'Polizze in Convenzione',
            'navigation' => [
                'group' => 'Portafoglio',
                'icon' => 'heroicon-o-document-text',
                'sort' => 1,
            ],
            'columns' => [
                'numero_adesione' => 'Numero Adesione',
                'cliente' => 'Cliente',
                // ...
            ],
            'filters' => [
                'stato_pratica' => 'Stato Pratica',
                'convenzione' => 'Convenzione',
                // ...
            ],
            'actions' => [
                'create' => 'Nuova Polizza',
                'edit' => 'Modifica',
                'view' => 'Visualizza',
                // ...
            ],
        ],
    ],
];
```


---

## Utilizzo

### In Filament Resources
```php
// NON utilizzare ->label()
TextColumn::make('numero_adesione')
TextColumn::make('cliente.nominativo')
SelectFilter::make('stato_pratica_id')
```

### In Blade Views
```blade
@lang('broker.resources.polizza_convenzione.label')
{{ __('broker.resources.polizza_convenzione.columns.numero_adesione') }}
```

### In PHP
```php
trans('broker.resources.polizza_convenzione.label')
__('broker.resources.polizza_convenzione.columns.numero_adesione')
```

## Best Practices

### 1. Struttura Chiavi
- Utilizzare nomi descrittivi
- Mantenere una gerarchia logica
- Evitare duplicazioni
- Usare snake_case per le chiavi

### 2. Organizzazione File
- Un file per modulo
- Separare le traduzioni per contesto
- Mantenere coerenza tra lingue
- Documentare struttura complessa

### 3. Gestione Traduzioni
- Non cancellare traduzioni esistenti
- Aggiungere nuove traduzioni in modo incrementale
- Mantenere le traduzioni aggiornate
- Verificare completezza traduzioni

### 4. Performance
- Utilizzare cache delle traduzioni
- Caricare solo le traduzioni necessarie
- Evitare traduzioni dinamiche
- Ottimizzare file di grandi dimensioni

## LangService

### Caratteristiche
- Caricamento automatico traduzioni
- Fallback su lingua predefinita
- Cache delle traduzioni
- Supporto per più lingue

### Configurazione
```php
// config/xot.php
return [
    'translations' => [
        'default_locale' => 'it',
        'fallback_locale' => 'en',
        'cache_translations' => true,
        'cache_key' => 'translations',
        'cache_duration' => 3600,
    ],
];
```

### Metodi Principali
```php
// Carica tutte le traduzioni per una lingua
LangService::loadTranslations(string $locale): array

// Ottiene una traduzione con fallback
LangService::get(string $key, array $replace = []): string

// Verifica esistenza traduzione
LangService::has(string $key): bool

// Aggiunge traduzioni runtime
LangService::add(string $key, string $value): void
```

## Esempi Comuni

### Resource
```php
// Definizione traduzioni
'resources' => [
    'polizza_convenzione' => [
        'label' => 'Polizza in Convenzione',
        'columns' => [
            'numero_adesione' => 'Numero Adesione',
        ],
    ],
],

// Utilizzo in Resource
TextColumn::make('numero_adesione')
```

### Form
```php
// Definizione traduzioni
'forms' => [
    'cliente' => [
        'fields' => [
            'nome' => 'Nome',
            'cognome' => 'Cognome',
        ],
    ],
],

// Utilizzo in Form
TextInput::make('nome')
TextInput::make('cognome')
```

### Actions
```php
// Definizione traduzioni
'actions' => [
    'save' => 'Salva',
    'cancel' => 'Annulla',
    'delete' => [
        'label' => 'Elimina',
        'confirm' => 'Sei sicuro?',
    ],
],

// Utilizzo in Actions
Action::make('save')
Action::make('delete')

### Versione HEAD

```

## Nuove Best Practices

### 1. Gestione Errori
- Traduzioni per messaggi di errore
- Codici errore standardizzati
- Messaggi di errore descrittivi
- Supporto multilingua per errori

### 2. Validazione
- Traduzioni per regole di validazione
- Messaggi di validazione personalizzati
- Supporto per regole custom
- Coerenza nei messaggi

### 3. SEO
- Traduzioni per meta tag
- Descrizioni multilingua
- Keywords localizzate
- URL localizzati

### 4. Accessibilità
- Testi alternativi per immagini
- Descrizioni per elementi interattivi
- Messaggi di stato
- Supporto per screen reader

### 5. Performance
- Lazy loading traduzioni
- Bundle per lingua
- Preload traduzioni critiche
- Ottimizzazione cache

### 6. Testing
- Verifica traduzioni mancanti
- Test di coerenza
- Validazione formati
- Test di performance 

## Collegamenti tra versioni di translations.md
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
* [translations.md](../../../Chart/docs/translations.md)
* [translations.md](../../../Reporting/docs/translations.md)
* [translations.md](../../../Gdpr/docs/translations.md)
* [translations.md](../../../Notify/docs/translations.md)
* [translations.md](../../../Xot/docs/roadmap/lang/translations.md)
* [translations.md](../../../Xot/docs/translations.md)
* [translations.md](../../../Dental/docs/translations.md)
* [translations.md](../../../User/docs/translations.md)
* [translations.md](../../../UI/docs/translations.md)
* [translations.md](../../../Lang/docs/packages/translations.md)
* [translations.md](../../../Lang/docs/translations.md)
* [translations.md](../../../Job/docs/translations.md)
* [translations.md](../../../Media/docs/translations.md)
* [translations.md](../../../Tenant/docs/translations.md)
* [translations.md](../../../Activity/docs/translations.md)
* [translations.md](../../../Patient/docs/translations.md)
* [translations.md](../../../Cms/docs/translations.md)
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
=======
<<<<<<< HEAD
=======
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
* [translations.md](../../../Chart/project_docs/translations.md)
* [translations.md](../../../Reporting/project_docs/translations.md)
* [translations.md](../../../Gdpr/project_docs/translations.md)
* [translations.md](../../../Notify/project_docs/translations.md)
* [translations.md](../../../Xot/project_docs/roadmap/lang/translations.md)
* [translations.md](../../../Xot/project_docs/translations.md)
* [translations.md](../../../Dental/project_docs/translations.md)
* [translations.md](../../../User/project_docs/translations.md)
* [translations.md](../../../UI/project_docs/translations.md)
* [translations.md](../../../Lang/project_docs/packages/translations.md)
* [translations.md](../../../Lang/project_docs/translations.md)
* [translations.md](../../../Job/project_docs/translations.md)
* [translations.md](../../../Media/project_docs/translations.md)
* [translations.md](../../../Tenant/project_docs/translations.md)
* [translations.md](../../../Activity/project_docs/translations.md)
* [translations.md](../../../Patient/project_docs/translations.md)
* [translations.md](../../../Cms/project_docs/translations.md)
>>>>>>> f1d4085 (.)
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
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)


### Versione Incoming

``` 

---

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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
