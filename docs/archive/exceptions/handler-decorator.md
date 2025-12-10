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
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 6e7c1905 (.)
=======
>>>>>>> 334816e8 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
# HandlerDecorator

## Descrizione
Questa classe implementa il pattern Decorator per la gestione delle eccezioni in Laravel, fornendo funzionalità aggiuntive al gestore delle eccezioni predefinito.

## Struttura
```php
class HandlerDecorator implements ExceptionHandlerContract
{
    public function __construct(
        private readonly ExceptionHandlerContract $handler
    ) {}
}
```

## Funzionalità
1. Decorazione del gestore eccezioni standard di Laravel
2. Gestione personalizzata delle eccezioni
3. Supporto per:
   - Log dettagliati
   - Formattazione personalizzata
   - Notifiche
   - Webhook
4. Integrazione con sistemi di monitoraggio

## Best Practices Implementate
1. Utilizzo del pattern Decorator
2. Strict typing per type safety
3. Readonly properties per immutabilità
4. Gestione errori robusta
5. Supporto per PHPStan livello 9

## Metodi Principali
- `report`: Gestisce il reporting delle eccezioni
- `shouldReport`: Determina se un'eccezione deve essere riportata
- `render`: Renderizza la risposta per un'eccezione
- `renderForConsole`: Renderizza l'eccezione per l'output console

## Collegamenti
- [Exception Handling Guidelines](../EXCEPTION-HANDLING-GUIDE.md)
- [Logging Best Practices](../LOGGING-BEST-PRACTICES.md)
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
- [Error Formatters](./formatters/README.md) 
=======
>>>>>>> cc7fb225 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 5bd842e3 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 03ceeac3 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 6e7c1905 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 334816e8 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 5bd842e3 (.)
