# Development Guidelines - Xot Module

## Panoramica
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto .
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto <nome progetto>.
=======
=======
>>>>>>> 3fbbf1f5 (.)
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 5a14301c (.)
=======
Questo documento fornisce linee guida generali per lo sviluppo e la qualità del codice nel progetto SaluteOra.
>>>>>>> 71f31700 (.)

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
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
=======
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 5a14301c (.)
=======
4. **Documentation**: Aggiornare sempre la documentazione dopo correzioni significative 
>>>>>>> 71f31700 (.)
