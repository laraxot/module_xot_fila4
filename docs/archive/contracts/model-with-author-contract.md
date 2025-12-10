<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 33af3e61 (.)
>>>>>>> 67be6ac0 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2bad128c (.)
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)
=======
- Link bidirezionale: [Vai a PHPSTAN-FIXES-SUMMARY.md](../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 59259b43 (.)

## Collegamenti
- [ModelContract](model-contract.md)
- [Database Guidelines](../DATABASE-GUIDELINES.md)
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
>>>>>>> 33af3e61 (.)
>>>>>>> 67be6ac0 (.)
- [Contracts Overview](./README.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2bad128c (.)
- [Documentazione root](../../../docs/PHPSTAN-FIXES-SUMMARY.md)
=======
- [Documentazione root](../../../project_docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione root](../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Documentazione root](../../../docs/PHPSTAN-FIXES-SUMMARY.md)
>>>>>>> 59259b43 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ca989d8 (.)
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
<<<<<<< HEAD
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
- Documentare eventuali personalizzazioni 
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
- Documentare eventuali personalizzazioni 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 5a14301c (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 71f31700 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
- Documentare eventuali personalizzazioni 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> c35986f4 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
- Documentare eventuali personalizzazioni 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
- Documentare eventuali personalizzazioni 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> ba1d49f3 (.)
>>>>>>> 59259b43 (.)
