# Eloquent Magic Properties Rule - property_exists vs isset

**Ultimo aggiornamento**: 2025-12-01  
**Principio**: property_exists() NON funziona con magic attributes Eloquent

---

## ⚠️ REGOLA CRITICA - Property Access su Modelli Eloquent

**`property_exists()` NON può essere usato con i modelli Eloquent perché gli attributi sono magici.**

**REGOLA ASSOLUTA**: USA SEMPRE `isset()` per verificare proprietà dinamiche dei modelli.

**❌ VIETATO**: Usare `property_exists()` con modelli Eloquent - NON funziona con magic attributes.

---

## ❌ ERRATO

```php
// ❌ SBAGLIATO - property_exists() NON funziona con magic attributes
if (property_exists($model, 'attribute')) {
    $value = $model->attribute;
}

// ❌ SBAGLIATO - property_exists() su mixed
if (property_exists($data, 'key')) {
    $value = $data->key;
}
```

---

## ✅ CORRETTO

```php
// ✅ CORRETTO - usa isset() per magic attributes
if (isset($model->attribute)) {
    $value = $model->attribute;
}

// ✅ CORRETTO - validazione multipla con type narrowing
if (is_object($model) && isset($model->attribute)) {
    $value = $model->attribute;
}

// ✅ CORRETTO - con Assert per type safety
use Webmozart\Assert\Assert;

if (is_object($model)) {
    Assert::isObject($model);
    if (isset($model->attribute)) {
        $value = $model->attribute;
    }
}
```

---

## Perché property_exists() Non Funziona

Gli attributi Eloquent sono **magic attributes** gestiti tramite:
- `__get()` - Accesso dinamico
- `__set()` - Assegnazione dinamica
- `getAttribute()` - Metodo interno

`property_exists()` controlla solo le proprietà **reali** della classe, non quelle gestite magicamente.

---

## Pattern Completi

### Accesso Sicuro a Proprietà Dinamiche

```php
// ✅ CORRETTO - Pattern completo con type narrowing
/**
 * @param  mixed  $model
 */
private function getModelAttribute($model, string $attribute): mixed
{
    if (! is_object($model)) {
        return null;
    }

    // PHPStan L10: Type narrowing required for magic attributes
    if (isset($model->{$attribute})) {
        return $model->{$attribute};
    }

    return null;
}
```

### Verifica Multipla Proprietà

```php
// ✅ CORRETTO - Verifica multipla proprietà
if (isset($model->field_name, $model->surveyId)) {
    $fieldName = (string) $model->field_name;
    $surveyId = (string) $model->surveyId;
    // ... usa le proprietà
}
```

### Con Cast Sicuro

```php
// ✅ CORRETTO - Con cast sicuro
use Modules\Xot\Actions\Cast\SafeStringCastAction;

if (isset($model->title)) {
    $title = SafeStringCastAction::cast($model->title);
    // ... usa $title
}
```

---

## Verifica PHPStan

Dopo aver corretto, verifica con:
```bash
./vendor/bin/phpstan analyse --level=10 path/to/File.php
```

**Errore tipico se usi property_exists():**
```
Call to function property_exists() with object and string will always evaluate to false for Eloquent models with magic attributes
```

**Soluzione**: Sostituisci con `isset()`.

---

## Riferimenti

- [Eloquent Magic Attributes](https://laravel.com/docs/eloquent#accessors-and-mutators)
- [PHP isset() Documentation](https://www.php.net/manual/en/function.isset.php)
- [PHP property_exists() Limitations](https://www.php.net/manual/en/function.property-exists.php)

---

**Filosofia**: "Gli attributi Eloquent sono magia, isset() è la chiave" - portabilità, type safety, zero compromessi.
