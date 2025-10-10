<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;

class GetStrBetweenStartsWithAction
{
    use QueueableAction;

    public function execute(string $body, string $start, string $open, string $close): string
    {
        $pos = mb_strpos($body, $start);
        if (false === $pos) {
<<<<<<< HEAD
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
=======
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
        $pos1 = mb_strpos($body, $close, $pos);

        $length = $pos1 - $pos;
        do {
            $body1 = mb_substr($body, $pos, $length);
            $open_count = mb_substr_count($body1, $open);
            $close_count = mb_substr_count($body1, $close);
            ++$length;
        } while ($open_count !== $close_count);

        return $body1;
    }
}
