<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Cast;

use Error;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;
use ValueError;
use ValueError;
use Error;
use Exception;
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
<<<<<<< HEAD
        try {
        try {
            /** @var array<string, mixed> */
            $attributes = $model->attributesToArray();

            return $attributes;
        } catch (ValueError|Error|Exception $e) {
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
<<<<<<< HEAD
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
        try{
            return $model->attributesToArray(); 
        }catch(\ValueError|\Error|\Exception $e){
=======
=======
        try{
            return $model->attributesToArray(); 
        }catch(ValueError|Error|Exception $e){
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        try {
            return $model->attributesToArray();
        } catch (ValueError|Error|Exception $e) {
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            return $this->safeExecute($model);
        }
    }

<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
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
    /**
     * @return array<string, mixed>
     */
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
=======


>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
=======


>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)

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
>>>>>>> 399f46d3 (.)
=======
=======

>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    public function safeExecute(Model $model): array
    {
        $data=[];
        foreach($model->getAttributes() as $key=>$value){
            try{
                $data[$key]=$model->$key;
                /** @phpstan-ignore-next-line */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
            }catch(\ValueError|\Error $e){
            }catch(ValueError|Error $e){
            }catch(\ValueError|\Error $e){
            }catch(ValueError|Error $e){
            }catch(\ValueError|\Error $e){
            }catch(ValueError|Error $e){
            }catch(\ValueError|\Error $e){
<<<<<<< HEAD
            }catch(ValueError|Error $e){
            }catch(\ValueError|\Error $e){
            }catch(ValueError|Error $e){
            }catch(ValueError|Error $e){
            }catch(ValueError|Error $e){
            }catch(\ValueError|\Error $e){
            }catch(ValueError|Error $e){
            }catch(\ValueError|\Error $e){
            }catch(ValueError|Error $e){
            }catch(ValueError|Error $e){
            }catch(ValueError|Error $e){
            }catch(\ValueError|\Error $e){
=======
>>>>>>> 399f46d3 (.)
=======
            }catch(ValueError|Error $e){
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
                
            }
        }
        
        return $data;;
<<<<<<< HEAD
=======
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
>>>>>>> 2f3197ab (.)








<<<<<<< HEAD
<<<<<<< HEAD
















=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======


>>>>>>> 3310e9c6 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
    }
}
