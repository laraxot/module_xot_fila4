<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e7da37af (.)
=======
>>>>>>> 6c576e4e (rebase 210)
=======
>>>>>>> c1f7a6d4 (rebase 210)
=======
>>>>>>> 36c41395 (rebase 210)
=======
>>>>>>> 52a2d1de (rebase 210)
=======
>>>>>>> f34fab37 (rebase 210)
=======
>>>>>>> 1ee6b92a (rebase 210)
# CRITICAL FIX: Loop Infinito in getStepByName() - XotBaseResource

## 🚨 **PROBLEMA CRITICO RISOLTO**

### **Sintomo**
```
Xdebug has detected a possible infinite loop, and aborted your script with a stack depth of '256' frames
```

### **Causa Root**
Errore di sintassi PHP nel metodo `getStepByName()` di `XotBaseResource`:

```php
// ❌ ERRATO - Causava loop infinito
return Forms\Components\Wizard\Step::make($name)
    ->schema(static::$schema());
```

### **Correzione Applicata**
```php
// ✅ CORRETTO - Risolve il loop infinito
return Forms\Components\Wizard\Step::make($name)
    ->schema(static::{$schema}());
```

## 🔍 **Analisi Tecnica**

### **Problema di Sintassi**
- `static::$schema()` tentava di accedere a una **proprietà statica** e chiamarla come metodo
- PHP non riusciva a risolvere questa sintassi non valida
- Questo causava **ricorsioni infinite** nel sistema di risoluzione delle classi

### **Soluzione Dinamica**
- `static::{$schema}()` utilizza **variable variables** per chiamare dinamicamente il metodo
- Per `studio_step`: $schema = `getStudioStepSchema` → chiama `static::getStudioStepSchema()`
- Per `availability_step`: $schema = `getAvailabilityStepSchema` → chiama `static::getAvailabilityStepSchema()`

## 🎯 **Meccanismo di Naming**

### **Trasformazione Step Name → Method**
```php
$schema = Str::of($name)
    ->snake()      // 'studio_step' → 'studio_step'
    ->studly()     // 'studio_step' → 'StudioStep'  
    ->prepend('get') // 'StudioStep' → 'getStudioStep'
    ->append('Schema') // 'getStudioStep' → 'getStudioStepSchema'
    ->toString();
```

### **Esempi Mappatura**
| Step Name | Metodo Chiamato |
|-----------|----------------|
| `studio_step` | `getStudioStepSchema()` |
| `availability_step` | `getAvailabilityStepSchema()` |
| `personal_info_step` | `getPersonalInfoStepSchema()` |

## 🛡️ **Fix Secondario: property_exists Check**

### **Problema Aggiuntivo**
```php
// ❌ ERRATO - Proprietà potrebbe non esistere
$attachments = $model::$attachments;
```

### **Correzione Applicata**
```php  
// ✅ CORRETTO - Check esistenza proprietà
$attachments = property_exists($model, 'attachments') ? $model::$attachments : [];
```

## 📋 **Impatto della Correzione**

### **Prima** ❌
- Homepage registrazione dottore → **500 Error**
- Wizard step non funzionanti
- Sistema bloccato su qualsiasi step dinamico

### **Dopo** ✅
- Homepage registrazione dottore → **Funzionante**
- Step `studio_step` e `availability_step` → **Rendering corretto**
- Wizard navigation → **Fluida**

## 🧪 **Test di Regressione**

### **Verifica Wizard Steps**
- [ ] studio_step → Chiama `getStudioStepSchema()` ✅
- [ ] availability_step → Chiama `getAvailabilityStepSchema()` ✅  
- [ ] personal_info_step → Chiama `getPersonalInfoStepSchema()` ✅

### **Verifica No Loop**
- [ ] Homepage dottore carica senza errori ✅
- [ ] Navigation tra step funzionante ✅
- [ ] Xdebug non rileva più loop infiniti ✅

## ⚠️ **Regole di Prevenzione**

### **Syntax Check Obbligatorio**
1. **MAI** usare `static::$variabile()` per chiamate dinamiche
2. **SEMPRE** usare `static::{$variabile}()` per method calls dinamici
3. **SEMPRE** testare wizard step prima di commit
4. **SEMPRE** verificare property_exists prima di accedere a proprietà statiche

### **Pattern Corretto**
```php
// ✅ Dynamic method call
$methodName = 'getMethodName';
static::{$methodName}();

// ✅ Property existence check  
$prop = property_exists($class, 'property') ? $class::$property : [];
```

## 🔗 **Collegamenti**

### **File Modificati**
- [XotBaseResource.php](../../../Modules/Xot/app/Filament/Resources/XotBaseResource.php) - Fix principale
- [DoctorResource.php](../../../Modules/<nome progetto>/app/Filament/Resources/DoctorResource.php) - Utilizzo step

### **Documentazione Correlata**
- [Wizard Step Implementation](../../../Modules/<nome progetto>/docs/wizard-step-implementation.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> c1f7a6d4 (rebase 210)
=======
>>>>>>> 52a2d1de (rebase 210)
=======
>>>>>>> 1ee6b92a (rebase 210)
- [DoctorResource.php](../../../Modules/<nome progetto>/app/Filament/Resources/DoctorResource.php) - Utilizzo step

### **Documentazione Correlata**
- [Wizard Step Implementation](../../../Modules/<nome progetto>/docs/wizard-step-implementation.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 6c576e4e (rebase 210)
=======
>>>>>>> 36c41395 (rebase 210)
=======
>>>>>>> f34fab37 (rebase 210)
- [DoctorResource.php](../../../Modules/SaluteOra/app/Filament/Resources/DoctorResource.php) - Utilizzo step

### **Documentazione Correlata**
- [Wizard Step Implementation](../../../Modules/SaluteOra/docs/wizard-step-implementation.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 221f68bb (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 6c576e4e (rebase 210)
=======
>>>>>>> c1f7a6d4 (rebase 210)
=======
>>>>>>> 36c41395 (rebase 210)
=======
>>>>>>> 52a2d1de (rebase 210)
=======
>>>>>>> f34fab37 (rebase 210)
=======
>>>>>>> 1ee6b92a (rebase 210)
- [Infinite Loop Prevention](../critical-fixes/infinite-loop-prevention.md)

---

**Priorità**: 🚨 **P0 - CRITICA**  
**Creato**: Gennaio 2025  
**Risolto**: Gennaio 2025  
**Impatto**: Blocco completo sistema registrazione dottori  
**Tempo risoluzione**: < 10 minuti dalla diagnosi  

## 💡 **Lesson Learned**

Questo fix dimostra l'importanza di:
1. **Syntax validation rigorosa** per chiamate dinamiche
2. **Testing immediato** dopo modifiche wizard
3. **Property existence checking** per codice robusto
4. **Xdebug monitoring** per rilevazione loop infiniti

*Il sistema <nome progetto> ora è resiliente a questo tipo di errori critici.* 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Il sistema <nome progetto> ora è resiliente a questo tipo di errori critici.* 
=======
*Il sistema SaluteOra ora è resiliente a questo tipo di errori critici.* 
>>>>>>> 221f68bb (.)
=======
>>>>>>> ed2f798a (.)
=======
*Il sistema <nome progetto> ora è resiliente a questo tipo di errori critici.* 
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
*Il sistema SaluteOra ora è resiliente a questo tipo di errori critici.* 
>>>>>>> 6c576e4e (rebase 210)
=======
>>>>>>> 1e57c4f0 (rebase 210)
=======
*Il sistema <nome progetto> ora è resiliente a questo tipo di errori critici.* 
>>>>>>> c1f7a6d4 (rebase 210)
=======
>>>>>>> 0a4777b9 (rebase 210)
=======
*Il sistema SaluteOra ora è resiliente a questo tipo di errori critici.* 
>>>>>>> 36c41395 (rebase 210)
=======
>>>>>>> 295369a3 (rebase 210)
=======
*Il sistema <nome progetto> ora è resiliente a questo tipo di errori critici.* 
>>>>>>> 52a2d1de (rebase 210)
=======
>>>>>>> 4bf95e7b (rebase 210)
=======
*Il sistema SaluteOra ora è resiliente a questo tipo di errori critici.* 
>>>>>>> f34fab37 (rebase 210)
=======
>>>>>>> 50a6aab9 (rebase 210)
=======
*Il sistema <nome progetto> ora è resiliente a questo tipo di errori critici.* 
>>>>>>> 1ee6b92a (rebase 210)
