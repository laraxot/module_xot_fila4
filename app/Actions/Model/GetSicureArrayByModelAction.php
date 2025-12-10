<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 2f3197ab (.)
use ValueError;
use ValueError;
<<<<<<< HEAD
use ValueError;
use ValueError;
<<<<<<< HEAD
=======
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
>>>>>>> 5cf46378 (.)
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
use ValueError;
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
use ValueError;
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use ValueError;
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
=======
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
>>>>>>> 551c768c4 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
>>>>>>> 414a4ffcb (.)

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
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
        try {
<<<<<<< HEAD
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
=======
=======
>>>>>>> 300ef70 (.)
        try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\SaluteOra\Enums\OccurrenceFrequencyEnum
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
>>>>>>> 551c768c4 (.)
=======
            return $model->attributesToArray(); // "" is not a valid backing value for enum Modules\<main module>\Enums\OccurrenceFrequencyEnum
>>>>>>> 414a4ffcb (.)
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
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)

=======
>>>>>>> ce6fc085 (.)
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
           
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 414a4ffcb (.)
            return $data;
        }
    }
}