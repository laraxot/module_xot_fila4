---
title: Creazione di una Resource
description: Creazione di una Resource
extends: _layouts.documentation
section: content
---

# Creazione di una Resource {#creazione-resource}


- vedi doc savanna e crea le resource con:

```bash
#Page: Pass the Module name as an argument and the name of page.
php artisan module:make-filament-page {module?} {name?} {--R|resource=} {--T|type=} {--F|force}

#Resources: Pass the Module name as an argument and the name of resources.
php artisan module:make-filament-resource {module?} {name?} {--soft-deletes} {--view} {--G|generate} {--S|simple} {--F|force}

#Widgets: Pass the Module name as an argument and the name of widget.
php artisan module:make-filament-widget {module?} {name?} {--R|resource=} {--C|chart} {--T|table} {--S|stats-overview} {--F|force}

#RelationManagers: Pass the Module name as an argument and the name of RelationManager.
php artisan module:make-filament-relation-manager {module?} {resource?} {relationship?} {recordTitleAttribute?} {--attach} {--associate} {--soft-deletes} {--view} {--F|force}
```

- aggiungi Traits di Savanna alle resource:

namespace YourNamespace\Resources;

use Savannabits\FilamentModules\Concerns\ContextualResource;
use Filament\Resources\Resource;

```bash
class UserResource extends \Modules\Xot\Filament\Resources\XotBaseResource
{
    //
}
```
### Versione HEAD


## Collegamenti tra versioni di resource.md
<<<<<<< HEAD
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
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
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 85cdef688 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 6ca989d8 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 2bad128c (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 358ba79a7 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> f8f76a284 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 5e6e0d054 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 0117b849c (.)
=======
* [resource.md](../../../Xot/project_docs/filament/resource.md)
* [resource.md](../../../Xot/project_docs/resource.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 091f883c (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 59259b43 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> aba62c408 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 5cb992cc6 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 3c8d62b79 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 60f0a1820 (.)
=======
* [resource.md](../../../Xot/docs/filament/resource.md)
* [resource.md](../../../Xot/docs/resource.md)
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)


### Versione Incoming


---

