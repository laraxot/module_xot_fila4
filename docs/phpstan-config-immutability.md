<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# PHPStan Config Immutability (Global Project Rule)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- File target: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
<<<<<<< HEAD
- File target: `/var/www/html/_bases/base_<nome progetto>/laravel/phpstan.neon`
=======
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> 5a14301c (.)
- File target: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
=======
<<<<<<< HEAD
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
=======
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> d86d643a (.)
=======
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> 472bd9dc (.)
=======
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> d86d643a (.)
=======
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> d86d643a (.)
=======
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
>>>>>>> 472bd9dc (.)
=======
- File target: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
- File target: `/var/www/html/_bases/base_<nome progetto>/laravel/phpstan.neon`
- File target: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
# PHPStan Config Immutability (Global Project Rule)

- File target: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
- File target: `/var/www/html/_bases/base_saluteora/laravel/phpstan.neon`
- File target: `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/phpstan.neon`
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
- Status: IMMUTABLE — never modify this file via automation or PRs. Only the user may edit it manually.

## Rationale
- Single source of truth for static analysis settings.
- Prevents wide-impact accidental changes.

## How to adjust analysis without editing phpstan.neon
- Scope via CLI paths and flags, e.g.:

```bash
# Per-module
./vendor/bin/phpstan analyze Modules/User Modules/Geo --level=9 --no-progress --memory-limit=2G

# Full Modules with debug
./vendor/bin/phpstan analyze Modules --level=9 --no-progress --debug -vvv

# Exclude heavy module via shell (do not touch config)
find Modules -maxdepth 2 -type d -name app ! -path 'Modules/Activity/*' -print0 \
  | xargs -0 ./vendor/bin/phpstan analyze --level=9 --no-progress --memory-limit=2G
```

## Enforcement
- Assistants, scripts, and CI MUST NOT patch `phpstan.neon`.
- Prefer per-run options and per-module execution.

## Cross-References
- `.ai/guidelines/phpstan-config-immutability.md`
- `.cursor/rules/phpstan-config-immutability.mdc`
- `.windsurf/rules/phpstan-config-immutability.mdc`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 43d67f21 (.)
