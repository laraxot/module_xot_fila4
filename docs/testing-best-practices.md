<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
=======
>>>>>>> e0b8ebe3 (.)
>>>>>>> 358ba79a7 (.)
## 🏆 Gold Standard per i Test

- Preferire Pest a PHPUnit class-based.
- Usare `uses(\Modules\Xot\Tests\TestCase::class)` come base dei test.
- Mockare sempre `XotData` in `beforeEach()` e registrarlo nel container.
- Separare Page tests (routing/render) e Widget tests (logica Filament/Livewire).

### Esempio Widget (Livewire/Filament)
```php
<?php
declare(strict_types=1);

use Livewire\\Livewire;
use Modules\\{Module}\\Filament\\Widgets\\{WidgetName};

uses(\\Modules\\Xot\\Tests\\TestCase::class);

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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> a5dccfe (.)
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
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> ba1d49f3 (.)
<<<<<<< HEAD
>>>>>>> 59259b43 (.)
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> b956ebe0 (.)
>>>>>>> aba62c408 (.)
beforeEach(function (): void {
    mockXotData();
});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
// ✅ CRITICO: Test diretti senza describe() o dataset()
=======
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
// ✅ CRITICO: Test diretti senza describe() o dataset()
>>>>>>> 091f883c (.)
=======
// ✅ CRITICO: Test diretti senza describe() o dataset()
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
// ✅ CRITICO: Test diretti senza describe() o dataset()
>>>>>>> 59259b43 (.)
=======
// ✅ CRITICO: Test diretti senza describe() o dataset()
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
// ✅ CRITICO: Test diretti senza describe() o dataset()
>>>>>>> aba62c408 (.)
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
<<<<<<< HEAD
        ->andReturn(\Modules\SaluteOra\Models\User::class);
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
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88ee35c4e (.)
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
        ->andReturn(\Modules\SaluteOra\Models\User::class);
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
=======
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
=======
        ->andReturn(\Modules\<nome progetto>\Models\User::class);
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
        ->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5bd842e3 (.)
>>>>>>> 88ee35c4e (.)
        
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
>>>>>>> 6ca989d8 (.)
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
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
>>>>>>> ce6fc085 (.)
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
**Last Update**: Dicembre 2024 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
**Last Update**: Dicembre 2024 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
**Last Update**: Dicembre 2024 
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
**Last Update**: Dicembre 2024 
<<<<<<< HEAD
=======
>>>>>>> e0b8ebe3 (.)
>>>>>>> 358ba79a7 (.)
### Esempio unit test semplice
```php
<?php
declare(strict_types=1);

use Illuminate\\Database\\Eloquent\\Relations\\Pivot;
use Modules\\Xot\\Models\\BaseMorphPivot;

it('extends pivot class', function () {
    $pivot = new BaseMorphPivot();
    expect($pivot)->toBeInstanceOf(Pivot::class);
});
```

### Mock XotData (obbligatorio)
```php
function mockXotData(): void
{
    $mock = \\Mockery::mock(\\Modules\\Xot\\Datas\\XotData::class)->makePartial();
<<<<<<< HEAD
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
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> 62cc8443 (.)
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
>>>>>>> ce6fc085 (.)
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
<<<<<<< HEAD
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
=======
>>>>>>> d86d643a (.)
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> e0b8ebe3 (.)
>>>>>>> 358ba79a7 (.)
    $mock->shouldReceive('make')->andReturn($mock);
    app()->instance(\\Modules\\Xot\\Datas\\XotData::class, $mock);
}
```

## 🚨 Regole Architetturali

- Page vs Widget: non mischiare responsabilità nei test.
- Base TestCase: usare sempre `\\Modules\\Xot\\Tests\\TestCase`.
- Mock coerente delle dipendenze (XotData, servizi esterni).

## ❌ Anti-pattern da evitare

- TestCase errato (es. `Tests\\\\TestCase`).
- Dataset eccessivamente complessi e non necessari.
- Mock senza `makePartial()` o non registrati nel container.

## 📊 Strategia Coverage

- Widget: rendering (200), interazioni form, validazioni, integrazioni (XotData), lifecycle.
- Page: route/status, contenuto, middleware, elementi UI principali.

## 🔧 Workflow

- Pre: definire architettura e template, predisporre mock.
- Durante: TDD dove possibile, esecuzioni frequenti, attenzione alle performance.
- Post: code review, aggiornamento documentazione, benchmark suite.

## 🔗 Documentazione correlata

- Widget Test Patterns (Cms)
- Architecture Separation Rules (Cms)
- XotData Testing Strategy (XOTDATA_TESTING.md)

Status: Best Practices consolidate — Last Update: Dicembre 2024


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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ce6fc085 (.)
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
<<<<<<< HEAD
**Last Update**: Dicembre 2024 
**Last Update**: Dicembre 2024 
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
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> a5dccfe (.)
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
>>>>>>> 5a14301c (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> c35986f4 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> ba1d49f3 (.)
<<<<<<< HEAD
>>>>>>> 59259b43 (.)
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
**Last Update**: Dicembre 2024 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> b956ebe0 (.)
>>>>>>> aba62c408 (.)
