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
    public ?int $code = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|int $code = null;
=======
    public ?int $code = null;
>>>>>>> f1d4085 (.)
=======
    public null|int $code = null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public null|int $code = null;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

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
>>>>>>> 300ef70 (.)
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
>>>>>>> 300ef70 (.)
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
