# Struttura dei Moduli in il progetto

## Panoramica
Questo documento descrive la struttura standard dei moduli nel progetto il progetto.

## Struttura Base
```
ModuleName/
├── app/
│   ├── Filament/
│   │   ├── Resources/
│   │   │   ├── auth/
│   │   │   └── ...
│   │   └── components/ # Per Volt
│   ├── Http/
│   ├── Models/
│   └── ...
├── config/
├── database/
├── docs/
├── resources/
│   ├── views/
│   │   ├── pages/      # Per Folio
│   │   │   ├── auth/
│   │   │   └── ...
│   │   └── components/ # Per Volt
│   ├── lang/
│   └── ...
├── routes/
├── tests/
└── composer.json
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
=======
=======
# Struttura dei Moduli in <nome progetto>

Questo documento definisce le linee guida ufficiali per la struttura dei moduli all'interno del framework <nome progetto>.

<<<<<<< HEAD
>>>>>>> 7ce328e (.)
=======
>>>>>>> 995f7cae (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 317b552da (.)
---

## Gestione dati geografici statici: GeoJsonModel readonly (ispirato a Squire)

Per tutti i dati geografici statici (regioni, province, comuni, cap) di dimensioni gestibili, NON creare tabelle/migration dedicate. Utilizzare invece un modello base readonly (`GeoJsonModel`) che legge i dati direttamente da file JSON (es: `Modules/Geo/resources/json/comuni.json`).

- I model specialistici (Region, Province, City, Cap) devono estendere la base GeoJsonModel e fornire metodi di filtro.
- Versionare sempre il file json e documentare la struttura.
- Aggiornare la documentazione di Geo/docs, SaluteOra/docs e questa stessa doc con collegamenti bidirezionali.

Per dettagli implementativi e best practice vedi:
- [Geo/docs/geo-json-model.md](../../Geo/docs/geo-json-model.md)
- [SaluteOra/docs/geo-integration.md](../../SaluteOra/docs/geo-integration.md)
- [Questa stessa doc (Xot/module-structure.md)](module-structure.md)

---

## Service Provider

### Convenzioni Base

Ogni modulo deve avere un ServiceProvider che estende `XotBaseServiceProvider`. Questo provider è responsabile della registrazione delle risorse del modulo (routes, views, translations, etc.) nell'applicazione.

```php
<?php

declare(strict_types=1);

namespace Modules\NomeModulo\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class NomeModuloServiceProvider extends XotBaseServiceProvider {
    // Implementazione
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 85cdef688 (.)
=======
<<<<<<< HEAD
>>>>>>> 7dd92412 (.)
>>>>>>> b258042 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 62cc8443 (.)
=======
>>>>>>> 7dd92412 (.)
>>>>>>> b258042 (.)
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 7dd92412 (.)
>>>>>>> b258042 (.)
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 7dd92412 (.)
>>>>>>> b258042 (.)
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> 7dd92412 (.)
>>>>>>> b258042 (.)
>>>>>>> 6a52563d6 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> 7dd92412 (.)
>>>>>>> b258042 (.)
>>>>>>> 317b552da (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 80bc07e81 (.)
=======
>>>>>>> 414a4ffcb (.)
```

## Collegamenti

### Documentazione Correlata
- [README](../README.md) - Panoramica del modulo Xot
- [Convenzioni di Naming](./naming-conventions.md) - Regole di naming
- [Case Sensitivity](./DIRECTORY-CASE-SENSITIVITY.md) - Regole per la case sensitivity
- [Namespace Rules](./NAMESPACE-RULES.md) - Regole per i namespace

### Moduli Collegati
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 80bc07e81 (.)
- [UI](../UI/project_docs/README.md) - Componenti di interfaccia
- [Cms](../Cms/project_docs/README.md) - Gestione contenuti
- [Lang](../Lang/project_docs/README.md) - Traduzioni
- [User](../User/project_docs/README.md) - Gestione utenti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
- [UI](../UI/docs/README.md) - Componenti di interfaccia
- [Cms](../Cms/docs/README.md) - Gestione contenuti
- [Lang](../Lang/docs/README.md) - Traduzioni
- [User](../User/docs/README.md) - Gestione utenti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
- [UI](../UI/project_docs/README.md) - Componenti di interfaccia
- [Cms](../Cms/project_docs/README.md) - Gestione contenuti
- [Lang](../Lang/project_docs/README.md) - Traduzioni
- [User](../User/project_docs/README.md) - Gestione utenti
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 62cc8443 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 80bc07e81 (.)

## Struttura Dettagliata

### Cartella app/
- **Filament/**: Componenti Filament
  - **Resources/**: Risorse Filament
  - **components/**: Componenti Volt
- **Http/**: Controller e middleware
- **Models/**: Modelli del modulo

### Cartella config/
- File di configurazione del modulo
- Override delle configurazioni globali

### Cartella database/
- Migrations
- Seeders
- Factories

### Cartella docs/
- Documentazione del modulo
- Guide di sviluppo
- Best practices

### Cartella resources/
- **views/**: Template Blade
  - **pages/**: Pagine Folio
  - **components/**: Componenti Volt
- **lang/**: File di traduzione
- **assets/**: Risorse statiche

### Cartella routes/
- Definizione delle rotte
- Gruppi di rotte
- Middleware

### Cartella tests/
- Test unitari
- Test di integrazione
- Test funzionali

## Best Practices

### Organizzazione
1. Seguire la struttura standard
2. Mantenere la coerenza tra moduli
3. Documentare le deviazioni
4. Aggiornare la documentazione

### Naming
1. Usare nomi descrittivi
2. Seguire le convenzioni
3. Evitare abbreviazioni
4. Mantenere la coerenza

### Documentazione
1. Mantenere aggiornata
2. Includere esempi
3. Documentare le dipendenze
4. Collegamenti bidirezionali

## Convenzioni di Naming dei Campi

### Regole Fondamentali

In il progetto, è fondamentale seguire queste convenzioni di naming per i campi del database e dei modelli:

#### Campi Utente e Persona

- SEMPRE usare `first_name` (mai `name`)
- SEMPRE usare `last_name` (mai `surname`)

Questa convenzione garantisce:
- Coerenza in tutto il database e il codice
- Compatibilità con API e servizi esterni
- Supporto per l'internazionalizzazione
- Allineamento con gli standard PSR

#### Esempi

```php
// CORRETTO
protected $fillable = [
    'first_name',
    'last_name',
    'email',
];

// ERRATO
protected $fillable = [
    'name',
    'surname',
    'email',
];
```

#### Altri Campi Standard

- Campi temporali: `created_at`, `updated_at`, `deleted_at`, `birth_date`
- Chiavi esterne: `user_id`, `patient_id` (mai `id_user`, `id_patient`)
- Campi booleani: `is_active`, `is_verified`

### Verifica e Correzione

Utilizzare il comando di analisi per verificare la conformità:

```bash
php artisan xot:analyze-naming
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
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 85cdef688 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
>>>>>>> 6ca989d8 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 62cc8443 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
>>>>>>> 67be6ac0 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> ab5b3a4f (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
>>>>>>> 88ee35c4e (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 88e745db5 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
>>>>>>> 92cca5ade (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 7e4835b8e (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
>>>>>>> 6a52563d6 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 9f193021d (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
>>>>>>> 317b552da (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/docs/convenzioni-naming-campi.md).
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> d9f43fce9 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 80bc07e81 (.)
=======
Per ulteriori dettagli, consultare la [documentazione completa sulle convenzioni di naming](/project_docs/convenzioni-naming-campi.md).
>>>>>>> 414a4ffcb (.)

## Esempi

### Struttura Modulo User
```
User/
├── app/
│   ├── Filament/
│   │   ├── Resources/
│   │   │   ├── UserResource.php
│   │   │   └── ProfileResource.php
│   │   └── components/
│   │       └── profile-form.php
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   └── Models/
│       ├── User.php
│       └── Profile.php
├── config/
│   └── user.php
├── database/
│   ├── migrations/
│   └── seeders/
├── docs/
│   ├── README.md
│   └── api.md
├── resources/
│   ├── views/
│   │   ├── pages/
│   │   │   └── profile.blade.php
│   │   └── components/
│   │       └── profile-form.blade.php
│   └── lang/
│       └── it/
│           └── user.php
├── routes/
│   └── web.php
└── tests/
    ├── Unit/
    └── Feature/
```

## Collegamenti Moduli

### Modulo UI
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 80bc07e81 (.)
- [Componenti Volt](../UI/project_docs/components/volt.md)
- [Layout](../UI/project_docs/layouts.md)
- [Temi](../UI/project_docs/themes.md)
- [Best Practices](../UI/project_docs/best-practices.md)

### Modulo Cms
- [Frontend](../Cms/project_docs/frontend.md)
- [Temi](../Cms/project_docs/themes.md)
- [Contenuti](../Cms/project_docs/content.md)
- [Convenzioni Filament](../Cms/project_docs/convenzioni-namespace-filament.md)

### Modulo Lang
- [Traduzioni](../Lang/project_docs/translations.md)
- [Localizzazione](../Lang/project_docs/localization.md)
- [API Traduzioni](../Lang/project_docs/api.md)

### Modulo User
- [Autenticazione](../User/project_docs/auth.md)
- [Permessi](../User/project_docs/permissions.md)
- [Profilo](../User/project_docs/profile.md)

### Modulo Patient
- [Gestione Pazienti](../Patient/project_docs/patients.md)
- [Cartelle Cliniche](../Patient/project_docs/records.md)
- [Appuntamenti](../Patient/project_docs/appointments.md)

### Modulo Dental
- [Trattamenti](../Dental/project_docs/treatments.md)
- [Pianificazione](../Dental/project_docs/planning.md)
- [Documenti](../Dental/project_docs/documents.md)

### Modulo Tenant
- [Multi-tenant](../Tenant/project_docs/multi-tenant.md)
- [Configurazione](../Tenant/project_docs/configuration.md)
- [Migrazione](../Tenant/project_docs/migration.md)

### Modulo Media
- [Gestione File](../Media/project_docs/files.md)
- [Upload](../Media/project_docs/upload.md)
- [Storage](../Media/project_docs/storage.md)

### Modulo Notify
- [Notifiche](../Notify/project_docs/notifications.md)
- [Email](../Notify/project_docs/email.md)
- [SMS](../Notify/project_docs/sms.md)

### Modulo Reporting
- [Report](../Reporting/project_docs/reports.md)
- [Esportazione](../Reporting/project_docs/export.md)
- [Analytics](../Reporting/project_docs/analytics.md)

### Modulo Gdpr
- [Privacy](../Gdpr/project_docs/privacy.md)
- [Consensi](../Gdpr/project_docs/consents.md)
- [Sicurezza](../Gdpr/project_docs/security.md)

### Modulo Job
- [Jobs](../Job/project_docs/jobs.md)
- [Queue](../Job/project_docs/queue.md)
- [Scheduling](../Job/project_docs/scheduling.md)

### Modulo Chart
- [Grafici](../Chart/project_docs/charts.md)
- [Dashboard](../Chart/project_docs/dashboard.md)
- [Visualizzazione](../Chart/project_docs/visualization.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
- [Componenti Volt](../UI/docs/components/volt.md)
- [Layout](../UI/docs/layouts.md)
- [Temi](../UI/docs/themes.md)
- [Best Practices](../UI/docs/best-practices.md)

### Modulo Cms
- [Frontend](../Cms/docs/frontend.md)
- [Temi](../Cms/docs/themes.md)
- [Contenuti](../Cms/docs/content.md)
- [Convenzioni Filament](../Cms/docs/convenzioni-namespace-filament.md)

### Modulo Lang
- [Traduzioni](../Lang/docs/translations.md)
- [Localizzazione](../Lang/docs/localization.md)
- [API Traduzioni](../Lang/docs/api.md)

### Modulo User
- [Autenticazione](../User/docs/auth.md)
- [Permessi](../User/docs/permissions.md)
- [Profilo](../User/docs/profile.md)

### Modulo Patient
- [Gestione Pazienti](../Patient/docs/patients.md)
- [Cartelle Cliniche](../Patient/docs/records.md)
- [Appuntamenti](../Patient/docs/appointments.md)

### Modulo Dental
- [Trattamenti](../Dental/docs/treatments.md)
- [Pianificazione](../Dental/docs/planning.md)
- [Documenti](../Dental/docs/documents.md)

### Modulo Tenant
- [Multi-tenant](../Tenant/docs/multi-tenant.md)
- [Configurazione](../Tenant/docs/configuration.md)
- [Migrazione](../Tenant/docs/migration.md)

### Modulo Media
- [Gestione File](../Media/docs/files.md)
- [Upload](../Media/docs/upload.md)
- [Storage](../Media/docs/storage.md)

### Modulo Notify
- [Notifiche](../Notify/docs/notifications.md)
- [Email](../Notify/docs/email.md)
- [SMS](../Notify/docs/sms.md)

### Modulo Reporting
- [Report](../Reporting/docs/reports.md)
- [Esportazione](../Reporting/docs/export.md)
- [Analytics](../Reporting/docs/analytics.md)

### Modulo Gdpr
- [Privacy](../Gdpr/docs/privacy.md)
- [Consensi](../Gdpr/docs/consents.md)
- [Sicurezza](../Gdpr/docs/security.md)

### Modulo Job
- [Jobs](../Job/docs/jobs.md)
- [Queue](../Job/docs/queue.md)
- [Scheduling](../Job/docs/scheduling.md)

### Modulo Chart
- [Grafici](../Chart/docs/charts.md)
- [Dashboard](../Chart/docs/dashboard.md)
- [Visualizzazione](../Chart/docs/visualization.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
- [Componenti Volt](../UI/project_docs/components/volt.md)
- [Layout](../UI/project_docs/layouts.md)
- [Temi](../UI/project_docs/themes.md)
- [Best Practices](../UI/project_docs/best-practices.md)

### Modulo Cms
- [Frontend](../Cms/project_docs/frontend.md)
- [Temi](../Cms/project_docs/themes.md)
- [Contenuti](../Cms/project_docs/content.md)
- [Convenzioni Filament](../Cms/project_docs/convenzioni-namespace-filament.md)

### Modulo Lang
- [Traduzioni](../Lang/project_docs/translations.md)
- [Localizzazione](../Lang/project_docs/localization.md)
- [API Traduzioni](../Lang/project_docs/api.md)

### Modulo User
- [Autenticazione](../User/project_docs/auth.md)
- [Permessi](../User/project_docs/permissions.md)
- [Profilo](../User/project_docs/profile.md)

### Modulo Patient
- [Gestione Pazienti](../Patient/project_docs/patients.md)
- [Cartelle Cliniche](../Patient/project_docs/records.md)
- [Appuntamenti](../Patient/project_docs/appointments.md)

### Modulo Dental
- [Trattamenti](../Dental/project_docs/treatments.md)
- [Pianificazione](../Dental/project_docs/planning.md)
- [Documenti](../Dental/project_docs/documents.md)

### Modulo Tenant
- [Multi-tenant](../Tenant/project_docs/multi-tenant.md)
- [Configurazione](../Tenant/project_docs/configuration.md)
- [Migrazione](../Tenant/project_docs/migration.md)

### Modulo Media
- [Gestione File](../Media/project_docs/files.md)
- [Upload](../Media/project_docs/upload.md)
- [Storage](../Media/project_docs/storage.md)

### Modulo Notify
- [Notifiche](../Notify/project_docs/notifications.md)
- [Email](../Notify/project_docs/email.md)
- [SMS](../Notify/project_docs/sms.md)

### Modulo Reporting
- [Report](../Reporting/project_docs/reports.md)
- [Esportazione](../Reporting/project_docs/export.md)
- [Analytics](../Reporting/project_docs/analytics.md)

### Modulo Gdpr
- [Privacy](../Gdpr/project_docs/privacy.md)
- [Consensi](../Gdpr/project_docs/consents.md)
- [Sicurezza](../Gdpr/project_docs/security.md)

### Modulo Job
- [Jobs](../Job/project_docs/jobs.md)
- [Queue](../Job/project_docs/queue.md)
- [Scheduling](../Job/project_docs/scheduling.md)

### Modulo Chart
- [Grafici](../Chart/project_docs/charts.md)
- [Dashboard](../Chart/project_docs/dashboard.md)
- [Visualizzazione](../Chart/project_docs/visualization.md)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 62cc8443 (.)
=======
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 80bc07e81 (.)

# Struttura dei Moduli Laravel

## Case Sensitivity e Convenzioni di Naming

### Directory Principali (SEMPRE lowercase)
```
ModuleName/
├── config/
├── database/
├── resources/         ✓ CORRETTO
│   ├── views/
│   ├── lang/
│   └── assets/
├── Resources/         ✗ ERRATO
├── src/
└── tests/
```

### Perché è Importante
1. **Compatibilità con i Filesystem**
   - Linux è case-sensitive
   - Windows e macOS sono case-insensitive
   - Usare lowercase previene problemi di compatibilità

2. **Convenzioni Laravel**
   - Laravel usa `resources/` (lowercase) come standard
   - Tutti i framework moderni usano lowercase per le directory
   - Mantiene consistenza con l'ecosistema Laravel

3. **Problemi Comuni**
   - Git può non rilevare cambi di case
   - Deployment può fallire su sistemi case-sensitive
   - Problemi di autoloading

### Directory Structure Corretta
```
laravel/Modules/Patient/
├── app/
│   ├── Filament/
│   ├── Http/
│   ├── Models/
│   └── Providers/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/           ✓ CORRETTO
│   ├── views/
│   │   ├── components/
│   │   ├── layouts/
│   │   └── pages/
│   ├── lang/
│   └── assets/
├── routes/
├── src/
└── tests/
```

### Regole da Seguire

1. **Nomi Directory Standard**
   - `resources/` NON `Resources/`
   - `views/` NON `Views/`
   - `lang/` NON `Lang/`
   - `assets/` NON `Assets/`

2. **Struttura Views**
   ```
   resources/views/
   ├── components/
   ├── layouts/
   ├── pages/
   └── partials/
   ```

3. **Struttura Assets**
   ```
   resources/assets/
   ├── js/
   ├── css/
   └── images/
   ```

4. **Struttura Lang**
   ```
   resources/lang/
   ├── en/
   └── it/
   ```

### Checklist di Verifica
- [ ] Tutte le directory standard sono in lowercase
- [ ] Nessuna directory `Resources/` (uppercase)
- [ ] Views sono in `resources/views/`
- [ ] Assets sono in `resources/assets/`
- [ ] Traduzioni sono in `resources/lang/`

### Come Correggere Directory Errate

1. **In Locale**
   ```bash
   # Rinomina preservando il contenuto
   mv Resources resources_temp
   mv resources_temp resources
   ```

2. **Su Git**
   ```bash
   git mv Resources resources_temp
   git mv resources_temp resources
   git commit -m "fix: correct resources directory case sensitivity"
   ```

### Note Importanti

1. **Quando Crei Nuovi Moduli**
   - Usa sempre il template corretto
   - Verifica la struttura delle directory
   - Segui le convenzioni di naming

2. **Durante il Development**
   - Controlla regolarmente la struttura
   - Usa tool di linting per il filesystem
   - Mantieni consistenza tra moduli

3. **Prima del Deploy**
   - Verifica che tutte le directory siano lowercase
   - Testa su un sistema case-sensitive
   - Controlla i path nelle configurazioni

### Troubleshooting

Se trovi una directory con case errato:
1. Verifica se ci sono riferimenti nel codice
2. Pianifica la migrazione
3. Aggiorna tutti i riferimenti
4. Rinomina la directory
5. Testa approfonditamente
6. Committa le modifiche

## Collegamenti tra versioni di module_structure.md
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 85cdef688 (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
>>>>>>> 6ca989d8 (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 62cc8443 (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
>>>>>>> 67be6ac0 (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> ab5b3a4f (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
>>>>>>> 88ee35c4e (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 88e745db5 (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
>>>>>>> 92cca5ade (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 7e4835b8e (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
>>>>>>> 6a52563d6 (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 9f193021d (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
>>>>>>> 317b552da (.)
=======
* [module_structure.md](../../../../docs/error_analysis/module_structure.md)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> d9f43fce9 (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 80bc07e81 (.)
=======
* [module_structure.md](../../../../project_docs/error_analysis/module_structure.md)
>>>>>>> 414a4ffcb (.)

