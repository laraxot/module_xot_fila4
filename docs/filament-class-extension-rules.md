<<<<<<< HEAD
# Filament Class Extension Rules - Laraxot Framework

**Principio Fondamentale**: Mai estendere classi Filament direttamente - sempre usare classi XotBase

**Data**: 2 Dicembre 2025  
**Status**: Regola Assoluta e Inviolabile

=======
# Filament Class Extension Rules 

**Principio Fondamentale**: Mai estendere classi Filament direttamente - sempre usare classi XotBase

>>>>>>> laraxot/develop
---

## 🚨 Regola Assoluta

<<<<<<< HEAD
### NON estendere MAI classi Filament direttamente

Sempre estendere classi astratte con prefisso `XotBase` fornite dal modulo Xot.

**Motivazione Business**:

- **Centralizzazione**: Logica comune in un punto
- **Aggiornabilità**: Fix propagano automaticamente a tutti i moduli
- **Consistenza**: Comportamento uniforme in tutto il sistema
- **DRY**: Zero duplicazione di codice base

---

## 📋 Mapping Completo Classi Filament → XotBase
=======
**NON estendere MAI classi Filament direttamente**

Sempre estendere classi astratte con prefisso `XotBase` che rispettano il vecchio percorso.

---

## 📋 Mapping Classi Filament → XotBase
>>>>>>> laraxot/develop

### Resources Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBasePage` |
<<<<<<< HEAD
| `Filament\Resources\Pages\ViewRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord` |
=======
| `Filament\Actions\BulkAction` | `Modules\Xot\Filament\Actions\XotBaseBulkAction` |
| `Filament\Pages\Dashboard` | `Modules\Xot\Filament\Pages\XotBaseDashboard` |
| `Filament\Schemas\Components\Section` | `Modules\Xot\Filament\Schemas\Components\XotBaseSection` |
| `Filament\Forms\Components\Select` | `Modules\Xot\Filament\Forms\Components\XotBaseSelect` |
| `Filament\Forms\Components\CheckboxList` | `Modules\Xot\Filament\Forms\Components\XotBaseCheckboxList` |
>>>>>>> laraxot/develop

### Auth Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
<<<<<<< HEAD
| `Filament\Pages\Auth\Login` | `Modules\Xot\Filament\Pages\Auth\XotBaseLogin` |
| `Filament\Pages\Auth\Register` | `Modules\Xot\Filament\Pages\Auth\XotBaseRegister` |
| `Filament\Pages\Auth\EditProfile` | `Modules\Xot\Filament\Pages\Auth\XotBaseEditProfile` |
| `Filament\Pages\Auth\PasswordReset\RequestPasswordReset` | `Modules\Xot\Filament\Pages\Auth\XotBaseRequestPasswordReset` |
=======
| `Filament\Auth\Pages\Login` | `Modules\Xot\Filament\Pages\Auth\XotBaseLogin` |
| `Filament\Auth\Pages\Register` | `Modules\Xot\Filament\Pages\Auth\XotBaseRegister` |
| `Filament\Auth\Pages\EditProfile` | `Modules\Xot\Filament\Pages\Auth\XotBaseEditProfile` |

### Actions

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Actions\ActionGroup` | `Modules\Xot\Filament\Actions\XotBaseActionGroup` |
>>>>>>> laraxot/develop

### Resources

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Resources\Resource` | `Modules\Xot\Filament\Resources\XotBaseResource` |

### Standalone Pages

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Filament\Pages\Page` | `Modules\Xot\Filament\Pages\XotBasePage` |
<<<<<<< HEAD
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
=======
>>>>>>> laraxot/develop

### Service Providers

| ❌ SBAGLIATO | ✅ CORRETTO |
|-------------|------------|
| `Illuminate\Support\ServiceProvider` | `Modules\Xot\Providers\XotBaseServiceProvider` |
<<<<<<< HEAD
| `Filament\Panel` | Usa `XotBaseServiceProvider` con metodi helper |
=======
>>>>>>> laraxot/develop

---

## ⚠️ Regole Specifiche per XotBaseResource

<<<<<<< HEAD
### 1. getTableColumns() NON Necessario
=======
### Metodo getTableColumns NON Richiesto

Chi estende `XotBaseResource` **NON deve avere** il metodo `getTableColumns()`.
>>>>>>> laraxot/develop

```php
// ❌ SBAGLIATO
class UserResource extends XotBaseResource
{
    public static function getTableColumns(): array
    {
<<<<<<< HEAD
        return [
            TextColumn::make('name'),
            TextColumn::make('email'),
        ];
=======
        return [/* ... */];
>>>>>>> laraxot/develop
    }
}

// ✅ CORRETTO
class UserResource extends XotBaseResource
{
<<<<<<< HEAD
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

### 4. Tipizzazione Metodi `get*` - Array con Chiavi String

**REGOLA CRITICA**: I metodi Filament `getTableColumns`, `getFormSchema`, `getTableBulkActions`, `getTableActions`, `getTableFilters`, `getHeaderActions` **devono sempre restituire array con chiavi string**.

**Regola Assoluta**:
- ✅ **SEMPRE** `array<string, T>` per tutti questi metodi
- ❌ **MAI** `array<int, T>` o array numerici
- ❌ **MAI** `array<mixed, mixed>` salvo ultima spiaggia documentata

**Motivazione**: Filament si aspetta array associativi con chiavi string per identificare univocamente componenti/azioni.

Esempi:

```php
// ✅ CORRETTO - getFormSchema con chiavi string
/** @return array<string, \Filament\Schemas\Components\Component> */
public static function getFormSchema(): array
{
    return [
        'name_field' => TextInput::make('name'),
        'email_field' => EmailInput::make('email'),
    ];
}

// ✅ CORRETTO - getHeaderActions con chiavi string
/** @return array<string, \Filament\Actions\Action> */
protected function getHeaderActions(): array
{
    return [
        'create' => CreateAction::make(),
        'delete' => DeleteAction::make(),
    ];
}

// ✅ CORRETTO - getTableActions con chiavi string
/** @return array<string, \Filament\Actions\Action> */
public function getTableActions(): array
{
    return [
        'view' => ViewAction::make(),
        'edit' => EditAction::make(),
        'delete' => DeleteAction::make(),
    ];
}

// ✅ CORRETTO - getTableColumns con chiavi string
/** @return array<string, \Filament\Tables\Columns\Column> */
public function getTableColumns(): array
{
    return [
        'name' => TextColumn::make('name'),
        'email' => TextColumn::make('email'),
    ];
}

// ❌ SBAGLIATO - Array numerico
public function getTableActions(): array
{
    return [
        ViewAction::make(),  // Chiave numerica 0
        EditAction::make(),  // Chiave numerica 1
    ];
}

// ✅ CORRETTO - Array associativo con chiavi string
public function getTableActions(): array
{
    return [
        'view' => ViewAction::make(),
        'edit' => EditAction::make(),
    ];
}
```
=======
    // getTableColumns() gestito automaticamente da XotBaseResource
}
```

### Metodi Standard NON Richiesti

Non implementare questi metodi se restituiscono solo valori standard:

- `getPages()` - se contiene solo route standard
- `getRelations()` - se restituisce array vuoto
- `getTableActions()` - se contiene solo azioni standard
- `getTableBulkActions()` - se contiene solo azioni standard
>>>>>>> laraxot/develop

---

## ⚠️ Regole Specifiche per XotBasePage

<<<<<<< HEAD
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
=======
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
>>>>>>> laraxot/develop
}
```

---

## 🔧 Pattern per Modelli

<<<<<<< HEAD
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
=======
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
>>>>>>> laraxot/develop
}
```

---

<<<<<<< HEAD
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

```text
modulo::risorsa.categoria.campo.tipo

Esempi:

- user::user.fields.name.label
- user::user.fields.name.placeholder
- user::user.fields.name.help
- user::user.actions.create.label
- user::user.messages.created.success

---

## 🚫 Eloquent: NO `property_exists()` (attributi magici)

**Regola Critica**: **NON usare MAI `property_exists()`** sui modelli Eloquent perché gli attributi/relazioni sono gestiti via magic methods (`__get()`, `__isset()`, `__set()`).

**Problema**: `property_exists()` non funziona con magic attributes perché controlla solo le proprietà reali della classe, non quelle dinamiche gestite da Eloquent.

**Soluzione Corretta**:
- ✅ Usare `isset($model->attr)` per rispettare `__isset()` di Eloquent
- ✅ Oppure `$model->getAttribute('attr')` con controllo `!== null`
- ✅ Oppure usare `SafeEloquentCastAction` per accesso sicuro

```php
// ❌ SBAGLIATO - property_exists non funziona con magic attributes
if (property_exists($model, 'attribute')) {
    $value = $model->attribute;
}

// ✅ CORRETTO - isset() rispetta magic methods
if (isset($model->attribute)) {
    $value = $model->attribute;
}

// ✅ CORRETTO - getAttribute() gestisce magic attributes
$value = $model->getAttribute('attribute');
if ($value !== null) {
    // Usa $value
}

// ✅ CORRETTO - SafeEloquentCastAction
use Modules\Xot\Actions\Cast\SafeEloquentCastAction;

if (app(SafeEloquentCastAction::class)->hasAttribute($model, 'attribute')) {
    $value = app(SafeEloquentCastAction::class)->getStringAttribute($model, 'attribute');
}
```

**Guida completa**: `Modules/Xot/docs/architectural_rules/no_property_exists_on_models.md`

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
=======
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

// ✅ CORRETTO
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
>>>>>>> laraxot/develop
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci nome',
<<<<<<< HEAD
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
=======
            'tooltip' => 'Il nome dell\'utente',
>>>>>>> laraxot/develop
        ],
    ],
];
```

<<<<<<< HEAD
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

=======
---

## 🔄 Actions invece di Services

### Usa Spatie Queueable Actions

```php
// ❌ SBAGLIATO - Service tradizionale
>>>>>>> laraxot/develop
class UserService
{
    public function createUser(array $data): User
    {
<<<<<<< HEAD
        $user = User::create($data);
        $this->sendWelcomeEmail($user);
        return $user;
    }
    
    private function sendWelcomeEmail(User $user): void
=======
        // ...
    }
}

// ✅ CORRETTO - Queueable Action
use Spatie\QueueableAction\QueueableAction;

class CreateUserAction
{
    use QueueableAction;

    public function execute(array $data): User
>>>>>>> laraxot/develop
    {
        // ...
    }
}

// Uso
<<<<<<< HEAD
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
=======
app(CreateUserAction::class)->execute($data);
>>>>>>> laraxot/develop
```

---

<<<<<<< HEAD
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

- [Filament Array Keys Rule](./filament-array-keys-rule.md) ⭐ NUOVO - Regola array con chiavi string
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
=======
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

## 🔗 Collegamenti Utili

- [XotBaseResource Documentation](architectural_rules/filament_extension_rules.md)
- [Base Classes Documentation](../consolidated/base-classes.md)
- [Spatie Queueable Actions](https://github.com/spatie/laravel-queueable-action)
- [Filament v4 Documentation](https://filamentphp.com/docs/4.x)
>>>>>>> laraxot/develop
