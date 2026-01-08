<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
========
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
>>>>>>>> 27c94d185 (.):docs/archive/exceptions/handler-decorator.md
========
<<<<<<< HEAD
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/exceptions/handler-decorator.md
========
<<<<<<< HEAD
>>>>>>>> b21979cb8 (.):docs/archive/exceptions/handler-decorator.md
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 6e7c1905 (.)
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
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
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
>>>>>>>> 6342a02fe (.):docs/archive/exceptions/handler-decorator.md
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
<<<<<<< HEAD:docs/exceptions/handler-decorator.md
- [Error Formatters](./formatters/README.md) 
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
- [Error Formatters](./formatters/README.md) 
=======
>>>>>>> cc7fb225 (.)
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
>>>>>>> dc2130a7c (.):docs/archive/exceptions/handler-decorator.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD:docs/exceptions/handler-decorator.md
>>>>>>>> 6342a02fe (.):docs/archive/exceptions/handler-decorator.md
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
>>>>>>> 285375c74 (.):docs/archive/exceptions/handler-decorator.md
========
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
>>>>>>>> 27c94d185 (.):docs/archive/exceptions/handler-decorator.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<<< HEAD:docs/exceptions/handler-decorator.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/exceptions/handler-decorator.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters](./formatters/README.md) 
>>>>>>> 6e7c1905 (.)
>>>>>>>> b21979cb8 (.):docs/archive/exceptions/handler-decorator.md
