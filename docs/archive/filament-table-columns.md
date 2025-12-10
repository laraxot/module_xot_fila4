<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
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
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)

**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)


**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).
=======
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
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> 43d67f21 (.)
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> b7ea1cd1 (.)
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> b7ea1cd1 (.)
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> 76bec91a (.)
=======
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).
>>>>>>> 55fe1822 (.)

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)

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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)

**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)

<<<<<<< HEAD
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)


=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 9f193021d (.)
<<<<<<< HEAD



**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).
**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/project_docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/project_docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../project_docs/filament-table-columns.md)





**Nota:** Nei moduli come Performance, la logica tabellare (colonne, filtri, azioni) va sempre nelle pagine (che estendono `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords`), non nelle Resource. Vedi esempio e motivazione nella [documentazione Performance](../../Performance/docs/filament-resources.md).

## Collegamenti
- [Esempio e Applicazione - Modulo User](../../../User/docs/filament/FILAMENT_TABLE_COLUMNS.md)
- [Regola Globale - Root Docs](../../../../docs/filament-table-columns.md)

=======
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
>>>>>>> e39b54ba7 (.)
=======
=======
>>>>>>> 90d386aa (.)
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
