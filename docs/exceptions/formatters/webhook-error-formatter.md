<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
========
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
>>>>>>>> 27c94d185 (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
========
<<<<<<< HEAD
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
========
<<<<<<< HEAD
>>>>>>>> b21979cb8 (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 6e7c1905 (.)
# WebhookErrorFormatter

## Descrizione
Questa classe formatta gli errori per l'invio tramite webhook, implementando le best practices di Laraxot per la gestione degli errori.

## Struttura
```php
class WebhookErrorFormatter implements ErrorFormatterContract
{
    public function format(\Throwable $e): array;
}
```

## Funzionalità
1. Formattazione standardizzata degli errori per webhook
2. Supporto per:
   - Stack trace dettagliato
   - Informazioni di contesto
   - Metadati personalizzati
   - Headers HTTP
3. Integrazione con sistemi di monitoraggio esterni

## Output Formattato
```json
{
    "error": {
        "message": "Descrizione dell'errore",
        "code": 500,
        "type": "Exception",
        "file": "path/to/file.php",
        "line": 123,
        "trace": [],
        "context": {},
        "metadata": {}
    }
}
```

## Best Practices Implementate
1. Utilizzo di strict types
2. Gestione sicura delle informazioni sensibili
3. Formattazione consistente
4. Supporto per PHPStan livello 9
5. Conforme alle convenzioni Laraxot/<nome progetto>

## Collegamenti
- [Error Handling Guidelines](../../EXCEPTION-HANDLING-GUIDE.md)
- [Webhook Integration](../../integrations/WEBHOOK-GUIDE.md)
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
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
- [PHPStan level 10 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
=======
>>>>>>>> 6342a02fe (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
- [Error Formatters Overview](../README.md) 
=======
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> c35986f4 (.)
- [Error Formatters Overview](../README.md) 
=======
>>>>>>> cc7fb225 (.)
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
>>>>>>> dc2130a7c (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
========
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
>>>>>>>> 6342a02fe (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
>>>>>>> 285375c74 (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
========
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
>>>>>>>> 27c94d185 (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
========
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<<< HEAD:docs/exceptions/formatters/webhook-error-formatter.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
========
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 6e7c1905 (.)
>>>>>>>> b21979cb8 (.):docs/archive/exceptions/formatters/webhook-error-formatter.md
