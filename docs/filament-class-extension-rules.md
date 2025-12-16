# Filament Class Extension Rules - Laraxot Framework

**Principio Fondamentale**: Mai estendere classi Filament direttamente - sempre usare classi XotBase

**Data**: 2 Dicembre 2025  
**Status**: Regola Assoluta e Inviolabile

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

## 📋 Mapping Completo Classi Filament → XotBase

### Resources Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBasePage` |
| `Filament\Resources\Pages\ViewRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord` |

### Auth Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Pages\Auth\Login` | `Modules\Xot\Filament\Pages\Auth\XotBaseLogin` |
| `Filament\Pages\Auth\Register` | `Modules\Xot\Filament\Pages\Auth\XotBaseRegister` |
| `Filament\Pages\Auth\EditProfile` | `Modules\Xot\Filament\Pages\Auth\XotBaseEditProfile` |
| `Filament\Pages\Auth\PasswordReset\RequestPasswordReset` | `Modules\Xot\Filament\Pages\Auth\XotBaseRequestPasswordReset` |

### Resources

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Resource` | `Modules\Xot\Filament\Resources\XotBaseResource` |

### Standalone Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Pages\Page` | `Modules\Xot\Filament\Pages\XotBasePage` |
| `Filament\Pages\Dashboard` | `Modules\Xot\Filament\Pages\XotBaseDashboard` |

### Widgets

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Widgets\Widget` | `Modules\Xot\Filament\Widgets\XotBaseWidget` |
| `Filament\Widgets\TableWidget` | `Modules\Xot\Filament\Widgets\XotBaseTableWidget` |
| `Filament\Widgets\ChartWidget` | `Modules\Xot\Filament\Widgets\XotBaseChartWidget` |
| `Filament\Widgets\StatsOverviewWidget` | `Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget` |

### Actions

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Actions\Action` | `Modules\Xot\Filament\Actions\XotBaseAction` |
| `Filament\Actions\ActionGroup` | `Modules\Xot\Filament\Actions\XotBaseActionGroup` |

### Schemas Components

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Schemas\Components\Section` | `Modules\Xot\Filament\Schemas\Components\XotBaseSection` |

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

```php
// ❌ SBAGLIATO - Metodo che restituisce solo valori default
public static function getPages(): array
{
    return [
        'index' => Pages\ListUsers::route('/'),
        'create' => Pages\CreateUser::route('/create'),
        'edit' => Pages\EditUser::route('/{record}/edit'),
    ];
}

// ✅ CORRETTO - Rimuovi completamente, XotBaseResource gestisce
// (Rimuovi il metodo getPages() se contiene solo route standard)
```

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

## 🎯 Pattern per Widgets

### Estensione Base Widgets

```php
// ✅ CORRETTO - Sempre XotBase
use Modules\Xot\Filament\Widgets\XotBaseTableWidget;

class MyTableWidget extends XotBaseTableWidget
{
    protected static ?int $sort = 1;

    protected function getTableQuery(): Builder
    {
        return MyModel::query();
    }
}
```

### Widget con InteractsWithPageFilters

```php
use Modules\Xot\Filament\Widgets\XotBaseTableWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Livewire\Attributes\On;

class FilteredWidget extends XotBaseTableWidget
{
    use InteractsWithPageFilters;

    #[On('filterUpdate')]
    public function updateFilters(array $_filters): void
    {
        $this->resetTable();
    }

    protected function getTableQuery(): Builder
    {
        $filters = $this->pageFilters ?? [];
        $query = MyModel::query();
        
        // Apply filters
        if (isset($filters['date'])) {
            $query->whereDate('created_at', $filters['date']);
        }
        
        return $query;
    }
}
```

---

## 🔧 Pattern per Modelli

### Estensione Corretta

```php
// ✅ PATTERN 1 - Estendi BaseModel del modulo
namespace Modules\User\Models;

use Modules\User\Models\BaseModel;

class User extends BaseModel
{
    // ...
}
```

```php
// ✅ PATTERN 2 - Estendi modello di package esterno
namespace Modules\User\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    // Customizzazioni specifiche progetto
}
```

### Non Replicare Trait

```php
// ❌ SBAGLIATO - Trait già in BaseModel
class User extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    // BaseModel già usa questi trait!
}

// ✅ CORRETTO
class User extends BaseModel
{
    // Trait ereditati da BaseModel
}
```

---

## 🚫 Deprecazioni Filament v4

### BadgeColumn → TextColumn::badge()

```php
// ❌ DEPRECATO Filament v3
use Filament\Tables\Columns\BadgeColumn;

BadgeColumn::make('status')
    ->colors([
        'success' => 'active',
        'danger' => 'inactive',
    ]);

// ✅ CORRETTO Filament v4
use Filament\Tables\Columns\TextColumn;

TextColumn::make('status')
    ->badge()
    ->color(fn (string $state): string => match ($state) {
        'active' => 'success',
        'inactive' => 'danger',
        default => 'gray',
    });
```

### IconColumn → TextColumn::icon()

```php
// ❌ DEPRECATO Filament v3
use Filament\Tables\Columns\IconColumn;

IconColumn::make('is_active')
    ->boolean();

// ✅ CORRETTO Filament v4
use Filament\Tables\Columns\TextColumn;

TextColumn::make('is_active')
    ->icon(fn (bool $state): string => $state ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
    ->color(fn (bool $state): string => $state ? 'success' : 'danger');
```

---

## 🌐 Traduzioni - Sistema LangServiceProvider

### Struttura Chiavi Traduzione

```
modulo::risorsa.categoria.campo.tipo

Esempi:
- user::user.fields.name.label
- user::user.fields.name.placeholder
- user::user.fields.name.help
- user::user.actions.create.label
- user::user.messages.created.success
```

### File Traduzione Completo

```php
// Modules/User/lang/it/user.php
<?php

declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Utente',
        'plural' => 'Utenti',
        'group' => [
            'name' => 'Gestione',
        ],
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci nome',
            'help' => 'Nome completo dell\'utente',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci email',
            'help' => 'Indirizzo email valido',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Utente',
            'success' => 'Utente creato con successo',
            'error' => 'Errore durante la creazione',
        ],
    ],
];
```

### NO Hardcoded Labels

```php
// ❌ VIETATO
TextInput::make('name')->label('Nome')
Select::make('role')->placeholder('Seleziona ruolo')
EditAction::make()->modalHeading('Modifica utente')

// ✅ CORRETTO - Traduzioni automatiche
TextInput::make('name')
Select::make('role')
EditAction::make()
```

---

## 🔄 Actions Pattern (Spatie QueueableAction)

### Invece di Services

```php
// ❌ ANTI-PATTERN - Service tradizionale
namespace Modules\User\Services;

class UserService
{
    public function createUser(array $data): User
    {
        $user = User::create($data);
        $this->sendWelcomeEmail($user);
        return $user;
    }
    
    private function sendWelcomeEmail(User $user): void
    {
        // ...
    }
}

// Uso
$service = new UserService();
$user = $service->createUser($data);
```

```php
// ✅ PATTERN CORRETTO - Queueable Action
namespace Modules\User\Actions;

use Spatie\QueueableAction\QueueableAction;
use Modules\User\Models\User;

class CreateUserAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(array $data): User
    {
        $user = User::create($data);
        
        // Chain other actions
        app(SendWelcomeEmailAction::class)->execute($user);
        
        return $user;
    }
}

// Uso
$user = app(CreateUserAction::class)->execute($data);

// Oppure in coda
CreateUserAction::dispatch($data);
```

**Vantaggi**:
- **Queueable**: Può essere eseguita in coda automaticamente
- **Testable**: Facile da testare isolatamente
- **Composable**: Actions possono chiamare altre Actions
- **Single Responsibility**: Ogni Action fa UNA cosa

---

## 📚 Esempi Completi

### Resource Minimale

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Modules\User\Models\User;
use Modules\Xot\Filament\Resources\XotBaseResource;

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

    // ✅ NO getTableColumns() - auto-generato
    // ✅ NO getPages() - route standard
    // ✅ NO getTableActions() - azioni standard
}
```

### Page Minimale

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;

class SettingsPage extends XotBasePage
{
    protected static string $view = 'user::filament.pages.settings';

    // ✅ NO $navigationIcon - auto-gestito
    // ✅ NO $title - auto-gestito
    // ✅ NO $navigationLabel - auto-gestito
}
```

### Widget Minimale

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Modules\User\Models\User;
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsWidget extends XotBaseStatsOverviewWidget
{
    protected static ?int $sort = 1;

    /**
     * @return array<int, Stat>
     */
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('All registered users')
                ->color('success'),
        ];
    }
}
```

---

## ⚠️ Cosa NON Fare

### 1. Non Replicare Metodi Base

```php
// ❌ SBAGLIATO - Metodo identico a XotBaseResource
class UserResource extends XotBaseResource
{
    public static function getNavigationIcon(): ?string
    {
        return static::$navigationIcon;
    }
}

// ✅ CORRETTO - Rimuovi, è già in XotBaseResource
class UserResource extends XotBaseResource
{
    // Metodo ereditato
}
```

### 2. Non Dichiarare Proprietà Auto-Gestite

```php
// ❌ SBAGLIATO
class DashboardPage extends XotBasePage
{
    protected static ?string $navigationIcon = null;
    protected static ?string $title = null;
}

// ✅ CORRETTO
class DashboardPage extends XotBasePage
{
    // Proprietà ereditate e auto-gestite
}
```

### 3. Non Usare Hardcoded Strings

```php
// ❌ SBAGLIATO
TextInput::make('name')->label('Nome utente')

// ✅ CORRETTO
TextInput::make('name')
// Label da: user::user.fields.name.label
```

---

## 🎯 Checklist Pre-Implementazione

Prima di creare una nuova classe Filament:

- [ ] Ho identificato la classe XotBase corretta da estendere?
- [ ] NON sto estendendo direttamente classi Filament?
- [ ] NON sto replicando metodi della classe base?
- [ ] Sto usando traduzioni automatiche (NO ->label())?
- [ ] Ho verificato se il metodo è già gestito dalla base?
- [ ] Ho rimosso proprietà auto-gestite?
- [ ] Ho usato array associativi per actions?

---

## 🔍 Verifica Violazioni

### Script di Verifica

```bash
# Trova estensioni dirette Filament (VIETATE)
grep -r "extends.*Filament\\\\" laravel/Modules/*/app --include="*.php"

# Trova BadgeColumn deprecato
grep -r "BadgeColumn" laravel/Modules --include="*.php"

# Trova protected $casts deprecato
grep -r "protected \$casts" laravel/Modules/*/app/Models --include="*.php"

# Trova ->label() hardcoded
grep -r "->label(" laravel/Modules --include="*.php"
```

---

## 📖 Documentazione Correlata

- [XotBase Classes Overview](./xotbase-classes-overview.md)
- [Filament Best Practices](./filament-best-practices.md)
- [Translation System](./translation-system.md)
- [Actions Pattern](./actions-pattern.md)
- [Regole Critiche Progetto](./regole-critiche-progetto.md)

---

## 🏆 Best Practices Summary

1. **Sempre XotBase**: Mai Filament diretto
2. **Minimal Override**: Solo ciò che è diverso dalla base
3. **Traduzioni File**: Mai hardcoded strings
4. **Actions Pattern**: Spatie QueueableAction invece di Services
5. **Array Associativi**: Chiavi string per actions/columns
6. **Deprecazioni**: Migra BadgeColumn, $casts, IconColumn
7. **Type Safety**: PHPStan Level 10 sempre
8. **Complexity**: Metodi < 10 complexity, < 20 righe

---

**Filosofia**: "Estendi, non duplicare. Usa, non reinventa. Centralizza, non sparpagli."

**Mantra**: DRY + KISS + XotBase = Codice Pulito e Manutenibile

---

**Ultima Verifica**: 2 Dicembre 2025  
**Compliance**: Obbligatoria per tutti i moduli  
**Enforcement**: Code review + PHPStan Level 10

