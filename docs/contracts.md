# Contratti del Modulo Xot

## Descrizione
Il modulo Xot definisce vari contratti (interfacce) che standardizzano il comportamento dei modelli e delle classi nel sistema Laraxot.

## UserContract

### Ubicazione
`Modules\Xot\Contracts\UserContract`

### Scopo
Definisce l'interfaccia per tutti i modelli User nel sistema, includendo autenticazione, autorizzazione, ruoli, permessi e media.

### Problema Critico Identificato (2025-01-06)

**ERRORE PHPSTAN**: Il metodo `hasPermissionTo()` è utilizzato in tutte le policy ma non è definito nel contratto `UserContract`.

**Impatto**: 350+ errori PHPStan nel modulo User e altri moduli che utilizzano policy.

### Interfacce Estese
```php
interface UserContract extends 
    Authenticatable, 
    Authorizable, 
    CanResetPassword, 
    FilamentUser, 
    HasTeamsContract, 
    ModelContract, 
    MustVerifyEmail, 
    PassportHasApiTokensContract,
    HasMedia
```

### Metodi Attualmente Definiti
- `profile(): HasOne`
- `getRelationValue($key)`
- `newInstance($attributes = [], $exists = false)`
- `getKey()`
- `hasRole(...): bool`
- `assignRole(...)`
- `removeRole($role)`
- `roles(): BelongsToMany`
- `tenants(): BelongsToMany`

### Metodi Mancanti Identificati
- `hasPermissionTo(string $permission): bool` - **CRITICO**

## Soluzione Proposta

### Opzione 1: Aggiungere hasPermissionTo() al UserContract
```php
/**
 * Check if user has specific permission.
 *
 * @param string $permission
 * @return bool
 */
public function hasPermissionTo(string $permission): bool;
```

### Opzione 2: Estendere Interfaccia Spatie Permission
Fare in modo che il `UserContract` estenda anche l'interfaccia di Spatie Permission che definisce `hasPermissionTo()`.

### Implementazione Corrente
Attualmente tutte le policy assumono che `UserContract` abbia il metodo `hasPermissionTo()` ma non è definito nell'interfaccia.

## Altri Contratti

### ModelContract
Contratto base per tutti i modelli del sistema.

### ProfileContract
Contratto per i profili utente.

### ModelProfileContract
Contratto per modelli che hanno profili.

## Best Practices

1. **Coerenza**: Tutti i metodi utilizzati dalle implementazioni devono essere definiti nel contratto
2. **Documentazione**: Ogni metodo del contratto deve avere PHPDoc completo
3. **Tipizzazione**: Utilizzare tipi specifici invece di mixed quando possibile
4. **Compatibilità**: Mantenere compatibilità con le interfacce Laravel e package esterni

## Implementazione Prioritaria

**ALTA PRIORITÀ**: Risolvere il problema `hasPermissionTo()` per eliminare 350+ errori PHPStan.

## Collegamenti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Policy PHPStan Errors](../User/docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/docs/laravel-permission)
>>>>>>> 85cdef688 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> ce6fc085 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> ab5b3a4f (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 88e745db5 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 7e4835b8e (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 9f193021d (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> d9f43fce9 (.)
=======
- [Policy PHPStan Errors](../User/docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/docs/laravel-permission)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> ecd5ec32 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 2bad128c (.)
=======
>>>>>>> ab5b3a4f (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 88e745db5 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 5e6aa70fe (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> e39b54ba7 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 9f193021d (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> ba7efc23f (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 0117b849c (.)
=======
>>>>>>> d9f43fce9 (.)
=======
- [Policy PHPStan Errors](../User/project_docs/policy-phpstan-errors.md)
- [Root PHPStan Errors](../../project_docs/troubleshooting/phpstan-errors.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)
>>>>>>> 5df5c7505 (.)

*Ultimo aggiornamento: 2025-01-06*
