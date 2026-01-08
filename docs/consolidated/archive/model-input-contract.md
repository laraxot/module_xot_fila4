<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
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
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
=======
>>>>>>> ba6c53070 (.)
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
<<<<<<< HEAD
- [Contracts Overview](./README.md) 
=======
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 399f46d3 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 399f46d3 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 17684f52 (.)
- [Contracts Overview](./README.md) 
=======
>>>>>>> cc7fb225 (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> ba6c53070 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
