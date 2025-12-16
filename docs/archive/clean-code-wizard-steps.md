# Clean Code: Wizard Steps come Funzioni dedicate

## Regola
Non inserire mai direttamente `Forms\Components\Wizard\Step::make()` dentro `Forms\Components\Wizard::make([...])`. Ogni step deve essere generato da una funzione dedicata che restituisce una istanza di `Wizard\Step`.

## Motivazione
- **Leggibilità**: Ogni step ha un nome descrittivo e il codice del wizard è più chiaro.
- **Manutenibilità**: Gli step possono essere modificati senza toccare la logica principale del wizard.
- **Riuso**: Uno step può essere riutilizzato in più wizard o risorse.
- **Testabilità**: Funzioni isolate facilitano il testing.
- **Coerenza**: Uniforma lo stile tra tutti i moduli e le risorse.

## Esempio
```php
// CORRETTO
Forms\Components\Wizard::make([
    static::getPersonalStep(),
    static::getContactsStep(),
])

protected static function getPersonalStep(): Forms\Components\Wizard\Step
{
    return Forms\Components\Wizard\Step::make('Dati personali')
        ->schema([...]);
}
```

## Collegamenti
<<<<<<< HEAD
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
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
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 85cdef688 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 6ca989d8 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 091f883c (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 67be6ac0 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 59259b43 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 88ee35c4e (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> aba62c408 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 92cca5ade (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 5cb992cc6 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 6a52563d6 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 3c8d62b79 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 317b552da (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 60f0a1820 (.)
=======
- [Applicazione e nota nel modulo Patient](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)

**Questa regola è trasversale e vincolante per tutti i moduli.**

## Collegamenti tra versioni di clean-code-wizard-steps.md
<<<<<<< HEAD
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
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
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 85cdef688 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 6ca989d8 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
=======
* [clean-code-wizard-steps.md](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 091f883c (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 67be6ac0 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
=======
* [clean-code-wizard-steps.md](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 59259b43 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 88ee35c4e (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
=======
* [clean-code-wizard-steps.md](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> aba62c408 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 92cca5ade (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
=======
* [clean-code-wizard-steps.md](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 5cb992cc6 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 6a52563d6 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
=======
* [clean-code-wizard-steps.md](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 3c8d62b79 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 317b552da (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
=======
* [clean-code-wizard-steps.md](../../Patient/project_docs/clean-code-wizard-steps.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 60f0a1820 (.)
=======
* [clean-code-wizard-steps.md](../../Patient/docs/clean-code-wizard-steps.md)
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)

