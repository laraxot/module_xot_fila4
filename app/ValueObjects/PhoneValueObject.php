<?php

declare(strict_types=1);

namespace Modules\Xot\ValueObjects;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 091f883c (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use function Safe\preg_match;

/**
 * @see https://medium.com/@sliusarchyn/value-objects-in-laravel-use-it-12ba71b00281
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8cf76e7 (.)
readonly class PhoneValueObject
{
    private function __construct(
        private  string $phone,
        private  string $phone,
        private  string $phone,
        private  string $phone,
        private  string $phone,
    ) {}
class PhoneValueObject
{
    private function __construct(private readonly string $phone)
    {
    }
readonly class PhoneValueObject
{
    private function __construct(
        private  string $phone,
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
>>>>>>> 8cf76e7 (.)

    public static function fromString(string $phone): self
    {
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
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
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
<<<<<<< HEAD
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
        if (0 === preg_match('/^\+1\d{10}$/', $phone)) {
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
            throw new InvalidArgumentException('It is not valid phone value');
=======
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
>>>>>>> 17684f52 (.)
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
            throw new InvalidArgumentException('It is not valid phone value');
        }

        return new self($phone);
    }

    public function toString(): string
    {
        return $this->phone;
    }
}
