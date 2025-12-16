# Troubleshooting Guide

## Common Issues

### PHPStan Errors
- **Issue**: Method not found errors
- **Solution**: Check namespace imports and method signatures
<<<<<<< HEAD
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- **Prevention**: Always run PHPStan level 10+ before commits
=======
>>>>>>> 6ca989d8 (.)
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
<<<<<<< HEAD
>>>>>>> 38b70c7ba (.)
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
- **Prevention**: Always run PHPStan level 9+ before commits
<<<<<<< HEAD
- **Prevention**: Always run PHPStan level 9+ before commits
=======
=======
>>>>>>> 71f31700 (.)
=======
- **Prevention**: Always run PHPStan level 9+ before commits
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
- **Prevention**: Always run PHPStan level 9+ before commits
>>>>>>> 33af3e61 (.)
<<<<<<< HEAD
>>>>>>> 67be6ac0 (.)
=======
=======
- **Prevention**: Always run PHPStan level 9+ before commits
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- **Prevention**: Always run PHPStan level 9+ before commits
>>>>>>> 03ceeac3 (.)
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
=======
- **Prevention**: Always run PHPStan level 9+ before commits
>>>>>>> 6e7c1905 (.)
<<<<<<< HEAD
>>>>>>> 6a52563d6 (.)
=======
=======
- **Prevention**: Always run PHPStan level 9+ before commits
>>>>>>> 334816e8 (.)
>>>>>>> 317b552da (.)
=======
- **Prevention**: Always run PHPStan level 10+ before commits
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

### Translation Problems
- **Issue**: Missing translations or hardcoded strings
- **Solution**: Use expanded translation structure
- **Prevention**: Never use `->label()` in Filament components

### Migration Failures
- **Issue**: Table/column already exists
- **Solution**: Always check existence before creation
- **Prevention**: Use `hasTable()` and `hasColumn()` methods

### Namespace Issues
- **Issue**: Class not found errors
- **Solution**: Remove 'App' segment from module namespaces
- **Prevention**: Follow Laraxot namespace conventions

## Debugging Steps

1. **Check PHPStan**: `./vendor/bin/phpstan analyze --level=9`
2. **Verify Translations**: Ensure all keys exist in all language files
3. **Test Migrations**: Run in development environment first
4. **Validate Namespaces**: Follow Modules\ModuleName\* pattern

## Getting Help

- Check module-specific documentation
- Review Laraxot framework guidelines
- Consult best practices documentation
- Use project memory system for context
