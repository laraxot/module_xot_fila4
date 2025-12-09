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
        if (! class_exists($modelClass)) {
=======
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!class_exists($modelClass)) {
=======
        if (!class_exists($modelClass)) {
>>>>>>> 399f46d3 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 17684f52 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 399f46d3 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> ca9324a4 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!class_exists($modelClass)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> ca9324a4 (.)
=======
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!class_exists($modelClass)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 9db27d12 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!class_exists($modelClass)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> ca9324a4 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 5a14301c (.)
=======
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!class_exists($modelClass)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!class_exists($modelClass)) {
>>>>>>> ca9324a4 (.)
=======
        if (!class_exists($modelClass)) {
=======
        if (! class_exists($modelClass)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!class_exists($modelClass)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
            return false;
        }

        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        // Controlla se il modello utilizza Sushi
        if (in_array('Sushi\Sushi', class_uses_recursive($modelClass), strict: true) || method_exists($model, 'sushiRows')) {
            return true; // I modelli Sushi sono considerati come se avessero sempre una tabella
        }
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

        $tableName = $model->getTable();

        return Schema::connection($model->getConnectionName())->hasTable($tableName);
    }
}
