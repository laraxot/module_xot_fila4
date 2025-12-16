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
   - ❌ `/var/www/html/<nome progetto>/Modules/Module/Datas/`
   - ✅ `/var/www/html/<nome progetto>/laravel/Modules/Module/Datas/`
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> cf971011 (.)
=======
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> e7da37af (.)
=======
>>>>>>> 7e4835b8e (.)
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
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 55fe1822 (.)
>>>>>>> e39b54ba7 (.)
=======
   - ❌ `/var/www/html/<nome progetto>/Modules/Module/Datas/`
   - ✅ `/var/www/html/<nome progetto>/laravel/Modules/Module/Datas/`
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

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
