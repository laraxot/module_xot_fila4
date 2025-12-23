<<<<<<< HEAD
=======
# Laraxot PTVX - Documentazione Consolidata

## Panoramica

Il modulo **Xot** è il core framework di Laraxot PTVX. Fornisce:
- Classi base (`XotBase*`) per Resources, Widgets, Actions, Blocks
- Pattern architetturali condivisi (Accessors, Traits, Delegation)
- Strumenti comuni (XotData, MetatagData, Navigation, Trans)
- Automazioni git/bash (cartella `bashscripts/`)

Laraxot PTVX è un ecosistema modulare basato su **Laravel 12**, Filament 4, Livewire 3, PHPStan livello 10 e PHP 8.3.

## 🔧 Correzioni Recenti

### Fix Critici (Novembre 2025)

1. **Merge Conflict Cleanup**
   - Risolti 18 file con duplicazioni  dovute a merge automatici
   - Focus su `HasXotTable.php`, `XotBaseChartWidget.php`, `MetatagData.php`

2. **Script Git Conflicts**
   - `resolve_conflicts_current_change_v6.sh` aggiornato alla v6.1
   - Bug fixati: cleanup temp, stat detection, exit code robusto

3. **Documentazione**
   - Guide conflitti riscritta (v2.0) con approccio filosofico
   - Documenti di bugfix e analisi inseriti in docs/Xot

**Dettagli**: vedi [bugfix-hasxottable-duplicate-if.md](./bugfix-hasxottable-duplicate-if.md) e [syntax-errors-mass-fix.md](./syntax-errors-mass-fix.md)

---

## Architettura Modulare

### Principi Fondamentali
- **Modularità**: 36 moduli indipendenti
- **Coerenza**: Convenzioni namespace, file system uniforme
- **Estensibilità**: Classi base estendibili
- **Manutenibilità**: Strumenti comuni, automazioni

- **Modularità**: Ogni funzionalità è organizzata in moduli indipendenti
- **Coerenza**: Struttura uniforme e convenzioni standardizzate
- **Estensibilità**: Facile aggiunta di nuovi moduli e funzionalità
- **Manutenibilità**: Codice pulito e ben documentato

## Caratteristiche Tecniche

- **Laravel 11**: Framework PHP moderno e potente
- **Filament 3**: Server-Driven UI framework per Laravel
- **Livewire 3**: Full-stack framework per Laravel
- **PHPStan 3**: Static analysis tool (Livello 9/10)
- **Pest 3**: PHP testing framework

## Principi di Sviluppo

- **Namespace**: I namespace dei moduli NON devono includere il segmento `app`
- **Tipizzazione**: Utilizzo di `declare(strict_types=1);` e type hints rigorosi
- **PHPStan**: Compliance con PHPStan Livello 9/10
- **Testing**: Test rigorosi senza `RefreshDatabase`

## Documentazione

### Documenti Principali

#### Qualità del Codice
- **[PHPStan Code Quality Guide](phpstan-code-quality-guide.md)** ⭐ NUOVO - Guida completa PHPStan Level 10, workflow operativo, patterns di correzione
- **[Lo Zen degli Strumenti di Qualità](quality-tools-zen.md)** - Filosofia completa PHPStan, Larastan, Safe, Assert, PHPMD, PHP Insights
- **[Best Practices Eloquent](eloquent-properties-best-practices.md)** - Guida completa per proprietà Eloquent
- **[Report Rimozione property_exists](property-exists-removal-report-2025-01-05.md)** - Eliminazione completa di property_exists
- **[Code Quality Rules](code-quality.md)** - Regole PHPStan, PHPMD, PHPInsights

#### Framework e Convenzioni
- [Convenzioni Laraxot](conventions.md) - Regole e convenzioni per lo sviluppo
- [Laravel Framework](laravel-framework.md) - Documentazione completa del framework
- [Filament Extension Pattern](filament-extension-pattern.md) - Pattern di estensione Filament con XotBase
- [Model Context Protocol](model-context-protocol.md) - Implementazione MCP
- [Cast Actions](cast-actions.md) - Azioni di cast sicure
- [Collegamenti](links.md) - Raccolta di link e riferimenti

#### Configurazione IDE e AI
- **[Configurazione Cartelle AI](../../../../docs/ai-folders-configuration.md)** ⭐ NUOVO - Guida completa alle cartelle AI (.cursor, .claude, .windsurf, etc.)
- [MCP Servers](mcp-servers.md) - Configurazione Model Context Protocol
- [MCP Implementation Guide](mcp-implementation-guide.md) - Guida implementazione MCP

### Moduli del Sistema

- **[User Module](../User/docs/README.md)** - Gestione utenti, autenticazione e autorizzazione
- **[UI Module](../UI/docs/README.md)** - Componenti UI e interfacce utente
- **[Performance Module](../Performance/docs/README.md)** - Sistema di valutazione e performance
- **[Lang Module](../Lang/docs/README.md)** - Gestione traduzioni e localizzazione
- **[Progressioni Module](../Progressioni/docs/README.md)** - Sistema di progressioni e schede

## Quick Start

### Installazione

1. Clonare il repository
2. Installare le dipendenze: `composer install`
3. Configurare l'ambiente: `cp .env.example .env`
4. Generare la chiave: `php artisan key:generate`
5. Eseguire le migrazioni: `php artisan migrate`
6. Avviare il server: `php artisan serve`

---

## Strumenti Principali

| Componente | Descrizione |
|------------|-------------|
| `XotData` | Accesso centralizzato a config e dati cross-modulo |
| `MetatagData` | Gestione SEO/meta per front-end |
| `HasXotTable` | Trait avanzato per Filament tables |
| `TransTrait` | Traduzioni dinamiche e prefissi |
| `XotBaseRouteServiceProvider` | Routing modulare |

---

## Testing & Qualità

- **PHPStan**: Livello 10 (config in `phpstan.neon`)
- **Pest**: Test business logic moduli core
- **Laravel Pint**: PSR-12 + convenzioni Laraxot
- **Automazioni**: script in `bashscripts/test/`

```bash
./vendor/bin/phpstan analyse Modules/Xot --level=max
./vendor/bin/pest Modules/Xot/tests
```

---

## Roadmap

1. Consolidamento documentazione (500 → 120 file)
2. Automatizzare script di merge (PSR-4 + syntax pre-commit)
3. Portare test coverage > 90%
4. Introdurre dashboard health check moduli

---

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
I file di documentazione originali sono stati consolidati per seguire i principi DRY + KISS.
Per accedere alla documentazione dettagliata originale, vedere il backup in:
`docs-consolidation-backup-*/Xot-docs-original/`

## Principles
- **DRY**: Un solo punto di verità
- **KISS**: Semplicità e chiarezza
- **Type Safety**: Tipizzazione rigorosa
- **Documentation**: Documentazione essenziale

## Links
- [Root Documentation](../../../project_docs/)
=======
## Quick Links Legacy
=======
## Quick Links Legacy
- [Root Documentation](../../../docs/)
- [<main module> Module](../<main module>/docs/)
- [Original Documentation Backup](../../../docs-consolidation-backup-*/Xot-docs-original/)
=======
=======
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
>>>>>>> laraxot/develop
