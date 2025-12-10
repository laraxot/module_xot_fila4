<<<<<<< HEAD
=======
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
>>>>>>> 317b552da (.)
# TransTrait

## Descrizione
Questo trait fornisce funzionalità di traduzione per i componenti Filament, implementando le best practices di Laraxot per la gestione multilingua.

## Funzionalità
1. Traduzione automatica di etichette e placeholder
2. Supporto per chiavi di traduzione nidificate
3. Fallback a valori predefiniti
4. Cache delle traduzioni
5. Supporto per namespace di traduzione personalizzati

## Metodi Principali
```php
trait TransTrait
{
    public function getTranslationKey(string $key): string;
    public function trans(string $key, array $parameters = []): string;
    public function transChoice(string $key, int $number, array $parameters = []): string;
    public function hasTranslation(string $key): bool;
}
```

## Best Practices
1. Utilizzo di strict types
2. Gestione cache efficiente
3. Supporto per PHPStan livello 9
4. Integrazione con Filament
5. Conforme alle convenzioni Laraxot/<nome progetto>

## Esempi di Utilizzo
```php
use Modules\Xot\Filament\Traits\TransTrait;

class MyResource
{
    use TransTrait;

    public function getLabel(): string
    {
        return $this->trans('resource.label');
    }
}
```

## Collegamenti
- [Filament Best Practices](../filament-best-practices.md)
- [Translation Guidelines](../TRANSLATIONS-BEST-PRACTICES.md)
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
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 334816e8 (.)
>>>>>>> 317b552da (.)
