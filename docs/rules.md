<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 551c768c4 (.)
## Regole di naming per le azioni

- Le azioni che operano su una chiave specifica devono utilizzare la forma `By<Key>` (es. `UpdateRestiPondByValutatoreIdAction`).
- Il namespace corretto per Filament è sempre `Modules\<nome modulo>\Filament`, anche se i file risiedono in `app/Filament`.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 551c768c4 (.)
- Esempio pratico: vedi la correzione e il ragionamento in [Azioni Organizzativa (Performance)](../../Performance/docs/azioni_organizzativa.md).

### Collegamenti
- [Azioni Organizzativa (Performance)](../../Performance/docs/azioni_organizzativa.md)
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
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5e58b29b (.)
=======
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a62d7646 (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5ca118c34 (.)
- Esempio pratico: vedi la correzione e il ragionamento in [Azioni Organizzativa (Performance)](../../Performance/project_docs/azioni_organizzativa.md).

### Collegamenti
- [Azioni Organizzativa (Performance)](../../Performance/project_docs/azioni_organizzativa.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 551c768c4 (.)

## Regole sui Model
- Nei moduli, i model devono **sempre** estendere `BaseModel` e **mai** direttamente `Model`.
- Il codice deve essere scritto già conforme agli standard richiesti da phpstan livello 10.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> d79d36e0 (.)
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> f1d4085 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 6dcebf8a (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> cafe8bed (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/project_docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 5cd593a5 (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
- Evitare duplicazioni di model: vedi la discussione e i rischi nella [documentazione Performance](../../Performance/docs/azioni_organizzativa.md#duplicazione-tra-organizzativatotvalutatore-e-organizzativatotvalutatoreid). 
>>>>>>> 551c768c4 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 551c768c4 (.)
- Vedi [Performance/docs/organizzativa-migration-errors.md](../../Performance/docs/organizzativa-migration-errors.md) per esempio pratico, motivazione e memoria storica.
- Queste regole sono obbligatorie per tutti i moduli che implementano action custom Filament.

### Collegamenti
- [Performance: pattern e anti-pattern Action Filament](../../Performance/docs/organizzativa-migration-errors.md)
- [Indice e collegamenti root](../../../docs/links.md)
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
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 5e58b29b (.)
=======
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> a62d7646 (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5ca118c34 (.)
- Vedi [Performance/project_docs/organizzativa-migration-errors.md](../../Performance/project_docs/organizzativa-migration-errors.md) per esempio pratico, motivazione e memoria storica.
- Queste regole sono obbligatorie per tutti i moduli che implementano action custom Filament.

### Collegamenti
- [Performance: pattern e anti-pattern Action Filament](../../Performance/project_docs/organizzativa-migration-errors.md)
- [Indice e collegamenti root](../../../project_docs/links.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 551c768c4 (.)

## Regole sulle colonne delle tabelle Filament
- Le colonne delle tabelle Filament devono corrispondere esattamente a quelle del modello e della migrazione.
- Non inventare mai colonne (es. name, field_name, op, value) se non esistono realmente.
- Usare sempre i file di traduzione per le label.
<<<<<<< HEAD
<<<<<<< HEAD
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 551c768c4 (.)
- Vedi [Performance/project_docs/organizzativa_cat_coeffs.md](../../Performance/project_docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
<<<<<<< HEAD
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> d79d36e0 (.)
>>>>>>> 5ca118c34 (.)
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
- Vedi [Performance/project_docs/organizzativa_cat_coeffs.md](../../Performance/project_docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 2f3197ab (.)
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
<<<<<<< HEAD
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 3fbbf1f5 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 71f31700 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 3310e9c6 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> cafe8bed (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 5cd593a5 (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
=======
- Vedi [Performance/docs/organizzativa_cat_coeffs.md](../../Performance/docs/organizzativa_cat_coeffs.md) per esempio pratico, motivazione, correzione e checklist. 
=======
>>>>>>> 551c768c4 (.)
