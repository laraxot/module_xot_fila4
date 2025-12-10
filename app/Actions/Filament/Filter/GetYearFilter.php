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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        for ($curr = $from; $curr <= $to; $curr++) {
=======
        for ($curr = $from; $curr <= $to; ++$curr) {
>>>>>>> 5a14301c (.)
=======
        for ($curr = $from; $curr <= $to; ++$curr) {
>>>>>>> 5a14301c (.)
=======
        for ($curr = $from; $curr <= $to; ++$curr) {
>>>>>>> 5a14301c (.)
=======
        for ($curr = $from; $curr <= $to; ++$curr) {
>>>>>>> 5a14301c (.)
=======
        for ($curr = $from; $curr <= $to; ++$curr) {
>>>>>>> 5a14301c (.)
            $currStr = (string) $curr;
            $opts[$currStr] = $currStr;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return SelectFilter::make($fieldName)->options($opts);
=======
        return SelectFilter::make($fieldName)
            ->options($opts);
>>>>>>> f1d4085 (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> 73eab74 (.)
    }
}
