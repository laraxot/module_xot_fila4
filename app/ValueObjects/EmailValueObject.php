<?php

declare(strict_types=1);

/*
 * Value Objects
 * The part of the model are Value Objects.
 * VO's are classes that are immutable. They are wrappers for given types that needs validation.
 * If we have Value Object like Email in system, then we can pass it around and be sure, it's always valid one.
 * This decrease amount of guard logic within the system.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
Value Objects
The part of the model are Value Objects.
VO's are classes that are immutable. They are wrappers for given types that needs validation.
If we have Value Object like Email in system, then we can pass it around and be sure, it's always valid one.
This decrease amount of guard logic within the system.
*/
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

namespace Modules\Xot\ValueObjects;

use InvalidArgumentException;

class EmailValueObject
{
    public function __construct(
        // public readonly string $email;
        public string $email,
    ) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
>>>>>>> 2f3197ab (.)
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
=======
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
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
    public function __construct(// public readonly string $email;
        public string $email,
    ) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> ce6fc085 (.)

namespace Modules\Xot\ValueObjects;

class EmailValueObject
{
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
    public function __construct(// public readonly string $email;
        public string $email,
    ) {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
    public function __construct(
        // public readonly string $email;
        public string $email,
    ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
            throw new \InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
=======
>>>>>>> b93ef594b4 (.)
            throw new InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
=======
            throw new \InvalidArgumentException(sprintf('Email address %s is considered valid.', $email));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        }
    }
}
