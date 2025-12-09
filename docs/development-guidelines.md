# Development Guidelines - Xot Module

## Panoramica
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
=======
>>>>>>> f1d4085 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
>>>>>>> 3310e9c6 (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 5a14301c (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 71f31700 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
=======
>>>>>>> 6cba4fe (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 5a14301c (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
<<<<<<< HEAD
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 17684f52 (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
=======
>>>>>>> 6cba4fe (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> c35986f4 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
=======
>>>>>>> 6cba4fe (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 5a14301c (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
<<<<<<< HEAD
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 5a14301c (.)

## PHPStan Best Practices

### Type Safety
- Utilizzare sempre `declare(strict_types=1);`
- Type hints espliciti per tutti i parametri e return types
- Gestione corretta dei tipi `mixed` con type casting appropriato

### Best Practices PHPStan
- Evitare accesso statico a proprietà di istanza
- Utilizzare type hints specifici invece di `mixed` quando possibile
- Aggiungere commenti PHPDoc per type casting quando necessario

### Architettura Modulare
- Mantenimento dei confini dei moduli
- Rispetto delle responsabilità di ogni classe
- Documentazione delle decisioni architetturali

## Correzioni Implementate

### Moduli Corretti
- [FormBuilder FieldOption Model](../FormBuilder/docs/phpstan-corrections.md)
- [Lang Console Commands](../Lang/docs/phpstan-corrections.md)

## Principi di Correzione

### Type Safety
- Utilizzare sempre `declare(strict_types=1);`
- Type hints espliciti per tutti i parametri e return types
- Gestione corretta dei tipi `mixed` con type casting appropriato

### Best Practices PHPStan
- Evitare accesso statico a proprietà di istanza
- Utilizzare type hints specifici invece di `mixed` quando possibile
- Aggiungere commenti PHPDoc per type casting quando necessario

### Architettura Modulare
- Mantenimento dei confini dei moduli
- Rispetto delle responsabilità di ogni classe
- Documentazione delle decisioni architetturali

## Collegamenti Correlati

- [FormBuilder PHPStan Corrections](../FormBuilder/docs/phpstan-corrections.md)
- [Lang PHPStan Corrections](../Lang/docs/phpstan-corrections.md)
- [Xot Architecture](./architecture.md)

## Note per Sviluppo Futuro

1. **Type Safety**: Mantenere sempre type hints espliciti
2. **Static Properties**: Evitare accesso statico a proprietà di istanza
3. **Mixed Types**: Gestire sempre i tipi `mixed` con type casting appropriato
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
=======
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 5a14301c (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 71f31700 (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 5a14301c (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 71f31700 (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> c35986f4 (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 5a14301c (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 71f31700 (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 5a14301c (.)
