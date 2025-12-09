<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

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
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)


>>>>>>> d86d643a (.)
class SanitizeAction
{
=======
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
    public function execute(string $str): string
    {
        $str = strip_tags($str);
        $str = html_entity_decode($str);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return trim($str);
=======
        $str = trim($str);
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
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)

        $replaced = preg_replace('/\s+/', ' ', $str);
        $str = is_string($replaced) ? $replaced : $str;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $str = trim($str);
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
        $str = trim($str);
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
        $str = preg_replace('/\s+/', ' ', $str);
        if (Str::startsWith($str, '-')) {
            $str = Str::after($str, '-');
            $str = $this->execute($str);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
>>>>>>> ca9324a4 (.)
=======
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
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
>>>>>>> ca9324a4 (.)
=======
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
        }

        return $str;
>>>>>>> 5a14301c (.)
=======
        }

        return $str;
>>>>>>> 5a14301c (.)
=======
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
