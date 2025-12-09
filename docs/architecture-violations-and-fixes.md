# Violazioni Architetturali e Correzioni - Pattern XotData

## 🚨 **Violazioni Architetturali Critiche**

### **Problema Identificato: Import Diretti tra Moduli**

Durante lo sviluppo è stata identificata una **violazione architetturale critica** nel `LoginTest.php` del modulo Cms:
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
>>>>>>> 71f31700 (.)

```php
// ❌ VIOLAZIONE CRITICA
<<<<<<< HEAD
use Modules\<nome modulo>\Models\User;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6cba4fe (.)
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
use Modules\SaluteOra\Models\User;
=======
use Modules\<nome modulo>\Models\User;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)

```php
// ❌ VIOLAZIONE CRITICA
<<<<<<< HEAD
use Modules\<nome modulo>\Models\User;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
=======
>>>>>>> f1d4085 (.)
=======
use Modules\<nome modulo>\Models\User;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
use Modules\SaluteOra\Models\User;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 71f31700 (.)

```php
// ❌ VIOLAZIONE CRITICA
<<<<<<< HEAD
use Modules\<nome modulo>\Models\User;
=======
>>>>>>> 6cba4fe (.)
use Modules\SaluteOra\Models\User;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======

```php
// ❌ VIOLAZIONE CRITICA
use Modules\<nome modulo>\Models\User;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)

/** @var User $user */
$user = User::factory()->create([...]);
```

### **Perché è un Errore Grave**

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6cba4fe (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
=======
>>>>>>> f1d4085 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
>>>>>>> 3310e9c6 (.)
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
<<<<<<< HEAD
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
=======
1. **Accoppiamento Stretto**: Cms conosce <nome progetto> → viola principio di disaccoppiamento
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
=======
>>>>>>> 6cba4fe (.)
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
<<<<<<< HEAD
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
1. **Accoppiamento Stretto**: Cms conosce <nome progetto> → viola principio di disaccoppiamento
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
=======
>>>>>>> 6cba4fe (.)
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> c35986f4 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
=======
1. **Accoppiamento Stretto**: Cms conosce <nome progetto> → viola principio di disaccoppiamento
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
=======
>>>>>>> 6cba4fe (.)
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
<<<<<<< HEAD
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
1. **Accoppiamento Stretto**: Cms conosce <nome progetto> → viola principio di disaccoppiamento
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
2. **Configurabilità Persa**: La classe User è **dinamica** e configurabile
3. **Multi-tenancy Rotta**: XotData supporta tenant con User diverse
4. **Pattern Ignorato**: XotData è il **core** dell'architettura Laraxot

## ✅ **Pattern Corretto: XotData Architecture**

### **Principio Fondamentale**
> **"Non fare mai riferimento diretto alla classe specifica di implementazione dell'utente"**

### **Implementazione Corretta**
```php
// ✅ ARCHITETTURA CORRETTA
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;

// Risoluzione dinamica
$userClass = XotData::make()->getUserClass();

// Creazione tramite factory dinamica
/** @var UserContract */
$user = $userClass::factory()->create($attributes);
```

## 🏗️ **Architettura XotData Spiegata**

### **1. Configurabilità del Sistema**
```php
// config/auth.php
'providers' => [
    'users' => [
        'driver' => 'eloquent',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
=======
>>>>>>> f1d4085 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
>>>>>>> 3310e9c6 (.)
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 71f31700 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
=======
>>>>>>> 6cba4fe (.)
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
<<<<<<< HEAD
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
=======
>>>>>>> 6cba4fe (.)
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> c35986f4 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
=======
>>>>>>> 6cba4fe (.)
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
<<<<<<< HEAD
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
    ],
],
```

### **2. Risoluzione Dinamica XotData**
```php
public function getUserClass(): string
{
    $class = config('auth.providers.users.model');
    
    // Validazioni automatiche
    Assert::stringNotEmpty($class, 'check config auth');
    Assert::classExists($class, '['.$class.'] check config auth');
    Assert::implementsInterface($class, UserContract::class, '...');
    Assert::isAOf($class, Model::class, '...');

    return $class;
}
```

### **3. Multi-Tenancy e Tipi Utente**
```php
// Supporta diversi tipi di utente per progetto
$patientClass = XotData::make()->getUserClassByType('patient');
$doctorClass = XotData::make()->getUserClassByType('doctor');
$adminClass = XotData::make()->getUserClassByType('admin');
```

### **4. Contracts per Type Safety**
```php
// UserContract garantisce interfaccia comune
interface UserContract
{
    public function getKey();
    public function getAuthIdentifierName();
    public function getAuthIdentifier();
    // ... altri metodi essenziali
}
```

## 📋 **Regole di Implementazione**

### **Regola 1: Risoluzione Dinamica**
```php
// ✅ SEMPRE così
$userClass = XotData::make()->getUserClass();

// ❌ MAI così  
use Modules\SpecificModule\Models\User;
```

### **Regola 2: Type Hints con Contracts**
```php
// ✅ SEMPRE UserContract
public function processUser(UserContract $user): void

// ❌ MAI implementazione specifica
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
public function processUser(\Modules\<nome modulo>\Models\User $user): void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
public function processUser(\Modules\<nome modulo>\Models\User $user): void
=======
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> 3fbbf1f5 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> f1d4085 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> 3310e9c6 (.)
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
public function processUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
public function processUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
<<<<<<< HEAD
public function processUser(\Modules\SaluteOra\Models\User $user): void
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
public function processUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
public function processUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
<<<<<<< HEAD
public function processUser(\Modules\SaluteOra\Models\User $user): void
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
public function processUser(\Modules\<nome modulo>\Models\User $user): void
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
```

### **Regola 3: Factory tramite XotData**
```php
// ✅ Factory dinamica
$userClass = XotData::make()->getUserClass();
$user = $userClass::factory()->create($attributes);

// ❌ Factory hardcoded
$user = User::factory()->create($attributes);
```

### **Regola 4: Safe Casting per Eloquent**
```php
// ✅ Cast sicuro per metodi Model
if ($user instanceof \Illuminate\Database\Eloquent\Model) {
    $user->refresh();
    $user->save();
}

// ❌ Chiamata diretta su Contract
$user->refresh(); // Error: UserContract non ha refresh()
```

## 🔧 **Helper Functions Raccomandati**

### **Test Helper Pattern**
```php
// Helper per ottenere classe User dinamicamente
function getUserClass(): string
{
    return XotData::make()->getUserClass();
}

// Helper per creare utenti nei test
function createTestUser(array $attributes = []): UserContract
{
    $userClass = getUserClass();
    
    $defaultAttributes = [
        'email' => fake()->unique()->safeEmail(),
        'password' => Hash::make('password123'),
        'first_name' => fake()->firstName(),
        'last_name' => fake()->lastName(),
    ];
    
    $attributes = array_merge($defaultAttributes, $attributes);
    
    /** @var UserContract */
    $user = $userClass::factory()->create($attributes);
    
    return $user;
}
```

### **Action Pattern**
```php
class CreateUserAction
{
    public function execute(UserData $data): UserContract
    {
        $userClass = XotData::make()->getUserClass();
        
        /** @var UserContract */
        $user = $userClass::create([
            'name' => $data->name,
            'email' => $data->email,
        ]);
        
        return $user;
    }
}
```

## 🎯 **Esempi di Utilizzo Corretto**

### **1. Migrazioni con XotData**
```php
// XotBaseMigration usa XotData automaticamente
public function timestamps(Blueprint $table, bool $hasSoftDeletes = false): void
{
    $xot = XotData::make();
    $userClass = $xot->getUserClass();

    $table->timestamps();
    $table->foreignIdFor($userClass, 'user_id')->nullable();
    $table->foreignIdFor($userClass, 'updated_by')->nullable();
    $table->foreignIdFor($userClass, 'created_by')->nullable();
}
```

### **2. Relazioni con XotData**
```php
trait IsTenant
{
    public function users(): BelongsToMany
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();

        return $this->belongsToManyX($userClass, null, 'tenant_id', 'user_id');
    }
}
```

### **3. Commands con XotData**
```php
class ChangeTypeCommand extends Command
{
    public function handle(): void
    {
        $email = text('User email?');
        
        /** @var UserContract */
        $user = XotData::make()->getUserByEmail($email);
        
        if (!$user) {
            $this->error("User with email '{$email}' not found.");
            return;
        }
        
        // Continua elaborazione...
    }
}
```

## ⚠️ **Errori da Evitare Assolutamente**

### **1. Import Diretti**
```php
// ❌ VIETATO
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
=======
=======
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 88ea7103 (.)
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 7131bd09 (.)
=======
=======
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
>>>>>>> 3310e9c6 (.)
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
=======
>>>>>>> 6cba4fe (.)
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 71f31700 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> d86d643a (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
=======
>>>>>>> 6cba4fe (.)
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
=======
>>>>>>> 6cba4fe (.)
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
=======
>>>>>>> 6cba4fe (.)
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 5a14301c (.)

// ✅ CONSENTITO
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
```

### **2. Hardcoding Classi**
```php
// ❌ VIETATO
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$user = \Modules\<nome modulo>\Models\User::find($id);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$user = \Modules\<nome modulo>\Models\User::find($id);
=======
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> 3fbbf1f5 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
=======
>>>>>>> f1d4085 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> 3310e9c6 (.)
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
$user = \Modules\<nome modulo>\Models\User::find($id);
=======
>>>>>>> 6cba4fe (.)
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 71f31700 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
$user = \Modules\<nome modulo>\Models\User::find($id);
=======
>>>>>>> 6cba4fe (.)
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
<<<<<<< HEAD
$user = \Modules\SaluteOra\Models\User::find($id);
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
$user = \Modules\<nome modulo>\Models\User::find($id);
=======
>>>>>>> 6cba4fe (.)
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> c35986f4 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
$user = \Modules\<nome modulo>\Models\User::find($id);
=======
>>>>>>> 6cba4fe (.)
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
<<<<<<< HEAD
$user = \Modules\SaluteOra\Models\User::find($id);
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
$user = \Modules\<nome modulo>\Models\User::find($id);
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)

// ✅ CONSENTITO  
$userClass = XotData::make()->getUserClass();
$user = $userClass::find($id);
```

### **3. Type Hints Specifici**
```php
// ❌ VIETATO
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
function updateUser(\Modules\<nome modulo>\Models\User $user): void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
function updateUser(\Modules\<nome modulo>\Models\User $user): void
=======
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> 3fbbf1f5 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> f1d4085 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> 3310e9c6 (.)
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
function updateUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
function updateUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
<<<<<<< HEAD
function updateUser(\Modules\SaluteOra\Models\User $user): void
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
function updateUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
function updateUser(\Modules\<nome modulo>\Models\User $user): void
=======
>>>>>>> 6cba4fe (.)
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
<<<<<<< HEAD
function updateUser(\Modules\SaluteOra\Models\User $user): void
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
function updateUser(\Modules\<nome modulo>\Models\User $user): void
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)

// ✅ CONSENTITO
function updateUser(UserContract $user): void
```

### **4. Factory Hardcoded**
```php
// ❌ VIETATO
User::factory()->create();

// ✅ CONSENTITO
$userClass = XotData::make()->getUserClass();
$userClass::factory()->create();
```

## 📊 **Benefits dell'Architettura XotData**

### **1. Flessibilità**
- Configurazione User dinamica per progetto
- Supporto multi-tenancy nativo
- Cambio implementazione senza impatto

### **2. Manutenibilità**
- Disaccoppiamento tra moduli
- Refactoring sicuro
- Test isolati per modulo

### **3. Scalabilità**
- Aggiunta nuovi tipi utente semplice
- Configurazioni specifiche per tenant
- Architettura modulare estendibile

### **4. Type Safety**
- Contratti garantiscono interfaccia
- Validazioni automatiche XotData
- PHPStan compliance migliorato

## 🔄 **Migration Plan per Codice Esistente**

### **Fase 1: Identificazione Violazioni**
```bash

# Cerca import diretti tra moduli
grep -r "use Modules\.*Models\User" --include="*.php" ./

# Cerca type hints specifici
grep -r "function.*\\\Modules\\\.*\\\Models\\\User" --include="*.php" ./
```

### **Fase 2: Sostituzione Pattern**
1. Sostituire import diretti con XotData
2. Cambiare type hints con UserContract  
3. Aggiornare factory calls
4. Implementare helper functions

### **Fase 3: Testing e Validazione**
1. Test che XotData risolve correttamente
2. Verify dei contratti implementati
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
3. PHPStan level 10+ compliance
=======
3. PHPStan level 9+ compliance
>>>>>>> 5a14301c (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 71f31700 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 5a14301c (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 71f31700 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> c35986f4 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 5a14301c (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 71f31700 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 5a14301c (.)
4. Test di regressione

## 📚 **Link e Riferimenti**

### **Documentazione Core**
- [XotData API Reference](xotdata-api.md)
- [UserContract Specification](contracts/user-contract.md)  
- [Best Practices](best-practices.md)
- [Module Architecture](module-architecture.md)

### **Esempi Implementazione**
- [CreateUserAction](../app/Actions/Socialite/CreateUserAction.php)
- [XotBaseMigration](../app/Database/Migrations/XotBaseMigration.php)
- [IsTenant Trait](../../User/app/Models/Traits/IsTenant.php)

### **Documentazione Moduli**
- [Cms Architecture](../../Cms/docs/architecture-xotdata-pattern.md)
- [User Module Traits](../../User/docs/traits_complete_guide.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Testing Strategy](../../../docs/testing/real-data-testing-strategy.md)
=======
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 3fbbf1f5 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 71f31700 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
=======
- [Testing Strategy](../../../docs/testing/real-data-testing-strategy.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 399f46d3 (.)
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
=======
>>>>>>> 6cba4fe (.)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
- [Cms Architecture](../../Cms/project_docs/architecture-xotdata-pattern.md)
- [User Module Traits](../../User/project_docs/traits_complete_guide.md)
- [Testing Strategy](../../SaluteOra/project_docs/testing/real-data-testing-strategy.md)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
- [Testing Strategy](../../../docs/testing/real-data-testing-strategy.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> 17684f52 (.)
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
=======
>>>>>>> 6cba4fe (.)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> c35986f4 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
=======
- [Testing Strategy](../../../docs/testing/real-data-testing-strategy.md)
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 399f46d3 (.)
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
=======
>>>>>>> 6cba4fe (.)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
- [Cms Architecture](../../Cms/project_docs/architecture-xotdata-pattern.md)
- [User Module Traits](../../User/project_docs/traits_complete_guide.md)
- [Testing Strategy](../../SaluteOra/project_docs/testing/real-data-testing-strategy.md)
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
- [Testing Strategy](../../../docs/testing/real-data-testing-strategy.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
- [Cms Architecture](../../Cms/project_docs/architecture-xotdata-pattern.md)
- [User Module Traits](../../User/project_docs/traits_complete_guide.md)
- [Testing Strategy](../../SaluteOra/project_docs/testing/real-data-testing-strategy.md)
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)

---

**Ultimo Aggiornamento**: Gennaio 2025  
**Stato**: ✅ Pattern Documentato e Implementato  
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
**Responsabile**: Team Architettura Laraxot 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
**Responsabile**: Team Architettura Laraxot 
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 5a14301c (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 3fbbf1f5 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 71f31700 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 3310e9c6 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> c35986f4 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 5a14301c (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 3fbbf1f5 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 71f31700 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 5a14301c (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
**Responsabile**: Team Architettura Laraxot 
=======
>>>>>>> f1d4085 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
**Responsabile**: Team Architettura Laraxot 
>>>>>>> 3fbbf1f5 (.)
