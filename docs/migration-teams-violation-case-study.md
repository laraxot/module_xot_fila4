# Case Study: Violazione Filosofia Laraxot - Teams Migration

## Data
2025-11-30

## Caso Studio

Violazione identificata e corretta nel modulo User riguardo alla tabella `teams`.

## Problema Identificato

### Violazioni Multiple

1. **Duplicazione Migrazioni**: Esistevano DUE migrazioni per creare la stessa tabella:
   - `2023_01_01_000006_create_teams_table.php`
   - `2023_01_01_000007_create_teams_table.php`

2. **Migrazione Separata per Update**: Esisteva una migrazione separata per aggiungere una colonna:
   - `2025_05_16_221811_add_owner_id_to_teams_table.php`

### Violazione Principio Fondamentale

**Regola Laraxot**: "Una Tabella = Una Migrazione"

> Per modificare una tabella esistente:
> 1. **MODIFICARE** direttamente la migrazione originale
> 2. **AGGIORNARE** il timestamp nel nome del file
> 3. **NON creare** mai nuove migrazioni separate

## Soluzione Implementata

### Step 1: Identificazione Migrazione Originale

Scelta `2023_01_01_000006_create_teams_table.php` come migrazione originale (ha `protected string $table_name = 'teams';` esplicito).

### Step 2: Integrazione Modifica

Aggiunta colonna `owner_id` nella sezione `tableUpdate` della migrazione originale:

```php
// Owner ID - aggiunto per gestire il proprietario del team
if (! $this->hasColumn('owner_id')) {
    $table->uuid('owner_id')->nullable()->after('id');
}
```

### Step 3: Aggiornamento Timestamp

Rinominato file da `2023_01_01_000006_create_teams_table.php` a `2025_05_16_221811_create_teams_table.php` per riflettere l'ultima modifica significativa.

### Step 4: Eliminazione Duplicati

- ❌ Eliminato `2023_01_01_000007_create_teams_table.php` (duplicato)
- ❌ Eliminato `2025_05_16_221811_add_owner_id_to_teams_table.php` (violazione)

## Risultato Finale

✅ **Una sola migrazione** per la tabella `teams`:
- `2025_05_16_221811_create_teams_table.php`

Questa migrazione contiene:
- Creazione iniziale della tabella
- Tutte le modifiche evolutive (code, timestamps, owner_id)
- Controlli condizionali per idempotenza

## Principi Laraxot Rispettati

✅ **Single Source of Truth**: Una sola fonte di verità per la struttura di `teams`  
✅ **Evoluzione Organica**: La migrazione "cresce" nel tempo  
✅ **Anti-Frammentazione**: Nessuna micro-migrazione separata  
✅ **Coerenza Temporale**: Timestamp riflette ultima modifica significativa  
✅ **DRY**: Nessuna duplicazione di logica  
✅ **KISS**: Approccio semplice e diretto

## Lezioni Apprese

1. **Sempre verificare** se esiste già una migrazione per la tabella prima di crearne una nuova
2. **Modificare originale** invece di creare migrazioni separate
3. **Aggiornare timestamp** quando si modifica una migrazione esistente
4. **Eliminare duplicati** immediatamente quando identificati

## Riferimenti

- [Filosofia Migrazioni Laraxot](../../User/docs/laraxot-migration-philosophy.md)
- [Regole Aggiornamento Migrazioni](./migration-update-rules.md)
- [Principi Migrazioni UUID](../../Geo/docs_project/archive/principi_migrazioni_laraxot_uuid_polimorfismo.md)
- [Analisi Violazione Teams](../../User/docs/migration-teams-owner-id-violation-analysis.md)

