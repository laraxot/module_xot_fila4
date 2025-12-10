# Gestione Token CSRF nei Widget XotBase

## Descrizione
I widget che estendono `XotBaseWidget` devono gestire correttamente il token CSRF per le richieste AJAX di Livewire.

## Contesto
Livewire utilizza richieste AJAX per le interazioni dinamiche. Ogni richiesta deve includere un token CSRF valido per la sicurezza.

## Regole
1. Ogni widget deve estendere `XotBaseWidget`
2. Il token CSRF deve essere gestito nel metodo `mount()`
3. La vista deve includere il token CSRF nel form
4. Il meta tag CSRF deve essere presente nel layout principale

## Implementazione
```php
class MyWidget extends XotBaseWidget
{
    public string $_token;

    public function mount(): void
    {
        $this->_token = csrf_token();
    }
}
```

```blade
<div>
    @csrf
    <form wire:submit.prevent="submit">
        {{ $this->form }}
    </form>
</div>
```

## Best Practices
1. Non utilizzare direttamente `@csrf` nella vista, ma passare il token tramite il widget
2. Verificare sempre la presenza del token prima di ogni richiesta AJAX
3. Utilizzare il trait `HasCsrfToken` per la gestione centralizzata
4. Mantenere aggiornate le dipendenze Livewire

## Collegamenti Correlati
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
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 85cdef688 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 6ca989d8 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 2bad128c (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/project_docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/project_docs/csrf)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 091f883c (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 59259b43 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> aba62c408 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 5cb992cc6 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 3c8d62b79 (.)
=======
- [Documentazione Livewire](https://livewire.laravel.com/docs/security)
- [Documentazione Laravel CSRF](https://laravel.com/docs/csrf)
>>>>>>> 317b552da (.)
- [XotBaseWidget Implementation](../xot_base_classes.md)

## Esempio di Correzione
```php
// Widget
class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    public string $_token;

    public function mount(): void
    {
        $this->_token = csrf_token();
    }
}

// View
<div>
    @csrf
    <form wire:submit.prevent="submit">
        {{ $this->form }}
    </form>
</div>
```

## Checklist di Verifica
- [ ] Widget estende XotBaseWidget
- [ ] Token CSRF gestito nel mount()
- [ ] Token presente nella vista
- [ ] Meta tag CSRF nel layout
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
- [ ] Dipendenze Livewire aggiornate 
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> 85cdef688 (.)
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 59259b43 (.)
=======
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
- [ ] Dipendenze Livewire aggiornate 
>>>>>>> 317b552da (.)
