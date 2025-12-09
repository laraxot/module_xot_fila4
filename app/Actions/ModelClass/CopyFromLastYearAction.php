<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class CopyFromLastYearAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 5a14301c (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
            return;
        }

        $currentYear = (int) $year;
        $lastYear = $currentYear - 1;

        /** @var Collection $rows_year */
        $rows_year = $modelClass::where($fieldName, $currentYear)->get();

        /** @var Collection $rows_last_year */
        $rows_last_year = $modelClass::where($fieldName, $lastYear)->get();

        if ($rows_year->count() > 0) {
            return;
        }

        foreach ($rows_last_year as $row) {
            /** @var Model $row */
            $up = $row->replicate()->fill([
                $fieldName => $currentYear,
            ]);
            $up->save();
        }
    }
}
