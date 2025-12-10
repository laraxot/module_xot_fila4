# ModuleService

La classe `ModuleService` fornisce funzionalità per la gestione dei moduli nell'applicazione.

## Caratteristiche Principali

- Pattern Singleton per l'istanza del servizio
- Gestione dei modelli all'interno dei moduli
- Supporto per il caricamento dinamico dei file
- Gestione delle riflessioni delle classi

## Metodi Principali

### getInstance()

```php
public static function getInstance(): self
```

Implementa il pattern Singleton per garantire una singola istanza del servizio.

### make()

```php
public static function make(): self
```

Factory method alternativo che utilizza getInstance().

### setName()

```php
public function setName(string $name): self
```

Imposta il nome del modulo da gestire.

### getModels()

```php
public function getModels(): array
```

Recupera tutti i modelli definiti nel modulo specificato.

## Best Practices

1. **Utilizzo del Servizio**
   ```php
   use Modules\Xot\Services\ModuleService;

   $service = ModuleService::make()->setName('YourModule');
   $models = $service->getModels();
   ```

2. **Gestione dei Modelli**
   - I modelli devono essere nella directory `Models` del modulo
   - I file devono avere estensione `.php`
   - Le classi non devono essere astratte

3. **Gestione degli Errori**
   - Gestione sicura delle eccezioni di riflessione
   - Validazione dei percorsi e delle classi
   - Controllo dell'esistenza dei moduli

4. **Convenzioni di Naming**
   - Utilizzo di snake_case per i nomi dei modelli
   - Namespace coerente con la struttura dei moduli
   - Gestione corretta delle estensioni dei file

## Dipendenze

- Illuminate Support
- Nwidart Modules
- PHP Reflection

## Note di Sviluppo

- Il servizio utilizza il pattern Singleton
- Supporta il caricamento dinamico dei file
- Gestisce automaticamente le classi astratte
- Implementa una gestione sicura delle eccezioni

## Link Correlati

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 85cdef688 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
<<<<<<< HEAD
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 2bad128c (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 0117b849c (.)
=======
- [Documentazione Moduli](../../../project_docs/modules/index.md)
- [Gestione Modelli](../../../project_docs/models/index.md)
- [Pattern Singleton](../../../project_docs/patterns/singleton.md) 
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 091f883c (.)
=======
=======
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 59259b43 (.)
=======
=======
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> aba62c408 (.)
=======
=======
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 5cb992cc6 (.)
=======
=======
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 3c8d62b79 (.)
=======
=======
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
- [Documentazione Moduli](../../../docs/modules/index.md)
- [Gestione Modelli](../../../docs/models/index.md)
- [Pattern Singleton](../../../docs/patterns/singleton.md) 
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
