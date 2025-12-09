<?php

declare(strict_types=1);

namespace Modules\Xot\Casts;

use Exception;
<<<<<<< HEAD
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use InvalidArgumentException;
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
     * @param mixed $_model The Eloquent model instance
     * @param string $_key The attribute key
     * @param mixed $value The raw value from database
     * @param array<string, mixed> $_attributes All model attributes
     */
    public function get($_model, string $_key, mixed $value, array $_attributes): PhoneValueObject
    {
        if (!is_string($value)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
        }

        return PhoneValueObject::fromString($value);
    }

    /**
     * Prepare the given value for storage.
     *
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
     * @param mixed $_model The Eloquent model instance
     * @param string $_key The attribute key
     * @param mixed $value The value to be stored
     * @param array<string, mixed> $_attributes All model attributes
     */
    public function set($_model, string $_key, mixed $value, array $_attributes): string
    {
        if (!($value instanceof PhoneValueObject)) {
>>>>>>> 5a14301c (.)
            throw new InvalidArgumentException('The given value is not an Phone instance.');
        }

        return $value->toString();
    }
}
