# PHPStan Analysis - Modulo Xot

**Data**: 2025-01-11  
**Versione PHPStan**: 1.12.x  
**Livello**: max  
**Status**: ✅ ANALISI COMPLETATA (149 errori type safety)

## 📊 Risultati Generali

- **Totale Errori**: 149
- **Syntax Errors**: 0 ✅
- **File con Errori**: ~30
- **Categorie Errori**: 10+

## 🔍 Breakdown Errori per Categoria

### 1. property.notFound (12+ occorrenze)
**Pattern**: Accesso a proprietà `$this` in test Pest/PHPUnit

**Esempi**:
```php
// ❌ tests/Unit/ModuleServiceTest.php:13
$this->service  // Property not found

// ❌ tests/Unit/XotBaseTransitionTest.php:19
$this->record   // Property not found
```

**Soluzione**:
```php
// ✅ Opzione 1: Type hint $this
test('example', function (): void {
    /** @var object{service: ModuleService} $this */
    expect($this->service)->toBeInstanceOf(ModuleService::class);
});

// ✅ Opzione 2: Usare variabili locali (PREFERITO)
test('example', function (): void {
    $service = new ModuleService();
    expect($service)->toBeInstanceOf(ModuleService::class);
});
```

### 2. method.notFound (15+ occorrenze)
**Pattern**: ReflectionType::getName() su union/intersection types

**Esempio**:
```php
// ❌ tests/Unit/Models/XotBaseModelTest.php:91
$type->getName()  // Method not found on ReflectionType
```

**Soluzione**:
```php
// ✅ Type narrowing per ReflectionNamedType
$returnType = $method->getReturnType();
if ($returnType instanceof \ReflectionNamedType) {
    expect($returnType->getName())->toBe('array');
}
```

### 3. return.type (8+ occorrenze)
**Pattern**: Return type mismatch tra dichiarazione e implementazione

**Esempi**:
- `app/Exports/CollectionExport.php`
- `app/Exports/QueryExport.php`  
- `app/Filament/Traits/HasXotTable.php` (multipli)

**Soluzione**:
```php
// ❌ PRIMA
public function getData(): array
{
    return $this->collection;  // Collection ritornata invece di array
}

// ✅ DOPO
public function getData(): array
{
    return $this->collection->toArray();
}
```

### 4. foreach.nonIterable (6+ occorrenze)
**Pattern**: Foreach su variabili mixed senza type checking

**Esempi**:
- `tests/Unit/ModuleServiceTest.php:65`
- `tests/Unit/XotBaseTransitionTest.php:132`
- `tests/Feature/ModuleServiceIntegrationTest.php` (multipli)

**Soluzione**:
```php
// ❌ PRIMA
foreach ($result as $item) {  // $result è mixed
    // ...
}

// ✅ DOPO
if (is_iterable($result)) {
    foreach ($result as $item) {
        // ...
    }
}

// ✅ ANCORA MEGLIO - Type assertion
Assert::isIterable($result);
foreach ($result as $item) {
    // ...
}
```

### 5. argument.type (10+ occorrenze)
**Pattern**: Type mismatch negli argomenti di funzioni

**Soluzione**: Type casting o validazione esplicita
```php
// ❌ PRIMA
$value = someFunction();
anotherFunction($value);  // mixed passato a string

// ✅ DOPO
$value = someFunction();
Assert::string($value);
anotherFunction($value);
```

### 6. binaryOp.invalid (8+ occorrenze)
**Pattern**: Operazioni binarie su mixed types

**Esempi**: `tests/Feature/FixStructureTest.php` (multipli)

**Soluzione**:
```php
// ❌ PRIMA
$count = $result['count'];
$total = $count + 1;  // $count è mixed

// ✅ DOPO
$count = $result['count'];
Assert::integer($count);
$total = $count + 1;
```

### 7. argument.templateType (5+ occorrenze)
**Pattern**: Template types non risolvibili in Pest expectations

**Soluzione**:
```php
// ⚠️ Spesso richiede phpstan-ignore
/** @phpstan-ignore-next-line argument.templateType */
expect($value)->toBe('expected');
```

### 8. theCodingMachineSafe.function (2 occorrenze)
**Pattern**: Safe functions non importate

**File**: `tests/Feature/fixstructuretest.pest.php`

**Soluzione**:
```php
// ✅ Importare Safe functions
use function Safe\file_get_contents;
use function Safe\json_decode;
```

### 9. new.internalClass (4 occorrenze)
**Pattern**: Istanziazione di classi internal test

**File**: `tests/Unit/XotBaseTransitionTest.php`

**Soluzione**: Documentare con `@internal` o ignorare se intenzionale

### 10. callable.nonNativeMethod (6+ occorrenze)
**Pattern**: Metodi non-nativi usati come callable

**File**: `app/Filament/Traits/HasXotTable.php`

**Soluzione**: Spesso richiede refactoring o ignore specifico

## 📋 File con Più Errori

| File | Errori | Priorità |
|------|--------|----------|
| `app/Filament/Traits/HasXotTable.php` | ~24 | ALTA |
| `tests/Feature/FixStructureTest.php` | ~15 | MEDIA |
| `tests/Unit/XotBaseTransitionTest.php` | ~9 | MEDIA |
| `tests/Feature/ModuleServiceIntegrationTest.php` | ~18 | MEDIA |
| `tests/Unit/Models/XotBaseModelTest.php` | ~4 | BASSA |

## 🎯 Piano di Correzione

### Fase 1: Quick Wins (Priorità Alta)
1. ✅ Importare Safe functions mancanti (2 fix)
2. [ ] Aggiungere type narrowing per ReflectionType (5 fix)
3. [ ] Correggere return types in Exports (2 fix)

### Fase 2: Test Quality (Priorità Media)
1. [ ] Convertire proprietà `$this` a variabili locali (12 fix)
2. [ ] Aggiungere type assertions nei test (10 fix)
3. [ ] Fixare foreach su mixed (6 fix)

### Fase 3: Trait Refactoring (Priorità Alta ma Complesso)
1. [ ] Refactor `HasXotTable.php` trait (24 errori)
   - Return types correction
   - Callable type safety
   - Method signatures

### Fase 4: Binary Operations (Priorità Bassa)
1. [ ] Type assertions per operazioni binarie (8 fix)

## 📚 Best Practices per Modulo Xot

### Test Files

```php
// ✅ Template per Pest test type-safe
<?php

declare(strict_types=1);

use function Safe\file_get_contents;  // Import Safe functions

use Modules\Xot\Models\Example;

test('example test', function (): void {
    // Usare variabili locali invece di $this
    $model = Example::factory()->create();
    
    // Type assertions prima di operazioni
    Assert::integer($model->id);
    expect($model->id)->toBeGreaterThan(0);
    
    // Type narrowing per reflection
    $reflection = new \ReflectionClass($model);
    $method = $reflection->getMethod('someMethod');
    $returnType = $method->getReturnType();
    
    if ($returnType instanceof \ReflectionNamedType) {
        expect($returnType->getName())->toBe('array');
    }
});
```

### Export Classes

```php
// ✅ Return types corretti
class CollectionExport
{
    public function collection(): Collection  // Non array!
    {
        return $this->data;
    }
    
    // OR se deve ritornare array
    public function array(): array
    {
        return $this->data->toArray();
    }
}
```

### Trait Development

```php
// ✅ Type safety in traits
trait HasXotTable
{
    /**
     * @return array<int, Column>
     */
    protected function getTableColumns(): array
    {
        // Implementation con type hints chiari
    }
}
```

## 📊 Metriche

### Prima dell'Analisi
- **Status**: Sconosciuto
- **Type Coverage**: Parziale

### Dopo Analisi
- **Errori Identificati**: 149
- **Categorie**: 10
- **Priorità Alta**: ~35 errori
- **Priorità Media**: ~80 errori
- **Priorità Bassa**: ~34 errori

## 🔗 Collegamenti

- [Analisi Generale PHPStan](../../../project_docs/quality/phpstan-analysis.md)
- [PHPStan Quality Rules](../../Activity/docs/PHPSTAN_QUALITY_RULES.md)
- [CLAUDE.md - Quality Guidelines](../../../CLAUDE.md)

## 📝 Note

Il modulo **Xot** è il modulo **foundation** dell'applicazione, fornisce:
- Base models e traits
- Utilities e helpers
- Filament base resources
- Testing infrastructure

Per questo motivo, migliorare la type safety di Xot ha **impatto su tutti gli altri moduli**. Le correzioni qui beneficiano l'intero progetto.

## ⚠️ Attenzione

Molti errori in `HasXotTable.php` sono dovuti a:
- Filament 4 dynamic method calls
- Generic types complessi
- Callable types dinamici

Questi potrebbero richiedere:
- PHPStan extensions per Filament
- Baseline temporaneo per alcuni errori
- Refactoring significativo

---

**Analisi Completata**: 2025-01-11  
**Modulo**: Xot (Foundation)  
**Impact**: CRITICO (influenza tutti i moduli)
