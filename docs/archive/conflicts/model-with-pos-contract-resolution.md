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
# Risoluzione Conflitto in ModelWithPosContract

## Panoramica

Questo documento descrive la risoluzione del conflitto git nel file `Modules/Xot/app/Contracts/ModelWithPosContract.php`, che definisce un'interfaccia fondamentale per i modelli con attributo di posizione.

## Analisi del Conflitto

Il file presenta diversi conflitti nei blocchi di annotazioni PHPDoc e nella definizione dell'interfaccia:

### 1. Conflitto nelle annotazioni delle proprietà
- Duplicazione delle proprietà `tennant_name`, `user` e `status`
- Differenze nella formattazione degli spazi e nell'allineamento delle tipizzazioni

### 2. Conflitto nei metodi della classe
- Differenze nella definizione del metodo `treeSonsCount()`
- Alcuni blocchi lo includono, altri no

### 3. Conflitto nella dichiarazione dell'interfaccia
- Una versione definisce l'interfaccia vuota: `interface ModelWithPosContract {}`
- Un'altra versione la definisce con parentesi graffe su righe separate:
  ```php
  interface ModelWithPosContract
  {
  }
  ```

<<<<<<< HEAD




=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
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
>>>>>>> ce6fc085 (.)
























<<<<<<< HEAD


















































=======
<<<<<<< HEAD
=======


>>>>>>> 5a14301c (.)
=======


>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
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


>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======


>>>>>>> b7ea1cd1 (.)
=======


>>>>>>> 5a14301c (.)
=======


>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======


>>>>>>> 62cc8443 (.)
>>>>>>> 43d67f21 (.)
=======


>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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


>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
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


>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======


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
>>>>>>> 551c768c4 (.)


=======


<<<<<<< HEAD
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
## Approccio alla Risoluzione

La risoluzione seguirà questi principi:

1. **Completezza**: Includiamo tutte le proprietà e i metodi definiti in qualsiasi versione per garantire la compatibilità.
2. **Tipizzazione forte**: Manteniamo tutte le tipizzazioni delle proprietà per garantire la type safety.
3. **Stile coerente**: Adottiamo uno stile di formattazione coerente per allineamento e spaziatura, seguendo PSR-12.
4. **Eliminazione delle duplicazioni**: Rimuoviamo proprietà o metodi duplicati.

## Soluzione Implementata

La soluzione che adotteremo include:

1. Mantenere tutte le annotazioni di proprietà, rimuovendo le duplicazioni.
2. Includere il metodo `treeSonsCount()` presente in alcune versioni.
3. Adottare lo stile di dichiarazione dell'interfaccia con parentesi graffe su righe separate per migliore leggibilità.
4. Allineare le tipizzazioni con spazi per mantenere un formato coerente.

### Codice Risolto

```php
<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Spatie\ModelStatus\Status;

/**
 * Modules\Xot\Contracts\ModelWithPosContract.
 *
 * @property int                      $id
 * @property int|null                 $user_id
 * @property string|null              $post_type
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property string|null              $created_by
 * @property string|null              $updated_by
 * @property string|null              $title
 * @property PivotContract|null       $pivot
 * @property string                   $tennant_name
 * @property UserContract|null        $user
 * @property string                   $status
 * @property Collection|array<Status> $statuses
 * @property int|null                 $statuses_count
 * @property int|null                 $pos
 *
 * @method mixed     getKey()
 * @method string    getRouteKey()
 * @method string    getRouteKeyName()
 * @method string    getTable()
 * @method mixed     with($array)
 * @method array     getFillable()
 * @method mixed     fill($array)
 * @method mixed     getConnection()
 * @method mixed     update($params)
 * @method mixed     delete()
 * @method mixed     detach($params)
 * @method mixed     attach($params)
 * @method mixed     save($params)
 * @method array     treeLabel()
 * @method array     treeSons()
 * @method int       treeSonsCount()
 * @method array     toArray()
 * @method BelongsTo user()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface ModelWithPosContract
{
}
```

## Impatto della Modifica

Questa risoluzione garantisce:

1. **Compatibilità**: Tutti i modelli che implementano questa interfaccia continueranno a funzionare.
2. **Completezza**: Tutte le proprietà e i metodi sono documentati.
3. **Coerenza**: Lo stile del codice è coerente con le convenzioni del progetto.

## Collegamento con la Documentazione Principale

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
<<<<<<< HEAD
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
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
>>>>>>> 5a14301c (.)
=======
>>>>>>> ce6fc085 (.)
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
<<<<<<< HEAD
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
=======
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 

Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
<<<<<<< HEAD
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
=======
>>>>>>> 43d67f21 (.)
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../docs/logs/conflict_resolution_progress.md). 
>>>>>>> 5a14301c (.)
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 43d67f21 (.)
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
>>>>>>> e39b54ba7 (.)
=======
=======
Per una panoramica di tutti i conflitti risolti, vedere il documento principale sulla [risoluzione dei conflitti nel progetto](../../../../project_docs/logs/conflict_resolution_progress.md). 
>>>>>>> 90d386aa (.)
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
