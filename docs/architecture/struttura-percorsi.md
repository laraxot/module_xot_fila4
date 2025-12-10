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
=======
# Struttura dei percorsi nel progetto 

> **Ambiente di riferimento**: `/var/www/_bases/base_ptvx_fila4_mono/`

## 🔑 Regola Fondamentale
Tutti i percorsi assoluti DEVONO includere il segmento `laravel/` subito dopo la directory di base del progetto.

```
/var/www/_bases/base_ptvx_fila4_mono/laravel/{componente}/{resto-del-percorso}
                                 ↑
                           segmento obbligatorio
```

## ✅ Percorsi Correttamente Formati
```
/var/www/_bases/base_ptvx_fila4_mono/laravel/app/Models/User.php
/var/www/_bases/base_ptvx_fila4_mono/laravel/Modules/Xot/app/Providers/XotBaseServiceProvider.php
/var/www/_bases/base_ptvx_fila4_mono/laravel/Themes/One/resources/views/layouts/app.blade.php
/var/www/_bases/base_ptvx_fila4_mono/laravel/resources/lang/it/validation.php
/var/www/_bases/base_ptvx_fila4_mono/laravel/vendor/laravel/framework/src/Illuminate/Foundation/Application.php
```

## ❌ Percorsi Errati (segmento mancante)
```
/var/www/_bases/base_ptvx_fila4_mono/app/Models/User.php
/var/www/_bases/base_ptvx_fila4_mono/Modules/Xot/app/Providers/XotBaseServiceProvider.php
/var/www/_bases/base_ptvx_fila4_mono/resources/lang/it/validation.php
```

## 🗂️ Anatomia del Progetto
```
/var/www/_bases/base_ptvx_fila4_mono/
├── docs/                 # Documentazione generale
└── laravel/              # ⭐ Applicazione Laravel
    ├── app/
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
# Struttura dei percorsi nel progetto 

## Regola fondamentale

**Tutti i percorsi assoluti nel progetto PTVX DEVONO includere il segmento `laravel/` dopo `base_ptvx_fila3_mono/`.**
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
>>>>>>> 6cba4fe (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
# Struttura dei percorsi nel progetto SaluteOra

## Regola fondamentale

**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_saluteora/`.**
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
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
# Struttura dei percorsi nel progetto PTV

## Regola fondamentale

**Tutti i percorsi assoluti nel progetto PTV DEVONO includere il segmento `laravel/` dopo `base_ptv_fila3_mono/`.**
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 5a14301c (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 3fbbf1f5 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 71f31700 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 3310e9c6 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> c35986f4 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 5a14301c (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 3fbbf1f5 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 71f31700 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 5a14301c (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 3fbbf1f5 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 71f31700 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 3310e9c6 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> c35986f4 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 6dcebf8a (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> cafe8bed (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 5bd842e3 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 5cd593a5 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 03ceeac3 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 5a14301c (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
=======
>>>>>>> f1d4085 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 3fbbf1f5 (.)
=======
**Tutti i percorsi assoluti nel progetto SaluteOra DEVONO includere il segmento `laravel/` dopo `base_techplanner_fila3_mono/`.**
>>>>>>> 71f31700 (.)

Questa regola è **ASSOLUTA** e non ammette eccezioni.

## Anatomia di un percorso corretto

```
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 71f31700 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 3310e9c6 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> c35986f4 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 71f31700 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 71f31700 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 3310e9c6 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> c35986f4 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6dcebf8a (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> cafe8bed (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 5bd842e3 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 5cd593a5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 03ceeac3 (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_saluteora/laravel/{componente}/{resto-del-percorso}
/var/www/html/base_techplanner_fila3_mono/laravel/{componente}/{resto-del-percorso}
>>>>>>> 71f31700 (.)
                         ↑        ↑
                     progetto  segmento
                    principale OBBLIGATORIO
```

## Percorsi corretti vs. percorsi errati

### ✅ Percorsi CORRETTI

```
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
/var/www/html/base_techplanner_fila3_mono/laravel/app/Models/User.php
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Patient/Models/Doctor.php
/var/www/html/base_techplanner_fila3_mono/laravel/Themes/One/resources/views/layouts/app.blade.php
/var/www/html/base_techplanner_fila3_mono/laravel/resources/lang/it/validation.php
/var/www/html/base_techplanner_fila3_mono/laravel/vendor/laravel/framework/...
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
>>>>>>> 6cba4fe (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
/var/www/html/base_saluteora/laravel/app/Models/User.php
/var/www/html/base_saluteora/laravel/Modules/Patient/Models/Doctor.php
/var/www/html/base_saluteora/laravel/Themes/One/resources/views/layouts/app.blade.php
/var/www/html/base_saluteora/laravel/resources/lang/it/validation.php
/var/www/html/base_saluteora/laravel/vendor/laravel/framework/...
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
/var/www/_bases/base_ptv_fila3_mono/laravel/app/Models/User.php
/var/www/_bases/base_ptv_fila3_mono/laravel/Modules/User/Models/User.php
/var/www/_bases/base_ptv_fila3_mono/laravel/Modules/Xot/resources/views/layouts/app.blade.php
/var/www/_bases/base_ptv_fila3_mono/laravel/resources/lang/it/validation.php
/var/www/_bases/base_ptv_fila3_mono/laravel/vendor/laravel/framework/...
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
```

### ❌ Percorsi ERRATI

```
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
/var/www/html/base_techplanner_fila3_mono/app/Models/User.php
/var/www/html/base_techplanner_fila3_mono/Modules/Patient/Models/Doctor.php
/var/www/html/base_techplanner_fila3_mono/Themes/One/resources/views/layouts/app.blade.php
/var/www/html/base_techplanner_fila3_mono/resources/lang/it/validation.php
/var/www/html/base_techplanner_fila3_mono/vendor/laravel/framework/...
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
>>>>>>> 6cba4fe (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
/var/www/html/base_saluteora/app/Models/User.php
/var/www/html/base_saluteora/Modules/Patient/Models/Doctor.php
/var/www/html/base_saluteora/Themes/One/resources/views/layouts/app.blade.php
/var/www/html/base_saluteora/resources/lang/it/validation.php
/var/www/html/base_saluteora/vendor/laravel/framework/...
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
/var/www/_bases/base_ptv_fila3_mono/app/Models/User.php
/var/www/_bases/base_ptv_fila3_mono/Modules/User/Models/User.php
/var/www/_bases/base_ptv_fila3_mono/Modules/Xot/resources/views/layouts/app.blade.php
/var/www/_bases/base_ptv_fila3_mono/resources/lang/it/validation.php
/var/www/_bases/base_ptv_fila3_mono/vendor/laravel/framework/...
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
```

## Struttura completa del progetto

```
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 71f31700 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 3310e9c6 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> c35986f4 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 71f31700 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 71f31700 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 3310e9c6 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> c35986f4 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 6dcebf8a (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> cafe8bed (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 5bd842e3 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 5cd593a5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 03ceeac3 (.)
=======
/var/www/html/base_saluteora/
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
/var/www/_bases/base_ptv_fila3_mono/
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 5a14301c (.)
=======
/var/www/html/base_saluteora/
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 3fbbf1f5 (.)
=======
/var/www/html/base_techplanner_fila3_mono/
/var/www/html/base_saluteora/
/var/www/html/base_techplanner_fila3_mono/
>>>>>>> 71f31700 (.)
├── .cursor/                            # Configurazioni editor
├── .windsurf/                          # Configurazioni di sistema
├── docs/                               # Documentazione generale
└── laravel/                            # ⭐️ APPLICAZIONE LARAVEL
    ├── app/                            # Core application
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
    │   ├── Console/
    │   ├── Exceptions/
    │   ├── Http/
    │   ├── Models/
    │   ├── Providers/
    │   └── View/
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
    ├── bootstrap/
    ├── config/
    ├── database/
    ├── Modules/          # Moduli Laraxot (36 moduli totali)
    │   ├── Activity/
    │   ├── Gdpr/
    │   ├── Lang/
    │   ├── Notify/
    │   ├── Sigma/
    │   ├── User/
    │   └── Xot/         # Core framework
    ├── public/
    ├── resources/
    ├── routes/
    ├── storage/
    ├── themes/
    └── vendor/
=======
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
    ├── bootstrap/                      # Bootstrap files
    ├── config/                         # Configurazioni
    ├── database/                       # Migrations, factories, seeders
    ├── Modules/                        # ⭐️ MODULI DEL PROGETTO
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
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
    │   ├── Core/
    │   ├── Patient/
=======
    │   ├── Activity/
    │   ├── DbForge/
    │   ├── Gdpr/
    │   ├── Job/
    │   ├── Lang/
    │   ├── Media/
    │   ├── Notify/
    │   ├── Rating/
    │   ├── Tenant/
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 5a14301c (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 5a14301c (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 5a14301c (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> ab8cc3f3 (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 5a14301c (.)
=======
    │   ├── Core/
    │   ├── Patient/
>>>>>>> 71f31700 (.)
    │   ├── UI/
    │   ├── User/
    │   ├── Xot/
    │   └── ...
    ├── public/                         # Public assets
    ├── resources/                      # Views, assets, lang
    ├── routes/                         # Routes
    ├── storage/                        # Storage
    ├── Themes/                         # ⭐️ TEMI DEL PROGETTO
    │   └── One/
    └── vendor/                         # Dependencies
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
```

## Importanza della regola

Il rispetto di questa struttura è fondamentale per:

1. **Consistenza**: Garantisce uniformità nei riferimenti ai file
2. **Chiarezza**: Rende evidente la separazione tra l'app Laravel e il resto
3. **Deployment**: Facilita le operazioni di deploy e aggiornamento
4. **Modularità**: Supporta la struttura modulare del progetto
5. **Compatibilità**: Mantiene la compatibilità con tool e script

## Rilevamento errori nei percorsi

Prima di ogni commit, eseguire questi comandi per verificare la presenza di percorsi errati:

```bash

# Verifica percorsi errati
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
grep -r "/var/www/html/base_techplanner_fila3_mono/app" --include="*.php" /var/www/html/base_techplanner_fila3_mono/laravel
grep -r "/var/www/html/base_techplanner_fila3_mono/Modules" --include="*.php" /var/www/html/base_techplanner_fila3_mono/laravel
grep -r "/var/www/html/base_techplanner_fila3_mono/Themes" --include="*.php" /var/www/html/base_techplanner_fila3_mono/laravel
grep -r "/var/www/html/base_techplanner_fila3_mono/resources" --include="*.php" /var/www/html/base_techplanner_fila3_mono/laravel
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
grep -r "/var/www/html/base_<nome progetto>/app" --include="*.php" /var/www/html/base_<nome progetto>/laravel
grep -r "/var/www/html/base_<nome progetto>/Modules" --include="*.php" /var/www/html/base_<nome progetto>/laravel
grep -r "/var/www/html/base_<nome progetto>/Themes" --include="*.php" /var/www/html/base_<nome progetto>/laravel
grep -r "/var/www/html/base_<nome progetto>/resources" --include="*.php" /var/www/html/base_<nome progetto>/laravel
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
grep -r "/var/www/html/base_saluteora/app" --include="*.php" /var/www/html/base_saluteora/laravel
grep -r "/var/www/html/base_saluteora/Modules" --include="*.php" /var/www/html/base_saluteora/laravel
grep -r "/var/www/html/base_saluteora/Themes" --include="*.php" /var/www/html/base_saluteora/laravel
grep -r "/var/www/html/base_saluteora/resources" --include="*.php" /var/www/html/base_saluteora/laravel
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
grep -r "/var/www/_bases/base_ptv_fila3_mono/app" --include="*.php" /var/www/_bases/base_ptv_fila3_mono/laravel
grep -r "/var/www/_bases/base_ptv_fila3_mono/Modules" --include="*.php" /var/www/_bases/base_ptv_fila3_mono/laravel
grep -r "/var/www/_bases/base_ptv_fila3_mono/Themes" --include="*.php" /var/www/_bases/base_ptv_fila3_mono/laravel
grep -r "/var/www/_bases/base_ptv_fila3_mono/resources" --include="*.php" /var/www/_bases/base_ptv_fila3_mono/laravel
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
```

## Correzzione automatica (opzionale)

Se si trovano percorsi errati, è possibile correggerli automaticamente con:

```bash

# Correzione automatica (uso con cautela)
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
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/app|/var/www/html/base_techplanner_fila3_mono/laravel/app|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Modules|/var/www/html/base_techplanner_fila3_mono/laravel/Modules|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Themes|/var/www/html/base_techplanner_fila3_mono/laravel/Themes|g' {} \;
<<<<<<< HEAD
find /var/www/html/base_<nome progetto>/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_<nome progetto>/app|/var/www/html/base_<nome progetto>/laravel/app|g' {} \;
find /var/www/html/base_<nome progetto>/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_<nome progetto>/Modules|/var/www/html/base_<nome progetto>/laravel/Modules|g' {} \;
find /var/www/html/base_<nome progetto>/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_<nome progetto>/Themes|/var/www/html/base_<nome progetto>/laravel/Themes|g' {} \;
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/app|/var/www/html/base_techplanner_fila3_mono/laravel/app|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Modules|/var/www/html/base_techplanner_fila3_mono/laravel/Modules|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Themes|/var/www/html/base_techplanner_fila3_mono/laravel/Themes|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/app|/var/www/html/base_saluteora/laravel/app|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Modules|/var/www/html/base_saluteora/laravel/Modules|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Themes|/var/www/html/base_saluteora/laravel/Themes|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/app|/var/www/html/base_techplanner_fila3_mono/laravel/app|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Modules|/var/www/html/base_techplanner_fila3_mono/laravel/Modules|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Themes|/var/www/html/base_techplanner_fila3_mono/laravel/Themes|g' {} \;
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/app|/var/www/html/base_saluteora/laravel/app|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Modules|/var/www/html/base_saluteora/laravel/Modules|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Themes|/var/www/html/base_saluteora/laravel/Themes|g' {} \;
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
>>>>>>> 5a14301c (.)
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/app|/var/www/html/base_techplanner_fila3_mono/laravel/app|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Modules|/var/www/html/base_techplanner_fila3_mono/laravel/Modules|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Themes|/var/www/html/base_techplanner_fila3_mono/laravel/Themes|g' {} \;
=======
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/app|/var/www/html/base_techplanner_fila3_mono/laravel/app|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Modules|/var/www/html/base_techplanner_fila3_mono/laravel/Modules|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Themes|/var/www/html/base_techplanner_fila3_mono/laravel/Themes|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/app|/var/www/html/base_saluteora/laravel/app|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Modules|/var/www/html/base_saluteora/laravel/Modules|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Themes|/var/www/html/base_saluteora/laravel/Themes|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/app|/var/www/html/base_techplanner_fila3_mono/laravel/app|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Modules|/var/www/html/base_techplanner_fila3_mono/laravel/Modules|g' {} \;
find /var/www/html/base_techplanner_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_techplanner_fila3_mono/Themes|/var/www/html/base_techplanner_fila3_mono/laravel/Themes|g' {} \;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/app|/var/www/html/base_saluteora/laravel/app|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Modules|/var/www/html/base_saluteora/laravel/Modules|g' {} \;
find /var/www/html/base_saluteora/laravel -type f -name "*.php" -exec sed -i 's|/var/www/html/base_saluteora/Themes|/var/www/html/base_saluteora/laravel/Themes|g' {} \;
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
find /var/www/_bases/base_ptv_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/_bases/base_ptv_fila3_mono/app|/var/www/_bases/base_ptv_fila3_mono/laravel/app|g' {} \;
find /var/www/_bases/base_ptv_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/_bases/base_ptv_fila3_mono/Modules|/var/www/_bases/base_ptv_fila3_mono/laravel/Modules|g' {} \;
find /var/www/_bases/base_ptv_fila3_mono/laravel -type f -name "*.php" -exec sed -i 's|/var/www/_bases/base_ptv_fila3_mono/Themes|/var/www/_bases/base_ptv_fila3_mono/laravel/Themes|g' {} \;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
```

## Riferimenti correlati

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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
<<<<<<< HEAD
<<<<<<< HEAD
- [Struttura del progetto](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/standards/namespace-conventions.md)
- [Autoloading](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/standards/psr4-compliance.md)
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
- [Struttura del progetto](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/architecture/struttura-progetto.md)
- [Regole di namespace](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/standards/namespace-conventions.md)
- [Autoloading](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/standards/psr4-compliance.md)
=======
=======
=======
=======
=======
>>>>>>> 71f31700 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 5a14301c (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 71f31700 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> c35986f4 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 5a14301c (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 71f31700 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 5a14301c (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 71f31700 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 6dcebf8a (.)
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> ab8cc3f3 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 5bd842e3 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 03ceeac3 (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 5a14301c (.)
=======
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
>>>>>>> 71f31700 (.)
- [Struttura del progetto](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/standards/namespace-conventions.md)
- [Autoloading](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/standards/psr4-compliance.md)
- [Struttura del progetto](../Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](../Xot/docs/standards/namespace-conventions.md)
- [Autoloading](../Xot/docs/standards/psr4-compliance.md)
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cc52d333 (.)
=======
- [Struttura del progetto](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/standards/namespace-conventions.md)
- [Autoloading](/var/www/html/base_saluteora/laravel/Modules/Xot/docs/standards/psr4-compliance.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
- [Struttura del progetto](/var/www/_bases/base_ptv_fila3_mono/laravel/Modules/Xot/docs/architecture/struttura-progetto.md)
- [Regole di namespace](/var/www/_bases/base_ptv_fila3_mono/laravel/Modules/Xot/docs/standards/namespace-conventions.md)
- [Autoloading](/var/www/_bases/base_ptv_fila3_mono/laravel/Modules/Xot/docs/standards/psr4-compliance.md)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
- [Struttura del progetto](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/architecture/struttura-progetto.md)
- [Regole di namespace](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/standards/namespace-conventions.md)
- [Autoloading](/var/www/html/base_saluteora/laravel/Modules/Xot/project_docs/standards/psr4-compliance.md)
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> cc7fb225 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
