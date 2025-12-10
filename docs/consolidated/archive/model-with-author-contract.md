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
# ModelWithAuthorContract

Il `ModelWithAuthorContract` è un'interfaccia che estende `ModelContract` e definisce il contratto per i modelli che necessitano di tracciare l'autore e l'editor delle modifiche.

## Firma aggiornata (2025-04-16)

```php
interface ModelWithAuthorContract extends ModelContract
{
    public function getCreatedBy(): ?string;
    public function getUpdatedBy(): ?string;
    public function setCreatedBy(?string $userId): self;
    public function setUpdatedBy(?string $userId): self;
    public function author(): BelongsTo;
    public function editor(): BelongsTo;
}
```

## Best Practices
- Utilizzare sempre type hints e PHPDoc completi.
- Garantire la compatibilità con PHPStan livello 9.
- Implementare la logica di tracciamento utente in ogni modello che estende questo contract.

## Fix/Modifiche recenti
- [2025-04-16] Correzione conflitti git, uniformazione tipizzazione, aggiunta firme metodi autore/editor, aggiornamento PHPDoc e struttura secondo convenzioni Laraxot/<nome progetto>.
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)

## Collegamenti
- [ModelContract](model-contract.md)
- [Database Guidelines](../DATABASE-GUIDELINES.md)
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
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
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
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 88e35986 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> e0b8ebe3 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> cc52d333 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 90d386aa (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> 3eee6f79 (.)
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
- [Documentazione root](../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)

    $table->foreign('deleter_id')->references('id')->on('users');
});
```

## Best Practices

1. **Implementazione**
   - Utilizzare il trait `HasAuthorTrait` per implementazione standard
   - Definire le relazioni con il modello User
   - Gestire correttamente i casi null

2. **Validazione**
   - Verificare l'esistenza degli utenti referenziati
   - Gestire i casi di utenti eliminati
   - Validare i permessi di modifica

3. **Performance**
   - Utilizzare eager loading per le relazioni
   - Indicizzare le colonne foreign key
   - Ottimizzare le query di join

## Dipendenze

- Illuminate\Database\Eloquent\Relations\BelongsTo
- Illuminate\Database\Eloquent\Model
- Modules\User\Models\User

## Esempio di Utilizzo

```php
class Article extends Model implements ModelWithAuthorContract
{
    use HasAuthorTrait;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'updater_id',
        'deleter_id'
    ];
}
```

## Note di Sviluppo

- Implementare sempre tutte le relazioni richieste
- Gestire correttamente i casi di soft delete
- Mantenere la consistenza dei dati nelle relazioni
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Documentare eventuali personalizzazioni 
=======
>>>>>>> cc7fb225 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> e0b8ebe3 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> cc52d333 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 90d386aa (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 3eee6f79 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 5a14301c (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 399f46d3 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 17684f52 (.)
=======
>>>>>>> cc7fb225 (.)
