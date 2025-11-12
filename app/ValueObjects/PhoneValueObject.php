<?php

declare(strict_types=1);

namespace Modules\Xot\ValueObjects;

use InvalidArgumentException;

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
        private string $phone,
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
        if (preg_match('/^\+1\d{10}$/', $phone) === 0) {
            throw new InvalidArgumentException('It is not valid phone value');
        }

        return new self($phone);
    }

    public function toString(): string
    {
        return $this->phone;
    }
}
