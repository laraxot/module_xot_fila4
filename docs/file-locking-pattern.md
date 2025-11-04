# File Locking Pattern - Prevenzione Conflitti Concorrenti

## Regola Fondamentale

**PRIMA di modificare qualsiasi file, SEMPRE:**

1. **Creare file lock**: `<filename>.lock`
2. **Verificare esistenza lock**: Se esiste → lavora su altro file
3. **Dopo modifiche**: Cancellare `<filename>.lock`

## Perché Questa Regola?

### Business Logic

**Problema**: Editing concorrente causa:
- ❌ Conflitti di merge
- ❌ Perdita di modifiche
- ❌ Overwrite accidentali
- ❌ Race conditions

**Soluzione**: Lock files come semaforo

**Benefici**:
- ✅ Coordinazione automatica tra agent
- ✅ Prevenzione conflitti
- ✅ Tracciabilità modifiche in corso
- ✅ Recovery da interruzioni

### Filosofia

> "Un file alla volta, un'operazione alla volta.  
> Il lock è rispetto per il lavoro altrui.  
> La pazienza previene il caos."

## Pattern di Implementazione

### Tool-Based (AI Agent)

```markdown
WORKFLOW AI AGENT:
1. Identifico file da modificare: `path/to/file.php`
2. Verifico lock: `path/to/file.php.lock` esiste?
   - SE SÌ → Skip, lavoro su altro file
   - SE NO → Procedo
3. Creo lock: write(`path/to/file.php.lock`, timestamp)
4. Eseguo modifiche: edit/write su `path/to/file.php`
5. Cancello lock: delete(`path/to/file.php.lock`)
```

### Bash Script

```bash
#!/bin/bash

FILE="$1"
LOCKFILE="${FILE}.lock"

# Check if locked
if [ -f "$LOCKFILE" ]; then
    echo "❌ File is locked: $FILE"
    echo "   Lock created: $(cat "$LOCKFILE")"
    exit 1
fi

# Create lock
echo "$(date '+%Y-%m-%d %H:%M:%S') - $$" > "$LOCKFILE"

# Trap per garantire rimozione lock anche su errore
trap "rm -f '$LOCKFILE'" EXIT INT TERM

# Do work
echo "🔒 Lock acquired for: $FILE"
# ... modifiche al file ...
echo "✅ Work completed"

# Lock removed by trap
```

### Python Script

```python
import os
import time
from contextlib import contextmanager

@contextmanager
def file_lock(filepath):
    """Context manager per lock su file."""
    lockfile = f"{filepath}.lock"
    
    # Check existing lock
    if os.path.exists(lockfile):
        with open(lockfile, 'r') as f:
            lock_info = f.read()
        raise FileExistsError(f"File locked: {lockfile}\n{lock_info}")
    
    # Create lock
    with open(lockfile, 'w') as f:
        f.write(f"{time.strftime('%Y-%m-%d %H:%M:%S')} - PID {os.getpid()}\n")
    
    try:
        yield filepath
    finally:
        # Always remove lock
        if os.path.exists(lockfile):
            os.remove(lockfile)

# Usage
with file_lock("path/to/file.php"):
    # Safe to modify file
    with open("path/to/file.php", 'w') as f:
        f.write(content)
```

## Esempio Completo AI Agent

### Workflow Corretto

```typescript
// STEP 1: Verifica lock
const filePath = "Modules/Sigma/app/Models/Traits/SchedaTrait.php";
const lockPath = `${filePath}.lock`;

const lockExists = await checkFileExists(lockPath);

if (lockExists) {
    console.log(`⏭️ File locked, skipping: ${filePath}`);
    // Lavora su altro file della queue
    return processNextFile();
}

// STEP 2: Crea lock
await writeFile(lockPath, {
    timestamp: new Date().toISOString(),
    agent: "AI Assistant",
    operation: "Refactoring accessor pattern"
});

try {
    // STEP 3: Esegui modifiche
    await editFile(filePath, oldContent, newContent);
    
    console.log(`✅ Completed: ${filePath}`);
    
} finally {
    // STEP 4: SEMPRE rimuovi lock (anche in caso di errore)
    await deleteFile(lockPath);
}
```

### Gestione Errori

```typescript
// Se agent crasha, lock rimane orfano
// Cleanup automatico lock vecchi:

async function cleanupStaleLocks(maxAgeMinutes = 30) {
    const locks = await findFiles("**/*.lock");
    
    for (const lock of locks) {
        const age = await getFileAge(lock);
        
        if (age > maxAgeMinutes * 60 * 1000) {
            console.log(`🧹 Removing stale lock: ${lock}`);
            await deleteFile(lock);
        }
    }
}
```

## Casi d'Uso

### Caso 1: Modifica Singola

```bash
# Agent vuole modificare SchedaTrait.php

# Check lock
[ -f "SchedaTrait.php.lock" ] && exit 1

# Create lock
touch "SchedaTrait.php.lock"

# Edit file
vim SchedaTrait.php

# Remove lock
rm "SchedaTrait.php.lock"
```

### Caso 2: Batch Refactoring

```bash
# Agent vuole refactorare 10 file

for file in "${files[@]}"; do
    lockfile="${file}.lock"
    
    # Skip if locked
    if [ -f "$lockfile" ]; then
        echo "Skipping locked: $file"
        continue
    fi
    
    # Lock
    touch "$lockfile"
    
    # Work
    refactor_file "$file"
    
    # Unlock
    rm "$lockfile"
done
```

### Caso 3: Sessioni Parallele

```
SESSION 1 (AI Agent A):
├── Vuole modificare File1.php
├── Crea File1.php.lock
└── Lavora su File1.php ✅

SESSION 2 (AI Agent B):
├── Vuole modificare File1.php
├── Vede File1.php.lock esistente
├── Skip File1.php
└── Lavora su File2.php ✅

Nessun conflitto! 🎉
```

## Best Practices

### ✅ DO

1. **SEMPRE verificare** lock prima di edit
2. **SEMPRE creare** lock prima di modifiche
3. **SEMPRE rimuovere** lock dopo (anche su errore)
4. **Includere metadata** nel lock file (timestamp, agent, operazione)
5. **Cleanup periodico** lock orfani (>30min)

### ❌ DON'T

1. **Mai modificare** senza lock
2. **Mai dimenticare** di rimuovere lock
3. **Mai ignorare** lock esistente
4. **Mai lock multipli** sullo stesso file
5. **Mai lock permanenti** (sempre temporary)

## Lock File Format

### Formato Standard

```
2025-01-29 15:30:45
Agent: AI Assistant (Session ID: abc123)
Operation: Refactoring accessor pattern
File: Modules/Sigma/app/Models/Traits/SchedaTrait.php
PID: 12345
```

### Parsing Lock Info

```bash
# Leggi info lock
if [ -f "$lockfile" ]; then
    echo "Lock info:"
    cat "$lockfile"
    
    # Estrai timestamp
    timestamp=$(head -n1 "$lockfile")
    echo "Locked since: $timestamp"
fi
```

## Integrazione CI/CD

### Pre-commit Hook

```bash
#!/bin/bash
# .git/hooks/pre-commit

# Verifica nessun lock file committato
locks=$(git diff --cached --name-only | grep '\.lock$')

if [ -n "$locks" ]; then
    echo "❌ ERROR: Lock files found in commit:"
    echo "$locks"
    echo ""
    echo "Lock files should never be committed!"
    exit 1
fi
```

### Gitignore

```gitignore
# File locks
*.lock

# Eccezione per documentazione lock pattern
!docs/**/file-locking-pattern.md
```

## Troubleshooting

### Lock Orfani

**Problema**: Agent crasha, lock rimane

**Soluzione**:
```bash
# Trova lock vecchi (>30 min)
find . -name "*.lock" -mmin +30

# Rimuovi automaticamente
find . -name "*.lock" -mmin +30 -delete

# Con conferma
find . -name "*.lock" -mmin +30 -exec rm -i {} \;
```

### Lock Concorrenti

**Problema**: Due agent tentano lock simultaneamente

**Soluzione**: Atomic file creation
```bash
# Bash: atomic create
if ( set -o noclobber; echo "$$" > "$lockfile" ) 2>/dev/null; then
    # Lock acquired
    trap "rm -f '$lockfile'" EXIT
    # ... work ...
else
    echo "Lock failed"
    exit 1
fi
```

## Collegamenti

### Documentazione Correlata
- [Concurrent Operations](./concurrent-operations.md)
- [AI Agent Coordination](./ai-agent-coordination.md)
- [File Safety Patterns](./file-safety.md)

### Best Practices
- [Development Workflow](../../Xot/docs/development-workflow.md)
- [Testing Strategy](../../Xot/docs/testing.md)

---

**Creato**: 2025-01-29  
**Tipo**: Regola Architettutale Critica  
**Applicazione**: Universale (tutti i file)  
**Severità**: 🔴 OBBLIGATORIA  
**Eccezioni**: Nessuna

