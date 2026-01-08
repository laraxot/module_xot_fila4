<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
# pattern di estensione filament

## regola fondamentale

non estendiamo **mai** classi filament direttamente. estendiamo sempre una classe astratta con lo stesso nome ma con il prefisso `XotBase`, rispettando anche la struttura del namespace.

## struttura corretta di estensione

| classe filament originale | classe da estendere |
|---------------------------|---------------------|
| `Filament\Resources\Resource` | `Modules\Xot\Filament\Resources\XotBaseResource` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBasePage` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ViewRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord` |
| `Filament\Resources\RelationManagers\RelationManager` | `Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager` |

## come implementare correttamente

```php
// ERRATO: estensione diretta di una classe Filament
class DoctorResource extends Resource
{
    // ...
}

// CORRETTO: estensione della versione XotBase
class DoctorResource extends XotBaseResource
{
    // ...
}
```

## struttura del namespace

mantenere sempre lo stesso pattern di namespace rispetto a filament, ma usando il namespace del modulo:

```php
// namespace originale filament
namespace Filament\Resources\Pages;

// namespace corretto nel modulo
<<<<<<< HEAD
namespace Modules\SaluteOra\Filament\Resources\Pages;
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
namespace Modules\<nome progetto>\Filament\Resources\Pages;
=======
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 5a14301c (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 399f46d3 (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 472bd9dc (.)
=======
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\<nome modulo>\Filament\Resources\Pages;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 43d67f21 (.)
=======
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 5a14301c (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 43d67f21 (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> b7ea1cd1 (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> ba6c53070 (.)
=======
=======
>>>>>>> 3bf39332 (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 76bec91a (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 55fe1822 (.)
>>>>>>> 99c0b3329 (.)
```

## metodi delle classi base

le classi `XotBase*` spesso forniscono:
- metodi astratti che devi implementare
- metodi finali che non possono essere sovrascritti
- metodi hook per personalizzare il comportamento

prima di implementare o sovrascrivere un metodo, verificare sempre che:
1. non sia dichiarato come `final` nella classe base
2. seguire il pattern di implementazione previsto dalla classe base

## esempio: infolist vs getInfolistSchema

```php
// ERRATO: sovrascrivere un metodo final
public function infolist(Infolist $infolist): Infolist
{
    // ...
}

// CORRETTO: implementare il metodo astratto
protected function getInfolistSchema(): array
{
    return [
        // ...
    ];
}
```

## linkback

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
- [errore override metodo final](/var/www/html/base_<nome progetto>/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/project_docs/filament-resources.md)
=======
=======
>>>>>>> 5a14301c (.)
- [errore override metodo final](/var/www/html/base_ptvx_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_techplanner_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](../SaluteOra/docs/filament-resources.md)
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> ba6c53070 (.)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/docs/filament-resources.md)

=======
- [errore override metodo final](/var/www/html/base_ptvx_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_<nome progetto>/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_techplanner_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](../<nome progetto>/docs/filament-resources.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 43d67f21 (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> ba6c53070 (.)
=======
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 71586de2 (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 76bec91a (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 55fe1822 (.)
>>>>>>> 99c0b3329 (.)
