<<<<<<< HEAD
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
=======
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 50d6b63f (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 551c768c4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 50d6b63f (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 62cc8443 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> ab5b3a4f (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 88e745db5 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
>>>>>>> 50d6b63f (.)
>>>>>>> 551c768c4 (.)
# Testing Best Practices - Laraxot Framework

## 🏆 **Gold Standard Pattern**

Basato sui successi misurabili dei test RegisterTypeWidgetTest.php (9/9 test passati) e RegisterTypeTest.php (10/14 test passati).

## ✅ **Pattern Vincente per Widget Test**

### Struttura Base Obbligatoria

```php
<?php

declare(strict_types=1);

use Livewire\Livewire;
use Modules\{Module}\Filament\Widgets\{WidgetName};

// ✅ CRITICO: TestCase specifico
uses(\Modules\Xot\Tests\TestCase::class);

// ✅ CRITICO: Mock XotData per ogni test
beforeEach(function (): void {
    mockXotData();
});

// ✅ CRITICO: Test diretti senza describe() o dataset()
test('widget can be rendered', function () {
    Livewire::test({WidgetName}::class)
        ->assertStatus(200);
});
```

### XotData Mock Pattern (Obbligatorio)

```php
function mockXotData(): void
{
    $mockXotData = \Mockery::mock(\Modules\Xot\Datas\XotData::class)->makePartial();
    
    $mockXotData->shouldReceive('getUserClass')
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
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
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
=======
<<<<<<< HEAD
>>>>>>> 62cc8443 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
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
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
=======
>>>>>>> 50d6b63f (.)
>>>>>>> 551c768c4 (.)
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
=======
>>>>>>> d86d643a (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 62cc8443 (.):docs/TESTING_BEST_PRACTICES.md
=======
<<<<<<< HEAD
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> d86d643a (.)
=======
<<<<<<< HEAD
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> d86d643a (.)
=======
>>>>>>> 50d6b63f (.)
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> 472bd9dc (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> 3bf39332 (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> cf971011 (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> e7da37af (.)
<<<<<<< HEAD
=======
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> d86d643a (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> 472bd9dc (.)
>>>>>>> 551c768c4 (.)
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> ab5b3a4f (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> cf971011 (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 88e745db5 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
        ->andReturn(\Modules\<nome modulo>\Models\User::class);
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
>>>>>>> 50d6b63f (.)
>>>>>>> 551c768c4 (.)
        
    $mockXotData->shouldReceive('make')
        ->andReturn($mockXotData);
    
    // ✅ CRITICO: Bind nel container
    app()->instance(\Modules\Xot\Datas\XotData::class, $mockXotData);
}
```

## 🚨 **Regole Architetturali Critiche**

### 1. **Separazione Assoluta**
- **Page Tests**: Solo per route e rendering pagine Laravel Folio
- **Widget Tests**: Solo per componenti Filament/Livewire logic

### 2. **TestCase Selection**
- **SEMPRE** usare `\Modules\Xot\Tests\TestCase::class`
- **MAI** usare namespace con `Modules\Cms\Tests\TestCase`

### 3. **XotData Dependency**
- **SEMPRE** mock XotData nei `beforeEach()`
- **SEMPRE** usare `makePartial()` per flessibilità
- **SEMPRE** bind nel container con `app()->instance()`

## ❌ **Anti-Pattern Critici da Evitare**

### 1. **Pattern che Causano Errori Fatali**

```php
// ❌ MAI usare describe() con Pest
describe('Widget Tests', function () {
    // Causa: "Undefined property: $__latestDescription"
});

// ❌ MAI usare dataset() complessi
dataset('userTypes', function () {
    // Causa errori di inizializzazione Pest
});

// ❌ MAI TestCase sbagliato
uses(Tests\TestCase::class); // Causa conflict resolution
```

### 2. **Mock Pattern Problematici**

```php
// ❌ Mock rigido senza makePartial()
\Mockery::mock(\Modules\Xot\Datas\XotData::class);

// ❌ Mock senza binding nel container
$mock = \Mockery::mock(...);
// Non basta, serve app()->instance()

// ✅ Pattern corretto
$mock = \Mockery::mock(...)->makePartial();
app()->instance(\Modules\Xot\Datas\XotData::class, $mock);
```

## 📊 **Test Coverage Strategy**

### Widget Tests (Target: 100%)
1. **Core Rendering** (Obbligatorio)
   - Basic rendering per ogni tipo supportato
   - Status assertions (200)
   - View assertions quando applicabile

2. **Form Interaction** (Raccomandato)
   - Input/output data flow
   - State management
   - Livewire compatibility

3. **Business Logic** (Avanzato)
   - Validation rules
   - Error handling
   - Process flow

4. **Integration** (Critico)
   - XotData resolution
   - Resource dynamics
   - Widget lifecycle

### Page Tests (Target: 70%+)
1. **Route Rendering** (Obbligatorio)
   - HTTP status assertions
   - Content presence
   - Layout structure

2. **Middleware** (Raccomandato) 
   - Authentication flow
   - Authorization checks
   - Redirect behavior

3. **UI Elements** (Avanzato)
   - Component presence
   - Dynamic content
   - Responsive behavior

## 🔧 **Development Workflow**

### Pre-Development
1. **Identificare architettura** target (Page vs Widget)
2. **Scegliere template** appropriato
3. **Setup mock XotData** se necessario

### During Development
1. **Test-driven approach**: Scrivere test prima dell'implementazione
2. **Iterative testing**: Eseguire test frequentemente
3. **Performance monitoring**: Mantenere < 5s per test suite

### Post-Development
1. **Code review**: Verificare pattern compliance
2. **Documentation update**: Aggiornare docs se nuovi pattern
3. **Performance validation**: Benchmark vs obiettivi

## 🎯 **Quality Gates**

### Minimum Acceptance Criteria
- ✅ **Success Rate**: > 70% test passati
- ✅ **Zero Errors**: Nessun errore fatale Pest
- ✅ **Performance**: < 5 secondi per test suite
- ✅ **Architecture**: Separazione rispettata

### Gold Standard Criteria  
- ✅ **Success Rate**: > 90% test passati
- ✅ **Zero Warnings**: Nessun warning PHP/Pest
- ✅ **Performance**: < 3 secondi per test suite
- ✅ **Coverage**: Tutti i path critici testati

## 📈 **Metrics & Monitoring**

### Key Performance Indicators
- **Test Execution Time**: Target < 5s per widget suite
- **Success Rate**: Trend verso 100%
- **Error Rate**: Target 0 errori fatali
- **Coverage**: Incremento continuo

### Monitoring Commands
```bash
# Execution time monitoring
./vendor/bin/pest -v {TestFile} | grep -E "(seconds|ms)"

# Success rate calculation  
./vendor/bin/pest {TestFile} --compact

# Memory usage monitoring
./vendor/bin/pest {TestFile} --memory-limit=64M
```

## 🔄 **Continuous Improvement**

### Pattern Evolution
- **Document** nuovi pattern che emergono
- **Validate** pattern con test suite completa
- **Standardize** pattern che dimostrano successo
- **Deprecate** pattern che causano problemi

### Knowledge Sharing
- **Code Reviews**: Enforce pattern compliance
- **Documentation**: Update con nuove discoveries
- **Training**: Onboard team sui pattern stabiliti
- **Retrospectives**: Analizzare fallimenti per migliorare

## 🔗 **Related Documentation**

- [Widget Test Patterns](../Cms/docs/tests/widget-test-patterns.md)
- [Architecture Separation Rules](../Cms/docs/tests/architecture-separation-rules.md)
- [XotData Testing Strategy](XOTDATA_TESTING.md)

---

**Status**: ✅ Best Practices Validate  
**Enforcement**: Obbligatorio per tutti i test  
**Version**: 1.0 - Gold Standard
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
**Last Update**: Dicembre 2024 
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
>>>>>>> 50d6b63f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 62cc8443 (.):docs/TESTING_BEST_PRACTICES.md
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.):docs/TESTING_BEST_PRACTICES.md
**Last Update**: Dicembre 2024 
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88e745db5 (.):docs/TESTING_BEST_PRACTICES.md
**Last Update**: Dicembre 2024 
=======
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.):docs/TESTING_BEST_PRACTICES.md
**Last Update**: Dicembre 2024 
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 62cc8443 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> ecd5ec32 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
**Last Update**: Dicembre 2024 
>>>>>>> 5a14301c (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
**Last Update**: Dicembre 2024 
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 50d6b63f (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
=======
=======
**Last Update**: Dicembre 2024 
>>>>>>> 5a14301c (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> ab5b3a4f (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> cf971011 (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 88e745db5 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> 76bec91a (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 5e6aa70fe (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
**Last Update**: Dicembre 2024 
>>>>>>> e7da37af (.)
<<<<<<< HEAD:docs/testing-best-practices-conflict.md
>>>>>>> 7e4835b8e (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
>>>>>>> e39b54ba7 (.):docs/TESTING_BEST_PRACTICES.md
=======
=======
**Last Update**: Dicembre 2024 
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
>>>>>>> 50d6b63f (.)
>>>>>>> 551c768c4 (.)
