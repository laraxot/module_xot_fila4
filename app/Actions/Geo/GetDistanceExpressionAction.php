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
 * 
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
     * @return Expression Espressione SQL per il calcolo della distanza
     */
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
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
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
>>>>>>> f1d4085 (.)
        }

        return DB::raw($sql);
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> f1d4085 (.)
