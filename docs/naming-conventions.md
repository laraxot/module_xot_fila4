<<<<<<< HEAD
```bash
# Rimuovere duplicato lowercase
rm tests/Feature/fixstructuretest.pest.php
=======
# Convenzioni di Nomenclatura in <nome progetto>

Questo documento definisce le convenzioni ufficiali di nomenclatura da utilizzare in tutto il progetto <nome progetto>.

## Convenzioni Generali

### Formato Case

- **PascalCase**: Prima lettera maiuscola, senza spazi o separatori (es. `UserProfile`)
  - Usato per: Nomi di classi, interfacce, enumerazioni, nomi dei moduli
  
- **camelCase**: Prima lettera minuscola, senza spazi o separatori (es. `getUserProfile`)
  - Usato per: Metodi, funzioni, proprietà non statiche
  
- **snake_case**: Tutte le lettere minuscole, parole separate da underscore (es. `user_profile`)
  - Usato per: Variabili, costanti di classe (non globali), nomi di file delle viste, tabelle del database, colonne del database
  
- **UPPER_SNAKE_CASE**: Tutte le lettere maiuscole, parole separate da underscore (es. `MAX_LOGIN_ATTEMPTS`)
  - Usato per: Costanti globali, enums

## Moduli

### Nome del Modulo

Il nome del modulo deve essere in formato **PascalCase** con la prima lettera maiuscola.

- ✅ CORRETTO: `Blog`, `UserProfile`, `MobilitaVolontaria`
- ❌ ERRATO: `blog`, `userProfile`, `mobilitavolontaria`, `Mobilita_Volontaria`

### Namespace del Modulo

I namespace dei moduli devono seguire il formato:

```php
namespace Modules\NomeModulo;
```

### Service Provider

Il service provider principale di un modulo deve:

1. Avere il nome che termina con `ServiceProvider` 
2. Estendere `XotBaseServiceProvider`
3. Definire una proprietà `$name` con il nome del modulo in **PascalCase**

```php
class BlogServiceProvider extends XotBaseServiceProvider {
    public string $name = 'Blog';
    // ...
}
```

## Database

### Tabelle

I nomi delle tabelle devono essere in **snake_case** e al plurale:

- ✅ CORRETTO: `users`, `blog_posts`, `user_profiles`
- ❌ ERRATO: `User`, `BlogPost`, `user_profile`

### Colonne

I nomi delle colonne devono essere in **snake_case**:

- ✅ CORRETTO: `first_name`, `created_at`, `user_id`
- ❌ ERRATO: `firstName`, `CreatedAt`, `UserID`

### Chiavi Primarie

Usare `id` come nome della chiave primaria.

### Chiavi Esterne

Usare `table_name_singular_id` come formato per le chiavi esterne:

- ✅ CORRETTO: `user_id`, `blog_post_id`
- ❌ ERRATO: `userID`, `blogPostId`, `user`

## Filament

### Nomi delle Risorse

I nomi delle risorse Filament devono essere in **PascalCase** e terminare con `Resource`:

- ✅ CORRETTO: `UserResource`, `BlogPostResource`
- ❌ ERRATO: `Users`, `blogPost`, `Blog_Post_Resource`

### Metodi per le azioni

I metodi per le azioni delle tabelle devono essere **pubblici**:

```php
// ✅ CORRETTO
public function getTableHeaderActions(): array
{
    // ...
}

// ❌ ERRATO
protected function getTableHeaderActions(): array
{
    // ...
}
```

## Traduzioni

### Chiavi di Traduzione

Le chiavi di traduzione devono essere in **snake_case**:

```php
// File di traduzione
return [
    'user_profile' => [
        'title' => 'Profilo Utente',
        'fields' => [
            'first_name' => 'Nome',
            'last_name' => 'Cognome',
        ],
    ],
];
```

## Repository Git

### Nomi dei Branch

- **feature/nome-feature**: Per nuove funzionalità
- **bugfix/descrizione-bug**: Per correzioni di bug
- **hotfix/descrizione-hotfix**: Per correzioni urgenti
- **release/versione**: Per preparare release

### Commit Message

Formato consigliato:
```
type(scope): descrizione breve

Descrizione dettagliata se necessaria
```

Tipi: `feat`, `fix`, `docs`, `style`, `refactor`, `test`, `chore`
# Convenzioni di Nomenclatura in Laravel Modules
>>>>>>> b018eb3b5 (.)

# Verificare che PascalCase esista
ls tests/Feature/FixStructureTest.pest.php
```

## Pattern di Naming Completo

### Test Files
- Feature tests: `{FeatureName}Test.pest.php`
- Integration tests: `{ServiceName}IntegrationTest.php`
- Unit tests: `{TraitName}Test.php`

### Models, Services, Actions
- Models: `PascalCase` (User.php, Module.php)
- Services: `PascalCase + Service` (ModuleService.php)
- Actions: `PascalCase + Action` (SafeStringCastAction.php)
- Traits: `PascalCase + Trait` (HasExtraTrait.php)

### Variables & Methods
- Variables: `camelCase` ($moduleName, $isEnabled)
- Methods: `camelCase` (getModels(), setName())
- Constants: `UPPER_SNAKE_CASE` (MAX_RETRIES)

### Directories
- Sempre PascalCase per namespace: `app/Models/`, `app/Services/`
- Mai lowercase: `app/models/` ❌

## Verifica Duplicati

```bash
# Trova duplicati case-insensitive
find tests/ -iname "fixstructuretest*"

# Trova file test non PascalCase
find tests/ -name "*test.php" -o -name "*Test.php" | grep -v "[A-Z]"
```

<<<<<<< HEAD
## Checklist Pre-Commit

- [ ] Tutti i file test sono PascalCase?
- [ ] Nessun duplicato con diverse capitalizzazioni?
- [ ] Namespace corrispondono ai path?
- [ ] PHPStan passa senza errori?

---

**Regola d'oro**: File duplicati? **Mantieni PascalCase, elimina tutto il resto.**

**Data**: Ottobre 2025

---

## 🚨 Duplicati Case-Sensitivity - Regola Generale

### Problema Identificato (Novembre 2025)

Trovati **228 file duplicati** con case diverso in tutto il progetto:
- File documentazione: `LICENSE.md` vs `license.md`
- File Blade: `contentStart.blade.php` vs `contentstart.blade.php`
- File Vue/JS/CSS: `MapComponent.vue` vs `mapcomponent.vue`
- File build artifacts duplicati

### ✅ Regola Universale di Naming

#### File Documentazione
- **Mantenere**: `UPPERCASE.md` / `UPPERCASE.yml`
  - ✅ `LICENSE.md`, `CONTRIBUTING.md`, `SECURITY.md`, `FUNDING.yml`
- **Rimuovere**: `lowercase.md` / `lowercase.yml`
  - ❌ `license.md`, `contributing.md`, `security.md`, `funding.yml`

#### File Blade Templates
- **Mantenere**: `camelCase.blade.php`
  - ✅ `contentStart.blade.php`, `contentEnd.blade.php`, `wideImage.blade.php`
- **Rimuovere**: `lowercase.blade.php`
  - ❌ `contentstart.blade.php`, `contentend.blade.php`, `wideimage.blade.php`

#### File Vue/JS/CSS
- **Mantenere**: `CamelCase` o `PascalCase`
  - ✅ `MapComponent.vue`, `MyMap.vue`, `MarkerCluster.css`
- **Rimuovere**: `lowercase`
  - ❌ `mapcomponent.vue`, `mymap.vue`, `markercluster.css`

#### File PHP
- **Mantenere**: `PascalCase.php`
  - ✅ `UserResource.php`, `BaseModel.php`
- **Rimuovere**: `lowercase.php` / file backup lowercase
  - ❌ `userresource.php`, `basemodel.php`

#### Directory Build/Dist
- **Rimuovere**: TUTTE le directory `build/` e `dist/`
  - Sono file generati, non devono essere versionati
  - Aggiungere a `.gitignore`

### Script di Verifica

```bash
# Trova duplicati case-insensitive in Modules
cd /var/www/_bases/base_<nome progetto>_fila4_mono/laravel

python3 << 'PYSCRIPT'
import os
from collections import defaultdict

for root, dirs, files in os.walk('Modules'):
    if any(skip in root for skip in ['/vendor/', '/node_modules/', '/.git/']):
        continue
    
    name_map = defaultdict(list)
    for file in files:
        if file in ['README.md', 'readme.md', '.gitignore']:
            continue
        lower_name = file.lower()
        name_map[lower_name].append(file)
    
    for lower_name, file_list in name_map.items():
        if len(file_list) > 1:
            unique_names = set(file_list)
            if len(unique_names) > 1:
                print(f"📁 {root}")
                for name in sorted(unique_names):
                    print(f"  - {name}")
PYSCRIPT
```

### Azione Correttiva Applicata

**Data**: Novembre 2025  
**File rimossi**: 228  
**Duplicati risolti**: 100%  

Pattern di rimozione:
1. File documentazione: mantenuti UPPERCASE, rimossi lowercase
2. File Blade: mantenuti camelCase, rimossi lowercase
3. File Vue/JS/CSS: mantenuti CamelCase, rimossi lowercase
4. Directory build/dist: TUTTE rimosse

### Prevenzione Futura

Aggiungere a `.gitignore`:
```gitignore
# Build artifacts
**/build/
**/dist/

# Temp files
**/*.test
**/*.wip
**/*.fixed
**/*.no
```

### Regola d'Oro Universale

**NON possono coesistere**:
- `ContentStart.blade.php` E `contentstart.blade.php`
- `LICENSE.md` E `license.md`
- `MapComponent.vue` E `mapcomponent.vue`

**Soluzione**: Mantieni la versione con capitalizzazione corretta (UPPERCASE per docs, camelCase/PascalCase per codice), elimina tutti i duplicati lowercase.

**Data ultima verifica**: Novembre 2025  
**Status**: ✅ 0 duplicati rilevati su 3151 directory verificate
=======
## Collegamenti alla documentazione correlata
- [Qualità del codice](./CODE_QUALITY.md)
- [Tipi rigorosi PHP](./PHP-STRICT-TYPES.md)
- [Guida all'implementazione di PHPStan](./PHPSTAN-IMPLEMENTATION-GUIDE.md)
- [Best practice per i provider di servizi](./SERVICE-PROVIDER-BEST-PRACTICES.md)
- [Best practice per Filament](./FILAMENT-BEST-PRACTICES.md)
>>>>>>> b018eb3b5 (.)
