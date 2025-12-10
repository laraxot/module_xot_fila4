#!/bin/bash

# 🐄 SUPER MUCCA SCRIPT - Risolve conflitti di merge prendendo sempre "incoming change"
# Autore: Super Mucca AI Assistant
# Data: 2025-09-18
# Scopo: Risolvere automaticamente tutti i conflitti di merge prendendo la parte "develop" (incoming)

set -euo pipefail

# Colori per output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Banner Super Mucca
echo -e "${BLUE}"
echo "🐄 ==============================================="
echo "🐄  SUPER MUCCA MERGE CONFLICT RESOLVER"
echo "🐄  Risolve conflitti prendendo incoming change"
echo "🐄 ==============================================="
echo -e "${NC}"

# Directory di lavoro
WORK_DIR="/var/www/_bases/base_techplanner_fila3_mono/laravel"
cd "$WORK_DIR"

echo -e "${YELLOW}📁 Directory di lavoro: $WORK_DIR${NC}"

# Funzione per trovare file con conflitti
find_conflict_files() {
    echo -e "${BLUE}🔍 Ricerca file con conflitti di merge...${NC}"
    
    # Cerca file con marker di conflitto
    local conflict_files
    conflict_files=$(grep -r -l "<<<<<<< HEAD" . --include="*.php" --include="*.blade.php" --include="*.js" --include="*.css" --include="*.md" --include="*.json" --include="*.yml" --include="*.yaml" 2>/dev/null || true)
    
    if [ -z "$conflict_files" ]; then
        echo -e "${GREEN}✅ Nessun file con conflitti trovato!${NC}"
        return 1
    fi
    
    echo -e "${YELLOW}📋 File con conflitti trovati:${NC}"
    echo "$conflict_files" | while read -r file; do
        echo -e "   ${RED}⚠️  $file${NC}"
    done
    
    echo "$conflict_files"
    return 0
}

# Funzione per risolvere conflitti in un singolo file
resolve_file_conflicts() {
    local file="$1"
    local temp_file="${file}.tmp"
    local backup_file="${file}.backup"
    
    echo -e "${BLUE}🔧 Risolvo conflitti in: $file${NC}"
    
    # Crea backup
    cp "$file" "$backup_file"
    
    # Usa awk per processare il file e prendere solo la parte "incoming"
    awk '
    BEGIN { 
        in_conflict = 0
        skip_current = 0
    }
    
    /^<<<<<<< HEAD/ { 
        in_conflict = 1
        skip_current = 1
        next
    }
    
    /^=======/ { 
        if (in_conflict) {
            skip_current = 0
        }
        next
    }
    
    /^>>>>>>> / { 
        in_conflict = 0
        skip_current = 0
        next
    }
    
    {
        if (!skip_current) {
            print $0
        }
    }
    ' "$file" > "$temp_file"
    
    # Sostituisci il file originale
    mv "$temp_file" "$file"
    
    echo -e "${GREEN}   ✅ Conflitti risolti in $file${NC}"
    echo -e "${BLUE}   📄 Backup salvato in $backup_file${NC}"
}

# Funzione per verificare la risoluzione
verify_resolution() {
    local file="$1"
    
    if grep -q "<<<<<<< HEAD\|=======\|>>>>>>> " "$file"; then
        echo -e "${RED}   ❌ ERRORE: Conflitti ancora presenti in $file${NC}"
        return 1
    else
        echo -e "${GREEN}   ✅ Conflitti completamente risolti in $file${NC}"
        return 0
    fi
}

# Funzione per pulire i backup
cleanup_backups() {
    echo -e "${YELLOW}🧹 Vuoi rimuovere i file di backup? (y/N)${NC}"
    read -r response
    
    if [[ "$response" =~ ^[Yy]$ ]]; then
        find . -name "*.backup" -type f -delete
        echo -e "${GREEN}✅ File di backup rimossi${NC}"
    else
        echo -e "${BLUE}📄 File di backup mantenuti per sicurezza${NC}"
    fi
}

# Funzione principale
main() {
    echo -e "${BLUE}🚀 Avvio risoluzione conflitti...${NC}"
    
    # Trova file con conflitti
    local conflict_files
    if ! conflict_files=$(find_conflict_files); then
        echo -e "${GREEN}🎉 Nessun conflitto da risolvere!${NC}"
        exit 0
    fi
    
    # Conta i file
    local file_count
    file_count=$(echo "$conflict_files" | wc -l)
    echo -e "${YELLOW}📊 Trovati $file_count file con conflitti${NC}"
    
    # Chiedi conferma
    echo -e "${YELLOW}⚠️  ATTENZIONE: Questo script prenderà sempre la 'incoming change' (develop)${NC}"
    echo -e "${YELLOW}⚠️  Tutti i conflitti saranno risolti automaticamente${NC}"
    echo -e "${YELLOW}🤔 Vuoi continuare? (y/N)${NC}"
    read -r response
    
    if [[ ! "$response" =~ ^[Yy]$ ]]; then
        echo -e "${BLUE}❌ Operazione annullata dall'utente${NC}"
        exit 0
    fi
    
    # Risolvi conflitti per ogni file
    local resolved_count=0
    local failed_count=0
    
    echo "$conflict_files" | while read -r file; do
        if [ -f "$file" ]; then
            resolve_file_conflicts "$file"
            
            if verify_resolution "$file"; then
                ((resolved_count++))
            else
                ((failed_count++))
            fi
        fi
    done
    
    # Verifica finale
    echo -e "${BLUE}🔍 Verifica finale...${NC}"
    if ! find_conflict_files >/dev/null 2>&1; then
        echo -e "${GREEN}🎉 SUCCESSO! Tutti i conflitti sono stati risolti!${NC}"
        echo -e "${GREEN}📊 File processati: $file_count${NC}"
        
        # Opzione per pulire i backup
        cleanup_backups
        
        echo -e "${BLUE}💡 Suggerimenti:${NC}"
        echo -e "${BLUE}   1. Verifica i cambiamenti con: git diff${NC}"
        echo -e "${BLUE}   2. Testa l'applicazione per assicurarti che tutto funzioni${NC}"
        echo -e "${BLUE}   3. Committa i cambiamenti: git add . && git commit -m 'Risolti conflitti merge'${NC}"
        
    else
        echo -e "${RED}❌ ERRORE: Alcuni conflitti potrebbero non essere stati risolti${NC}"
        echo -e "${RED}🔍 Esegui nuovamente lo script o risolvi manualmente${NC}"
        exit 1
    fi
}

# Funzione di aiuto
show_help() {
    echo -e "${BLUE}🐄 SUPER MUCCA MERGE CONFLICT RESOLVER${NC}"
    echo ""
    echo -e "${YELLOW}UTILIZZO:${NC}"
    echo "  $0 [opzioni]"
    echo ""
    echo -e "${YELLOW}OPZIONI:${NC}"
    echo "  -h, --help     Mostra questo aiuto"
    echo "  --dry-run      Mostra solo i file con conflitti senza risolverli"
    echo "  --auto         Risolve automaticamente senza chiedere conferma"
    echo ""
    echo -e "${YELLOW}DESCRIZIONE:${NC}"
    echo "  Questo script trova tutti i file con conflitti di merge Git"
    echo "  (marker <<<<<<< HEAD, =======, >>>>>>> develop) e li risolve"
    echo "  automaticamente prendendo sempre la 'incoming change' (develop)."
    echo ""
    echo -e "${YELLOW}ESEMPI:${NC}"
    echo "  $0                    # Modalità interattiva"
    echo "  $0 --dry-run          # Solo mostra i conflitti"
    echo "  $0 --auto             # Risolve automaticamente"
}

# Gestione parametri
case "${1:-}" in
    -h|--help)
        show_help
        exit 0
        ;;
    --dry-run)
        echo -e "${BLUE}🔍 MODALITÀ DRY-RUN: Solo ricerca conflitti${NC}"
        find_conflict_files
        exit 0
        ;;
    --auto)
        echo -e "${YELLOW}🤖 MODALITÀ AUTOMATICA: Risoluzione senza conferma${NC}"
        # Modifica la funzione main per saltare la conferma
        sed -i 's/read -r response/response="y"/' "$0"
        main
        exit 0
        ;;
    "")
        main
        ;;
    *)
        echo -e "${RED}❌ Opzione non riconosciuta: $1${NC}"
        echo -e "${BLUE}💡 Usa --help per vedere le opzioni disponibili${NC}"
        exit 1
        ;;
esac
