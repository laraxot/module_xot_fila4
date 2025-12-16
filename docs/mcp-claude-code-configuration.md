# Configurazione MCP per Claude Code

## Panoramica

<<<<<<< HEAD
Claude Code utilizza comandi CLI per configurare i server MCP. Questa guida descrive come configurare i server MCP per il progetto <nome progetto> Fila4 Mono.
=======
>>>>>>> 38b70c7ba (.)

## Prerequisiti

- Claude Code installato e configurato
- Accesso al terminale
- Variabili d'ambiente del database configurate

## Configurazione Server MCP

### 1. Filesystem Server

Permette l'accesso ai file del progetto.

```bash
<<<<<<< HEAD
claude mcp add --transport http filesystem-<nome progetto> http://localhost:8000/mcp/filesystem
=======
>>>>>>> 38b70c7ba (.)
```

**Nota**: Richiede un server MCP HTTP in esecuzione. Per sviluppo locale, utilizzare server STDIO invece.

### 2. Fetch Server

Permette chiamate HTTP e API.

```bash
<<<<<<< HEAD
claude mcp add --transport http fetch-<nome progetto> http://localhost:8000/mcp/fetch
=======
>>>>>>> 38b70c7ba (.)
```

### 3. Memory Server

Memoria temporanea per contesto tra richieste.

```bash
<<<<<<< HEAD
claude mcp add --transport http memory-<nome progetto> http://localhost:8000/mcp/memory
=======
>>>>>>> 38b70c7ba (.)
```

### 4. MySQL Server

Interazione con database MySQL.

```bash
<<<<<<< HEAD
claude mcp add --transport http mysql-<nome progetto> http://localhost:8000/mcp/mysql
=======
>>>>>>> 38b70c7ba (.)
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
<<<<<<< HEAD
claude mcp add --transport http sequential-thinking-<nome progetto> http://localhost:8000/mcp/sequential-thinking
=======
>>>>>>> 38b70c7ba (.)
```

## Configurazione con Server STDIO (Raccomandato)

Per sviluppo locale, è preferibile utilizzare server STDIO invece di HTTP:

### Filesystem con STDIO

```bash
<<<<<<< HEAD
claude mcp add filesystem-<nome progetto> npx -y @modelcontextprotocol/server-filesystem /var/www/_bases/base_<nome progetto>_fila4_mono
=======
>>>>>>> 38b70c7ba (.)
```

### Memory con STDIO

```bash
<<<<<<< HEAD
claude mcp add memory-<nome progetto> npx -y @modelcontextprotocol/server-memory
=======
>>>>>>> 38b70c7ba (.)
```

### MySQL con STDIO

```bash
<<<<<<< HEAD
claude mcp add mysql-<nome progetto> npx -y @modelcontextprotocol/server-mysql
=======
>>>>>>> 38b70c7ba (.)
```

**Con variabili d'ambiente**:
```bash
export DB_HOST=localhost
export DB_PORT=3306
export DB_USERNAME=your_username
export DB_PASSWORD=your_password
export DB_DATABASE=your_database

<<<<<<< HEAD
claude mcp add mysql-<nome progetto> npx -y @modelcontextprotocol/server-mysql
=======
>>>>>>> 38b70c7ba (.)
```

## Gestione Server

### Lista Server Configurati

```bash
claude mcp list
```

### Rimozione Server

```bash
<<<<<<< HEAD
claude mcp remove filesystem-<nome progetto>
=======
>>>>>>> 38b70c7ba (.)
```

### Test Connessione

```bash
<<<<<<< HEAD
claude mcp test filesystem-<nome progetto>
=======
>>>>>>> 38b70c7ba (.)
```

## Configurazione Avanzata

### Server Personalizzati

Per server MCP personalizzati, creare uno script wrapper:

```bash
#!/bin/bash
<<<<<<< HEAD
# ~/bin/mcp-mysql-<nome progetto>.sh
=======
>>>>>>> 38b70c7ba (.)

export MYSQL_HOST="${DB_HOST:-localhost}"
export MYSQL_PORT="${DB_PORT:-3306}"
export MYSQL_USER="${DB_USERNAME}"
export MYSQL_PASSWORD="${DB_PASSWORD}"
export MYSQL_DATABASE="${DB_DATABASE}"

exec npx -y @modelcontextprotocol/server-mysql
```

Poi aggiungere il server:

```bash
<<<<<<< HEAD
chmod +x ~/bin/mcp-mysql-<nome progetto>.sh
claude mcp add mysql-<nome progetto> ~/bin/mcp-mysql-<nome progetto>.sh
=======
>>>>>>> 38b70c7ba (.)
```

## Troubleshooting

### Server non si connette

1. Verificare che il comando sia installato:
   ```bash
   npx -y @modelcontextprotocol/server-filesystem --version
   ```

2. Controllare permessi file:
   ```bash
<<<<<<< HEAD
   ls -la /var/www/_bases/base_<nome progetto>_fila4_mono
=======
>>>>>>> 38b70c7ba (.)
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
<<<<<<< HEAD
   grep DB_ /var/www/_bases/base_<nome progetto>_fila4_mono/laravel/.env
=======
>>>>>>> 38b70c7ba (.)
   ```

## Best Practices

<<<<<<< HEAD
1. **Utilizzare nomi descrittivi**: Prefissare i nomi server con il progetto (es. `filesystem-<nome progetto>`)
=======
>>>>>>> 38b70c7ba (.)
2. **Variabili d'ambiente**: Mai hardcodare credenziali nei comandi
3. **Test regolari**: Verificare periodicamente che i server funzionino
4. **Documentazione**: Mantenere questa documentazione aggiornata

## Riferimenti

- [Claude Code MCP Documentation](https://docs.anthropic.com/claude/docs/mcp)
- [Model Context Protocol Specification](https://modelcontextprotocol.io)
- [MCP Editors Configuration](../mcp-editors-configuration.md)

