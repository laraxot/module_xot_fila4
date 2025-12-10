<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
# Struttura dei Moduli in <nome progetto>

Questo documento definisce le linee guida ufficiali per la struttura dei moduli all'interno del framework <nome progetto>.

---

## Gestione dati geografici statici: GeoJsonModel readonly (ispirato a Squire)

Per tutti i dati geografici statici (regioni, province, comuni, cap) di dimensioni gestibili, NON creare tabelle/migration dedicate. Utilizzare invece un modello base readonly (`GeoJsonModel`) che legge i dati direttamente da file JSON (es: `Modules/Geo/resources/json/comuni.json`).

- I model specialistici (Region, Province, City, Cap) devono estendere la base GeoJsonModel e fornire metodi di filtro.
- Versionare sempre il file json e documentare la struttura.
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
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> 92cca5ade (.)
- Aggiornare la documentazione di Geo/docs, <nome progetto>/docs e questa stessa doc con collegamenti bidirezionali.

Per dettagli implementativi e best practice vedi:
- [Geo/docs/geo-json-model.md](../../Geo/docs/geo-json-model.md)
- [<nome progetto>/docs/geo-integration.md](../../<nome progetto>/docs/geo-integration.md)
- Aggiornare la documentazione di Geo/docs, <nome modulo>/docs e questa stessa doc con collegamenti bidirezionali.

Per dettagli implementativi e best practice vedi:
- [Geo/docs/geo-json-model.md](../../Geo/docs/geo-json-model.md)
- [<nome modulo>/docs/geo-integration.md](../../<nome modulo>/docs/geo-integration.md)
<<<<<<< HEAD
- Aggiornare la documentazione di Geo/docs, SaluteOra/docs e questa stessa doc con collegamenti bidirezionali.

Per dettagli implementativi e best practice vedi:
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> 03ceeac3 (.)
- Aggiornare la documentazione di Geo/docs, SaluteOra/docs e questa stessa doc con collegamenti bidirezionali.

Per dettagli implementativi e best practice vedi:
- [Geo/docs/geo-json-model.md](../../Geo/docs/geo-json-model.md)
- [SaluteOra/docs/geo-integration.md](../../SaluteOra/docs/geo-integration.md)
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
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
- [Geo/project_docs/geo-json-model.md](../../Geo/project_docs/geo-json-model.md)
- [SaluteOra/project_docs/geo-integration.md](../../SaluteOra/project_docs/geo-integration.md)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
=======
- [Geo/project_docs/geo-json-model.md](../../Geo/project_docs/geo-json-model.md)
- [SaluteOra/project_docs/geo-integration.md](../../SaluteOra/project_docs/geo-integration.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 472bd9dc (.)
=======
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
>>>>>>> 3bf39332 (.)
=======
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 88e745db5 (.)
- Aggiornare la documentazione di Geo/docs, <nome modulo>/docs e questa stessa doc con collegamenti bidirezionali.

Per dettagli implementativi e best practice vedi:
- [Geo/docs/geo-json-model.md](../../Geo/docs/geo-json-model.md)
- [<nome modulo>/docs/geo-integration.md](../../<nome modulo>/docs/geo-integration.md)
- Aggiornare la documentazione di Geo/docs, <nome progetto>/docs e questa stessa doc con collegamenti bidirezionali.

Per dettagli implementativi e best practice vedi:
- [Geo/docs/geo-json-model.md](../../Geo/docs/geo-json-model.md)
- [<nome progetto>/docs/geo-integration.md](../../../docs/geo-integration.md)
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> ba1d49f3 (.)
<<<<<<< HEAD
>>>>>>> 59259b43 (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> b956ebe0 (.)
<<<<<<< HEAD
>>>>>>> aba62c408 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 0123915b (.)
>>>>>>> 5cb992cc6 (.)
- [Questa stessa doc (Xot/module-structure.md)](module-structure.md)

---

## Service Provider

### Convenzioni Base

Ogni modulo deve avere un ServiceProvider che estende `XotBaseServiceProvider`. Questo provider è responsabile della registrazione delle risorse del modulo (routes, views, translations, etc.) nell'applicazione.

```php
<?php

declare(strict_types=1);

namespace Modules\NomeModulo\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class NomeModuloServiceProvider extends XotBaseServiceProvider {
    // Implementazione
}
```

### Proprietà Obbligatorie

Il ServiceProvider deve definire le seguenti proprietà:

1. **public string $name**: Nome del modulo in formato PascalCase/CamelCase con prima lettera maiuscola (NON $module_name)
   ```php
   public string $name = 'NomeModulo';
   ```
   
   > **IMPORTANTE**: La stessa proprietà deve essere definita anche nel `RouteServiceProvider` del modulo

2. **protected string $module_dir**: Directory del modulo (default: `__DIR__`)
   ```php
   protected string $module_dir = __DIR__;
   ```

3. **protected string $module_ns**: Namespace del modulo (default: `__NAMESPACE__`)
   ```php
   protected string $module_ns = __NAMESPACE__;
   ```

### Proprietà Opzionali

1. **public string $nameLower**: Versione minuscola del nome del modulo (se non definita, viene generata automaticamente da $name)

### Metodi Personalizzabili

I seguenti metodi possono essere sovrascritti per personalizzare il comportamento del ServiceProvider:

- `register()`: Registra i servizi del modulo nel container
- `registerTranslations()`: Registra le traduzioni
- `registerConfig()`: Registra le configurazioni
- `registerViews()`: Registra le viste
- `registerFactories()`: Registra le factories per i modelli
- `registerCommands()`: Registra i comandi Artisan
- `registerLivewireComponents()`: Registra i componenti Livewire

## Errori Comuni

### Nome del Modulo Mancante o Errato

Se viene mostrato l'errore `name is empty on [Modules\NomeModulo\Providers\NomeModuloServiceProvider]`, significa che:

1. La proprietà `$name` non è stata definita nel ServiceProvider
2. È stata utilizzata `$module_name` invece di `$name`

**Correzione**:
```php
// ERRATO
public string $module_name = 'nomeModulo';
// ERRATO
public string $name = 'nomemodulo';

// CORRETTO
public string $name = 'NomeModulo';
```

## Esempio Completo

```php
<?php

declare(strict_types=1);

namespace Modules\Blog\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class BlogServiceProvider extends XotBaseServiceProvider {
    public string $name = 'Blog';
    
    protected string $module_dir = __DIR__;
    
    protected string $module_ns = __NAMESPACE__;
    
    // Metodi personalizzati se necessario
    public function registerConfig(): void
    {
        // Configurazione personalizzata
        parent::registerConfig();
    }
}
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
