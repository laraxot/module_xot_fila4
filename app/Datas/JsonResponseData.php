<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Illuminate\Http\JsonResponse;
use Spatie\LaravelData\Data;

/**
 * Undocumented class.
 */
class JsonResponseData extends Data
{
    public bool $success = true; // => false,

    public string $message;

<<<<<<< HEAD
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public ?int $code = null;
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
    public ?int $code = null;
    public ?int $code = null;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public null|int $code = null;
>>>>>>> ca9324a4 (.)
=======
    public null|int $code = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public null|int $code = null;
=======
    public ?int $code = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
<<<<<<< HEAD
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
=======
>>>>>>> ca9324a4 (.)
=======
    public null|int $code = null;
=======
    public ?int $code = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public null|int $code = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public null|int $code = null;
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)

    public array $data = [];

    public int $status = 200;

    /*
     * public function toResponse($request)
     * {
     *
     * }
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
    public function toResponse($request)
    {

    }
    */
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
    public function response(): JsonResponse
    {
        $data = [
            'success' => $this->success,
            'message' => $this->message,
            'code' => $this->code,
            'data' => $this->data,
            'now' => now(),
        ];

        return response()->json($data, $this->status);
    }
}
