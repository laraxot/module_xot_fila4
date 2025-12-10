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
>>>>>>> 2f3197ab (.)
    public ?int $code = null;
    public null|int $code = null;
    public null|int $code = null;
    public ?int $code = null;
    public ?int $code = null;
    public ?int $code = null;
    public ?int $code = null;
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
>>>>>>> 2f3197ab (.)

    public array $data = [];

    public int $status = 200;

    /*
<<<<<<< HEAD
     * public function toResponse($request)
     * {
     *
     * }
     */
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
>>>>>>> 2f3197ab (.)
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
