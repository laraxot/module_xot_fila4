<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;

class GetSicureArrayByModelAction
{
    use QueueableAction;

    /**
     * @return array<string, mixed>
     */
    public function execute(Model $model): array
    {
        try {
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
        } catch (ValueError $e) {
            $data = [];
            foreach ($model->getAttributes() as $key => $value) {
                try {
                    $data[$key] = $value;
                } catch (ValueError $e) {
                    // Skip attributes that cause ValueError
                }
            }

            return $data;
        }
    }
}