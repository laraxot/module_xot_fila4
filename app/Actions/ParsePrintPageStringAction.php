<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use InvalidArgumentException;
use Illuminate\Support\Arr;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_match_all;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

use function Safe\preg_match_all;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
/**
 * Parses a print page string into an array of page numbers.
 *
 * @example "1-4,6,7,8,11-14" becomes [1,2,3,4,6,7,8,11,12,13,14]
 */
class ParsePrintPageStringAction
{
    use QueueableAction;

    /**
     * Execute the page string parsing.
     *
     * @param  string  $str  The page range string to parse
     * @return array<int> Array of page numbers
     */
    public static function execute(string $str): array
    {
        $pattern = '/(\d+)(?:(?:-)(\d+))?(?:,(?!$))?/';
        $matches = [];
        preg_match_all($pattern, $str, $matches);

<<<<<<< HEAD
        /**
         * @var array{list<string>, list<numeric-string>, list<''|numeric-string>} $matches
         */
        if (! is_array($matches) || empty($matches[0])) {
            throw new InvalidArgumentException('No valid page numbers found');
        }

        /** @var list<string> $matches0 */
=======
        // Verifica che $matches sia un array e che contenga almeno un elemento
        if (!is_array($matches) || !isset($matches[0]) || empty($matches[0])) {
            throw new InvalidArgumentException('No valid page numbers found');
        }

        /** @var array<int, string> $matches0 */
>>>>>>> c85ea7588 (.)
        $matches0 = $matches[0];
        $matchCount = count($matches0);
        $res = [];

        for ($i = 0; $i < $matchCount; $i++) {
            $firstNumber = Arr::get($matches, "1.{$i}");
            $secondNumber = Arr::get($matches, "2.{$i}");

            Assert::string($firstNumber, 'First number must be a string');
            Assert::string($secondNumber, 'Second number must be a string');

            if ($secondNumber === '') {
                $res[] = (int) $firstNumber;
            } else {
<<<<<<< HEAD
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
<<<<<<< HEAD
<<<<<<< HEAD
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
                $res = array_merge(
                    $res,
                    self::fromTo((int) $firstNumber, (int) $secondNumber)
                );
>>>>>>> f1d4085 (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
            }
        }

        return $res;
    }

    /**
     * Generate an array of numbers from start to end inclusive.
     *
     * @param  int  $from  Starting number
     * @param  int  $to  Ending number
     * @return array<int> Array of sequential numbers
     */
    public static function fromTo(int $from, int $to): array
    {
        Assert::greaterThanEq($to, $from, 'End number must be greater than or equal to start number');

        return range($from, $to);
    }
}
