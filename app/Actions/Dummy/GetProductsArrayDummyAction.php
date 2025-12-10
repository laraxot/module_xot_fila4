<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Dummy;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
=======
<<<<<<< HEAD
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
=======
     * @throws \Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public function execute(): array
    {
        // API
        Assert::isArray($products = Http::get('https://dummyjson.com/products')->json());
        Assert::isArray($products['products']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // filtering some attributes
        return Arr::map($products['products'], function ($item) {
            // Verifichiamo che $item sia un array prima di usare Arr::only
            if (! is_array($item)) {
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        // filtering some attributes
        $products = Arr::map($products['products'], function ($item) {
            // Verifichiamo che $item sia un array prima di usare Arr::only
            if (!is_array($item)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                return []; // Restituiamo un array vuoto se $item non è un array
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

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
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

        return $products;
>>>>>>> 5a14301c (.)
=======

        return $products;
>>>>>>> 5a14301c (.)
=======

        return $products;
>>>>>>> 5a14301c (.)
=======

        return $products;
>>>>>>> 5a14301c (.)
=======

        return $products;
>>>>>>> 5a14301c (.)
=======

        return $products;
>>>>>>> 5a14301c (.)
    }
}
