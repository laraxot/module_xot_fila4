<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\<nome progetto>\Filament\Resources\Pages;
=======
namespace Modules\<nome modulo>\Filament\Resources\Pages;
>>>>>>> ce6fc085 (.)
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
<<<<<<< HEAD
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\<nome modulo>\Filament\Resources\Pages;
=======
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 472bd9dc (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 3bf39332 (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> cf971011 (.)
=======
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\<nome modulo>\Filament\Resources\Pages;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
<<<<<<< HEAD
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\<nome modulo>\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
namespace Modules\SaluteOra\Filament\Resources\Pages;
=======
>>>>>>> 43d67f21 (.)
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
namespace Modules\SaluteOra\Filament\Resources\Pages;
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
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
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
- [errore override metodo final](/var/www/html/base_ptvx_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_techplanner_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](../SaluteOra/docs/filament-resources.md)
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> cf971011 (.)
>>>>>>> 88e745db5 (.)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/docs/filament-resources.md)

- [errore override metodo final](/var/www/html/base_ptvx_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_ptvx_fila3_mono/laravel/Modules/<nome modulo>/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_<nome progetto>/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_<nome progetto>/laravel/Modules/<nome progetto>/docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_techplanner_fila3_mono/laravel/docs/errors/filament_final_method_override.md)
- [linee guida filament](../<nome progetto>/docs/filament-resources.md)
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
<<<<<<< HEAD
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
=======
>>>>>>> 43d67f21 (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
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
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
- [errore override metodo final](/var/www/html/base_saluteora/laravel/project_docs/errors/filament_final_method_override.md)
- [linee guida filament](/var/www/html/base_saluteora/laravel/Modules/SaluteOra/project_docs/filament-resources.md)
>>>>>>> cc52d333 (.)
>>>>>>> f8f76a284 (.)
