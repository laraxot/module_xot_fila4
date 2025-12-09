<?php

declare(strict_types=1);

namespace Modules\Xot\ValueObjects;

use InvalidArgumentException;
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
use function Safe\preg_match;

/**
 * @see https://medium.com/@sliusarchyn/value-objects-in-laravel-use-it-12ba71b00281
 */
readonly class PhoneValueObject
{
    private function __construct(
<<<<<<< HEAD
        private string $phone,
=======
        private  string $phone,
>>>>>>> 5a14301c (.)
    ) {}

    public static function fromString(string $phone): self
    {
<<<<<<< HEAD
        if (preg_match('/^\+1\d{10}$/', $phone) === 0) {
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
