<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Geo;

use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Support\Facades\DB;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per generare l'espressione SQL per il calcolo della distanza.
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 37de20a7 (.)
>>>>>>> b6e8012d (.)
 *
 * 
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
<<<<<<< HEAD
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b6e8012d (.)
 * 
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 1c4bb8cf (.)
 *
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
 *
 *
 * 
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 *
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 *
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
 *
 * 
 *
 *
 * 
 *
 *
=======
>>>>>>> 5842a556 (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
 *
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 37de20a7 (.)
<<<<<<< HEAD
>>>>>>> b6e8012d (.)
=======
=======
 * 
=======
 *
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
 *
>>>>>>> fb8add77 (.)
<<<<<<< HEAD
>>>>>>> e6745a06 (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
 *
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
 *
=======
 * 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
 *
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
 *
=======
 * 
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
 *
>>>>>>> 16dc7ab0 (.)
<<<<<<< HEAD
>>>>>>> 01502290 (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
 *
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
 *
>>>>>>> 53d6a6ba (.)
=======
=======
 *
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
 *
>>>>>>> 71586de2 (.)
=======
 *
=======
 * 
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
 *
>>>>>>> cafe8bed (.)
=======
 *
=======
 * 
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
 *
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
 *
=======
 * 
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
>>>>>>> b34b487c9 (.)
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
=======
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
>>>>>>> ce6fc085 (.)
     * @return Expression Espressione SQL per il calcolo della distanza
     */
<<<<<<< HEAD
=======
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
>>>>>>> 6ca989d8 (.)
=======
>>>>>>> e6745a06 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
<<<<<<< HEAD
>>>>>>> b34b487c9 (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
>>>>>>> 3849ae0e (.)
>>>>>>> b34b487c9 (.)
    public function execute(
        float $latitude,
        float $longitude,
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

            $sql .= " AS {$alias}";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
<<<<<<< HEAD
>>>>>>> b34b487c9 (.)
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
>>>>>>> c35986f4 (.)
>>>>>>> 6ca989d8 (.)
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 1c4bb8cf (.)
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
>>>>>>> 3849ae0e (.)
>>>>>>> b34b487c9 (.)
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
=======
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
>>>>>>> f76ebe6 (.)
=======
=======
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> 6ca989d8 (.)
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @return Expression Espressione SQL per il calcolo della distanza
     */
<<<<<<< HEAD
     * @return Expression Espressione SQL per il calcolo della distanza
     */
=======
>>>>>>> 399f46d3 (.)
=======
     * @return Expression Espressione SQL per il calcolo della distanza
     */
>>>>>>> 17684f52 (.)
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
>>>>>>> ce6fc085 (.)
     * @return Expression Espressione SQL per il calcolo della distanza
     */
     * @param float $latitude Latitudine del punto di riferimento
     * @param float $longitude Longitudine del punto di riferimento
     * @param string|null $alias Alias per l'espressione (opzionale)
     * @return Expression Espressione SQL per il calcolo della distanza
     */
<<<<<<< HEAD
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> fb8add77 (.)
<<<<<<< HEAD
>>>>>>> e6745a06 (.)
=======
=======
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
>>>>>>> 01502290 (.)
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
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
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
>>>>>>> 37de20a7 (.)
<<<<<<< HEAD
>>>>>>> b6e8012d (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
     * @return \Illuminate\Contracts\Database\Query\Expression Espressione SQL per il calcolo della distanza
     */
    public function execute(float $latitude, float $longitude, ?string $alias = null): \Illuminate\Contracts\Database\Query\Expression
    {
<<<<<<< HEAD
=======
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
>>>>>>> b6e8012d (.)
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
<<<<<<< HEAD
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
=======
>>>>>>> e59778ae (.)
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 37de20a7 (.)
<<<<<<< HEAD
>>>>>>> b6e8012d (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
=======
    public function execute(float $latitude, float $longitude, ?string $alias = null): Expression
    {
>>>>>>> 14edd1a1 (.)
>>>>>>> e9ee2ea9 (.)
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
=======
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> f76ebe6 (.)
>>>>>>> 37de20a7 (.)
<<<<<<< HEAD
>>>>>>> b6e8012d (.)
=======
=======
>>>>>>> c84488b (.)
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
>>>>>>> fb8add77 (.)
<<<<<<< HEAD
>>>>>>> e6745a06 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
>>>>>>> 16dc7ab0 (.)
<<<<<<< HEAD
>>>>>>> 01502290 (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
>>>>>>> b34b487c9 (.)
        }

        return DB::raw($sql);
    }
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 37de20a7 (.)
>>>>>>> b6e8012d (.)
}
} 
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> b6e8012d (.)
=======
=======
>>>>>>> c35986f4 (.)
>>>>>>> 6ca989d8 (.)
} 
}
<<<<<<< HEAD
=======
>>>>>>> c84488b (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 71f31700 (.)
=======
>>>>>>> 6ca989d8 (.)
}
}
}
}
}
}
}
}
}
}
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
=======
}
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
}
} 
}
}
} 
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
}
}
} 
}
}
}
}
}
}
}
} 
}
}
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
}
}
=======
=======
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 1c4bb8cf (.)
>>>>>>> 6be8834c2 (.)
}
} 
}
}
} 
}
}
} 
}
}
}
}
}
} 
}
}
} 
}
}
}
} 
}
}
}
}
}
} 
}
}
} 
}
}
}
} 
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
}
}
}
}
} 
}
}
} 
}
}
} 
}
}
}
}
}
} 
}
}
} 
}
}
}
}
}
}
}
} 
}
}
}
} 
}
}
} 
}
}
} 
}
}
}
} 
}
}
} 
}
}
}
} 
}
}
} 
}
}
} 
}
}
}
} 
}
}
} 
}
}
}
} 
}
}
}
}
}
} 
}
}
} 
}
}
} 
}
}
}
}
}
} 
}
}
} 
}
}
}
}
}
}
} 
}
}
}
} 
}
}
} 
}
}
} 
}
}
}
} 
}
}
} 
}
}
}
} 
}
}
} 
}
}
} 
}
}
}
} 
}
}
} 
}
}
}
} 
}
}
}
=======
>>>>>>> 5842a556 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
}
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 37de20a7 (.)
<<<<<<< HEAD
>>>>>>> b6e8012d (.)
=======
=======
>>>>>>> c35986f4 (.)
<<<<<<< HEAD
>>>>>>> 6ca989d8 (.)
=======
=======
}
>>>>>>> fb8add77 (.)
<<<<<<< HEAD
>>>>>>> e6745a06 (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
}
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
}
=======
} 
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
=======
}
>>>>>>> b7ea1cd1 (.)
<<<<<<< HEAD
>>>>>>> ecd5ec32 (.)
=======
=======
}
=======
} 
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
<<<<<<< HEAD
>>>>>>> e9ee2ea9 (.)
=======
=======
}
>>>>>>> 16dc7ab0 (.)
<<<<<<< HEAD
>>>>>>> 01502290 (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
}
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
}
>>>>>>> 53d6a6ba (.)
=======
=======
}
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
=======
}
>>>>>>> 71586de2 (.)
=======
}
=======
} 
>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
}
>>>>>>> 73eab74 (.)
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
}
>>>>>>> cafe8bed (.)
=======
}
=======
} 
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
<<<<<<< HEAD
>>>>>>> 88e745db5 (.)
=======
=======
}
>>>>>>> 76bec91a (.)
<<<<<<< HEAD
>>>>>>> 5e6aa70fe (.)
=======
=======
}
=======
} 
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
>>>>>>> b34b487c9 (.)
