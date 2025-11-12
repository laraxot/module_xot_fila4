#!/bin/bash

# Script per risolvere automaticamente i conflitti Git prendendo la "incoming change"
# Creato per risolvere conflitti <<<<<<< HEAD ======= >>>>>>> develop

echo "🔧 RISOLUZIONE AUTOMATICA CONFLITTI GIT - SUPER MUCCA MODE"
echo "=========================================================="

# Trova tutti i file con conflitti Git
echo "📁 Cercando file con conflitti Git..."
conflict_files=$(find . -type f \( -name "*.php" -o -name "*.md" -o -name "*.js" -o -name "*.ts" -o -name "*.vue" -o -name "*.blade.php" \) | xargs grep -l "<<<<<<< HEAD" 2>/dev/null)

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
    echo "🔧 Processando: $file"
    total_files=$((total_files + 1))
    
    # Backup del file originale
    cp "$file" "$file.backup"
    
    # Usa sed per rimuovere tutto tra <<<<<<< HEAD e ======= (inclusi i marker)
    # e tutto tra ======= e >>>>>>> develop (inclusi i marker)
    # Mantiene solo il contenuto dopo >>>>>>> develop (incoming change)
    sed -i '/<<<<<<< HEAD/,/=======/d; /=======/,/>>>>>>> develop/d' "$file"
    
    # Verifica se il file è stato modificato correttamente
    if grep -q "<<<<<<< HEAD\|=======\|>>>>>>> develop" "$file"; then
        echo "❌ ERRORE: Conflitti rimasti in $file"
        failed_files=$((failed_files + 1))
        # Ripristina il backup
        mv "$file.backup" "$file"
    else
        echo "✅ RISOLTO: $file"
        resolved_files=$((resolved_files + 1))
        # Rimuovi il backup
        rm "$file.backup"
    fi
    echo ""
done

echo "📊 STATISTICHE FINALI:"
echo "======================="
echo "📁 File totali processati: $total_files"
echo "✅ File risolti con successo: $resolved_files"
echo "❌ File falliti: $failed_files"

if [ $failed_files -eq 0 ]; then
    echo ""
    echo "🎉 TUTTI I CONFLITTI RISOLTI CON SUCCESSO!"
    echo "💪 SUPER MUCCA MODE COMPLETATO!"
else
    echo ""
    echo "⚠️  Alcuni file hanno ancora conflitti. Controlla manualmente."
fi

echo ""
echo "🔍 Verifica finale - cercando conflitti rimanenti..."
remaining_conflicts=$(find . -type f \( -name "*.php" -o -name "*.md" -o -name "*.js" -o -name "*.ts" -o -name "*.vue" -o -name "*.blade.php" \) | xargs grep -l "<<<<<<< HEAD" 2>/dev/null)

if [ -z "$remaining_conflicts" ]; then
    echo "✅ NESSUN CONFLITTO RIMANENTE!"
else
    echo "🚨 Conflitti rimanenti:"
    echo "$remaining_conflicts"
fi