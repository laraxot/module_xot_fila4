<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

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
=======
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
>>>>>>> 62cc8443 (.)


class SanitizeAction
{
<<<<<<< HEAD
=======
=======
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
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
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

use function Safe\preg_replace;

use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
class SanitizeAction
{
    use QueueableAction;
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
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)



=======
=======
>>>>>>> b7ea1cd1 (.)
>>>>>>> ecd5ec32 (.)



    public function execute(string $str): string
    {
        $str = strip_tags($str);
        $str = html_entity_decode($str);
<<<<<<< HEAD
=======
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
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
>>>>>>> 01502290 (.)

        $replaced = preg_replace('/\s+/', ' ', $str);
        $str = is_string($replaced) ? $replaced : $str;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
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
>>>>>>> e9ee2ea9 (.)
        $str = trim($str);
        $str = trim($str);
<<<<<<< HEAD
        $str = trim($str);
        $str = trim($str);
        $str = trim($str);
=======
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
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
=======
>>>>>>> 14edd1a1 (.)
>>>>>>> e9ee2ea9 (.)
        $str = preg_replace('/\s+/', ' ', $str);
        if (Str::startsWith($str, '-')) {
            $str = Str::after($str, '-');
            $str = $this->execute($str);
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
>>>>>>> 0218cd5 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 62cc8443 (.)
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
<<<<<<< HEAD
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        }

        return $str;
        }

        return $str;
        }

        return $str;
=======
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
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
>>>>>>> 01502290 (.)
        }

        return $str;
        }

        return $str;
        }

        return $str;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
$string = trim($item);


// Convert special characters to HTML entities
$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');

// Remove potentially dangerous tags or attributes (like <script>)
$string = strip_tags($string);

// Additional removal of non-printable characters
$string = preg_replace('/[\x00-\x1F\x7F]/u', '', $string);
*/
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
