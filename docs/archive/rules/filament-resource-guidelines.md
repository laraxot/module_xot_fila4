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
# Linee Guida per le Risorse Filament nel Progetto <nome progetto>
=======
# Linee Guida per le Risorse Filament nel Progetto 
>>>>>>> 6ca989d8 (.)
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
<<<<<<< HEAD
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto <nome progetto>
=======
>>>>>>> d86d643a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 472bd9dc (.)
=======
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto <nome progetto>
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
<<<<<<< HEAD
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
=======
>>>>>>> 43d67f21 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 33af3e61 (.)
>>>>>>> 67be6ac0 (.)

## Regole Generali

1. **Estensione di XotBaseResource**: Tutte le risorse Filament devono estendere `Modules\Xot\Filament\Resources\XotBaseResource` invece di `Filament\Resources\Resource` per mantenere coerenza e centralizzare comportamenti comuni.
2. **Proprietà di Navigazione**: Le classi che estendono `XotBaseResource` non devono includere proprietà come `navigationIcon`, `navigationGroup`, `navigationSort` se non strettamente necessarie, poiché queste sono gestite dalla classe base.
3. **Metodi di Configurazione**: Non definire metodi come `getTableColumns()`, `getRelations()` o `getPages()` se restituiscono solo valori predefiniti o standard (ad esempio, `getPages()` con solo `index`, `create`, `edit`).
4. **Etichette e Traduzioni**: Non utilizzare `->label()` per le etichette dei componenti Filament. Utilizzare i file di traduzione del modulo in `Modules/<nome modulo>/lang/<lingua>` per gestire le etichette automaticamente tramite `LangServiceProvider`.

## Collegamenti Bidirezionali

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 2bad128c (.)
- [Documentazione Principale sui Problemi di Namespace](../../../../docs/references/namespace-issues.md)
- [Documentazione del Modulo Patient](../Patient/docs/errors/undefined-type-pending.md)
- [Riferimento alle Linee Guida nel Modulo Patient](../Patient/docs/references/filament-guidelines-link.md)
=======
- [Documentazione Principale sui Problemi di Namespace](../../../../project_docs/references/namespace-issues.md)
- [Documentazione del Modulo Patient](../Patient/project_docs/errors/undefined-type-pending.md)
- [Riferimento alle Linee Guida nel Modulo Patient](../Patient/project_docs/references/filament-guidelines-link.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [Documentazione Principale sui Problemi di Namespace](../../../../docs/references/namespace-issues.md)
- [Documentazione del Modulo Patient](../Patient/docs/errors/undefined-type-pending.md)
- [Riferimento alle Linee Guida nel Modulo Patient](../Patient/docs/references/filament-guidelines-link.md)
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)

## Note

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
Queste linee guida sono centrali per tutti i moduli del progetto <nome progetto>. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 6ca989d8 (.)
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
<<<<<<< HEAD
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto <nome progetto>. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
=======
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 472bd9dc (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto <nome progetto>. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
<<<<<<< HEAD
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
=======
>>>>>>> 43d67f21 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 5a14301c (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 43d67f21 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 33af3e61 (.)
>>>>>>> 67be6ac0 (.)
