<<<<<<< HEAD
# Convenzioni di Naming

## Struttura delle Cartelle nei Moduli

### Case Sensitivity
- ✅ `resources/` (lowercase)
- ❌ `Resources/` (NO uppercase)
- ✅ `config/` (lowercase)
- ❌ `Config/` (NO uppercase)
- ✅ `app/` (lowercase)
- ❌ `App/` (NO uppercase)

La struttura corretta di un modulo deve seguire le convenzioni di Laravel per il case sensitivity:

```
Modules/
└── User/                 # PascalCase per il nome del modulo
    ├── app/             # lowercase per codice sorgente
    │   ├── Filament/    # PascalCase per namespace Filament
    │   │   ├── Resources/
    │   │   ├── Pages/
    │   │   └── Widgets/
    │   └── ...
    ├── resources/        # lowercase per cartelle standard Laravel
    │   ├── views/       # lowercase
    │   │   └── pages/   # lowercase per Folio
    │   ├── lang/        # lowercase
    │   ├── js/          # lowercase
    │   ├── css/         # lowercase
    │   └── images/      # lowercase
    ├── config/          # lowercase
    ├── database/        # lowercase
    └── docs/            # lowercase
```

### Regole Fondamentali

1. **Cartelle Standard Laravel**:
   - Usare sempre lowercase per le cartelle standard di Laravel
   - Esempi: `resources`, `config`, `database`, `routes`, `app`

2. **Nome dei Moduli**:
   - PascalCase per i nomi dei moduli
   - Esempi: `User`, `Patient`, `Dental`

3. **Sottocartelle**:
   - Lowercase per tutte le sottocartelle standard
   - PascalCase per namespace specifici (es: `Filament/`)

4. **Struttura Filament**:
   - I componenti Filament vanno in `app/Filament/`
   - Usare PascalCase per le sottocartelle di Filament
   - Esempio: `app/Filament/Resources/`, `app/Filament/Widgets/`

5. **Struttura Folio**:
   - Le pagine vanno in `resources/views/pages/`
   - Tutte le cartelle e file in lowercase
   - Usare `index.blade.php` per le pagine principali
   - Non definire rotte manualmente

### Esempi Corretti vs Errati

✅ Corretto:
```
Modules/User/resources/views/
Modules/User/config/
Modules/User/app/Filament/Widgets/
Modules/User/resources/views/pages/auth/logout.blade.php
```

❌ Errato:
```
Modules/User/Resources/views/      # NO: Resources con R maiuscola
Modules/User/Config/              # NO: Config con C maiuscola
Modules/User/Filament/Widgets/    # NO: Filament fuori da app/
Modules/User/resources/views/pages/Auth/Logout.blade.php  # NO: maiuscole
```

## Motivazioni

1. **Compatibilità**:
   - Laravel usa lowercase per le sue cartelle standard
   - Mantenere coerenza con il framework
   - Evitare problemi su sistemi case-sensitive

2. **Manutenibilità**:
   - Struttura prevedibile e coerente
   - Facilità di navigazione
   - Riduzione degli errori

3. **Deployment**:
   - Evitare problemi di deployment su sistemi Unix/Linux
   - Garantire consistenza tra ambienti diversi

4. **PSR-4 e Autoloading**:
   - Rispettare le convenzioni PSR-4
   - Facilitare l'autoloading delle classi
   - Mantenere coerenza con i namespace

## Best Practices

1. **Creazione Nuovi Moduli**:
   ```bash
   # Corretto
   php artisan module:make User
   
   # Errato
   php artisan module:make user
   ```

2. **Creazione Cartelle**:
   ```bash
   # Corretto
   mkdir -p Modules/User/resources/views/pages/auth
   mkdir -p Modules/User/app/Filament/Widgets
   
   # Errato
   mkdir -p Modules/User/Resources/Views
   mkdir -p Modules/User/Filament/Widgets
   ```

3. **Migrazione da Strutture Esistenti**:
   ```bash
   # Rinominare cartelle non conformi
   mv Modules/User/Resources Modules/User/resources_temp
   mv Modules/User/resources_temp Modules/User/resources
   
   # Spostare Filament nella posizione corretta
   mv Modules/User/Filament Modules/User/app/Filament
   ```

## Collegamenti
- [Laravel Filesystem](https://laravel.com/docs/filesystem)
- [Nwidart Module Structure](https://nwidart.com/laravel-modules/v6/introduction)
- [PSR-4 Autoloading](https://www.php-fig.org/psr/psr-4/)
- [Filament Documentation](https://filamentphp.com/docs)
- [Folio Documentation](https://laravel.com/docs/folio)

## Note Importanti
- Mantenere questa convenzione in tutti i nuovi moduli
- Aggiornare moduli esistenti per conformarsi
- Documentare eccezioni se necessarie
- Utilizzare strumenti di linting per verificare la conformità
- I componenti Filament devono sempre essere in `app/Filament/`
- Le cartelle standard Laravel devono sempre essere in lowercase
- Le pagine Folio devono seguire la struttura `resources/views/pages/` 
## Collegamenti tra versioni di CONVENTIONS.md
* [CONVENTIONS.md](../../../Xot/docs/CONVENTIONS.md)
* [CONVENTIONS.md](../../../Dental/docs/CONVENTIONS.md)
* [CONVENTIONS.md](../../../Patient/docs/CONVENTIONS.md)


## Collegamenti tra versioni di conventions.md
* [conventions.md](../../../../docs/tecnico/filament/conventions.md)
* [conventions.md](../../../../docs/conventions.md)
* [conventions.md](../../Dental/docs/conventions.md)
* [conventions.md](../../Patient/docs/conventions.md)

=======
# Ripresa lavori

- **Mai il metodo `down` nelle migrazioni anonime che estendono XotBaseMigration**
- Ogni colonna usata nelle azioni deve essere aggiunta tramite update sicuro (`hasColumn`), fallback robusto e documentazione aggiornata
- Aggiornare sempre sia questa documentazione che quella nei moduli
- Link rapidi:
  - [Pipeline Performance](../../Performance/docs/organizzativa-pipeline.md)
  - [Best practices Performance](../../Performance/docs/performance-best-practices.md)
  - [Distribuzione valutatore_id](../../Performance/docs/valutatore-distribution-implementation.md)
  - [Regole naming](../../Performance/docs/convenzioni-modulo.md)
  - [Azioni](../../Performance/docs/azioni_organizzativa.md)
- Warning: errori comuni su naming, colonne mancanti, fallback, convenzioni

---

# Convenzioni per lo Sviluppo in Laraxot <nome progetto>

Questo documento definisce le regole e le convenzioni da seguire per lo sviluppo nel framework Laraxot <nome progetto>, con particolare attenzione alla compatibilità con PHPStan livello 9.

## Struttura dei Namespace

### Regola Fondamentale dei Namespace

I namespace nei moduli **NON** devono includere il segmento `app` anche se i file sono fisicamente collocati nella directory `app`.

#### ✅ CORRETTO
```php
namespace Modules\NomeModulo\Models;
namespace Modules\NomeModulo\Http\Controllers;
namespace Modules\NomeModulo\Datas;
namespace Modules\NomeModulo\Actions;
```

#### ❌ ERRATO
```php
namespace Modules\NomeModulo\App\Models;
namespace Modules\NomeModulo\App\Http\Controllers;
namespace Modules\NomeModulo\App\Datas;
```

### Mappatura tra Directory e Namespace

| Directory fisica                             | Namespace corretto                   |
|---------------------------------------------|-------------------------------------|
| `Modules/Rating/app/Models/`                | `Modules\Rating\Models`             |
| `Modules/Rating/app/Http/Controllers/`      | `Modules\Rating\Http\Controllers`   |
| `Modules/Rating/app/Providers/`             | `Modules\Rating\Providers`          |
| `Modules/Rating/app/Datas/`                 | `Modules\Rating\Datas`              |
| `Modules/Rating/app/Actions/`               | `Modules\Rating\Actions`            |
| `Modules/Rating/app/Filament/Resources/`    | `Modules\Rating\Filament\Resources` |

## Data Objects con Spatie Laravel Data

### Posizione e Namespace Corretti

- Directory: `Modules/NomeModulo/app/Datas/`
- Namespace: `Modules\NomeModulo\Datas`

### Implementazione di un Data Object

```php
<?php

declare(strict_types=1);

namespace Modules\Rating\Datas;

use Spatie\LaravelData\Data;

class RatingData extends Data
{
    public function __construct(
        public int $value,
        public string $comment,
        public ?string $user_id = null,
    ) {
    }
    
    public static function fromRequest(array $data): self
    {
        return new self(
            value: $data['value'] ?? 0,
            comment: $data['comment'] ?? '',
            user_id: $data['user_id'] ?? null,
        );
    }
}
```

## QueueableActions invece di Services

### Posizione e Namespace Corretti

- Directory: `Modules/NomeModulo/app/Actions/`
- Namespace: `Modules\NomeModulo\Actions`

### Implementazione di una QueueableAction

```php
<?php

declare(strict_types=1);

namespace Modules\Rating\Actions;

use Modules\Rating\Datas\RatingData;
use Modules\Rating\Models\Rating;
use Spatie\QueueableAction\QueueableAction;

class CreateRatingAction
{
    use QueueableAction;
    
    public function execute(RatingData $data): Rating
    {
        $rating = new Rating();
        $rating->value = $data->value;
        $rating->comment = $data->comment;
        $rating->user_id = $data->user_id;
        $rating->save();
        
        return $rating;
    }
}
```

### Esecuzione in Background

```php
// Esecuzione sincrona
$rating = $createRatingAction->execute($ratingData);

// Esecuzione in background (coda)
$createRatingAction->onQueue('ratings')->execute($ratingData);
```

## Tipizzazione Corretta per PHPStan Livello 9

### Proprietà nei Modelli

```php
/**
 * @var list<string>  // Usare list<string> invece di array<string> o string[]
 */
protected $fillable = ['id', 'name', 'email'];

/**
 * @var list<string>
 */
protected $hidden = ['password', 'remember_token'];

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
```

### Tipo di Ritorno per newFactory()

```php
/**
 * @return \Illuminate\Database\Eloquent\Factories\Factory
 */
protected static function newFactory(): Factory
{
    $factoryNamespace = UserFactory::class;
    
    if (class_exists($factoryNamespace)) {
        return app($factoryNamespace);
    }
    
    return Factory::factoryForModel(static::class);
}
```

### Gestione delle Funzioni che Restituiscono false

```php
// ERRATO - strrpos può restituire false
$namespace = substr(static::class, 0, strrpos(static::class, '\\'));

// CORRETTO
$position = strrpos(static::class, '\\');
if ($position === false) {
    $namespace = '';
} else {
    $namespace = substr(static::class, 0, $position);
}
```

### Tipi Generici nelle Relazioni Eloquent

```php
/**
 * @return BelongsToMany<User, Role>  // Specificare SEMPRE entrambi i tipi
 */
public function users(): BelongsToMany
{
    return $this->belongsToMany(User::class);
}

/**
 * @return MorphMany<Comment, Post>  // Specificare SEMPRE entrambi i tipi
 */
public function comments(): MorphMany
{
    return $this->morphMany(Comment::class, 'commentable');
}
```

## Service Providers

### Struttura Corretta

```php
<?php

declare(strict_types=1);

namespace Modules\Rating\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class RatingServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Rating';  // IMPORTANTE: Deve coincidere col nome del modulo
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    
    // Implementazione...
}
```

## Visibilità Corretta nei Metodi

### Trait HasXotTable per Filament

```php
// Visibilità pubblica obbligatoria quando si implementa un'interfaccia
public function getTableHeaderActions(): array
{
    return [
        // Implementazione...
    ];
}
```

## Gestione dei Valori Mixed

```php
// ERRATO
$databaseName = (string) config("database.connections.{$connection}.database");

// CORRETTO
$databaseConfig = config("database.connections.{$connection}.database");
$databaseName = is_string($databaseConfig) ? $databaseConfig : '';
```

## Risoluzione dei Problemi PHPStan

### Approccio Modulare

1. Eseguire PHPStan su ciascun modulo separatamente:
   ```bash
   ./vendor/bin/phpstan analyse --level=9 --memory-limit=2G Modules/NomeModulo
   ```

2. Correggere prima i problemi nei modelli base e nelle tipizzazioni

3. Correggere i namespace errati

4. Correggere i tipi generici nelle relazioni

5. Correggere i metodi di factory nei modelli

6. Documentare le soluzioni nella cartella `docs` del modulo

### Ignorare Temporaneamente gli Errori

```php
/** @phpstan-ignore-next-line */
$value = $data['key'];

/**
 * @phpstan-ignore offsetAccess.nonOffsetAccessible
 */
```

## Documentazione

Ogni modulo dovrebbe avere una cartella `docs` con documentazione specifica:

```
Modules/NomeModulo/
└── docs/
    ├── README.md                  # Panoramica del modulo
    ├── MODELS.md                  # Struttura e relazioni dei modelli
    ├── ENDPOINTS.md               # API e endpoints
    └── PHPSTAN-SOLUTIONS.md       # Soluzioni ai problemi PHPStan
```

## Vantaggi dell'Approccio

1. **Coerenza**: Struttura uniforme in tutto il codebase
2. **Compatibilità PHPStan**: Codice verificabile a livello 9
3. **Tipo di Ritorno Esplicito**: Facilità di comprensione del codice
4. **Forte Tipizzazione**: Riduzione degli errori a runtime
5. **Manutenibilità**: Facilità di manutenzione e evoluzione del codice
6. **Testabilità**: Componenti isolati e facilmente testabili 

## Tipizzazione delle Relazioni Eloquent

### Tipi di Ritorno Corretti per le Relazioni

```php
/**
 * @return MorphTo<\Illuminate\Database\Eloquent\Model, static>
 */
public function authenticatable(): MorphTo
{
    return $this->morphTo();
}

/**
 * @return BelongsTo<Profile, static>
 */
public function profile(): BelongsTo
{
    return $this->belongsTo(Profile::class);
}

/**
 * @return HasMany<DeviceUser, static>
 */
public function deviceUsers(): HasMany
{
    return $this->hasMany(DeviceUser::class);
}
```

### Gestione dei Tipi di Ritorno per Metodi che Accedono a Proprietà

```php
/**
 * @return array<string, mixed>|null
 */
public function getLocation(): ?array
{
    return $this->location;
}

/**
 * @return \Illuminate\Support\Carbon|null
 */
public function getLoginAt(): ?Carbon
{
    return $this->login_at;
}
```

### Tipi Generici nelle Relazioni

Quando si definiscono relazioni in Eloquent, è importante utilizzare i tipi generici corretti:

1. Per `BelongsTo`:
   ```php
   /**
    * @return BelongsTo<RelatedModel, static>
    */
   ```

2. Per `HasMany`:
   ```php
   /**
    * @return HasMany<RelatedModel, static>
    */
   ```

3. Per `MorphTo`:
   ```php
   /**
    * @return MorphTo<RelatedModel, static>
    */
   ```

4. Per `MorphMany`:
   ```php
   /**
    * @return MorphMany<RelatedModel, static>
    */
   ```

### Gestione dei Tipi Nullable

Quando si lavora con proprietà che possono essere null:

```php
/**
 * @return array<string, mixed>|null
 */
public function getSettings(): ?array
{
    return $this->settings;
}

/**
 * @return \Illuminate\Support\Carbon|null
 */
public function getLastLoginAt(): ?Carbon
{
    return $this->last_login_at;
}
```

### Tipi di Ritorno per Metodi di Factory

```php
/**
 * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
 */
protected static function newFactory(): Factory
{
    return UserFactory::new();
}
```

## Gestione dei Tipi e Controlli di Tipo

### Controlli di Tipo Ridondanti

Evitare controlli di tipo ridondanti che PHPStan può rilevare come sempre veri o sempre falsi:

```php
// ❌ ERRATO: Il controllo è ridondante
if (is_string($stringVariable)) {
    // $stringVariable è già dichiarata come string
}

// ✅ CORRETTO: Usa il tipo corretto fin dall'inizio
function processString(string $value): void {
    // Il tipo è già garantito
}
```

### Controlli di Istanza

Evitare controlli di istanza ridondanti:

```php
// ❌ ERRATO: Il controllo è sempre vero
if ($user instanceof UserContract && $user instanceof UserContract) {
    // Doppio controllo inutile
}

// ✅ CORRETTO: Controllo singolo quando necessario
if ($user instanceof UserContract) {
    // Procedi con la logica
}
```

### Tipi di Ritorno nelle Relazioni

Quando si definiscono relazioni, usare `static` invece di `$this` per il tipo di ritorno:

```php
// ❌ ERRATO: Uso di $this
/**
 * @return BelongsTo<Profile, $this>
 */
public function profile(): BelongsTo
{
    return $this->belongsTo(Profile::class);
}

// ✅ CORRETTO: Uso di static
/**
 * @return BelongsTo<Profile, static>
 */
public function profile(): BelongsTo
{
    return $this->belongsTo(Profile::class);
}
```

### Tipi di Ritorno Compatibili

Quando si estende una classe o si implementa un'interfaccia, assicurarsi che i tipi di ritorno siano compatibili:

```php
// ❌ ERRATO: Tipo di ritorno incompatibile
class Profile extends BaseModel
{
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);  // Tipo incompatibile con il metodo padre
    }
}

// ✅ CORRETTO: Tipo di ritorno compatibile
class Profile extends BaseModel
{
    /**
     * @return BelongsTo<\Illuminate\Database\Eloquent\Model&\Modules\Xot\Contracts\ProfileContract, static>
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);  // Tipo compatibile con il metodo padre
    }
}
```

### Tipi Nullable e Controlli

Quando si lavora con tipi nullable, essere espliciti nei controlli:

```php
// ❌ ERRATO: Controllo implicito
public function processValue($value): string
{
    if ($value) {
        return $value;
    }
    return '';
}

// ✅ CORRETTO: Controllo esplicito
public function processValue(?string $value): string
{
    if ($value !== null) {
        return $value;
    }
    return '';
}
```

### Funzioni di Callback e Tipi di Ritorno

Quando si usano funzioni di callback, specificare sempre i tipi di ritorno:

```php
// ❌ ERRATO: Tipo di ritorno non specificato
$collection->map(function ($item) {
    return $item->value;
});

// ✅ CORRETTO: Tipo di ritorno specificato
$collection->map(function ($item): string {
    return $item->value;
});
```

### Gestione dei Contratti e Implementazioni

Quando si implementa un'interfaccia, assicurarsi che i tipi di ritorno siano compatibili:

```php
// ❌ ERRATO: Tipo di ritorno incompatibile
public function user(): UserContract
{
    return $this;  // Ritorna $this invece del tipo corretto
}

// ✅ CORRETTO: Tipo di ritorno compatibile
public function user(): UserContract
{
    return $this->user;  // Ritorna un'istanza di UserContract
}
```

## Controlli di Tipo e Validazioni

### Controlli di Tipo con is_string()

Evitare l'uso di `is_string()` su tipi che non possono essere stringhe:

```php
// ❌ ERRATO: L'oggetto non può mai essere una stringa
if (is_string($user)) {
    // Questo codice non verrà mai eseguito
}

// ✅ CORRETTO: Controllo il valore di una proprietà che potrebbe essere una stringa
if (is_string($user->name)) {
    // Procedi con la logica
}
```

### Controlli di Istanza Ridondanti

Evitare controlli di istanza ridondanti o impossibili:

```php
// ❌ ERRATO: Controllo ridondante
if ($user instanceof UserContract && $user instanceof UserContract) {
    // Doppio controllo inutile
}

// ❌ ERRATO: Controllo impossibile
if ($stringValue instanceof string) {
    // I tipi primitivi non possono essere usati con instanceof
}

// ✅ CORRETTO: Controllo singolo quando necessario
if ($user instanceof UserContract) {
    // Procedi con la logica
}
```

### Tipi di Ritorno nelle Relazioni Eloquent

Quando si definiscono relazioni Eloquent, usare sempre `static` invece di `$this` per il tipo di ritorno:

```php
// ❌ ERRATO: Uso di $this nel tipo di ritorno
/**
 * @return BelongsTo<Profile, $this>
 */
public function profile(): BelongsTo
{
    return $this->belongsTo(Profile::class);
}

// ✅ CORRETTO: Uso di static nel tipo di ritorno
/**
 * @return BelongsTo<Profile, static>
 */
public function profile(): BelongsTo
{
    return $this->belongsTo(Profile::class);
}
```

### Tipi di Ritorno Compatibili

Quando si estende una classe o si implementa un'interfaccia, assicurarsi che i tipi di ritorno siano compatibili:

```php
// ❌ ERRATO: Tipo di ritorno incompatibile
class Profile extends BaseModel
{
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);  // Tipo incompatibile con il metodo padre
    }
}

// ✅ CORRETTO: Tipo di ritorno compatibile
class Profile extends BaseModel
{
    /**
     * @return BelongsTo<\Illuminate\Database\Eloquent\Model&\Modules\Xot\Contracts\ProfileContract, static>
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);  // Tipo compatibile con il metodo padre
    }
}
```

### Tipi Nullable e Controlli

Quando si lavora con tipi nullable, essere espliciti nei controlli:

```php
// ❌ ERRATO: Controllo implicito
public function processValue($value): string
{
    return $value ?? '';  // Non è chiaro il tipo di $value
}

// ✅ CORRETTO: Tipo e controllo espliciti
public function processValue(?string $value): string
{
    return $value ?? '';  // È chiaro che $value è una stringa nullable
}
```

## File .gitignore Standardizzati

### Prototipo Standardizzato

Tutti i moduli Laraxot devono utilizzare il prototipo standardizzato per i file `.gitignore` definito in `laravel/Modules/Xot/docs/gitignore-prototype.md`.

### Regole Obbligatorie

1. **`*:Zone.Identifier`**: **OBBLIGATORIO** in tutti i moduli per ignorare i file di identificazione della zona Windows
2. **Struttura organizzata**: Sezioni ben definite per dipendenze, cache, build, Laravel, configurazioni locali, IDE, Git, file temporali e documentazione
3. **Ordinamento alfabetico**: All'interno di ogni sezione, le regole devono essere ordinate alfabeticamente
4. **Commenti descrittivi**: Ogni sezione deve avere un commento che ne descrive il contenuto

### Struttura Standard

```gitignore
# Dependencies and packages
/vendor/
/node_modules/
/docs/vendor/

# Lock files and cache
*.lock
*.cache
*.phar
*.jar
package-lock.json
yarn-error.log
npm-debug.log
composer.lock
.phpunit.result.cache
.php-cs-fixer.cache

# Log files
*.log
error_log

# Build directories
/build/
/build
build/

# Laravel specific
bootstrap/compiled.php
app/storage/
public/storage
public/hot
public_html/storage
public_html/hot
storage/*.key
.env

# Local configurations
Homestead.yaml
Homestead.json
/.vagrant

# IDE specific
/.idea
.phpintel

# Git specific
.git-blame-ignore-revs
.git-rewrite/
.git-rewrite

# Temporary and system files
*.tmp
*.swp
*.swo
*.stackdump
*.exe
*:Zone.Identifier
.DS_Store
*.old
*.old1
*.backup
*.backup.*
*.bak
*.new

# Documentation and cache
docs/phpstan/
docs/cache/
cache/

# Development tools
.windsurf/
.cursor/
```

### Verifica Conformità

Per verificare che un modulo rispetti il prototipo standardizzato:

1. Controllare la presenza di `*:Zone.Identifier`
2. Verificare l'ordinamento alfabetico delle regole
3. Assicurarsi che tutte le sezioni standard siano presenti
4. Controllare che i commenti siano appropriati

### Aggiornamento dei Moduli

Quando si aggiorna un modulo esistente:

1. Copiare il prototipo standardizzato
2. Verificare che tutte le regole siano presenti
3. Mantenere eventuali regole specifiche del modulo (se necessarie)
4. Documentare eventuali personalizzazioni nella documentazione del modulo

---

**Data Creazione**: 27 Gennaio 2025  
**Ultimo Aggiornamento**: 3 Giugno 2025 (aggiunta standardizzazione .gitignore)  
**Stato**: Consolidato da docs/ root  
**Priorità**: CRITICA (Convenzioni fondamentali Laraxot)
>>>>>>> b9c66c44e (.)
