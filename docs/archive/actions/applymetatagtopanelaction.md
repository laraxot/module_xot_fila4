# ApplyMetatagToPanelAction

## Descrizione
L'azione `ApplyMetatagToPanelAction` è responsabile di applicare i metatag al panel Filament, configurando l'aspetto visivo dell'interfaccia amministrativa.

## Funzionalità
- Applica i colori del tema al panel
- Configura il logo del brand
- Imposta il nome del brand
- Configura il logo per la modalità scura
- Imposta l'altezza del logo
- Configura il favicon

## Utilizzo
```php
use Modules\Xot\Actions\Panel\ApplyMetatagToPanelAction;

$panel = new Panel();
$action = new ApplyMetatagToPanelAction();
$panel = $action->execute($panel);
```

## Metodi

### execute(Panel $panel): Panel
Applica i metatag al panel Filament.

#### Parametri
- `$panel`: Il panel Filament da configurare

#### Return
- `Panel`: Il panel configurato con i metatag

## Gestione Errori
In caso di errore durante l'applicazione dei metatag:
- L'errore viene registrato nel log
- Il panel originale viene restituito senza modifiche
- L'applicazione continua a funzionare

## Collegamenti
- [MetatagData](../datas/MetatagData.md)
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
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 85cdef688 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 6ca989d8 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
=======
- [Filament Panel Documentation](https://filamentphp.com/project_docs/panels)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 091f883c (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 67be6ac0 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
=======
- [Filament Panel Documentation](https://filamentphp.com/project_docs/panels)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 59259b43 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 88ee35c4e (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
=======
- [Filament Panel Documentation](https://filamentphp.com/project_docs/panels)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> aba62c408 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 92cca5ade (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
=======
- [Filament Panel Documentation](https://filamentphp.com/project_docs/panels)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 5cb992cc6 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 6a52563d6 (.)
=======
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
=======
- [Filament Panel Documentation](https://filamentphp.com/project_docs/panels)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)

## Note
- Questa azione utilizza il trait `QueueableAction` di Spatie
- Tutti i metodi sono fortemente tipizzati per PHPStan livello 10
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
- La documentazione è mantenuta aggiornata nella cartella docs 
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 85cdef688 (.)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 59259b43 (.)
=======
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 6a52563d6 (.)
