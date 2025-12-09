<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

use Exception;
use Spatie\QueueableAction\QueueableAction;

class GetStrBetweenStartsWithAction
{
    use QueueableAction;

    public function execute(string $body, string $start, string $open, string $close): string
    {
        $pos = mb_strpos($body, $start);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
=======
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
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
>>>>>>> 5a14301c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        }
        $pos1 = mb_strpos($body, $close, $pos);

        $length = $pos1 - $pos;
        do {
            $body1 = mb_substr($body, $pos, $length);
            $open_count = mb_substr_count($body1, $open);
            $close_count = mb_substr_count($body1, $close);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $length++;
=======
            ++$length;
>>>>>>> 5a14301c (.)
=======
            ++$length;
>>>>>>> 5a14301c (.)
=======
            ++$length;
>>>>>>> 5a14301c (.)
=======
            ++$length;
>>>>>>> 5a14301c (.)
        } while ($open_count !== $close_count);

        return $body1;
    }
}
