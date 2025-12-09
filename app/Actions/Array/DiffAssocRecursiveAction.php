<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Array;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $collection = collect($data)->map(static function ($item) {
            if (!is_array($item)) {
                throw new Exception('[' . __LINE__ . '][' . __CLASS__ . ']');
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

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
=======
>>>>>>> origin/develop
        $collection = collect($data)
            ->map(
                static function ($item) {
                    if (! is_array($item)) {
<<<<<<< HEAD
                        throw new Exception('['.__LINE__.']['.__CLASS__.']');
                    }
=======
>>>>>>> b93ef594b4 (.)

            return collect($item)->map(static function ($item0) {
                if (is_numeric($item0)) {
                    $item0 *= 1;
                }
<<<<<<< HEAD
            );
>>>>>>> a12f125f4a (.)
=======

                return $item0;
            })->all();
        });
>>>>>>> b93ef594b4 (.)
=======
                        throw new \Exception('['.__LINE__.']['.__CLASS__.']');
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $ris = $coll_1->filter(static function ($value, $key) use ($arr_2) {
            try {
                return !\in_array($value, $arr_2, false);
            } catch (Exception $exception) {
                dddx(['err' => $exception->getMessage(), 'value' => $value, 'key' => $key, 'arr_2' => $arr_2]);
<<<<<<< HEAD
            }
        });
=======
<<<<<<< HEAD
            }
        });
=======
=======
>>>>>>> origin/develop
        $ris = $coll_1->filter(
            static function ($value, $key) use ($arr_2) {
                try {
                    return ! \in_array($value, $arr_2, false);
<<<<<<< HEAD
                } catch (Exception $exception) {
=======
                } catch (\Exception $exception) {
>>>>>>> origin/develop
                    dddx(['err' => $exception->getMessage(), 'value' => $value, 'key' => $key, 'arr_2' => $arr_2]);
                }
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            }
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $ris->all();
    }
}
