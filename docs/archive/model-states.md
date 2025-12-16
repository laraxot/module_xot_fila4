# Laravel Model States

## Panoramica

Laravel Model States è una libreria che permette di gestire gli stati dei modelli Eloquent in modo type-safe e orientato agli oggetti.

## Vantaggi

- **Type Safety**: Gli stati sono classi PHP con type hinting
- **Transizioni**: Logica di transizione incapsulata
- **Validazione**: Validazione degli stati e delle transizioni
- **Eventi**: Eventi per le transizioni di stato
- **Query Builder**: Query builder per filtrare per stato

## Implementazione Base

### Definizione degli Stati

```php
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

abstract class DoctorRegistrationState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Draft::class)
            ->allowTransition(Draft::class, PendingModeration::class)
            ->allowTransition(PendingModeration::class, [Approved::class, Rejected::class])
            ->allowTransition(Approved::class, Completed::class);
    }
}

class Draft extends DoctorRegistrationState {}
class PendingModeration extends DoctorRegistrationState {}
class Approved extends DoctorRegistrationState {}
class Rejected extends DoctorRegistrationState {}
class Completed extends DoctorRegistrationState {}
```

### Modello

```php
use Spatie\ModelStates\HasStates;

class DoctorRegistrationWorkflow extends Model
{
    use HasStates;

    protected $casts = [
        'status' => DoctorRegistrationState::class
    ];
}
```

## Utilizzo

### Controllo dello Stato

```php
$workflow->status instanceof PendingModeration; // true/false
$workflow->status->equals(PendingModeration::class); // true/false
```

### Transizioni

```php
class ApproveDoctorRegistration extends Transition
{
    private string $moderatorId;
    
    public function __construct(string $moderatorId)
    {
        $this->moderatorId = $moderatorId;
    }
    
    public function handle(DoctorRegistrationWorkflow $workflow): DoctorRegistrationState
    {
        $workflow->moderated_by = $this->moderatorId;
        $workflow->moderated_at = now();
        $workflow->save();
        
        return new Approved($workflow);
    }
}

$workflow->status->transition(new ApproveDoctorRegistration($moderatorId));
```

### Query Builder

```php
DoctorRegistrationWorkflow::whereState('status', PendingModeration::class)->get();
```

## Validazione

```php
class PendingModeration extends DoctorRegistrationState
{
    public function canTransitionTo(DoctorRegistrationState $state): bool
    {
        if ($state instanceof Approved) {
            return $this->model->hasValidDocuments();
        }
        
        return parent::canTransitionTo($state);
    }
}
```

## Eventi

```php
class DoctorRegistrationWorkflow extends Model
{
    protected static function registerStateEvents(): void
    {
        static::stateUpdated(function ($model, $oldState, $newState) {
            if ($newState instanceof Approved) {
                event(new DoctorRegistrationApproved($model));
            }
        });
    }
}
```

## Esempio Completo

```php
// Stati
abstract class DoctorRegistrationState extends State
{
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Draft::class)
            ->allowTransition(Draft::class, PendingModeration::class)
            ->allowTransition(PendingModeration::class, [Approved::class, Rejected::class])
            ->allowTransition(Approved::class, Completed::class)
            ->registerState([
                Draft::class,
                PendingModeration::class,
                Approved::class,
                Rejected::class,
                Completed::class,
            ]);
    }
}

// Transizioni
class SubmitForModeration extends Transition
{
    public function __construct(
        private array $data
    ) {}

    public function handle(DoctorRegistrationWorkflow $workflow): DoctorRegistrationState
    {
        $workflow->update([
            'data' => $this->data,
            'submitted_at' => now()
        ]);

        return new PendingModeration($workflow);
    }
}

class ApproveDoctorRegistration extends Transition
{
    public function __construct(
        private string $moderatorId,
        private ?string $notes = null
    ) {}

    public function handle(DoctorRegistrationWorkflow $workflow): DoctorRegistrationState
    {
        $workflow->update([
            'moderated_by' => $this->moderatorId,
            'moderation_notes' => $this->notes,
            'moderated_at' => now()
        ]);

        return new Approved($workflow);
    }
}

// Modello
class DoctorRegistrationWorkflow extends Model
{
    use HasStates;

    protected $casts = [
        'status' => DoctorRegistrationState::class,
        'data' => 'array',
        'submitted_at' => 'datetime',
        'moderated_at' => 'datetime'
    ];

    protected static function registerStateEvents(): void
    {
        static::stateUpdated(function ($model, $oldState, $newState) {
            match (get_class($newState)) {
                PendingModeration::class => event(new DoctorRegistrationSubmitted($model)),
                Approved::class => event(new DoctorRegistrationApproved($model)),
                Rejected::class => event(new DoctorRegistrationRejected($model)),
                Completed::class => event(new DoctorRegistrationCompleted($model)),
                default => null
            };
        });
    }
}

// Utilizzo
$workflow = DoctorRegistrationWorkflow::create([
    'doctor_id' => $doctorId
]);

// Sottomissione
$workflow->status->transition(new SubmitForModeration($data));

// Approvazione
$workflow->status->transition(new ApproveDoctorRegistration($moderatorId, $notes));

// Query
$pendingWorkflows = DoctorRegistrationWorkflow::whereState('status', PendingModeration::class)
    ->orderBy('submitted_at')
    ->get();
```

## Best Practices

1. **Stati Immutabili**: Gli stati dovrebbero essere immutabili
   ```php
   class Approved extends DoctorRegistrationState
   {
       private function __construct(Model $model)
       {
           parent::__construct($model);
       }
   }
   ```

2. **Validazione nelle Transizioni**: La logica di validazione va nelle transizioni
   ```php
   class ApproveDoctorRegistration extends Transition
   {
       public function handle(DoctorRegistrationWorkflow $workflow): DoctorRegistrationState
       {
           if (!$workflow->hasValidDocuments()) {
               throw new InvalidTransitionException('Documents not valid');
           }
           
           return new Approved($workflow);
       }
   }
   ```

3. **Eventi per Side Effects**: Usare gli eventi per gestire side effects
   ```php
   protected static function registerStateEvents(): void
   {
       static::stateUpdated(function ($model, $oldState, $newState) {
           if ($newState instanceof Approved) {
               Mail::to($model->doctor->email)
                   ->queue(new DoctorRegistrationApproved($model));
           }
       });
   }
   ```

## Vedi Anche

<<<<<<< HEAD
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
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
- [Queueable Actions](queueable-actions.md) 
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
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
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 85cdef688 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 6ca989d8 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 2bad128c (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 358ba79a7 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> f8f76a284 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 5e6e0d054 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 0117b849c (.)
=======
- [Spatie Laravel Model States](https://spatie.be/project_docs/laravel-model-states)
- [Laravel Events](https://laravel.com/project_docs/events)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Queueable Actions](queueable-actions.md) 
>>>>>>> ce6fc085 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 091f883c (.)
=======
<<<<<<< HEAD
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 67be6ac0 (.)
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 2bad128c (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 59259b43 (.)
=======
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 88ee35c4e (.)
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 358ba79a7 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> aba62c408 (.)
=======
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 92cca5ade (.)
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> f8f76a284 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 5cb992cc6 (.)
=======
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 6a52563d6 (.)
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 5e6e0d054 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 3c8d62b79 (.)
=======
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 317b552da (.)
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 0117b849c (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
>>>>>>> 60f0a1820 (.)
=======
=======
- [Queueable Actions](queueable-actions.md) 
>>>>>>> a5dccfe (.)
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 5df5c7505 (.)
=======
- [Spatie Laravel Model States](https://spatie.be/docs/laravel-model-states)
- [Laravel Events](https://laravel.com/docs/events)
- [Queueable Actions](queueable-actions.md) 
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)
