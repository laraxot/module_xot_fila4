<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
# Convenzioni per i Namespace nei Moduli

## Struttura Base
I namespace nei moduli di OrisBroker Framework devono seguire una struttura precisa per mantenere la coerenza del codebase.

### Regola Fondamentale
Il namespace base di ogni modulo è `Modules\{ModuleName}`. È importante notare che **NON** si deve includere `app` nel namespace.

### Esempi Corretti
```php
namespace Modules\Xot\Console\Commands;
namespace Modules\Broker\Models;
namespace Modules\User\Services;
namespace Modules\Tenant\Repositories;
```

### Esempi Errati
```php
namespace Modules\Xot\app\Console\Commands;

### Versione HEAD


### Versione Incoming

namespace Modules\Xot\Console\Commands;

---

namespace Modules\Broker\app\Models;
namespace Modules\User\app\Services;
namespace Modules\Tenant\app\Repositories;
```

## Struttura delle Directory
Anche se i file possono essere fisicamente collocati in una directory `app/`, il namespace non deve riflettere questa struttura.

### Esempio di Struttura Directory
```
Modules/
  Xot/
    app/
      Console/
        Commands/
          ImportMdbToMySQL.php  // namespace Modules\Xot\Console\Commands;
    Models/
    Services/
    Repositories/
```

## Motivazione
Questa convenzione:

# convenzioni per i namespace nei moduli

## regola assoluta e inviolabile

il namespace base di ogni modulo è **sempre e solo** `Modules\{ModuleName}` (dove ModuleName è il nome del modulo con la prima lettera maiuscola).

### errore comune da evitare assolutamente

**MAI** includere `App` o `app` nel namespace, anche se i file sono fisicamente nella cartella `app/`.

Questo è l'errore più comune e grave nelle convenzioni di namespace:

```php
// GRAVEMENTE ERRATO
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
namespace Modules\<nome progetto>\App\Controllers;

// CORRETTO
namespace Modules\<nome progetto>\Controllers;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
namespace Modules\SaluteOra\App\Controllers;

// CORRETTO
namespace Modules\SaluteOra\Controllers;
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
>>>>>>> 5a14301c (.)
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
namespace Modules\<nome progetto>\App\Controllers;

// CORRETTO
namespace Modules\<nome progetto>\Controllers;
namespace Modules\<nome modulo>\App\Controllers;

// CORRETTO
namespace Modules\<nome modulo>\Controllers;
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
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
```

## esempi corretti vs errati

### corretti ✓
```php
namespace Modules\Xot\Console\Commands;
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
namespace Modules\<nome progetto>\Models;
namespace Modules\User\Services;
namespace Modules\Tenant\Repositories;
namespace Modules\<nome progetto>\Filament\Resources;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
namespace Modules\SaluteOra\Models;
namespace Modules\User\Services;
namespace Modules\Tenant\Repositories;
namespace Modules\SaluteOra\Filament\Resources;
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
>>>>>>> 5a14301c (.)
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
namespace Modules\<nome progetto>\Models;
namespace Modules\User\Services;
namespace Modules\Tenant\Repositories;
namespace Modules\<nome progetto>\Filament\Resources;
namespace Modules\<nome modulo>\Models;
namespace Modules\User\Services;
namespace Modules\Tenant\Repositories;
namespace Modules\<nome modulo>\Filament\Resources;
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
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
```

### errati ✗
```php
namespace Modules\Xot\app\Console\Commands;       // errato: 'app' nel namespace
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
namespace Modules\<nome progetto>\App\Models;           // errato: 'App' nel namespace
namespace Modules\User\App\Services;              // errato: 'App' nel namespace
namespace Modules\Tenant\app\Repositories;        // errato: 'app' nel namespace
namespace App\Modules\<nome progetto>\Controllers;      // errato: struttura completamente sbagliata
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
namespace Modules\SaluteOra\App\Models;           // errato: 'App' nel namespace
namespace Modules\User\App\Services;              // errato: 'App' nel namespace
namespace Modules\Tenant\app\Repositories;        // errato: 'app' nel namespace
namespace App\Modules\SaluteOra\Controllers;      // errato: struttura completamente sbagliata
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
>>>>>>> 5a14301c (.)
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
namespace Modules\<nome progetto>\App\Models;           // errato: 'App' nel namespace
namespace Modules\User\App\Services;              // errato: 'App' nel namespace
namespace Modules\Tenant\app\Repositories;        // errato: 'app' nel namespace
namespace App\Modules\<nome progetto>\Controllers;      // errato: struttura completamente sbagliata
namespace Modules\<nome modulo>\App\Models;           // errato: 'App' nel namespace
namespace Modules\User\App\Services;              // errato: 'App' nel namespace
namespace Modules\Tenant\app\Repositories;        // errato: 'app' nel namespace
namespace App\Modules\<nome modulo>\Controllers;      // errato: struttura completamente sbagliata
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
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
```

## struttura fisica vs namespace

### importante: separazione tra percorso fisico e namespace

Anche se i file sono fisicamente collocati in una directory `app/`, il namespace **non deve mai riflettere** questa struttura.

```
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
Percorso fisico:    /Modules/<nome progetto>/app/Models/Patient.php
Namespace corretto: namespace Modules\<nome progetto>\Models;
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
>>>>>>> 472bd9dc (.)
=======
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
>>>>>>> 3bf39332 (.)
=======
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
>>>>>>> cf971011 (.)
=======
>>>>>>> 88e745db5 (.)
Percorso fisico:    /Modules/<nome progetto>/app/Models/Patient.php
Namespace corretto: namespace Modules\<nome progetto>\Models;
Percorso fisico:    /Modules/<nome progetto>/app/Models/Patient.php
Namespace corretto: namespace Modules\<nome modulo>\Models;
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
>>>>>>> 62cc8443 (.)
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/<nome progetto>/app/Models/Patient.php
Namespace corretto: namespace Modules\<nome progetto>\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
<<<<<<< HEAD
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
=======
>>>>>>> 43d67f21 (.)
=======
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
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
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
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
Percorso fisico:    /Modules/SaluteOra/app/Models/Patient.php
Namespace corretto: namespace Modules\SaluteOra\Models;
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
>>>>>>> 88e745db5 (.)
```

### mappatura corretta percorso-namespace

| percorso fisico | namespace corretto |
|-----------------|--------------------|
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
| `/Modules/<nome progetto>/app/Models/Patient.php` | `Modules\<nome progetto>\Models` |
| `/Modules/<nome progetto>/app/Filament/Resources/PatientResource.php` | `Modules\<nome progetto>\Filament\Resources` |
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
>>>>>>> 472bd9dc (.)
=======
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
>>>>>>> 3bf39332 (.)
=======
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
>>>>>>> cf971011 (.)
=======
>>>>>>> 88e745db5 (.)
| `/Modules/<nome progetto>/app/Models/Patient.php` | `Modules\<nome progetto>\Models` |
| `/Modules/<nome progetto>/app/Filament/Resources/PatientResource.php` | `Modules\<nome progetto>\Filament\Resources` |
| `/Modules/<nome progetto>/app/Models/Patient.php` | `Modules\<nome modulo>\Models` |
| `/Modules/<nome progetto>/app/Filament/Resources/PatientResource.php` | `Modules\<nome modulo>\Filament\Resources` |
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
>>>>>>> 62cc8443 (.)
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/<nome progetto>/app/Models/Patient.php` | `Modules\<nome progetto>\Models` |
| `/Modules/<nome progetto>/app/Filament/Resources/PatientResource.php` | `Modules\<nome progetto>\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
<<<<<<< HEAD
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
=======
>>>>>>> 43d67f21 (.)
=======
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
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
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
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
| `/Modules/SaluteOra/app/Models/Patient.php` | `Modules\SaluteOra\Models` |
| `/Modules/SaluteOra/app/Filament/Resources/PatientResource.php` | `Modules\SaluteOra\Filament\Resources` |
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
>>>>>>> 88e745db5 (.)
| `/Modules/Xot/app/Providers/XotServiceProvider.php` | `Modules\Xot\Providers` |

### struttura directory completa

```
Modules/
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
  <nome progetto>/
    app/                        // directory fisica
      Console/
        Commands/
          ImportPatient.php     // namespace Modules\<nome progetto>\Console\Commands;
      Models/
        Patient.php            // namespace Modules\<nome progetto>\Models;
      Filament/
        Resources/
          PatientResource.php  // namespace Modules\<nome progetto>\Filament\Resources;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
  SaluteOra/
    app/                        // directory fisica
      Console/
        Commands/
          ImportPatient.php     // namespace Modules\SaluteOra\Console\Commands;
      Models/
        Patient.php            // namespace Modules\SaluteOra\Models;
      Filament/
        Resources/
          PatientResource.php  // namespace Modules\SaluteOra\Filament\Resources;
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
>>>>>>> 5a14301c (.)
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
  <nome progetto>/
    app/                        // directory fisica
      Console/
        Commands/
          ImportPatient.php     // namespace Modules\<nome progetto>\Console\Commands;
      Models/
        Patient.php            // namespace Modules\<nome progetto>\Models;
      Filament/
        Resources/
          PatientResource.php  // namespace Modules\<nome progetto>\Filament\Resources;
  <nome progetto>/
    app/                        // directory fisica
      Console/
        Commands/
          ImportPatient.php     // namespace Modules\<nome modulo>\Console\Commands;
      Models/
        Patient.php            // namespace Modules\<nome modulo>\Models;
      Filament/
        Resources/
          PatientResource.php  // namespace Modules\<nome modulo>\Filament\Resources;
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
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
```

## come verificare i namespace

### verifica manuale

Prima di committare un file, verifica sempre che:

1. Il namespace **non** contenga `app` o `App`
2. Il namespace inizi sempre con `Modules\NomeModulo\`
3. Il resto del namespace rifletta la struttura logica delle classi

### uso di phpstan

Utilizza phpstan per verificare automaticamente i namespace:

```bash
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
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
<<<<<<< HEAD
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
=======
>>>>>>> d86d643a (.)
=======
php artisan phpstan:analyse --level=1 Modules/SaluteOra
>>>>>>> 472bd9dc (.)
=======
php artisan phpstan:analyse --level=1 Modules/SaluteOra
>>>>>>> 3bf39332 (.)
=======
php artisan phpstan:analyse --level=1 Modules/SaluteOra
>>>>>>> cf971011 (.)
=======
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
<<<<<<< HEAD
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/<nome progetto>
php artisan phpstan:analyse --level=1 Modules/SaluteOra
php artisan phpstan:analyse --level=1 Modules/SaluteOra
=======
>>>>>>> 43d67f21 (.)
=======
php artisan phpstan:analyse --level=1 Modules/SaluteOra
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
php artisan phpstan:analyse --level=1 Modules/SaluteOra
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
php artisan phpstan:analyse --level=1 Modules/SaluteOra
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
php artisan phpstan:analyse --level=1 Modules/SaluteOra
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
>>>>>>> 88e745db5 (.)
```

## motivazione di questa convenzione
- Mantiene i namespace puliti e coerenti
- Evita confusione con la struttura delle directory
- Facilita l'autoloading e la navigazione del codice
- Segue le best practice di Laravel per i moduli

## Note Importanti
- Questa convenzione si applica a TUTTI i moduli del framework
- Non ci sono eccezioni a questa regola
- I file possono essere fisicamente in `app/` ma il namespace non deve rifletterlo
- Questa convenzione è obbligatoria per mantenere la compatibilità con il framework

## Errori Comuni

### Pattern di Errore: Inclusione di `App` nel Namespace

Un errore comune è includere `App` nel namespace:

```php
// ERRATO ❌
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
namespace Modules\<nome progetto>\App\Console\Commands;

// CORRETTO ✓
namespace Modules\<nome progetto>\Console\Commands;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
namespace Modules\SaluteOra\App\Console\Commands;

// CORRETTO ✓
namespace Modules\SaluteOra\Console\Commands;
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
>>>>>>> 5a14301c (.)
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
namespace Modules\<nome progetto>\App\Console\Commands;

// CORRETTO ✓
namespace Modules\<nome progetto>\Console\Commands;
namespace Modules\<nome modulo>\App\Console\Commands;

// CORRETTO ✓
namespace Modules\<nome modulo>\Console\Commands;
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
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 88e745db5 (.)
```

### Conseguenze dell'Errore
- Class not found exceptions
- Problemi con l'autoloading
- Errori di binding resolution nel container Laravel
- Failure nei comandi artisan
- Errori di tipo "Target class does not exist"

## Strumenti di Verifica e Prevenzione

### Verifica Manuale
Utilizzare grep per trovare tutti i file con namespace errato:

```bash
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
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
<<<<<<< HEAD
=======
>>>>>>> ce6fc085 (.)
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
<<<<<<< HEAD
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_techplanner_fila3_mono/laravel/Modules
=======
>>>>>>> d86d643a (.)
=======
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
>>>>>>> 472bd9dc (.)
=======
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
>>>>>>> 3bf39332 (.)
=======
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
>>>>>>> cf971011 (.)
=======
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_techplanner_fila3_mono/laravel/Modules
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_techplanner_fila3_mono/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_techplanner_fila3_mono/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
<<<<<<< HEAD
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_techplanner_fila3_mono/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_techplanner_fila3_mono/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_<nome progetto>/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_techplanner_fila3_mono/laravel/Modules
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
=======
>>>>>>> 43d67f21 (.)
=======
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
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
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
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
grep -r "namespace Modules\\\\.*\\\\App\\\\" /var/www/html/base_saluteora/laravel/Modules
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
>>>>>>> 88e745db5 (.)
```

### PHP Stan
Configurare PHP Stan per verificare i namespace corretti:

```yaml

# phpstan.neon
parameters:
  checkMissingIterableValueType: false
  checkGenericClassInNonGenericObjectType: false
  checkAlwaysTrueInstanceof: false
  rules:
    - Modules\Xot\Rules\CorrectNamespaceRule
```

### IDE Configuration
Configurare il tuo IDE (PhpStorm, VSCode) per applicare automaticamente le convenzioni di namespace quando si creano nuovi file.

## Come Correggere

1. Individuare tutti i file con namespace errato
2. Correggere il namespace rimuovendo `App\` dal percorso
3. Aggiornare eventuali riferimenti a queste classi in altri file
4. Pulire la cache dell'applicazione dopo le modifiche

```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
