<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

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
=======
use ValueError;
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
<<<<<<< HEAD
use ValueError;
=======
>>>>>>> f1d4085 (.)
=======
use ValueError;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8b18e4bff (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
use ValueError;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
=======
use ValueError;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
        try {
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
        try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
=======
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
>>>>>>> 5a14301c (.)
=======
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
>>>>>>> 5a14301c (.)
=======
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)
        } catch (ValueError $e) {
            $data = [];
            foreach ($model->getAttributes() as $key => $value) {
                try {
                    $data[$key] = $value;
                } catch (ValueError $e) {
                    // Skip attributes that cause ValueError
                }
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

            return $data;
        }
    }
}