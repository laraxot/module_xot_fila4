# Filament Class Extension Rules

**Principio Fondamentale**: Mai estendere classi Filament direttamente - sempre usare classi XotBase

---

## 🚨 Regola Assoluta

**NON estendere MAI classi Filament direttamente**

Sempre estendere classi astratte con prefisso `XotBase` che rispettano il vecchio percorso.

---

## 📋 Mapping Classi Filament → XotBase

### Resources Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBasePage` |
| `Filament\Actions\BulkAction` | `Modules\Xot\Filament\Actions\XotBaseBulkAction` |

### Resources

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Resource` | `Modules\Xot\Filament\Resources\XotBaseResource` |

### Standalone Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Pages\Page` | `Modules\Xot\Filament\Pages\XotBasePage` |

### Service Providers

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Illuminate\Support\ServiceProvider` | `Modules\Xot\Providers\XotBaseServiceProvider` |

---

## ⚠️ Regole Specifiche per XotBaseResource

### Metodo getTableColumns NON Richiesto

Chi estende `XotBaseResource` **NON deve avere** il metodo `getTableColumns()`.

```php
// ❌ SBAGLIATO
class UserResource extends XotBaseResource
{
    public static function getTableColumns(): array
    {
        return [/* ... */];
    }
}

// ✅ CORRETTO
class UserResource extends XotBaseResource
{
    // getTableColumns() gestito automaticamente da XotBaseResource
}
```

### Metodi Standard NON Richiesti

Non implementare questi metodi se restituiscono solo valori standard:

- `getPages()` - se contiene solo route standard
- `getRelations()` - se restituisce array vuoto
- `getTableActions()` - se contiene solo azioni standard
- `getTableBulkActions()` - se contiene solo azioni standard

---

## ⚠️ Regole Specifiche per XotBaseWidget

### Metodo mount() Richiesto - Chiamare initXotBaseWidget()

`XotBaseWidget` fornisce il metodo protetto `initXotBaseWidget()` che inizializza correttamente il form. Le classi figlie **devono** sovrascrivere `mount()` e chiamare questo metodo:

```php
// In XotBaseWidget (metodo protetto disponibile alle classi figlie)
protected function initXotBaseWidget(): void
{
    $this->data = $this->getFormFill();
    $this->form->fill($this->data);
}
```

I widget che estendono `XotBaseWidget` **devono** sovrascrivere `mount()` e chiamare `$this->initXotBaseWidget()`:

```php
// ✅ CORRETTO: Pattern base obbligatorio
class LoginWidget extends XotBaseWidget
{
    public function mount(): void
    {
        $this->initXotBaseWidget();
    }
}

// ✅ CORRETTO: Con logica aggiuntiva
class RegisterWidget extends XotBaseWidget
{
    public function mount(): void
    {
        $this->initXotBaseWidget();
        Log::debug('Registration form initialized', [
            'ip' => request()->ip(),
        ]);
    }
}

// ❌ SBAGLIATO: Non chiamare initXotBaseWidget()
class LoginWidget extends XotBaseWidget
{
    // mount() mancante - il form non viene inizializzato!
}
```

### Proprietà $data NON Richiesta

Chi estende `XotBaseWidget` **NON deve** ridichiarare la proprietà `$data`:

```php
// ❌ SBAGLIATO
class MyWidget extends XotBaseWidget
{
    public ?array $data = []; // ERRORE: già definito in XotBaseWidget
}

// ✅ CORRETTO
class MyWidget extends XotBaseWidget
{
    // $data è già definito in XotBaseWidget come public ?array $data = [];
}
```

### Schema con Chiavi Stringa Obbligatorio

Il metodo `getFormSchema()` deve restituire un array associativo con chiavi stringa:

```php
// ✅ CORRETTO
#[\Override]
public function getFormSchema(): array
{
    return [
        'email' => TextInput::make('email')->email()->required(),
        'password' => TextInput::make('password')->password()->required(),
    ];
}

// ❌ SBAGLIATO: Array numerico
public function getFormSchema(): array
{
    return [
        TextInput::make('email')->email()->required(),
        TextInput::make('password')->password()->required(),
    ];
}
```

## ⚠️ Regole Specifiche per XotBasePage

### Proprietà NON Consentite

Chi estende `Modules\Xot\Filament\Pages\XotBasePage` **NON deve avere**:

```php
// ❌ SBAGLIATO
class MyPage extends XotBasePage
{
    protected static ?string $navigationIcon;
    protected static ?string $title;
    protected static ?string $navigationLabel;
}

// ✅ CORRETTO
class MyPage extends XotBasePage
{
    // Queste proprietà sono gestite automaticamente dalla classe base
}
```

---

## 🔧 Pattern per Modelli

### Estensione BaseModel

```php
// ❌ SBAGLIATO
class Team extends Model implements TeamContract

// ✅ CORRETTO
class Team extends BaseTeam
```

### Estensione Modelli di Terze Parti

```php
// ❌ SBAGLIATO - laravel/Modules/User/app/Models/Permission.php
class Permission extends Model

// ✅ CORRETTO
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
```

### Non Replicare Metodi

**Regola**: Non replicare metodi della classe estesa se non ci sono differenze.

```php
// ❌ SBAGLIATO - Metodo identico alla classe base
class MyModel extends BaseModel
{
    public function getName(): string
    {
        return $this->name; // Identico alla classe base
    }
}

// ✅ CORRETTO - Rimuovi il metodo, usa quello della classe base
class MyModel extends BaseModel
{
    // Metodo getName() ereditato da BaseModel
}
```

---

## 🚫 Deprecazioni

### BadgeColumn Deprecato

```php
// ❌ DEPRECATO
use Filament\Tables\Columns\BadgeColumn;

BadgeColumn::make('status')

// ✅ CORRETTO - Usa TextColumn con badge()
use Filament\Tables\Columns\TextColumn;

TextColumn::make('status')->badge()
```

### protected $casts Deprecato (Laravel 11+)

```php
// ❌ DEPRECATO - Laravel 10 e precedenti
class User extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];
}

// ✅ CORRETTO - Laravel 11+ (metodo casts())
class User extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'is_admin' => 'boolean',
        ];
    }
}
```

**IMPORTANTE**: Se un modello ha ENTRAMBI `protected $casts` E `casts()`, rimuovi `protected $casts` (è deprecato e ignorato).

---

## 🌐 Gestione Traduzioni

### NON Usare Metodi Diretti

```php
// ❌ SBAGLIATO
TextInput::make('name')
    ->label('Nome')
    ->placeholder('Inserisci nome')
    ->tooltip('Il nome dell\'utente')

// ✅ CORRETTO - Usa file di traduzione
TextInput::make('name')
// Le traduzioni sono gestite automaticamente da LangServiceProvider
```

**Struttura file traduzione**:
```
Modules/{ModuleName}/lang/{locale}/{resource}.php

// Esempio: Modules/User/lang/it/user.php
return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci nome',
            'tooltip' => 'Il nome dell\'utente',
        ],
    ],
];
```

---

## 🔄 Actions invece di Services

### Usa Spatie Queueable Actions

```php
// ❌ SBAGLIATO - Service tradizionale
class UserService
{
    public function createUser(array $data): User
    {
        // ...
    }
}

// ✅ CORRETTO - Queueable Action
use Spatie\QueueableAction\QueueableAction;

class CreateUserAction
{
    use QueueableAction;

    public function execute(array $data): User
    {
        // ...
    }
}

// Uso
app(CreateUserAction::class)->execute($data);
```

**Risorsa**: https://github.com/spatie/laravel-queueable-action

---

## 📚 Esempi Completi

### Resource Completa

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\EmailInput;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\User\Models\User;

class UserResource extends XotBaseResource
{
    protected static ?string $model = User::class;

    /**
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required(),
            EmailInput::make('email')->required(),
        ];
    }

    // getTableColumns() NON necessario - gestito da XotBaseResource
    // getPages() NON necessario se standard
    // getTableActions() NON necessario se standard
}
```

### Page Completa

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;

class DashboardPage extends XotBasePage
{
    // $navigationIcon NON necessario
    // $title NON necessario
    // $navigationLabel NON necessario
    // Gestiti automaticamente da XotBasePage
}
```

---

## ✅ Checklist Pre-Implementazione

Prima di creare una nuova classe Filament:

- [ ] Ho verificato quale classe XotBase estendere?
- [ ] Non sto estendendo direttamente classi Filament?
- [ ] Non sto replicando metodi della classe base?
- [ ] Sto usando file di traduzione invece di ->label()?
- [ ] Sto usando Actions invece di Services?
- [ ] Ho rimosso BadgeColumn deprecato?
- [ ] Ho migrato da `protected $casts` a `casts()`?
- [ ] I metodi Filament restituiscono `array<string, T>` con chiavi string esplicite?
- [ ] Ho evitato `array<int, T>`, `array<int|string, T>`, `array<mixed, T>`?
- [ ] NON uso `property_exists()` con modelli Eloquent (uso `offsetExists()` o `hasAttribute()`)?

---

## 🔗 Collegamenti Utili

- [XotBaseResource Documentation](./xot-base-resource.md)
- [Base Classes Documentation](./base-classes.md)
- [Spatie Queueable Actions](https://github.com/spatie/laravel-queueable-action)
- [Filament v4 Documentation](https://filamentphp.com/docs/4.x)

---

## 💡 Ricorda Sempre

1. **Mai estendere Filament direttamente** - sempre XotBase
2. **Non replicare metodi** se identici alla classe base
3. **Usa traduzioni** invece di ->label() diretto
4. **Usa Actions** invece di Services
5. **Rispetta deprecazioni** (BadgeColumn, $casts)
6. **Aggiorna docs** dopo ogni implementazione

---

## 📝 Array Keys Rules

**REGOLA CRITICA**: Tutti i metodi Filament (`getFormSchema`, `getTableColumns`, `getTableActions`, `getTableBulkActions`, `getTableFilters`, `getHeaderActions`, `getInfolistSchema`) devono restituire `array<string, T>` con chiavi string esplicite, NON `array<int, T>` o `array<mixed, T>`.

Vedi: [Array Keys Filament Methods](./array-keys-filament-methods.md)

## 🔗 Collegamenti Utili

- [Array Keys Filament Methods](./array-keys-filament-methods.md) - Regole chiavi array
- [XotBaseResource Documentation](./consolidated/filament/resources/xot-base-resource.md)
- [Base Classes Documentation](./consolidated/base-classes.md)
- [Spatie Queueable Actions](https://github.com/spatie/laravel-queueable-action)
- [Filament v4 Documentation](https://filamentphp.com/docs/4.x)

---

**Filosofia**: DRY + KISS - Non duplicare, non complicare, usa sempre le classi base.

---

## Array Return Types

I metodi come `getTableColumns`, `getFormSchema`, `getTableBulkActions`, `getTableActions`, `getTableFilters`, `getHeaderActions` restituiscono sempre array le cui chiavi sono `array<string, mixed>`.
Usare `mixed` solo come ultima spiaggia.

## Eloquent Model Attributes

Non usare `property_exists()` coi modelli perché gli attributi dei modelli sono magici.
Usare invece `hasAttribute()`, `isFillable()` o `Schema::hasColumn()`.