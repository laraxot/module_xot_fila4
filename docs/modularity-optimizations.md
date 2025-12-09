<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> e0b8ebe3 (.)
# Modulo Xot - Ottimizzazioni per Modularità

## Problemi Identificati

Durante l'audit del modulo `Xot` (modulo base del framework), sono state identificate **violazioni critiche dei principi di modularità** che compromettono la riutilizzabilità del framework in progetti diversi.

## Violazioni Critiche Trovate

### 1. Path Hardcoded per Progetti Specifici
```php
// ❌ ERRORE CRITICO - Path hardcoded
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
public static string $projectBasePath = '/var/www/html/<nome progetto>';
<<<<<<< HEAD
public static string $laravelBasePath = '/var/www/html/<nome progetto>/laravel';
public static string $modulesBasePath = '/var/www/html/<nome progetto>/laravel/Modules';
=======
public static string $laravelBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel';
public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
public static string $laravelBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel';
public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
>>>>>>> 5a14301c (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 399f46d3 (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> d86d643a (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 472bd9dc (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> d86d643a (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> d86d643a (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 472bd9dc (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 3bf39332 (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> cf971011 (.)
=======
public static string $projectBasePath = '/var/www/html/<nome progetto>';
public static string $laravelBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel';
public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
public static string $projectBasePath = '/var/www/html/<nome progetto>';
public static string $laravelBasePath = '/var/www/html/<nome progetto>/laravel';
public static string $modulesBasePath = '/var/www/html/<nome progetto>/laravel/Modules';
public static string $laravelBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel';
public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
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
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
public static string $projectBasePath = '/var/www/html/<nome progetto>';
public static string $laravelBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel';
public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
public static string $laravelBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel';
public static string $modulesBasePath = '/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 43d67f21 (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 43d67f21 (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> b7ea1cd1 (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
public static string $projectBasePath = '/var/www/html/saluteora';
public static string $laravelBasePath = '/var/www/html/saluteora/laravel';
public static string $modulesBasePath = '/var/www/html/saluteora/laravel/Modules';
>>>>>>> 76bec91a (.)
```

**File contaminati:**
- `app/Helpers/PathHelper.php`

### 2. Dipendenze su Moduli Specifici nei Test
```php
// ❌ ERRORE CRITICO - Dipendenze hardcoded nei test
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
->andReturn(\Modules\<nome progetto>\Models\User::class);
=======
->andReturn(\Modules\<nome modulo>\Models\User::class);
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 399f46d3 (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> d86d643a (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 472bd9dc (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> d86d643a (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> d86d643a (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 472bd9dc (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 3bf39332 (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> cf971011 (.)
=======
->andReturn(\Modules\<nome modulo>\Models\User::class);
->andReturn(\Modules\<nome modulo>\Models\User::class);
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
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 43d67f21 (.)
=======
->andReturn(\Modules\<nome modulo>\Models\User::class);
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 43d67f21 (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> b7ea1cd1 (.)
=======
->andReturn(\Modules\<nome modulo>\Models\User::class);
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 43d67f21 (.)
=======
->andReturn(\Modules\<nome modulo>\Models\User::class);
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 5a14301c (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 43d67f21 (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> b7ea1cd1 (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
->andReturn(\Modules\SaluteOra\Models\User::class);
>>>>>>> 76bec91a (.)
```

**File contaminati:**
- `tests/TestCase.php`

### 3. Riferimenti a Traduzioni Specifiche
```php
// ❌ ERRORE CRITICO - Traduzioni hardcoded
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
self::MONDAY => __('<nome progetto>::common.days.description.monday'),
self::TUESDAY => __('<nome progetto>::common.days.description.tuesday'),
<<<<<<< HEAD
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 5a14301c (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 399f46d3 (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> d86d643a (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 472bd9dc (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> d86d643a (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> d86d643a (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 472bd9dc (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 3bf39332 (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> cf971011 (.)
=======
self::MONDAY => __('<nome progetto>::common.days.description.monday'),
self::TUESDAY => __('<nome progetto>::common.days.description.tuesday'),
self::MONDAY => __('<nome progetto>::common.days.description.monday'),
self::TUESDAY => __('<nome progetto>::common.days.description.tuesday'),
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
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
self::MONDAY => __('<nome progetto>::common.days.description.monday'),
self::TUESDAY => __('<nome progetto>::common.days.description.tuesday'),
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 43d67f21 (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 43d67f21 (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> b7ea1cd1 (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
self::MONDAY => __('saluteora::common.days.description.monday'),
self::TUESDAY => __('saluteora::common.days.description.tuesday'),
>>>>>>> 76bec91a (.)
```

**File contaminati:**
- `app/Enums/DayOfWeek.php`

### 4. Factory con Dati Specifici
```php
// ❌ ERRORE CRITICO - Dati hardcoded nelle factory
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
'table_schema' => $this->faker->randomElement(['<nome progetto>', 'public', 'main']),
<<<<<<< HEAD
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 5a14301c (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 399f46d3 (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> d86d643a (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 472bd9dc (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> d86d643a (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> d86d643a (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 472bd9dc (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 3bf39332 (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> cf971011 (.)
=======
'table_schema' => $this->faker->randomElement(['<nome progetto>', 'public', 'main']),
'table_schema' => $this->faker->randomElement(['<nome progetto>', 'public', 'main']),
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
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 43d67f21 (.)
=======
'table_schema' => $this->faker->randomElement(['<nome progetto>', 'public', 'main']),
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 5a14301c (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 43d67f21 (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> b7ea1cd1 (.)
=======
'table_schema' => $this->faker->randomElement(['<nome progetto>', 'public', 'main']),
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 5a14301c (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 43d67f21 (.)
=======
'table_schema' => $this->faker->randomElement(['<nome progetto>', 'public', 'main']),
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 5a14301c (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 43d67f21 (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> b7ea1cd1 (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
'table_schema' => $this->faker->randomElement(['saluteora', 'public', 'main']),
>>>>>>> 76bec91a (.)
```

**File contaminati:**
- `database/factories/InformationSchemaTableFactory.php`

### 5. Dipendenze su Moduli Specifici nei Widget
```php
// ❌ ERRORE CRITICO - Import hardcoded
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\<nome progetto>\Models\Appointment;
=======
use Modules\<nome modulo>\Models\Appointment;
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 399f46d3 (.)
=======
use Modules\SaluteOra\Models\Appointment;
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 3bf39332 (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> cf971011 (.)
=======
use Modules\<nome modulo>\Models\Appointment;
use Modules\<nome modulo>\Models\Appointment;
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
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 43d67f21 (.)
=======
use Modules\<nome modulo>\Models\Appointment;
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> b7ea1cd1 (.)
=======
use Modules\<nome modulo>\Models\Appointment;
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 43d67f21 (.)
=======
use Modules\<nome modulo>\Models\Appointment;
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 5a14301c (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 43d67f21 (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> b7ea1cd1 (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
use Modules\SaluteOra\Models\Appointment;
>>>>>>> 76bec91a (.)
```

**File contaminati:**
- `app/Filament/Widgets/ModelTrendChartWidget.php`
- `app/Filament/Widgets/StateOverviewWidget.php`

## Impatto delle Violazioni

### Architetturale
1. **Lock-in al Progetto**: Il framework Xot non può essere utilizzato in altri progetti
2. **Violazione Principi Base**: Il modulo base viola i principi di modularità
3. **Dipendenze Cicliche**: Creazione di dipendenze tra framework e progetti specifici

### Operativo
1. **Impossibilità di Riuso**: Framework non trasportabile
2. **Manutenzione Impossibile**: Modifiche richieste per ogni progetto
3. **Testing Impossibile**: Test dipendenti da moduli esterni

## Soluzioni Proposte

### 1. Path Helper Dinamico
```php
// ✅ CORRETTO - Path dinamici
class PathHelper
{
    public static function getProjectBasePath(): string
    {
        return env('PROJECT_BASE_PATH', base_path());
    }
    
    public static function getLaravelBasePath(): string
    {
        return env('LARAVEL_BASE_PATH', base_path());
    }
    
    public static function getModulesBasePath(): string
    {
        return env('MODULES_BASE_PATH', base_path('Modules'));
    }
    
    public static function normalizePath(string $path): string
    {
        $projectPath = self::getProjectBasePath();
        $laravelPath = self::getLaravelBasePath();
        $modulesPath = self::getModulesBasePath();
        
        // Normalizzazione dinamica
        return str_replace(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ['/<nome progetto>/', '/Modules/'],
<<<<<<< HEAD
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 5a14301c (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 399f46d3 (.)
=======
            ['/saluteora/', '/Modules/'],
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> d86d643a (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 472bd9dc (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> d86d643a (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> d86d643a (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 472bd9dc (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 3bf39332 (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> cf971011 (.)
=======
            ['/<nome progetto>/', '/Modules/'],
            ['/<nome progetto>/', '/Modules/'],
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
            ['/saluteora/', '/Modules/'],
>>>>>>> 43d67f21 (.)
=======
            ['/<nome progetto>/', '/Modules/'],
            ['/saluteora/', '/Modules/'],
>>>>>>> 5a14301c (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 43d67f21 (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> b7ea1cd1 (.)
=======
            ['/<nome progetto>/', '/Modules/'],
            ['/saluteora/', '/Modules/'],
>>>>>>> 5a14301c (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 43d67f21 (.)
=======
            ['/<nome progetto>/', '/Modules/'],
            ['/saluteora/', '/Modules/'],
>>>>>>> 5a14301c (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 43d67f21 (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> b7ea1cd1 (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
            ['/saluteora/', '/Modules/'],
>>>>>>> 76bec91a (.)
            [$projectPath, $modulesPath],
            $path
        );
    }
}
```

### 2. Configurazione Centralizzata
```php
// config/xot.php
return [
    'paths' => [
        'project_base' => env('PROJECT_BASE_PATH', base_path()),
        'laravel_base' => env('LARAVEL_BASE_PATH', base_path()),
        'modules_base' => env('MODULES_BASE_PATH', base_path('Modules')),
    ],
    'models' => [
        'user' => env('XOT_USER_MODEL', \App\Models\User::class),
        'appointment' => env('XOT_APPOINTMENT_MODEL', \App\Models\Appointment::class),
    ],
    'translations' => [
        'namespace' => env('XOT_TRANSLATION_NAMESPACE', 'xot'),
        'fallback' => env('XOT_TRANSLATION_FALLBACK', 'xot'),
    ],
    'factory' => [
        'table_schemas' => env('XOT_TABLE_SCHEMAS', 'public,main,information_schema'),
    ],
];
```

### 3. Service Provider di Configurazione
```php
// ✅ CORRETTO - Configurazione dinamica
class XotServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('xot.user.model', function ($app) {
            $userClass = config('xot.models.user', \App\Models\User::class);
            return $userClass;
        });
        
        $this->app->bind('xot.appointment.model', function ($app) {
            $appointmentClass = config('xot.models.appointment', \App\Models\Appointment::class);
            return $appointmentClass;
        });
    }
}
```

### 4. Widget Generici
```php
// ✅ CORRETTO - Widget generico
class ModelTrendChartWidget extends Widget
{
    protected function getModelClass(): string
    {
        return config('xot.models.appointment', \App\Models\Appointment::class);
    }
    
    protected function getData(): array
    {
        $modelClass = $this->getModelClass();
        return $modelClass::query()
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->get()
            ->toArray();
    }
}
```

### 5. Enum Generici
```php
// ✅ CORRETTO - Enum generico
enum DayOfWeek: int
{
    case MONDAY = 1;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
    case THURSDAY = 4;
    case FRIDAY = 5;
    case SATURDAY = 6;
    case SUNDAY = 7;
    
    public function getDescription(): string
    {
        $namespace = config('xot.translations.namespace', 'xot');
        return __("{$namespace}::common.days.description.{$this->name}");
    }
}
```

## Piano di Ottimizzazione

### Fase 1: Path Helper (CRITICA)
- [ ] Refactoring `PathHelper.php`
- [ ] Path dinamici configurabili
- [ ] Normalizzazione path intelligente

### Fase 2: Configurazione (ALTA PRIORITÀ)
- [ ] Creazione `config/xot.php`
- [ ] Variabili d'ambiente per path
- [ ] Configurazione modelli dinamica

### Fase 3: Service Provider (ALTA PRIORITÀ)
- [ ] Creazione `XotServiceProvider`
- [ ] Binding dinamici per modelli
- [ ] Configurazione centralizzata

### Fase 4: Widget Generici (MEDIA PRIORITÀ)
- [ ] `ModelTrendChartWidget.php`
- [ ] `StateOverviewWidget.php`
- [ ] Configurazione modelli dinamica

### Fase 5: Enum Generici (MEDIA PRIORITÀ)
- [ ] `DayOfWeek.php`
- [ ] Traduzioni configurabili
- [ ] Namespace dinamico

### Fase 6: Factory Generiche (BASSA PRIORITÀ)
- [ ] `InformationSchemaTableFactory.php`
- [ ] Dati configurabili
- [ ] Schema dinamico

### Fase 7: Test Generici (BASSA PRIORITÀ)
- [ ] `TestCase.php`
- [ ] Modelli configurabili
- [ ] Dipendenze dinamiche

## Benefici delle Ottimizzazioni

### Architetturali
1. **Modularità Vera**: Framework Xot completamente indipendente
2. **Separazione Responsabilità**: Xot gestisce solo la base, non i progetti
3. **Inversione Dipendenze**: Dipendenze verso configurazione, non implementazioni

### Operativi
1. **Riutilizzabilità**: Funziona in qualsiasi progetto Laraxot
2. **Configurabilità**: Personalizzabile tramite configurazione
3. **Manutenibilità**: Modifiche centralizzate e standardizzate

### Business
1. **Scalabilità**: Facile aggiunta di nuovi progetti
2. **Riuso**: Framework vendibile/condivisibile
3. **Competitività**: Architettura modulare avanzata

## Configurazione per Progetti

### Variabili d'Ambiente
```env
# Configurazione Path Xot
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
PROJECT_BASE_PATH=/var/www/html/<nome progetto>
<<<<<<< HEAD
LARAVEL_BASE_PATH=/var/www/html/<nome progetto>/laravel
MODULES_BASE_PATH=/var/www/html/<nome progetto>/laravel/Modules

# Configurazione Modelli Xot
XOT_USER_MODEL=Modules\<nome progetto>\Models\User
XOT_APPOINTMENT_MODEL=Modules\<nome progetto>\Models\Appointment
=======
=======
PROJECT_BASE_PATH=/var/www/html/<nome progetto>
>>>>>>> 5a14301c (.)
=======
PROJECT_BASE_PATH=/var/www/html/<nome progetto>
>>>>>>> 5a14301c (.)
=======
PROJECT_BASE_PATH=/var/www/html/<nome progetto>
>>>>>>> 5a14301c (.)
LARAVEL_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel
MODULES_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules

# Configurazione Modelli Xot
XOT_USER_MODEL=Modules\<nome modulo>\Models\User
XOT_APPOINTMENT_MODEL=Modules\<nome modulo>\Models\Appointment
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

# Configurazione Traduzioni Xot
XOT_TRANSLATION_NAMESPACE=<nome progetto>
XOT_TRANSLATION_FALLBACK=xot

# Configurazione Factory Xot
XOT_TABLE_SCHEMAS=<nome progetto>,public,main,information_schema
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel
MODULES_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> 399f46d3 (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel
MODULES_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules
>>>>>>> 5a14301c (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> 399f46d3 (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> 17684f52 (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel
MODULES_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules
>>>>>>> 5a14301c (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> 399f46d3 (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel
MODULES_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules
>>>>>>> 5a14301c (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> 399f46d3 (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> 17684f52 (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> 88e35986 (.)
=======
PROJECT_BASE_PATH=/var/www/html/saluteora
LARAVEL_BASE_PATH=/var/www/html/saluteora/laravel
MODULES_BASE_PATH=/var/www/html/saluteora/laravel/Modules
>>>>>>> e0b8ebe3 (.)

# Configurazione Modelli Xot
XOT_USER_MODEL=Modules\SaluteOra\Models\User
XOT_APPOINTMENT_MODEL=Modules\SaluteOra\Models\Appointment

# Configurazione Traduzioni Xot
XOT_TRANSLATION_NAMESPACE=saluteora
XOT_TRANSLATION_FALLBACK=xot

# Configurazione Factory Xot
XOT_TABLE_SCHEMAS=saluteora,public,main,information_schema
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3bf39332 (.)
=======
>>>>>>> cf971011 (.)
=======
PROJECT_BASE_PATH=/var/www/html/<nome progetto>
LARAVEL_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel
MODULES_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules

# Configurazione Modelli Xot
XOT_USER_MODEL=Modules\<nome modulo>\Models\User
XOT_APPOINTMENT_MODEL=Modules\<nome modulo>\Models\Appointment

# Configurazione Traduzioni Xot
XOT_TRANSLATION_NAMESPACE=<nome progetto>
XOT_TRANSLATION_FALLBACK=xot

# Configurazione Factory Xot
XOT_TABLE_SCHEMAS=<nome progetto>,public,main,information_schema
PROJECT_BASE_PATH=/var/www/html/<nome progetto>
LARAVEL_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel
MODULES_BASE_PATH=/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules

# Configurazione Modelli Xot
XOT_USER_MODEL=Modules\<nome modulo>\Models\User
XOT_APPOINTMENT_MODEL=Modules\<nome modulo>\Models\Appointment

# Configurazione Traduzioni Xot
XOT_TRANSLATION_NAMESPACE=<nome progetto>
XOT_TRANSLATION_FALLBACK=xot

# Configurazione Factory Xot
XOT_TABLE_SCHEMAS=<nome progetto>,public,main,information_schema
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
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
```

### Override per Progetti Specifici
Ogni progetto può personalizzare path, modelli e traduzioni tramite variabili d'ambiente.

## Test di Conformità

### Comando di Verifica
```bash
# Verifica path hardcoded
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
grep -r "/var/www/html/<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica dipendenze hardcoded
<<<<<<< HEAD
grep -r "Modules\\<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica traduzioni hardcoded
grep -r "<nome progetto>::" laravel/Modules/Xot/ --include="*.php"
=======
=======
grep -r "/var/www/html/<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica dipendenze hardcoded
>>>>>>> 5a14301c (.)
=======
grep -r "/var/www/html/<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica dipendenze hardcoded
>>>>>>> 5a14301c (.)
=======
grep -r "/var/www/html/<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica dipendenze hardcoded
>>>>>>> 5a14301c (.)
grep -r "Modules\\" laravel/Modules/Xot/ --include="*.php"

# Verifica traduzioni hardcoded
grep -r "<nome progetto>::" laravel/Modules/Xot/ --include="*.php"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
grep -r "/var/www/html/saluteora" laravel/Modules/Xot/ --include="*.php"

# Verifica dipendenze hardcoded
grep -r "Modules\\SaluteOra" laravel/Modules/Xot/ --include="*.php"

# Verifica traduzioni hardcoded
grep -r "saluteora::" laravel/Modules/Xot/ --include="*.php"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3bf39332 (.)
=======
>>>>>>> cf971011 (.)
=======
grep -r "/var/www/html/<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica dipendenze hardcoded
grep -r "Modules\\" laravel/Modules/Xot/ --include="*.php"

# Verifica traduzioni hardcoded
grep -r "<nome progetto>::" laravel/Modules/Xot/ --include="*.php"
grep -r "/var/www/html/<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica dipendenze hardcoded
grep -r "Modules\\<nome progetto>" laravel/Modules/Xot/ --include="*.php"

# Verifica traduzioni hardcoded
grep -r "<nome progetto>::" laravel/Modules/Xot/ --include="*.php"
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
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
```

### Risultato Atteso
Dopo l'ottimizzazione completa, i comandi devono restituire **0 occorrenze**.

## Documentazione Correlata

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> 5a14301c (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 399f46d3 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 43d67f21 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> 5a14301c (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 399f46d3 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 43d67f21 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 17684f52 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> b7ea1cd1 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> 5a14301c (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 399f46d3 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 43d67f21 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> 5a14301c (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 399f46d3 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 43d67f21 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 17684f52 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> b7ea1cd1 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 88e35986 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> e0b8ebe3 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
=======
- [Root Docs: Modularity Hardcoded Names](../../../docs/modularity-hardcoded-names.md)
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
- [Root Docs: Modularity Hardcoded Names](../../../project_docs/modularity-hardcoded-names.md)
>>>>>>> 76bec91a (.)
- [Regole Cursor: Modularity Rules](../../../.cursor/rules/modularity-hardcoded-names.mdc)
- [Xot Architecture Overview](./architecture-overview.md)
- [Xot Best Practices](./best-practices/README.md)

## Note di Implementazione

### Principi Guida
1. **Dependency Inversion**: Dipendere da configurazione, non da implementazioni
2. **Configuration over Convention**: Configurazione esplicita e flessibile
3. **Separation of Concerns**: Xot gestisce solo la base, non i progetti
4. **Environment-Driven**: Tutto configurabile tramite variabili d'ambiente

### Approccio
- **Incremental**: Ottimizzare un componente alla volta
- **Configuration-First**: Creare configurazione prima di implementare
- **Path-Agnostic**: Path completamente configurabili
- **Testing-Validated**: Verificare modularità con test specifici

---

**Queste ottimizzazioni sono CRITICHE per mantenere l'architettura modulare del sistema. Ogni violazione deve essere corretta immediatamente.**

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
