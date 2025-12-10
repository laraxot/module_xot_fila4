# Filament Resources

## XotBaseResource

`XotBaseResource` è la classe base astratta per tutti i Filament Resources nel modulo Xot. Estende `Filament\Resources\Resource`.

### Metodi Astratti

#### `getFormSchema(): array`
Questo metodo astratto deve essere implementato da tutte le classi che estendono `XotBaseResource`. Definisce lo schema del form per il resource.

Il metodo restituisce un array dove:
- Le chiavi sono stringhe che corrispondono alle chiavi nel file di traduzione
- Ogni chiave deve corrispondere a una struttura nel file di traduzione sotto `fields`
- Il file di traduzione gestisce label, placeholder e help text

### Implementazione Corretta

Esempio di implementazione in una classe concreta:

```php
class SessionResource extends XotBaseResource
{
    protected static ?string $model = Session::class;

    public static function getFormSchema(): array
    {
        return [
            // La chiave 'id' corrisponde a session.fields.id nel file di traduzione
            'id' => TextInput::make('id')
                ->required()
                ->maxLength(255),

            // La chiave 'user_id' corrisponde a session.fields.user_id
            'user_id' => TextInput::make('user_id')
                ->numeric(),

            // La chiave 'payload' corrisponde a session.fields.payload
            'payload' => KeyValue::make('payload')
                ->columnSpanFull(),
        ];
    }
}
```

### Sistema di Traduzioni
Le label dei campi sono gestite tramite il LangServiceProvider nei file di traduzione:

```php
// lang/it/session.php
return [
    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Inserisci ID',
            'help' => 'Identificativo univoco della sessione',
        ],
        'user_id' => [
            'label' => 'ID Utente',
            'placeholder' => 'ID dell\'utente',
            'help' => 'ID dell\'utente associato alla sessione',
        ],
        'payload' => [
            'label' => 'Payload',
            'help' => 'Dati della sessione in formato chiave-valore',
        ],
    ],
];
```

### Note Tecniche
- La classe che estende `XotBaseResource` DEVE implementare il metodo `getFormSchema()`
- Il metodo deve restituire un array di componenti Filament Form
- Le chiavi dell'array DEVONO corrispondere alle chiavi nel file di traduzione
- La classe che estende NON deve essere dichiarata come astratta se implementa tutti i metodi astratti
- Le label, placeholder e helper text devono essere gestiti tramite il sistema di traduzioni
- NON utilizzare il metodo ->label() direttamente nei componenti

### Best Practices
- Utilizzare il sistema di traduzioni per tutte le stringhe visualizzate
- Organizzare le traduzioni in modo gerarchico e logico
- Mantenere coerenza tra le chiavi nel form schema e nel file di traduzione
- Utilizzare i componenti Filament più appropriati per ogni tipo di dato
- Documentare la struttura delle traduzioni nel README del modulo

### Correzioni Recenti
- Rimossi i metodi ->label() dal SessionResource
- Implementato il sistema di traduzioni per le label
- Allineate le chiavi del form schema con il file di traduzioni
### Versione HEAD

- Mantenute le validazioni e la struttura del form 
## Collegamenti tra versioni di filament-resources.md
* [filament-resources.md](docs/tecnico/filament/filament-resources.md)
* [filament-resources.md](docs/regole/filament-resources.md)
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
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 85cdef688 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 6ca989d8 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 2bad128c (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 358ba79a7 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> f8f76a284 (.)
=======
* [filament-resources.md](../../../Gdpr/project_docs/filament-resources.md)
* [filament-resources.md](../../../Xot/project_docs/filament-resources.md)
* [filament-resources.md](../../../Cms/project_docs/filament-resources.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 091f883c (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 59259b43 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> aba62c408 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 5cb992cc6 (.)
=======
* [filament-resources.md](../../../Gdpr/docs/filament-resources.md)
* [filament-resources.md](../../../Xot/docs/filament-resources.md)
* [filament-resources.md](../../../Cms/docs/filament-resources.md)
>>>>>>> 6a52563d6 (.)


### Versione Incoming

- Mantenute le validazioni e la struttura del form 

---

