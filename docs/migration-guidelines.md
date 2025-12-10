<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
<<<<<<< HEAD
>>>>>>> 92cca5ade (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
=======
>>>>>>> b3cc10f7 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
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
=======
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
<<<<<<< HEAD
<<<<<<< HEAD
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [User Module Database Errors](../../User/project_docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../project_docs/collegamenti-documentazione.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> e769883c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1c4bb8cf (.)
>>>>>>> 6be8834c2 (.)
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
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
>>>>>>> 5ca118c34 (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
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
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
=======
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
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
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
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
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 34579462 (.)
>>>>>>> e769883c (.)
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 5bd842e3 (.)
<<<<<<< HEAD
>>>>>>> 88ee35c4e (.)
=======
=======
- [Database Guidelines](../DATABASE_GUIDELINES.md)
>>>>>>> 03ceeac3 (.)
>>>>>>> 92cca5ade (.)
