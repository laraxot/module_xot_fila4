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
# HandlersRepository

## Descrizione
Questa classe gestisce il repository dei gestori di eccezioni nel sistema Laraxot, fornendo un meccanismo flessibile per registrare e recuperare handler personalizzati per diversi tipi di eccezioni.

## Struttura
```php
class HandlersRepository
{
    private array $reporters = [];
    private array $renderers = [];
    private array $consoleRenderers = [];

    public function addReporter(callable $reporter): int;
    public function addRenderer(callable $renderer): int;
    public function addConsoleRenderer(callable $renderer): int;
    public function getReportersByException(\Throwable $e): array;
    public function getRenderersByException(\Throwable $e): array;
    public function getConsoleRenderersByException(\Throwable $e): array;
}
```

## Funzionalità
1. Gestione centralizzata dei gestori di eccezioni
2. Supporto per:
   - Reporter personalizzati
   - Renderer per HTTP
   - Renderer per console
   - Filtri per tipo di eccezione
3. Integrazione con:
   - Sistema di logging
   - Notifiche
   - Webhook
   - Monitoring

## Metodi Principali

### Reporter
- `addReporter()`: Registra un nuovo reporter per le eccezioni
- `getReportersByException()`: Ottiene i reporter applicabili a una specifica eccezione

### Renderer HTTP
- `addRenderer()`: Registra un nuovo renderer per le risposte HTTP
- `getRenderersByException()`: Ottiene i renderer HTTP applicabili a una specifica eccezione

### Renderer Console
- `addConsoleRenderer()`: Registra un nuovo renderer per l'output console
- `getConsoleRenderersByException()`: Ottiene i renderer console applicabili a una specifica eccezione

## Best Practices Implementate
1. Utilizzo di strict types
2. Gestione efficiente delle collezioni di handler
3. Supporto per PHPStan livello 9
4. Pattern Repository
5. Dependency Injection

## Esempio di Utilizzo
```php
$repository = new HandlersRepository();

// Aggiunta di un reporter personalizzato
$repository->addReporter(function (\Throwable $e) {
    Log::error($e->getMessage());
});

// Aggiunta di un renderer HTTP
$repository->addRenderer(function (\Throwable $e) {
    return response()->json([
        'error' => $e->getMessage()
    ], 500);
});

// Aggiunta di un renderer console
$repository->addConsoleRenderer(function (\Throwable $e, $output) {
    $output->writeln("<error>{$e->getMessage()}</error>");
});
```

## Note di Sviluppo
- Registrare i handler all'avvio dell'applicazione
- Implementare filtri specifici per tipo di eccezione
- Mantenere l'ordine di priorità dei handler
- Gestire correttamente le eccezioni annidate

## Collegamenti
- [Exception Handling Guide](../EXCEPTION-HANDLING-GUIDE.md)
- [Error Formatters](../formatters/README.md)
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
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
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
- [Handlers Overview](./README.md) 
=======
>>>>>>> cc7fb225 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Handlers Overview](./README.md) 
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Handlers Overview](./README.md) 
>>>>>>> 5bd842e3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Handlers Overview](./README.md) 
>>>>>>> 03ceeac3 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Handlers Overview](./README.md) 
>>>>>>> 6e7c1905 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Handlers Overview](./README.md) 
>>>>>>> 334816e8 (.)
=======
- [PHPStan Level 9 Guide](../../PHPSTAN-LEVEL9-GUIDE.md)
- [Handlers Overview](./README.md) 
>>>>>>> 5a14301c (.)
