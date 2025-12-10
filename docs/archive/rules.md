## Regole di naming per le azioni

- Le azioni che operano su una chiave specifica devono utilizzare la forma `By<Key>` (es. `UpdateRestiPondByValutatoreIdAction`).
- Il namespace corretto per Filament è sempre `Modules\<nome modulo>\Filament`, anche se i file risiedono in `app/Filament`.
- Esempio pratico: vedi la correzione e il ragionamento in [Azioni Organizzativa (Performance)](../../Performance/docs/azioni_organizzativa.md).

### Collegamenti
- [Azioni Organizzativa (Performance)](../../Performance/docs/azioni_organizzativa.md)

## Regole sui Model
- Nei moduli, i model devono **sempre** estendere `BaseModel` e **mai** direttamente `Model`.
- Il codice deve essere scritto già conforme agli standard richiesti da phpstan livello 10.
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
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 85cdef688 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6ca989d8 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 091f883c (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 67be6ac0 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 59259b43 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 88ee35c4e (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> aba62c408 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 92cca5ade (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 5cb992cc6 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6a52563d6 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 3c8d62b79 (.)

## Regole permanenti per Action Filament custom

### Pattern corretto
- Override di `setUp()` per configurare tutte le proprietà dell'action custom (label, icona, conferma, azione, ecc.).
- Nome univoco e documentato passato a `parent::make` (o gestito internamente da Filament).
- Tutte le label, heading e descrizioni devono provenire dai file di traduzione del modulo (mai stringhe hardcoded).
- Tipizzazione rigorosa di tutti i metodi, evitare `mixed` se non strettamente necessario.
- Documentazione aggiornata e collegata (modulo e root).
- Validazione statica con phpstan e test di regressione dopo ogni bugfix.

### Anti-pattern da evitare
- Closure anonime per azioni complesse o riusabili.
- Uso di `->label()` con stringhe hardcoded.
- Metodi statici con firma non compatibile con Filament.
- Duplicazione di logica tra action e controller.
- Nomi duplicati per le action.

### Checklist per ogni nuova Action Filament
- [ ] Override di `setUp()`
- [ ] Nome univoco e documentato
- [ ] Label e testi solo da file di traduzione
- [ ] Tipizzazione rigorosa
- [ ] Documentazione aggiornata (modulo e root)
- [ ] Validazione phpstan e test di regressione

### Esempio e motivazione
- Vedi [Performance/docs/organizzativa-migration-errors.md](../../Performance/docs/organizzativa-migration-errors.md) per esempio pratico, motivazione e memoria storica.
- Queste regole sono obbligatorie per tutti i moduli che implementano action custom Filament.

### Collegamenti
- [Performance: pattern e anti-pattern Action Filament](../../Performance/docs/organizzativa-migration-errors.md)
- [Indice e collegamenti root](../../../docs/links.md)

## Regole sulle colonne delle tabelle Filament
- Le colonne delle tabelle Filament devono corrispondere esattamente a quelle del modello e della migrazione.
- Non inventare mai colonne (es. name, field_name, op, value) se non esistono realmente.
- Usare sempre i file di traduzione per le label.
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
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 85cdef688 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
- Vedi [Performance/project_docs/organizzativa_cat_coeffs.md](../../Performance/project_docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 091f883c (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> ecd5ec32 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 2bad128c (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 59259b43 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> 358ba79a7 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> aba62c408 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 5e6aa70fe (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> f8f76a284 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 5cb992cc6 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> e39b54ba7 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 3c8d62b79 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> ba7efc23f (.)
