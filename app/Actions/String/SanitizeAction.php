<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

class SanitizeAction
{
<<<<<<< HEAD
=======
=======
=======
>>>>>>> a5dccfe (.)
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
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

use function Safe\preg_replace;

use Spatie\QueueableAction\QueueableAction;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    public function execute(string $str): string
    {
        $str = strip_tags($str);
        $str = html_entity_decode($str);

        return trim($str);
    }
}

/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
<<<<<<< HEAD
=======
$string = trim($item);


// Convert special characters to HTML entities
$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');

// Remove potentially dangerous tags or attributes (like <script>)
$string = strip_tags($string);

// Additional removal of non-printable characters
$string = preg_replace('/[\x00-\x1F\x7F]/u', '', $string);
*/
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
