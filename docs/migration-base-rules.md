# MIGRATION BASE RULES

## Regola universale
- Usa sempre anonymous class: `return new class extends XotBaseMigration { ... }`
- Non implementare mai il metodo `down` se estendi XotBaseMigration
- Per aggiungere colonne a tabelle esistenti:
  - Copia la migrazione originale, aggiorna il timestamp
  - Aggiungi la colonna in `tableUpdate` solo se non esiste (`if (! $this->hasColumn(...))`)
  - Aggiorna sempre questa doc, la root docs e la doc del modulo

## Motivazione
- Prevenire conflitti di nomi
- Garantire rollback sicuro
- Compliance PHPStan livello 10
- Facilitare troubleshooting e ripresa lavoro

## Checklist rapida
- [ ] Anonymous class
- [ ] Solo metodo `up`
- [ ] Update solo se colonna non esiste
- [ ] Aggiorna sempre la doc

## Cross-reference
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Update migrazioni Performance](../../Performance/project_docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../project_docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 85cdef688 (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 6ca989d8 (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 2bad128c (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 358ba79a7 (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> f8f76a284 (.)
=======
- [Update migrazioni Performance](../../Performance/project_docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../project_docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
- [Update migrazioni Performance](../../Performance/project_docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../project_docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 59259b43 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> aba62c408 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Update migrazioni Performance](../../Performance/docs/migration_update_rules.md)
- [Root MODULE_NAMESPACE_RULES.md](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)

---

## Backlink
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Regole update migrazioni Performance](../../Performance/project_docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../project_docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 85cdef688 (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 6ca989d8 (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 2bad128c (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 358ba79a7 (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> f8f76a284 (.)
=======
- [Regole update migrazioni Performance](../../Performance/project_docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../project_docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
- [Regole update migrazioni Performance](../../Performance/project_docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../project_docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 59259b43 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> aba62c408 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Regole update migrazioni Performance](../../Performance/docs/migration_update_rules.md) ← questa doc è sempre aggiornata
- [Ripresa lavoro migrazioni in root](../../../docs/MODULE_NAMESPACE_RULES.md)
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)

Ultimo aggiornamento: 2025-05-13

---

## Regola generale: Nome univoco per Action custom Filament

- Ogni Action custom Filament deve avere un nome univoco passato a `make()` o impostato come default.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 85cdef688 (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 6ca989d8 (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 67be6ac0 (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 59259b43 (.)
=======
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 88ee35c4e (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> aba62c408 (.)
=======
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 92cca5ade (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- Vedi esempio e motivazione in [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> 5cb992cc6 (.)
=======
=======
- Vedi esempio e motivazione in [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md#2025-05-14-regola-nome-univoco-per-headeraction-filament)
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)

---

**Backlink modulo Performance:**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
- [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 85cdef688 (.)
- [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md)

---

## Pattern definitivo HeaderAction custom Filament 3

<<<<<<< HEAD
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> 85cdef688 (.)
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
- [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md)
<<<<<<< HEAD
=======
- [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Modules/Performance/docs/azioni_organizzativa.md](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)

---

## Pattern definitivo HeaderAction custom Filament 4

- Segui SEMPRE il pattern documentato in [Modules/Performance/docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 62cc8443 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
- [Modules/Performance/project_docs/azioni_organizzativa.md](../../Performance/project_docs/azioni_organizzativa.md)

---

## Pattern definitivo HeaderAction custom Filament 3

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88ee35c4e (.)
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> 92cca5ade (.)
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
- Segui SEMPRE il pattern documentato in [Modules/Performance/docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
- Segui SEMPRE il pattern documentato in [Modules/Performance/project_docs/azioni_organizzativa.md#2025-05-14-pattern-definitivo-headeraction-custom-filament-3]
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
- Il pattern Filament 2 (override statico di make) è obsoleto e genera errori: non usarlo mai nei nuovi moduli o refactoring.

---

## Regola colonne tabellari Filament (2025-05-14)

- Le colonne delle tabelle Filament devono essere derivate solo dal modello e dalla migrazione.
- La UI può mostrare solo un sottoinsieme delle colonne, secondo le regole documentate in Performance.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 85cdef688 (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 6ca989d8 (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 67be6ac0 (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 59259b43 (.)
=======
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 88ee35c4e (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> aba62c408 (.)
=======
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 92cca5ade (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- Ogni modifica va documentata in [Modules/Performance/docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> 5cb992cc6 (.)
=======
=======
- Ogni modifica va documentata in [Modules/Performance/project_docs/list_table_columns_analysis.md#organizzativacatcoeff]
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)

---

## Regola estensione modelli aggregati (2025-05-15)

- I modelli aggregati e di totali del modulo Performance (es. OrganizzativaTotValutatoreId) devono estendere il `BaseModel` locale (`Modules\Performance\Models\BaseModel`), **NON** `Modules\Xot\Models\BaseModel`.
- **Motivazione**: isolamento, override locale, necessità di personalizzazione e compatibilità con logiche specifiche del modulo Performance.
- **Pattern**: i modelli aggregati e di totali in Performance estendono sempre il BaseModel locale.
- **Anti-pattern**: estendere `Modules\Xot\Models\BaseModel` o centralizzare logiche che devono restare locali.
- **Memoria storica**: rollback della regola il 2025-05-15, documentato in Performance/docs/organizzativa-models.md e qui. Precedente regola (2025-05-14) annullata per esigenze di override e compatibilità.
- Ogni violazione va documentata e corretta anche nella root docs.
- Vedi dettaglio e memoria storica in [Modules/Performance/docs/organizzativa-models.md](../../Performance/docs/organizzativa-models.md#organizzativatotvalutatoreid-regola-di-estensione)
- [docs/links.md root](../../../docs/links.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 7e4835b8e (.)
- **Memoria storica**: rollback della regola il 2025-05-15, documentato in Performance/project_docs/organizzativa-models.md e qui. Precedente regola (2025-05-14) annullata per esigenze di override e compatibilità.
- Ogni violazione va documentata e corretta anche nella root docs.
- Vedi dettaglio e memoria storica in [Modules/Performance/project_docs/organizzativa-models.md](../../Performance/project_docs/organizzativa-models.md#organizzativatotvalutatoreid-regola-di-estensione)
- [docs/links.md root](../../../project_docs/links.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)

> ⚠️ **Warning**: Estendere Xot\BaseModel può causare override indesiderati, perdita di flessibilità e problemi di compatibilità con logiche locali. Seguire sempre la regola sopra per tutti i modelli di totali/aggregati in Performance.

---
