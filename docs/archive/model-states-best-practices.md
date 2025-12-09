# Best Practices per Model States e Transizioni Custom

## Parametri aggiuntivi nelle transizioni custom

- **Regola**: Se una transizione custom richiede parametri aggiuntivi (es. motivazione), tutte le chiamate a `transitionTo` devono fornire tali parametri.
- **Motivazione**: Evita errori di runtime (ArgumentCountError) e garantisce la tracciabilità delle motivazioni delle transizioni.
- **Checklist**:
  - [ ] La firma del costruttore della transizione è coerente con le chiamate
  - [ ] Tutte le chiamate a `transitionTo` forniscono i parametri richiesti
  - [ ] La documentazione delle transizioni specifica i parametri richiesti
- **Collegamenti**:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  - [Errori comuni nelle transizioni custom (<nome progetto>)](../../<nome progetto>/docs/model-states-errors.md)
=======
  - [Errori comuni nelle transizioni custom ()](../../<nome modulo>/docs/model-states-errors.md)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
  - [Errori comuni nelle transizioni custom (SaluteOra)](../../SaluteOra/docs/model-states-errors.md)
>>>>>>> 5a14301c (.)
=======
  - [Errori comuni nelle transizioni custom (SaluteOra)](../../SaluteOra/docs/model-states-errors.md)
>>>>>>> 71f31700 (.)
=======
  - [Errori comuni nelle transizioni custom (SaluteOra)](../../SaluteOra/docs/model-states-errors.md)
=======
  - [Errori comuni nelle transizioni custom ()](../../<nome modulo>/docs/model-states-errors.md)
  - [Errori comuni nelle transizioni custom (<nome progetto>)](../../../docs/model-states-errors.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
  - [Errori comuni nelle transizioni custom (SaluteOra)](../../SaluteOra/docs/model-states-errors.md)
>>>>>>> 43d67f21 (.)
=======
  - [Errori comuni nelle transizioni custom ()](../../<nome modulo>/docs/model-states-errors.md)
  - [Errori comuni nelle transizioni custom (SaluteOra)](../../SaluteOra/docs/model-states-errors.md)
>>>>>>> 5a14301c (.)
  - [README.md centrale](../../../docs/README.md) 
