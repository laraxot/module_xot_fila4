<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/filament/trans-trait.md
========
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>>> 27c94d185 (.):docs/archive/filament/trans-trait.md
========
<<<<<<< HEAD
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/filament/trans-trait.md
========
<<<<<<< HEAD
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>>> b21979cb8 (.):docs/archive/filament/trans-trait.md
========
<<<<<<< HEAD
>>>>>>>> 780ca3113 (.):docs/archive/filament/trans-trait.md
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
<<<<<<<< HEAD:docs/filament/trans-trait.md
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
<<<<<<< HEAD
- [PHPStan level 10 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
=======
>>>>>>>> 6342a02fe (.):docs/archive/filament/trans-trait.md
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
<<<<<<< HEAD:docs/filament/trans-trait.md
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
=======
>>>>>>> cc7fb225 (.)
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>> dc2130a7c (.):docs/archive/filament/trans-trait.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>>> 6342a02fe (.):docs/archive/filament/trans-trait.md
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>> 285375c74 (.):docs/archive/filament/trans-trait.md
========
=======
>>>>>>> 71586de2 (.)
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 5bd842e3 (.)
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>>> 27c94d185 (.):docs/archive/filament/trans-trait.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 03ceeac3 (.)
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>>> 8bdfcb7ec (.):docs/archive/filament/trans-trait.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 6e7c1905 (.)
<<<<<<<< HEAD:docs/filament/trans-trait.md
>>>>>>>> b21979cb8 (.):docs/archive/filament/trans-trait.md
========
=======
- [PHPStan Level 9 Guide](../PHPSTAN-LEVEL9-GUIDE.md) 
>>>>>>> 334816e8 (.)
>>>>>>>> 780ca3113 (.):docs/archive/filament/trans-trait.md
