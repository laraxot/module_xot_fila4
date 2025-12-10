---
title: Reattori
description: Reattori
extends: _layouts.documentation
section: content
---

## Reattori

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
https://spatie.be/docs/laravel-event-sourcing/v7/using-reactors/writing-your-first-reactor
>>>>>>> 85cdef688 (.)
=======
https://spatie.be/docs/laravel-event-sourcing/v7/using-reactors/writing-your-first-reactor
>>>>>>> 6ca989d8 (.)
=======
https://spatie.be/docs/laravel-event-sourcing/v7/using-reactors/writing-your-first-reactor
=======
https://spatie.be/project_docs/laravel-event-sourcing/v7/using-reactors/writing-your-first-reactor
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
https://spatie.be/docs/laravel-event-sourcing/v7/using-reactors/writing-your-first-reactor
>>>>>>> 091f883c (.)
=======
https://spatie.be/docs/laravel-event-sourcing/v7/using-reactors/writing-your-first-reactor
>>>>>>> 67be6ac0 (.)


Li utilizzi quando vuoi eseguire delle azioni solo quando si verifica l'evento originale. Non vuoi fare questo lavoro quando riproduci gli eventi.  
I reattori non dovrebbero modificare i modelli.  
Sono pensati per gli effetti collaterali (come inviare un email se un evento viene chiamato)    
E' una classe, proprio come un proiettore, ascolta gli eventi in arrivo.  
A differenza dei proiettori, tuttavia, i reattori non verranno richiamati quando gli eventi vengono riprodotti. Verranno chiamati solo quando si attiva l'evento originale  
Si raccomanda che tutti i reattori implementino Illuminate\Contracts\Queue\ShouldQueue, in quanto saranno lenti.

## Creazione
```php
php artisan make:reactor NomeCheSiVuolDareReactor
``` 
Nella cartella /Reactors

## Registrazione
Per impostazione predefinita, il pacchetto troverà e registrerà automaticamente tutti i reattori trovati nella tua applicazione.

In alternativa, puoi anche registrarli manualmente nella reactorschiave del event-sourcingsfile di configurazione.

Possono anche essere aggiunti al file Projectionist. Questa operazione può essere eseguita ovunque, ma in genere lo faresti in un tuo ServiceProvider.

```php
namespace App\Providers;

use App\Projectors\YourReactor;
use Illuminate\Support\ServiceProvider;
use Spatie\EventSourcing\Facades\Projectionist;

class EventSourcingServiceProvider extends ServiceProvider
{
    public function register()
    {
        // adding a single reactor
        Projectionist::addReactor(YourReactor::class);

        // you can also add multiple reactors in one go
        Projectionist::addReactors([
            AnotherReactor::class,
            YetAnotherReactor::class,
        ]);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
``` 
=======
``` 
>>>>>>> 85cdef688 (.)
=======
``` 
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
``` 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
``` 
>>>>>>> 67be6ac0 (.)
