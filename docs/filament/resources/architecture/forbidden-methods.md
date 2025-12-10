# Metodi da NON implementare in classi che estendono XotBaseResource

## Regola fondamentale

Le classi che estendono `XotBaseResource` **NON DEVONO MAI** implementare i seguenti metodi:

### Metodi di tabella
- ❌ `getTableColumns()`
- ❌ `getTableFilters()`
- ❌ `getTableActions()`
- ❌ `getTableBulkActions()`
- ❌ `getNavigationGroup()`

### Metodi di form e navigazione
- ❌ `form(Form $form): Form`
- ❌ `table(Table $table): Table`
- ❌ `getPages()` (se contiene solo route standard)
- ❌ `getRelations()` (se restituisce un array vuoto)

## Motivazione architetturale

Questi metodi sono già implementati in `XotBaseResource` e forniscono funzionalità standard ottimizzate per il progetto. Sovrascriverli:

1. **Rompe l'astrazione**: La classe base fornisce un'implementazione standardizzata
2. **Duplica il codice**: Porta a duplicazione non necessaria e difficoltà di manutenzione
3. **Riduce la coerenza**: Crea incoerenze nell'interfaccia utente e nel comportamento
4. **Complica gli aggiornamenti**: Rende più difficile aggiornare il comportamento a livello di sistema

## Pattern corretto

```php
class ProductResource extends XotBaseResource
{
    protected static ?string $model = Product::class;

    // UNICI metodi che dovrebbero essere implementati
    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required(),
            // Altri campi...
        ];
    }

    // Solo se è necessario personalizzare la query
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
```

## Casi eccezionali

L'implementazione di questi metodi è giustificata **SOLO** in casi rari ed eccezionali, quando:

1. È necessario un comportamento radicalmente diverso da quello standard
2. Il comportamento non può essere ottenuto attraverso altre configurazioni
3. Il team di sviluppo ha esplicitamente approvato questa eccezione

## Verifica automatica

Prima di ogni commit, verificare che le risorse Filament non contengano metodi proibiti:

```bash

# Cerca implementazioni non necessarie
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
grep -r "public static function getTableColumns" --include="*Resource.php" /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
grep -r "public static function getTableFilters" --include="*Resource.php" /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
grep -r "public static function getTableActions" --include="*Resource.php" /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
grep -r "public static function getTableBulkActions" --include="*Resource.php" /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
grep -r "public static function getNavigationGroup" --include="*Resource.php" /var/www/html/base_techplanner_fila3_mono/laravel/Modules/
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 62cc8443 (.)
grep -r "public static function getTableColumns" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getTableFilters" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getTableActions" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getTableBulkActions" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getNavigationGroup" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 472bd9dc (.)
>>>>>>> 62cc8443 (.)
grep -r "public static function getTableColumns" --include="*Resource.php" /var/www/html/base_saluteora/laravel/Modules/
grep -r "public static function getTableFilters" --include="*Resource.php" /var/www/html/base_saluteora/laravel/Modules/
grep -r "public static function getTableActions" --include="*Resource.php" /var/www/html/base_saluteora/laravel/Modules/
grep -r "public static function getTableBulkActions" --include="*Resource.php" /var/www/html/base_saluteora/laravel/Modules/
grep -r "public static function getNavigationGroup" --include="*Resource.php" /var/www/html/base_saluteora/laravel/Modules/
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 62cc8443 (.)
grep -r "public static function getTableColumns" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getTableFilters" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getTableActions" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getTableBulkActions" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
grep -r "public static function getNavigationGroup" --include="*Resource.php" /var/www/html/base_<nome progetto>/laravel/Modules/
<<<<<<< HEAD
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 472bd9dc (.)
>>>>>>> 62cc8443 (.)
```

## Processo di refactoring

Se questi metodi sono trovati in una classe esistente:

1. Rimuovere completamente il metodo se il comportamento è standard
2. Se contiene personalizzazioni critiche, discutere con il team come ottenere lo stesso risultato usando meccanismi standard
3. Documentare qualsiasi eccezione con commenti dettagliati che spiegano perché è necessaria
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
>>>>>>> 6ca989d8 (.)
