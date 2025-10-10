<?php

declare(strict_types=1);

namespace Modules\Xot\ValueObjects;

<<<<<<< HEAD
use InvalidArgumentException;
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
