<?php

declare(strict_types=1);

/**
 * --- usata ricorsivamente.
 */

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Session;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Facades\Validator;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class UpdateAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
>>>>>>> 5a14301c (.)
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        $validator = Validator::make($data, $rules);
        $validator->validate();

        $keyName = $model->getKeyName();
        // $data['updated_by'] = authId();
<<<<<<< HEAD
        if ($model->getKey() === null) {
=======
        if (null === $model->getKey()) {
>>>>>>> 5a14301c (.)
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
         */
        $model = tap($model)->update($data);

        app(__NAMESPACE__.'\\Update\RelationAction')->execute($model, $data);
=======
=======
>>>>>>> 3fbbf1f5 (.)
         *
         */
        $model = tap($model)->update($data);

        app(__NAMESPACE__ . '\\Update\RelationAction')->execute($model, $data);
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)

        // $msg = 'aggiornato! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
