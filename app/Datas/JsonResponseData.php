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
    public ?int $code = null;
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
    public ?int $code = null;
=======
    public null|int $code = null;
>>>>>>> 5a14301c (.)
=======
    public null|int $code = null;
>>>>>>> 3fbbf1f5 (.)
=======
    public null|int $code = null;
=======
    public null|int $code = null;
>>>>>>> 399f46d3 (.)
=======
    public null|int $code = null;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|int $code = null;
=======
    public ?int $code = null;
>>>>>>> a12f125f4a (.)
=======
    public null|int $code = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?int $code = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 8b18e4bff (.)
    public ?int $code = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public ?int $code = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
    public null|int $code = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|int $code = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|int $code = null;
>>>>>>> ca9324a4 (.)
=======
    public null|int $code = null;
=======
    public ?int $code = null;
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|int $code = null;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public null|int $code = null;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|int $code = null;
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public null|int $code = null;
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
    public null|int $code = null;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public ?int $code = null;
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
    public null|int $code = null;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

    public array $data = [];

    public int $status = 200;

    /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
     * public function toResponse($request)
     * {
     *
     * }
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function toResponse($request)
    {

    }
    */
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
