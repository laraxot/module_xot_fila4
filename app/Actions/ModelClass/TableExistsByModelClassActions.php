<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\Schema;
use Webmozart\Assert\Assert;

class TableExistsByModelClassActions
{
    public function execute(string $modelClass): bool
    {
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> a12f125f4a (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! class_exists($modelClass)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return false;
        }

        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        // Controlla se il modello utilizza Sushi
        if (in_array('Sushi\Sushi', class_uses_recursive($modelClass), strict: true) || method_exists($model, 'sushiRows')) {
            return true; // I modelli Sushi sono considerati come se avessero sempre una tabella
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)

=======
         // Controlla se il modello utilizza Sushi
         if (in_array('Sushi\Sushi', class_uses_recursive($modelClass)) || method_exists($model, 'sushiRows')) {
            return true; // I modelli Sushi sono considerati come se avessero sempre una tabella
        }
        
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $tableName = $model->getTable();

        return Schema::connection($model->getConnectionName())->hasTable($tableName);
    }
}
