# Struttura Percorsi Progetto PTVX

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
    │   ├── Console/
    │   ├── Exceptions/
    │   ├── Http/
    │   ├── Models/
    │   ├── Providers/
    │   └── View/
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
```

## 📌 Note Operative
- Quando si documentano percorsi in README o guide, usare sempre la forma completa con `laravel/`
- Script bash e documentazione devono rispettare la stessa convenzione
- In ambienti multipli (es. `base_<nome progetto>`, `base_performance`), sostituire solo il segmento di base; il resto resta identico
