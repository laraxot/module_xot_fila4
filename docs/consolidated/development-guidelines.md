# Development Guidelines - Xot Module

## Panoramica
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 5a14301c (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 399f46d3 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> d86d643a (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 43d67f21 (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 5a14301c (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)

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
- [FormBuilder FieldOption Model](../FormBuilder/project_docs/phpstan-corrections.md)
- [Lang Console Commands](../Lang/project_docs/phpstan-corrections.md)

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

- [FormBuilder PHPStan Corrections](../FormBuilder/project_docs/phpstan-corrections.md)
- [Lang PHPStan Corrections](../Lang/project_docs/phpstan-corrections.md)
- [Xot Architecture](./architecture.md)

## Note per Sviluppo Futuro

1. **Type Safety**: Mantenere sempre type hints espliciti
2. **Static Properties**: Evitare accesso statico a proprietà di istanza
3. **Mixed Types**: Gestire sempre i tipi `mixed` con type casting appropriato
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 5a14301c (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 399f46d3 (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 5a14301c (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 399f46d3 (.)
