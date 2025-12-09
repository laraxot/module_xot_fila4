<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 33af3e61 (.)
=======
>>>>>>> 5bd842e3 (.)
## Convenzioni di naming per le azioni (Actions)

Per tutte le azioni che operano su chiavi di aggregazione specifiche (es. stabi, valutatore_id, ecc.), si raccomanda l'uso esplicito del suffisso `By<Chiave>` nel nome della classe. Esempio:
- `UpdateRestiPondByValutatoreIdAction` (corretto)
- `UpdateRestiPondValutatoreIdAction` (da evitare)

Questa convenzione migliora la leggibilità e la chiarezza del codice, rendendo immediatamente evidente la logica di aggregazione utilizzata.

**Collegamento bidirezionale:**
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
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 5a14301c (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 71f31700 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> ca9324a4 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 5a14301c (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 71f31700 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> ca9324a4 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> c35986f4 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 9db27d12 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 5a14301c (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 71f31700 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> ca9324a4 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 5a14301c (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 71f31700 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> ca9324a4 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> c35986f4 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 9db27d12 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 33af3e61 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md)
>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> ba1d49f3 (.)
=======
- [Motivazione e applicazione nel modulo Performance](../../Performance/docs/azioni_organizzativa.md)
>>>>>>> 5bd842e3 (.)

## Memo e regole operative permanenti (per tutti i moduli che seguono Xot)

- **Un solo model per ogni concetto aggregato**: per ogni tipo di aggregazione (es. valutatore_id, stabi, ecc.), deve esistere un solo model, con nome e tabella coerenti e documentati. Usare sempre `BaseModel` come classe base.
- **Un solo file per ogni azione di aggregazione**: mantenere solo la versione con il suffisso `By<Chiave>` (es. `ByValutatoreId`, `ByStabi`) per chiarezza, coerenza e ricerca.
- **Tutte le azioni e i model devono essere documentati** e collegati alle regole generali del progetto (vedi root docs e docs di ogni modulo).
- **Le duplicazioni vanno eliminate**: ogni refactoring deve essere documentato con motivazione e percorso nella sezione dedicata.
- **Tipizzazione rigorosa**: tutto il codice deve essere conforme a phpstan livello 10.
- **Collegamenti rapidi**:
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
  - [Documentazione generale e convenzioni di progetto](../../../../project_docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/project_docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> ba1d49f3 (.)
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

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
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 5a14301c (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 71f31700 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 5a14301c (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 71f31700 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> c35986f4 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 5a14301c (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 71f31700 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 5a14301c (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 71f31700 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> c35986f4 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> cc7fb225 (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 33af3e61 (.)
=======
>>>>>>> ba1d49f3 (.)
=======
=======
> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
  - [Documentazione generale e convenzioni di progetto](../../../../docs/coding-standards.md)
  - [Esempio e memo nel modulo Performance](../../Performance/docs/azioni_organizzativa.md#memo-e-regole-operative-permanenti-per-evitare-perdita-di-tempo-e-memoria)

> **Nota**: Consulta sempre questa sezione prima di aggiungere nuovi model o azioni di aggregazione in qualsiasi modulo che si rifà alle regole Xot. In caso di dubbio, aggiorna prima la documentazione e confronta con le regole generali. 
>>>>>>> 5bd842e3 (.)
