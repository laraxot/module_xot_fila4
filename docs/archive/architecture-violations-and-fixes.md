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
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
# Violazioni Architetturali e Correzioni - Pattern XotData

## 🚨 **Violazioni Architetturali Critiche**

### **Problema Identificato: Import Diretti tra Moduli**

Durante lo sviluppo è stata identificata una **violazione architetturale critica** nel `LoginTest.php` del modulo Cms:

```php
// ❌ VIOLAZIONE CRITICA
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\<nome progetto>\Models\User;
=======
use Modules\<nome modulo>\Models\User;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 71f31700 (.)
=======
use Modules\SaluteOra\Models\User;
=======
use Modules\SaluteOra\Models\User;
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 3bf39332 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> cf971011 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> e7da37af (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> d86d643a (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\User;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
use Modules\SaluteOra\Models\User;
>>>>>>> 43d67f21 (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> b7ea1cd1 (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 43d67f21 (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> b7ea1cd1 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 76bec91a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 55fe1822 (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\SaluteOra\Models\User;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\User;
>>>>>>> c35986f4 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
1. **Accoppiamento Stretto**: Cms conosce <nome progetto> → viola principio di disaccoppiamento
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 71f31700 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 472bd9dc (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 472bd9dc (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 3bf39332 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> cf971011 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> e7da37af (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
1. **Accoppiamento Stretto**: Cms conosce <nome progetto> → viola principio di disaccoppiamento
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 43d67f21 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 43d67f21 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> b7ea1cd1 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 43d67f21 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 43d67f21 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> b7ea1cd1 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 76bec91a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 55fe1822 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce  → viola principio di disaccoppiamento
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 5a14301c (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> 43d67f21 (.)
=======
1. **Accoppiamento Stretto**: Cms conosce SaluteOra → viola principio di disaccoppiamento
>>>>>>> c35986f4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'model' => \Modules\<nome progetto>\Models\User::class, // CONFIGURABILE!
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 71f31700 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 472bd9dc (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 472bd9dc (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 3bf39332 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> cf971011 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> e7da37af (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 43d67f21 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 43d67f21 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> b7ea1cd1 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 43d67f21 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 43d67f21 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> b7ea1cd1 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 76bec91a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 55fe1822 (.)
=======
        'model' => \Modules\<nome modulo>\Models\User::class, // CONFIGURABILE!
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 5a14301c (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> 43d67f21 (.)
=======
        'model' => \Modules\SaluteOra\Models\User::class, // CONFIGURABILE!
>>>>>>> c35986f4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
public function processUser(\Modules\<nome progetto>\Models\User $user): void
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 472bd9dc (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 472bd9dc (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 3bf39332 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> cf971011 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> e7da37af (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
public function processUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> b7ea1cd1 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> b7ea1cd1 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 76bec91a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 55fe1822 (.)
=======
public function processUser(\Modules\<nome modulo>\Models\User $user): void
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
public function processUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\<nome progetto>\Models\User;
use Modules\<nome progetto>\Models\Patient;
use Modules\<nome progetto>\Models\Doctor;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
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
>>>>>>> 3bf39332 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> cf971011 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> e7da37af (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> d86d643a (.)
=======
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
use Modules\<nome modulo>\Models\User;
use Modules\<nome modulo>\Models\Patient;
use Modules\<nome modulo>\Models\Doctor;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> b7ea1cd1 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 76bec91a (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\User;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
>>>>>>> c35986f4 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$user = \Modules\<nome progetto>\Models\User::find($id);
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 71f31700 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> d86d643a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 472bd9dc (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> d86d643a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> d86d643a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 472bd9dc (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 3bf39332 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> cf971011 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> e7da37af (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> d86d643a (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
$user = \Modules\<nome modulo>\Models\User::find($id);
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 43d67f21 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 43d67f21 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> b7ea1cd1 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 43d67f21 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 43d67f21 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> b7ea1cd1 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 76bec91a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 55fe1822 (.)
=======
$user = \Modules\<nome modulo>\Models\User::find($id);
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 5a14301c (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> 43d67f21 (.)
=======
$user = \Modules\SaluteOra\Models\User::find($id);
>>>>>>> c35986f4 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
function updateUser(\Modules\<nome progetto>\Models\User $user): void
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 472bd9dc (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 472bd9dc (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 3bf39332 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> cf971011 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> e7da37af (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
function updateUser(\Modules\<nome modulo>\Models\User $user): void
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> b7ea1cd1 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> b7ea1cd1 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 76bec91a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 55fe1822 (.)
=======
function updateUser(\Modules\<nome modulo>\Models\User $user): void
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 5a14301c (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> 43d67f21 (.)
=======
function updateUser(\Modules\SaluteOra\Models\User $user): void
>>>>>>> c35986f4 (.)

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
=======
3. PHPStan level 9+ compliance
>>>>>>> 71f31700 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> c35986f4 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 33af3e61 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 5bd842e3 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 03ceeac3 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 5a14301c (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> 71f31700 (.)
=======
3. PHPStan level 9+ compliance
>>>>>>> c35986f4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Testing Strategy](../../<nome progetto>/docs/testing/real-data-testing-strategy.md)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 71f31700 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
- [Cms Architecture](../../Cms/project_docs/architecture-xotdata-pattern.md)
- [User Module Traits](../../User/project_docs/traits_complete_guide.md)
- [Testing Strategy](../../SaluteOra/project_docs/testing/real-data-testing-strategy.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> ca9324a4 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 472bd9dc (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 472bd9dc (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 3bf39332 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> cf971011 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> e7da37af (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
- [Testing Strategy](../../../docs/testing/real-data-testing-strategy.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> b7ea1cd1 (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> b7ea1cd1 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> ba1d49f3 (.)
=======
>>>>>>> 3bf39332 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> b956ebe0 (.)
=======
>>>>>>> cf971011 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 76bec91a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 0123915b (.)
=======
>>>>>>> e7da37af (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 55fe1822 (.)
=======
- [Testing Strategy](../../<nome modulo>/docs/testing/real-data-testing-strategy.md)
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Strategy](../../SaluteOra/docs/testing/real-data-testing-strategy.md)
>>>>>>> c35986f4 (.)

---

**Ultimo Aggiornamento**: Gennaio 2025  
**Stato**: ✅ Pattern Documentato e Implementato  
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
