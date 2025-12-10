<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
# Data Objects

## Principi Fondamentali

1. **Struttura**:
   - I Data Objects sono in `Modules\{Module}\Datas`
   - I namespace sono `Modules\{Module}\Datas`
   - Estendono `Spatie\LaravelData\Data`

2. **Scopo**:
   - Validazione dei dati
   - Trasporto dei dati tra layer
   - Type safety
   - Immutabilità

## Implementazione

1. **Struttura Base**:
   ```php
   <?php

   declare(strict_types=1);

   namespace Modules\Module\Datas;

   use Spatie\LaravelData\Data;

   class ExampleData extends Data
   {
       public function __construct(
           public ?string $field,
       ) {
       }
   }
   ```

2. **Validazione**:
   ```php
   public static function rules(): array
   {
       return [
           'field' => ['required', 'string'],
       ];
   }
   ```

## Best Practices

1. **Validazione**:
   - Implementare sempre `rules()`
   - Usare tipi di ritorno stretti
   - Documentare le regole di business

2. **Tipizzazione**:
   - Usare tipi di ritorno PHP 8
   - Usare nullable quando appropriato
   - Documentare i tipi complessi

3. **Documentazione**:
   - Aggiungere docblock per la classe
   - Documentare le proprietà
   - Aggiungere esempi di utilizzo

## Errori Comuni

1. **Errore**: Directory errata
<<<<<<< HEAD
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
   - ❌ `/var/www/html/<nome progetto>/Modules/Module/Datas/`
   - ✅ `/var/www/html/<nome progetto>/laravel/Modules/Module/Datas/`
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> ce6fc085 (.)
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
<<<<<<< HEAD
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
=======
>>>>>>> d86d643a (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 472bd9dc (.)
=======
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 3bf39332 (.)
=======
>>>>>>> ab5b3a4f (.)
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/<nome progetto>/Modules/Module/Datas/`
   - ✅ `/var/www/html/<nome progetto>/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
<<<<<<< HEAD
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
=======
>>>>>>> 43d67f21 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> 3bf39332 (.)
>>>>>>> ab5b3a4f (.)

2. **Errore**: Namespace errato
   - ❌ `namespace Modules\Module\App\Datas;`
   - ✅ `namespace Modules\Module\Datas;`

3. **Errore**: Validazione mancante
   - ❌ Manca `rules()`
   - ✅ Implementare `rules()`

## Collegamenti

- [Data Objects Patient](../Patient/project_docs/data-objects.md)
- [Best Practices](./best-practices.md)
- [Convenzioni di Codice](./coding-standards.md) 
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
