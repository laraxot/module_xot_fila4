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
# Linee Guida per le Risorse Filament nel Progetto <nome progetto>
=======
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 5a14301c (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 399f46d3 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> d86d643a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 472bd9dc (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> d86d643a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> d86d643a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 472bd9dc (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 3bf39332 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> cf971011 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> e7da37af (.)
=======
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto <nome progetto>
>>>>>>> a5dccfe (.)
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
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 43d67f21 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 5a14301c (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 43d67f21 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> b7ea1cd1 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 5a14301c (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 43d67f21 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 5a14301c (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 43d67f21 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> b7ea1cd1 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 76bec91a (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 55fe1822 (.)
=======
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 5a14301c (.)
=======
# Linee Guida per le Risorse Filament nel Progetto SaluteOra
>>>>>>> 399f46d3 (.)

## Regole Generali

1. **Estensione di XotBaseResource**: Tutte le risorse Filament devono estendere `Modules\Xot\Filament\Resources\XotBaseResource` invece di `Filament\Resources\Resource` per mantenere coerenza e centralizzare comportamenti comuni.
2. **Proprietà di Navigazione**: Le classi che estendono `XotBaseResource` non devono includere proprietà come `navigationIcon`, `navigationGroup`, `navigationSort` se non strettamente necessarie, poiché queste sono gestite dalla classe base.
3. **Metodi di Configurazione**: Non definire metodi come `getTableColumns()`, `getRelations()` o `getPages()` se restituiscono solo valori predefiniti o standard (ad esempio, `getPages()` con solo `index`, `create`, `edit`).
4. **Etichette e Traduzioni**: Non utilizzare `->label()` per le etichette dei componenti Filament. Utilizzare i file di traduzione del modulo in `Modules/<nome modulo>/lang/<lingua>` per gestire le etichette automaticamente tramite `LangServiceProvider`.

## Collegamenti Bidirezionali

- [Documentazione Principale sui Problemi di Namespace](../../../../project_docs/references/namespace-issues.md)
- [Documentazione del Modulo Patient](../Patient/project_docs/errors/undefined-type-pending.md)
- [Riferimento alle Linee Guida nel Modulo Patient](../Patient/project_docs/references/filament-guidelines-link.md)

## Note

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
Queste linee guida sono centrali per tutti i moduli del progetto <nome progetto>. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 5a14301c (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 399f46d3 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 472bd9dc (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 472bd9dc (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 3bf39332 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> cf971011 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> e7da37af (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto <nome progetto>. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> a5dccfe (.)
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
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 43d67f21 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 5a14301c (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 43d67f21 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> b7ea1cd1 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 5a14301c (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 43d67f21 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 5a14301c (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 43d67f21 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 76bec91a (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 55fe1822 (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 5a14301c (.)
=======
Queste linee guida sono centrali per tutti i moduli del progetto SaluteOra. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
>>>>>>> 399f46d3 (.)
