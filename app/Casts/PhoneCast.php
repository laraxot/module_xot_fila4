<?php

declare(strict_types=1);

namespace Modules\Xot\Casts;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use InvalidArgumentException;
=======
use InvalidArgumentException;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
>>>>>>> 5a14301c (.)
=======
use InvalidArgumentException;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
>>>>>>> 5a14301c (.)
use Modules\Xot\ValueObjects\PhoneValueObject;

class PhoneCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_model  The Eloquent model instance
     * @param  string  $_key  The attribute key
     * @param  mixed  $value  The raw value from database
     * @param  array<string, mixed>  $_attributes  All model attributes
     */
    public function get(mixed $_model, string $_key, mixed $value, array $_attributes): PhoneValueObject
    {
        if (! is_string($value)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
     * @param mixed $_model The Eloquent model instance
     * @param string $_key The attribute key
     * @param mixed $value The raw value from database
     * @param array<string, mixed> $_attributes All model attributes
     */
    public function get($_model, string $_key, mixed $value, array $_attributes): PhoneValueObject
    {
        if (!is_string($value)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
     * @param array<string, mixed> $attributes
=======
>>>>>>> b93ef594b4 (.)
     */
    public function get($_model, string $_key, mixed $value, array $_attributes): PhoneValueObject
    {
<<<<<<< HEAD
        if (! is_string($value)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($value)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
     * @param array<string, mixed> $attributes
     */
    public function get($model, string $key, mixed $value, array $attributes): PhoneValueObject
    {
        if (! is_string($value)) {
<<<<<<< HEAD
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
        }

        return PhoneValueObject::fromString($value);
    }

    /**
     * Prepare the given value for storage.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_model  The Eloquent model instance
     * @param  string  $_key  The attribute key
     * @param  mixed  $value  The value to be stored
     * @param  array<string, mixed>  $_attributes  All model attributes
     */
    public function set(mixed $_model, string $_key, mixed $value, array $_attributes): string
    {
        if (! ($value instanceof PhoneValueObject)) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
     * @param mixed $_model The Eloquent model instance
     * @param string $_key The attribute key
     * @param mixed $value The value to be stored
     * @param array<string, mixed> $_attributes All model attributes
     */
    public function set($_model, string $_key, mixed $value, array $_attributes): string
    {
        if (!($value instanceof PhoneValueObject)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
     * @param array<string, mixed> $attributes
     */
    public function set($model, string $key, mixed $value, array $attributes): string
    {
        if (! $value instanceof PhoneValueObject) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
            throw new InvalidArgumentException('The given value is not an Phone instance.');
        }

        return $value->toString();
    }
}
