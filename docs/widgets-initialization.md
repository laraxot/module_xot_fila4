# Inizializzazione dei Widget XotBaseWidget

## ⚠️ Problema delle Signature (Incompatibilità)

In Filament v4 (Livewire 3), i widget che estendono `XotBaseWidget` (che a sua volta estende `Filament\Widgets\Widget`) spesso presentano firme (signature) del metodo `mount()` differenti:

- `EditUserWidget::mount(string $type, ?string $userId = null)`
- `TimeClockWidget::mount()` (senza parametri)
- Altri widget potrebbero avere parametri diversi passati da layout o pagine.

Se `XotBaseWidget` definisce un metodo `mount()`, tutti i figli devono avere una firma compatibile. Dato che il progetto ha oltre 120 widget, è impossibile e rischioso uniformarli tutti o usare firme variadiche che potrebbero nascondere errori.

## 🚀 Soluzione: Pattern `initXotBaseWidget()`

Per mantenere il principio **DRY** (Don't Repeat Yourself) e garantire che il form sia correttamente inizializzato (soprattutto con `statePath('data')`), è stato introdotto il metodo `initXotBaseWidget()`.

### 1. Definizione in `XotBaseWidget`

```php
    /**
     * Inizializza i dati del form.
     * Da chiamare nel mount() delle classi figlie.
     */
    protected function initXotBaseWidget(): void
    {
        $this->data = $this->getFormFill();
        $this->form->fill($this->data);
    }
```

### 2. Implementazione nei figli

Ogni widget figlio **DEVE** chiamare questo metodo all'interno del proprio `mount()`:

```php
    public function mount(string $type, ?string $userId = null): void
    {
        // Altra logica specifica...
        
        $this->initXotBaseWidget();
        
        // Altra logica specifica...
    }
```

## 🔒 Perché è importante?

Senza la chiamata a `fill()`, il form Livewire/Filament:
1.  **Non carica i valori iniziali** (es. da database o default).
2.  **Ritorna un errore "field not populated"** anche se i campi sono pieni, perché lo stato interno di Livewire (`$this->data`) non è stato sincronizzato con i componenti del form.

Questo problema è stato diagnosticato e risolto durante il debug del `LoginWidget` del tema Sixteen.

## 🧪 Casi Particolari

### LoginWidget
Il widget di login, essendo critico, deve sempre implementare `mount()`:
```php
    public function mount(): void
    {
        $this->initXotBaseWidget();
    }
```

### EditUserWidget
Inizializza il record e poi il form:
```php
    public function mount(string $type, ?string $userId = null): void
    {
        $this->type = $type;
        $this->record = $this->getFormModel($userId);
        $this->initXotBaseWidget();
    }
```
