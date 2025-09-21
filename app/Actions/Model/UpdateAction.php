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
     * @param array<string, mixed> $data
     */
    public function execute(Model $model, array $data, array $rules): Model
    {
        $validator = Validator::make($data, $rules);
        $validator->validate();

        $keyName = $model->getKeyName();
        // $data['updated_by'] = authId();
        if (null === $model->getKey()) {
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
         *
         */
        $model = tap($model)->update($data);

        app(__NAMESPACE__ . '\\Update\RelationAction')->execute($model, $data);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop

         */
        $model = tap($model)->update($data);

        app(__NAMESPACE__.'\\Update\RelationAction')->execute($model, $data);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
         *
         */
        $model = tap($model)->update($data);

        app(__NAMESPACE__ . '\\Update\RelationAction')->execute($model, $data);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        // $msg = 'aggiornato! ['.$model->getKey().']!';

        // Session::flash('status', $msg); // .

        return $model;
    }
}
