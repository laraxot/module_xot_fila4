<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 90d386aa (.)
=======
>>>>>>> 3eee6f79 (.)
=======
>>>>>>> 5a14301c (.)
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
# PSR-4 Compliance per Test - Modulo Xot

## Problema Identificato

I file di test che contengono classi helper devono rispettare lo standard PSR-4 per l'autoloading. Le classi definite nei file di test devono essere nel namespace appropriato.

## Regole PSR-4 per i Test

### Configurazione Autoload

Nel `composer.json` del modulo Xot:

```json
"autoload": {
    "psr-4": {
        "Modules\\Xot\\Tests\\": "tests/"
    }
}
```

### Struttura Corretta

✅ **CORRETTO**: Namespace appropriato per classi di test

```php
<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

use Modules\Xot\Models\Traits\HasExtraTrait;
use Modules\Xot\Contracts\ExtraContract;
use Illuminate\Database\Eloquent\Model;

/**
 * Helper class for testing HasExtraTrait.
 */
class TestExtra extends Model implements ExtraContract 
{
    protected $table = 'test_extras';
    
    /** @var list<string> */
    protected $fillable = ['model_id', 'model_type', 'extra_attributes'];
    
    protected function casts(): array
    {
        return [
            'extra_attributes' => 'collection',
        ];
    }
    
    public function model()
    {
        return $this->morphTo();
    }
}
```

### Errori Comuni da Evitare

❌ **ERRATO**: Classe senza namespace

```php
<?php

declare(strict_types=1);

// Manca il namespace!
use Modules\Xot\Models\Traits\HasExtraTrait;

class TestExtra extends Model // Viola PSR-4
{
    // ...
}
```

## Best Practices

1. **Namespace Obbligatorio**: Ogni classe nei file di test deve avere il namespace `Modules\Xot\Tests\{SubNamespace}`
2. **Documentazione**: Tutte le classi helper devono avere PHPDoc completo
3. **Tipizzazione**: Utilizzare type hints espliciti per proprietà e metodi
4. **Naming**: Nomi delle classi helper devono essere descrittivi e indicare il loro scopo

## Verifica della Conformità

```bash
# Verifica autoload PSR-4
composer dump-autoload

# Controlla errori di namespace
./vendor/bin/phpstan analyze tests/ --level=9
```

## Correzioni Applicate

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 3bf39332 (.)
=======
=======
>>>>>>> cf971011 (.)
=======
=======
>>>>>>> e7da37af (.)
=======
=======
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> 39bb163e (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 3bf39332 (.)
=======
=======
>>>>>>> cf971011 (.)
=======
=======
>>>>>>> e7da37af (.)
### File: `tests/Unit/HasXotTableTest.php` (2025-01-06)

- **Problema**: Classi `HasTableWithXot`, `HasTableWithoutOptionalMethods`, `DummyModel` senza namespace appropriato
- **Soluzione**: Aggiunto `namespace Modules\Xot\Tests\Unit;` prima delle definizioni delle classi
- **Miglioramenti**: 
  - Documentazione PHPDoc completa per tutte le classi helper
  - Tipizzazione esplicita delle proprietà con `@property` annotations
  - Rimossi implements non necessari per semplificare i mock
  - Organizzazione corretta degli import

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 90d386aa (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 0d20089f (.)
=======
>>>>>>> 3eee6f79 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 39bb163e (.)
=======
>>>>>>> b396242e (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
### File: `tests/Unit/HasExtraTraitTest.php`

- **Problema**: Classe `TestExtra` senza namespace appropriato
- **Soluzione**: Aggiunto `namespace Modules\Xot\Tests\Unit;`
- **Miglioramenti**: 
  - Documentazione PHPDoc completa
  - Tipizzazione esplicita per proprietà `$fillable`
  - Type hints per metodi

## Collegamenti

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Testing Guide - Modulo <nome modulo>](../../<nome modulo>/docs/testing.md)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/docs/testing.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/docs/testing.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> b7ea1cd1 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/docs/testing.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/docs/testing.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> b7ea1cd1 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 88e35986 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> e0b8ebe3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 76bec91a (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> cc52d333 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 55fe1822 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 90d386aa (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 6d05deed (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 0d20089f (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 3eee6f79 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 39bb163e (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> b396242e (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/docs/testing.md)
>>>>>>> 5a14301c (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 43d67f21 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> b7ea1cd1 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 88e35986 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> e0b8ebe3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> 76bec91a (.)
=======
- [Testing Guide - Modulo SaluteMo](../../SaluteMo/project_docs/testing.md)
>>>>>>> cc52d333 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
- [PHPStan Configuration](./phpstan-configuration-fixes.md)
- [Best Practices](./best-practices-consolidated.md)

---

*Ultimo aggiornamento: 2025-01-06*
*Conformità: PSR-4, PHPStan livello 9+, Laraxot standards*

<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 90d386aa (.)
=======
>>>>>>> 3eee6f79 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
=======
>>>>>>> cc52d333 (.)
