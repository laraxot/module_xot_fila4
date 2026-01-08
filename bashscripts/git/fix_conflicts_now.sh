#!/bin/bash

# 🐄 SUPER MUCCA - Fix conflitti IMMEDIATO
# Uso: ./fix_conflicts_now.sh

set -euo pipefail

echo "🐄 SUPER MUCCA: Risolvo tutti i conflitti prendendo 'incoming change'..."

cd /var/www/_bases/base_techplanner_fila3_mono/laravel

# Trova e risolve tutti i conflitti in una sola passata
find . -type f \( -name "*.php" -o -name "*.blade.php" -o -name "*.js" -o -name "*.css" -o -name "*.md" -o -name "*.json" \) -exec grep -l "<<<<<<< HEAD" {} \; 2>/dev/null | while read -r file; do
    echo "🔧 Fixing: $file"
    
    # Crea backup
    cp "$file" "${file}.backup"
    
    # Rimuove tutto tra <<<<<<< HEAD e ======= (mantiene solo la parte dopo =======)
    awk '
    BEGIN { skip = 0 }
    /^<<<<<<< HEAD/ { skip = 1; next }
    /^=======/ { skip = 0; next }
    /^>>>>>>> / { next }
    !skip { print }
    ' "$file" > "${file}.tmp" && mv "${file}.tmp" "$file"
    
    echo "✅ Fixed: $file (backup: ${file}.backup)"
done

echo "🎉 FATTO! Tutti i conflitti risolti prendendo 'incoming change'"
echo "💡 Verifica con: git diff"
echo "💡 Committa con: git add . && git commit -m 'Risolti conflitti merge'"
