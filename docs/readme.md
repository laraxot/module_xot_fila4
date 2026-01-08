<<<<<<< HEAD
<<<<<<< HEAD
# 🏗️ **Xot Module** - Il Cuore del Framework Laraxot

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 4.x](https://img.shields.io/badge/Filament-4.x-blue.svg)](https://filamentphp.com/)
[![PHP 8.3](https://img.shields.io/badge/PHP-8.3-blueviolet.svg)](https://www.php.net/)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-Level%2010-brightgreen.svg)](https://phpstan.org/)
[![Modular Architecture](https://img.shields.io/badge/Architecture-Modular%20Monolith-yellow.svg)](https://martinfowler.com/articles/modular-monolith.html)

> **🚀 Modulo Xot**: Framework base e cuore architetturale di Laraxot - fornisce classi base, traits, convenzioni e infrastruttura core per tutti i moduli dell'ecosistema.

## 📋 **Panoramica**

Il modulo **Xot** è il **framework base** di Laraxot PTVX, un ecosistema modulare basato su **Laravel 12** e **Filament 4**, progettato per applicazioni enterprise. Fornisce gli strumenti fondamentali e i pattern architetturali per garantire coerenza, estensibilità e manutenibilità in tutto il progetto.

### Principi Fondamentali
- **Modularità**: Ogni funzionalità è organizzata in moduli indipendenti e autoconsistenti.
- **Coerenza**: Adozione di una struttura uniforme, convenzioni di naming e best practice standardizzate.
- **Estensibilità**: Progettato per facilitare l'aggiunta di nuovi moduli e l'espansione delle funzionalità esistenti.
- **Manutenibilità**: Codice pulito, ben documentato e supportato da strumenti di analisi statica.

## ⚡ **Architettura Core**

### 🏗️ **Base Classes Pattern**
Tutti i componenti principali dei moduli devono estendere le classi base fornite da Xot per ereditare funzionalità comuni e garantire coerenza.

```php
// Esempio di una Resource Filament
use Modules\Xot\Filament\Resources\XotBaseResource;

class UserResource extends XotBaseResource
{
    protected static ?string $model = User::class;
    
    // Il metodo table() e form() NON devono essere sovrascritti
    // se non per aggiungere logica specifica, ma la base
    // è già fornita da XotBaseResource.
}
```

### 🔧 **Traits Ecosystem**
Xot fornisce un ricco ecosistema di Trait per aggiungere funzionalità comuni ai modelli e ad altre classi.
- **HasXotTable**: Aggiunge funzionalità avanzate alle tabelle Filament.
- **HasUuid**: Gestisce automaticamente UUID come chiavi primarie.
- **HasMedia**: Integra Spatie Media Library con convenzioni standard.
- **HasStates**: Fornisce una gestione degli stati per i modelli.
- **TransTrait**: Semplifica le traduzioni dinamiche.

### 📦 **Service Provider Pattern**
I Service Provider di ogni modulo estendono `XotBaseServiceProvider`, che automatizza la registrazione di:
- Migrations, Views, Translations, e Config
- Routes (web.php, api.php)
- Filament Resources, Pages, e Widgets
- Comandi Artisan e Policies
=======
# Xot Module - Framework Base Laraxot
# Laraxot PTVX - Documentazione Consolidata
=======
# Modulo Xot - Documentazione
>>>>>>> 285375c74 (.)

## Panoramica
Il modulo Xot fornisce le classi base e i componenti fondamentali per l'architettura Laraxot, seguendo il principio di **mai estendere classi Filament direttamente**.

## Componenti Principali

### XotBasePage
Classe base per tutte le pagine personalizzate dell'applicazione.

**Caratteristiche:**
- Estende `Filament\Resources\Pages\Page` invece di classi Filament direttamente
- Fornisce funzionalità comuni per pagine personalizzate
- Gestione automatica delle traduzioni
- Schema form configurabile

<<<<<<< HEAD
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

- [Convenzioni Laraxot](conventions.md) - Regole e convenzioni per lo sviluppo
- [Laravel Framework](laravel-framework.md) - Documentazione completa del framework
- [Model Context Protocol](model-context-protocol.md) - Implementazione MCP
- [Piano Consolidamento](DOCS_CONSOLIDATION_PLAN.md) - Piano per consolidare documentazione
- [Collegamenti](links.md) - Raccolta di link e riferimenti

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
>>>>>>> dc2130a7c (.)

## 🎯 **Funzionalità Principali**

<<<<<<< HEAD
### ⚡ **Actions Framework**
Un pattern standardizzato per incapsulare la business logic in classi riutilizzabili e testabili.
```php
=======
**Data Creazione**: 27 Gennaio 2025  
**Stato**: Consolidato da docs/ root  
**Priorità**: CRITICA (Documentazione principale)
# 🏗️ **Xot Module** - Framework Base Laraxot

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN%20%7C%20DE-green.svg)](https://laravel.com/docs/localization)
[![Base Framework](https://img.shields.io/badge/Framework-Base%20Core-orange.svg)](https://laraxot.com/)
[![Modular Architecture](https://img.shields.io/badge/Architecture-Modular%20Monolith-yellow.svg)](https://martinfowler.com/articles/modular-monolith.html)
[![Quality Score](https://img.shields.io/badge/Quality%20Score-98%25-brightgreen.svg)](https://github.com/laraxot/xot-module)

> **🚀 Modulo Xot**: Framework base e cuore architetturale di Laraxot - fornisce classi base, traits, convenzioni e infrastruttura core per tutti i moduli dell'ecosistema.

## 📋 **Panoramica**

Il modulo **Xot** è il **framework base** di Laraxot, fornendo:

- 🏗️ **Classi Base Universali** - XotBaseResource, XotBaseWidget, XotBaseMigration
- 🔧 **Traits Fondamentali** - HasXotTable, HasXotFactory, HasUuid, HasMedia, HasStates
- 📦 **Service Providers Core** - XotBaseServiceProvider con auto-discovery
- 🎯 **Convenzioni Standard** - Naming, structure, best practices per tutti i moduli
- ⚡ **Infrastruttura Core** - Actions, Enums, Exceptions, Helpers comuni
- 🎨 **Componenti Filament** - Widget, Resources, Forms base per UI consistente

## ⚡ **Architettura Core**

### 🏗️ **Base Classes Pattern**
=======
**Utilizzo:**
>>>>>>> 285375c74 (.)
```php
class MiaPagina extends XotBasePage
{
    protected static ?string $model = MiaModel::class;
    
    protected function getFormSchema(): array
    {
        return [
            // Componenti del form
        ];
    }
}
```

## Fix e Correzioni

### getModel() Method Fix
- **Problema**: Errore di sovrascrittura static/non-static
- **Soluzione**: Correzione della dichiarazione del metodo per compatibilità con Filament
- **Documentazione**: [xotbasepage-getmodel-fix.md](./xotbasepage-getmodel-fix.md)

### Filament Resource Creation Fix
- **Problema**: Errori di compatibilità con comandi `make:filament-resource` e `filament:generate-resources`
- **Soluzione**: Corretti errori di compatibilità, registrato comando personalizzato, rimossi file di test problematici
- **Documentazione**: [filament-resource-creation-fix.md](./filament-resource-creation-fix.md)

## Principi Architetturali

### Regola Fondamentale
> **MAI estendere classi Filament direttamente - sempre estendere classi XotBase**

### Regole Critiche Laraxot - DA SEGUIRE SEMPRE

#### 🚫 **Estensioni Classi Filament Vietate**
**MAI estendere direttamente:**
- ❌ `Filament\Resources\Pages\CreateRecord`
- ❌ `Filament\Resources\Pages\EditRecord`
- ❌ `Filament\Resources\Pages\ListRecords`
- ❌ `Filament\Resources\Pages\Page`
- ❌ `Filament\Actions\Action`
- ❌ `Filament\Forms\Components\*`
- ❌ `Filament\Tables\Columns\*`

**✅ SEMPRE estendere le classi XotBase:**
- ✅ `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord`
- ✅ `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord`
- ✅ `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`
- ✅ `Modules\Xot\Filament\Pages\XotBasePage`
- ✅ `Modules\Xot\Filament\Actions\XotBaseAction`
- ✅ `Modules\Xot\Filament\Components\XotBaseComponent`

#### 🚫 **Proprietà Vietate in XotBasePage**
**Chi estende `XotBasePage` NON DEVE avere:**
```php
// ❌ VIETATO
protected static ?string $navigationIcon = 'heroicon-o-home';
protected static ?string $title = 'Titolo';
protected static ?string $navigationLabel = 'Etichetta';
```

#### 🚫 **Label e Traduzioni Hardcoded**
**MAI usare metodi hardcoded:**
```php
<<<<<<< HEAD
// Pattern standardizzato per business logic
>>>>>>> dc2130a7c (.)
use Modules\Xot\Actions\XotBaseAction;
=======
// ❌ VIETATO
TextInput::make('name')->label('Nome')
TextColumn::make('status')->placeholder('Stato')
Action::make('edit')->tooltip('Modifica')
```
>>>>>>> 285375c74 (.)

**✅ Traduzioni gestite automaticamente via LangServiceProvider:**
```php
// ✅ CORRETTO
TextInput::make('name')
TextColumn::make('status')
Action::make('edit')
```

#### 🚫 **BadgeColumn Deprecato**
**NON usare più BadgeColumn:**
```php
// ❌ DEPRECATO
BadgeColumn::make('status')

// ✅ CORRETTO
TextColumn::make('status')->badge()
```

#### 🚫 **Servizi Tradizionali**
**NON usare Services, ma Spatie QueueableAction:**
```php
// ❌ VIETATO
class UserService
{
    public function process(array $data) { /* ... */ }
}

// ✅ CORRETTO
class ProcessUserAction
{
    use QueueableAction;

    public function execute(UserData $data): UserData
    {
<<<<<<< HEAD
        $user = User::create($data);
<<<<<<< HEAD
        $this->logActivity('user.created', $user); // Logging automatico
        event(new UserCreated($user)); // Dispatching eventi
=======
        
        // Auto-logging con activity trail
        $this->logActivity('user.created', $user);
        
        // Auto-dispatching eventi
        event(new UserCreated($user));
        
>>>>>>> dc2130a7c (.)
        return $user;
=======
        // Logica business
>>>>>>> 285375c74 (.)
    }
}
```

<<<<<<< HEAD
### 🏷️ **Enums System**
<<<<<<< HEAD
Le Enum di Xot implementano `XotBaseEnum`, che fornisce traduzioni automatiche e altri helper.
```php
=======
```php
// Enum base con traduzioni automatiche
>>>>>>> dc2130a7c (.)
use Modules\Xot\Enums\XotBaseEnum;

enum UserStatus: string implements XotBaseEnum
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
<<<<<<< HEAD

    public function getLabel(): string
    {
        // Traduzione gestita centralmente
        return __('xot::enums.user_status.'.$this->value);
=======
    case SUSPENDED = 'suspended';
    
    public function getLabel(): string
    {
        return match($this) {
            self::ACTIVE => __('xot::enums.user_status.active'),
            self::INACTIVE => __('xot::enums.user_status.inactive'),
            self::SUSPENDED => __('xot::enums.user_status.suspended'),
        };
>>>>>>> dc2130a7c (.)
    }
}
```

<<<<<<< HEAD
## 🛠️ **Sviluppo e Qualità**

### Convenzioni
- **Namespace**: I namespace dei moduli **NON** devono includere il segmento `app`.
- **Tipizzazione Forte**: Utilizzo di `declare(strict_types=1);` e type hints rigorosi in tutto il codice.
- **File di Traduzione**: Seguire la struttura espansa `['label' => '...', 'tooltip' => '...']`.

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

### 🏆 PHPStan Level 10 Compliance (Dicembre 2025)

**Status**: ✅ **0 Errori** (16 → 0)
**Approccio**: Fix, Don't Ignore
**Baseline**: Nessuno

Il modulo Xot ha raggiunto la piena conformità PHPStan Level 10 senza compromessi:
- Zero baseline entries
- Nessuna modifica a phpstan.neon
- Solo correzioni reali del codice
- Type safety al 100%

**Documentazione dettagliata**:
- [PHPStan Patterns Dec 2025](./phpstan-patterns-dec-2025.md)
- [PHPStan Level 10 Success](../../../docs/phpstan-level-10-success.md)

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
=======
### 🔍 **Advanced Query Filters**
```php
// Sistema filtri per API e ricerche
use Modules\Xot\QueryFilters\XotBaseFilter;
=======
#### 🚫 **getTableColumns() in XotBaseResource**
**Chi estende `XotBaseResource` NON DEVE implementare `getTableColumns()`:**
- ❌ `getTableColumns()` → VIETATO
- ✅ Usa `getTableColumns()` se necessario (ereditato da base)

### Vantaggi
1. **Controllo**: Override locale delle funzionalità
2. **Coerenza**: Comportamento uniforme tra moduli
3. **Manutenibilità**: Modifiche centralizzate
4. **Compatibilità**: Rispetto delle convenzioni PHP
5. **Traduzioni Automatiche**: Gestione centralizzata via LangServiceProvider
6. **Type Safety**: PHPDoc e tipizzazione rigorosa

## Sistema Service Provider
>>>>>>> 285375c74 (.)

Il modulo Xot fornisce `XotBaseServiceProvider`, la classe base per tutti i ServiceProvider modulari.

**Caratteristiche**:
- Registrazione automatica di view, traduzioni, config, componenti
- Approccio DRY: configurazione minimale richiesta
- Sistema di view namespace resolution integrato
- Discovery automatico moduli

**Documentazione completa**: [Service Provider Architecture](./service-provider-architecture.md)

### Errori Comuni

**"No hint path defined for [namespace]"**  
Quando un view namespace non è registrato correttamente. Vedere:
- [Activity Module - Errore No Hint Path](../activity/docs/errori/no-hint-path-defined.md)

## Collegamenti Interni

### Architettura Fondamentale
- [XotBase Architecture Complete](./xotbase-architecture-complete.md) ⭐ **MASTER DOC**
- [Service Provider Architecture](./service-provider-architecture.md)
- [Standalone vs Resource Pages](./filament/standalone-vs-resource-pages.md) ⚠️ **IMPORTANTE**

### Errori Critici
- [Mai Estendere Filament Direttamente](./errori-critici/mai-estendere-filament-direttamente.md) ⚠️ **CRITICO**
- [Differenza Due XotBasePage](./filament/standalone-vs-resource-pages.md) ⚠️ **CRITICO**

### Fix Specifici
- [XotBasePage getModel() Fix](./xotbasepage-getmodel-fix.md)
- [Filament Resource Creation Fix](./filament-resource-creation-fix.md)

## Collegamenti Moduli
- [Activity Module](../activity/docs/README.md)
- [IndennitaResponsabilita Module](../indennitaresponsabilita/docs/README.md)
- [UI Module](../ui/docs/README.md)

## Collegamenti Root
- [Laraxot Conventions](../../../README.md)

<<<<<<< HEAD
### 🏗️ **Architettura**
- [🏆 PHPStan Level 9 Achievement](phpstan-level9-achievement.md) - **✅ COMPLETATO** - 832→0 errori PHPStan
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

### 🐛 **Bugfix Documentation**
- [HasXotFactory Restoration](bugfix/hasxotfactory-restoration.md) - Ripristino trait cancellato (22 Ott 2025)

### 📚 **Trait Documentation**
- [HasXotFactory](traits/hasxotfactory.md) - Auto-generazione factory per modelli

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

- **🏅 Framework Base**: Cuore architetturale Laraxot ✅
- **🏅 PHPStan Level 9**: Classi base certificate ✅
- **🏅 Translation Standards**: Template traduzioni certificate ✅
- **🏅 Base Classes**: 15+ classi base ottimizzate ✅
- **🏅 Traits Ecosystem**: 20+ traits per funzionalità comuni ✅
- **🏅 Service Providers**: Pattern standardizzato per moduli ✅

### 📈 **Statistics**

- **🏗️ Classi Base**: 15+ classi fondamentali
- **🔧 Traits Disponibili**: 20+ traits per funzionalità comuni
- **📦 Service Providers**: Pattern standardizzato per tutti i moduli
- **🎨 Componenti Filament**: Widget, Resources, Forms base
- **🧪 Test Coverage**: 95%
- **⚡ Performance Score**: 98/100

---

**🔄 Ultimo aggiornamento**: 09 Settembre 2025  
**📦 Versione**: 3.0.0  
**🐛 PHPStan Level 9**: Classi base certificate ✅  
**🌐 Translation Standards**: Template traduzioni certificate ✅  
**🚀 Performance**: 98/100 score

## Documentation Archive & Legacy

## Overview
Modulo base del framework Laraxot con funzionalità core e best practices.

## Quick Links
- [🏆 PHPStan Level 9 Achievement](phpstan-level9-achievement.md) - **✅ COMPLETATO** - 832→0 errori PHPStan
- [🎨 Theme Assets Workflow](theme-assets-workflow.md) - **⚠️ CRITICO** - Workflow CSS/JS per temi
- [PHPStan Array Types Fixes](phpstan-array-types-fixes.md) - **✅ COMPLETATO** - Correzioni complete tipi array
- [Filament Complete Guide](consolidated/filament-complete-guide.md)
- [PHPStan Complete Guide](consolidated/phpstan-complete-guide.md)
- [Migration Complete Guide](consolidated/migration-complete-guide.md)
- [Testing Complete Guide](consolidated/testing-complete-guide.md)
- [Translation Complete Guide](consolidated/translation-complete-guide.md)

## Architecture
- Base classes per tutti i moduli
- Service providers centralizzati
- Convenzioni e standard
- Actions per operazioni PDF e business logic

### Actions
- [GetPdfContentByRecordAction](actions/get-pdf-content-by-record-action.md) - Generazione contenuto PDF da record Eloquent
- [ContentPdfAction](archive/actions/content-pdf-action.md) - Generazione PDF da HTML/viste
- [StreamDownloadPdfAction](archive/actions/pdf-stream-download-action.md) - Download PDF diretto

## Installation
```bash
composer require laraxot/xot
```

## Configuration
Configurazione automatica tramite service providers.

## Documentation Archive
I file di documentazione originali sono stati consolidati per seguire i principi DRY + KISS.
Per accedere alla documentazione dettagliata originale, vedere il backup in:
`docs-consolidation-backup-*/Xot-docs-original/`

## Principles
- **DRY**: Un solo punto di verità
- **KISS**: Semplicità e chiarezza
- **Type Safety**: Tipizzazione rigorosa
- **Documentation**: Documentazione essenziale
## Quick Links Legacy

## Links
- [Root Documentation](../../../project_docs/)
- [Root Documentation](../../../docs/)
- [<main module> Module](../<main module>/docs/)
- [Original Documentation Backup](../../../docs-consolidation-backup-*/Xot-docs-original/)
>>>>>>> dc2130a7c (.)
=======
*Ultimo aggiornamento: Sistema di documentazione automatica*
>>>>>>> 285375c74 (.)
