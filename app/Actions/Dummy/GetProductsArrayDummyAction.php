<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Dummy;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Exception;
use Illuminate\Http\Client\Response;
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
     * @throws Exception Generating Factory [factory_class] press [F5] to refresh page [__LINE__][__FILE__]
     */
    public function execute(): array
    {
        // API
        $response = Http::get('https://dummyjson.com/products');

<<<<<<< HEAD
=======
        // Ensure we have a Response, not Promise
        if ($response instanceof PromiseInterface) {
            $response = $response->wait();
        }

>>>>>>> 8ab8fd81a (.)
        /** @var Response $response */
        Assert::isArray($products = $response->json());
        Assert::isArray($products['products']);

        // filtering some attributes
        return Arr::map($products['products'], function ($item) {
            // Verifichiamo che $item sia un array prima di usare Arr::only
            if (! is_array($item)) {
                return []; // Restituiamo un array vuoto se $item non è un array
            }
<<<<<<< HEAD

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
=======
            
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
>>>>>>> f1d4085 (.)
        });
    }
}
