<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;
use Override;

use function Safe\json_encode;

/**
 * @implements Arrayable<string, mixed>
 */
class ApplicationError implements Arrayable, Jsonable, JsonSerializable
{
    public function __construct(
        private string $help = '',
        private string $error = '',
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
    ) {}
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

    #[Override]
    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toJson($options = 0): string
    {
        $jsonEncoded = json_encode($this->jsonSerialize(), $options);
        // throw_unless($jsonEncoded, JsonEncodeException::class);

        return $jsonEncoded;
    }
}
