<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Exception;
>>>>>>> 091f883c (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
        $collection = collect($data)->map(static function ($item) {
            if (! is_array($item)) {
                throw new Exception('['.__LINE__.']['.__CLASS__.']');
            }

            return collect($item)->map(static function ($item0) {
                if (is_numeric($item0)) {
                    $item0 *= 1;
                }

                return $item0;
            })->all();
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
        $collection = collect($data)
            ->map(
                static function ($item) {
                    if (! is_array($item)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                        throw new Exception('['.__LINE__.']['.__CLASS__.']');
                    }
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)

            return collect($item)->map(static function ($item0) {
                if (is_numeric($item0)) {
                    $item0 *= 1;
                }
<<<<<<< HEAD
=======
<<<<<<< HEAD
            );
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)

                return $item0;
            })->all();
        });
<<<<<<< HEAD
                        throw new \Exception('['.__LINE__.']['.__CLASS__.']');
=======
                        throw new Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> 2f3197ab (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                        throw new \Exception('['.__LINE__.']['.__CLASS__.']');
>>>>>>> ce6fc085 (.)
                    }
=======
                        throw new Exception('['.__LINE__.']['.__CLASS__.']');
                    }
>>>>>>> 7468a7d2 (.)
=======
                        throw new Exception('['.__LINE__.']['.__CLASS__.']');
                    }
>>>>>>> 5cf46378 (.)
=======
                        throw new Exception('['.__LINE__.']['.__CLASS__.']');
                    }
>>>>>>> dbce41cec (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
        $ris = $coll_1->filter(static function ($value, $key) use ($arr_2) {
            try {
                return ! \in_array($value, $arr_2, false);
            } catch (Exception $exception) {
                dddx(['err' => $exception->getMessage(), 'value' => $value, 'key' => $key, 'arr_2' => $arr_2]);
<<<<<<< HEAD
<<<<<<< HEAD
        $ris = $coll_1->filter(
            static function ($value, $key) use ($arr_2) {
                try {
                    return ! \in_array($value, $arr_2, false);
                    dddx(['err' => $exception->getMessage(), 'value' => $value, 'key' => $key, 'arr_2' => $arr_2]);
                }
            }
        );
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            }
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)

        return $ris->all();
    }
}
