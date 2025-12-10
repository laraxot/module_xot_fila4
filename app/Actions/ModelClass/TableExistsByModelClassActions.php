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
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
<<<<<<< HEAD
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (! class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
        if (!class_exists($modelClass)) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            return false;
        }

        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);

<<<<<<< HEAD
        // Controlla se il modello utilizza Sushi
        if (in_array('Sushi\Sushi', class_uses_recursive($modelClass), strict: true) || method_exists($model, 'sushiRows')) {
            return true; // I modelli Sushi sono considerati come se avessero sempre una tabella
        }
=======
>>>>>>> f1d4085 (.)

         // Controlla se il modello utilizza Sushi
         if (in_array('Sushi\Sushi', class_uses_recursive($modelClass)) || method_exists($model, 'sushiRows')) {
            return true; // I modelli Sushi sono considerati come se avessero sempre una tabella
        }
        
        $tableName = $model->getTable();

        return Schema::connection($model->getConnectionName())->hasTable($tableName);
    }
}
