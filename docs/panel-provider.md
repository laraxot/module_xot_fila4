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
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
# Panel Provider in Modulo Xot

## XotBaseMainPanelProvider

Il `XotBaseMainPanelProvider` è la classe base per tutti i Panel Provider di Filament in Laraxot. Fornisce una configurazione completa e standardizzata per l'admin panel.

### Funzionalità Include

#### Configurazione Base
- **ID Panel**: 'admin'
- **Path**: '/admin'
- **SPA**: Abilitato per Single Page Application
- **Sidebar**: Collassabile su desktop

#### Autenticazione e Sicurezza
- Login automatico (se modulo Cms non presente)
- Reset password
- Profilo utente
- Middleware di autenticazione
- Middleware di sicurezza (CSRF, Session, Cookie)

#### Scoperta Automatica
- Risorse: `app/Filament/Resources`
- Pagine: `app/Filament/Pages`
- Widget: `app/Filament/Widgets`

#### Navigazione Modulare
- Menu utente con profilo
- Navigazione automatica dai moduli
- Integrazione con sistema di permessi

### Utilizzo Corretto

```php
<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;

class AdminPanelProvider extends XotBaseMainPanelProvider
{
    // Personalizzazioni specifiche se necessarie
    // La maggior parte della configurazione è già inclusa nella classe base
}
```

### Personalizzazioni

Se è necessario personalizzare il panel, sovrascrivere il metodo `panel()`:

```php
public function panel(Panel $panel): Panel
{
    $panel = parent::panel($panel);
    
    // Aggiungere personalizzazioni specifiche
    $panel->theme('custom-theme');
    
    return $panel;
}
```

### Errori Comuni

1. **Non estendere XotBaseMainPanelProvider**
   - Causa: Perdita di funzionalità core
   - Soluzione: Estendere sempre XotBaseMainPanelProvider

2. **Reimplementare funzionalità esistenti**
   - Causa: Duplicazione e conflitti
   - Soluzione: Usare solo personalizzazioni specifiche

3. **Non chiamare parent::panel()**
   - Causa: Perdita di configurazione base
   - Soluzione: Sempre chiamare parent::panel()

### Best Practices

1. **SEMPRE** estendere XotBaseMainPanelProvider
2. **MAI** reimplementare middleware o autenticazione
3. **SEMPRE** chiamare parent::panel() se si sovrascrive
4. **SEMPRE** documentare personalizzazioni
5. **SEMPRE** testare dopo modifiche

### Collegamenti

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
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
- [Documentazione Root](../../../docs/filament_panel_provider_rules.md)
- [Architettura Filament](../../../docs/FILAMENT_BEST_PRACTICES.md)
- [Configurazione Moduli](../../../docs/MODULE_ARCHITECTURE.md)

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
*Ultimo aggiornamento: 2025-01-06* 
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 71f31700 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 71f31700 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> c35986f4 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 71f31700 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 71f31700 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
- [Documentazione Root](../../../docs/filament_panel_provider_rules.md)
- [Architettura Filament](../../../docs/FILAMENT_BEST_PRACTICES.md)
- [Configurazione Moduli](../../../docs/MODULE_ARCHITECTURE.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 5bd842e3 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 03ceeac3 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 5a14301c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 71f31700 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
- [Documentazione Root](../../../docs/filament_panel_provider_rules.md)
- [Architettura Filament](../../../docs/FILAMENT_BEST_PRACTICES.md)
- [Configurazione Moduli](../../../docs/MODULE_ARCHITECTURE.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 5bd842e3 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 03ceeac3 (.)
