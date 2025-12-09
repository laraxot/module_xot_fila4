<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD


>>>>>>> d86d643a (.)
class SanitizeAction
{
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> 43d67f21 (.)
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

class SanitizeAction
{
    use QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)

>>>>>>> 5a14301c (.)
    public function execute(string $str): string
    {
        $str = strip_tags($str);
        $str = html_entity_decode($str);
<<<<<<< HEAD

        return trim($str);
=======
        $str = trim($str);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)

        $replaced = preg_replace('/\s+/', ' ', $str);
        $str = is_string($replaced) ? $replaced : $str;

<<<<<<< HEAD
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> e59778ae (.)
        $str = preg_replace('/\s+/', ' ', $str);
        if (Str::startsWith($str, '-')) {
            $str = Str::after($str, '-');
            $str = $this->execute($str);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0218cd5 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
        }

        return $str;
>>>>>>> 5a14301c (.)
    }
}

/*
 * $string = trim($item);
 *
 *
 * // Convert special characters to HTML entities
 * $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
 *
 * // Remove potentially dangerous tags or attributes (like <script>)
 * $string = strip_tags($string);
 *
 * // Additional removal of non-printable characters
 * $string = preg_replace('/[\x00-\x1F\x7F]/u', '', $string);
 */
