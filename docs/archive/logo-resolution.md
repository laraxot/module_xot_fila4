<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
# Risoluzione dei Loghi

Questo documento descrive il meccanismo di risoluzione dei loghi in un'applicazione Laravel 12.x modulare (PHP 8.2+).

## Processo di Risoluzione

### 1. Determinazione del Dominio Inverso

Il sistema utilizza un meccanismo di inversione del dominio per localizzare le configurazioni specifiche:

```php
// Da APP_URL (es. http://example.local)
$appUrl = env('APP_URL'); // http://example.local

// Rimuovere il protocollo
$domain = str_replace(['http://', 'https://'], '', $appUrl); // example.local

// Invertire i segmenti del dominio
$segments = explode('.', $domain); // ['example', 'local']
$reversedSegments = array_reverse($segments); // ['local', 'example']
$inverseDomain = implode('/', $reversedSegments); // local/example
```

### 2. Localizzazione dei File di Configurazione

I file di configurazione specifici per dominio si trovano in:

```
laravel/config/<dominio_inverso>/
```

Esempio:
```
laravel/config/local/example/metatag.php
```

### 3. Configurazione dei Loghi

Nel file `metatag.php` vengono definiti i percorsi ai loghi utilizzando la notazione di namespace dei moduli:

```php
return [
    'logo_header' => 'module::images/logo.svg',
    'logo_header_dark' => 'module::images/logo.svg',
    // Altri parametri...
];
```

### 4. Risoluzione dei Percorsi dei Moduli

La notazione `module::path` viene risolta nel percorso effettivo del file:

```
module::images/logo.svg → laravel/Modules/Module/resources/images/logo.svg
```

Il sistema utilizza il metodo `module_path()` per risolvere questi percorsi:

```php
function resolveModulePath($path) {
    // Esempio: 'module::images/logo.svg'
    list($module, $resourcePath) = explode('::', $path);
    
    // Converte in: '/path/to/project/laravel/Modules/Module/resources/images/logo.svg'
    return module_path(ucfirst($module)) . '/resources/' . $resourcePath;
}
```

## Utilizzo nei Template

Nei template Blade, i loghi vengono referenziati utilizzando gli helper appropriati:

```blade
<img src="{{ Theme::asset($metatag['logo_header']) }}" alt="{{ $metatag['logo_alt'] ?? 'Logo' }}">
```

Per la versione dark:

```blade
<img src="{{ Theme::asset($metatag['logo_header_dark']) }}" 
     alt="{{ $metatag['logo_alt'] ?? 'Logo' }}" 
     class="hidden dark:block">
```

## Best Practices

1. **Organizzazione**:
   - Mantenere i loghi nel modulo appropriato (es. Core, Cms, UI)
   - Utilizzare SVG per garantire scalabilità e supporto dark mode
   - Seguire le linee guida per i loghi SVG nel progetto principale

2. **Configurazione**:
   - Definire sempre sia la versione normale che dark del logo
   - Utilizzare la notazione di namespace dei moduli per i percorsi
   - Mantenere coerenza tra le diverse configurazioni di dominio

3. **Manutenibilità**:
   - Centralizzare le configurazioni dei loghi in `metatag.php`
   - Documentare eventuali variazioni specifiche per dominio
   - Verificare la coerenza tra configurazioni globali e specifiche

## Collegamenti Bidirezionali

### Collegamenti ad Altri Moduli
- [Gestione Domini e Configurazioni](DOMAIN_CONFIGURATION.md)
- [Configurazione Generale](CONFIGURATION.md)
- [Struttura dei Moduli](MODULE_STRUCTURE.md)
- [Architettura Folio + Volt](FOLIO_VOLT_ARCHITECTURE.md)
- [Regole per la Case Sensitivity](DIRECTORY-CASE-SENSITIVITY.md)
- [Regole per i Namespace](NAMESPACE-RULES.md)
- [Convenzioni di Naming](naming-conventions.md)

### Collegamenti alla Root del Progetto
<<<<<<< HEAD
=======
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
- [Linee Guida per i Loghi](../../../docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../docs/architettura-folio-volt.md)

<<<<<<< HEAD
=======
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
=======
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)

- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)

<<<<<<< HEAD

- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)



- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)



- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)


- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)

=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)

>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)

>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
- [Linee Guida per i Loghi](../../../project_docs/standards/logo_guidelines.md)
- [Configurazione e Risoluzione dei Loghi](../../../project_docs/configurazione-logo.md)
- [Struttura dei Moduli in il progetto](../../../project_docs/struttura-moduli.md)
- [Architettura Folio + Volt in il progetto](../../../project_docs/architettura-folio-volt.md)

>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
>>>>>>> e39b54ba7 (.)
=======
=======
>>>>>>> 90d386aa (.)
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
=======
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
=======
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
---

### Nota Importante
Questo documento è parte della documentazione generale del modulo Xot e descrive un meccanismo riutilizzabile in diversi progetti. La documentazione nei moduli è generica e riutilizzabile, mentre le informazioni specifiche del progetto si trovano nella documentazione nella root del progetto.
<<<<<<< HEAD
=======
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
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
=======
=======
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
