<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
========
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
>>>>>>>> 27c94d185 (.):docs/archive/commands/generate-resource-form-schema.md
========
<<<<<<< HEAD
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/commands/generate-resource-form-schema.md
========
<<<<<<< HEAD
>>>>>>>> b21979cb8 (.):docs/archive/commands/generate-resource-form-schema.md
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 6e7c1905 (.)
# GenerateResourceFormSchemaCommand

## Descrizione
Questo comando genera lo schema del form per una risorsa Filament, utilizzando le best practices di Laraxot e supportando la validazione PHPStan.

## Utilizzo
```bash
php artisan xot:generate-resource-form-schema {resource} {--output=}
```

### Parametri
- `resource`: Il nome della risorsa Filament (obbligatorio)
- `--output`: Il percorso di output per il file schema (opzionale)

## Funzionalità
1. Generazione automatica dello schema del form
2. Supporto per:
   - Campi di input standard
   - Relazioni
   - Validazione
   - Componenti personalizzati
3. Integrazione con:
   - Filament Forms
   - Spatie Data
   - Laravel Validation

## Schema Generato
```php
use Filament\Forms\Components;
use Spatie\LaravelData\Optional;

return [
    'schema' => [
        Components\TextInput::make('name')
            ->required()
            ->maxLength(255),
        Components\Select::make('status')
            ->options([
                'draft' => 'Bozza',
                'published' => 'Pubblicato',
            ])
            ->required(),
        // ...
    ],
];
```

## Best Practices
1. Utilizzo di strict types
2. Gestione errori robusta
3. Supporto per PHPStan livello 9
4. Conforme alle convenzioni Laraxot/<nome progetto>
5. Documentazione inline completa

## Collegamenti
- [Filament Best Practices](../filament-best-practices.md)
- [Form Components](../COMPONENTI_PERSONALIZZATI.md)
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
========
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
=======
>>>>>>>> 6342a02fe (.):docs/archive/commands/generate-resource-form-schema.md
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
=======
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
>>>>>>> dc2130a7c (.):docs/archive/commands/generate-resource-form-schema.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
>>>>>>>> 6342a02fe (.):docs/archive/commands/generate-resource-form-schema.md
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
>>>>>>> 285375c74 (.):docs/archive/commands/generate-resource-form-schema.md
========
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
>>>>>>>> 27c94d185 (.):docs/archive/commands/generate-resource-form-schema.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<<< HEAD:docs/commands/generate-resource-form-schema.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/commands/generate-resource-form-schema.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 6e7c1905 (.)
>>>>>>>> b21979cb8 (.):docs/archive/commands/generate-resource-form-schema.md
