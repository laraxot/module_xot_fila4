<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;



class SanitizeAction
{
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

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
class SanitizeAction
{
    use QueueableAction;






    public function execute(string $str): string
    {
        $str = strip_tags($str);
        $str = html_entity_decode($str);

        $replaced = preg_replace('/\s+/', ' ', $str);
        $str = is_string($replaced) ? $replaced : $str;

        if (Str::startsWith($str, '-')) {
            $afterStr = Str::after($str, '-');
            // $afterStr è sempre una stringa perché Str::after restituisce sempre una stringa
            $str = $this->execute($afterStr);
        $str = trim($str);
        $str = trim($str);
        $str = trim($str);
        $str = trim($str);
        $str = trim($str);
        $str = preg_replace('/\s+/', ' ', $str);
        if (Str::startsWith($str, '-')) {
            $str = Str::after($str, '-');
            $str = $this->execute($str);
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
        }

        return $str;
        }

        return $str;
        }

        return $str;
    }
}

/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
