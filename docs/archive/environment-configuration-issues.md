# Problemi di Configurazione Variabili d'Ambiente - Modulo Xot

## Problema: env() non funziona durante il bootstrap

### Contesto
Il modulo Xot utilizza `XotData` come classe singleton per gestire la configurazione globale dell'applicazione. Durante il bootstrap, alcune variabili d'ambiente potrebbero non essere disponibili.

### Problema Specifico
Nel file `XotData.php`, il metodo `forceSSL()` mostra valori inconsistenti:

```php
public function forceSSL(): bool
{
    dddx([
        'env'=>env('FORCE_SSL'),        // null (dovrebbe essere true)
        'config'=>config('xra.force_ssl'), // null
        'xotdata'=>$this->force_ssl,    // false
    ]);
    
    return false;
}
```

### Analisi Tecnica

#### 1. Flusso di Caricamento
```
.env (FORCE_SSL=true)
    ↓
config/localhost/xra.php ('force_ssl' => env('FORCE_SSL', false))
    ↓
TenantService::getConfig('xra')
    ↓
XotData::make() (singleton)
    ↓
XotData::from($data) (proprietà force_ssl = false)
```

#### 2. Timing del Problema
- **Bootstrap**: `XotData::make()` viene chiamato durante l'inizializzazione
- **env() non disponibile**: Le variabili d'ambiente potrebbero non essere completamente caricate
- **Configurazione statica**: Il valore viene "congelato" nel singleton

#### 3. Architettura Multi-Tenant
Il `TenantService` carica configurazioni specifiche per tenant:
- File: `config/localhost/xra.php`
- Metodo: `TenantService::filePath('xra.php')`
- Timing: Durante il bootstrap dell'applicazione

### Soluzioni Implementate

#### Soluzione 1: Caricamento Lazy (Raccomandata)
```php
public function forceSSL(): bool
{
    // Carica il valore quando necessario, non durante il bootstrap
    return config('xra.force_ssl', env('FORCE_SSL', false));
}
```

#### Soluzione 2: Configurazione Diretta
```php
// config/localhost/xra.php
'force_ssl' => true, // Valore hardcoded invece di env()
```

#### Soluzione 3: Ricaricamento Post-Bootstrap
```php
public static function make(): self
{
    if (! self::$instance) {
        $data = TenantService::getConfig('xra');
        self::$instance = self::from($data);
        
        // Ricarica valori env() dopo il bootstrap
        self::$instance->force_ssl = config('xra.force_ssl', env('FORCE_SSL', false));
    }

    return self::$instance;
}
```

### Best Practice per XotData

1. **Evitare env() in proprietà**: Non usare `env()` nelle proprietà della classe
2. **Caricamento Lazy**: Caricare valori env() quando necessario
3. **Config() preferito**: Usare `config()` che ha accesso alle variabili caricate
4. **Test di Configurazione**: Verificare sempre il caricamento corretto

### Pattern Raccomandato

```php
class XotData extends Data
{
    public bool $force_ssl = false; // Valore di default
    
    public function forceSSL(): bool
    {
        // Caricamento lazy con fallback
        return config('xra.force_ssl', env('FORCE_SSL', $this->force_ssl));
    }
    
    public function getConfigValue(string $key, $default = null)
    {
        // Pattern generico per configurazioni env()
        return config("xra.{$key}", env(strtoupper($key), $default));
    }
}
```

### Debug e Troubleshooting

#### Comando di Debug
```bash
php artisan tinker
>>> XotData::make()->forceSSL()
```

#### Verifica Configurazione
```bash
php artisan config:clear
php artisan cache:clear
php artisan config:cache
```

#### Log di Debug
```php
\Log::info('XotData Config', [
    'env' => env('FORCE_SSL'),
    'config' => config('xra.force_ssl'),
    'xotdata' => XotData::make()->force_ssl
]);
```

### Collegamenti

- [XotData.php](/laravel/Modules/Xot/app/Datas/XotData.php)
- [TenantService.php](/laravel/Modules/Tenant/app/Services/TenantService.php)
- [xra.php](/laravel/config/localhost/xra.php)
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

*Ultimo aggiornamento: 2025-01-06* 
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
- [Documentazione Root](/docs/env-config-loading-issue.md)

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
>>>>>>> 85cdef688 (.)
=======
- [Documentazione Root](/docs/env-config-loading-issue.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> a5dccfe (.)
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
- [Documentazione Root](/docs/env-config-loading-issue.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 67be6ac0 (.)
=======
>>>>>>> 59259b43 (.)
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> a5dccfe (.)
>>>>>>> ab5b3a4f (.)
=======
- [Documentazione Root](/docs/env-config-loading-issue.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 88ee35c4e (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> a5dccfe (.)
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
- [Documentazione Root](/docs/env-config-loading-issue.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 92cca5ade (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> a5dccfe (.)
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
- [Documentazione Root](/docs/env-config-loading-issue.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 6a52563d6 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> a5dccfe (.)
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
- [Documentazione Root](/docs/env-config-loading-issue.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 317b552da (.)
=======
>>>>>>> 60f0a1820 (.)
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> a5dccfe (.)
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 5df5c7505 (.)
=======
- [Documentazione Root](/docs/env-config-loading-issue.md)

*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 80bc07e81 (.)
