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

**Data ultima verifica**: 2 Dicembre 2025

---

## 🔗 Documentazione Principale

### Regole e Best Practices

- [Super Mucca Workflow](./super-mucca-workflow.md) - Metodologia completa sviluppo
- [Filament Class Extension Rules](./filament-class-extension-rules.md) - Mapping Filament→XotBase
- [Regole Critiche Progetto](./regole-critiche-progetto.md) - Tutte le regole assolute

### Architettura

- [Helper Functions Complete List](./helper-functions-complete-list.md) - 10 helper functions
- [Helper Architecture Analysis](./helpers-architecture-analysis.md) - Analisi architettura
- [Fix Helper Functions Undefined](./fix-helper-functions-undefined.md) - Fix processo

### Git e Organizzazione

- [Git Never Go Back Rule](./git-never-go-back-rule.md) - Forward only
- [Script Location Rules](./script-location-rules.md) - bashscripts/ organization

### Configuration

- [MCP Servers Configuration](./mcp-servers-configuration.md) - Model Context Protocol setup

---

## 🚀 Quick Start

### Per Sviluppatori Nuovi

1. **Leggi**: [Super Mucca Workflow](./super-mucca-workflow.md)
2. **Studia**: [Regole Critiche](./regole-critiche-progetto.md)
3. **Applica**: [Filament Extension Rules](./filament-class-extension-rules.md)

### Per Creare Nuova Resource

```php
<?php

declare(strict_types=1);

namespace Modules\MyModule\Filament\Resources;

use Modules\Xot\Filament\Resources\XotBaseResource;

class MyResource extends XotBaseResource
{
    protected static ?string $model = MyModel::class;
    
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

---

## 🔄 Ultimi Aggiornamenti

**2 Dicembre 2025**:
- ✅ Aggiunte 4 helper functions (inAdmin, getModuleModels, getRouteParameters, params2ContainerItem)
- ✅ Risolti conflitti composer autoload
- ✅ PHPStan Level 10 mantenuto (799 files, 0 errori)
- ✅ Documentazione estesa con 9 nuovi file
- ✅ Regole Git e Script memorizzate permanentemente
- ✅ MCP servers configurati

---

**Maintainer**: Team Laraxot  
**License**: MIT  
**Repository**: [laraxot/module_xot_fila3](https://github.com/laraxot/module_xot_fila3)

---

*"Xot è il fondamento su cui tutto il framework Laraxot si costruisce."*

---

## Ultimi Aggiornamenti

**2025-12-16**:
- Documentazione aggiornata con nuovi pattern e best practices
- Vedi file specifici per dettagli

