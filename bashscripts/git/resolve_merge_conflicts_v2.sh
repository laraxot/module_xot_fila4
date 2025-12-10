#!/bin/bash

# Script per risolvere automaticamente i conflitti Git prendendo la "incoming change"
# Creato per risolvere conflitti <<<<<<< HEAD ======= >>>>>>> develop

echo "🔧 RISOLUZIONE AUTOMATICA CONFLITTI GIT - SUPER MUCCA MODE"
echo "=========================================================="

# Trova tutti i file con conflitti Git
echo "📁 Cercando file con conflitti Git..."
conflict_files=$(find . -type f -name "*.php" -o -name "*.md" -o -name "*.js" -o -name "*.ts" -o -name "*.vue" -o -name "*.blade.php" | xargs grep -l "<<<<<<< HEAD" 2>/dev/null)

if [ -z "$conflict_files" ]; then
    echo "✅ Nessun file con conflitti trovato!"
    exit 0
fi

echo "🚨 Trovati $(echo "$conflict_files" | wc -l) file con conflitti:"
echo "$conflict_files"
echo ""

# Contatore per statistiche
total_files=0
resolved_files=0
failed_files=0

# Processa ogni file con conflitti
for file in $conflict_files; do
    total_files=$((total_files + 1))
    echo "🔧 Processando: $file"
    
    # Crea backup del file originale
    cp "$file" "$file.backup"
    
    # Usa awk per risolvere i conflitti prendendo la "incoming change"
    # La logica: 
    # - Se trova "<<<<<<< HEAD", inizia a saltare le righe
    # - Se trova "=======", continua a saltare fino a ">>>>>>> develop"
    # - Prende tutto il resto (incoming change)
    awk '
    /^<<<<<<< HEAD/ { skip = 1; next }
    /^=======/ { skip = 1; next }
    /^>>>>>>> develop/ { skip = 0; next }
    skip == 0 { print }
    ' "$file" > "$file.tmp"
    
    # Verifica che il file temporaneo non sia vuoto
    if [ -s "$file.tmp" ]; then
        mv "$file.tmp" "$file"
        echo "✅ Risolto: $file"
        resolved_files=$((resolved_files + 1))
    else
        echo "❌ Errore: $file (file vuoto dopo risoluzione)"
        mv "$file.backup" "$file"
        rm -f "$file.tmp"
        failed_files=$((failed_files + 1))
    fi
done

echo ""
echo "📊 STATISTICHE FINALI:"
echo "======================"
echo "📁 File totali processati: $total_files"
echo "✅ File risolti con successo: $resolved_files"
echo "❌ File falliti: $failed_files"

if [ $failed_files -eq 0 ]; then
    echo ""
    echo "🎉 TUTTI I CONFLITTI RISOLTI CON SUCCESSO!"
    echo "💪 Poteri della super mucca attivati!"
else
    echo ""
    echo "⚠️  Alcuni file hanno avuto problemi. Controlla i backup (.backup)"
fi

echo ""
echo "🔍 Verifica finale - cercando conflitti rimanenti..."
remaining_conflicts=$(find . -type f -name "*.php" -o -name "*.md" -o -name "*.js" -o -name "*.ts" -o -name "*.vue" -o -name "*.blade.php" | xargs grep -l "<<<<<<< HEAD" 2>/dev/null)

if [ -z "$remaining_conflicts" ]; then
    echo "✅ Nessun conflitto rimanente trovato!"
else
    echo "🚨 Conflitti rimanenti:"
    echo "$remaining_conflicts"
fi

echo ""
echo "📝 Note:"
echo "- Backup dei file originali salvati come .backup"
echo "- Per ripristinare un file: mv file.backup file"
echo "- Per rimuovere tutti i backup: find . -name '*.backup' -delete"
