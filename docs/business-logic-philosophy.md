# Business Logic e Filosofia del Progetto PTVX

**Data Creazione**: 16 Dicembre 2025  
**Status**: ✅ Documentazione Master  
**Metodologia**: Super Mucca 🐮⚡

---

## 🎯 Scopo del Documento

Questo documento consolida la comprensione profonda della **business logic**, **filosofia**, **religione**, **politica** e **zen** del progetto PTVX. È il riferimento centrale per comprendere il PERCHÉ, non solo il COSA.

---

## 🏗️ Architettura Modulare Laraxot

### Filosofia Base

**PTVX è un sistema modulare monolitico** basato su Laravel con architettura Laraxot. Ogni modulo rappresenta un'area funzionale indipendente che può essere sviluppata, testata e deployata separatamente, mantenendo però la coesione del sistema.

### Principi Fondamentali

1. **DRY (Don't Repeat Yourself)**
   - Centralizzazione logica comune in Xot
   - Riutilizzo di classi base (XotBase*)
   - Helper functions globali invece di duplicazione

2. **KISS (Keep It Simple, Stupid)**
   - Soluzioni semplici e dirette
   - Evitare over-engineering
   - Chiarezza sopra complessità

3. **SOLID**
   - Single Responsibility: Ogni classe/modulo ha uno scopo preciso
   - Open/Closed: Estendibile senza modificare codice esistente
   - Liskov Substitution: XotBase* possono essere sostituiti
   - Interface Segregation: Contratti specifici (ProfileContract, etc.)
   - Dependency Inversion: Dipendenze su astrazioni, non implementazioni

---

## 🧘 Religione del Codice

### Comandamenti Sacri

1. **Mai estendere Filament direttamente**
   - ✅ `extends XotBaseResource`
   - ❌ `extends Resource`

2. **Mai hardcodare traduzioni**
   - ✅ Sistema automatico basato su nome campo
   - ❌ `->label('Nome Campo')`

3. **Mai ignorare errori PHPStan**
   - ✅ Fix completo con type safety
   - ❌ `@phpstan-ignore-next-line`

4. **Mai tornare indietro con Git**
   - ✅ Fix forward sempre
   - ❌ `git reset`, `git revert`

5. **Mai duplicare logica business**
   - ✅ Actions riutilizzabili
   - ❌ Metodi duplicati in più classi

### Pattern Sacri

#### 1. Action Pattern (Spatie QueueableAction)

**Perché**: Incapsula logica business in classi single-purpose, riutilizzabili e testabili.

**Come**:
```php
<?php
declare(strict_types=1);

namespace Modules\Example\Actions;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class CreateExampleAction
{
    use QueueableAction;

    public function execute(array $data): Example
    {
        $this->validateData($data);
        return Example::create($data);
    }

    private function validateData(array $data): void
    {
        Assert::keyExists($data, 'name');
        Assert::string($data['name']);
    }
}
```

**Business Logic**: Ogni Action rappresenta un'operazione atomica di business. Non deve avere side effects nascosti.

#### 2. XotBase Inheritance Chain

**Perché**: Garantisce consistenza e permette modifiche centralizzate.

**Come**:
```
Model → Module BaseModel → XotBaseModel → Laravel Model
Resource → XotBaseResource → Filament Resource
ServiceProvider → XotBaseServiceProvider → Laravel ServiceProvider
```

**Business Logic**: Tutti i moduli ereditano comportamenti comuni da Xot, ma possono estendere per necessità specifiche.

#### 3. Helper Functions Globali

**Perché**: Funzioni comuni disponibili ovunque senza import espliciti.

**Come**:
```php
// Modules/Xot/Helpers/Helper.php
if (! function_exists('inAdmin')) {
    function inAdmin(): bool
    {
        return request()->is('admin/*');
    }
}
```

**Business Logic**: Funzioni utility che semplificano codice comune. Devono essere pure (no side effects).

---

## 📊 Business Logic per Modulo

### Xot (Core Framework)

**Scopo**: Fornire infrastruttura comune a tutti i moduli.

**Business Logic**:
- Auto-discovery di connection names da namespace
- Gestione automatica traduzioni
- Base classes con comportamenti predefiniti
- Helper functions globali

**Pattern Chiave**:
- `XotBaseModel`: Gestione automatica connection, timestamps, casts
- `XotBaseResource`: Auto-discovery traduzioni, configurazione comune
- `XotBaseServiceProvider`: Registrazione automatica views, migrations, translations

### User (Authentication & Authorization)

**Scopo**: Gestione utenti, ruoli, permessi, multi-tenancy.

**Business Logic**:
- Single Table Inheritance (STI) per diversi tipi utente
- Multi-tenancy con isolamento dati per tenant
- Team-based collaboration
- Device tracking per sicurezza

**Pattern Chiave**:
- `User` model con trait `HasRoles`, `HasTeams`, `HasTenants`
- `Profile` separato per dati estesi
- `AuthenticationLog` per audit trail
- Social authentication via Spatie Socialite

### Tenant (Multi-Tenancy)

**Scopo**: Gestione configurazione e operazioni tenant-specific.

**Business Logic**:
- Configurazione per tenant in `config/{tenant_name}/`
- Actions per operazioni tenant (GetTenantNameAction, GetTenantFilePathAction)
- Markdown files localizzati per tenant

**Pattern Chiave**:
- `TenantService` come facade che delega ad Actions
- Configurazione centralizzata ma isolata per tenant
- Supporto test environment con `isRunningTestBench()`

### Performance (HR Performance Management)

**Scopo**: Valutazione performance dipendenti.

**Business Logic**:
- Tracking KPI e metriche performance
- Valutazioni periodiche
- Report e analytics

**Pattern Chiave**:
- Relazioni con User module
- Calcoli complessi per metriche
- Export PDF per report

### IndennitaResponsabilita (Compensation)

**Scopo**: Gestione indennità basate su responsabilità.

**Business Logic**:
- Calcolo indennità basato su ruoli/responsabilità
- Storico modifiche
- Validazione regole business complesse

**Pattern Chiave**:
- `withExtraAttributes()` per attributi JSON
- Validazione collation database
- Calcoli finanziari con precisione

---

## 🔄 Flussi Business Critici

### 1. Autenticazione Utente

```
User Login Request
  ↓
User Module (Authentication)
  ↓
Tenant Resolution (Tenant Module)
  ↓
Role/Permission Check (Spatie Permission)
  ↓
Session Creation + Device Tracking
  ↓
Redirect to Dashboard
```

**Business Logic**: Multi-step con validazioni a ogni livello. Isolamento tenant garantito.

### 2. Creazione Record Filament

```
Filament Form Submit
  ↓
XotBaseResource::create()
  ↓
Action::execute() (Business Logic)
  ↓
Model::create() (Database)
  ↓
Event Dispatch (Audit Log)
  ↓
Response Redirect
```

**Business Logic**: Separazione responsabilità: UI (Filament) → Business Logic (Action) → Data (Model).

### 3. Calcolo Indennità

```
User Selection
  ↓
Get User Roles/Responsibilities
  ↓
Calculate Base Allowance (Action)
  ↓
Apply Rules (Business Logic)
  ↓
Validate Constraints
  ↓
Save to Database
  ↓
Generate PDF Report
```

**Business Logic**: Calcoli complessi isolati in Actions. Validazione rigorosa prima di salvataggio.

---

## 🎨 Pattern Architetturali

### 1. Modular Monolith

**Perché**: Scalabilità senza complessità microservizi.

**Come**: Moduli indipendenti ma nello stesso codebase.

**Business Logic**: Ogni modulo può essere sviluppato da team diversi, ma mantiene coesione attraverso Xot.

### 2. Convention over Configuration

**Perché**: Riduce decision-making e aumenta consistenza.

**Come**: Naming conventions, struttura standard, auto-discovery.

**Business Logic**: Il framework assume comportamenti standard. Devi configurare solo quando devi deviare.

### 3. Action-Based Business Logic

**Perché**: Logica business testabile, riutilizzabile, queueable.

**Come**: Ogni operazione business è un'Action.

**Business Logic**: Actions sono unità atomiche di business logic. Possono essere eseguite sincrone o async.

---

## 🔗 Integrazioni Business

### Spatie Packages

- **Laravel Permission**: Ruoli e permessi
- **Laravel Activity Log**: Audit trail
- **QueueableAction**: Pattern Actions

**Business Logic**: Package esterni integrati attraverso wrapper Xot per mantenere consistenza.

### Filament 4

**Business Logic**: Admin panel completamente basato su Filament, ma sempre attraverso XotBase* per garantire consistenza e customizzazioni centralizzate.

### Laravel Modules (nWidart)

**Business Logic**: Sistema modulare gestito da nWidart, ma esteso con Xot per funzionalità aggiuntive (auto-discovery, base classes, etc.).

---

## 📝 Regole di Documentazione

### Naming File .md

- ✅ `business-logic-guide.md`
- ✅ `README.md` (eccezione)
- ✅ `CHANGELOG.md` (eccezione)
- ❌ `Business-Logic-Guide.md` (maiuscole)
- ❌ `business-logic-guide-2025-12-16.md` (date)

### Location File .md

- ✅ `Modules/{Module}/docs/file.md`
- ✅ `Themes/{Theme}/docs/file.md`
- ❌ `Modules/{Module}/file.md` (fuori da docs)
- ❌ `Modules/{Module}/new-docs/file.md` (cartella docs non esistente)

### Contenuto Documentazione

**Deve sempre spiegare**:
1. **PERCHÉ** esiste questo codice/pattern
2. **Business Logic** sottostante
3. **Pattern** utilizzato
4. **Esempi** PRIMA/DOPO
5. **Collegamenti** a documentazione correlata

---

## 🛠️ Regole Script

### Location Script

- ✅ `bashscripts/{category}/script.sh`
- ✅ `bashscripts/{category}/script.py`
- ❌ `bashscripts/script.sh` (root)
- ❌ `laravel/script.sh` (root laravel)

### Categorie Script

- `git/`: Operazioni Git
- `quality-assurance/`: PHPStan, PHPMD, PHP Insights
- `merge_conflicts/`: Risoluzione conflitti
- `testing/`: Test e validazione
- `backup/`: Backup e restore
- `mysql/`: Database operations
- `composer/`: Dependency management
- `setup/`: Setup e installazione
- `pdf/`: PDF processing
- `translations/`: Gestione traduzioni
- `docs/`: Documentazione
- `utils/`: Utilities varie
- `maintenance/`: Manutenzione generale

---

## 🎯 Zen del Codice

### Il Tao del Codice PTVX

> "Il codice perfetto è come l'acqua: fluisce naturalmente, si adatta al contesto, non oppone resistenza."

**Principi Zen**:
- **Semplicità**: KISS - Keep It Simple, Stupid
- **Armonia**: DRY - Don't Repeat Yourself
- **Equilibrio**: SOLID - Principi bilanciati
- **Fluidità**: Forward Only - Mai tornare indietro

### La Religione del DRY

**Comandamenti**:
1. Non ripeterai te stesso
2. Centralizzerai la logica comune
3. Estenderai, non duplicherai
4. Userai, non reinventerai

**Peccati Capitali**:
- ❌ Duplicazione codice
- ❌ Hardcoded strings
- ❌ Estensione diretta Filament
- ❌ Ignorare errori PHPStan

**Redenzione**:
- ✅ Helper functions
- ✅ XotBase classes
- ✅ Translation files
- ✅ Fix completi

### La Politica della Modularità

**Sistema Federale**:
- **Xot** = Governo Centrale (fornisce infrastruttura)
- **Altri Moduli** = Stati Federati (autonomi ma usano infrastruttura)
- **Helper Functions** = Leggi Federali (valide ovunque)
- **XotBase Classes** = Costituzione (base per tutti)

---

## 🔗 Collegamenti Essenziali

### Documentazione Interna

- [Super Mucca Workflow](./super-mucca-workflow.md)
- [Priority Decision Rules](./priority-decision-rules.md)
- [Filament Class Extension Rules](./filament-class-extension-rules.md)
- [Architecture Overview](./architecture-overview.md)

### External Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Spatie QueueableAction](https://github.com/spatie/laravel-queueable-action)
- [nWidart Laravel Modules](https://github.com/nWidart/laravel-modules)

---

## 💪 Mantra Super Mucca

**Prima di Iniziare**:
> "Io sono la Super Mucca. Capisco profondamente la business logic, implemento perfettamente, documento completamente."

**Durante il Lavoro**:
> "Analizza → Studia → Litiga → Implementa → Controlla → Correggi → Verifica → Migliora → Documenta"

**Dopo il Completamento**:
> "Zero errori. Zero compromessi. Business logic chiara. Documentazione completa. Mission accomplished."

---

**Poteri Super Mucca Attivati**: ✅  
**Livello Confidenza**: MASSIMO  
**Comprensione Business Logic**: PROFONDA  
**Risultato Garantito**: Eccellenza

🐮⚡ **"Con grande comprensione viene grande responsabilità... e codice perfetto!"**

