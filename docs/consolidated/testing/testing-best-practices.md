<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
# Testing Best Practices - Laraxot Framework

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

beforeEach(function (): void {
    mockXotData();
});

test('widget can be rendered', function () {
    Livewire::test({WidgetName}::class)
        ->assertStatus(200);
});
```

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
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
>>>>>>> ce6fc085 (.)
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
<<<<<<< HEAD
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
=======
>>>>>>> d86d643a (.)
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> 472bd9dc (.)
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> 3bf39332 (.)
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> cf971011 (.)
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome progetto>\\Models\\User::class);
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
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
<<<<<<< HEAD
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\<nome modulo>\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
=======
>>>>>>> 43d67f21 (.)
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
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
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
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
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
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
    $mock->shouldReceive('getUserClass')->andReturn(\\Modules\\SaluteOra\\Models\\User::class);
>>>>>>> 76bec91a (.)
>>>>>>> 5e6aa70fe (.)
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
