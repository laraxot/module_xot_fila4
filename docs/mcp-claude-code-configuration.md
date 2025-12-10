# Configurazione MCP per Claude Code

## Panoramica


## Prerequisiti

- Claude Code installato e configurato
- Accesso al terminale
- Variabili d'ambiente del database configurate

## Configurazione Server MCP

### 1. Filesystem Server

Permette l'accesso ai file del progetto.

```bash
```

**Nota**: Richiede un server MCP HTTP in esecuzione. Per sviluppo locale, utilizzare server STDIO invece.

### 2. Fetch Server

Permette chiamate HTTP e API.

```bash
```

### 3. Memory Server

Memoria temporanea per contesto tra richieste.

```bash
```

### 4. MySQL Server

Interazione con database MySQL.

```bash
```

**Variabili d'ambiente richieste**:
- `DB_HOST`: Host del database (default: localhost)
- `DB_PORT`: Porta del database (default: 3306)
- `DB_USERNAME`: Username del database
- `DB_PASSWORD`: Password del database
- `DB_DATABASE`: Nome del database

### 5. Sequential Thinking Server

Analisi codice e ottimizzazione.

```bash
```

## Configurazione con Server STDIO (Raccomandato)

Per sviluppo locale, è preferibile utilizzare server STDIO invece di HTTP:

### Filesystem con STDIO

```bash
```

### Memory con STDIO

```bash
```

### MySQL con STDIO

```bash
```

**Con variabili d'ambiente**:
```bash
export DB_HOST=localhost
export DB_PORT=3306
export DB_USERNAME=your_username
export DB_PASSWORD=your_password
export DB_DATABASE=your_database

```

## Gestione Server

### Lista Server Configurati

```bash
claude mcp list
```

### Rimozione Server

```bash
```

### Test Connessione

```bash
```

## Configurazione Avanzata

### Server Personalizzati

Per server MCP personalizzati, creare uno script wrapper:

```bash
#!/bin/bash

export MYSQL_HOST="${DB_HOST:-localhost}"
export MYSQL_PORT="${DB_PORT:-3306}"
export MYSQL_USER="${DB_USERNAME}"
export MYSQL_PASSWORD="${DB_PASSWORD}"
export MYSQL_DATABASE="${DB_DATABASE}"

exec npx -y @modelcontextprotocol/server-mysql
```

Poi aggiungere il server:

```bash
```

## Troubleshooting

### Server non si connette

1. Verificare che il comando sia installato:
   ```bash
   npx -y @modelcontextprotocol/server-filesystem --version
   ```

2. Controllare permessi file:
   ```bash
   ```

3. Verificare variabili d'ambiente:
   ```bash
   echo $DB_HOST
   echo $DB_USERNAME
   ```

### Errori di autenticazione database

1. Testare connessione manuale:
   ```bash
   mysql -h $DB_HOST -P $DB_PORT -u $DB_USERNAME -p$DB_PASSWORD $DB_DATABASE
   ```

2. Verificare credenziali nel file `.env`:
   ```bash
   ```

## Best Practices

2. **Variabili d'ambiente**: Mai hardcodare credenziali nei comandi
3. **Test regolari**: Verificare periodicamente che i server funzionino
4. **Documentazione**: Mantenere questa documentazione aggiornata

## Riferimenti

- [Claude Code MCP Documentation](https://docs.anthropic.com/claude/docs/mcp)
- [Model Context Protocol Specification](https://modelcontextprotocol.io)
- [MCP Editors Configuration](../mcp-editors-configuration.md)

