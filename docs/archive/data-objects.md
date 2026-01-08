<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 71f31700 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> d86d643a (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 472bd9dc (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 3bf39332 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> cf971011 (.)
=======
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/<nome progetto>/Modules/Module/Datas/`
   - ✅ `/var/www/html/<nome progetto>/laravel/Modules/Module/Datas/`
   - ❌ `/var/www/html/_bases/base_techplanner_fila3_mono/Modules/Module/Datas/`
   - ✅ `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Module/Datas/`
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 43d67f21 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> b7ea1cd1 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 3bf39332 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> cf971011 (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 76bec91a (.)
=======
   - ❌ `/var/www/html/saluteora/Modules/Module/Datas/`
   - ✅ `/var/www/html/saluteora/laravel/Modules/Module/Datas/`
>>>>>>> 03ceeac3 (.)

2. **Errore**: Namespace errato
   - ❌ `namespace Modules\Module\App\Datas;`
   - ✅ `namespace Modules\Module\Datas;`

3. **Errore**: Validazione mancante
   - ❌ Manca `rules()`
   - ✅ Implementare `rules()`

## Collegamenti

- [Data Objects Patient](../Patient/docs/data-objects.md)
- [Best Practices](./best-practices.md)
- [Convenzioni di Codice](./coding-standards.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
