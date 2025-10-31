<?php

declare(strict_types=1);

/*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
 * Value Objects
 * The part of the model are Value Objects.
 * VO's are classes that are immutable. They are wrappers for given types that needs validation.
 * If we have Value Object like Email in system, then we can pass it around and be sure, it's always valid one.
 * This decrease amount of guard logic within the system.
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

namespace Modules\Xot\ValueObjects;

use InvalidArgumentException;

class EmailValueObject
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    public function __construct(
        // public readonly string $email;
        public string $email,
    ) {
<<<<<<< HEAD
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
=======
<<<<<<< HEAD
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
=======
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function __construct(// public readonly string $email;
        public string $email,
    ) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
        }
    }
}
