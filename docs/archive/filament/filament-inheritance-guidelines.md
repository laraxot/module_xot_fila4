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
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
# Linee Guida per l'Ereditarietà da Classi Filament

## Problema di Compatibilità con Metodi Statici/Non Statici

Quando si estendono classi di Filament, è fondamentale rispettare la **natura statica o non statica** dei metodi. Convertire un metodo non statico in statico (o viceversa) causa errori fatali come:

```
Cannot make non static method Filament\Pages\BasePage::getView() static in class Modules\Xot\Filament\Pages\XotBasePage
```

## Regole Fondamentali

1. **Preservare la firma dei metodi**: Quando si sovrascrive un metodo di una classe genitore, mantenere **esattamente** la stessa firma:
   - Se è `static` nella classe genitore → deve rimanere `static` nella classe figlia
   - Se è non statico nella classe genitore → deve rimanere non statico nella classe figlia
   - Rispettare parametri, tipo di ritorno e visibilità (public/protected/private)

2. **Verifica prima di implementare**: Prima di implementare un metodo, verificare la sua definizione nella classe genitore:
   ```bash
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
   grep -r "function methodName" /var/www/html/base_<nome progetto>/laravel/vendor/filament
=======
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
>>>>>>> 5a14301c (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 399f46d3 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 472bd9dc (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 472bd9dc (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 3bf39332 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> cf971011 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> e7da37af (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 472bd9dc (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 3bf39332 (.)
=======
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_<nome progetto>/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 43d67f21 (.)
=======
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
>>>>>>> 5a14301c (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 43d67f21 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> b7ea1cd1 (.)
=======
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
>>>>>>> 5a14301c (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 43d67f21 (.)
=======
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
>>>>>>> 5a14301c (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 43d67f21 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> b7ea1cd1 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 76bec91a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 55fe1822 (.)
=======
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
   grep -r "function methodName" /var/www/html/base_techplanner_fila3_mono/laravel/vendor/filament
>>>>>>> 5a14301c (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 43d67f21 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> b7ea1cd1 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
   grep -r "function methodName" /var/www/html/base_saluteora/laravel/vendor/filament
>>>>>>> e0b8ebe3 (.)
   ```

3. **Principio di Sostituzione di Liskov**: Le sottoclassi devono essere sostituibili alle loro classi base senza alterare il comportamento corretto del programma.

## Casi Comuni

### Metodi Non Statici (di Istanza)

Questi metodi operano sullo stato dell'oggetto e usano `$this`:

```php
// Nella classe Filament
public function getView(): string
{
    return static::$view;
}

// Nella classe XotBase - CORRETTO
public function getView(): string
{
    // implementazione
}

// Nella classe XotBase - ERRATO ❌
public static function getView(): string // Static!
{
    // implementazione
}
```

### Metodi Statici

Questi metodi non operano sullo stato dell'oggetto e usano `static::`:

```php
// Nella classe Filament
public static function getNavigationLabel(): string
{
    return static::$navigationLabel;
}

// Nella classe XotBase - CORRETTO
public static function getNavigationLabel(): string
{
    // implementazione
}

// Nella classe XotBase - ERRATO ❌
public function getNavigationLabel(): string // Non static!
{
    // implementazione
}
```

## Workflow di Implementazione Sicuro

1. **Analizza la classe originale**: Esamina la definizione dei metodi nella classe Filament
2. **Documenta la natura dei metodi**: Specifica nei commenti se il metodo è statico o non statico
3. **Utilizza IDE con supporto per type checking**: L'IDE evidenzierà errori di incompatibilità
4. **Esegui test unitari**: Verifica che l'ereditarietà funzioni come previsto

## Metodi Comuni di Filament e loro Natura

| Classe | Metodo | Tipo | Note |
|--------|--------|------|------|
| `BasePage` | `getView()` | Non statico | Ritorna la vista della pagina |
| `BasePage` | `getViewData()` | Non statico | Ritorna i dati per la vista |
| `Page` | `getTitle()` | Non statico | Ritorna il titolo della pagina |
| `Page` | `getNavigationLabel()` | Statico | Ritorna l'etichetta di navigazione |
| `Page` | `getNavigationIcon()` | Statico | Ritorna l'icona di navigazione |
| `Page` | `getSlug()` | Statico | Ritorna lo slug della pagina |

## Collegamenti

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
=======
- [Documentazione di Filament](https://filamentphp.com/docs/3.x/panels/pages)
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
- [Documentazione di Filament](https://filamentphp.com/docs/3.x/panels/pages)
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/docs/3.x/panels/pages)
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/docs/3.x/panels/pages)
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/docs/3.x/panels/pages)
>>>>>>> 5a14301c (.)
- [Principi di Ereditarietà](../Xot/docs/class_inheritance_principles.md)
- [XotBasePage](../Xot/docs/filament/pages/xotbasepage.md)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/filament/pages/xotbasepage.md)
- [Principi di Ereditarietà](../Xot/docs/class_inheritance_principles.md)
- [XotBasePage](../Xot/docs/filament/pages/xotbasepage.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/filament/pages/xotbasepage.md)

=======
- [Principi di Ereditarietà](../Xot/docs/class_inheritance_principles.md)
- [XotBasePage](../Xot/docs/filament/pages/xotbasepage.md)
- [Principi di Ereditarietà](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/filament/pages/xotbasepage.md)
- [Principi di Ereditarietà](../Xot/docs/class_inheritance_principles.md)
- [XotBasePage](../Xot/docs/filament/pages/xotbasepage.md)
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 43d67f21 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 43d67f21 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 76bec91a (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 5a14301c (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 43d67f21 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [Documentazione di Filament](https://filamentphp.com/project_docs/3.x/panels/pages)
- [Principi di Ereditarietà](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/class_inheritance_principles.md)
- [XotBasePage](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/filament/pages/xotbasepage.md)
>>>>>>> e0b8ebe3 (.)
