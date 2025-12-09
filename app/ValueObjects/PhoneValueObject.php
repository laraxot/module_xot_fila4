<?php

declare(strict_types=1);

namespace Modules\Xot\ValueObjects;

use InvalidArgumentException;
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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use function Safe\preg_match;

/**
 * @see https://medium.com/@sliusarchyn/value-objects-in-laravel-use-it-12ba71b00281
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
readonly class PhoneValueObject
{
    private function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        private string $phone,
=======
        private  string $phone,
>>>>>>> 5a14301c (.)
=======
        private  string $phone,
>>>>>>> 5a14301c (.)
=======
        private  string $phone,
>>>>>>> 5a14301c (.)
=======
        private  string $phone,
>>>>>>> 5a14301c (.)
    ) {}
<<<<<<< HEAD
=======
class PhoneValueObject
{
    private function __construct(private readonly string $phone)
    {
    }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

    public static function fromString(string $phone): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (preg_match('/^\+1\d{10}$/', $phone) === 0) {
=======
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
>>>>>>> 5a14301c (.)
            throw new InvalidArgumentException('It is not valid phone value');
        }

        return new self($phone);
    }

    public function toString(): string
    {
        return $this->phone;
    }
}
