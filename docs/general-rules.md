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
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> 85cdef688 (.)
=======
# Regole Generali del Progetto SaluteOra

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto SaluteOra per garantire coerenza e qualità del codice.
>>>>>>> 6ca989d8 (.)
=======
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> 62cc8443 (.)
=======
# Regole Generali del Progetto SaluteOra

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto SaluteOra per garantire coerenza e qualità del codice.
>>>>>>> 67be6ac0 (.)
=======
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> ab5b3a4f (.)
=======
# Regole Generali del Progetto SaluteOra

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto SaluteOra per garantire coerenza e qualità del codice.
>>>>>>> 88ee35c4e (.)
=======
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> 88e745db5 (.)
=======
# Regole Generali del Progetto SaluteOra

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto SaluteOra per garantire coerenza e qualità del codice.
>>>>>>> 92cca5ade (.)
=======
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> 7e4835b8e (.)
=======
# Regole Generali del Progetto SaluteOra

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto SaluteOra per garantire coerenza e qualità del codice.
>>>>>>> 6a52563d6 (.)
=======
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> 9f193021d (.)
=======
# Regole Generali del Progetto SaluteOra

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto SaluteOra per garantire coerenza e qualità del codice.
>>>>>>> 317b552da (.)
=======
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> d9f43fce9 (.)
=======
# Regole Generali del Progetto 

Questo documento contiene le regole generali che devono essere seguite in tutto il progetto  per garantire coerenza e qualità del codice.
>>>>>>> 80bc07e81 (.)

## Struttura dei Namespace
- **Modelli**: Utilizzare il namespace `Modules\<nome modulo>\Models` per tutti i modelli.
- **Filament**: Utilizzare il namespace `Modules\<nome modulo>\Filament` per i componenti Filament, anche se si trovano nella directory `app/Filament`.

## Estensione dei Modelli
- I modelli devono estendere classi base personalizzate come `BaseUser` o `XotBaseModel` invece di `Illuminate\Database\Eloquent\Model` quando applicabile.

## Gestione degli Attributi
- L'attributo `$casts` è deprecato e deve essere sostituito con il metodo `casts()`.

## Traduzioni
- Le traduzioni devono essere gestite tramite file di lingua in `Modules/<nome modulo>/lang/<lingua>` e non con `->label()`.

## Struttura dei Moduli
- Ogni modulo ha uno scopo specifico. Gli elementi frontend devono essere nel modulo `Cms`.

## Collegamenti Bidirezionali
- Questo documento è collegato alle documentazioni dei seguenti moduli:
  - [Patient Module Documentation](../../../Patient/docs/doctor-model-update.md)
  - [User Module Documentation](../../../User/docs/user-model-guidelines.md)

Queste regole devono essere seguite per garantire che il codice passi i controlli di qualità futuri e aderisca ai principi DRY (Don't Repeat Yourself) e KISS (Keep It Simple, Stupid). Considerare sempre le implicazioni di politica, filosofia, religione e zen nelle soluzioni implementate.
