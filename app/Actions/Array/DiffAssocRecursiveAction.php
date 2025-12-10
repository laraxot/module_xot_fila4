<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

use Spatie\QueueableAction\QueueableAction;

/**
 * ---.
 */
class DiffAssocRecursiveAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public static function fixType(array $data): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $collection = collect($data)->map(static function ($item) {
            if (!is_array($item)) {
                throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
            }

            return collect($item)->map(static function ($item0) {
                if (is_numeric($item0)) {
                    $item0 *= 1;
                }

                return $item0;
            })->all();
        });
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        $collection = collect($data)
            ->map(
                static function ($item) {
                    if (! is_array($item)) {
<<<<<<< HEAD

            return collect($item)->map(static function ($item0) {
                if (is_numeric($item0)) {
                    $item0 *= 1;
                }

                return $item0;
            })->all();
        });
                        throw new \Exception('['.__LINE__.']['.__CLASS__.']');
=======
                        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> 2f3197ab (.)
                    }

                    return collect($item)
                        ->map(
                            static function ($item0) {
                                if (is_numeric($item0)) {
                                    $item0 *= 1;
                                }

                                return $item0;
                            }
                        )->all();
                }
            );
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

        return $collection->all();
    }

    /**
     * ---.
     */
    public function execute(array $arr_1, array $arr_2): array
    {
        $coll_1 = collect(self::fixType($arr_1));
        $arr_2 = self::fixType($arr_2);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $ris = $coll_1->filter(static function ($value, $key) use ($arr_2) {
            try {
                return !\in_array($value, $arr_2, false);
            } catch (Exception $exception) {
                dddx(['err' => $exception->getMessage(), 'value' => $value, 'key' => $key, 'arr_2' => $arr_2]);
        $ris = $coll_1->filter(
            static function ($value, $key) use ($arr_2) {
                try {
                    return ! \in_array($value, $arr_2, false);
                    dddx(['err' => $exception->getMessage(), 'value' => $value, 'key' => $key, 'arr_2' => $arr_2]);
                }
            }
        );
            }
        });
<<<<<<< HEAD
=======
        $ris = $coll_1->filter(
            static function ($value, $key) use ($arr_2) {
                try {
                    return ! \in_array($value, $arr_2, false);
                } catch (Exception $exception) {
                    dddx(['err' => $exception->getMessage(), 'value' => $value, 'key' => $key, 'arr_2' => $arr_2]);
                }
            }
        );
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

        return $ris->all();
    }
}
