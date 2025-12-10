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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
use ValueError;
use ValueError;
<<<<<<< HEAD
use ValueError;
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use ValueError;
use ValueError;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
use ValueError;
=======
>>>>>>> f1d4085 (.)
=======
use ValueError;
>>>>>>> 73eab74 (.)
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

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
>>>>>>> 73eab74 (.)
        try {
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
        } catch (ValueError $e) {
            $data = [];
            foreach ($model->getAttributes() as $key => $value) {
                try {
                    $data[$key] = $this->$key;

                    /** @phpstan-ignore-next-line */
                } catch (ValueError $e) {
                }
            }
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

        try{
            return $model->attributesToArray(); //"" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
        }catch(\ValueError $e){
            $data=[];
            foreach($model->getAttributes() as $key=>$value){
                try{
                    $data[$key]=$this->$key;
                    /** @phpstan-ignore-next-line */
                }catch(\ValueError $e){
                    
                }
            }
           
            return $data;
        }
    }
}
