<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
========
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>>> 27c94d185 (.):docs/archive/contracts/error-formatter-contract.md
========
<<<<<<< HEAD
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/contracts/error-formatter-contract.md
========
<<<<<<< HEAD
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>>> b21979cb8 (.):docs/archive/contracts/error-formatter-contract.md
========
<<<<<<< HEAD
>>>>>>>> 780ca3113 (.):docs/archive/contracts/error-formatter-contract.md
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 6e7c1905 (.)
=======
>>>>>>> 334816e8 (.)
# ErrorFormatterContract

## Descrizione
Questa interfaccia definisce il contratto per i formattatori di errori nel sistema Laraxot.

## Struttura
```php
interface ErrorFormatterContract
{
    public function __construct(\Throwable $exception);
    
    /**
     * @return array<string, mixed>
     */
    public function format(): array;
}
```

## Funzionalità
1. Definizione del contratto per la formattazione degli errori
2. Standardizzazione dell'output degli errori
3. Supporto per:
   - Formattazione consistente
   - Gestione eccezioni
   - Metadati personalizzati

## Implementazioni
- `WebhookErrorFormatter`: Formatta gli errori per l'invio tramite webhook
- Altri formattatori personalizzati

## Best Practices
1. Utilizzo di strict types
2. Documentazione PHPDoc completa
3. Supporto per PHPStan livello 9
4. Conforme alle convenzioni Laraxot/<nome progetto>

## Collegamenti
- [Error Handling Guidelines](../EXCEPTION-HANDLING-GUIDE.md)
- [Error Formatters](../exceptions/formatters/README.md)
<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
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
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
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
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>> dc2130a7c (.):docs/archive/contracts/error-formatter-contract.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>>> 6342a02fe (.):docs/archive/contracts/error-formatter-contract.md
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>> 285375c74 (.):docs/archive/contracts/error-formatter-contract.md
========
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>>> 27c94d185 (.):docs/archive/contracts/error-formatter-contract.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/contracts/error-formatter-contract.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 6e7c1905 (.)
<<<<<<<< HEAD:docs/contracts/error-formatter-contract.md
>>>>>>>> b21979cb8 (.):docs/archive/contracts/error-formatter-contract.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 334816e8 (.)
>>>>>>>> 780ca3113 (.):docs/archive/contracts/error-formatter-contract.md
