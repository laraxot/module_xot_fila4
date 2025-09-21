<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

<<<<<<< HEAD
use ValueError;
use Error;
use Exception;
=======
<<<<<<< HEAD
use ValueError;
use Error;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Doctrine\DBAL\Schema\Index;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class SafeArrayByModelCastAction
{
    use QueueableAction;

    /**
     * @return array<string, mixed>
     */
    public function execute(Model $model): array
    {
<<<<<<< HEAD
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
=======
        try{
            return $model->attributesToArray(); 
        }catch(ValueError|Error|Exception $e){
>>>>>>> a12f125f4a (.)
=======
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
>>>>>>> b93ef594b4 (.)
=======
        try{
            return $model->attributesToArray(); 
        }catch(\ValueError|\Error|\Exception $e){
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return $this->safeExecute($model);
        }
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
    }
}
