# Laraxot Best Practices

## Form Schema Best Practices

### Campi da Escludere
- `created_at`: gestito automaticamente da Laravel
- `updated_at`: gestito automaticamente da Laravel
- Qualsiasi campo gestito da traits (es: Updater trait)
- Campi di sistema che non devono essere modificati dall'utente

### Campi da Includere
- Campi del modello che l'utente deve poter modificare
- Relazioni che devono essere gestite attraverso il form
- Campi virtuali necessari per la logica del form

### Implementazione
```php
public static function getFormSchema(): array
{
    return [
        // Campi modificabili dall'utente
        TextInput::make('name')->required(),
        Select::make('type')->options([...]),
        
        // NO: Non includere campi automatici
        // TextInput::make('created_at')
        // TextInput::make('updated_at')
    ];
}
```

## Traduzioni

### Regole Generali
1. MAI rimuovere traduzioni esistenti
2. Le traduzioni servono come documentazione completa del modulo
3. Mantenere anche le traduzioni per campi non presenti nel form
4. Aggiungere nuove traduzioni quando necessario
5. Correggere e migliorare le traduzioni esistenti

### Struttura File Traduzioni
```php
return [
    'resources' => [
        'my_model' => [
            'fields' => [
                // Campi del form
                'name' => 'Nome',
                'type' => 'Tipo',
                
                // Campi automatici (da mantenere)
                'created_at' => 'Data Creazione',
                'updated_at' => 'Ultima Modifica'
            ],
        ],
    ],
];
```

### LangServiceProvider
- Non utilizzare `->label()` nei componenti Filament
- Le etichette vengono gestite automaticamente
- Le traduzioni sono basate sulla struttura del modulo e della classe

## XotBaseResource

### Regole di Estensione
1. Implementare `public static function getFormSchema(): array`
2. NON implementare il metodo `form(Form $form): Form`
3. NON definire `protected static ?string $navigationIcon`
4. La navigazione è gestita interamente da XotBaseResource

### Esempio di Implementazione
```php
class MyResource extends XotBaseResource
{
    protected static ?string $model = MyModel::class;

    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required(),
            Select::make('type')->options([...])
        ];
    }
}
```

## Architettura

### Modelli
- Utilizzare traits per funzionalità comuni
- Implementare relazioni in modo chiaro e documentato
- Definire correttamente i fillable fields

### Forms
- Separare la logica di validazione in Form Requests
- Utilizzare i componenti Filament appropriati
- Implementare la validazione lato client quando possibile

### Views
- Utilizzare Blade components per la riusabilità
- Implementare la localizzazione per tutti i testi
- Seguire una struttura modulare
### Versione HEAD


## Collegamenti tra versioni di best-practices.md
* [best-practices.md](docs/tecnico/filament/best-practices.md)
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
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 85cdef688 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 6ca989d8 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 2bad128c (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 358ba79a7 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> f8f76a284 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 5e6e0d054 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 0117b849c (.)
=======
* [best-practices.md](../../../Xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/project_docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/project_docs/best-practices.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 091f883c (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 59259b43 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> aba62c408 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 5cb992cc6 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 3c8d62b79 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 60f0a1820 (.)
=======
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
>>>>>>> 80bc07e81 (.)


### Versione Incoming


---

