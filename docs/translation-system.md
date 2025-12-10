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
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
>>>>>>> laraxot/develop
# Sistema di Traduzione 

## Regola Fondamentale: NO ->label()

La regola più importante del sistema di traduzione è:

**MAI utilizzare il metodo `->label()` nei componenti Filament.**

### Perché Non Usare ->label()?

1. **Bypass del Sistema di Traduzione**
   - `->label()` bypassa il sistema di traduzione automatico
   - Rende impossibile la gestione centralizzata delle traduzioni
   - Crea inconsistenze nell'interfaccia utente

2. **Violazione del Single Responsibility Principle**
   - Le etichette dovrebbero essere gestite dal sistema di traduzione
   - I componenti dovrebbero occuparsi solo della struttura
   - La traduzione è una responsabilità separata

3. **Problemi di Manutenibilità**
   - Etichette hardcoded sono difficili da modificare
   - Impossibile cambiare lingua dinamicamente
   - Duplicazione di testo in più punti

## Come Funziona il Sistema di Traduzione

### 1. LangServiceProvider

Il `LangServiceProvider` gestisce automaticamente le traduzioni:

```php
namespace Modules\Lang\Providers;

class LangServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Intercetta la creazione dei componenti Filament
        // Applica automaticamente le traduzioni
        // Gestisce il fallback delle lingue
    }
}
```

### 2. Struttura dei File di Traduzione

```php
// Modules/ModuleName/lang/it/resource.php
return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'helper_text' => 'Nome completo',
        ],
    ],
];
```

### 3. Convenzioni di Naming

Le chiavi di traduzione vengono generate automaticamente seguendo questa struttura:
- `module_name::resource_name.fields.field_name.label`
- `module_name::resource_name.fields.field_name.placeholder`
- `module_name::resource_name.fields.field_name.helper_text`

## Implementazione Corretta

### ❌ ERRATO: Uso di ->label()

```php
// NON FARE QUESTO
TextColumn::make('name')
    ->label('Nome')
    ->searchable();

Select::make('status')
    ->label('Stato')
    ->options([...]);
```

### ✅ CORRETTO: Senza ->label()

```php
// FARE QUESTO
TextColumn::make('name')
    ->searchable();

Select::make('status')
    ->options([...]);
```

## File di Traduzione

### 1. Struttura Base

```php
// Modules/User/lang/it/users.php
return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'helper_text' => 'Nome completo dell\'utente',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'email',
            'helper_text' => 'Indirizzo email valido',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Nuovo',
            'tooltip' => 'Crea nuovo record',
        ],
    ],
    'messages' => [
        'success' => [
            'created' => 'Record creato con successo',
        ],
    ],
];
```

### 2. Organizzazione dei File

```
Modules/
  ModuleName/
    lang/
      it/
        resource.php
        forms.php
        messages.php
      en/
        resource.php
        forms.php
        messages.php
```

## Migrazione da ->label()

### 1. Identificare i File da Correggere

```bash

# Trova tutti i file PHP che usano ->label()
grep -r "->label(" . --include="*.php"
```

### 2. Creare i File di Traduzione

```php
// Prima di rimuovere ->label(), creare il file di traduzione
return [
    'fields' => [
        'field_name' => [
            'label' => 'Etichetta Precedente',
        ],
    ],
];
```

### 3. Rimuovere ->label()

```php
// Prima
TextColumn::make('name')
    ->label('Nome')
    ->searchable();

// Dopo
TextColumn::make('name')
    ->searchable();
```

## Best Practices

1. **Mai Usare ->label()**
   - Nessuna eccezione a questa regola
   - Usare sempre i file di traduzione

2. **Struttura Coerente**
   - Mantenere la stessa struttura in tutti i moduli
   - Seguire le convenzioni di naming

3. **File di Traduzione Completi**
   - Includere tutte le stringhe necessarie
   - Aggiungere traduzioni per tutte le lingue supportate

4. **Documentazione**
   - Commentare i file di traduzione
   - Mantenere un README aggiornato

## Troubleshooting

### 1. Etichetta Non Appare

**Problema**: L'etichetta non viene visualizzata

**Soluzione**:
1. Verificare il path del file di traduzione
2. Controllare la struttura delle chiavi
3. Pulire la cache delle traduzioni

```bash
php artisan cache:clear
php artisan view:clear
```

### 2. Etichetta Sbagliata

**Problema**: Viene mostrata l'etichetta sbagliata

**Soluzione**:
1. Verificare la chiave di traduzione generata
2. Controllare il fallback della lingua
3. Verificare la priorità delle traduzioni

## Riferimenti

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
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
- [Documentazione Laravel Translations](https://laravel.com/project_docs/localization)
- [Filament Form Components](https://filamentphp.com/project_docs/forms)
- [Best Practices Filament](../project_docs/filament-best-practices.md)
- [Schema Conventions](../project_docs/schema-conventions.md) 
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 6cba4fe (.)
=======
>>>>>>> laraxot/develop
- [Documentazione Laravel Translations](https://laravel.com/project_docs/localization)
- [Filament Form Components](https://filamentphp.com/project_docs/forms)
- [Best Practices Filament](../project_docs/filament-best-practices.md)
- [Schema Conventions](../project_docs/schema-conventions.md) 
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> laraxot/develop
- [Documentazione Laravel Translations](https://laravel.com/project_docs/localization)
- [Filament Form Components](https://filamentphp.com/project_docs/forms)
- [Best Practices Filament](../project_docs/filament-best-practices.md)
- [Schema Conventions](../project_docs/schema-conventions.md) 
<<<<<<< HEAD
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> c35986f4 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 71f31700 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5bd842e3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 03ceeac3 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5bd842e3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 03ceeac3 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 71f31700 (.)
>>>>>>> laraxot/develop
