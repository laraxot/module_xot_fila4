<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
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
- [User Module Database Errors](../../User/docs/DATABASE_ERRORS.md)
- [Xot Base Classes](../XOT_BASE_CLASSES.md)
- [Code Quality](../CODE_QUALITY.md)
- [Root Documentation](../../../../docs/collegamenti-documentazione.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Database Guidelines](../DATABASE_GUIDELINES.md)
<<<<<<< HEAD
=======
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
>>>>>>> cc7fb225 (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
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
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
