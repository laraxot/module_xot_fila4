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
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
# Migration Guidelines for Project Modules

## Overview
This document outlines the guidelines for creating and managing database migrations within the project. Following these rules ensures consistency, prevents errors, and maintains database integrity across different modules.

## Rules for Migrations
1. **Base Class for Migrations**: All migration files must extend `Modules\Xot\Database\Migrations\XotBaseMigration` instead of the default `Illuminate\Database\Migrations\Migration`. This base class includes project-specific configurations and behaviors.
   - **Why**: Centralizes migration logic, making it easier to maintain and update migration behaviors across the project.
2. **Table Existence Check**: Before creating a table, always check if it exists using `Schema::hasTable()` to prevent errors when the table is already present in the database.
   - **Why**: Avoids conflicts during migration execution, especially in environments where the database schema might already include the table.

## Example Migration
```php
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        if (!Schema::hasTable('example_table')) {
            Schema::create('example_table', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('example_table');
    }
};
```

## Related Documentation
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> c35986f4 (.)
- [User Module Database Errors](../../User/docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../docs/collegamenti-documentazione.md)
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
=======
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 5b07d268 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 6d1255a8 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 96276392 (.)
=======
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 3310e9c6 (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 099ab7a0 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5e58b29b (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 5bd842e3 (.)
=======
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 03ceeac3 (.)
=======
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 5a14301c (.)
=======
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 71f31700 (.)
=======
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> c35986f4 (.)
=======
>>>>>>> cc7fb225 (.)
