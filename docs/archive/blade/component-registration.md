# Registrazione Automatica dei Componenti Blade

## Architettura di XotBaseServiceProvider

La classe `XotBaseServiceProvider` è responsabile della registrazione automatica dei componenti Blade in tutto il progetto. Questa funzionalità è fondamentale per garantire coerenza e manutenibilità nei moduli.

## Registrazione dei componenti

XotBaseServiceProvider gestisce automaticamente la registrazione dei componenti Blade attraverso i seguenti passaggi:

1. **Determinazione del percorso**:
   ```php
   $componentClassPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-class');
   ```

2. **Registrazione del namespace**:
   ```php
   $namespace = $this->module_ns.'\View\Components';
   Blade::componentNamespace($namespace, $this->nameLower);
   ```

3. **Registrazione dei componenti**:
   ```php
   app(RegisterBladeComponentsAction::class)
       ->execute(
           $componentClassPath,
           $this->module_ns
       );
   ```

## Struttura corretta dei componenti

### Posizionamento dei file:
- **Classe PHP**: `Modules/<Module>/View/Components/<ComponentName>.php`
- **Vista Blade**: `Modules/<Module>/resources/views/components/<component-name>.blade.php`

### Esempio di classe componente:
```php
namespace Modules\User\View\Components;

use Illuminate\View\Component;

class ProfileCard extends Component
{
    public function render()
    {
        return view('user::components.profile-card');
    }
}
```

### Utilizzo:
```blade
<x-user-profile-card />
```

## Errori comuni da evitare

### 1. Registrazione manuale
```php
// ERRATO ❌
public function boot(): void
{
    parent::boot();
    Blade::component('user-profile', ProfileComponent::class);
}
```

### 2. Namespace incorretto
```php
// ERRATO ❌
namespace App\View\Components;  // namespace errato
// CORRETTO ✅
namespace Modules\User\View\Components;
```

### 3. Percorsi errati
```php
// ERRATO ❌
return view('components.profile-card');
// CORRETTO ✅
return view('user::components.profile-card');
```

## Note importanti

1. **Non è necessario** (e sconsigliato) registrare manualmente i componenti nei ServiceProvider quando si estende XotBaseServiceProvider
2. **Rispettare** la convenzione di naming: PascalCase per le classi, kebab-case per i file Blade
3. **Non cambiare** i percorsi predefiniti per i componenti
4. **Utilizzare sempre** il namespace del modulo per i componenti

## FAQs

### Perché non vedo il mio componente?
- Verificare che si trovi nei percorsi corretti
- Controllare che il namespace sia corretto
- Assicurarsi che il metodo `render()` punti alla vista corretta

### Perché ottengo errori di duplicazione?
- Potrebbe esserci un componente con lo stesso nome in un altro modulo
- Utilizzare sempre prefissi specifici per il modulo

## Riferimenti

- [XotBaseServiceProvider](../providers/xotbaseserviceprovider.md)
- [RegisterBladeComponentsAction](../../app/Actions/Blade/RegisterBladeComponentsAction.php)
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
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 85cdef688 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 6ca989d8 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
=======
- [Laravel Blade Components](https://laravel.com/project_docs/blade#components)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 091f883c (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 67be6ac0 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
=======
- [Laravel Blade Components](https://laravel.com/project_docs/blade#components)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 59259b43 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 88ee35c4e (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
=======
- [Laravel Blade Components](https://laravel.com/project_docs/blade#components)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> aba62c408 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 92cca5ade (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
=======
- [Laravel Blade Components](https://laravel.com/project_docs/blade#components)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 5cb992cc6 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 6a52563d6 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
=======
- [Laravel Blade Components](https://laravel.com/project_docs/blade#components)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 3c8d62b79 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 317b552da (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
=======
- [Laravel Blade Components](https://laravel.com/project_docs/blade#components)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 60f0a1820 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 80bc07e81 (.)
=======
- [Laravel Blade Components](https://laravel.com/docs/blade#components)
>>>>>>> 414a4ffcb (.)
