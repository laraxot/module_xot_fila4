<?php

declare(strict_types=1);

/**
 * --- usata ricorsivamente.
 */

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class UpdateAction
{
    use QueueableAction;

    /**
     * @param  array<string, mixed>  $data
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        $validator = Validator::make($data, $rules);
        $validator->validate();

        $keyName = $model->getKeyName();
        // $data['updated_by'] = authId();
        if ($model->getKey() === null) {
            $key = $data[$keyName];
            /** @var array<string, mixed> $data */
            $data = collect($data)->except($keyName)->toArray();

            if (method_exists($model, 'withTrashed')) {
                $model = $model->withTrashed();
            }
            Assert::isInstanceOf($model, Model::class);
            $where = [$keyName => $key];
            $model = $model->firstOrCreate($where, $data);
        }

        /**
         * @phpstan-ignore method.notFound (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
         *
         */
        $model = tap($model)->update($data);

        app(__NAMESPACE__ . '\\Update\RelationAction')->execute($model, $data);
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d2b0a27 (.)
         */
        $model = tap($model)->update($data);

        app(__NAMESPACE__.'\\Update\RelationAction')->execute($model, $data);
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        // $msg = 'aggiornato! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
