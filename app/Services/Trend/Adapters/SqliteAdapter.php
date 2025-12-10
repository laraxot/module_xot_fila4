<?php

declare(strict_types=1);

namespace Modules\Xot\Services\Trend\Adapters;

<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
use Override;
use Override;
<<<<<<< HEAD
use Override;
use Override;
use Override;
use Error;
use Override;
use Override;
use Error;
use Override;
use Error;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
use Error;
use Override;
use Error;
use Override;
use Error;

class SqliteAdapter extends AbstractAdapter
{
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
<<<<<<< HEAD
use Override;
use Override;
use Override;
use Override;
use Override;
use Error;
use Override;
use Override;
use Override;
use Override;
use Error;
use Override;
use Error;
use Override;
use Error;
use Override;
use Error;
use Override;
use Error;
use Override;
use Error;

class SqliteAdapter extends AbstractAdapter
{
    #[Override]
    #[Override]
    #[Override]
class SqliteAdapter extends AbstractAdapter
{
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    public function format(string $column, string $interval): string
    {
        $format = match ($interval) {
            'minute' => '%Y-%m-%d %H:%M:00',
            'hour' => '%Y-%m-%d %H:00',
            'day' => '%Y-%m-%d',
            'month' => '%Y-%m',
            'year' => '%Y',
            default => throw new Error('Invalid interval.'),
            default => throw new Error('Invalid interval.'),
            default => throw new Error('Invalid interval.'),
        };

        return sprintf("strftime('%s', %s)", $format, $column);
    }
}
