<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
>>>>>>> 334816e8 (.)
<<<<<<< HEAD
>>>>>>> 317b552da (.)
=======
=======
>>>>>>> 9e42a036 (.)
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> 551c768c4 (.)
# ModelContract

## Descrizione
Questa interfaccia definisce il contratto base per i modelli nel sistema Laraxot, stabilendo i metodi e le proprietà essenziali che ogni modello deve implementare.

## Struttura
```php
interface ModelContract
{
    public function getRouteKeyName(): string;
    public function getKey(): mixed;
    public function getFillable(): array;
    public function getCasts(): array;
    public function getDates(): array;
    public function getConnection(): string;
    public function getTable(): string;
    public function getKeyName(): string;
    public function getKeyType(): string;
    public function usesTimestamps(): bool;
}
```

## Funzionalità
1. Definizione dell'interfaccia base per i modelli
2. Standardizzazione dei metodi essenziali
3. Supporto per:
   - Chiavi primarie personalizzate
   - Casting degli attributi
   - Gestione delle date
   - Connessioni multiple
   - Tabelle personalizzate

## Implementazioni
- `BaseModel`: Implementazione base del contratto
- `XotBaseModel`: Estensione con funzionalità Xot
- Altri modelli specifici del dominio

## Best Practices Implementate
1. Utilizzo di strict types
2. Documentazione PHPDoc completa
3. Supporto per PHPStan livello 9
4. Conforme alle convenzioni Laraxot/<nome progetto>
5. Integrazione con Laravel Eloquent

## Collegamenti
- [Model Guidelines](../models/README.md)
- [Database Guidelines](../DATABASE-GUIDELINES.md)
<<<<<<< HEAD
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
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
=======
>>>>>>> 71f31700 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
>>>>>>> c35986f4 (.)
- [Contracts Overview](./README.md) 
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
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
- [Contracts Overview](./README.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 6e7c1905 (.)
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 334816e8 (.)
<<<<<<< HEAD
>>>>>>> 317b552da (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 9e42a036 (.)
>>>>>>> 80bc07e81 (.)
=======
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md)
- [Contracts Overview](./README.md) 
>>>>>>> 551c768c4 (.)
