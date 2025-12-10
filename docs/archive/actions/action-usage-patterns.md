<<<<<<< HEAD
=======
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
>>>>>>> f8f76a284 (.)
# Action Usage Patterns - Regole Fondamentali

## 🎯 **REGOLA CRITICA: Pattern di Uso delle Action**

### ✅ **PATTERN CORRETTO (Dependency Injection)**
```php
// SEMPRE usare questo pattern
app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($value)
app(\Modules\Xot\Actions\Cast\SafeFloatCastAction::class)->execute($value)
app(\Modules\Xot\Actions\Geo\GetDistanceExpressionAction::class)->execute($lat, $lng, $alias)
```

### ❌ **PATTERN ERRATO (Metodi Statici)**
```php
// MAI usare questi pattern
\Modules\Xot\Actions\Cast\SafeStringCastAction::cast($value)
SafeStringCastAction::cast($value)
```

## 🧠 **MOTIVAZIONI ARCHITETTURALI**

1. **Dependency Injection**: Permette testing, mocking, e IoC container
2. **Coerenza**: Rispetta l'architettura Laraxot e Laravel
3. **Testabilità**: Facilita unit testing e mocking
4. **SOLID Principles**: Rispetta Dependency Inversion Principle
5. **Flessibilità**: Permette override e customizzazione via container

## 📋 **CHECKLIST PRE-IMPLEMENTAZIONE**

Prima di usare un'Action:
- [ ] Verificare l'implementazione dell'Action
- [ ] Controllare se ha metodi statici di convenienza
- [ ] SEMPRE usare `app(ActionClass::class)->execute()`
- [ ] MAI usare metodi statici diretti

## 🔍 **IDENTIFICAZIONE ERRORI COMUNI**

### Pattern da cercare e correggere:
```bash

# Cerca pattern errati
grep -r "::cast(" Modules/
grep -r "::execute(" Modules/
grep -r "ActionClass::" Modules/
```

### Pattern corretti da mantenere:
```bash

# Verifica pattern corretti
grep -r "app.*Action.*->execute" Modules/
```

## 📚 **ESEMPI PRATICI**

### SafeStringCastAction
```php
// ✅ CORRETTO
$result = app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($mixedValue);

// ❌ ERRATO
$result = \Modules\Xot\Actions\Cast\SafeStringCastAction::cast($mixedValue);
```

### GetDistanceExpressionAction
```php
// ✅ CORRETTO
$expression = app(\Modules\Xot\Actions\Geo\GetDistanceExpressionAction::class)->execute($lat, $lng, $alias);

// ❌ ERRATO
$expression = \Modules\Xot\Actions\Geo\GetDistanceExpressionAction::getExpression($lat, $lng, $alias);
```

## 🚨 **CONTROLLI AUTOMATICI**

### Script di Validazione
```bash
#!/bin/bash

# Cerca pattern errati nelle Action
echo "Cercando pattern errati..."
find Modules/ -name "*.php" -exec grep -l "Actions.*::" {} \;
```

### PHPStan Rules
Aggiungere regole PHPStan per identificare automaticamente questi pattern.

## 🔄 **PROCESSO DI CORREZIONE**

1. **Identificare** tutti i file con pattern errati
2. **Verificare** l'implementazione dell'Action
3. **Sostituire** con il pattern corretto
4. **Testare** che la funzionalità rimanga invariata
5. **Documentare** la correzione

## 📖 **RIFERIMENTI**

<<<<<<< HEAD
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> f8f76a284 (.)
- [Laravel Service Container](https://laravel.com/docs/container)
- [Dependency Injection Patterns](https://laravel.com/docs/providers)
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 62cc8443 (.)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/docs/container)
- [Dependency Injection Patterns](https://laravel.com/docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/docs/container)
- [Dependency Injection Patterns](https://laravel.com/docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
<<<<<<< HEAD
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/docs/container)
- [Dependency Injection Patterns](https://laravel.com/docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)

- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
- [Laravel Service Container](https://laravel.com/docs/container)
- [Dependency Injection Patterns](https://laravel.com/docs/providers)
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
=======
>>>>>>> 43d67f21 (.)
=======
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
- [Laravel Service Container](https://laravel.com/project_docs/container)
- [Dependency Injection Patterns](https://laravel.com/project_docs/providers)
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
>>>>>>> 7e4835b8e (.)
- [Spatie QueueableAction](https://github.com/spatie/laravel-queueable-action)

---

**PRIORITÀ**: CRITICA - Da seguire SEMPRE senza eccezioni
**AGGIORNATO**: 2025-01-30
**AUTORE**: Sistema di Qualità Laraxot
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
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
