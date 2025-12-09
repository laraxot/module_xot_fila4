<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Error;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
use ValueError;
use Error;
use Exception;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class SafeArrayByModelCastAction
{
    use QueueableAction;

    /**
     * @return array<string, mixed>
     */
    public function execute(Model $model): array
    {
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
            return $this->safeExecute($model);
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
    public function safeExecute(Model $model): array
    {
        $data = [];
        foreach ($model->getAttributes() as $key => $value) {
            try {
                $data[$key] = $model->$key;

                /** @phpstan-ignore-next-line */
            } catch (ValueError|Error $e) {
            }
        }

        return $data;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======


<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======


>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======

=======
>>>>>>> b93ef594b4 (.)
    public function safeExecute(Model $model): array
    {
        $data = [];
        foreach ($model->getAttributes() as $key => $value) {
            try {
                $data[$key] = $model->$key;

                /** @phpstan-ignore-next-line */
            } catch (ValueError|Error $e) {
            }
        }
<<<<<<< HEAD
        
        return $data;;
>>>>>>> a12f125f4a (.)
=======

        return $data;


>>>>>>> b93ef594b4 (.)
=======

    public function safeExecute(Model $model): array
    {
        $data=[];
        foreach($model->getAttributes() as $key=>$value){
            try{
                $data[$key]=$model->$key;
                /** @phpstan-ignore-next-line */
            }catch(\ValueError|\Error $e){
                
            }
        }
        
        return $data;;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======


>>>>>>> 5a14301c (.)
    }
}
