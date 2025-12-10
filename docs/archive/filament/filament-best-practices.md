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
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 6e7c1905 (.)
>>>>>>> 6a52563d6 (.)
# Filament Best Practices

## Visibilità dei Metodi

### Principio di Liskov
Quando si estendono le classi base di Filament o XotBase, è fondamentale rispettare il principio di sostituzione di Liskov. Questo significa che:
- La visibilità dei metodi non può essere ridotta nelle classi figlie
- I tipi di ritorno devono essere compatibili
- I parametri devono essere compatibili

### Metodi Comuni e loro Visibilità
| Metodo | Classe Base | Visibilità Richiesta |
|--------|-------------|---------------------|
| getTableActions() | XotBaseListRecords | public |
| getFormSchema() | XotBaseCreateRecord | public |
| getFormSchema() | XotBaseEditRecord | public |
| getHeaderActions() | XotBaseListRecords | public |
| getTableColumns() | XotBaseListRecords | public |

### Esempi di Implementazione Corretta

```php
class ListPosts extends XotBaseListRecords
{
    public function getTableActions(): array
    {
        return [
            // Le tue azioni personalizzate
        ];
    }

    public function getTableColumns(): array
    {
        return [
            // Le tue colonne personalizzate
        ];
    }
}
```

### Errori Comuni da Evitare

1. Riduzione della Visibilità
```php
// ❌ SBAGLIATO: Riduzione della visibilità
protected function getTableActions(): array

// ✅ CORRETTO: Mantenimento della visibilità
public function getTableActions(): array
```

2. Tipo di Ritorno Incompatibile
```php
// ❌ SBAGLIATO: Tipo di ritorno incompatibile
public function getTableActions(): Collection

// ✅ CORRETTO: Tipo di ritorno compatibile
public function getTableActions(): array
```

## Collegamenti
- [Documentazione Filament Ufficiale](https://filamentphp.com/)
- [Principio di Sostituzione di Liskov](https://it.wikipedia.org/wiki/Principio_di_sostituzione_di_Liskov)
- [Best Practices PHP](../php-strict-types.md) 
- [Best Practices PHP](../PHP-STRICT-TYPES.md) 
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
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
>>>>>>> 6e7c1905 (.)
>>>>>>> 6a52563d6 (.)
