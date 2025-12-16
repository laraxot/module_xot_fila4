# Module and Theme GitHub Workflows - Standard Setup

**Ultimo aggiornamento**: 2025-01-10  
**Obiettivo**: Ogni modulo e tema deve avere la propria cartella `.github/workflows/` con workflow standardizzati

---

## 📋 Struttura Standard

Ogni modulo/tema deve avere:

```
Modules/{ModuleName}/.github/workflows/
├── quality.yml      # Quality checks (PHPStan, PHPMD, Pint, PHPInsights)
└── tests.yml        # Test specifici del modulo (se esistono)

Themes/{ThemeName}/.github/workflows/
├── quality.yml      # Quality checks (PHPStan, PHPMD, Pint, PHPInsights)
└── build.yml        # Build assets (se necessario)
```

---

## 🔧 Workflow Standard: quality.yml

Workflow per quality checks specifici del modulo/tema:

```yaml
name: {ModuleName} Quality Checks

on:
  push:
    branches:
      - develop
      - main
    paths:
      - 'laravel/Modules/{ModuleName}/**'
      - 'laravel/Themes/{ThemeName}/**'
  pull_request:
    branches:
      - develop
      - main
    paths:
      - 'laravel/Modules/{ModuleName}/**'
      - 'laravel/Themes/{ThemeName}/**'

jobs:
  quality:
    runs-on: ubuntu-latest
    environment: Testing
    
    steps:
      - uses: actions/checkout@v5

      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.4'

      - name: Add Flux Credentials Loaded From ENV
        run: composer config http-basic.composer.fluxui.dev "${{ secrets.FLUX_USERNAME }}" "${{ secrets.FLUX_LICENSE_KEY }}"

      - name: Install Dependencies
        run: |
          cd laravel
          composer install -q --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

      - name: Run PHPStan
        working-directory: laravel
        run: |
          ./vendor/bin/phpstan analyse Modules/{ModuleName} --level=10 --memory-limit=-1 || true

      - name: Run PHPMD
        working-directory: laravel
        run: |
          if [ -f phpmd.phar ]; then
            php phpmd.phar Modules/{ModuleName} text cleancode,codesize,design,naming,unusedcode || true
          else
            echo "PHPMD not found, skipping..."
          fi

      - name: Run Pint
        working-directory: laravel
        run: |
          ./vendor/bin/pint Modules/{ModuleName} || true

      - name: Run PHPInsights
        working-directory: laravel
        run: |
          if [ -f vendor/bin/phpinsights ]; then
            ./vendor/bin/phpinsights analyse Modules/{ModuleName} --format=table --no-interaction || true
          else
            echo "PHPInsights not found, skipping..."
          fi
```

---

## 🧪 Workflow Standard: tests.yml

Workflow per test specifici del modulo (solo se esistono test):

```yaml
name: {ModuleName} Tests

on:
  push:
    branches:
      - develop
      - main
    paths:
      - 'laravel/Modules/{ModuleName}/**'
  pull_request:
    branches:
      - develop
      - main
    paths:
      - 'laravel/Modules/{ModuleName}/**'

jobs:
  test:
    runs-on: ubuntu-latest
    environment: Testing

    steps:
      - uses: actions/checkout@v4

      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: 8.4
          tools: composer:v2
          coverage: xdebug

      - name: Add Flux Credentials Loaded From ENV
        run: composer config http-basic.composer.fluxui.dev "${{ secrets.FLUX_USERNAME }}" "${{ secrets.FLUX_LICENSE_KEY }}"

      - name: Install Dependencies
        run: |
          cd laravel
          composer install --no-interaction --prefer-dist --optimize-autoloader

      - name: Copy Environment File
        working-directory: laravel
        run: cp .env.example .env

      - name: Generate Application Key
        working-directory: laravel
        run: php artisan key:generate

      - name: Run Tests
        working-directory: laravel
        run: |
          if [ -d "Modules/{ModuleName}/tests" ]; then
            ./vendor/bin/pest Modules/{ModuleName}/tests
          else
            echo "No tests found for {ModuleName}, skipping..."
          fi
```

---

## 🎨 Workflow Standard per Temi: build.yml

Workflow per build assets del tema (se necessario):

```yaml
name: {ThemeName} Build

on:
  push:
    branches:
      - develop
      - main
    paths:
      - 'laravel/Themes/{ThemeName}/**'
  pull_request:
    branches:
      - develop
      - main
    paths:
      - 'laravel/Themes/{ThemeName}/**'

jobs:
  build:
    runs-on: ubuntu-latest

    steps:
      - uses: actions/checkout@v4

      - name: Setup Node
        uses: actions/setup-node@v4
        with:
          node-version: '22'
          cache: 'npm'

      - name: Install Node Dependencies
        working-directory: laravel/Themes/{ThemeName}
        run: npm install

      - name: Build Assets
        working-directory: laravel/Themes/{ThemeName}
        run: npm run build
```

---

## 📝 Note per Moduli Esistenti

Alcuni moduli hanno già workflow specifici:
- **Cms, Geo, Tenant**: Hanno `retype-action.yml` per documentazione
- **Job**: Ha `tag-version.yml` per semantic versioning

Questi workflow possono coesistere con i workflow standard.

---

## 🔗 Collegamenti

- [CI/CD Pipeline Complete Setup](./ci-cd-pipeline-complete-setup.md)
- [CI Quality Pipeline](./ci-quality-pipeline.md)
- [Quality Tools Standalone Installation](./quality-tools-standalone-installation.md)

---

**Ultimo aggiornamento**: 2025-01-10  
**Status**: 📋 Template standardizzati creati

