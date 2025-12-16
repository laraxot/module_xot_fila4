#!/bin/bash
# organize-docs.sh
# Creates standard docs structure

MODULE_PATH=$1

if [ -z "$MODULE_PATH" ]; then
    echo "Usage: $0 <path-to-module-root>"
    exit 1
fi

DOCS_DIR="$MODULE_PATH/docs"

# Create standard folders
mkdir -p "$DOCS_DIR"/{01-getting-started,02-architecture,03-development,04-features,05-api,06-integration,07-troubleshooting,_archive}

# Create 00-INDEX.md if missing
if [ ! -f "$DOCS_DIR/00-INDEX.md" ]; then
    echo "# Documentation Index" > "$DOCS_DIR/00-INDEX.md"
fi

# Create README.md if missing
if [ ! -f "$DOCS_DIR/README.md" ]; then
    echo "# Documentation" > "$DOCS_DIR/README.md"
fi
