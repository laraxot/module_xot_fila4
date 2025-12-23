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

## 🏆 Achievements

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
