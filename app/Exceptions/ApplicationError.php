<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;
use Override;

use function Safe\json_encode;

readonly class ApplicationError implements Arrayable, Jsonable, JsonSerializable
{
    public function __construct(
        private string $help = '',
        private string $error = '',
=======
use JsonSerializable;
<<<<<<< HEAD
use Override;
=======
>>>>>>> f1d4085 (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

use function Safe\json_encode;

<<<<<<< HEAD
readonly class ApplicationError implements JsonSerializable, Arrayable, Jsonable
{
    public function __construct(
        private  string $help = '',
        private  string $error = '',
>>>>>>> 5a14301c (.)
    ) {}
=======
class ApplicationError implements JsonSerializable, Arrayable, Jsonable
{
    public function __construct(private readonly string $help = '', private readonly string $error = '')
    {
    }
>>>>>>> f1d4085 (.)

    public function toArray(): array
    {
        return [
            'error' => $this->error,
            'help' => $this->help,
        ];
    }

<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toJson($options = 0): string
    {
<<<<<<< HEAD
        return json_encode($this->jsonSerialize(), $options);
=======
        $jsonEncoded = json_encode($this->jsonSerialize(), $options);
        // throw_unless($jsonEncoded, JsonEncodeException::class);

        return $jsonEncoded;
>>>>>>> 5a14301c (.)
    }
}
