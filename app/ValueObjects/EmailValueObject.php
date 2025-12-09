<?php

declare(strict_types=1);

/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
 * Value Objects
 * The part of the model are Value Objects.
 * VO's are classes that are immutable. They are wrappers for given types that needs validation.
 * If we have Value Object like Email in system, then we can pass it around and be sure, it's always valid one.
 * This decrease amount of guard logic within the system.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
Value Objects
The part of the model are Value Objects.
VO's are classes that are immutable. They are wrappers for given types that needs validation.
If we have Value Object like Email in system, then we can pass it around and be sure, it's always valid one.
This decrease amount of guard logic within the system.
*/
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

namespace Modules\Xot\ValueObjects;

use InvalidArgumentException;

class EmailValueObject
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function __construct(
        // public readonly string $email;
        public string $email,
    ) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
=======
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
>>>>>>> 5a14301c (.)
=======
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function __construct(// public readonly string $email;
        public string $email,
    ) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
=======
=======
=======

namespace Modules\Xot\ValueObjects;

class EmailValueObject
{
>>>>>>> origin/develop
    public function __construct(// public readonly string $email;
        public string $email,
    ) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function __construct(
        // public readonly string $email;
        public string $email,
    ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
>>>>>>> b93ef594b4 (.)
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
=======
            throw new \InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
    }
}
