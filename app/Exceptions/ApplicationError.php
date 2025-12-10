<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
<<<<<<< HEAD
use JsonSerializable;
use Override;
use Override;
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;
use Override;

use function Safe\json_encode;

<<<<<<< HEAD
<<<<<<< HEAD
=======
readonly class ApplicationError implements Arrayable, Jsonable, JsonSerializable
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
/**
 * @implements Arrayable<string, mixed>
 */
class ApplicationError implements Arrayable, Jsonable, JsonSerializable
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
readonly class ApplicationError implements JsonSerializable, Arrayable, Jsonable
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 300ef70 (.)
readonly class ApplicationError implements JsonSerializable, Arrayable, Jsonable
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
{
    public function __construct(
        private string $help = '',
        private string $error = '',
<<<<<<< HEAD
<<<<<<< HEAD
use JsonSerializable;
use Override;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use JsonSerializable;
use Override;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use JsonSerializable;
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

use function Safe\json_encode;

readonly class ApplicationError implements JsonSerializable, Arrayable, Jsonable
{
    public function __construct(
        private  string $help = '',
        private  string $error = '',
=======
>>>>>>> 551c768c4 (.)
    ) {}
<<<<<<< HEAD
{
    public function __construct(private readonly string $help = '', private readonly string $error = '')
    {
    }
readonly class ApplicationError implements JsonSerializable, Arrayable, Jsonable
{
    public function __construct(
        private  string $help = '',
        private  string $error = '',
    ) {}
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
=======
=======
    #[Override]
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toJson($options = 0): string
    {
<<<<<<< HEAD
        $jsonEncoded = json_encode($this->jsonSerialize(), $options);
        // throw_unless($jsonEncoded, JsonEncodeException::class);

        return $jsonEncoded;
=======
        return json_encode($this->jsonSerialize(), $options);
>>>>>>> 551c768c4 (.)
    }
}
