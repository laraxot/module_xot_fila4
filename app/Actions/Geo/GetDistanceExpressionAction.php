<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Geo;

use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Support\Facades\DB;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per generare l'espressione SQL per il calcolo della distanza.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f76ebe6 (.)
=======
 * 
=======
 *
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
 *
>>>>>>> 492d6d3c (.)
=======
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
>>>>>>> 399f46d3 (.)
 * Questa action centralizza la logica di generazione dell'espressione SQL
 * per il calcolo della distanza tra due punti geografici.
 */
class GetDistanceExpressionAction
{
    use QueueableAction;

    /**
     * Genera l'espressione SQL per calcolare la distanza tra due punti.
     *
<<<<<<< HEAD
     * @param  float  $latitude  Latitudine del punto di riferimento
     * @param  float  $longitude  Longitudine del punto di riferimento
     * @param  string|null  $alias  Alias per l'espressione (opzionale)
=======
     * @param float $latitude Latitudine del punto di riferimento
     * @param float $longitude Longitudine del punto di riferimento
     * @param string|null $alias Alias per l'espressione (opzionale)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
     * @return Expression Espressione SQL per il calcolo della distanza
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(
        float $latitude,
        float $longitude,
<<<<<<< HEAD
        ?string $alias = null,
=======
        null|string $alias = null,
>>>>>>> 5a14301c (.)
    ): Expression {
        $sql = "
            (6371 * acos(
                cos(radians({$latitude})) *
                cos(radians(latitude)) *
                cos(radians(longitude) - radians({$longitude})) +
                sin(radians({$latitude})) *
                sin(radians(latitude))
            ))
        ";

<<<<<<< HEAD
        if ($alias !== null) {
=======
        if (null !== $alias) {
>>>>>>> 5a14301c (.)
            $sql .= " AS {$alias}";
=======
     * @return \Illuminate\Contracts\Database\Query\Expression Espressione SQL per il calcolo della distanza
     */
    public function execute(float $latitude, float $longitude, ?string $alias = null): \Illuminate\Contracts\Database\Query\Expression
=======
<<<<<<< HEAD
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
>>>>>>> 71f31700 (.)
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
<<<<<<< HEAD
>>>>>>> f76ebe6 (.)
=======
=======
=======
>>>>>>> 492d6d3c (.)
=======
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
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
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
>>>>>>> 399f46d3 (.)
        }

        return DB::raw($sql);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> f76ebe6 (.)
=======
} 
=======
}
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
}
>>>>>>> 492d6d3c (.)
=======
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
>>>>>>> 399f46d3 (.)
