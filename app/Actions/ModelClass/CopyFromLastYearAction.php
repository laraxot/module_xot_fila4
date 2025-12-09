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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
=======
<<<<<<< HEAD
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
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
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 17684f52 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> ed734516 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 7131bd09 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> ed734516 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> ed734516 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 7131bd09 (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 399f46d3 (.)
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> ca9324a4 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function execute(string $modelClass, string $fieldName, ?string $year): void
    {
        if (! class_exists($modelClass) || ! is_subclass_of($modelClass, Model::class)) {
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 9db27d12 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> ca9324a4 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public function execute(string $modelClass, string $fieldName, null|string $year): void
    {
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, Model::class)) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
