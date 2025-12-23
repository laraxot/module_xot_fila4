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
        for ($curr = $from; $curr <= $to; $curr++) {
            $currStr = (string) $curr;
            $opts[$currStr] = $currStr;
        }

<<<<<<< HEAD
        return SelectFilter::make($fieldName)->options($opts);
=======
<<<<<<< HEAD
        return SelectFilter::make($fieldName)->options($opts);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return SelectFilter::make($fieldName)->options($opts);
=======
        return SelectFilter::make($fieldName)
            ->options($opts);
>>>>>>> a12f125f4a (.)
=======
        return SelectFilter::make($fieldName)->options($opts);
>>>>>>> b93ef594b4 (.)
=======
        return SelectFilter::make($fieldName)
            ->options($opts);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    }
}
