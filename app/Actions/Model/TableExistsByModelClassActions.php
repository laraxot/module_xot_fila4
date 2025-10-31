<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\Schema;
use Webmozart\Assert\Assert;

class TableExistsByModelClassActions
{
    public function execute(string $modelClass): bool
    {
<<<<<<< HEAD
        if (! class_exists($modelClass)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! class_exists($modelClass)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> f1d4085 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            return false;
        }

        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        // Controlla se il modello utilizza Sushi
        if (in_array('Sushi\Sushi', class_uses_recursive($modelClass), strict: true) || method_exists($model, 'sushiRows')) {
            return true; // I modelli Sushi sono considerati come se avessero sempre una tabella
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
         // Controlla se il modello utilizza Sushi
         if (in_array('Sushi\Sushi', class_uses_recursive($modelClass)) || method_exists($model, 'sushiRows')) {
            return true; // I modelli Sushi sono considerati come se avessero sempre una tabella
        }
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
        $tableName = $model->getTable();

        return Schema::connection($model->getConnectionName())->hasTable($tableName);
    }
}
