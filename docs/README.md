<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 533c4fc00 (.)
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
<<<<<<< HEAD
=======
# 🏗️ **Xot Module** - Il Cuore del Framework Laraxot

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 4.x](https://img.shields.io/badge/Filament-4.x-blue.svg)](https://filamentphp.com/)
[![PHP 8.3](https://img.shields.io/badge/PHP-8.3-blueviolet.svg)](https://www.php.net/)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-Level%2010-brightgreen.svg)](https://phpstan.org/)
[![Modular Architecture](https://img.shields.io/badge/Architecture-Modular%20Monolith-yellow.svg)](https://martinfowler.com/articles/modular-monolith.html)
>>>>>>> 384ae3cdd (.)
=======
>>>>>>> 533c4fc00 (.)

- **PHPStan Level**: 10 ✅
- **File analizzati**: 799
- **Errori PHPStan**: 0 ✅
- **Complexity**: < 10 ✅
- **Quality Score**: > 90% ✅

<<<<<<< HEAD
**Data ultima verifica**: 2 Dicembre 2025

<<<<<<< HEAD
---
=======
Il modulo **Xot** è il **framework base** di Laraxot, un ecosistema modulare basato su **Laravel 12** e **Filament 4**, progettato per applicazioni enterprise. Fornisce gli strumenti fondamentali e i pattern architetturali per garantire coerenza, estensibilità e manutenibilità in tutto il progetto.
>>>>>>> 384ae3cdd (.)

## 🔗 Documentazione Principale

### Regole e Best Practices

- [Super Mucca Workflow](./super-mucca-workflow.md) - Metodologia completa sviluppo
=======
**Data ultima verifica**: 16 Dicembre 2025

---

## 🔗 Documentazione Principale

### Filosofia e Business Logic

- [Business Logic e Filosofia](./business-logic-philosophy.md) - **MASTER DOC**: Filosofia, religione, politica, zen del progetto
- [Livello Confidenza Massimo](./confidence-level-maximum.md) - **CONSOLIDAMENTO**: Analisi completa e comprensione profonda raggiunta
- [Super Mucca Workflow](./super-mucca-workflow.md) - Metodologia completa sviluppo
- [Priority Decision Rules](./priority-decision-rules.md) - Regole decisione priorità autonoma

### Regole e Best Practices

- [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md) - **⭐ PRINCIPALE** - Guida completa PHPStan Level 10, patterns, workflow, best practices
>>>>>>> 533c4fc00 (.)
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
<<<<<<< HEAD
=======
4. **PHPStan**: [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md)
>>>>>>> 533c4fc00 (.)

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

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 533c4fc00 (.)
- [nwidart/laravel-modules](https://github.com/nWidart/laravel-modules)
- [Spatie Laravel Data](https://github.com/spatie/laravel-data)
- [Spatie Queueable Action](https://github.com/spatie/laravel-queueable-action)
- [Filament v4 Documentation](https://filamentphp.com/docs/4.x)
<<<<<<< HEAD
=======
### Strumenti di Qualità
=======

### Strumenti di Qualità

>>>>>>> 533c4fc00 (.)
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
<<<<<<< HEAD

Il modulo Xot ha raggiunto la piena conformità PHPStan Level 10 senza compromessi:
- Zero baseline entries
- Nessuna modifica a phpstan.neon
- Solo correzioni reali del codice
- Type safety al 100%

**Documentazione dettagliata**:
- [PHPStan Patterns Dec 2025](./phpstan-patterns-dec-2025.md)
- [PHPStan Level 10 Success](../../../docs/phpstan-level-10-success.md)

### 🏗️ **Architettura**
- [🏆 PHPStan Level 9 Achievement](phpstan-level9-achievement.md) - **✅ COMPLETATO** - 832→0 errori PHPStan
- [👑 PHPStan Victory 2025](phpstan-victory-2025.md) - **🎊 PERFEZIONE ASSOLUTA** - 19,337→0 (100%) - Hall of Fame
- [📋 PHPStan Fixes Report 2025](phpstan-fixes-report.md) - **✅ COMPLETATO** - Report dettagliato correzioni
- [🎨 Theme Assets Workflow](theme-assets-workflow.md) - **⚠️ CRITICO** - Workflow CSS/JS per temi
- [PHPStan Array Types Fixes](phpstan-array-types-fixes.md) - **✅ COMPLETATO** - Correzioni complete tipi array
- [Base Classes Guide](base-classes/README.md) - Guida alle classi base
- [Traits Documentation](traits/README.md) - Documentazione traits completa
- [Service Providers](providers/README.md) - Pattern service providers

## 📚 **Documentazione**

### Documenti Principali

#### Qualità del Codice
- **[PHPStan Code Quality Guide](phpstan_code_quality_guide.md)** ⭐ PRINCIPALE - Guida completa PHPStan Level 10, patterns, workflow, best practices
- **[XotBase Extension Rules](xotbase_extension_rules.md)** - Regole architetturali Filament, array associativi, property_exists
- **[Lo Zen degli Strumenti di Qualità](quality-tools-zen.md)** - Filosofia completa PHPStan, Larastan, Safe, Assert, PHPMD, PHP Insights
- **[Best Practices Eloquent](eloquent-properties-best-practices.md)** - Guida completa per proprietà Eloquent
- **[Code Quality Standards](code_quality_standards.md)** - Standard di qualità codice

#### Framework e Convenzioni
- [Convenzioni Laraxot](conventions.md) - Regole e convenzioni per lo sviluppo
- [Laravel Framework](laravel-framework.md) - Documentazione completa del framework
- [Model Context Protocol](model-context-protocol.md) - Implementazione MCP
- [Cast Actions](cast-actions.md) - Azioni di cast sicure
- [Collegamenti](links.md) - Raccolta di link e riferimenti

#### Metodologia e Processo
- **[Metodologia Super Mucca](super-mucca-methodology.md)** ⭐ NUOVO - Approccio sistematico allo sviluppo
- **[Regola Priorità Autonoma](autonomous-priority-rule.md)** ⭐ NUOVO - L'AI sceglie sempre autonomamente le priorità

### Moduli del Sistema

- **[User Module](../User/docs/README.md)** - Gestione utenti, autenticazione e autorizzazione
- **[UI Module](../UI/docs/README.md)** - Componenti UI e interfacce utente
- **[Lang Module](../Lang/docs/README.md)** - Gestione traduzioni e localizzazione

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

## 🗺️ **Roadmap**

1.  **Consolidamento Documentazione**: Unificare e semplificare la documentazione di tutti i moduli (obiettivo: 500 → 120 file).
2.  **Automazione Script di Merge**: Creare script per la gestione automatica dei conflitti comuni e la validazione pre-commit.
3.  **Aumento Test Coverage**: Portare la copertura dei test per i moduli core sopra il 90%.
4.  **Dashboard Health Check**: Introdurre una dashboard per monitorare lo stato di salute e la compliance di tutti i moduli.

## 🔗 **Link Utili**

- [CHANGELOG](./CHANGELOG.md)
- [Guida alla Risoluzione dei Conflitti Git](../../../bashscripts/docs/git-conflict-resolution-guide.md)
- [Convenzioni sui Namespace](./namespace_conventions.md)
- [Linee Guida per il Testing](./testing.md)
- [Laraxot Architecture Rules](./laraxot_architecture_rules.md)

## 📊 **Quick Start**

### Installazione
```bash
composer require laraxot/xot
```
>>>>>>> 384ae3cdd (.)

### Configuration
Configurazione automatica tramite service providers.

<<<<<<< HEAD
## 🔄 Ultimi Aggiornamenti
=======

Il modulo Xot ha raggiunto la piena conformità PHPStan Level 10 senza compromessi:
- Zero baseline entries
- Nessuna modifica a phpstan.neon
- Solo correzioni reali del codice
- Type safety al 100%

---

## 🔄 Ultimi Aggiornamenti

**16 Dicembre 2025**:
- ✅ Creato documento master [Business Logic e Filosofia](./business-logic-philosophy.md)
- ✅ Consolidata comprensione profonda architettura Laraxot
- ✅ Documentati pattern business logic per tutti i moduli principali
- ✅ Creati script analisi naming file .md e categorizzazione script
- ✅ Identificati 125 file .md con date da rinominare
- ✅ Identificati 103 script nella root bashscripts da categorizzare
- ✅ Aggiornato [PHPStan Code Quality Guide](./phpstan_code_quality_guide.md) con contenuto completo
>>>>>>> 533c4fc00 (.)

**2 Dicembre 2025**:
- ✅ Aggiunte 4 helper functions (inAdmin, getModuleModels, getRouteParameters, params2ContainerItem)
- ✅ Risolti conflitti composer autoload
- ✅ PHPStan Level 10 mantenuto (799 files, 0 errori)
- ✅ Documentazione estesa con 9 nuovi file
- ✅ Regole Git e Script memorizzate permanentemente
- ✅ MCP servers configurati

---

<<<<<<< HEAD
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

=======
## 🏆 **Achievements**
=======
## 🏆 Achievements
>>>>>>> 533c4fc00 (.)

- **🏅 Framework Base**: Cuore architetturale Laraxot ✅
- **🏅 PHPStan Level 10**: Classi base certificate ✅
- **🏅 Translation Standards**: Template traduzioni certificate ✅
- **🏅 Base Classes**: 15+ classi base ottimizzate ✅
- **🏅 Traits Ecosystem**: 20+ traits per funzionalità comuni ✅
- **🏅 Service Providers**: Pattern standardizzato per moduli ✅

<<<<<<< HEAD
## 📈 **Statistics**
=======
---
>>>>>>> 533c4fc00 (.)

**Maintainer**: Team Laraxot  
**License**: MIT  
**Repository**: [laraxot/module_xot_fila3](https://github.com/laraxot/module_xot_fila3)

---

<<<<<<< HEAD
**🔄 Ultimo aggiornamento**: Gennaio 2025  
**📦 Versione**: 3.0.0  
**🐛 PHPStan Level 10**: Classi base certificate ✅  
**🌐 Translation Standards**: Template traduzioni certificate ✅  
**🚀 Performance**: 98/100 score
>>>>>>> 384ae3cdd (.)
=======
*"Xot è il fondamento su cui tutto il framework Laraxot si costruisce."*
>>>>>>> 533c4fc00 (.)
