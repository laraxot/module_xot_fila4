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

    public array $data = [];

    public int $status = 200;

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
     * public function toResponse($request)
     * {
     *
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    public function toResponse($request)
    {

    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
