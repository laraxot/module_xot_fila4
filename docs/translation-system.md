<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 551c768c4 (.)
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
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
- [Documentazione Laravel Translations](https://laravel.com/project_docs/localization)
- [Filament Form Components](https://filamentphp.com/project_docs/forms)
- [Best Practices Filament](../project_docs/filament-best-practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
- [Schema Conventions](../project_docs/schema-conventions.md) 
<<<<<<< HEAD
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
- [Documentazione Laravel Translations](https://laravel.com/project_docs/localization)
- [Filament Form Components](https://filamentphp.com/project_docs/forms)
- [Best Practices Filament](../project_docs/filament-best-practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
- [Schema Conventions](../project_docs/schema-conventions.md) 
=======
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 551c768c4 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
- [Documentazione Laravel Translations](https://laravel.com/project_docs/localization)
- [Filament Form Components](https://filamentphp.com/project_docs/forms)
- [Best Practices Filament](../project_docs/filament-best-practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
- [Schema Conventions](../project_docs/schema-conventions.md) 
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
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
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
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
>>>>>>> 2f3197ab (.)
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
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
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
- [Documentazione Laravel Translations](https://laravel.com/docs/localization)
- [Filament Form Components](https://filamentphp.com/docs/forms)
- [Best Practices Filament](../docs/filament-best-practices.md)
=======
=======
=======
>>>>>>> 551c768c4 (.)
