<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
# HasXotTable Trait per Filament in Laraxot PTVX

## Panoramica

Il trait `HasXotTable` è un componente fondamentale nell'architettura Filament di Laraxot PTVX, utilizzato sia in `XotBaseResource` che in `XotBaseRelationManager`. Fornisce funzionalità avanzate per la gestione delle tabelle, con particolare attenzione alla tipizzazione, traduzione e configurazione consistente.

## Funzionalità Principali

- **Gestione Layout**: Supporto per differenti layout di tabella (lista, griglia, calendario)
- **Azioni Standardizzate**: Implementazione unificata delle azioni di tabella
- **Traduzione Integrata**: Utilizzo del trait TransTrait per la gestione delle traduzioni
- **Gestione Automatica delle Tabelle**: Verifica dell'esistenza della tabella e notifiche
- **Controllo dei Permessi**: Configurazione semplificata dei permessi (view, edit, delete)

## Proprietà e Metodi Principali

### Proprietà

| Proprietà | Tipo | Default | Descrizione |
|-----------|------|---------|-------------|
| `$layoutView` | `TableLayoutEnum` | `TableLayoutEnum::LIST` | Layout della tabella |
| `$canReplicate` | `bool` | `false` | Se è possibile replicare i record |
| `$canView` | `bool` | `true` | Se è possibile visualizzare i record |
| `$canEdit` | `bool` | `true` | Se è possibile modificare i record |

### Metodi

| Metodo | Tipo di Ritorno | Descrizione |
|--------|-----------------|-------------|
| `getTableHeaderActions()` | `array` | Azioni nell'header della tabella |
| `getTableActions()` | `array` | Azioni per ogni record |
| `getTableBulkActions()` | `array` | Azioni bulk sulla tabella |
| `table(Table $table)` | `Table` | Configurazione base della tabella |
| `configureViewAction()` | `Actions\ViewAction` | Configura l'azione di visualizzazione |
| `configureEditAction()` | `Actions\EditAction` | Configura l'azione di modifica |
| `configureDeleteAction()` | `Actions\DeleteAction` | Configura l'azione di eliminazione |
| `configureDuplicateAction()` | `Actions\ReplicateAction` | Configura l'azione di duplicazione |
| `getSearchableColumns()` | `array` | Colonne ricercabili |
| `hasSearch()` | `bool` | Se la ricerca è abilitata |

## Utilizzo Corretto con XotBaseRelationManager

Quando si estende `XotBaseRelationManager`, il trait `HasXotTable` è già incluso, quindi non è necessario includerlo nuovamente. Ecco come utilizzarne correttamente le funzionalità:

### 1. Definizione delle Colonne

```php
/**
 * Definisce le colonne della tabella.
 *
 * @return array<int, \Filament\Tables\Columns\Column>
 */
public function getTableColumns(): array
{
    return [
        TextColumn::make('id'),
        TextColumn::make('name')
            ->label(trans('module::relation.fields.name.label'))
            ->searchable(),
        // Altre colonne...
    ];
}
```

### 2. Personalizzazione delle Azioni

```php
/**
 * Personalizza le azioni disponibili per ogni record.
 *
 * @return array<\Filament\Tables\Actions\Action>
 */
public function getTableActions(): array
{
    return [
        Tables\Actions\ViewAction::make()
            ->label(trans('module::relation.actions.view.label')),
        // Sovrascrive l'implementazione di HasXotTable
    ];
}
```

### 3. Abilitazione/Disabilitazione di Funzionalità

```php
/**
 * Constructor della classe.
 */
public function __construct()
{
    parent::__construct();
    
    // Disabilita la replica dei record
    static::$canReplicate = false;
    
    // Disabilita la visualizzazione dei record
    static::$canView = false;
}
```

### 4. Configurazione del Layout

```php
/**
 * Configura il layout della tabella.
 *
 * @return void
 */
protected function setUp(): void
{
    parent::setUp();
    
    // Imposta il layout a griglia
    $this->layoutView = TableLayoutEnum::GRID;
}
```

## Integrazione con Traduzioni

Il trait `HasXotTable` utilizza il trait `TransTrait` per la gestione delle traduzioni. Seguire queste linee guida:

```php
// Utilizzo corretto delle traduzioni
Tables\Actions\EditAction::make()
    ->label(trans('module::relation.actions.edit.label'))

// Esempio di file di traduzione (module/lang/it/relation.php)
return [
    'actions' => [
        'edit' => [
            'label' => 'Modifica',
        ],
    ],
]
```

## Best Practices per l'Utilizzo

1. **Non Sovrascrivere il Metodo table()**:
   Il metodo `table()` nel trait `HasXotTable` contiene logica importante. Utilizzare invece `getTableColumns()`, `getTableActions()`, ecc.

2. **Utilizzare Traduzioni per Tutte le Label**:
   ```php
   TextColumn::make('nome')
       ->label(trans('module::relation.fields.nome.label'))
   ```

3. **Tipizzazione Esplicita**:
   ```php
   /**
    * @return array<int, \Filament\Tables\Columns\Column>
    */
   public function getTableColumns(): array
   ```

4. **Rispettare la Struttura delle Traduzioni**:
   Organizzare le traduzioni in sezioni come `fields`, `actions`, `filters`.

5. **Mantenere la Coerenza Visiva**:
   Utilizzare le stesse icone, colori e layout in tutte le tabelle per una UX coerente.

## Compatibilità con PHPStan

Per garantire la compatibilità con PHPStan livello 9, seguire queste regole:

1. Utilizzare annotazioni generiche per gli array:
   ```php
   /**
    * @return array<int, \Filament\Tables\Columns\Column>
    */
   ```

2. Dichiarare tipi di proprietà:
   ```php
   public TableLayoutEnum $layoutView;
   ```

3. Documentare metodi con PHPDoc completi, inclusi i tipi di ritorno.

## Esempio Completo di RelationManager

```php
<?php

declare(strict_types=1);

namespace Modules\NomeModulo\Filament\Resources\EsempioResource\RelationManagers;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class DatiRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'dati';
    
    protected static ?string $recordTitleAttribute = 'nome';
    
    /**
     * Definisce le colonne della tabella.
     *
     * @return array<int, \Filament\Tables\Columns\Column>
     */
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('nome')
                ->label(trans('nomemodulo::relation.fields.nome.label'))
                ->searchable(),
            TextColumn::make('created_at')
                ->label(trans('nomemodulo::relation.fields.created_at.label'))
                ->dateTime(),
        ];
    }
    
    /**
     * Definisce lo schema del form.
     *
     * @return array<int, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            TextInput::make('nome')
                ->label(trans('nomemodulo::relation.fields.nome.label'))
                ->required(),
        ];
    }
}
```

## Collegamenti alla Documentazione Correlata

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 551c768c4 (.)
- [XotBaseRelationManager](/laravel/Modules/Xot/docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/docs/filament/resources.md)

<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 551c768c4 (.)
*Ultimo aggiornamento: 3 Giugno 2025*
=======
=======
*Ultimo aggiornamento: 3 Giugno 2025*
=======
<<<<<<< HEAD
=======
*Ultimo aggiornamento: 3 Giugno 2025*
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
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

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
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
<<<<<<< HEAD
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
=======
>>>>>>> 414a4ffcb (.)
*Ultimo aggiornamento: 3 Giugno 2025*
=======
=======
*Ultimo aggiornamento: 3 Giugno 2025*
=======
<<<<<<< HEAD
>>>>>>> 43d67f21 (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 399f46d3 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> d86d643a (.)
=======
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 43d67f21 (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 17684f52 (.)
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 472bd9dc (.)
=======
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
- [XotBaseRelationManager](/laravel/Modules/Xot/project_docs/filament/relation_managers.md)
- [Regole di Traduzione](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Filament Resources](/laravel/Modules/Xot/project_docs/filament/resources.md)

*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
>>>>>>> e39b54ba7 (.)
=======
=======
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 90d386aa (.)
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
=======
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
