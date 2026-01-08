<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

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
=======
=======
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
use JsonSerializable;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;
use Override;

use function Safe\json_encode;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @implements Arrayable<string, mixed>
 */
class ApplicationError implements Arrayable, Jsonable, JsonSerializable
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
readonly class ApplicationError implements JsonSerializable, Arrayable, Jsonable
>>>>>>> d2b0a27 (.)
=======
readonly class ApplicationError implements Arrayable, Jsonable, JsonSerializable
>>>>>>> 285375c74 (.)
=======
readonly class ApplicationError implements Arrayable, Jsonable, JsonSerializable
=======
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @implements Arrayable<string, mixed>
 */
class ApplicationError implements Arrayable, Jsonable, JsonSerializable
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
readonly class ApplicationError implements JsonSerializable, Arrayable, Jsonable
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 8b18e4bff (.)
{
    public function __construct(
        private string $help = '',
        private string $error = '',
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
class ApplicationError implements JsonSerializable, Arrayable, Jsonable
{
    public function __construct(private readonly string $help = '', private readonly string $error = '')
    {
    }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'error' => $this->error,
            'help' => $this->help,
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    /**
     * @return array<string, mixed>
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    #[Override]
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toJson($options = 0): string
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}
