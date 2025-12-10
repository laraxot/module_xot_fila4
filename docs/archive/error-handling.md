# Gestione Errori (Best Practice Xot)

## Errori Comuni e Soluzioni Aggiornati

1. **ValidationException custom**
   - ✅ throw ValidationException::withMessages(['email' => ['Messaggio personalizzato']]);

2. **Fallback enum/status**
   - Usare metodo privato per fallback:
   ```php
   private function getDoctorRegistrationStatus(): string {
       if (!class_exists(DoctorRegistrationStatus::class)) return 'pending';
       try {
           foreach (DoctorRegistrationStatus::cases() as $case) {
               if (strtolower($case->name) === 'pending') return $case->value;
           }
           return 'pending';
       } catch (\Exception $e) { return 'pending'; }
   }
   ```

3. **Controllo su modello specializzato**
   - ✅ Doctor::where('email', ...)

## Checklist
- [ ] Error handling idiomatico
- [ ] Fallback enum/status
- [ ] Collegamenti bidirezionali
- [ ] Test e validazione

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
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 85cdef688 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 6ca989d8 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 2bad128c (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 358ba79a7 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> f8f76a284 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/project_docs/models.md)
- [Patient Workflow](../../Patient/project_docs/doctor-registration-workflow.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 091f883c (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 59259b43 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> aba62c408 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 5cb992cc6 (.)
=======
- [Patient Errori e Soluzioni](../../Patient/docs/models.md)
- [Patient Workflow](../../Patient/docs/doctor-registration-workflow.md)
>>>>>>> 6a52563d6 (.)
- [README Xot](./README.md)

# Errori di Validazione Custom (Laravel)

## Best Practice

Usa sempre:

```php
throw \Illuminate\Validation\ValidationException::withMessages([
    'campo' => ['Messaggio di errore personalizzato.'],
]);
```

## Anti-pattern

```php
throw new \Illuminate\Validation\ValidationException(
    validator([], [])->errors()->add('campo', 'Messaggio di errore.')
);
```

- Questo genera errori runtime e non è supportato.

## Approfondimenti
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
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 85cdef688 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 6ca989d8 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
=======
- [Patient: errors/validation.md](../../Patient/project_docs/errors/validation.md) 
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 091f883c (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 67be6ac0 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
=======
- [Patient: errors/validation.md](../../Patient/project_docs/errors/validation.md) 
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 59259b43 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 88ee35c4e (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
=======
- [Patient: errors/validation.md](../../Patient/project_docs/errors/validation.md) 
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> aba62c408 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 92cca5ade (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
=======
- [Patient: errors/validation.md](../../Patient/project_docs/errors/validation.md) 
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 5cb992cc6 (.)
=======
- [Patient: errors/validation.md](../../Patient/docs/errors/validation.md) 
>>>>>>> 6a52563d6 (.)
