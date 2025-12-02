# Spatie Laravel Schemaless Attributes - Guida Completa

## Indice
- [Introduzione](#introduzione)
- [Installazione e Configurazione](#installazione-e-configurazione)
- [Implementazione nel Modello](#implementazione-nel-modello)
- [Utilizzo Corretto](#utilizzo-corretto)
- [Anti-Pattern da Evitare](#anti-pattern-da-evitare)
- [Query con Schemaless Attributes](#query-con-schemaless-attributes)
- [Riferimenti nel Codice Laraxot](#riferimenti-nel-codice-laraxot)

---

## Introduzione

Il pacchetto `spatie/laravel-schemaless-attributes` permette di aggiungere attributi dinamici (schemaless) ai modelli Eloquent, memorizzandoli in una colonna JSON.

**Repository ufficiale**: https://github.com/spatie/laravel-schemaless-attributes

**Requisiti**:
- Database con supporto JSON (MySQL 5.7+, PostgreSQL, SQLite 3.9+)
- Laravel 8.x o superiore
- PHP 8.0 o superiore

---

## Installazione e Configurazione

### 1. Installazione via Composer
```bash
composer require spatie/laravel-schemaless-attributes
```

### 2. Migration per la Colonna JSON
```php
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        Schema::table('your_models', function (Blueprint $table) {
            $table->schemalessAttributes('extra_attributes');
        });
    }
};
```

---

## Implementazione nel Modello

### Pattern Corretto ✅

```php
<?php

declare(strict_types=1);

namespace Modules\YourModule\Models;

use Override;
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait;

/**
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 * 
 * @method static Builder|YourModel withExtraAttributes()
 */
class YourModel extends BaseModel
{
    // ✅ CORRETTO: Usare il trait
    use SchemalessAttributesTrait;

    /**
     * Cast della colonna extra_attributes.
     * NOTA: Usare il metodo casts() NON la proprietà $casts
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'extra_attributes' => SchemalessAttributes::class,
            // altri cast...
        ];
    }

    // ✅ CORRETTO: NON implementare scopeWithExtraAttributes() manualmente!
    // Il trait SchemalessAttributesTrait lo fornisce automaticamente!
}
```

### Anti-Pattern da NON Usare ❌

```php
// ❌ GRAVEMENTE ERRATO: MAI implementare scopeWithExtraAttributes() manualmente!
// Il trait SchemalessAttributesTrait lo fornisce automaticamente!
public function scopeWithExtraAttributes(): Builder
{
    return $this->extra_attributes->modelScope(); // ERRORE: $this è Builder, non Model!
}

// ❌ ERRATO: Usare la proprietà $casts invece del metodo casts()
public $casts = [
    'extra_attributes' => SchemalessAttributes::class,
];

// ❌ ERRATO: NON usare il trait
// use SchemalessAttributesTrait; // MANCA!
```

---

## Utilizzo Corretto

### Lettura e Scrittura Attributi

```php
// Scrittura - Property Style
$model->extra_attributes->anno = 2025;
$model->extra_attributes->type = 'rating';

// Scrittura - Array Style
$model->extra_attributes['anno'] = 2025;

// Scrittura - Set con dot notation
$model->extra_attributes->set('config.enabled', true);
$model->extra_attributes->set('config.options.color', 'blue');

// Lettura - Property Style
$anno = $model->extra_attributes->anno;

// Lettura - Array Style
$anno = $model->extra_attributes['anno'];

// Lettura - Get con dot notation e default
$value = $model->extra_attributes->get('config.enabled', false);

// Lettura - Ottenere tutti gli attributi
$all = $model->extra_attributes->all(); // Returns array

// Sostituzione completa
$model->extra_attributes = ['anno' => 2025, 'type' => 'new'];

// Persistenza - SEMPRE chiamare save()
$model->save();
```

---

## Query con Schemaless Attributes

### ⚠️ ATTENZIONE: Bug nell'Implementazione Corrente

**IMPORTANTE:** L'implementazione corrente di `scopeWithExtraAttributes()` nel modello `Rating` (e derivati) **IGNORA completamente i parametri passati!**

```php
// Implementazione BUGGATA in Modules/Rating/app/Models/Rating.php:
public function scopeWithExtraAttributes(Builder $query, string|array $schemalessAttributes = [], mixed $value = null): Builder
{
    return $this->extra_attributes->modelScope(); // ❌ IGNORA i parametri!
}
```

### ✅ Pattern CORRETTO - Usare SEMPRE where() con JSON path

**QUESTO È L'UNICO METODO AFFIDABILE:**

```php
// ✅ CORRETTO: Query con JSON path - FUNZIONA SEMPRE
$ratings = Rating::where('extra_attributes->anno', 2025)->get();
$ratings = Rating::where('extra_attributes->type', 'valutazione')->get();

// ✅ CORRETTO: Con operatori
$ratings = Rating::where('extra_attributes->anno', '>=', 2023)->get();

// ✅ CORRETTO: Attributi nested
$ratings = Rating::where('extra_attributes->config->enabled', true)->get();

// ✅ CORRETTO: Multipli attributi
$ratings = Rating::where('extra_attributes->anno', 2025)
    ->where('extra_attributes->type', 'valutazione')
    ->get();
```

### ❌ Pattern ERRATO (Anti-Pattern) - NON USARE MAI

```php
// ❌ ERRATO: withExtraAttributes() con parametri - I PARAMETRI VENGONO IGNORATI!
$ratings = Rating::withExtraAttributes('anno', 2025)->get(); // ❌ Restituisce TUTTI i record!

// ❌ ERRATO: Chiamare withExtraAttributes() VUOTO e poi where()
$ratings = Rating::query()
    ->withExtraAttributes()  // ❌ INUTILE - restituisce solo il query builder
    ->where('extra_attributes->anno', $anno)
    ->get();

// ❌ ERRATO: Pensare che withExtraAttributes() filtri
// Il metodo corrente ignora TUTTI i parametri e restituisce TUTTI i record!
```

### Perché withExtraAttributes() non Funziona?

1. **L'implementazione è BUGGATA:** Il metodo accetta parametri ma non li usa

2. **Il codice ritorna solo `$this->extra_attributes->modelScope()`** che è il query builder base senza filtri

3. **Usare SEMPRE `where()` con JSON path** finché il bug non viene corretto:
   ```php
   // ✅ UNICO METODO AFFIDABILE
   Rating::where('extra_attributes->anno', 2025)->get();
   ```

4. **Questo bug è stato identificato il 2025-12** e documentato in:
   - `Modules/IndennitaResponsabilita/docs/code-analysis-dry-kiss-solid.md`

---

## Riferimenti nel Codice Laraxot

### Modelli che Usano Schemaless Attributes

| Modulo | Modello | Colonna | Scope |
|--------|---------|---------|-------|
| Rating | `Rating` | `extra_attributes` | `scopeWithExtraAttributes()` |
| User | `BaseProfile` | `extra` | `scopeWithExtraAttributes()` |
| Xot | `BaseExtra` | `extra_attributes` | `scopeWithExtraAttributes()` |
| IndennitaResponsabilita | `Rating` | `extra_attributes` | ereditato da Rating |

### File di Riferimento

- `/Modules/Rating/app/Models/Rating.php` - Implementazione base
- `/Modules/User/app/Models/BaseProfile.php` - Usa `SchemalessAttributesTrait`
- `/Modules/Xot/app/Models/BaseExtra.php` - Modello base per Extra
- `/Modules/Xot/app/Models/Traits/HasExtraTrait.php` - Trait per relazione con Extra

---

## Checklist per Implementazione

- [ ] Trait `SchemalessAttributesTrait` aggiunto al modello
- [ ] Usare `casts()` metodo, NON proprietà `$casts`
- [ ] **NON** implementare `scopeWithExtraAttributes()` manualmente - il trait lo fornisce!
- [ ] Query usano `withExtraAttributes('key', 'value')` CON parametri (PREFERITO)
- [ ] OPPURE usano `where('extra_attributes->key', $value)` direttamente (alternativa meno preferita)
- [ ] MAI chiamare `withExtraAttributes()` vuoto prima di `where()`
- [ ] PHPDoc include `@property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes`
- [ ] PHPDoc include `@method static Builder withExtraAttributes()`

---

## Link Correlati

- [GitHub: spatie/laravel-schemaless-attributes](https://github.com/spatie/laravel-schemaless-attributes)
- [Documentazione Modulo Rating](/Modules/Rating/docs/README.md)
- [Documentazione Modulo User](/Modules/User/docs/README.md)

---

*Ultimo aggiornamento: Gennaio 2025 - Aggiornata sintassi preferita: `withExtraAttributes()` invece di `where('extra_attributes->...')`*
