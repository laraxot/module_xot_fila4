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
=======
>>>>>>> 37de20a7 (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 849568d9 (.)
 *
=======
 * 
>>>>>>> f76ebe6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
 *
=======
>>>>>>> 17684f52 (.)
=======
 *
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
 *
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
 *
>>>>>>> 5842a556 (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
 *
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 37de20a7 (.)
=======
 * 
=======
 *
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
=======
 *
>>>>>>> fb8add77 (.)
=======
>>>>>>> 17684f52 (.)
=======
 *
>>>>>>> 9db27d12 (.)
=======
 *
=======
 * 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
 *
>>>>>>> b7ea1cd1 (.)
=======
 *
=======
 * 
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
 *
>>>>>>> 16dc7ab0 (.)
=======
 *
>>>>>>> 5a14301c (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
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
=======
 *
>>>>>>> 5842a556 (.)
=======
 *
>>>>>>> 5a14301c (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
>>>>>>> 37de20a7 (.)
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
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 71f31700 (.)
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
<<<<<<< HEAD
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
     * @return Expression Espressione SQL per il calcolo della distanza
     */
>>>>>>> 17684f52 (.)
=======
     * @return Expression Espressione SQL per il calcolo della distanza
     */
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * @param float $latitude Latitudine del punto di riferimento
     * @param float $longitude Longitudine del punto di riferimento
     * @param string|null $alias Alias per l'espressione (opzionale)
<<<<<<< HEAD
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
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> fb8add77 (.)
=======
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 37de20a7 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 399f46d3 (.)
     * @return \Illuminate\Contracts\Database\Query\Expression Espressione SQL per il calcolo della distanza
     */
    public function execute(float $latitude, float $longitude, ?string $alias = null): \Illuminate\Contracts\Database\Query\Expression
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 37de20a7 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> 472bd9dc (.)
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> 14edd1a1 (.)
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
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> ed734516 (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> f76ebe6 (.)
>>>>>>> 37de20a7 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
=======
>>>>>>> fb8add77 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> 37de20a7 (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 849568d9 (.)
}
=======
} 
>>>>>>> f76ebe6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> c35986f4 (.)
=======
>>>>>>> 71f31700 (.)
=======
>>>>>>> 71f31700 (.)
} 
=======
}
>>>>>>> c84488b (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
}
=======
>>>>>>> 17684f52 (.)
=======
}
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
}
=======
} 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
}
>>>>>>> 5842a556 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
}
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 37de20a7 (.)
=======
>>>>>>> c35986f4 (.)
=======
}
>>>>>>> fb8add77 (.)
=======
>>>>>>> 17684f52 (.)
=======
}
>>>>>>> 9db27d12 (.)
=======
}
=======
} 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
}
>>>>>>> b7ea1cd1 (.)
=======
}
=======
} 
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
}
>>>>>>> 16dc7ab0 (.)
=======
}
>>>>>>> 5a14301c (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
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
=======
}
>>>>>>> 5842a556 (.)
=======
}
>>>>>>> 5a14301c (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
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
