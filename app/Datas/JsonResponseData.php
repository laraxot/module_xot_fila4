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
<<<<<<< HEAD
    public ?int $code = null;
=======
    public null|int $code = null;
>>>>>>> 5a14301c (.)
=======
    public null|int $code = null;
>>>>>>> 3fbbf1f5 (.)

    public array $data = [];

    public int $status = 200;

    /*
     * public function toResponse($request)
     * {
     *
     * }
     */
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
