<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Dummy;

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
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetProductsArrayDummyAction
{
    use QueueableAction;

    /**
     * Execute the function with the given model class.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
=======
<<<<<<< HEAD
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
=======
     * @throws \Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
>>>>>>> 091f883c (.)
     */
    public function execute(): array
    {
        // API
        Assert::isArray($products = Http::get('https://dummyjson.com/products')->json());
        Assert::isArray($products['products']);

        // filtering some attributes
        return Arr::map($products['products'], function ($item) {
            // Verifichiamo che $item sia un array prima di usare Arr::only
            if (! is_array($item)) {
        // filtering some attributes
        $products = Arr::map($products['products'], function ($item) {
            // Verifichiamo che $item sia un array prima di usare Arr::only
            if (!is_array($item)) {
                return []; // Restituiamo un array vuoto se $item non è un array
            }

            return Arr::only($item, [
                'id',
                'title',
                'description',
                'price',
                'rating',
                'brand',
                'category',
                'thumbnail',
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
            
            return Arr::only(
                $item,
                [
                    'id',
                    'title',
                    'description',
                    'price',
                    'rating',
                    'brand',
                    'category',
                    'thumbnail',
                ]
            );
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        });

        return $products;

        return $products;

        return $products;

        return $products;

        return $products;
    }
}
