<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

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
=======
=======
=======
>>>>>>> origin/develop

use function Safe\preg_replace;

use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
class SanitizeAction
{
    use QueueableAction;

    public function execute(string $str): string
    {
        $str = strip_tags($str);
        $str = html_entity_decode($str);
        $str = trim($str);
        $str = preg_replace('/\s+/', ' ', $str);
        if (Str::startsWith($str, '-')) {
            $str = Str::after($str, '-');
            $str = $this->execute($str);
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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
$string = trim($item);


// Convert special characters to HTML entities
$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');

// Remove potentially dangerous tags or attributes (like <script>)
$string = strip_tags($string);

// Additional removal of non-printable characters
$string = preg_replace('/[\x00-\x1F\x7F]/u', '', $string);
*/
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
