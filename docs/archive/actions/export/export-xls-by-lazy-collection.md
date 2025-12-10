# ExportXlsByLazyCollection

## Descrizione
Questa action esporta una `LazyCollection` in formato Excel utilizzando il pacchetto Maatwebsite/Laravel-Excel. È progettata per gestire grandi set di dati in modo efficiente grazie all'utilizzo delle lazy collections.

## Struttura
```php
class ExportXlsByLazyCollection
{
    use QueueableAction;

    public function execute(
        LazyCollection $collection,
        string $filename = 'test.xlsx',
        array $fields = [],
    ): BinaryFileResponse;
}
```

## Funzionalità
1. Esportazione di dati in formato Excel
2. Supporto per:
   - Lazy loading dei dati
   - Gestione efficiente della memoria
   - Personalizzazione dei campi da esportare
   - Nomi file personalizzati
3. Integrazione con:
   - Maatwebsite/Laravel-Excel
   - Spatie Queueable Actions
   - Laravel Collections

## Parametri
- `collection`: LazyCollection - La collezione di dati da esportare
- `filename`: string - Nome del file Excel (default: 'test.xlsx')
- `fields`: array<int, string> - Lista dei campi da includere nell'export

## Return Value
- `BinaryFileResponse` - Risposta HTTP contenente il file Excel

## Best Practices Implementate
1. Utilizzo di strict types
2. Gestione efficiente della memoria con lazy collections
3. Supporto per code tramite QueueableAction
4. Validazione e conversione dei campi
5. Supporto per PHPStan livello 9

## Esempio di Utilizzo
```php
$action = new ExportXlsByLazyCollection();

$collection = User::cursor(); // LazyCollection di utenti
$fields = ['id', 'name', 'email'];

$response = $action->execute(
    collection: $collection,
    filename: 'users.xlsx',
    fields: $fields
);

return $response; // Scarica il file Excel
```

## Note di Sviluppo
- Utilizzare sempre lazy collections per grandi set di dati
- Specificare i campi da esportare per ottimizzare le performance
- Considerare l'utilizzo di code per export di grandi dimensioni
- Gestire correttamente la memoria con chunk se necessario

## ExportXlsByView

> **Nota:** Anche la action `ExportXlsByView` segue le stesse regole di tipizzazione e best practice di questa action. In particolare, il mapping dei campi da esportare è stato corretto per rispettare le regole Laraxot/<nome progetto> e PHPStan livello 9, utilizzando controllo esplicito del tipo invece di cast diretto.

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
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 85cdef688 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6ca989d8 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 091f883c (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 67be6ac0 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 59259b43 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 88ee35c4e (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> aba62c408 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 92cca5ade (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 5cb992cc6 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6a52563d6 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 3c8d62b79 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 317b552da (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 60f0a1820 (.)

## Collegamenti
- [Laravel Excel Documentation](https://docs.laravel-excel.com)
- [Spatie Queueable Action](../traits/QUEUEABLE-ACTION.md)
- [Performance Guidelines](../PERFORMANCE-GUIDELINES.md)
- [Actions Overview](./README.md) 
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
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 85cdef688 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [PHPStan Fixes Summary](../../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 091f883c (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> ecd5ec32 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 59259b43 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> aba62c408 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 5e6aa70fe (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 5cb992cc6 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> e39b54ba7 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 3c8d62b79 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> ba7efc23f (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 60f0a1820 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> a5dccfe (.)
>>>>>>> d9f43fce9 (.)
=======
- [PHPStan Fixes Summary](../../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 5df5c7505 (.)
