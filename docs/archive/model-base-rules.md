<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
# Regole di Estensione dei Modelli Laraxot

## Regola Fondamentale di Ereditarietà

I modelli devono estendere **SOLO** il `BaseModel` del proprio modulo, **MAI** direttamente `Illuminate\Database\Eloquent\Model` o `Modules\Xot\Models\XotBaseModel`.

### Pattern Corretto

```php
namespace Modules\IndennitaCondizioniLavoro\Models;

class CondizioniLavoro extends BaseModel
{
    // Implementazione modello
}
```

### Anti-Pattern (da evitare)

```php
// ❌ ERRATO: Estensione diretta di Model
namespace Modules\IndennitaCondizioniLavoro\Models;

use Illuminate\Database\Eloquent\Model;

class CondizioniLavoro extends Model
{
    // Implementazione modello
}

// ❌ ERRATO: Estensione di XotBaseModel
namespace Modules\IndennitaCondizioniLavoro\Models;

use Modules\Xot\Models\XotBaseModel;

class CondizioniLavoro extends XotBaseModel
{
    // Implementazione modello
}
```

## Modelli Aggregati e di Totali

I modelli aggregati e di totali (es. `OrganizzativaTotValutatoreId` del modulo Performance) devono estendere il `BaseModel` del loro modulo specifico, **NON** `Modules\Xot\Models\BaseModel`.

### Motivazione

1. **Isolamento**: Ogni modulo può personalizzare il proprio BaseModel
2. **Override locale**: Funzionalità specifiche del modulo possono essere implementate a livello locale
3. **Compliance PHPStan**: Necessario per il livello 10
4. **Coerenza**: Uniformità di comportamento all'interno di ciascun modulo
5. **Personalizzazione**: Compatibilità con logiche specifiche del modulo

### Memoria Storica

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

<<<<<<< HEAD
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
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 43d67f21 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 5a14301c (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 43d67f21 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> b7ea1cd1 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 5a14301c (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 43d67f21 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 5a14301c (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 43d67f21 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> b7ea1cd1 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 88e35986 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> e0b8ebe3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> 76bec91a (.)
=======
Rollback della regola precedente (2025-05-14) effettuato il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md. La regola precedente è stata annullata per esigenze di override e compatibilità.

>>>>>>> cc52d333 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
## Eccezioni

Non esistono eccezioni a questa regola. Tutti i modelli concreti devono seguirla.

> ⚠️ **Warning**: Estendere direttamente Model o XotBaseModel può causare override indesiderati, perdita di flessibilità e problemi di compatibilità con logiche locali.

## Implementazione del BaseModel

Ogni modulo deve avere il proprio `BaseModel` che estende `Modules\Xot\Models\XotBaseModel`:

```php
namespace Modules\NomeModulo\Models;

use Modules\Xot\Models\XotBaseModel;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends XotBaseModel
{
    // Personalizzazioni specifiche del modulo
}
```

## Validazione e Controlli

- Eseguire PHPStan livello 9+ per verificare la corretta ereditarietà
- Documentare qualsiasi eccezione con motivazione dettagliata
- Aggiornare la documentazione sia nel modulo che nella root

## Backlink e Riferimenti

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
- [modules/xot/docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/docs/organizzativa-models.md](../Performance/docs/organizzativa-models.md)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: maggio 2025* 
=======
=======
*Ultimo aggiornamento: maggio 2025* 
=======
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> d86d643a (.)
=======
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 43d67f21 (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> d86d643a (.)
=======
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 43d67f21 (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 472bd9dc (.)
=======
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

*Ultimo aggiornamento: maggio 2025* 
>>>>>>> b7ea1cd1 (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> d86d643a (.)
=======
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 43d67f21 (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> d86d643a (.)
=======
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 43d67f21 (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 472bd9dc (.)
=======
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

*Ultimo aggiornamento: maggio 2025* 
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 88e35986 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> e0b8ebe3 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> cf971011 (.)
=======
- [modules/xot/project_docs/model_base_rules.md](model_base_rules.md)
- [docs/MODULE_NAMESPACE_RULES.md](../../project_docs/MODULE_NAMESPACE_RULES.md)
- [modules/performance/project_docs/organizzativa-models.md](../Performance/project_docs/organizzativa-models.md)

*Ultimo aggiornamento: maggio 2025* 
>>>>>>> 76bec91a (.)
=======
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> cc52d333 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: maggio 2025* 
>>>>>>> e7da37af (.)
