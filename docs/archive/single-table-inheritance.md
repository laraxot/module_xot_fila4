# Single Table Inheritance (STI)

## Principi Fondamentali

1. **Struttura Base**:
   - Una tabella base contiene tutti i campi comuni
   - I modelli specializzati estendono il modello base
   - Il campo `type` determina il tipo di modello

2. **Namespace e Directory**:
   - I modelli sono in `Modules\{Module}\Models`
   - I namespace sono `Modules\{Module}\Models`
   - La struttura delle directory riflette i namespace

## Implementazione

1. **Modello Base**:
   ```php
   namespace Modules\User\Models;
   
   class BaseUser extends Model
   {
       protected $connection = 'user';
       protected $childColumn = 'type';
   }
   ```

2. **Modello Specializzato**:
   ```php
   namespace Modules\Patient\Models;
   
   class User extends BaseUser
   {
       protected $childTypes = [
           'patient' => Patient::class,
           'doctor' => Doctor::class,
       ];
   }
   ```

3. **Migration**:
   - Aggiungere campi alla tabella base
   - Usare migration idempotenti
   - Documentare i campi aggiunti

## Best Practices

1. **Campi**:
   - Tutti i campi usati dai modelli specializzati devono essere nella tabella base
   - I campi specifici vanno aggiunti con migration idempotenti
   - Documentare i campi aggiunti

2. **Relazioni**:
   - Definire le relazioni nel modello appropriato
   - Usare i trait necessari
   - Documentare le relazioni complesse

3. **Validazione**:
   - Implementare le regole di validazione nel modello
   - Usare i trait di validazione quando necessario
   - Documentare le regole di business

## Errori Comuni

1. **Errore**: Namespace errato
   - ❌ `namespace Modules\Patient\App\Models;`
   - ✅ `namespace Modules\Patient\Models;`

2. **Errore**: Ereditarietà errata
   - ❌ `extends Model`
   - ✅ `extends BaseUser`

3. **Errore**: Configurazione STI mancante
   - ❌ Manca `$childColumn` e `$childTypes`
   - ✅ Configurare correttamente STI

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
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 85cdef688 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 6ca989d8 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
=======
- [Modelli Patient](../Patient/project_docs/models.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 091f883c (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 67be6ac0 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
=======
- [Modelli Patient](../Patient/project_docs/models.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 59259b43 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 88ee35c4e (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
=======
- [Modelli Patient](../Patient/project_docs/models.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> aba62c408 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 92cca5ade (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
=======
- [Modelli Patient](../Patient/project_docs/models.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 5cb992cc6 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 6a52563d6 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
=======
- [Modelli Patient](../Patient/project_docs/models.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 3c8d62b79 (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 317b552da (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
=======
- [Modelli Patient](../Patient/project_docs/models.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
- [Modelli Patient](../Patient/docs/models.md)
>>>>>>> 60f0a1820 (.)
- [Best Practices Modelli](./models.md)
- [Convenzioni di Codice](./coding-standards.md) 
