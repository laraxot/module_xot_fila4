# Filament Class Extension Rules - Laraxot Framework

**Principio Fondamentale**: Mai estendere classi Filament direttamente - sempre usare classi XotBase

---

## 🚨 Regola Assoluta

**NON estendere MAI classi Filament direttamente**

Sempre estendere classi astratte con prefisso `XotBase` fornite dal modulo Xot.

**Motivazione Business**:
- **Centralizzazione**: Logica comune in un punto
- **Aggiornabilità**: Fix propagano automaticamente a tutti i moduli
- **Consistenza**: Comportamento uniforme in tutto il sistema
- **DRY**: Zero duplicazione di codice base

---

## 📋 Mapping Classi Filament → XotBase

### Resources Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\ViewRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBasePage` |
| `Filament\Pages\Dashboard` | `Modules\Xot\Filament\Pages\XotBaseDashboard` |
| `Filament\Schemas\Components\Section` | `Modules\Xot\Filament\Schemas\Components\XotBaseSection` |

### Auth Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Auth\Pages\Login` | `Modules\Xot\Filament\Pages\Auth\XotBaseLogin` |
| `Filament\Auth\Pages\Register` | `Modules\Xot\Filament\Pages\Auth\XotBaseRegister` |
| `Filament\Auth\Pages\EditProfile` | `Modules\Xot\Filament\Pages\Auth\XotBaseEditProfile` |
| `Filament\Pages\Auth\PasswordReset\RequestPasswordReset` | `Modules\Xot\Filament\Pages\Auth\XotBaseRequestPasswordReset` |

### Actions

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Actions\Action` | `Modules\Xot\Filament\Actions\XotBaseAction` |
| `Filament\Actions\ActionGroup` | `Modules\Xot\Filament\Actions\XotBaseActionGroup` |

### Widgets

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Widgets\Widget` | `Modules\Xot\Filament\Widgets\XotBaseWidget` |
| `Filament\Widgets\TableWidget` | `Modules\Xot\Filament\Widgets\XotBaseTableWidget` |
| `Filament\Widgets\ChartWidget` | `Modules\Xot\Filament\Widgets\XotBaseChartWidget` |
| `Filament\Widgets\StatsOverviewWidget` | `Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget` |

### Relation Managers

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\RelationManagers\RelationManager` | `Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager` |

### Service Providers

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Illuminate\Support\ServiceProvider` | `Modules\Xot\Providers\XotBaseServiceProvider` |
| `Filament\Panel` | Usa `XotBaseServiceProvider` con metodi helper |

---

## ⚠️ Regole Specifiche per XotBaseResource

### 1. getTableColumns() NON Necessario

Chi estende `XotBaseResource` **NON deve avere** il metodo `getTableColumns()`.

```php
// ❌ SBAGLIATO
class UserResource extends XotBaseResource
{
    public static function getTableColumns(): array
    {
        return [
            TextColumn::make('name'),
            TextColumn::make('email'),
        ];
    }
}

// ✅ CORRETTO
class UserResource extends XotBaseResource
{
    // XotBaseResource genera automaticamente colonne da model fillable/casts
}
```

**Eccezione**: Implementa `getTableColumns()` SOLO se hai colonne custom non standard.

### 2. getTableActions() con Chiavi String

Se implementi `getTableActions()`, usa **array associativo con chiavi string**:

```php
// ❌ SBAGLIATO - array<int, Action>
public static function getTableActions(): array
{
    return [
        EditAction::make(),
        DeleteAction::make(),
    ];
}

// ✅ CORRETTO - array<string, Action>
public static function getTableActions(): array
{
    return [
        'edit' => EditAction::make(),
        'delete' => DeleteAction::make(),
        ...parent::getTableActions(), // Include azioni base
    ];
}
```

### 3. Metodi Standard - Rimuovi se Vuoti

Non implementare questi metodi se restituiscono solo valori standard:

- `getPages()` - se contiene solo route standard
- `getRelations()` - se restituisce array vuoto
- `getTableActions()` - se contiene solo azioni standard
- `getTableBulkActions()` - se contiene solo azioni standard

---

## ⚠️ Regole Specifiche per XotBasePage

### Proprietà Auto-Gestite

Chi estende `XotBasePage` eredita automaticamente:

```php
// Queste proprietà sono gestite dalla classe base
protected static ?string $navigationIcon = null;
protected static ?string $title = null;
protected static ?string $navigationLabel = null;
protected static ?string $navigationGroup = null;
protected static ?int $navigationSort = null;
```

**NON ridichiarare** queste proprietà a meno che non sia necessario override esplicito.

```php
// ❌ SBAGLIATO - Ridichiarazione inutile
class MyPage extends XotBasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $title = 'My Page';
}

// ✅ CORRETTO - Solo se override necessario
class MyPage extends XotBasePage
{
    // Se vuoi usare valori default, non dichiarare nulla
    // Oppure override solo ciò che serve
    protected static ?string $navigationIcon = 'heroicon-o-custom-icon';
}
```

---

## 🔧 Pattern per Modelli

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

### Property Access su Modelli

**REGOLA CRITICA**: `property_exists()` NON funziona con magic attributes Eloquent.

Vedi: [Eloquent Magic Properties Rule](./eloquent-magic-properties-rule.md)

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

use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\User\Models\User;
use Filament\Forms\Components\TextInput;

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
            TextInput::make('email')->email()->required(),
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

---

**Filosofia**: DRY + KISS - Non duplicare, non complicare, usa sempre le classi base.
