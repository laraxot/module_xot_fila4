<<<<<<< HEAD
=======
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
>>>>>>> 6a52563d6 (.)
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
>>>>>>> 6a52563d6 (.)
