<?php

declare(strict_types=1);

/*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
 * Value Objects
 * The part of the model are Value Objects.
 * VO's are classes that are immutable. They are wrappers for given types that needs validation.
 * If we have Value Object like Email in system, then we can pass it around and be sure, it's always valid one.
 * This decrease amount of guard logic within the system.
 */
<<<<<<< HEAD
=======
Value Objects
The part of the model are Value Objects.
VO's are classes that are immutable. They are wrappers for given types that needs validation.
If we have Value Object like Email in system, then we can pass it around and be sure, it's always valid one.
This decrease amount of guard logic within the system.
*/
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

namespace Modules\Xot\ValueObjects;

use InvalidArgumentException;

class EmailValueObject
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function __construct(
        // public readonly string $email;
        public string $email,
    ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
=======
    public function __construct(// public readonly string $email;
        public string $email,
    ) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
        }
    }
}
