<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Filter;

use Filament\Tables\Filters\SelectFilter;
use Spatie\QueueableAction\QueueableAction;

class GetYearFilter
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $fieldName, int $from, int $to): SelectFilter
    {
        $opts = [];
        for ($curr = $from; $curr <= $to; ++$curr) {
        for ($curr = $from; $curr <= $to; ++$curr) {
        for ($curr = $from; $curr <= $to; ++$curr) {
        for ($curr = $from; $curr <= $to; ++$curr) {
        for ($curr = $from; $curr <= $to; ++$curr) {
            $currStr = (string) $curr;
            $opts[$currStr] = $currStr;
        }

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
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
        return SelectFilter::make($fieldName)->options($opts);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return SelectFilter::make($fieldName)
            ->options($opts);
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 7468a7d2 (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> dbce41cec (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 5400be3e2 (.)
=======
        return SelectFilter::make($fieldName)
            ->options($opts);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return SelectFilter::make($fieldName)->options($opts);
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
        return SelectFilter::make($fieldName)->options($opts);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
<<<<<<< HEAD
        return SelectFilter::make($fieldName)->options($opts);
=======
        return SelectFilter::make($fieldName)
            ->options($opts);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
>>>>>>> a12f125f4a (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> b93ef594b4 (.)
=======
        return SelectFilter::make($fieldName)
            ->options($opts);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 5cb992cc6 (.)
    }
}
