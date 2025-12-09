<?php

declare(strict_types=1);

namespace Modules\Xot\Services\Trend\Adapters;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 3fbbf1f5 (.)
use Error;
use Override;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
use Override;
=======
>>>>>>> f1d4085 (.)
use Error;
>>>>>>> 5a14301c (.)
=======
use Override;
use Error;
>>>>>>> 5a14301c (.)

class MySqlAdapter extends AbstractAdapter
{
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
    public function format(string $column, string $interval): string
    {
        $format = match ($interval) {
            'minute' => '%Y-%m-%d %H:%i:00',
            'hour' => '%Y-%m-%d %H:00',
            'day' => '%Y-%m-%d',
            'month' => '%Y-%m',
            'year' => '%Y',
            default => throw new Error('Invalid interval.'),
        };

        return sprintf("date_format(%s, '%s')", $column, $format);
    }
}
