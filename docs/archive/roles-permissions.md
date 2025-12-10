# Regole generali su roles, permissions e guard_name

## Regola generale
Ogni modulo che utilizza Spatie/Permission deve assicurare che:
- Tutti i ruoli e permessi abbiano un `guard_name` coerente con quello del modello utente (tipicamente `web`).
- Ogni modello utente coinvolto dichiari `protected $guard_name = 'web';`.

## Motivazione e implicazioni
Una mancata coerenza porta a errori come `GuardDoesNotMatch`, malfunzionamenti di comandi artisan, problemi di sicurezza e difficoltà nella manutenzione.

## Esempio pratico
- Tabella `roles` e `permissions`: tutti i record devono avere `guard_name = 'web'`.
- Modello utente:
```php
class BaseUser extends Authenticatable
{
    use HasRoles;
    protected $guard_name = 'web';
}
```

## Query SQL suggerite
```sql
UPDATE roles SET guard_name = 'web' WHERE guard_name = '' OR guard_name IS NULL;
UPDATE permissions SET guard_name = 'web' WHERE guard_name = '' OR guard_name IS NULL;
```

## Collegamento documentazione specifica
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 85cdef688 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 6ca989d8 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
=======
Vedi anche: ../../User/project_docs/roles-permissions.md
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 091f883c (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 67be6ac0 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
=======
Vedi anche: ../../User/project_docs/roles-permissions.md
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 59259b43 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 88ee35c4e (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
=======
Vedi anche: ../../User/project_docs/roles-permissions.md
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> aba62c408 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 92cca5ade (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
=======
Vedi anche: ../../User/project_docs/roles-permissions.md
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 5cb992cc6 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 6a52563d6 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
=======
Vedi anche: ../../User/project_docs/roles-permissions.md
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 3c8d62b79 (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
>>>>>>> 317b552da (.)
=======
Vedi anche: ../../User/docs/roles-permissions.md
=======
Vedi anche: ../../User/project_docs/roles-permissions.md
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
