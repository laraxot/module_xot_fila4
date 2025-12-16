# Code Quality Mandatory Checks - base_laravelpizza

**Ultimo aggiornamento**: 2025-12-01  
**Principi**: DRY + KISS + SOLID + Robust  
**Stack**: Laravel 12 + Filament 4 + PHP 8.3 + Laraxot  
**Obiettivo**: 0 errori PHPStan Level 10 + Complexity < 10 + Quality > 80%

---

## ⚠️ REGOLA CRITICA - Controlli Qualità Codice OBBLIGATORI

**OGNI VOLTA CHE MODIFICHI UN FILE PHP, DEVI CONTROLLARLO CON:**

1. **PHPStan livello 10**: `./vendor/bin/phpstan analyse --level=10 path/to/file.php`
2. **PHPMD** (se disponibile): `./vendor/bin/phpmd path/to/file.php text path/to/phpmd.ruleset.xml`
3. **PHPInsights** (se disponibile): `./vendor/bin/phpinsights analyse path/to/file.php`

**NON COMMITARE MAI codice che non passa questi controlli!**

**Questa regola è ASSOLUTAMENTE OBBLIGATORIA e NON deve mai essere ignorata!**

## Workflow Obbligatorio

1. **Modifica il file**
2. **Esegui PHPStan livello 10** - Corregge TUTTI gli errori (NON procedere se ci sono errori)
3. **Esegui PHPMD** - Risolve code smells (se disponibile)
4. **Esegui PHPInsights** - Verifica qualità complessiva (se disponibile)
5. **Commit solo se tutti i controlli passano**

## Verifica Finale

Dopo aver corretto tutti gli errori in un file, esegui:
```bash
./vendor/bin/phpstan analyse --level=10 path/to/file.php
```

Deve restituire: `[OK] No errors`

## Documentazione

Vedi: `laravel/Modules/Xot/docs/code-quality-mandatory-checks.md`

## Esempi di Correzione Comuni

### Errori view-string
```php
/** @var string $view */
$view = app(GetViewAction::class)->execute();
/** @var view-string $view */
return view($view, $params);
```

### Errori factory mixed
```php
/** @var Factory<Model> $factory */
$factory = Model::factory(10);
/** @var \Illuminate\Database\Eloquent\Collection<int, Model> $collection */
$collection = $factory->create([...]);
```

---

