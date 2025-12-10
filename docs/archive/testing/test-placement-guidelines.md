---
description: Regole di posizionamento dei test per il core Xot
---

# Test Placement Guidelines (Xot)

Queste regole definiscono dove devono essere salvati i file di test relativi al **core Xot** e hanno lo scopo di evitare che i test vengano sovrascritti dagli aggiornamenti di Laravel o da altri framework.

## 1. Directory dei test

```
Modules/Xot/tests/
├── Browser/   # Test browser (Dusk, Playwright, ecc.)
├── Feature/   # Test funzionali / HTTP
└── Unit/      # Test unitari & piccoli helper
```

* **NON** creare o lasciare file di test in `/laravel/tests/` fatta eccezione per gli stub installati automaticamente da Laravel.
* Ogni nuovo test del core Xot **deve** essere inserito nella sotto-cartella opportuna del percorso sopra.

## 2. Namespace

Il namespace dei test deve riflettere la struttura cartelle:

```php
namespace Modules\Xot\Tests\{Unit|Feature|Browser};
```

Esempio per un test unitario:

```php
<?php

declare(strict_types=1);

namespace Modules\Xot\Tests\Unit;

use Modules\Xot\...;
use Tests\TestCase;

class MetatagDataTest extends TestCase
{
    // ...
}
```

## 3. Spostamento automatico

Quando si individuano test errati in `/laravel/tests/`, spostarli manualmente o usare il comando helper:

```bash
php artisan xot:fix-test-paths
```

Questo comando cerca test con il prefisso `Modules\Xot\` in percorsi sbagliati e li sposta nella cartella corretta.

## 4. Aggiornamento della documentazione

Dopo aver aggiunto o spostato test:

1. Aggiornare questo file **se la struttura cambia**.
2. Aggiornare la documentazione root `docs/testing.md` con eventuali nuove regole globali.
3. Collegare la view con breadcrumb:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 85cdef688 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 6ca989d8 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
=======
   - `docs/testing.md` → `Modules/Xot/project_docs/testing/test-placement-guidelines.md`
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 091f883c (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 67be6ac0 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
=======
   - `docs/testing.md` → `Modules/Xot/project_docs/testing/test-placement-guidelines.md`
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 59259b43 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 88ee35c4e (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
=======
   - `docs/testing.md` → `Modules/Xot/project_docs/testing/test-placement-guidelines.md`
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> aba62c408 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 92cca5ade (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
=======
   - `docs/testing.md` → `Modules/Xot/project_docs/testing/test-placement-guidelines.md`
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 5cb992cc6 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 6a52563d6 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
=======
   - `docs/testing.md` → `Modules/Xot/project_docs/testing/test-placement-guidelines.md`
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 3c8d62b79 (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 317b552da (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
=======
   - `docs/testing.md` → `Modules/Xot/project_docs/testing/test-placement-guidelines.md`
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
   - `docs/testing.md` → `Modules/Xot/docs/testing/test-placement-guidelines.md`
>>>>>>> 60f0a1820 (.)
   - Questo file → `docs/testing.md`

## 5. Checklist PR

- [ ] Il test è nella cartella corretta `Modules/Xot/tests/...`
- [ ] Il namespace corrisponde al percorso della cartella
- [ ] Non esistono test duplicati nella root `/laravel/tests/`
- [ ] PHPStan livello 9+ passa senza errori
- [ ] Documentazione aggiornata (questo file & root docs)

*Ultimo aggiornamento: 2025-07-06 – aggiunte linee guida per prevenire posizionamenti errati (es. `MetatagDataTest`).*
