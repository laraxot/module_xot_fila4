<<<<<<< HEAD
=======
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
>>>>>>> f8f76a284 (.)
# DIVIETO ASSOLUTO DI USARE ->label(), ->placeholder() e ->helperText()

## Regola Fondamentale Inviolabile

**In Laraxot PTVX è CATEGORICAMENTE VIETATO utilizzare i metodi `->label()`, `->placeholder()` e `->helperText()` nei componenti Filament.**

Questa regola **NON HA ECCEZIONI** e si applica a:
- Campi di form (`TextInput`, `Select`, ecc.)
- Colonne di tabelle (`TextColumn`, `IconColumn`, ecc.)
- Azioni (`Action`, `EditAction`, `DetachAction`, ecc.)
- Qualsiasi altro componente Filament

## Motivazione

Le traduzioni vengono gestite automaticamente dal LangServiceProvider che legge i file di traduzione strutturati del modulo. Questo permette:

1. **Coerenza** in tutta l'applicazione
2. **Centralizzazione** delle traduzioni
3. **Manutenibilità** migliorata
4. **Separazione** tra codice e contenuto

## Struttura Corretta delle Traduzioni

```php
// Modules/NomeModulo/lang/it/risorsa.php
return [
    'fields' => [
        'nome_campo' => [
            'label' => 'Etichetta Campo',
            'help' => 'Testo di aiuto',
            'placeholder' => 'Inserisci valore',
        ],
    ],
    'actions' => [
        'nome_azione' => [
            'label' => 'Etichetta Azione',
            'modal' => [
                'heading' => 'Titolo Modal',
            ],
            'success' => 'Messaggio di successo',
            'error' => 'Messaggio di errore',
        ],
    ],
];
```

## Esempi di Codice Corretto

```php
// Corretto ✅
TextInput::make('name')
    ->required();

// Corretto ✅
TextColumn::make('name')
    ->searchable()
    ->sortable();

// Corretto ✅
AttachAction::make()
    ->form(fn (AttachAction $action): array => [
        $action->getRecordSelect(),
        TextInput::make('role')
            ->required(),
    ]);
```

## Esempi di Codice ERRATO

```php
// ERRATO ❌
TextInput::make('name')
    ->label('Nome')
    ->placeholder('Inserisci nome')
    ->helperText('Questo è il nome');

// ERRATO ❌
TextColumn::make('name')
    ->label('Nome')
    ->searchable()
    ->sortable();

// ERRATO ❌
AttachAction::make()
    ->label('Associa')
    ->modalHeading('Associa elemento')
    ->form(fn (AttachAction $action): array => [
        $action->getRecordSelect(),
        TextInput::make('role')
            ->label('Ruolo')
            ->required(),
    ]);
```

## Procedure di Correzione

Se trovi codice che viola questa regola:

1. **Rimuovi immediatamente** tutti i metodi `->label()`, `->placeholder()` e `->helperText()`
2. **Assicurati** che i corrispondenti valori siano presenti nel file di traduzione
3. **Esegui i test** per verificare che le traduzioni funzionino correttamente
4. **Aggiorna la documentazione** se necessario

## Link a Risorse Correlate

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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/docs/filament/relation_managers.md)

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
*Ultimo aggiornamento: 3 Giugno 2025*
=======
=======
*Ultimo aggiornamento: 3 Giugno 2025*
=======
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
>>>>>>> f8f76a284 (.)
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

<<<<<<< HEAD
=======
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
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
<<<<<<< HEAD
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*

*Ultimo aggiornamento: 3 Giugno 2025*
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
*Ultimo aggiornamento: 3 Giugno 2025*
=======
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
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

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
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

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
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

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
- [Documentazione sulla struttura delle traduzioni](/laravel/Modules/Xot/project_docs/translation_rules.md)
- [Esempio pratico nel TeamsRelationManager](/laravel/Modules/User/project_docs/filament/teams_relation_manager.md)
- [Regole per RelationManager](/project_docs/filament/relation_managers.md)

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
>>>>>>> 7e4835b8e (.)
