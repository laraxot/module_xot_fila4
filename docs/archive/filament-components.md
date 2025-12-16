<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
# Componenti Filament - Guida di Riferimento

## FileUpload Component

### Metodi Corretti
```php
FileUpload::make('field_name')
    ->disk('public')                              // Disco di storage
    ->directory('path/to/dir')                    // Directory di destinazione
    ->acceptedFileTypes(['application/pdf'])      // Tipi di file accettati
    ->maxSize(5120)                              // Dimensione massima in KB
    ->downloadable()                             // Permette il download
    ->previewable()                              // Mostra anteprima
    ->imagePreviewHeight('100')                  // Altezza anteprima
    ->loadingIndicatorPosition('left')           // Posizione indicatore caricamento
    ->removeUploadedFileButtonPosition('right')  // Posizione pulsante rimozione
    ->uploadButtonPosition('left')               // Posizione pulsante upload
    ->uploadProgressIndicatorPosition('left')    // Posizione barra progresso
```

### Metodi Deprecati o Non Esistenti
❌ NON USARE:
- `removeButtonPosition()` -> Usa `removeUploadedFileButtonPosition()`
- `deleteButtonPosition()` -> Non esiste
- `cancelButtonPosition()` -> Non esiste

### Best Practices
1. Usa sempre `disk()` e `directory()` per organizzare i file
2. Imposta sempre `maxSize()` per limitare dimensioni
3. Specifica `acceptedFileTypes()` per sicurezza
4. Usa `imagePreviewHeight()` per anteprime consistenti
5. Configura le posizioni dei pulsanti per UX coerente

### Esempi Comuni

#### Upload Documenti
```php
FileUpload::make('document')
    ->disk('public')
    ->directory('documents')
    ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png'])
    ->maxSize(5120)
    ->required()
    ->downloadable()
    ->previewable()
```

#### Upload Immagini
```php
FileUpload::make('image')
    ->disk('public')
    ->directory('images')
    ->acceptedFileTypes(['image/jpeg', 'image/png'])
    ->maxSize(2048)
    ->image()
    ->imagePreviewHeight('100')
```

## TextInput Component

### Metodi Corretti
```php
TextInput::make('field_name')
    ->label('Label')
    ->placeholder('Placeholder')
    ->required()
    ->maxLength(255)
    ->prefixIcon('heroicon-o-user')
    ->suffixIcon('heroicon-o-check')
```

### Best Practices
1. Usa sempre `label()` per accessibilità
2. Imposta `maxLength()` per validazione
3. Usa icone consistenti dal set Heroicons

## DatePicker Component

### Metodi Corretti
```php
DatePicker::make('field_name')
    ->label('Label')
    ->format('Y-m-d')
    ->displayFormat('d/m/Y')
    ->minDate('2020-01-01')
    ->maxDate('today')
```

## Note Importanti
1. Controlla sempre la documentazione ufficiale di Filament per i metodi più recenti
2. Usa l'autocompletamento dell'IDE per verificare i metodi disponibili
3. Mantieni consistenza nei nomi dei metodi in tutto il progetto
4. Aggiorna questa documentazione quando trovi nuovi metodi o pattern utili 
## Collegamenti tra versioni di FILAMENT_COMPONENTS.md
<<<<<<< HEAD
* [FILAMENT_COMPONENTS.md](../../../Xot/docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/docs/FILAMENT_COMPONENTS.md)

=======
<<<<<<< HEAD
<<<<<<< HEAD
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> e39b54ba7 (.)
=======
>>>>>>> 5e6e0d054 (.)
* [FILAMENT_COMPONENTS.md](../../../Xot/docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/docs/FILAMENT_COMPONENTS.md)

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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 62cc8443 (.)
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

<<<<<<< HEAD
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)


* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/docs/FILAMENT_COMPONENTS.md)

* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

=======
>>>>>>> 43d67f21 (.)
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
<<<<<<< HEAD
>>>>>>> ab5b3a4f (.)
=======
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======

=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
<<<<<<< HEAD
>>>>>>> 7e4835b8e (.)
=======
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> 55fe1822 (.)
<<<<<<< HEAD
>>>>>>> e39b54ba7 (.)
=======
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/project_docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/project_docs/FILAMENT_COMPONENTS.md)

>>>>>>> 90d386aa (.)
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
=======
=======
<<<<<<< HEAD

=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
>>>>>>> 9f193021d (.)
=======
* [FILAMENT_COMPONENTS.md](../../../Xot/docs/FILAMENT_COMPONENTS.md)
* [FILAMENT_COMPONENTS.md](../../../../Themes/One/docs/FILAMENT_COMPONENTS.md)

=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
## Correzione e regole per XotBaseManageRelatedRecords

- Tutti i metodi pubblici devono avere tipizzazione forte e PHPDoc dettagliato.
- Usare sempre Assert per garantire la correttezza dei tipi e fallback robusti.
- Vietato l'uso di return impliciti, mixed o cast forzati.
- Il metodo per le colonne della tabella deve essere sempre getTableColumns.
- Ogni correzione deve essere documentata qui e in FILAMENT_TABLE_COLUMNS.md.

**Collegamento:** Vedi anche [FILAMENT_TABLE_COLUMNS.md](./FILAMENT_TABLE_COLUMNS.md)

<<<<<<< HEAD
=======
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
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
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
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 90d386aa (.)
>>>>>>> 5e6e0d054 (.)
=======
=======
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
