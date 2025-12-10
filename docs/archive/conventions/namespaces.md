# Convenzioni dei Namespace

## Struttura Base dei Namespace

La struttura corretta dei namespace nel framework segue questo pattern:

```php
Modules\{ModuleName}\{Tipo}
```

### Esempi Corretti

✅ **CORRETTO**:
```php
namespace Modules\UI\Components\Layout;
namespace Modules\UI\ViewModels;
namespace Modules\UI\Services;
```

❌ **ERRATO**:
```php
namespace Modules\UI\app\Components\Layout;  // Non usare 'app'
namespace App\Modules\UI\Components;         // Non usare 'App'
namespace UI\Components;                     // Non omettere 'Modules'
```

## Struttura dei Moduli

### Struttura Standard
```
Modules/{ModuleName}/
├── Components/
├── ViewModels/
├── Services/
├── Providers/
└── Resources/
    └── views/
        └── components/
```

## Regole Fondamentali

1. **Mai includere 'app' nel namespace**
   - Il namespace inizia direttamente con `Modules`
   - Segue le convenzioni PSR-4

2. **Mantenere la Coerenza**
   - Usare PascalCase per i nomi delle classi
   - Usare PascalCase per i nomi delle directory che fanno parte del namespace
   - Mantenere la struttura delle directory allineata con i namespace

3. **Organizzazione dei File**
   - Raggruppare i file correlati in sottodirectory appropriate
   - Mantenere una struttura pulita e logica
   - Seguire il principio di responsabilità singola

## Configurazione Composer

```json
{
    "autoload": {
        "psr-4": {
            "Modules\\": "Modules/"
        }
    }
}
```

## Testing

```php
it('uses correct namespace for components', function () {
    expect(Footer::class)->toBe('Modules\UI\Components\Layout\Footer');
});

it('uses correct namespace for view models', function () {
    expect(FooterViewModel::class)->toBe('Modules\UI\ViewModels\Layout\FooterViewModel');
});
```

## Riferimenti

- [PSR-4 Autoloading Standard](https://www.php-fig.org/psr/psr-4/)
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
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 85cdef688 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 6ca989d8 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
=======
- [Laravel Module Development](https://laravel.com/project_docs/10.x/packages)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 091f883c (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 67be6ac0 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
=======
- [Laravel Module Development](https://laravel.com/project_docs/10.x/packages)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 59259b43 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 88ee35c4e (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
=======
- [Laravel Module Development](https://laravel.com/project_docs/10.x/packages)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> aba62c408 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 92cca5ade (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
=======
- [Laravel Module Development](https://laravel.com/project_docs/10.x/packages)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 5cb992cc6 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
>>>>>>> 6a52563d6 (.)
=======
- [Laravel Module Development](https://laravel.com/docs/10.x/packages)
=======
- [Laravel Module Development](https://laravel.com/project_docs/10.x/packages)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
- [Best Practices](../best-practices/README.md)
- [Architettura Modulare](../architecture.md) 

## Collegamenti tra versioni di namespaces.md
* [namespaces.md](docs/conventions/namespaces.md)
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
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 85cdef688 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 6ca989d8 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 2bad128c (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 358ba79a7 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> f8f76a284 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 5e6e0d054 (.)
=======
* [namespaces.md](../../../Xot/project_docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/project_docs/conventions/namespaces.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 091f883c (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 59259b43 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> aba62c408 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 5cb992cc6 (.)
=======
* [namespaces.md](../../../Xot/docs/conventions/namespaces.md)
* [namespaces.md](../../../Cms/docs/conventions/namespaces.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)

