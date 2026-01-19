# Testing Documentation

## Overview

This document provides testing guidelines and examples for the Xot module in Laraxot.

## Test Structure

### Directory Structure

```
Modules/Xot/tests/
├── Feature/
│   ├── (feature tests)
├── Unit/
│   └── (unit tests)
├── TestCase.php
└── Pest.php
```

### Test Files

- **TestCase.php** - Base test case with database configuration
- **Pest.php** - Pest configuration and extensions
- **Feature/** - Feature tests for Xot functionality
- **Unit/** - Unit tests for Xot components

## Testing Configuration

### TestCase Configuration

The Xot TestCase extends the base testing configuration and provides:
- Database connection setup
- Module-specific configuration
- Test environment setup

### Database Configuration

Xot module uses the following database connections:
- `xot` - Main Xot module connection
- `mysql` - Default connection
- All connections configured to use test database

## Testing Best Practices

### 1. Database Transactions

Use database transactions for test isolation:

```php
use Illuminate\Foundation\Testing\DatabaseTransactions;
```

### 2. Test Isolation

Each test should be independent:

```php
protected function tearDown(): void
{
    parent::tearDown();
    // Clean up test data
}
```

### 3. Module Configuration

Configure Xot-specific settings:

```php
protected function setUp(): void
{
    parent::setUp();
    
    // Configure Xot module
    config(['xra.pub_theme' => 'Zero']);
    config(['xra.main_module' => 'Xot']);
}
```

## Test Examples

### Basic Xot Test

```php
test('xot data can be created', function () {
    $xotData = \Modules\Xot\Datas\XotData::make();
    
    expect($xotData)->toBeInstanceOf(\Modules\Xot\Datas\XotData::class);
});
```

### Configuration Test

```php
test('xot configuration is loaded', function () {
    $xotData = \Modules\Xot\Datas\XotData::make();
    
    expect($xotData->get('pub_theme'))->toBe('Zero');
    expect($xotData->get('main_module'))->toBe('Xot');
});
```

### Service Provider Test

```php
test('xot service provider is registered', function () {
    $app = app();
    
    expect($app->bound(\Modules\Xot\Providers\XotServiceProvider::class))->toBeTrue();
});
```

## Testing Commands

### Running Tests

```bash
# Run all Xot module tests
./vendor/bin/pest Modules/Xot/tests

# Run tests with coverage
./vendor/bin/pest Modules/Xot/tests --coverage

# Run tests with verbose output
./vendor/bin/pest Modules/Xot/tests --verbose
```

### Quality Checks

```bash
# Run PHPStan on Xot module
./vendor/bin/phpstan analyze Modules/Xot

# Run PHPMD on Xot module
./vendor/bin/phpmd Modules/Xot/src

# Run PHPInsights on Xot module
./vendor/bin/phpinsights analyse Modules/Xot
```

## Testing Issues and Solutions

### 1. Configuration Issues

**Problem**: Xot configuration not loaded

**Solution**: Ensure proper configuration in TestCase:

```php
protected function setUp(): void
{
    parent::setUp();
    
    \Modules\Xot\Datas\XotData::make()->update([
        'pub_theme' => 'Zero',
        'main_module' => 'Xot',
    ]);
}
```

### 2. Database Issues

**Problem**: Database connection issues

**Solution**: Configure database connections properly:

```php
protected function createApplication()
{
    $app = parent::createApplication();
    
    $app['config']->set([
        'database.connections.xot.database' => 'quaeris_data_test',
    ]);
    
    return $app;
}
```

## Testing Goals

### Coverage Requirements

- Aim for 100% code coverage
- Test all public methods
- Test all edge cases
- Test all error scenarios

### Performance Requirements

- Tests should run in <200ms each
- Use database transactions for isolation
- Optimize database queries
- Minimize test data

### Quality Requirements

- All tests must pass PHPStan level 9+
- All tests must follow DRY, KISS, SOLID principles
- All tests must be maintainable
- All tests must be robust

## Testing Workflow

### 1. Setup Phase

1. Configure testing environment
2. Set up database connections
3. Install testing dependencies
4. Verify configuration

### 2. Development Phase

1. Write tests for new features
2. Update existing tests
3. Add regression tests
4. Maintain test coverage

### 3. Quality Assurance

1. Run tests
2. Run quality checks
3. Fix any issues
4. Update documentation

### 4. Deployment Phase

1. Ensure all tests pass
2. Verify coverage requirements
3. Update documentation
4. Commit changes

## Testing Documentation

### Module Documentation

- Update this file when adding new tests
- Document any special testing requirements
- Add examples for new test types
- Keep documentation current

### Root Documentation

- Update root documentation when module testing changes
- Add backlinks to this file
- Keep documentation consistent
- Update troubleshooting guides

## Testing Resources

### External Resources

- [Laravel 12.x Testing Documentation](https://laravel.com/docs/12.x/testing)
- [Pest Installation Guide](https://pestphp.com/docs/installation)
- [PHPStan Documentation](https://phpstan.org/user-guide/getting-started)

### Internal Resources

- [Testing Setup Guide](../../docs/testing-setup.md)
- [Testing Best Practices](../../docs/testing-best-practices.md)
- [Troubleshooting Guide](../../docs/troubleshooting.md)

## Testing Examples

### Data Object Tests

```php
test('xot data can be updated', function () {
    $xotData = \Modules\Xot\Datas\XotData::make();
    
    $xotData->update([
        'pub_theme' => 'CustomTheme',
        'main_module' => 'CustomModule',
    ]);
    
    expect($xotData->get('pub_theme'))->toBe('CustomTheme');
    expect($xotData->get('main_module'))->toBe('CustomModule');
});
```

### Service Provider Tests

```php
test('xot service provider registers services', function () {
    $app = app();
    
    // Test that services are registered
    expect($app->bound('xot.service'))->toBeTrue();
});
```

### Configuration Tests

```php
test('xot configuration is valid', function () {
    $xotData = \Modules\Xot\Datas\XotData::make();
    
    expect($xotData->all())->toBeArray();
    expect($xotData->get('pub_theme'))->toBeString();
    expect($xotData->get('main_module'))->toBeString();
});
```

## Testing Checklist

### Before Writing Tests

- [ ] Understand the feature to test
- [ ] Review existing tests
- [ ] Plan test scenarios
- [ ] Prepare test data

### While Writing Tests

- [ ] Use descriptive test names
- [ ] Use proper assertions
- [ ] Clean up test data
- [ ] Document tests

### After Writing Tests

- [ ] Run tests
- [ ] Check coverage
- [ ] Run quality checks
- [ ] Update documentation

### Before Committing

- [ ] All tests pass
- [ ] Coverage requirements met
- [ ] Quality checks pass
- [ ] Documentation updated

## Testing Conclusion

Following these guidelines will ensure your Xot module tests are:
- Fast and reliable
- Maintainable and scalable
- Comprehensive and thorough
- Consistent and robust

Remember: Good tests are the foundation of reliable software development.

---

*Last updated: January 2025*