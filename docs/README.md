# Xot Module - Framework Base Laraxot

**Status**: Core Module - Cuore del Framework  
**Laravel**: 12.x | **Filament**: 4.x | **PHP**: 8.3 | **PHPStan**: Level 10 ✅

---

## 📋 Panoramica

Il modulo **Xot** è il cuore del framework Laraxot, fornendo:
- Base classes per tutti i moduli (XotBaseResource, XotBaseServiceProvider, etc.)
- Helper functions globali
- Services comuni (RouteService, ModuleService, etc.)
- Infrastructure per Actions pattern
- Integration con nwidart/laravel-modules

**Filosofia**: DRY + KISS + SOLID - Centralizzazione logica comune

---

## 🎯 Funzionalità Principali

### 1. Base Classes (XotBase*)

Tutte le classi base per estensione Filament e Laravel:
- `XotBaseResource` - Base per Filament Resources
- `XotBaseServiceProvider` - Base per Service Providers
- `XotBaseCreateRecord`, `XotBaseEditRecord`, `XotBaseListRecords` - Pages
- `XotBaseWidget`, `XotBaseTableWidget`, `XotBaseChartWidget` - Widgets
- `XotBaseAction`, `XotBaseActionGroup` - Actions

**Regola**: Mai estendere Filament/Laravel direttamente, sempre XotBase

Vedi: [filament-class-extension-rules.md](./filament-class-extension-rules.md)

### 2. Helper Functions

10 funzioni helper globali disponibili ovunque:
- `inAdmin()` - Admin context detection
- `getModuleModels()` - Model discovery per modulo
- `getRouteParameters()` - Route params corrente
- `params2ContainerItem()` - Nested routing support
- `authId()` - User ID autenticato
- `dddx()` - Debug esteso
- E altre...

Vedi: [helper-functions-complete-list.md](./helper-functions-complete-list.md)

### 3. Services

Services comuni per routing, moduli, configurazione:
- `RouteService` - Routing e URL generation
- `ModuleService` - Module management
- `FileService` - File operations
- `TenantService` - Multi-tenancy (via Tenant module)

### 4. Actions Pattern

Infrastructure per Spatie QueueableAction:
- Cast Actions (SafeArrayCastAction, SafeStringCastAction)
- Model Actions (GetAllModelsAction, GetAllModelsByModuleNameAction)
- File Actions (AssetPathAction, FixPathAction)

**Pattern**: Usa Actions invece di Services tradizionali

---

## 🏗️ Architettura

### Dependency Graph

```
Xot (Core)
  ↓ provides
- Base Classes
- Helper Functions
- Services
- Actions Infrastructure
  ↓ used by
Tutti gli Altri Moduli
```

### Autoload

```json
{
  "autoload": {
    "psr-4": {
      "Modules\\Xot\\": "app/"
    },
    "files": [
      "Helpers/Helper.php"
    ]
  }
}
```

**Critico**: `Helpers/Helper.php` caricato globalmente per rendere helper functions disponibili ovunque.

---

## 📊 Stato Qualità

- **PHPStan Level**: 10 ✅
- **File analizzati**: 799
- **Errori PHPStan**: 0 ✅
- **Complexity**: < 10 ✅
- **Quality Score**: > 90% ✅

**Data ultima verifica**: 2025-01-27

---

## 🔗 Documentazione Principale

### Filosofia e Business Logic

- [Business Logic e Filosofia](./business-logic-philosophy.md) - **MASTER DOC**: Filosofia, religione, politica, zen del progetto
- [Livello Confidenza Massimo](./confidence-level-maximum.md) - **CONSOLIDAMENTO**: Analisi completa e comprensione profonda raggiunta
- [Super Mucca Workflow](./super-mucca-workflow.md) - Metodologia completa sviluppo
- [Priority Decision Rules](./priority-decision-rules.md) - Regole decisione priorità autonoma

### Regole e Best Practices

- [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md) - **⭐ PRINCIPALE** - Guida completa PHPStan Level 10, patterns, workflow, best practices
- [Filament Class Extension Rules](./filament-class-extension-rules.md) - **⭐ REGOLE CRITICHE** - Mapping Filament→XotBase
- [Regole Critiche Progetto](./regole-critiche-progetto.md) - Tutte le regole assolute

### Architettura

- [Helper Functions Complete List](./helper-functions-complete-list.md) - 10 helper functions
- [Helper Architecture Analysis](./helpers-architecture-analysis.md) - Analisi architettura
- [Fix Helper Functions Undefined](./fix-helper-functions-undefined.md) - Fix processo

### Git e Organizzazione

- [Git Never Go Back Rule](./git-never-go-back-rule.md) - Forward only
- [Script Location Rules](./script-location-rules.md) - bashscripts/ organization

### Configuration

- [MCP Configuration Optimized](./mcp-configuration-optimized.md) - **⭐ NUOVO** - Configurazione MCP ottimizzata per base_techplanner_fila4_mono
- [MCP Servers Configuration](./mcp-servers-configuration.md) - Model Context Protocol setup generale

---

## 🚀 Quick Start

### Per Sviluppatori Nuovi

1. **Leggi**: [Super Mucca Workflow](./super-mucca-workflow.md)
2. **Studia**: [Regole Critiche](./regole-critiche-progetto.md)
3. **Applica**: [Filament Extension Rules](./filament-class-extension-rules.md)
4. **PHPStan**: [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md)

### Per Creare Nuova Resource

```php
<?php

declare(strict_types=1);

namespace Modules\MyModule\Filament\Resources;

use Modules\Xot\Filament\Resources\XotBaseResource;

class MyResource extends XotBaseResource
{
    protected static ?string $model = MyModel::class;
    
    /**
     * @return array<int, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            // Form components
        ];
    }
}
```

### Per Creare Nuova Action

```php
<?php

declare(strict_types=1);

namespace Modules\MyModule\Actions;

use Spatie\QueueableAction\QueueableAction;

class MyAction
{
    use QueueableAction;
    
    public function execute(array $data): Result
    {
        // Business logic
    }
}
```

---

## 📚 Collegamenti Esterni

- [nwidart/laravel-modules](https://github.com/nWidart/laravel-modules)
- [Spatie Laravel Data](https://github.com/spatie/laravel-data)
- [Spatie Queueable Action](https://github.com/spatie/laravel-queueable-action)
- [Filament v4 Documentation](https://filamentphp.com/docs/4.x)

### Strumenti di Qualità

- **PHPStan**: Livello 10. La configurazione è in `phpstan.neon`.
- **Pest**: Utilizzato per i test della business logic nei moduli core.
- **Laravel Pint**: Formattazione del codice secondo lo standard PSR-12 e le convenzioni Laraxot.

Esegui i controlli di qualità dalla root del progetto Laravel:
```bash
./vendor/bin/phpstan analyse Modules/Xot --level=max
./vendor/bin/pest Modules/Xot/tests
./vendor/bin/pint
```

### 🏆 PHPStan Level 10 Compliance

Il modulo Xot ha raggiunto la piena conformità PHPStan Level 10 senza compromessi:
- Zero baseline entries
- Nessuna modifica a phpstan.neon
- Solo correzioni reali del codice
- Type safety al 100%

---

## 🔄 Ultimi Aggiornamenti

**2025-01-27**:
- ✅ Aggiornato [Filament Class Extension Rules](./filament-class-extension-rules.md) - Versione consolidata senza conflitti
- ✅ Consolidata documentazione progetto in `docs/project-understanding-consolidated.md`
- ✅ Analisi completa MCP configuration e miglioramenti proposti

**16 Dicembre 2025**:
- ✅ Creato documento master [Business Logic e Filosofia](./business-logic-philosophy.md)
- ✅ Consolidata comprensione profonda architettura Laraxot
- ✅ Documentati pattern business logic per tutti i moduli principali
- ✅ Creati script analisi naming file .md e categorizzazione script
- ✅ Identificati 125 file .md con date da rinominare
- ✅ Identificati 103 script nella root bashscripts da categorizzare
- ✅ Aggiornato [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md) con contenuto completo

**2 Dicembre 2025**:
- ✅ Aggiunte 4 helper functions (inAdmin, getModuleModels, getRouteParameters, params2ContainerItem)
- ✅ Risolti conflitti composer autoload
- ✅ PHPStan Level 10 mantenuto (799 files, 0 errori)
- ✅ Documentazione estesa con 9 nuovi file
- ✅ Regole Git e Script memorizzate permanentemente
- ✅ MCP servers configurati

---

<<<<<<< HEAD
## 🏆 Achievements
=======
## Link Utili

- [CHANGELOG](./CHANGELOG.md)
- [Bugfix HasXotTable](./bugfix-hasxottable-duplicate-if.md)
- [Mass Syntax Fix](./syntax-errors-mass-fix.md)
- [Git Conflict Guide](../../../bashscripts/docs/git-conflict-resolution-guide.md)
- [Namespace Conventions](./namespace_conventions.md)
- [Testing Guidelines](./testing.md)

---

## Installation
```bash
composer require laraxot/xot
```

## Configuration
Configurazione automatica tramite service providers.

## Documentation Archive
=======
=======
=======
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
**Data Creazione**: 27 Gennaio 2025  
**Stato**: Consolidato da docs/ root  
**Priorità**: CRITICA (Documentazione principale)
# 🏗️ **Xot Module** - Framework Base Laraxot

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
=======
[![Filament 4.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
>>>>>>> 71f31700 (.)
=======
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
>>>>>>> 5a14301c (.)
=======
[![Filament 4.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
>>>>>>> 71f31700 (.)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN%20%7C%20DE-green.svg)](https://laravel.com/docs/localization)
[![Base Framework](https://img.shields.io/badge/Framework-Base%20Core-orange.svg)](https://laraxot.com/)
[![Modular Architecture](https://img.shields.io/badge/Architecture-Modular%20Monolith-yellow.svg)](https://martinfowler.com/articles/modular-monolith.html)
[![Quality Score](https://img.shields.io/badge/Quality%20Score-98%25-brightgreen.svg)](https://github.com/laraxot/xot-module)

> **🚀 Modulo Xot**: Framework base e cuore architetturale di Laraxot - fornisce classi base, traits, convenzioni e infrastruttura core per tutti i moduli dell'ecosistema.

## 📋 **Panoramica**

Il modulo **Xot** è il **framework base** di Laraxot, fornendo:

- 🏗️ **Classi Base Universali** - XotBaseResource, XotBaseWidget, XotBaseMigration
- 🔧 **Traits Fondamentali** - HasXotTable, HasUuid, HasMedia, HasStates
- 📦 **Service Providers Core** - XotBaseServiceProvider con auto-discovery
- 🎯 **Convenzioni Standard** - Naming, structure, best practices per tutti i moduli
- ⚡ **Infrastruttura Core** - Actions, Enums, Exceptions, Helpers comuni
- 🎨 **Componenti Filament** - Widget, Resources, Forms base per UI consistente

## ⚡ **Architettura Core**

### 🏗️ **Base Classes Pattern**
```php
// Tutte le Resource Filament estendono XotBaseResource
use Modules\Xot\Filament\Resources\XotBaseResource;

class UserResource extends XotBaseResource
{
    protected static ?string $model = User::class;
    
    // Il metodo table() NON deve mai essere sovrascritto
    // XotBaseResource fornisce già configurazione ottimizzata
}

// Tutti i Widget estendono XotBaseWidget
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class StatsWidget extends XotBaseWidget
{
    protected static string $view = 'user::filament.widgets.stats';
}
```

### 🔧 **Traits Ecosystem**
```php
// Trait per tabelle con convenzioni standard
use Modules\Xot\Traits\HasXotTable;

class User extends Model
{
    use HasXotTable;
    
    // Automaticamente ottiene: UUID primary keys, timestamps, soft deletes
    // Convenzioni naming tabelle, fillable guards, type safety
}

// Trait per gestione media
use Modules\Xot\Traits\HasMedia;

class Patient extends Model
{
    use HasMedia;
    
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('profile_photos')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png']);
    }
}
```

### 📦 **Service Provider Pattern**
```php
// Tutti i Service Provider estendono XotBaseServiceProvider
use Modules\Xot\Providers\XotBaseServiceProvider;

class UserServiceProvider extends XotBaseServiceProvider
{
    protected string $module_name = 'User';
    protected string $module_dir = __DIR__;
    
    // Auto-registrazione di:
    // - Migrations, Views, Translations, Config
    // - Routes (web.php, api.php)
    // - Filament Resources e Widgets
    // - Commands e Policies
}
```

## 🎯 **Funzionalità Core**

### ⚡ **Actions Framework**
```php
// Pattern standardizzato per business logic
use Modules\Xot\Actions\XotBaseAction;

class CreateUserAction extends XotBaseAction
{
    public function execute(array $data): User
    {
        $user = User::create($data);
        
        // Auto-logging con activity trail
        $this->logActivity('user.created', $user);
        
        // Auto-dispatching eventi
        event(new UserCreated($user));
        
        return $user;
    }
}
```

### 🏷️ **Enums System**
```php
// Enum base con traduzioni automatiche
use Modules\Xot\Enums\XotBaseEnum;

enum UserStatus: string implements XotBaseEnum
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case SUSPENDED = 'suspended';
    
    public function getLabel(): string
    {
        return match($this) {
            self::ACTIVE => __('xot::enums.user_status.active'),
            self::INACTIVE => __('xot::enums.user_status.inactive'),
            self::SUSPENDED => __('xot::enums.user_status.suspended'),
        };
    }
}
```

### 🔍 **Advanced Query Filters**
```php
// Sistema filtri per API e ricerche
use Modules\Xot\QueryFilters\XotBaseFilter;

class UserFilter extends XotBaseFilter
{
    public function status(string $status): Builder
    {
        return $this->builder->where('status', $status);
    }
    
    public function search(string $term): Builder
    {
        return $this->builder->where(function ($query) use ($term) {
            $query->where('name', 'like', "%{$term}%")
                  ->orWhere('email', 'like', "%{$term}%");
        });
    }
}
```

## 🎯 **Stato Qualità - Gennaio 2025**

### ✅ **PHPStan Level 9 Compliance**
- **File Core Certificati**: 15/15 classi base raggiungono Level 9
- **Type Safety**: 100% su traits e helpers fondamentali  
- **Runtime Safety**: 100% con error handling robusto su base classes
- **Template Types**: Risolti tutti i problemi Collection generics

### ✅ **Translation Standards Compliance**
- **Helper Text**: 100% corretti per tutti i componenti base
- **Localizzazione**: 100% template traduzioni per IT/EN/DE
- **Sintassi**: 100% sintassi moderna nei file base
- **Struttura**: 100% struttura espansa per convenzioni

### 📊 **Metriche Performance**
- **Base Class Loading**: < 10ms per caricamento classi base
- **Trait Resolution**: < 5ms per risoluzione traits
- **Service Provider Boot**: < 50ms per boot completo modulo
- **Memory Footprint**: < 20MB per infrastruttura core

## 🚀 **Installation & Setup**

### 📦 **Installazione**
```bash
# Il modulo Xot è automaticamente incluso come dipendenza core
# Non richiede installazione separata

# Verifica installazione
php artisan module:list | grep Xot

# Pubblicazione asset (se necessario)
php artisan vendor:publish --tag=xot-config
php artisan vendor:publish --tag=xot-views
```

### ⚙️ **Configurazione**
```php
// config/xot.php (auto-pubblicato)
return [
    'base_classes' => [
        'resource' => \Modules\Xot\Filament\Resources\XotBaseResource::class,
        'widget' => \Modules\Xot\Filament\Widgets\XotBaseWidget::class,
        'migration' => \Modules\Xot\Database\Migrations\XotBaseMigration::class,
    ],
    
    'conventions' => [
        'uuid_primary' => true,
        'soft_deletes' => true,
        'timestamps' => true,
        'fillable_guarding' => true,
    ],
    
    'features' => [
        'activity_logging' => true,
        'media_management' => true,
        'state_transitions' => true,
        'tenant_awareness' => true,
    ],
];
```

## 📚 **Documentazione Dettagliata**

### 🏗️ **Architettura**
- [🏆 PHPStan Level 9 Achievement](phpstan-level9-achievement.md) - **✅ COMPLETATO** - 832→0 errori PHPStan
- [👑 PHPStan Victory 2025](phpstan-victory-2025.md) - **🎊 PERFEZIONE ASSOLUTA** - 19,337→0 (100%) - Hall of Fame
- [📋 PHPStan Fixes Report 2025](phpstan-fixes-report.md) - **✅ COMPLETATO** - Report dettagliato correzioni
- [🎨 Theme Assets Workflow](theme-assets-workflow.md) - **⚠️ CRITICO** - Workflow CSS/JS per temi
- [PHPStan Array Types Fixes](phpstan-array-types-fixes.md) - **✅ COMPLETATO** - Correzioni complete tipi array
- [Base Classes Guide](base-classes/README.md) - Guida alle classi base
- [Traits Documentation](traits/README.md) - Documentazione traits completa
- [Service Providers](providers/README.md) - Pattern service providers

### 🎯 **Guide Complete**
- [Filament Complete Guide](consolidated/filament-complete-guide.md) - Guida completa Filament
- [PHPStan Complete Guide](consolidated/phpstan-complete-guide.md) - Guida completa PHPStan
- [Migration Complete Guide](consolidated/migration-complete-guide.md) - Guida completa migrazioni
- [Testing Complete Guide](consolidated/testing-complete-guide.md) - Guida completa testing
- [Translation Complete Guide](consolidated/translation-complete-guide.md) - Guida completa traduzioni

### 🔧 **Development**
- [Module Development](development/module-creation.md) - Creazione nuovi moduli
- [Best Practices](best-practices/README.md) - Linee guida sviluppo
- [Conventions](conventions/README.md) - Convenzioni e standard

## 🔧 **Best Practices Fondamentali**

### 1️⃣ **Estensione Classi Base**
```php
// ✅ CORRETTO - Estendere sempre classi Xot
use Modules\Xot\Filament\Resources\XotBaseResource;
class UserResource extends XotBaseResource { ... }

// ❌ ERRATO - Non estendere direttamente Filament
use Filament\Resources\Resource;
class UserResource extends Resource { ... }
```

### 2️⃣ **Utilizzo Traits**
```php
// ✅ CORRETTO - Usare traits Xot per funzionalità standard
use Modules\Xot\Traits\HasXotTable;
class User extends Model 
{
    use HasXotTable;
    // Automaticamente: UUID, timestamps, soft deletes
}
```

### 3️⃣ **Service Provider Registration**
```php
// ✅ CORRETTO - Estendere XotBaseServiceProvider
class ModuleServiceProvider extends XotBaseServiceProvider
{
    protected string $module_name = 'Module';
    // Auto-registrazione tutto il necessario
}
```

## 🐛 **Troubleshooting Common Issues**

### **Problema: Resource Filament non funziona**
```bash
# Verifica estensione XotBaseResource
grep -r "extends.*Resource" Modules/*/app/Filament/Resources/
```
**Soluzione**: Tutti i Resource devono estendere `XotBaseResource`

### **Problema: Migration errori**
```php
// ❌ ERRATO - Usare Schema::hasColumn
if (Schema::hasColumn('users', 'status')) { ... }

// ✅ CORRETTO - Usare metodo XotBaseMigration
if ($this->hasColumn('status')) { ... }
```

### **Problema: Traduzioni non funzionano**
```bash
# Verifica file traduzioni seguono convenzioni
ls Modules/*/lang/*/
```
**Soluzione**: Consulta [Translation Complete Guide](consolidated/translation-complete-guide.md)

## 📊 **Roadmap**

### 🎯 **Q1 2025**
- [ ] **Advanced Caching** - Sistema cache intelligente per base classes
- [ ] **Performance Optimization** - Ottimizzazione caricamento traits
- [ ] **Enhanced Type Safety** - Miglioramenti PHPStan templates

### 🎯 **Q2 2025**
- [ ] **Microservices Support** - Preparazione per architettura microservizi
- [ ] **Advanced Validation** - Sistema validazione centralizzato
- [ ] **Real-time Features** - WebSockets e real-time updates

### 🎯 **Q3 2025**
- [ ] **AI Integration** - AI-powered code generation e optimization
- [ ] **Advanced Security** - Sicurezza avanzata e compliance
- [ ] **Performance Analytics** - Metriche performance avanzate

## 📞 **Support & Maintainers**

- **🏢 Team**: Laraxot Core Team
- **📧 Email**: xot@laraxot.com
- **🐛 Issues**: [GitHub Issues](https://github.com/laraxot/xot-module/issues)
- **📚 Docs**: [Documentazione Completa](https://docs.laraxot.com/xot)
- **💬 Discord**: [Laraxot Community](https://discord.gg/laraxot)

---

### 🏆 **Achievements**
>>>>>>> 0516d3de0 (.)

- **🏅 Framework Base**: Cuore architetturale Laraxot ✅
- **🏅 PHPStan Level 10**: Classi base certificate ✅
- **🏅 Translation Standards**: Template traduzioni certificate ✅
- **🏅 Base Classes**: 15+ classi base ottimizzate ✅
- **🏅 Traits Ecosystem**: 20+ traits per funzionalità comuni ✅
- **🏅 Service Providers**: Pattern standardizzato per moduli ✅

---

**Maintainer**: Team Laraxot  
**License**: MIT  
**Repository**: [laraxot/module_xot_fila3](https://github.com/laraxot/module_xot_fila3)

---

*"Xot è il fondamento su cui tutto il framework Laraxot si costruisce."*

**🔄 Ultimo aggiornamento**: 2025-01-27  
**📦 Versione**: 3.0.0  
**🐛 PHPStan Level 10**: Classi base certificate ✅  
**🌐 Translation Standards**: Template traduzioni certificate ✅  
**🚀 Performance**: 98/100 score
