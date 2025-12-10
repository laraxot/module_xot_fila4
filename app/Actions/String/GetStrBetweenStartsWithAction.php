<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Exception;
>>>>>>> 091f883c (.)
=======
use Exception;
>>>>>>> 414a4ffcb (.)
use Spatie\QueueableAction\QueueableAction;

class GetStrBetweenStartsWithAction
{
    use QueueableAction;

    public function execute(string $body, string $start, string $open, string $close): string
    {
        $pos = mb_strpos($body, $start);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
<<<<<<< HEAD
        if (false === $pos) {
<<<<<<< HEAD
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new \Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
<<<<<<< HEAD
        if (false === $pos) {
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
        if (false === $pos) {
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 218dfed3 (.)
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
            throw new \Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
=======
<<<<<<< HEAD
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
=======
        if (false === $pos) {
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
<<<<<<< HEAD
=======
            throw new Exception("Cannot find $start in $body [".__LINE__.']['.__FILE__.']');
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
            throw new Exception("Cannot find {$start} in {$body} [" . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if ($pos === false) {
            throw new Exception("Cannot find {$start} in {$body} [".__LINE__.']['.__FILE__.']');
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        }
        $pos1 = mb_strpos($body, $close, $pos);

        $length = $pos1 - $pos;
        do {
            $body1 = mb_substr($body, $pos, $length);
            $open_count = mb_substr_count($body1, $open);
            $close_count = mb_substr_count($body1, $close);
<<<<<<< HEAD
<<<<<<< HEAD
            ++$length;
            ++$length;
            ++$length;
            ++$length;
            ++$length;
=======
            $length++;
>>>>>>> 551c768c4 (.)
=======
            $length++;
>>>>>>> 414a4ffcb (.)
        } while ($open_count !== $close_count);

        return $body1;
    }
}
