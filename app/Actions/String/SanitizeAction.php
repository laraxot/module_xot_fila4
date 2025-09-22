<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\String;

<<<<<<< HEAD


class SanitizeAction
{
=======
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

class SanitizeAction
{
    use QueueableAction;
>>>>>>> 0e51323 (.)

    public function execute(string $str): string
    {
        $str = strip_tags($str);
        $str = html_entity_decode($str);
        $str = trim($str);
<<<<<<< HEAD
=======
        $str = preg_replace('/\s+/', ' ', $str);
        if (Str::startsWith($str, '-')) {
            $str = Str::after($str, '-');
            $str = $this->execute($str);
>>>>>>> 0e51323 (.)
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
