<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Geo;

use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Support\Facades\DB;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per generare l'espressione SQL per il calcolo della distanza.
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * Questa action centralizza la logica di generazione dell'espressione SQL
 * per il calcolo della distanza tra due punti geografici.
 */
class GetDistanceExpressionAction
{
    use QueueableAction;

    /**
     * Genera l'espressione SQL per calcolare la distanza tra due punti.
     *
     * @param float $latitude Latitudine del punto di riferimento
     * @param float $longitude Longitudine del punto di riferimento
     * @param string|null $alias Alias per l'espressione (opzionale)
<<<<<<< HEAD
     * @return Expression Espressione SQL per il calcolo della distanza
     */
=======
<<<<<<< HEAD
     * @return Expression Espressione SQL per il calcolo della distanza
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function execute(
        float $latitude,
        float $longitude,
        null|string $alias = null,
    ): Expression {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $sql = "
            (6371 * acos(
                cos(radians({$latitude})) *
                cos(radians(latitude)) *
                cos(radians(longitude) - radians({$longitude})) +
                sin(radians({$latitude})) *
                sin(radians(latitude))
            ))
        ";

        if (null !== $alias) {
            $sql .= " AS {$alias}";
<<<<<<< HEAD
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
=======
>>>>>>> b93ef594b4 (.)
        $sql = "
            (6371 * acos(
                cos(radians({$latitude})) *
                cos(radians(latitude)) *
                cos(radians(longitude) - radians({$longitude})) +
                sin(radians({$latitude})) *
                sin(radians(latitude))
            ))
        ";

        if (null !== $alias) {
<<<<<<< HEAD
            $sql .= " AS $alias";
>>>>>>> a12f125f4a (.)
=======
            $sql .= " AS {$alias}";
>>>>>>> b93ef594b4 (.)
=======
     * @return \Illuminate\Contracts\Database\Query\Expression Espressione SQL per il calcolo della distanza
     */
    public function execute(float $latitude, float $longitude, ?string $alias = null): \Illuminate\Contracts\Database\Query\Expression
    {
        $sql = "
            (6371 * acos(
                cos(radians($latitude)) *
                cos(radians(latitude)) *
                cos(radians(longitude) - radians($longitude)) +
                sin(radians($latitude)) *
                sin(radians(latitude))
            ))
        ";
        
        if (null !== $alias) {
            $sql .= " AS $alias";
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }

        return DB::raw($sql);
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
