<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
# Correzioni Implementate - Regola Critica XotBaseResource

## 🚨 Regola Critica Violata

**Se una classe estende `XotBaseResource`, NON deve mai dichiarare:**
- `protected static ?string $navigationGroup`
- `protected static ?string $navigationLabel`
- `public static function table(Table $table): Table`

## ✅ Correzioni Implementate

### 1. TenantResource.php
**File**: `laravel/Modules/User/app/Filament/Resources/TenantResource.php`

**Violazione**: Metodo `table()` presente
```php
// ❌ ERRATO - RIMOSSO
public static function table(Table $table): Table
{
    return $table
        ->columns([
            //
        ])
        ->filters([
            //
        ])
        ->actions([
            //
        ])
        ->bulkActions([
            //
        ]);
}
```

**Correzione**: Metodo `table()` rimosso
```php
// ✅ CORRETTO
// NIENTE metodo table() - La gestione è centralizzata in XotBaseResource
```

### 2. LocationResource.php
**File**: `laravel/Modules/Geo/app/Filament/Resources/LocationResource.php`

**Violazioni**: 
- Metodo `table()` presente
- Proprietà `navigationGroup` presente

```php
// ❌ ERRATO - RIMOSSO
protected static ?string $navigationGroup = 'Geo';

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable(),
            // ... altre colonne
        ])
        // ... configurazione tabella
}
```

**Correzione**: Entrambi rimossi
```php
// ✅ CORRETTO
// NIENTE navigationGroup - La gestione è centralizzata in XotBaseResource
// NIENTE metodo table() - La gestione è centralizzata in XotBaseResource
```

### 3. AddressResource.php
**File**: `laravel/Modules/Geo/app/Filament/Resources/AddressResource.php`

**Violazione**: Proprietà `navigationGroup` presente
```php
// ❌ ERRATO - RIMOSSO
protected static ?string $navigationGroup = "Geo";
```

**Correzione**: Proprietà rimossa
```php
// ✅ CORRETTO
// NIENTE navigationGroup - La gestione è centralizzata in XotBaseResource
```

### 4. AdminResource.php
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
**File**: `laravel/Modules/<nome progetto>/app/Filament/Resources/AdminResource.php`
=======
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
>>>>>>> ce6fc085 (.)
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
<<<<<<< HEAD
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/<nome progetto>/app/Filament/Resources/AdminResource.php`
=======
>>>>>>> d86d643a (.)
=======
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
>>>>>>> 472bd9dc (.)
=======
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
>>>>>>> 3bf39332 (.)
=======
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
>>>>>>> cf971011 (.)
=======
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/<nome progetto>/app/Filament/Resources/AdminResource.php`
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
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
<<<<<<< HEAD
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/<nome modulo>/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
=======
>>>>>>> 43d67f21 (.)
=======
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
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
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
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
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
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
**File**: `laravel/Modules/SaluteOra/app/Filament/Resources/AdminResource.php`
>>>>>>> 76bec91a (.)
>>>>>>> 5e6aa70fe (.)

**Violazione**: Metodo `table()` presente
```php
// ❌ ERRATO - RIMOSSO
public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')
                ->searchable(),
            // ... altre colonne
        ])
        // ... configurazione tabella
}
```

**Correzione**: Metodo `table()` rimosso
```php
// ✅ CORRETTO
// NIENTE metodo table() - La gestione è centralizzata in XotBaseResource
```

## 📋 Checklist di Verifica

### Prima di Implementare Nuove Risorse
- [ ] La classe estende `XotBaseResource`
- [ ] NON dichiara `protected static ?string $navigationGroup`
- [ ] NON dichiara `protected static ?string $navigationLabel`
- [ ] NON implementa `public static function table(Table $table): Table`
- [ ] Implementa solo `getFormSchema()` e altri metodi specifici
- [ ] La gestione della tabella è centralizzata in XotBaseResource

### Durante lo Sviluppo
- [ ] Seguire sempre la regola critica
- [ ] Utilizzare la gestione centralizzata per navigationGroup/navigationLabel
- [ ] Utilizzare la gestione centralizzata per il metodo table()
- [ ] Documentare eventuali personalizzazioni specifiche

## 🔍 Come Verificare

### Comando per Trovare Violazioni
```bash
# Trova classi che estendono XotBaseResource
grep -r "extends XotBaseResource" laravel/Modules/ --include="*.php"

# Trova metodi table() in classi che estendono XotBaseResource
grep -r "public static function table" laravel/Modules/ --include="*.php"

# Trova proprietà navigationGroup in classi che estendono XotBaseResource
grep -r "protected static.*navigationGroup" laravel/Modules/ --include="*.php"

# Trova proprietà navigationLabel in classi che estendono XotBaseResource
grep -r "protected static.*navigationLabel" laravel/Modules/ --include="*.php"
```

### Verifica PHPStan
```bash
cd laravel
./vendor/bin/phpstan analyze --level=9 --memory-limit=2G
```

## 📚 Documentazione Aggiornata

### Filament Guide
- [Filament Best Practices](filament.md) - Aggiornata con regola critica
- [Best Practices Consolidated](best-practices-consolidated.md) - Aggiornata con regola critica

### Esempi Corretti
```php
<?php

declare(strict_types=1);

namespace Modules\ModuleName\Filament\Resources;

use Modules\Xot\Filament\Resources\XotBaseResource;
use Filament\Forms\Components\TextInput;

class ExampleResource extends XotBaseResource
{
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required(),
            // Altri campi...
        ];
    }

    // ✅ CORRETTO - Solo metodi e proprietà specifiche non già gestite dalla base
    // NIENTE navigationGroup/navigationLabel/table()
}
```

## 🎯 Benefici delle Correzioni

1. **Coerenza**: Tutte le risorse seguono lo stesso pattern
2. **Manutenibilità**: Gestione centralizzata di navigationGroup/navigationLabel/table()
3. **DRY**: Eliminazione di duplicazioni
4. **KISS**: Struttura semplice e intuitiva
5. **Automazione**: Configurazione automatica tramite XotBaseResource

## ⚠️ Attenzione

**IMPORTANTE**: Questa regola è **CRITICA** e **VINCOLANTE**. Non violare mai questa regola quando si estende `XotBaseResource`. La gestione di navigationGroup, navigationLabel e table() è centralizzata per garantire coerenza e manutenibilità.

---

*Ultimo aggiornamento: 2025-08-04*
*Modulo: Xot*
*Categoria: Filament*
*Status: ✅ Correzioni Implementate*
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
