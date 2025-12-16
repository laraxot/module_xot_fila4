# Filament Methods Return Types - Regole Critiche

**Ultimo aggiornamento**: 2025-12-01  
**Principio**: Tutti i metodi Filament restituiscono array con chiavi string

---

## ⚠️ REGOLA CRITICA - Return Types Filament Methods

**I seguenti metodi DEVONO SEMPRE restituire array con chiavi STRING (NON mixed, NON int):**

- `getTableColumns()` → `array<string, Column>` (chiavi string obbligatorie)
- `getFormSchema()` → `array<string, Component>` (chiavi string obbligatorie)
- `getTableBulkActions()` → `array<string, BulkAction>` (chiavi string obbligatorie)
- `getTableActions()` → `array<string, Action>` (chiavi string obbligatorie)
- `getTableFilters()` → `array<string, Filter>` (chiavi string obbligatorie)
- `getHeaderActions()` → `array<string, Action>` (chiavi string obbligatorie)

**REGOLA ASSOLUTA**: Le chiavi degli array DEVONO essere sempre string esplicite.

**MIXED come tipo valore è consentito SOLO come ultima spiaggia e deve essere documentato con PHPDoc.**

**❌ VIETATO**: Array con chiavi numeriche (`array<int, ...>`) o chiavi mixed (`array<mixed, ...>`).

---

## ❌ ERRATO

```php
// ❌ SBAGLIATO - array<int, Action> (chiavi numeriche)
public function getTableActions(): array
{
    return [
        EditAction::make(),
        DeleteAction::make(),
    ];
}

// ❌ SBAGLIATO - array<int, Column> (chiavi numeriche)
public function getTableColumns(): array
{
    return [
        TextColumn::make('id'),
        TextColumn::make('name'),
    ];
}
```

---

## ✅ CORRETTO

```php
// ✅ CORRETTO - array<string, Action> (chiavi string)
/**
 * @return array<string, Action>
 */
public function getTableActions(): array
{
    return [
        'edit' => EditAction::make(),
        'delete' => DeleteAction::make(),
    ];
}

// ✅ CORRETTO - array<string, Column> (chiavi string)
/**
 * @return array<string, Column>
 */
public function getTableColumns(): array
{
    return [
        'id' => TextColumn::make('id'),
        'name' => TextColumn::make('name'),
    ];
}

// ✅ CORRETTO - array<string, Component> (chiavi string)
/**
 * @return array<string, Component>
 */
public static function getFormSchema(): array
{
    return [
        'name' => TextInput::make('name')->required(),
        'email' => EmailInput::make('email')->required(),
    ];
}
```

---

## Pattern per Conversione

### Da Array Numerico a Associativo

```php
// ❌ PRIMA - Array numerico
public function getTableColumns(): array
{
    $columns = [];
    $columns[] = TextColumn::make('id');
    $columns[] = TextColumn::make('name');
    return $columns;
}

// ✅ DOPO - Array associativo con chiavi string
/**
 * @return array<string, Column>
 */
public function getTableColumns(): array
{
    return [
        'id' => TextColumn::make('id'),
        'name' => TextColumn::make('name'),
    ];
}
```

### Usando Nome Campo come Chiave

```php
// ✅ CORRETTO - Usa il nome del campo come chiave
/**
 * @return array<string, Column>
 */
public function getTableColumns(): array
{
    return [
        'id' => TextColumn::make('id')->sortable(),
        'name' => TextColumn::make('name')->searchable(),
        'email' => TextColumn::make('email')->searchable(),
        'created_at' => TextColumn::make('created_at')->dateTime(),
    ];
}
```

### Usando Nome Azione come Chiave

```php
// ✅ CORRETTO - Usa il nome dell'azione come chiave
/**
 * @return array<string, Action>
 */
public function getTableActions(): array
{
    return [
        'edit' => EditAction::make(),
        'delete' => DeleteAction::make()->requiresConfirmation(),
        'view' => ViewAction::make(),
    ];
}
```

---

## Verifica PHPStan

Dopo aver corretto, verifica con:
```bash
./vendor/bin/phpstan analyse --level=10 path/to/Resource.php
```

**Errori tipici se chiavi non sono string:**
```
Method getTableActions() should return array<string, Action> but returns array<int, Action>
Method getFormSchema() should return array<string, Component> but returns array<int|string, Component>
Method getTableColumns() should return array<string, Column> but returns array<mixed, Column>
```

**Soluzione**: Aggiungi SEMPRE chiavi string esplicite. Mai lasciare array numerici o con chiavi mixed.

## Esempio Completo con Mixed come Ultima Spiaggia

**SOLO se assolutamente necessario** (evitare quando possibile):

```php
/**
 * @return array<string, mixed>  // Mixed consentito SOLO se necessario, documentato
 */
public function getTableActions(): array
{
    // Se devi restituire tipi diversi, usa mixed ma documenta
    return [
        'edit' => EditAction::make(),
        'custom' => app(CustomAction::class), // Tipo non standard
    ];
}
```

**PREFERIBILE**: Usare tipi specifici quando possibile:

```php
/**
 * @return array<string, Action>  // Tipo specifico, preferito
 */
public function getTableActions(): array
{
    return [
        'edit' => EditAction::make(),
        'delete' => DeleteAction::make(),
    ];
}
```

---

## Riferimenti

- [XotBaseResource](../../app/Filament/Resources/XotBaseResource.php)
- [HasTableFunctions Interface](../../app/Interfaces/HasTableFunctions.php)
- [Filament v4 Tables Documentation](https://filamentphp.com/docs/4.x/tables/overview)

---

**Filosofia**: DRY + KISS - Chiavi string esplicite, type safety garantito, zero compromessi.

