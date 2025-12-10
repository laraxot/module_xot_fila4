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
# Linee Guida per le Risorse Filament nel Progetto 
# Linee Guida per le Risorse Filament nel Progetto <nome progetto>
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
>>>>>>> 6ca989d8 (.)

## Regole Generali

1. **Estensione di XotBaseResource**: Tutte le risorse Filament devono estendere `Modules\Xot\Filament\Resources\XotBaseResource` invece di `Filament\Resources\Resource` per mantenere coerenza e centralizzare comportamenti comuni.
2. **Proprietà di Navigazione**: Le classi che estendono `XotBaseResource` non devono includere proprietà come `navigationIcon`, `navigationGroup`, `navigationSort` se non strettamente necessarie, poiché queste sono gestite dalla classe base.
3. **Metodi di Configurazione**: Non definire metodi come `getTableColumns()`, `getRelations()` o `getPages()` se restituiscono solo valori predefiniti o standard (ad esempio, `getPages()` con solo `index`, `create`, `edit`).
4. **Etichette e Traduzioni**: Non utilizzare `->label()` per le etichette dei componenti Filament. Utilizzare i file di traduzione del modulo in `Modules/<nome modulo>/lang/<lingua>` per gestire le etichette automaticamente tramite `LangServiceProvider`.

## Collegamenti Bidirezionali


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
Queste linee guida sono centrali per tutti i moduli del progetto . Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
Queste linee guida sono centrali per tutti i moduli del progetto <nome progetto>. Ogni modulo deve fare riferimento a questo documento per garantire coerenza nello sviluppo delle risorse Filament.
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
>>>>>>> 6ca989d8 (.)
