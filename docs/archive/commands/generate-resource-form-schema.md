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
=======
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 6e7c1905 (.)
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
>>>>>>> 334816e8 (.)
<<<<<<< HEAD
>>>>>>> 317b552da (.)
=======
=======
>>>>>>> 9e42a036 (.)
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
=======
>>>>>>> 6ca989d8 (.)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
<<<<<<< HEAD
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
=======
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
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
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 6e7c1905 (.)
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 334816e8 (.)
<<<<<<< HEAD
>>>>>>> 317b552da (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 9e42a036 (.)
>>>>>>> 80bc07e81 (.)
=======
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 551c768c4 (.)
=======
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 414a4ffcb (.)
