<?php

/**
 * @see https://dev.to/jackmiras/laravels-exceptions-part-2-custom-exceptions-1367
 */

declare(strict_types=1);

namespace Modules\Xot\Exceptions;

use JsonSerializable;
use Override;
use Override;
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
use JsonSerializable;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
<<<<<<< HEAD
use Override;
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Override;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

use function Safe\json_encode;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
=======
>>>>>>> f1d4085 (.)
=======
    #[Override]
>>>>>>> 73eab74 (.)
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
