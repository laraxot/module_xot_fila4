# HasXotTable Trait

Il trait `HasXotTable` fornisce funzionalità avanzate per la gestione delle tabelle in Filament, con supporto per traduzioni e una struttura ottimizzata.

## Caratteristiche Principali

- Gestione layout tabella (List/Grid)
- Azioni di intestazione personalizzabili
- Supporto per associazioni e relazioni
- Filtri e ricerca avanzati
- Azioni in bulk configurabili
- Supporto multilingua integrato

## Configurazione Base

```php
use Modules\Xot\Filament\Traits\HasXotTable;

class YourResource extends Resource
{
    use HasXotTable;

    protected static bool $canReplicate = false;
    protected static bool $canView = true;
    protected static bool $canEdit = true;
}
```

## Metodi Principali

### Azioni di Intestazione
```php
public function getTableHeaderActions(): array
{
    // Definisce le azioni disponibili nell'intestazione della tabella
    // - Create
    // - Associate (opzionale)
    // - Attach (opzionale)
    // - Layout Toggle
}
```

### Colonne
```php
public function getListTableColumns(): array
{
    // Definisce le colonne per il layout lista
}

public function getGridTableColumns(): array
{
    // Definisce le colonne per il layout griglia
}
```

### Filtri
```php
public function getTableFilters(): array
{
    // Definisce i filtri disponibili
}

public function getTableFiltersFormColumns(): int
{
    // Definisce il numero di colonne nel form dei filtri
}
```

## Best Practices

1. **Personalizzazione delle Azioni**
   - Utilizzare i metodi `shouldShow*Action()` per controllare la visibilità delle azioni
   - Implementare azioni personalizzate estendendo le classi base di Filament

2. **Gestione del Layout**
   - Utilizzare `TableLayoutEnum` per definire il layout predefinito
   - Implementare layout responsivi con Stack per il layout griglia

3. **Ottimizzazione delle Performance**
   - Definire indici appropriati per le colonne di ricerca
   - Utilizzare eager loading per le relazioni visualizzate

4. **Internazionalizzazione**
   - Utilizzare il sistema di traduzioni di Laravel
   - Definire le chiavi di traduzione in modo coerente

## Eventi e Hook

- `configureEmptyTable`: Personalizza la tabella quando è vuota
- `notifyTableMissing`: Gestisce la notifica quando la tabella non esiste
- `getModelClass`: Recupera la classe del modello associato

## Dipendenze

- Filament Tables
- Filament Actions
- Webmozart Assert
- Modules UI

## Note di Sviluppo

- Il trait supporta sia layout lista che griglia
- Le azioni di bulk sono configurabili tramite `getTableBulkActions()`
- Il sistema di ricerca è personalizzabile tramite `getSearchableColumns()`

## Link Correlati

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
<<<<<<< HEAD
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
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
>>>>>>> 85cdef688 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
<<<<<<< HEAD
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 2bad128c (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 0117b849c (.)
=======
- [Documentazione Filament](../../../project_docs/filament/index.md)
- [Gestione Tabelle](../../../project_docs/filament/tables.md)
- [Azioni Personalizzate](../../../project_docs/filament/actions.md) 
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 091f883c (.)
=======
=======
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 59259b43 (.)
=======
=======
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> aba62c408 (.)
=======
=======
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 5cb992cc6 (.)
=======
=======
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 3c8d62b79 (.)
=======
=======
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 60f0a1820 (.)
=======
=======
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 5df5c7505 (.)
=======
- [Documentazione Filament](../../../docs/filament/index.md)
- [Gestione Tabelle](../../../docs/filament/tables.md)
- [Azioni Personalizzate](../../../docs/filament/actions.md) 
>>>>>>> 80bc07e81 (.)
