<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
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
- `/project_docs/` (cartella root del progetto)
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
- [Best Practices Documentazione](documentation-guidelines.md) 
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
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
>>>>>>> ce6fc085 (.)
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> ab5b3a4f (.)
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> 2bad128c (.)
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> ecd5ec32 (.)
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> 62cc8443 (.)
- [Best Practices Documentazione](documentation-guidelines.md) 
<<<<<<< HEAD
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
>>>>>>> e39b54ba7 (.)
=======
=======
>>>>>>> 90d386aa (.)
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
=======
<<<<<<< HEAD
=======
- [Best Practices Documentazione](documentation-guidelines.md) 
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
