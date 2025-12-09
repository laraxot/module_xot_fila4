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
=======
>>>>>>> 849568d9 (.)
 *
=======
 * 
>>>>>>> f76ebe6 (.)
<<<<<<< HEAD
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
=======
 *
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
 *
>>>>>>> ca9324a4 (.)
=======
 *
=======
 * 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
 *
>>>>>>> 43d67f21 (.)
=======
 *
=======
 * 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
 *
>>>>>>> 5842a556 (.)
=======
 *
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
 *
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
 *
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 849568d9 (.)
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
>>>>>>> 399f46d3 (.)
=======
 *
>>>>>>> ca9324a4 (.)
=======
 *
=======
 * 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
 *
>>>>>>> 43d67f21 (.)
=======
 *
=======
 * 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71f31700 (.)
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
     * @return Expression Espressione SQL per il calcolo della distanza
     */
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
     * @return Expression Espressione SQL per il calcolo della distanza
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @return Expression Espressione SQL per il calcolo della distanza
     */
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
     * @param float $latitude Latitudine del punto di riferimento
     * @param float $longitude Longitudine del punto di riferimento
     * @param string|null $alias Alias per l'espressione (opzionale)
<<<<<<< HEAD
     * @return Expression Espressione SQL per il calcolo della distanza
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @return Expression Espressione SQL per il calcolo della distanza
     */
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
    public function execute(
        float $latitude,
        float $longitude,
        null|string $alias = null,
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

        if (null !== $alias) {
            $sql .= " AS {$alias}";
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
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
=======
>>>>>>> 399f46d3 (.)
     * @return \Illuminate\Contracts\Database\Query\Expression Espressione SQL per il calcolo della distanza
     */
    public function execute(float $latitude, float $longitude, ?string $alias = null): \Illuminate\Contracts\Database\Query\Expression
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> d86d643a (.)
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> e59778ae (.)
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> ed734516 (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> d86d643a (.)
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> e59778ae (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> f76ebe6 (.)
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
        }

        return DB::raw($sql);
    }
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
=======
>>>>>>> 849568d9 (.)
}
=======
} 
>>>>>>> f76ebe6 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 71f31700 (.)
} 
=======
}
>>>>>>> c84488b (.)
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
}
>>>>>>> 492d6d3c (.)
=======
}
=======
=======
}
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
}
>>>>>>> ca9324a4 (.)
=======
}
=======
} 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
}
>>>>>>> 43d67f21 (.)
=======
}
=======
} 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
}
>>>>>>> 5842a556 (.)
=======
}
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
}
=======
} 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
}
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 71f31700 (.)
=======
}
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 399f46d3 (.)
=======
}
>>>>>>> ca9324a4 (.)
=======
}
=======
} 
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
}
>>>>>>> 43d67f21 (.)
=======
}
=======
} 
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
