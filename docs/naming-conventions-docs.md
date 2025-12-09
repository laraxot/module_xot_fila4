# Convenzioni di Naming nella Documentazione

## Regola: Nome del Progetto nei Moduli

### ⚠️ Regola Fondamentale
Il nome specifico del progetto (es: "il progetto") NON DEVE MAI apparire nella documentazione dei singoli moduli.

### Motivazione
1. **Riusabilità dei Moduli**
   - I moduli sono progettati per essere riutilizzabili in diversi progetti
   - Il riferimento a un progetto specifico limita questa riusabilità
   - La documentazione deve essere neutrale e generica

2. **Manutenibilità**
   - In caso di rebranding, non è necessario aggiornare la documentazione dei moduli
   - Evita confusione quando il modulo viene utilizzato in progetti diversi
   - Semplifica il processo di fork e riutilizzo

3. **Separazione delle Responsabilità**
   - I moduli descrivono funzionalità generiche
   - Il contesto specifico del progetto va documentato nella root
   - Mantiene pulita la separazione tra logica di business e implementazione

### Dove Usare il Nome del Progetto
✅ CORRETTO:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- `/project_docs/` (cartella root del progetto)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6cba4fe (.)
=======
- `/project_docs/` (cartella root del progetto)
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
- `/project_docs/` (cartella root del progetto)
>>>>>>> 71f31700 (.)
=======
- `/project_docs/` (cartella root del progetto)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
- `/project_docs/` (cartella root del progetto)
>>>>>>> c35986f4 (.)
=======
- `/project_docs/` (cartella root del progetto)
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
- `/project_docs/` (cartella root del progetto)
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
- `/docs/` (cartella root del progetto)
=======
>>>>>>> f1d4085 (.)
- `README.md` principale
- File di configurazione specifici del progetto
- Documentazione di deployment

❌ ERRATO:
- Documentazione dei moduli
- File di traduzione dei moduli
- Esempi di codice nei moduli
- Test dei moduli

### Esempi

#### ✅ CORRETTO (in un modulo)
```markdown

# Modulo di Gestione Pazienti
Questo modulo fornisce funzionalità per la gestione dei pazienti in una clinica odontoiatrica.
```

#### ❌ ERRATO (in un modulo)
```markdown

# Modulo Pazienti il progetto
Questo modulo gestisce i pazienti nella piattaforma il progetto.
```

### Terminologia da Usare nei Moduli
- "il sistema"
- "l'applicazione"
- "la piattaforma"
- "il progetto"
- "l'implementazione"

### Checklist di Verifica
Prima di committare modifiche alla documentazione di un modulo, verificare:
- [ ] Nessun riferimento al nome specifico del progetto
- [ ] Uso di terminologia generica
- [ ] Descrizioni funzionali indipendenti dal contesto
- [ ] Esempi neutrali

## Note Importanti
1. Questa regola si applica a TUTTI i file nella cartella `docs/` dei moduli
2. Include anche esempi di codice e configurazioni
3. Si applica a tutti i formati (MD, PHP, JSON, etc.)
4. Vale anche per i commenti nel codice

## Collegamenti
- [Struttura Moduli](module-structure.md)
- [Convenzioni Generali](conventions.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Best Practices Documentazione](documentation-guidelines.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 5a14301c (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> f1d4085 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 3fbbf1f5 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 71f31700 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> f1d4085 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 3310e9c6 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> c35986f4 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 5a14301c (.)
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
