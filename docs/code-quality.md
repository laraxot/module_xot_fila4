# Linee Guida Qualità del Codice (Modulo Xot)

> **Versione**: 1.1  
> **Ultimo aggiornamento**: Novembre 2025  
> **Changelog**: [CHANGELOG.md](./CHANGELOG.md)

## 🎯 Obiettivo
Garantire che il modulo Xot (core framework) mantenga standard elevati di qualità, leggibilità e manutenibilità. Le regole valgono per TUTTI i moduli che dipendono da Xot.

---

## 🧭 Principi Fondamentali
1. **Tipizzazione forte**: `declare(strict_types=1);` è obbligatorio in ogni file PHP
2. **Static analysis first**: PHPStan livello 10 (config di progetto)
3. **PSR-12 + Laraxot style**: Formattazione con Laravel Pint (`./vendor/bin/pint`)
4. **Documentazione**: PHPDoc su public API + documenti aggiornati in `docs/`
5. **Single Responsibility**: classi e metodi con responsabilità chiara

---

## 🛠️ Implementazione

### Tipi & PHPStan
```php
<?php

declare(strict_types=1);

namespace Modules\Xot\...;

final class Example
{
    public function handle(string $input): string
    {
        return \mb_strtoupper($input);
    }
}
```

Eseguire regolarmente:
```bash
./vendor/bin/phpstan analyse Modules/Xot --level=max
```

### Safe Functions
Usare la libreria `thecodingmachine/safe` per funzioni native:
```php
use function Safe\file_get_contents;
$content = file_get_contents($path);
```

### Metodi e Classi
- Metodo: max 20 linee (estrarre logica complessa in metodi privati)
- Classe: max 200 linee (valutare traits o classi dedicate)
- Dipendenze tramite **constructor injection**

---

## 🔄 Automazioni

| Script | Descrizione |
|--------|-------------|
| `bashscripts/test/run-phpstan-all-modules.sh` | Esegue PHPStan su tutti i moduli |
| `bashscripts/docs/fix_docs_case.md` | Standardizza naming documenti |
| `bashscripts/git/conflict_resolution/resolve_conflicts_current_change_v6.sh` | Risoluzione conflitti Git |

Eseguire gli script in CI/CD e prima di merge critici.

---

## ❗ Problemi Comuni
- **Errori di tipo**: aggiungere type hint e return type
- **Warning PHPStan**: analizzare e correggere, evitare baselines “infinite”
- **Duplicazioni**: refactoring in metodi/traits condivisi
- **Nomi generici**: preferire `$userProfileData` a `$data`

---

## ✅ Check-list Qualità
1. `declare(strict_types=1);`
2. Type hint parametri + ritorni
3. PHPDoc sulle classi/Metodi pubblici
4. Nessuna violazione PHPStan
5. Formattazione Pint/PSR-12
6. Test aggiornata (`./vendor/bin/pest`)

---

## 📚 Documenti Collegati
- [PHP Strict Types](./php-strict-types.md)
- [PHPStan Implementation Guide](./phpstan-implementation-guide.md)
- [Naming Conventions](./naming-conventions.md)
- [Service Provider Best Practices](./service-provider-best-practices.md)
- [Filament Best Practices](./filament-best-practices.md)

---

**Nota**: Ogni deroga alle presenti regole deve essere documentata nella cartella `docs/` del modulo interessato.
