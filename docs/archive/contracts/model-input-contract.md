<<<<<<< HEAD
=======
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
>>>>>>> 317b552da (.)
# ModelInputContract

## Descrizione
Questa interfaccia estende `ModelContract` aggiungendo funzionalità specifiche per i modelli che rappresentano input di form nel sistema Laraxot.

## Struttura
```php
interface ModelInputContract extends ModelContract
{
    public function getInputType(): string;
    public function getValidationRules(): array;
    public function getDefaultValue(): mixed;
    public function getPlaceholder(): ?string;
    public function getHelpText(): ?string;
    public function isRequired(): bool;
    public function isReadonly(): bool;
    public function isDisabled(): bool;
    public function getOptions(): array;
    public function getAttributes(): array;
}
```

## Funzionalità
1. Gestione degli input di form
2. Supporto per:
   - Tipi di input personalizzati
   - Regole di validazione
   - Valori predefiniti
   - Placeholder e testi di aiuto
   - Stati dell'input (required, readonly, disabled)
   - Opzioni per select e radio
3. Integrazione con:
   - Filament Forms
   - Laravel Validation
   - Spatie Data

## Implementazioni
- `TextInput`: Input di testo base
- `SelectInput`: Input di tipo select
- `CheckboxInput`: Input di tipo checkbox
- Altri tipi di input personalizzati

## Best Practices Implementate
1. Utilizzo di strict types
2. Documentazione PHPDoc completa
3. Supporto per PHPStan livello 9
4. Conforme alle convenzioni Laraxot/<nome progetto>
5. Gestione null-safety

## Collegamenti
- [Form Guidelines](../forms/README.md)
- [Input Components](../components/FORM-COMPONENTS.md)
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
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
=======
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> c35986f4 (.)
- [Contracts Overview](./README.md) 
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
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
- [Contracts Overview](./README.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 6e7c1905 (.)
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 334816e8 (.)
>>>>>>> 317b552da (.)
