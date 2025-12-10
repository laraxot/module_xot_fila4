<?php

declare(strict_types=1);

namespace Modules\Xot\ValueObjects;

<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
use function Safe\preg_match;

/**
 * @see https://medium.com/@sliusarchyn/value-objects-in-laravel-use-it-12ba71b00281
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
=======
>>>>>>> origin/develop
class PhoneValueObject
{
    private function __construct(private readonly string $phone)
    {
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
readonly class PhoneValueObject
{
    private function __construct(
        private  string $phone,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
>>>>>>> ce6fc085 (.)
            throw new InvalidArgumentException('It is not valid phone value');
=======
<<<<<<< HEAD
            throw new InvalidArgumentException('It is not valid phone value');
=======
            throw new \InvalidArgumentException('It is not valid phone value');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return new self($phone);
    }

    public function toString(): string
    {
        return $this->phone;
    }
}
