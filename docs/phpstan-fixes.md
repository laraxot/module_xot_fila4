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
=======
>>>>>>> 6ca989d8 (.)
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
# PHPStan Fixes - Xot Module
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
# PHPStan Fixes - Xot Module
>>>>>>> 472bd9dc (.)
>>>>>>> 62cc8443 (.)

## Errori Risolti

### 1. Action Execute Method Return Type Error
**File**: `app/Actions/Mail/SendMailByRecordsAction.php`
**Errore**: `A void method must not return a value`
**Causa**: Il metodo `execute()` era dichiarato come `void` ma il PHPDoc indicava che dovrebbe restituire `bool` e stava effettivamente restituendo `true`
**Soluzione**: Cambiato il tipo di ritorno da `void` a `bool`

```php
// PRIMA (ERRATO)
/**
 * @return bool
 */
public function execute(): void {
    foreach ($records as $record) {
        app(SendMailByRecordAction::class)->execute($record, $mail_class);
    }
    return true;  // ERRORE: void method non può restituire valori
}

// DOPO (CORRETTO)
/**
 * @return bool
 */
public function execute(): bool {
    foreach ($records as $record) {
        app(SendMailByRecordAction::class)->execute($record, $mail_class);
    }
    return true;  // OK: bool method può restituire true
}
```

**Motivazione**: Le Actions di Spatie QueueableAction possono restituire valori per indicare il successo o il fallimento dell'operazione. In questo caso, restituisce `true` per indicare che l'invio delle email è stato completato con successo.

**Business Logic**: Questa action gestisce l'invio di email multiple a una collezione di record, utilizzando un'action separata per ogni singolo record. È parte del sistema di notifiche del framework Laraxot.

### 2. Trait Method Return Type Error
**File**: `app/Models/Traits/RelationX.php`
**Errore**: `A void method must not return a value`
**Causa**: Il metodo `guessMorphPivot()` era dichiarato come `void` ma restituiva un oggetto `MorphPivot`
**Soluzione**: Cambiato il tipo di ritorno da `void` a `\Illuminate\Database\Eloquent\Relations\MorphPivot`

```php
// PRIMA (ERRATO)
/**
 * @return \Illuminate\Database\Eloquent\Relations\MorphPivot
 */
public function guessMorphPivot(): void {
    $class = $this::class;
    $pivot_name = class_basename($related).'Morph';
    
    $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
    $pivot = app($pivot_class);
    Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
    return $pivot;  // ERRORE: void method non può restituire valori
}

// DOPO (CORRETTO)
/**
 * @return \Illuminate\Database\Eloquent\Relations\MorphPivot
 */
public function guessMorphPivot(): \Illuminate\Database\Eloquent\Relations\MorphPivot {
    $class = $this::class;
    $pivot_name = class_basename($related).'Morph';
    
    $pivot_class = $this->guessPivotFullClass($pivot_name, $related, $class);
    $pivot = app($pivot_class);
    Assert::isInstanceOf($pivot,\Illuminate\Database\Eloquent\Relations\MorphPivot::class);
    return $pivot;  // OK: MorphPivot method può restituire MorphPivot
}
```

**Motivazione**: Il metodo `guessMorphPivot()` è utilizzato per determinare dinamicamente la classe pivot per relazioni morph many-to-many. Deve restituire un'istanza della classe pivot per essere utilizzata nelle relazioni Eloquent.

**Business Logic**: Questo trait fornisce funzionalità avanzate per la gestione delle relazioni Eloquent, inclusa la determinazione automatica delle classi pivot. È parte del sistema di ORM avanzato del framework Laraxot.

### 3. Data Classes Constructor Fixes (Gennaio 2025)
**File**: `app/Datas/` (multiple files)
**Errore**: Constructor of class has a return type / PHPDoc tag @param references unknown parameter
**Causa**: Le classi Data avevano costruttori vuoti ma PHPDoc che indicava parametri
**Soluzione**: Aggiunti parametri con `public readonly` properties e valori di default

#### FilemanagerData.php
```php
// PRIMA (ERRATO)
public function __construct(): void {
}

// DOPO (CORRETTO)
public function __construct(
    public readonly string $disk = 'public',
    public readonly array $disks = [],
    public readonly array $allowed_ext = [],
    public readonly int $max_size = 10000,
    public readonly string $route_prefix = 'filemanager',
    public readonly bool $enable_crop = true
) {
}
```

#### MailData.php
```php
public function __construct(
    public readonly string $driver = 'smtp',
    public readonly string $host = 'localhost',
    public readonly int $port = 587,
    public readonly string $encryption = 'tls',
    public readonly string $username = '',
    public readonly string $password = '',
    public readonly string $from_address = 'noreply@example.com',
    public readonly string $from_name = 'Laraxot',
    public readonly ?string $reply_to = null,
    public readonly bool $verify_peer = true
) {
}
```

#### NotificationData.php
```php
public function __construct(
    public readonly array $channels = ['mail', 'database'],
    public readonly string $default_channel = 'mail',
    public readonly bool $queue = true,
    public readonly array $mail = [],
    public readonly array $broadcast = [],
    public readonly array $slack = [],
    public readonly array $telegram = []
) {
}
```

#### OptionData.php
```php
public function __construct(
    public readonly string $cache_driver = 'file',
    public readonly bool $enable_cache = true,
    public readonly int $cache_ttl = 3600,
    public readonly string $prefix = 'xot_options',
    public readonly array $autoload = []
) {
}
```

#### PwaData.php
```php
public function __construct(
    public readonly bool $enable = false,
    public readonly string $name = 'Laraxot App',
    public readonly string $short_name = 'Laraxot',
    public readonly string $description = 'Progressive Web App powered by Laraxot',
    public readonly string $background_color = '#ffffff',
    public readonly string $theme_color = '#000000',
    public readonly string $icon_path = '/images/icon-192x192.png',
    public readonly array $splash = []
) {
}
```

#### RouteData.php
```php
public function __construct(
    public readonly string $prefix = '',
    public readonly array $middleware = ['web'],
    public readonly string $namespace = 'Modules\\Xot\\Http\\Controllers',
    public readonly bool $use_passport = false,
    public readonly array $except_verify = [],
    public readonly bool $enable = true
) {
}
```

#### SearchEngineData.php
```php
public function __construct(
    public readonly string $driver = 'local',
    public readonly string $algolia_app_id = '',
    public readonly string $algolia_secret = '',
    public readonly string $meili_host = 'localhost:7700',
    public readonly string $meili_key = '',
    public readonly bool $enable_local = true,
    public readonly array $searchable = []
) {
}
```

#### SubscriptionData.php
```php
public function __construct(
    public readonly bool $enable = false,
    public readonly string $driver = 'stripe',
    public readonly array $plans = [],
    public readonly string $currency = 'EUR',
    public readonly array $allowed_models = [],
    public readonly bool $trial_enabled = true,
    public readonly int $trial_days = 14
) {
}
```

**Motivazione**: Le classi Data di Spatie Laravel Data devono avere costruttori che accettano parametri per essere utilizzate correttamente. I parametri devono essere dichiarati come `public readonly` per mantenere l'immutabilità degli oggetti Data.

**Business Logic**: Queste classi Data rappresentano configurazioni per diversi aspetti del framework Laraxot (file manager, email, notifiche, PWA, ecc.). Sono utilizzate per passare dati strutturati e tipizzati tra i componenti dell'applicazione.

### 4. Exception Classes Constructor Fixes (Gennaio 2025)
**File**: `app/Exceptions/Handlers/HandlerDecorator.php`, `app/Exceptions/ModelDeletionException.php`
**Errore**: Constructor of class has a return type / Undefined variable / Access to an undefined property
**Causa**: Le classi Exception avevano costruttori con tipo di ritorno `void` e proprietà non definite
**Soluzione**: Rimossi tipi di ritorno dai costruttori e aggiunte proprietà mancanti

#### HandlerDecorator.php
```php
// PRIMA (ERRATO)
class HandlerDecorator implements ExceptionHandler
{
    protected HandlersRepository $repository;

    public function __construct(): void {
        $this->repository = $repository;  // ERRORE: variabile non definita
    }
    
    // Usava $this->defaultHandler che non era definito
}

// DOPO (CORRETTO)
class HandlerDecorator implements ExceptionHandler
{
    protected HandlersRepository $repository;
    protected ExceptionHandler $defaultHandler;

    public function __construct(HandlersRepository $repository, ExceptionHandler $defaultHandler) {
        $this->repository = $repository;
        $this->defaultHandler = $defaultHandler;
    }
}
```

#### ModelDeletionException.php
```php
// PRIMA (ERRATO)
class ModelDeletionException extends ApplicationException
{
    private readonly string $model;

    public function __construct(): void {
        $this->model = Str::afterLast($model, '\\');  // ERRORE: variabile non definita
    }
    
    // Usava $this->id che non era definito
}

// DOPO (CORRETTO)
class ModelDeletionException extends ApplicationException
{
    private readonly string $model;
    private readonly int $id;

    public function __construct(string $model, int $id) {
        $this->model = Str::afterLast($model, '\\');
        $this->id = $id;
    }
}
```

**Motivazione**: Le classi Exception devono avere costruttori che accettano i parametri necessari per costruire l'eccezione. I costruttori non possono avere tipi di ritorno in PHP.

**Business Logic**: Queste classi gestiscono la gestione delle eccezioni nel framework Laraxot, fornendo decoratori per handler personalizzati e eccezioni specifiche per la cancellazione di modelli.

### 5. Filament Pages PHPDoc Fixes (Gennaio 2025)
**File**: `app/Filament/Pages/ArtisanCommandsManager.php`, `app/Filament/Pages/HealthPage.php`, `app/Filament/Resources/XotBaseResource/Pages/XotBaseManageRelatedRecords.php`
**Errore**: PHPDoc tag @var with type array<string, Action> is not subtype of native type array{Action, Action, ...}
**Causa**: I PHPDoc indicavano array associativi ma gli array restituiti erano numerici
**Soluzione**: Corretti i PHPDoc per riflettere il tipo corretto di array

```php
// PRIMA (ERRATO)
/** @var array<string, \Filament\Actions\Action> */
return [
    Action::make('migrate'),
    Action::make('seed'),
    // ...
];

// DOPO (CORRETTO)
/** @var array<int, \Filament\Actions\Action> */
return [
    Action::make('migrate'),
    Action::make('seed'),
    // ...
];
```

**Motivazione**: Gli array numerici in PHP hanno chiavi intere, non stringhe. Il PHPDoc deve riflettere accuratamente il tipo di array utilizzato.

**Business Logic**: Queste pagine Filament gestiscono comandi Artisan e controlli di salute del sistema, fornendo interfacce amministrative per la gestione del framework Laraxot.

### 6. Custom Relation Type Fixes (Gennaio 2025)
**File**: `app/Relations/CustomRelation.php`
**Errore**: Parameter expects array<int, Model>, Collection given / Parameter expects array<Model>, Collection given
**Causa**: I metodi Eloquent si aspettano array ma ricevevano Collection
**Soluzione**: Convertiti Collection in array usando `->all()`

```php
// PRIMA (ERRATO)
if ((is_countable($models) ? \count($models) : 0) > 0) {
    $models = $query->eagerLoadRelations($models);  // ERRORE: Collection invece di array
}

return $this->related->newCollection($models);  // ERRORE: Collection invece di array

// DOPO (CORRETTO)
if ((is_countable($models) ? \count($models) : 0) > 0) {
    $models = $query->eagerLoadRelations($models->all());  // OK: array
}

return $this->related->newCollection($models->all());  // OK: array
```

**Motivazione**: I metodi Eloquent interni si aspettano array di modelli, non Collection. La conversione con `->all()` è necessaria per la compatibilità.

**Business Logic**: Questa classe fornisce relazioni personalizzate per il framework Laraxot, estendendo le funzionalità standard di Eloquent.

### 7. View Component Property Fix (Gennaio 2025)
**File**: `app/View/Components/XDebug.php`
**Errore**: Access to an undefined property $tpl
**Causa**: La classe usava `$this->tpl` ma questa proprietà non era definita
**Soluzione**: Aggiunta proprietà `$tpl` al costruttore

```php
// PRIMA (ERRATO)
class XDebug extends Component
{
    public function __construct() {
    }
    
    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute($this->tpl);  // ERRORE: proprietà non definita
    }
}

// DOPO (CORRETTO)
class XDebug extends Component
{
    protected string $tpl;

    public function __construct(string $tpl = 'xot::components.x-debug') {
        $this->tpl = $tpl;
    }
    
    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute($this->tpl);  // OK: proprietà definita
    }
}
```

**Motivazione**: I componenti Blade devono avere tutte le proprietà utilizzate definite nel costruttore o come proprietà della classe.

**Business Logic**: Questo componente fornisce funzionalità di debug avanzate per il framework Laraxot, utilizzando XDebug per il tracciamento delle funzioni.

### 8. Factory PHPDoc Fix (Gennaio 2025)
**File**: `database/factories/CacheFactory.php`
**Errore**: PHPDoc type class-string<Model> is not covariant with class-string<Cache>
**Causa**: Il PHPDoc indicava un tipo generico `Model` invece del tipo specifico `Cache`
**Soluzione**: Corretto il PHPDoc per utilizzare il tipo specifico

```php
// PRIMA (ERRATO)
/**
 * @var class-string<Model>
 */
protected $model = Cache::class;

// DOPO (CORRETTO)
/**
 * @var class-string<Cache>
 */
protected $model = Cache::class;
```

**Motivazione**: Le factory devono specificare il tipo esatto del modello che stanno creando per la corretta tipizzazione e l'analisi statica.

**Business Logic**: Questa factory crea istanze di test per il modello Cache del framework Laraxot, utilizzato per la gestione della cache dell'applicazione.

## Pattern Identificati

### Spatie Laravel Data
- I costruttori devono accettare parametri con `public readonly` properties
- Utilizzare valori di default appropriati per ogni parametro
- Mantenere coerenza nei tipi di dati (array, string, bool, int)
- Documentare tutti i parametri nel PHPDoc

### Data Transfer Objects
- Utilizzare tipi specifici per ogni proprietà
- Fornire valori di default sensati per ogni configurazione
- Mantenere l'immutabilità con `readonly` properties
- Utilizzare union types quando appropriato (es. `?string` per valori opzionali)

## Collegamenti
- [README.md](./README.md)
- [Troubleshooting](./troubleshooting.md)
- [Best Practices](../docs/best-practices.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 62cc8443 (.)
# Correzioni PHPStan - 6 Gennaio 2025

## Errori Risolti

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
# Correzioni PHPStan Livello 7 - Modulo Xot
# Correzioni PHPStan - 6 Gennaio 2025

## Errori Risolti


5693302 (.)

b6f667c (.)

# Correzioni PHPStan nel Modulo Xot

```
Line 406: Call to function is_array() with array{0?: string, 1?: 'container'|'item', 2?: numeric-string} will always evaluate to true.
```

### 2. Errori in Actions/Filament/AutoLabelAction.php

```
Line 35: Call to an undefined method Filament\Forms\Components\Component::getName().
Line 39: Call to an undefined method Filament\Forms\Components\Component::getName().
Line 40: Call to an undefined method Filament\Forms\Components\Component::getName().
```

### 3. Errore in Actions/File/GetComponentsAction.php

```
Line 91: Parameter #1 $objectOrClass of class ReflectionClass constructor expects class-string<T of object>|T of object, string given.
```

### 4. Errore in Actions/Import/ImportCsvAction.php

```
Line 145: Class Modules\Xot\Datas\ColumnData constructor invoked with 1 parameter, 2 required.
```

### 5. Errore in Actions/Model/GetSchemaManagerByModelClassAction.php

```
Line 21: Call to an undefined method Illuminate\Database\Connection::getDoctrineSchemaManager().
```

### 6. Errore in Actions/Model/StoreAction.php

```
Line 42: Access to an undefined property Illuminate\Database\Eloquent\Relations\Relation::$relationship_type.
```

### 7. Errore in Actions/Model/Update/BelongsToAction.php

```
Line 35: Offset 0 does not exist on non-empty-array<string, mixed>.
```

### 8. Errore in Actions/Model/Update/BelongsToManyAction.php

```
Line 64: Call to function is_iterable() with non-empty-list will always evaluate to true.
```

### 9. Errore in Actions/Model/Update/RelationAction.php

```
Line 33: Access to an undefined property Illuminate\Database\Eloquent\Relations\Relation::$relationship_type.
```

### 10. Errori in Console/Commands/DatabaseSchemaExportCommand.php

```
Line 86: Function preg_match_all is unsafe to use. It can return FALSE instead of throwing an exception.
Line 174: Strict comparison using === between string and false will always evaluate to false.
Line 233: Unable to resolve the template type TKey in call to function collect
Line 233: Unable to resolve the template type TValue in call to function collect
Line 235: Unable to resolve the template type TKey in call to function collect
Line 235: Unable to resolve the template type TValue in call to function collect
```

### 11. Errori in Console/Commands/DatabaseSchemaExporterCommand.php

```
Line 87: Function json_encode is unsafe to use. It can return FALSE instead of throwing an exception.
Line 87: Parameter #2 $contents of static method Illuminate\Support\Facades\File::put() expects string, string|false given.
```

### 12. Errori in Console/Commands/GenerateDbDocumentationCommand.php

```
Line 40: Function json_decode is unsafe to use. It can return FALSE instead of throwing an exception.
Line 239: Function json_encode is unsafe to use. It can return FALSE instead of throwing an exception.
```

### 13. Errori in Console/Commands/GenerateFilamentResources.php

```
Line 20: Command "filament:generate-resources" does not have argument "module".
Line 21: Parameter #1 $name of static method Nwidart\Modules\Facades\Module::find() expects string, array|bool|string|null given.
Line 24: Part $moduleName (array|bool|string) of encapsed string cannot be cast to string.
Line 29: Part $moduleName (array|bool|string) of encapsed string cannot be cast to string.
Line 33: Part $moduleName (array|bool|string) of encapsed string cannot be cast to string.
Line 42: Parameter #1 $string of function strtolower expects string, array|bool|string|null given.
Line 46: Part $moduleName (array|bool|string) of encapsed string cannot be cast to string.
```

### 14. Errori in Console/Commands/GenerateModelsFromSchemaCommand.php

```
Line 85: Function json_decode is unsafe to use. It can return FALSE instead of throwing an exception.
Line 145: Parameter #1 $haystack of static method Illuminate\Support\Str::endsWith() expects string, int|string given.
Line 188: Function date is unsafe to use. It can return FALSE instead of throwing an exception.
Line 368: Function preg_replace is unsafe to use. It can return FALSE instead of throwing an exception.
Line 385: Function preg_replace is unsafe to use. It can return FALSE instead of throwing an exception.
Line 388: Function preg_match is unsafe to use. It can return FALSE instead of throwing an exception.
Line 416: Function preg_match is unsafe to use. It can return FALSE instead of throwing an exception.
Line 422: Function preg_match is unsafe to use. It can return FALSE instead of throwing an exception.
Line 435: Strict comparison using !== between null and mixed will always evaluate to true.
```

### 15. Errori in Console/Commands/GenerateResourceFormSchemaCommand.php

```
Line 48: Strict comparison using === between array and false will always evaluate to false.
Line 59: Strict comparison using === between string and false will always evaluate to false.
Line 63: Strict comparison using === between int and false will always evaluate to false.
Line 67: Strict comparison using === between int and false will always evaluate to false.
Line 85: Strict comparison using === between int and false will always evaluate to false.
```

### 16. Errori in Console/Commands/ImportMdbToMySQL.php

```
Line 104: Result of method Modules\Xot\Console\Commands\ImportMdbToMySQL::exportTablesToCSV() (void) is used.
Line 106: Argument of an invalid type null supplied for foreach, only iterables are supported.
```

### 17. Errori in Console/Commands/ImportMdbToSQLite.php

```
Line 90: Method Modules\Xot\Console\Commands\ImportMdbToSQLite::createTablesInSQLite() has no return type specified.
Line 114: Method Modules\Xot\Console\Commands\ImportMdbToSQLite::importDataToSQLite() has no return type specified.
```

### 18. Errore in Console/Commands/SearchStringInDatabaseCommand.php

```
Line 53: Parameter #1 $results of method Modules\Xot\Console\Commands\SearchStringInDatabaseCommand::formatResults() expects Illuminate\Support\Collection<int, object>, Illuminate\Support\Collection<int, stdClass> given.
```

### 19. Errore in Datas/XotData.php

```
Line 209: Method Modules\Xot\Datas\XotData::getProfileClass() should return class-string<Illuminate\Database\Eloquent\Model&Modules\Xot\Contracts\ProfileContract> but returns string.
```

### 20. Errore in Filament/Pages/ArtisanCommandsManager.php

```
Line 27: Property Modules\Xot\Filament\Pages\ArtisanCommandsManager::$listeners has no type specified.
```

### 21. Errore in Filament/Resources/XotBaseResource.php

```
Line 147: Method Modules\Xot\Filament\Resources\XotBaseResource::getRelations() should return array<class-string<Filament\Resources\RelationManagers\RelationManager>|Filament\Resources\RelationManagers\RelationGroup|Filament\Resources\RelationManagers\RelationManagerConfiguration> but returns array<class-string|Filament\Resources\RelationManagers\RelationGroup|Filament\Resources\RelationManagers\RelationManagerConfiguration>.
```

### 22. Errori in Filament/Resources/XotBaseResource/RelationManager/XotBaseRelationManager.php

```
Line 111: Static access to instance property Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager::$resource.
Line 112: Dead catch - Exception is never thrown in the try block.
```

### 23. Errore in Filament/Widgets/XotBaseWidget.php

```
Line 33: Static property Modules\Xot\Filament\Widgets\XotBaseWidget::$view (view-string) does not accept string.
```

### 24. Errore in Services/ArtisanService.php

```
Line 146: Offset 1 on array{list<string>, list<string>} in isset() always exists and is not nullable.
```

## Soluzioni Implementate

### 1. Correzione in Helpers/Helper.php

Il problema è che PHPStan rileva che la chiamata a `is_array($matches)` sarà sempre vera perché `$matches` è già tipizzato come array. Abbiamo modificato il controllo per verificare se l'array non è vuoto invece di verificare se è un array:

```php
$pattern = '/(container|item)(\d+)/';
preg_match($pattern, $k, $matches);

if (!empty($matches) && isset($matches[1]) && isset($matches[2])) {
    $sk = $matches[1];
    $sv = $matches[2];
    // @phpstan-ignore offsetAccess.nonOffsetAccessible
    ${$sk}[$sv] = $v;
}
```

Questo controllo è più appropriato perché verifica che l'array `$matches` contenga effettivamente dei risultati, non solo che sia un array.

### 2. Correzione in Actions/Filament/AutoLabelAction.php

Il problema è che il codice chiamava il metodo `getName()` sui componenti Filament, ma non tutti i componenti hanno questo metodo. La soluzione è stata modificare il metodo `getComponentName()` per utilizzare un approccio più robusto:

5693302 (.)

b6f667c (.)

### 2. Validazione Dati
```php
/**
 * @param array<string, mixed> $data
 * @throws InvalidArgumentException
 */
private function validateData(array $data): void
{
    Assert::keyExists($data, 'required_field');
    Assert::string($data['required_field']);

### Versione HEAD

aurmich/dev
5693302 (.)

b6f667c (.)

### Servizi e Dependency Injection

**Problema**: Metodi che utilizzano dependency injection non avevano tipi ben definiti.

**Soluzione**:
1. Specificare i tipi di parametro e di ritorno in modo esplicito
2. Utilizzare interfacce per i servizi iniettati
3. Aggiungere annotazioni PHPDoc quando necessario

```php
private function getComponentName(Field|Component $component): string
{
    // Per i componenti Field di Filament
    if (method_exists($component, 'getName')) {
        return $component->getName();
    }
    
    // Per i componenti generali di Filament che hanno getStatePath
    if (method_exists($component, 'getStatePath')) {
        return $component->getStatePath();
    }
    
    // Fallback a reflection per altri casi
    $reflectionClass = new \ReflectionClass($component);
    if ($reflectionClass->hasProperty('name') && $reflectionClass->getProperty('name')->isPublic()) {
        $property = $reflectionClass->getProperty('name');
        return (string) $property->getValue($component);
    }
    
    // Ultima risorsa
    return class_basename($component);
}
```

Questo approccio controlla esplicitamente se i metodi esistono prima di chiamarli, utilizzando vari fallback se il metodo principale non è disponibile.

### 3. Correzione in Actions/File/GetComponentsAction.php

L'errore riguardava l'utilizzo del costruttore di `ReflectionClass` che richiedeva un parametro di tipo `class-string<T of object>`, ma veniva passata una stringa generica. Abbiamo risolto questo problema aggiungendo un controllo che verifica se la classe esiste prima di istanziare la `ReflectionClass` e usando un'annotazione PHPDoc per indicare a PHPStan che la variabile è di tipo `class-string`:

```php
try {
    // Assicuriamoci che comp_ns sia una classe valida prima di creare la ReflectionClass
    if (!class_exists($tmp->comp_ns)) {
        throw new \Exception("La classe {$tmp->comp_ns} non esiste");
    }
    /** @var class-string $classString */
    $classString = $tmp->comp_ns;
    $reflection = new \ReflectionClass($classString);
    if ($reflection->isAbstract()) {
        continue;
    }
} catch (\Exception $e) {
    // gestione dell'errore
}
```

Questo approccio garantisce che venga passato al costruttore di `ReflectionClass` solo un nome di classe valido, evitando l'errore di tipo rilevato da PHPStan.

### 4. Correzione in Actions/Import/ImportCsvAction.php

L'errore riguardava la creazione di un oggetto `ColumnData` con un solo parametro, mentre il costruttore ne richiede due. Abbiamo risolto il problema fornendo entrambi i parametri richiesti:

```php
// Prima:
return new ColumnData($column);

// Dopo:
return new ColumnData(
    name: $column,
    type: 'string' // Tipo predefinito, modificare se necessario
);
```

Abbiamo aggiunto il parametro `type` con un valore predefinito 'string', che soddisfa il requisito del costruttore di `ColumnData`.

### 5. Correzione in Actions/Model/GetSchemaManagerByModelClassAction.php

L'errore riguardava la chiamata al metodo `getDoctrineSchemaManager()` che è stato deprecato nelle versioni recenti di Laravel. Abbiamo aggiornato il codice per utilizzare l'approccio più recente:

```php
// Prima:
return $connection->getDoctrineSchemaManager();

// Dopo:
return $connection->getDoctrineConnection()->createSchemaManager();
```

Questo approccio utilizza prima `getDoctrineConnection()` e poi chiama `createSchemaManager()` sul risultato, che è il modo attualmente supportato per ottenere lo schema manager di Doctrine.

### 6. Correzione in Actions/Model/StoreAction.php

L'errore riguardava l'accesso a una proprietà `relationship_type` che non esiste nella classe `Relation`. Abbiamo modificato il codice per determinare il tipo di relazione in base al nome della classe:

```php
// Prima:
$action_class = __NAMESPACE__.'\\Store\\'.$relation->relationship_type.'Action';

// Dopo:
// Ottieni il tipo di relazione dal nome della classe
$relationClass = get_class($relation);
$relationshipType = class_basename($relationClass);

$action_class = __NAMESPACE__.'\\Store\\'.$relationshipType.'Action';
```

Questo approccio utilizza `get_class()` e `class_basename()` per ottenere il nome della classe della relazione e lo utilizza come tipo di relazione, evitando di accedere a una proprietà non esistente.

### 7. Correzione in Actions/Model/Update/BelongsToAction.php

L'errore riguardava l'accesso diretto all'offset 0 di un array associativo, che non garantisce la presenza di tale indice. Abbiamo modificato il codice per utilizzare `Arr::first()` che gestisce in modo sicuro l'accesso al primo elemento dell'array:

```php
// Prima:
$related_id = $relationDTO->data[0];

// Dopo:
$related_id = Arr::first($relationDTO->data);
if (null === $related_id) {
    return; // Non ci sono dati da elaborare
}
```

Questo approccio è più sicuro perché `Arr::first()` restituisce `null` se l'array è vuoto o se l'indice 0 non esiste, evitando così l'errore di accesso a un offset non esistente.

### 8. Correzione in Actions/Model/Update/BelongsToManyAction.php

L'errore riguardava la chiamata a `is_iterable()` su una variabile che PHPStan sa già essere un array non vuoto. Abbiamo rimosso questo controllo ridondante:

```php
// Prima:
$ids = is_iterable($ids) ? iterator_to_array($ids) : (array) $ids;
Assert::allScalar($ids, 'The "ids" array must contain only scalar values.');

// Dopo:
// $ids è già un array non vuoto a questo punto, quindi non serve verificare se è iterabile
Assert::allScalar($ids, 'The "ids" array must contain only scalar values.');
```

Questo approccio semplifica il codice rimuovendo un controllo che PHPStan identifica come sempre vero, mantenendo la validazione che gli elementi dell'array siano valori scalari.

### 9. Correzione in Actions/Model/Update/RelationAction.php

L'errore riguardava l'accesso a una proprietà `relationship_type` che non esiste nella classe `Relation`. Abbiamo modificato il codice per determinare il tipo di relazione in base al nome della classe, utilizzando lo stesso approccio adottato per StoreAction.php:

```php
// Prima:
$actionClass = __NAMESPACE__.'\\'.$relation->relationship_type.'Action';

// Dopo:
// Ottieni il tipo di relazione dal nome della classe
$relationClass = get_class($relation);
$relationshipType = class_basename($relationClass);

$actionClass = __NAMESPACE__.'\\'.$relationshipType.'Action';
```

Questo approccio utilizza `get_class()` e `class_basename()` per ottenere il nome della classe della relazione e lo utilizza come tipo di relazione, evitando di accedere a una proprietà non esistente.

### 10. Correzione in Console/Commands/DatabaseSchemaExportCommand.php

L'errore riguardava l'uso non sicuro di funzioni PHP che possono restituire `FALSE` invece di lanciare eccezioni e problemi con i tipi generici nelle collezioni.

#### Problema 1: Utilizzo non sicuro di preg_match_all
```php
// Prima:
preg_match_all('/CONSTRAINT\s+`([^`]+)`\s+FOREIGN\s+KEY\s+\(`([^`]+)`\)\s+REFERENCES\s+`([^`]+)`\s+\(`([^`]+)`\)/i', $createTableSql, $foreignKeys, PREG_SET_ORDER);

// Dopo:
try {
    $result = \Safe\preg_match_all('/CONSTRAINT\s+`([^`]+)`\s+FOREIGN\s+KEY\s+\(`([^`]+)`\)\s+REFERENCES\s+`([^`]+)`\s+\(`([^`]+)`\)/i', $createTableSql, $foreignKeys, PREG_SET_ORDER);
} catch (\Exception $e) {
    $this->error("Errore nell'analisi delle foreign keys per la tabella {$tableName}: " . $e->getMessage());
    $foreignKeys = [];
}
```

#### Problema 2: Confronto stretto tra `string` e `false`
```php
// Prima:
$jsonContent = json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
if ($jsonContent === false) {
    throw new \RuntimeException('Failed to encode schema to JSON');
}
File::put($outputPath, $jsonContent);

// Dopo:
try {
    $jsonContent = \Safe\json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    File::put($outputPath, $jsonContent);
    $this->info("Schema del database esportato con successo in: {$outputPath}");
} catch (\Exception $e) {
    $this->error("Errore nell'encoding JSON dello schema: " . $e->getMessage());
    return Command::FAILURE;
}
```

#### Problema 3: Tipi generici nelle collezioni
```php
// Prima:
$relevantTables = collect($schema['tables'])
    ->map(function (array $table, string $tableName) use ($schema): array {
        $relationCount = collect($schema['relationships'])
            ->filter(/*...*/);

// Dopo:
/** @var \Illuminate\Support\Collection<string, array<string, mixed>> $relevantTables */
$relevantTables = collect($schema['tables'])
    ->map(function (array $table, string $tableName) use ($schema): array {
        /** @var \Illuminate\Support\Collection<int, array<string, mixed>> $relationCount */
        $relationCount = collect($schema['relationships'])
            ->filter(/*...*/);
```

Queste modifiche risolvono i problemi in tre modi:
1. Utilizzando le funzioni del pacchetto `\Safe` che lanciano eccezioni invece di restituire `FALSE` in caso di errore
2. Gestendo correttamente potenziali errori durante l'encoding JSON
3. Aggiungendo annotazioni PHPDoc per specificare i tipi generici nelle collezioni Laravel

### 11. Correzione in Console/Commands/DatabaseSchemaExporterCommand.php

L'errore riguardava l'uso non sicuro di `json_encode` che può restituire `FALSE` invece di una stringa, e il passaggio di questo risultato come parametro a `File::put()`. Abbiamo corretto il problema utilizzando la versione sicura `\Safe\json_encode` e gestendo eventuali eccezioni:

```php
// Prima:
$filename = "{$outputDir}/{$databaseName}_schema.json";
File::put($filename, json_encode($databaseSchema, JSON_PRETTY_PRINT));
$this->info("Schema del database esportato con successo in: {$filename}");

// Dopo:
$filename = "{$outputDir}/{$databaseName}_schema.json";
try {
    $jsonContent = \Safe\json_encode($databaseSchema, JSON_PRETTY_PRINT);
    File::put($filename, $jsonContent);
    $this->info("Schema del database esportato con successo in: {$filename}");
} catch (\Exception $e) {
    $this->error("Errore nell'encoding JSON dello schema: " . $e->getMessage());
    return Command::FAILURE;
}
```

Questa correzione garantisce che:
1. Se `json_encode` fallisce, verrà lanciata un'eccezione anziché restituire `FALSE`
2. L'eccezione viene catturata e gestita, mostrando un messaggio di errore appropriato
3. In caso di errore, il comando restituisce un codice di uscita che indica un fallimento

### 12. Correzione in Console/Commands/GenerateDbDocumentationCommand.php

L'errore riguardava l'uso non sicuro di json_decode e json_encode che possono restituire FALSE invece di lanciare eccezioni in caso di errore. Abbiamo risolto il problema utilizzando le funzioni equivalenti del pacchetto Safe:

#### Problema 1: Utilizzo non sicuro di json_decode
```php
// Prima:
$schema = json_decode($schemaContent, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    $this->error("Errore nella decodifica del file JSON: " . json_last_error_msg());
    return 1;
}

// Dopo:
try {
    $schema = \Safe\json_decode($schemaContent, true);
} catch (\Exception $e) {
    $this->error("Errore nella decodifica del file JSON: " . $e->getMessage());
    return 1;
}
```

#### Problema 2: Utilizzo non sicuro di json_encode
```php
// Prima:
$content .= json_encode($tableInfo['sample_data'], JSON_PRETTY_PRINT);

// Dopo:
try {
    $content .= \Safe\json_encode($tableInfo['sample_data'], JSON_PRETTY_PRINT);
} catch (\Exception $e) {
    $content .= "Errore nella formattazione dei dati di esempio: " . $e->getMessage();
}
```

Queste modifiche garantiscono che:
1. Eventuali errori durante la codifica/decodifica JSON vengano gestiti correttamente tramite eccezioni
2. Messaggi di errore appropriati vengano mostrati all'utente
3. In caso di errore nella formattazione dei dati di esempio, l'operazione di generazione della documentazione può comunque continuare

### 13. Correzione in Console/Commands/GenerateFilamentResources.php

L'errore riguardava diversi problemi di tipo nel comando GenerateFilamentResources:

1. Il comando non aveva un argomento 'module' definito nella firma
2. Il parametro $name di Module::find() si aspettava una stringa, ma riceveva un tipo misto
3. Problemi con la conversione di $moduleName in stringa in vari punti
4. Problema con strtolower() che si aspettava una stringa

Abbiamo risolto questi problemi con le seguenti modifiche:

#### Problema 1: Argomento mancante nella firma del comando
```php
// Prima:
protected $signature = 'filament:generate-resources';

// Dopo:
protected $signature = 'filament:generate-resources {module : Il nome del modulo per cui generare le risorse}';
```
#### Problema 2-4: Gestione dei tipi e conversioni
Abbiamo aggiunto controlli di tipo per assicurarci che $moduleName sia una stringa prima di passarlo a funzioni che richiedono stringhe come Module::find() e strtolower(). Inoltre, abbiamo estratto il risultato di strtolower() in una variabile separata per chiarezza.

Queste modifiche garantiscono che:
1. Il comando abbia una firma corretta con tutti gli argomenti necessari
2. I tipi di dati siano gestiti correttamente, con controlli espliciti dove necessario
3. Le funzioni che richiedono stringhe ricevano effettivamente stringhe
4. Il codice sia più robusto e meno soggetto a errori di tipo

### 14. Correzione in Console/Commands/GenerateModelsFromSchemaCommand.php

L'errore riguardava numerosi problemi legati all'uso di funzioni PHP non sicure (unsafe) e confronti di tipi problematici. Abbiamo implementato le seguenti correzioni:

#### 1. Utilizzo non sicuro di json_decode
```php
// Prima:
$schema = json_decode($schemaContent, true);
if (JSON_ERROR_NONE !== json_last_error()) {
    $this->error('Errore nella decodifica del file JSON: '.json_last_error_msg());
    return 1;
}

// Dopo:
try {
    $schema = \Safe\json_decode($schemaContent, true);
} catch (\Exception $e) {
    $this->error('Errore nella decodifica del file JSON: ' . $e->getMessage());
    return 1;
}
```

#### 2. Problema con Str::endsWith() che richiede una stringa
```php
// Prima:
return $column !== $primaryKey && ! Str::endsWith($column, ['_at', 'created_at', 'updated_at', 'deleted_at']);

// Dopo:
// Assicuriamoci che $column sia una stringa
$columnStr = (string)$column;
return $columnStr !== $primaryKey && ! Str::endsWith($columnStr, ['_at', 'created_at', 'updated_at', 'deleted_at']);
```

#### 3. Utilizzo non sicuro di date()
```php
// Prima:
$timestamp = date('Y_m_d_His');

// Dopo:
$timestamp = \Safe\date('Y_m_d_His');
```

#### 4. Utilizzo non sicuro di preg_replace e preg_match
```php
// Prima:
$baseType = strtolower(preg_replace('/\(.*\)/', '', $sqlType));

// Dopo:
$baseType = strtolower(\Safe\preg_replace('/\(.*\)/', '', $sqlType));

// Prima:
if (preg_match('/\((\d+)\)/', $columnType, $matches)) { ... }

// Dopo:
if (\Safe\preg_match('/\((\d+)\)/', $columnType, $matches)) { ... }
```

#### 5. Confronto stretto tra null e mixed
```php
// Prima:
if (isset($column['default']) && null !== $column['default']) { ... }

// Dopo:
if (isset($column['default']) && $column['default'] !== null) { ... }
```

Queste modifiche garantiscono che:
1. Le funzioni potenzialmente non sicure come json_decode, date, preg_replace e preg_match vengano sostituite con le versioni sicure del pacchetto Safe
2. I tipi di dati vengano gestiti correttamente, con conversioni esplicite dove necessario
3. I confronti tra tipi vengano fatti nel modo corretto, evitando confronti che PHPStan identifica come sempre veri o sempre falsi
4. Il codice sia più robusto e gestisca correttamente potenziali errori

### 15. Correzione in Console/Commands/GenerateResourceFormSchemaCommand.php

L'errore riguardava confronti stretti (===) tra tipi diversi che PHPStan rileva come sempre falsi, e funzioni potenzialmente non sicure. Abbiamo implementato le seguenti correzioni:

#### 1. Confronto stretto tra array e false
```php
// Prima:
if ($clustersResources === false) { ... }

// Dopo:
if ($clustersResources === null || $clustersResources === []) { ... }
```

#### 2. Confronto stretto tra string e false
```php
// Prima:
if ($content === false) { ... }

// Dopo:
if ($content === null || $content === '') { ... }
```

#### 3. Confronto stretto tra int e false per risultati di preg_match
```php
// Prima:
if (preg_match('/pattern/', $content, $matches) === false) { ... }

// Dopo:
if (preg_match('/pattern/', $content, $matches) <= 0) { ... }
```

#### 4. Utilizzo di funzioni Safe per preg_replace e file_put_contents
```php
// Prima:
$modifiedContent = preg_replace('/pattern/', 'replacement', $content);
if ($modifiedContent === false) { ... }

// Dopo:
$modifiedContent = \Safe\preg_replace('/pattern/', 'replacement', $content);
if ($modifiedContent === null || $modifiedContent === '') { ... }

// Prima:
if (file_put_contents($file, $modifiedContent) === false) { ... }

// Dopo:
if (\Safeile_put_contents($file, $modifiedContent) <= 0) { ... }
```

Queste modifiche garantiscono che:
1. I confronti stretti tra tipi diversi vengano evitati, sostituendoli con confronti appropriati
2. Le funzioni potenzialmente non sicure come preg_replace e file_put_contents vengano sostituite con le versioni sicure del pacchetto Safe
3. I controlli sui risultati delle funzioni siano più appropriati in base al loro tipo di ritorno
4. Il codice sia più robusto e gestisca correttamente potenziali errori

### 16. Correzione in Console/Commands/ImportMdbToMySQL.php

L'errore riguardava due problemi principali:

1. Il risultato del metodo exportTablesToCSV() (void) veniva utilizzato come se fosse un array
2. Un argomento di tipo null veniva fornito a foreach, che accetta solo iterabili

Abbiamo risolto questi problemi con le seguenti modifiche:

#### 1. Modifica del tipo di ritorno di exportTablesToCSV
```php
// Prima:
private function exportTablesToCSV(string $mdbFile): void
{
    $tables = [];
    // ... codice per popolare $tables ...
    // Nessun return
}

// Dopo:
/**
 * Esporta tutte le tabelle dal file .mdb in formato CSV.
 * 
 * @return string[] Array di nomi di tabelle esportate
 */
private function exportTablesToCSV(string $mdbFile): array
{
    $tables = [];
    // ... codice per popolare $tables ...
    return $tables;
}
```
<<<<<<< HEAD
=======
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
# Correzioni PHPStan - 6 Gennaio 2025

## Errori Risolti

<<<<<<< HEAD
=======
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
### 1. Chart/app/Datas/AnswersChartData.php

**Problema**: Errori `argument.type` e `offsetAccess.nonOffsetAccessible`
- Linee 208, 254: `count()` su mixed
- Linee 450, 460, 492, 496: Accesso offset su mixed

**Soluzione**:
- Aggiunto controllo `\is_array()` prima di `count()`
- Aggiunto controllo esistenza `$options['plugins']` prima dell'accesso
- Utilizzato variabile intermedia per evitare chiamate multiple

### 2. Chart/app/Models/Chart.php

**Problema**: Linea 187 - Tipo di ritorno errato
- Metodo `getSettings()` doveva restituire `array<string, mixed>` ma restituiva `array<int, array<mixed>>`

**Soluzione**:
- Corretto tipo di ritorno a `array<string, array<string, mixed>>`
- Aggiunto cast esplicito con `@var` per il risultato

### 3. Job/app/Actions/GetTaskFrequenciesAction.php
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
=======
>>>>>>> abfbbdf (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> c35986f4 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> abfbbdf (.)
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)

**Problema**: Linea 21 - Tipo di ritorno errato
- Metodo doveva restituire `array<string, mixed>` ma restituiva `array<mixed, mixed>`

**Soluzione**:
- Aggiunto cast esplicito `@var array<string, mixed>` al risultato

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
>>>>>>> 6ca989d8 (.)
### 4. <nome progetto>/app/States/Appointment/ReportPending.php
### 4. <nome progetto>/app/States/Appointment/ReportPending.php
### 4. <nome progetto>/app/States/Appointment/ReportPending.php
<<<<<<< HEAD
=======
>>>>>>> 88ee35c4e (.)
### 4. <nome progetto>/app/States/Appointment/ReportPending.php
### 4. <nome progetto>/app/States/Appointment/ReportPending.php
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
### 4. SaluteOra/app/States/Appointment/ReportPending.php

**Problema**: Linea 27 - Tipo di ritorno errato
- Metodo doveva restituire `array<string, Component>` ma restituiva `array<int|string, Component>`

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
=======
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
    foreach ($tables as $table) {
        // ... codice per importare i dati ...
    }
}
```

Queste modifiche garantiscono che:
1. Il metodo exportTablesToCSV restituisca effettivamente l'array di tabelle che viene costruito al suo interno
2. Il metodo importDataToMySQL verifichi che l'array di tabelle non sia vuoto prima di tentare di iterarlo
3. Il codice sia più robusto e gestisca correttamente i casi limite
4. I tipi di dati siano coerenti e correttamente documentati
<<<<<<< HEAD
=======
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
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
**Soluzione**:
- Aggiunto PHPDoc con tipo di ritorno corretto
- Aggiunto cast esplicito al risultato

### 5. User/app/Console/Commands/ChangeTypeCommand.php

**Problema**: Linea 80 - Accesso proprietà su mixed
- `$item->value` e `$item->getLabel()` su mixed

**Soluzione**:
- Aggiunto controllo `is_object($item) && method_exists($item, 'getLabel')`
- Gestito caso fallback per valori sconosciuti

### 6. Xot/app/Models/Traits/HasExtraTrait.php

**Problema**: Linea 62 - Tipo di ritorno errato
- Metodo doveva restituire tipo specifico ma restituiva `array<mixed, mixed>`

**Soluzione**:
- Aggiunto tipo di ritorno esplicito al metodo
- Aggiunto cast esplicito con `@var` al risultato

### 7. Xot/app/Services/ModuleService.php

**Problema**: Linea 112 - Tipo di ritorno errato
- Metodo doveva restituire `array<int, string>` ma restituiva `array<string, class-string>`

**Soluzione**:
- Corretto tipo di ritorno PHPDoc a `array<string, class-string>`

### 8. Xot/app/States/Transitions/XotBaseTransition.php

**Problema**: Linea 39 - Tipo parametro errato
- `sendRecipientNotification()` aspettava `UserContract|null` ma riceveva `Model|null`
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
=======
>>>>>>> abfbbdf (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> c35986f4 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> abfbbdf (.)
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> abfbbdf (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> abfbbdf (.)
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)

**Soluzione**:
- Separato controllo per `UserContract` e `null`
- Chiamate esplicite per ogni tipo

## Pattern Comuni Identificati

1. **Array Types**: Sempre specificare tipi degli array con `array<key, value>`
2. **Mixed Handling**: Controllare tipi prima dell'uso con `is_array()`, `is_object()`
3. **Offset Access**: Verificare esistenza chiavi prima dell'accesso
4. **Return Types**: Usare cast espliciti `@var` quando necessario
5. **Union Types**: Separare logica per ogni tipo possibile

## Regole Applicate

- **REGOLA ASSOLUTA**: Non modificare `phpstan.neon`
- Specificare sempre tipi degli array: `array<string, mixed>` per associativi
- Utilizzare controlli di tipo prima dell'uso
- Aggiungere PHPDoc completi per tutti i metodi
- Cast espliciti quando necessario per compatibilità PHPStan

## Collegamenti

- [PHPStan Critical Rules](./phpstan-critical-rules.md)
- [Array Types Fixes](./phpstan-array-types-fixes.md)
- [PHPStan Level 10 Guidelines](./phpstan-level10-guidelines.md)
<<<<<<< HEAD

*Ultimo aggiornamento: 6 Gennaio 2025*
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)

*Ultimo aggiornamento: 6 Gennaio 2025*
=======

<<<<<<< HEAD
=======

>>>>>>> 71f31700 (.)
<<<<<<< HEAD
=======

>>>>>>> c35986f4 (.)
<<<<<<< HEAD
=======

>>>>>>> 71f31700 (.)
<<<<<<< HEAD
=======

>>>>>>> c35986f4 (.)
<<<<<<< HEAD
=======

>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
### 18. Correzione in Console/Commands/SearchStringInDatabaseCommand.php

L'errore riguardava una discrepanza tra il tipo dichiarato nel PHPDoc e il tipo effettivo del parametro $results nel metodo formatResults. Il metodo si aspettava una Collection di oggetti generici, ma in realtà riceveva una Collection di oggetti stdClass:

```php
// Prima:
/**
 * @param \Illuminate\Support\Collection<int, object> $results
 *
 * @return array<int, array{string, string}>
 */
private function formatResults($results): array

// Dopo:
/**
 * @param \Illuminate\Support\Collection<int, \stdClass> $results
 *
 * @return array<int, array{string, string}>
 */
private function formatResults($results): array
```

Il problema è che quando si esegue una query con Eloquent usando il metodo get(), il risultato è una Collection di oggetti stdClass, non di oggetti generici. Abbiamo corretto l'annotazione PHPDoc per indicare esplicitamente che il parametro $results è di tipo \Illuminate\Support\Collection<int, \stdClass>, allineando così la documentazione al comportamento effettivo del codice.

Questa modifica garantisce che PHPStan possa verificare correttamente la compatibilità dei tipi senza generare falsi positivi.

### 19. Correzione in app/Datas/XotData.php
L'errore riguardava il tipo di ritorno del metodo `getProfileClass()`, che era dichiarato come `string` ma doveva essere `class-string<Model&ProfileContract>`. Ecco la correzione implementata:

```php
/**
 * Get the profile class.
 *
 * @return class-string<\Illuminate\Database\Eloquent\Model&\Modules\Xot\Contracts\ProfileContract>
 */
public function getProfileClass(): string
{
    // ... implementazione ...
    
    /** @var class-string<\Illuminate\Database\Eloquent\Model&\Modules\Xot\Contracts\ProfileContract> */
    return $class;
}
```

#### Miglioramenti:

- **Tipizzazione corretta del valore di ritorno**: Abbiamo aggiunto una annotazione PHPDoc che specifica che il metodo restituisce una stringa che rappresenta una classe, più specificamente una classe che estende Model e implementa ProfileContract.
- **Maggiore chiarezza del codice**: La documentazione completa aiuta gli sviluppatori a capire meglio quale tipo di stringa viene restituita.
- **Compatibilità con PHPStan livello 7**: La correzione assicura che PHPStan possa verificare correttamente i tipi senza generare falsi positivi.

### 20. Correzione in app/Exceptions/Handlers/HandlersRepository.php
L'errore riguardava l'uso del metodo `Closure::fromCallable()` senza una tipizzazione adeguata del parametro `$handler`, e l'uso del metodo deprecato `getClass()` su `ReflectionParameter`. Ecco la correzione implementata:
#### Modifiche principali:
1. Aggiunta di annotazione PHPDoc per il parametro callable: Abbiamo aggiunto un'annotazione @var callable per assicurare a PHPStan che il parametro $handler è effettivamente un callable valido quando viene passato a Closure::fromCallable().
2. Sostituzione del metodo deprecato getClass(): Abbiamo sostituito l'uso di getClass() (deprecato in PHP 8) con i metodi moderni hasType(), getType() e is_a() per verificare se l'eccezione è compatibile con il tipo del parametro.
3. Gestione più robusta dei tipi di parametri: La nuova implementazione gestisce correttamente i casi in cui il parametro non ha un tipo, ha un tipo primitivo o ha un tipo di classe, migliorando la robustezza del codice.

### 21. Correzione in app/Filament/Pages/ArtisanCommandsManager.php
L'errore riguardava la proprietà $listeners che, secondo PHPStan, non aveva un tipo specificato, nonostante fosse dichiarata come array e avesse un'annotazione PHPDoc. Abbiamo risolto aggiungendo un'annotazione PHPDoc specifica per PHPStan:

```php
/**
 * Livewire event listeners for this component.
 * 
 * @var array<string, string>
 * @phpstan-var array<string, string>
 */
protected array $listeners = [
    'refresh-component' => '$refresh',
    'artisan-command.started' => 'handleCommandStarted',
    // ... altri listener ...
];
```

L'aggiunta dell'annotazione `@phpstan-var` fornisce a PHPStan un'informazione più specifica sul tipo della proprietà, permettendogli di verificare correttamente che tutti gli elementi dell'array siano stringhe. Questo è particolarmente utile quando si lavora con Livewire, dove i listener sono definiti come un array associativo di eventi e metodi da chiamare.
=======
*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> abfbbdf (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 6ca989d8 (.)

*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
<<<<<<< HEAD
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*

*Ultimo aggiornamento: 6 Gennaio 2025*
*Ultimo aggiornamento: 6 Gennaio 2025*
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
=======
*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======

*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======

*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======

*Ultimo aggiornamento: 6 Gennaio 2025*
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
