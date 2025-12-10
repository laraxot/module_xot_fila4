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
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 90d386aa (.)
=======
>>>>>>> 3eee6f79 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
- [PHPStan level 10 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 399f46d3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 399f46d3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 17684f52 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 399f46d3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 399f46d3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 17684f52 (.)
- [Error Formatters Overview](../README.md) 
=======
>>>>>>> cc7fb225 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> e0b8ebe3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> cc52d333 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 90d386aa (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 3eee6f79 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 5a14301c (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 399f46d3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Error Formatters Overview](../README.md) 
>>>>>>> 17684f52 (.)
=======
>>>>>>> cc7fb225 (.)
