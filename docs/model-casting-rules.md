# Regole per Model Casting in Laraxot - CRITICO

## ERRORE ARCHITETTURALE GRAVE: Proprietà $casts Deprecata

### ❌ VIETATO ASSOLUTO - Uso della Proprietà $casts

```php
// ❌ ERRORE GRAVE - MAI USARE QUESTA SINTASSI
class User extends BaseModel
{
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'options' => 'array',
    ];
}
```

### ✅ OBBLIGATORIO - Metodo casts()

```php
// ✅ SINTASSI CORRETTA E MODERNA
class User extends BaseModel
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'options' => 'array',
        ];
    }
}
```

## Gravità del Problema

### Perché è un Errore Architetturale Grave

1. **Deprecazione Laravel 11**: La proprietà `$casts` è deprecata in favore del metodo `casts()`
2. **Limitazioni Funzionali**: Non permette l'uso di metodi statici sui caster
3. **Manutenibilità**: Codice legacy che non sfrutta le nuove funzionalità
4. **Conformità**: Non rispetta gli standard moderni di Laravel
5. **Performance**: Il metodo `casts()` è più efficiente e flessibile

### Vantaggi del Metodo casts()

1. **Metodi Statici**: Possibilità di usare metodi statici sui caster built-in
2. **Flessibilità**: Logica dinamica per determinare i cast
3. **Type Safety**: Migliore tipizzazione e supporto PHPStan
4. **Futuro-Proof**: Preparato per le future versioni di Laravel
5. **Funzionalità Avanzate**: Accesso a nuovi caster come `AsEnumCollection::of()`

## Esempi di Migrazione

### Cast Base

```php
// ❌ VECCHIO MODO
protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'is_active' => 'boolean',
];

// ✅ NUOVO MODO
protected function casts(): array
{
    return [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'is_active' => 'boolean',
    ];
}
```

### Cast Avanzati con Enum

```php
// ❌ VECCHIO MODO (limitato)
protected $casts = [
    'status' => UserStatus::class,
    'options' => 'array',
];

// ✅ NUOVO MODO (potente)
protected function casts(): array
{
    return [
        'status' => UserStatus::class,
        'options' => AsEnumCollection::of(UserOption::class),
        'settings' => AsCollection::using(SettingsCollection::class),
    ];
}
```

### Cast con Logica Dinamica

```php
// ✅ POSSIBILE SOLO CON IL METODO casts()
protected function casts(): array
{
    $baseCasts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    if ($this->hasJsonColumn('metadata')) {
        $baseCasts['metadata'] = 'array';
    }

    return $baseCasts;
}
```

## Audit Risultati (2025-08-01)

### File con Errori Trovati: 20

1. `/Themes/Two/Main_files/filament-peek-demo/app/Models/Post.php`
2. `/Themes/Two/Main_files/filament-peek-demo/app/Models/User.php`
3. `/Themes/Two/Main_files/filament-peek-demo/app/Models/Menu.php`
4. `/Modules/Notify/app/Models/NotificationTemplate.php`
5. `/Modules/Notify/app/Models/MailTemplateVersion.php`
6. `/Modules/Notify/app/Models/MailTemplateLog.php`
7. `/Modules/Lang/app/Models/TranslationFile.php`
8. `/Modules/Xot/app/Models/InformationSchemaTable.php`
9. `/Modules/Geo/app/Models/BasePivot.php`
10. `/Modules/Geo/app/Models/BaseMorphPivot.php`
11. `/Modules/Geo/app/Models/BaseModel.php`
12. `/Modules/FormBuilder/app/Models/FormSubmission.php`
13. `/Modules/FormBuilder/app/Models/FormTemplate.php`
14. `/Modules/FormBuilder/app/Models/FormField.php`
15. `/Modules/Geo/app/Models/Location.php`
16. `/Modules/Geo/app/Models/Address.php`
17. `/Modules/Geo/app/Models/Place.php`
<<<<<<< HEAD
18. `/Modules/Chart/project_docs/Chart.php`
19. `/Modules/Chart/project_docs/Chart_conflict.php`
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
18. `/Modules/Chart/project_docs/Chart.php`
19. `/Modules/Chart/project_docs/Chart_conflict.php`
>>>>>>> 85cdef688 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 6ca989d8 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 2bad128c (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 358ba79a7 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> f8f76a284 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 5e6e0d054 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 0117b849c (.)
=======
18. `/Modules/Chart/project_docs/Chart.php`
19. `/Modules/Chart/project_docs/Chart_conflict.php`
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 091f883c (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> ab5b3a4f (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 88e745db5 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 7e4835b8e (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 9f193021d (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> d9f43fce9 (.)
=======
18. `/Modules/Chart/project_docs/Chart.php`
19. `/Modules/Chart/project_docs/Chart_conflict.php`
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> ecd5ec32 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 59259b43 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> aba62c408 (.)
=======
>>>>>>> 88e745db5 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 5e6aa70fe (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> e39b54ba7 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> 9f193021d (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> ba7efc23f (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> d9f43fce9 (.)
=======
18. `/Modules/Chart/docs/Chart.php`
19. `/Modules/Chart/docs/Chart_conflict.php`
>>>>>>> 5df5c7505 (.)
=======
18. `/Modules/Chart/project_docs/Chart.php`
19. `/Modules/Chart/project_docs/Chart_conflict.php`
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)
20. `/Modules/Chart/app/Models/Chart.php`

### Priorità di Refactoring

1. **CRITICO**: `BaseModel` e `BasePivot` (influenzano tutti i modelli figli)
2. **ALTO**: Modelli core come `User`, `NotificationTemplate`
3. **MEDIO**: Modelli specifici di modulo
4. **BASSO**: File di documentazione e conflitti

## Piano di Refactoring

### Fase 1: Modelli Base (CRITICO)
- [ ] `Modules/Geo/app/Models/BaseModel.php`
- [ ] `Modules/Geo/app/Models/BasePivot.php`
- [ ] `Modules/Geo/app/Models/BaseMorphPivot.php`

### Fase 2: Modelli Core (ALTO)
- [ ] `Themes/Two/Main_files/filament-peek-demo/app/Models/User.php`
- [ ] `Modules/Notify/app/Models/NotificationTemplate.php`
- [ ] `Modules/Xot/app/Models/InformationSchemaTable.php`

### Fase 3: Modelli Modulo (MEDIO)
- [ ] Tutti gli altri modelli dei moduli

### Fase 4: Cleanup (BASSO)
- [ ] File di documentazione
- [ ] File di conflitto

## Regole di Implementazione

### 1. Tipizzazione Obbligatoria

```php
/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        // ...
    ];
}
```

### 2. Merge con Parent

```php
protected function casts(): array
{
    return array_merge(parent::casts(), [
        'custom_field' => 'datetime',
    ]);
}
```

### 3. Documentazione PHPDoc

```php
/**
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property bool $is_active
 */
class User extends BaseModel
{
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }
}
```

## Validazione e Testing

### PHPStan
- Eseguire PHPStan livello 9+ dopo ogni refactoring
- Verificare che tutti i cast siano tipizzati correttamente

### Test
- Testare che i cast funzionino correttamente
- Verificare compatibilità con codice esistente

## Backlink e Riferimenti

- [model_base_rules.md](model_base_rules.md)
<<<<<<< HEAD
- [../../project_docs/phpstan-cast-fixes-guide.md](../../project_docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/project_docs/11.x/eloquent-mutators#attribute-casting)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [../../project_docs/phpstan-cast-fixes-guide.md](../../project_docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/project_docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 85cdef688 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 6ca989d8 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 2bad128c (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 358ba79a7 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> f8f76a284 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 5e6e0d054 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 0117b849c (.)
=======
- [../../project_docs/phpstan-cast-fixes-guide.md](../../project_docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/project_docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 091f883c (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> ab5b3a4f (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 88e745db5 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 7e4835b8e (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 9f193021d (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> d9f43fce9 (.)
=======
- [../../project_docs/phpstan-cast-fixes-guide.md](../../project_docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/project_docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> ecd5ec32 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 59259b43 (.)
=======
>>>>>>> ab5b3a4f (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> aba62c408 (.)
=======
>>>>>>> 88e745db5 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 5e6aa70fe (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> e39b54ba7 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> 9f193021d (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> ba7efc23f (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 317b552da (.)
=======
>>>>>>> 0117b849c (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> d9f43fce9 (.)
=======
- [../../docs/phpstan-cast-fixes-guide.md](../../docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 5df5c7505 (.)
=======
- [../../project_docs/phpstan-cast-fixes-guide.md](../../project_docs/phpstan-cast-fixes-guide.md)
- [Laravel 11 Model Casts Documentation](https://laravel.com/project_docs/11.x/eloquent-mutators#attribute-casting)
>>>>>>> 80bc07e81 (.)
>>>>>>> 38b70c7ba (.)

*Ultimo aggiornamento: agosto 2025*
