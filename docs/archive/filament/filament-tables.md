# Gestione delle Tabelle in Filament

Questo documento definisce le linee guida per l'implementazione delle tabelle Filament nel progetto <nome progetto>, utilizzando il trait `HasXotTable`.

## Introduzione

Il trait `HasXotTable` è progettato per standardizzare e semplificare la configurazione delle tabelle Filament in tutte le risorse del progetto. Offre un insieme di metodi predefiniti e una struttura coerente per le tabelle.

## Uso Base

Per utilizzare il trait `HasXotTable` in una risorsa Filament:

```php
<?php

namespace Modules\Example\Filament\Resources;

use Filament\Resources\Resource;
use Modules\Xot\Filament\Traits\HasXotTable;

class ExampleResource extends Resource
{
    use HasXotTable;
    
    // ...
}
```

## Proprietà Principali

Il trait offre le seguenti proprietà configurabili:

- `public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;`: Definisce il layout predefinito per la tabella (LIST, GRID)
- `protected static bool $canReplicate = false;`: Abilita/disabilita la funzionalità di replica dei record
- `protected static bool $canView = true;`: Abilita/disabilita la funzionalità di visualizzazione dei record
- `protected static bool $canEdit = true;`: Abilita/disabilita la funzionalità di modifica dei record

## Metodi da Sovrascrivere

Per personalizzare il comportamento della tabella, è possibile sovrascrivere i seguenti metodi:

### Azioni

```php
// Azioni nell'intestazione della tabella
protected function getTableHeaderActions(): array
{
    return [
        'create' => Tables\Actions\CreateAction::make(),
        // Altre azioni...
    ];
}

// Azioni principali della risorsa
protected function getHeaderActions(): array
{
    return [
        'create' => Actions\CreateAction::make()
            ->icon('heroicon-o-plus'),
        // Altre azioni...
    ];
}

// Azioni per ogni record della tabella
protected function getTableActions(): array
{
    return [
        'view' => Tables\Actions\ViewAction::make()
            ->iconButton()
            ->tooltip(__('user::actions.view')),
        // Altre azioni...
    ];
}

// Azioni bulk per selezioni multiple
protected function getTableBulkActions(): array
{
    return [
        'delete' => DeleteBulkAction::make()
            ->icon('heroicon-o-trash'),
        // Altre azioni...
    ];
}
```

### Colonne

```php
// Colonne per il layout a lista
public function getListTableColumns(): array
{
    return [
        'id' => TextColumn::make('id')
            ->sortable(),
        'name' => TextColumn::make('name')
            ->searchable(),
        // Altre colonne...
    ];
}

// Colonne per il layout a griglia
public function getGridTableColumns(): array
{
    return [
        Stack::make([
            TextColumn::make('title'),
            TextColumn::make('description'),
        ]),
        // Altre stack o colonne...
    ];
}
```

### Filtri

```php
protected function getTableFilters(): array
{
    return [
        'active' => TernaryFilter::make('is_active')
            ->label(__('user::fields.is_active.label')),
        // Altri filtri...
    ];
}
```

## Metodi di Supporto

Il trait include vari metodi di supporto per configurare il comportamento della tabella:

- `protected function shouldShowAssociateAction(): bool`
- `protected function shouldShowAttachAction(): bool`
- `protected function shouldShowDetachAction(): bool`
- `protected function shouldShowReplicateAction(): bool`
- `protected function shouldShowViewAction(): bool`
- `protected function shouldShowEditAction(): bool`

## Controllo della Visibilità delle Azioni

Per controllare quali azioni sono disponibili nella tabella, puoi sovrascrivere i metodi 'should':

```php
protected function shouldShowViewAction(): bool
{
    // Logica personalizzata
    return static::$canView && Auth::user()->can('view', $this->getModel());
}
```

## Caratteristiche Avanzate

### Layout Personalizzato

Il trait supporta diversi layout di tabella tramite l'enumerazione `TableLayoutEnum`:

```php
public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;
```

### Ordinamento Predefinito

È possibile configurare l'ordinamento predefinito della tabella:

```php
protected function getDefaultTableSortColumn(): ?string
{
    return 'created_at';
}

protected function getDefaultTableSortDirection(): ?string
{
    return 'desc';
}
```

## Gestione degli Errori

Il trait include meccanismi di gestione degli errori, ad esempio:

- Notifica quando la tabella del database non esiste
- Configurazione di una tabella vuota quando non ci sono dati
- Controlli per assicurarsi che i metodi siano disponibili prima di chiamarli

## Note Importanti

- Assicurarsi di definire correttamente il metodo `getModelClass()` per garantire il corretto funzionamento del trait
- Utilizzare i metodi con i tipi di ritorno corretti come indicato nei PHPDoc
- Non definire azioni duplicate con lo stesso nome

## Collegamenti tra versioni di FILAMENT-TABLES.md
<<<<<<< HEAD
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 85cdef688 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 6ca989d8 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 2bad128c (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 358ba79a7 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> f8f76a284 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 5e6e0d054 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 0117b849c (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/project_docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/project_docs/FILAMENT-TABLES.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 091f883c (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 59259b43 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> aba62c408 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 5cb992cc6 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 3c8d62b79 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 60f0a1820 (.)
=======
* [FILAMENT-TABLES.md](../../../Xot/docs/filament/FILAMENT-TABLES.md)
* [FILAMENT-TABLES.md](../../../Xot/docs/FILAMENT-TABLES.md)
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)


## Collegamenti tra versioni di filament-tables.md
### Versione HEAD

* [filament-tables.md](filament/filament-tables.md)

### Versione Incoming

* [filament-tables.md](../filament-tables.md)

---


