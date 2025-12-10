<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Support\Arr;
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
=======
>>>>>>> 73eab74 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_match_all;

>>>>>>> 9f27fc9a6 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> efbf15eba (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_match_all;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_match_all;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_match_all;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_match_all;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> efbf15eba (.)

use function Safe\preg_match_all;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 5e6e0d054 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\preg_match_all;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
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
     * @param string $str The page range string to parse
     *
     * @param string $str The page range string to parse
     *
     * @param string $str The page range string to parse
     *
     * @param string $str The page range string to parse
     *
     * @param string $str The page range string to parse
     *
     * @return array<int> Array of page numbers
     */
    public static function execute(string $str): array
    {
        $pattern = '/(\d+)(?:(?:-)(\d+))?(?:,(?!$))?/';
        $matches = [];
        preg_match_all($pattern, $str, $matches);

        Assert::notEmpty($matches[0], 'No valid page numbers found');
        $matchCount = count($matches[0]);
        $res = [];

        for ($i = 0; $i < $matchCount; $i++) {
        Assert::isArray($matches);
        Assert::notEmpty($matches[0], 'No valid page numbers found');
        Assert::isArray($matches[0]);
        $matchCount = count($matches[0]);
        $res = [];

        for ($i = 0; $i < $matchCount; ++$i) {
            $firstNumber = Arr::get($matches, "1.{$i}");
            $secondNumber = Arr::get($matches, "2.{$i}");

            Assert::string($firstNumber, 'First number must be a string');
            Assert::string($secondNumber, 'Second number must be a string');

            if ('' === $secondNumber) {
            if ('' === $secondNumber) {
            if ('' === $secondNumber) {
            if ('' === $secondNumber) {
            if ('' === $secondNumber) {
                $res[] = (int) $firstNumber;
            } else {
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
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
>>>>>>> 5ca118c34 (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
>>>>>>> aa96bb619 (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
>>>>>>> efbf15eba (.)
                $res = array_merge(
                    $res,
                    self::fromTo((int) $firstNumber, (int) $secondNumber)
                );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
>>>>>>> f8f76a284 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
=======
<<<<<<< HEAD
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
>>>>>>> dbce41cec (.)
=======
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
<<<<<<< HEAD
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> origin/develop
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
                $res = array_merge(
                    $res,
                    self::fromTo((int) $firstNumber, (int) $secondNumber)
                );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
>>>>>>> a12f125f4a (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
=======
                $res = array_merge($res, self::fromTo((int) $firstNumber, (int) $secondNumber));
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
            }
        }

        return $res;
    }

    /**
     * Generate an array of numbers from start to end inclusive.
     *
     * @param int $from Starting number
     * @param int $to   Ending number
     *
     * @param int $from Starting number
     * @param int $to   Ending number
     *
     * @param int $from Starting number
     * @param int $to   Ending number
     *
     * @param int $from Starting number
     * @param int $to   Ending number
     *
     * @param int $from Starting number
     * @param int $to   Ending number
     *
     * @return array<int> Array of sequential numbers
     */
    public static function fromTo(int $from, int $to): array
    {
        Assert::greaterThanEq($to, $from, 'End number must be greater than or equal to start number');

        return range($from, $to);
    }
}
