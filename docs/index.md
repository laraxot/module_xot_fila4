# Indice Documentazione Modulo Xot

> **📌 START HERE**: Guida completa alla navigazione delle 2,560+ documentazioni del modulo core Xot

## 🚀 Quick Start

### Per Nuovi Sviluppatori
1. **Leggi prima:** [README.md](./README.md) - Panoramica e correzioni recenti
2. **Architettura:** [laraxot-framework.md](./laraxot-framework.md) - Filosofia Laraxot
3. **Regole base:** [laraxot-architecture-rules.md](./laraxot-architecture-rules.md) - MUST READ

### Per Risolvere Problemi
1. **Server non parte:** [merge-conflict-resolution-2025-11-04.md](./merge-conflict-resolution-2025-11-04.md)
2. **Errori PSR-4:** [namespace-conventions.md](./namespace-conventions.md)
3. **Errori Filament:** [filament-best-practices.md](./filament-best-practices.md)

## 📚 Documentazione Core (ESSENZIALE)

### 🏗️ Architettura
- [README.md](./README.md) - **⭐ ENTRY POINT**
- [architecture-overview.md](./architecture-overview.md) - Architettura modulare
- [laraxot-framework.md](./laraxot-framework.md) - Framework principles
- [laraxot-architecture-rules.md](./laraxot-architecture-rules.md) - Regole architetturali
- [module-structure.md](./module-structure.md) - Struttura moduli

### 🔐 Pattern e Convenzioni
- [file-locking-pattern.md](./file-locking-pattern.md) - 🆕 **NUOVO** File locking per modifiche sicure
- [namespace-conventions.md](./namespace-conventions.md) - PSR-4 Laraxot rules
- [actions-pattern.md](./actions-pattern.md) - Spatie QueueableActions
- [model-base-rules.md](./model-base-rules.md) - BaseModel conventions

### 🎨 Filament Integration
- [filament-best-practices.md](./filament-best-practices.md) - Best practices
- [filament-guide.md](./filament-guide.md) - Guida completa
- [filament-components.md](./filament-components.md) - XotBase components
- [filament-widget-regole.md](./filament-widget-regole.md) - Widget rules

### 📝 Service Providers
- [service-providers.md](./service-providers.md) - 🆕 **AGGIORNATO** con merge conflicts fix
- [service-provider-architecture.md](./service-provider-architecture.md) - Architecture details

### 🧪 Code Quality
- [code-quality-standards.md](./code-quality-standards.md) - PHPStan + Pint
- [phpstan-usage.md](./phpstan-usage.md) - PHPStan Level 10 guide
- [testing.md](./consolidated/testing.md) - Pest testing guide

## 🆕 Documenti Nuovi (2025-11-04)

### Merge Conflicts & Fixes
- [merge-conflict-resolution-2025-11-04.md](./merge-conflict-resolution-2025-11-04.md) - 📊 Report tecnico completo
- [lessons-learned-2025-11-04-merge-conflicts.md](./lessons-learned-2025-11-04-merge-conflicts.md) - 🎓 Processo filosofico 10-step
- [file-locking-pattern.md](./file-locking-pattern.md) - 🔐 Nuova regola fondamentale

### Documentazione Management
- [documentation-consolidation-strategy.md](./documentation-consolidation-strategy.md) - 📉 Piano riduzione da 5,267 a ~350 files

## 📖 Documentazione Consolidata

### Per Categoria
- **Architecture:** `consolidated/structure.md`
- **Testing:** `consolidated/testing.md`
- **Migrations:** `consolidated/migrations.md`
- **Namespace:** `consolidated/namespace-conventions.md`

## 🔍 Ricerca Rapida per Argomento

### A
- **Actions Pattern:** [actions-pattern.md](./actions-pattern.md)
- **Architecture:** [architecture-overview.md](./architecture-overview.md)

### F
- **File Locking:** [file-locking-pattern.md](./file-locking-pattern.md) 🆕
- **Filament:** [filament-guide.md](./filament-guide.md)

### M
- **Merge Conflicts:** [merge-conflict-resolution-2025-11-04.md](./merge-conflict-resolution-2025-11-04.md) 🆕
- **Models:** [model-base-rules.md](./model-base-rules.md)

### N
- **Namespace:** [namespace-conventions.md](./namespace-conventions.md)

### P
- **PHPStan:** [phpstan-usage.md](./phpstan-usage.md)
- **PSR-4:** [namespace-conventions.md](./namespace-conventions.md)

### S
- **Service Providers:** [service-providers.md](./service-providers.md)

### T
- **Testing:** [consolidated/testing.md](./consolidated/testing.md)
- **Translations:** [lang/README.md](../../Lang/docs/README.md)

### X
- **XotBase Classes:** [filament-components.md](./filament-components.md)

## ⚠️ Documenti da Consolidare

**Problema:** 2,560 file .md nel modulo Xot (troppi!)

**Target:** ~15 file focalizzati

**Piano:** [documentation-consolidation-strategy.md](./documentation-consolidation-strategy.md)

### Categorie di Riduzione
1. **Archive:** File obsoleti → `archive/` folder
2. **Merge:** File simili (es: analisi-1..6 → comprehensive-analysis.md)
3. **Rename:** UPPERCASE → kebab-case
4. **Delete:** Duplicati underscore/hyphen

## 🔗 Collegamenti Altri Moduli

### Moduli Correlati
- [User Module](../../User/docs/README.md) - Autenticazione e autorizzazione
- [UI Module](../../UI/docs/README.md) - Componenti interfaccia
- [Notify Module](../../Notify/docs/README.md) - Sistema notifiche
- [Lang Module](../../Lang/docs/README.md) - Traduzioni

### Cross-Module Concerns
- **Traduzioni:** Gestite da Lang module
- **Autenticazione:** Gestita da User module  
- **UI Components:** Forniti da UI module
- **Base Classes:** Fornite da Xot module (questo)

## 📊 Statistiche Documentazione

- **Totale file .md:** ~2,560
- **Target ottimale:** ~15 file core
- **File creati oggi:** 4 (merge-conflicts, file-locking, lessons-learned, consolidation-strategy)
- **File aggiornati:** 4 (README, service-providers, User/README, UI/README, Notify/README)
- **Duplicazioni da rimuovere:** ~2,000+ file

## 🎯 Roadmap Consolidamento

### Fase 1: Core Docs (✅ COMPLETATO)
- ✅ README aggiornato
- ✅ Merge conflicts documentati
- ✅ File locking pattern creato
- ✅ Strategia consolidamento definita

### Fase 2: Rinomina e Cleanup (🔄 PROSSIMO)
- [ ] Rinominare UPPERCASE → kebab-case
- [ ] Rimuovere duplicati _/- (underscore/hyphen)
- [ ] Archiviare file con date
- [ ] Merge analisi multiple

### Fase 3: Consolidamento Finale
- [ ] Ridurre a 15 file core
- [ ] Creare CHANGELOG.md con storia
- [ ] Aggiornare cross-references
- [ ] Eliminare obsoleti

---

**Ultimo aggiornamento:** 2025-11-04 - Risoluzione massiva merge conflicts + File locking pattern  
**Prossimo:** Consolidamento da 2,560 a ~15 files

