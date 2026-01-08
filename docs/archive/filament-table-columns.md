<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
# Regola Generale: Metodo getTableColumns per Filament Table (Xot)

## Regola
Tutte le Filament Table (Pages, RelationManagers, ecc.) nei moduli devono usare il metodo `getTableColumns` per definire le colonne della tabella.

- **Non usare più:** `getListTableColumns`
- **Usare sempre:** `getTableColumns`

## Motivazione
- Uniformità con lo standard Filament
- Migliore leggibilità e manutenibilità
- Facilità di upgrade e adozione di nuove versioni

## Esempio
```php
// Corretto
public function getTableColumns(): array
{
    return [ ... ];
}
```

## Applicazione
- Obbligatorio per tutti i moduli
- Ogni modulo deve documentare l'adozione nella sua docs/
- Aggiornare override, chiamate e test

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> 43d67f21 (.)
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> b7ea1cd1 (.)

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> 43d67f21 (.)

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
## Nota storica: correzione XotBaseManageRelatedRecords

- La classe XotBaseManageRelatedRecords è stata aggiornata per rispettare PHPStan livello 10.
- Tutti i metodi pubblici sono ora tipizzati e documentati con PHPDoc.
- Uso sistematico di Assert e fallback robusti.
- Vietato l'uso di return impliciti, mixed o cast forzati.
- Il metodo per le colonne della tabella è sempre getTableColumns.

**Collegamento:** Vedi anche [filament_components.md](./filament_components.md)

---

**Ultimo aggiornamento:** 2025-05-13

**Link bidirezionale:** Aggiornare anche la root docs e la docs dei moduli coinvolti.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> cc7fb225 (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> ba6c53070 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
