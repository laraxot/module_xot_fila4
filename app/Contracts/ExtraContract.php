<?php

/**
 * @see https://github.com/buyersclub/laravel-eloquent-model-interface/blob/master/src/EloquentModelInterface.php
 */

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\SchemalessAttributes\SchemalessAttributes;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

/**
 * Modules\Xot\Contracts\ExtraContract.
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @property SchemalessAttributes $extra_attributes
 *
 * @method static Builder|ExtraContract newModelQuery()
 * @method static Builder|ExtraContract newQuery()
 * @method static Builder|ExtraContract query()
 * @method static Builder|ExtraContract withExtraAttributes()
<<<<<<< HEAD
=======
=======
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract withExtraAttributes()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $id
=======
 * @property int         $id
>>>>>>> 5a14301c (.)
=======
 * @property int         $id
>>>>>>> 5a14301c (.)
 * @property string $model_type
 * @property string $model_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @method static Builder|ExtraContract whereCreatedAt($value)
 * @method static Builder|ExtraContract whereCreatedBy($value)
 * @method static Builder|ExtraContract whereDeletedAt($value)
 * @method static Builder|ExtraContract whereDeletedBy($value)
 * @method static Builder|ExtraContract whereExtraAttributes($value)
 * @method static Builder|ExtraContract whereId($value)
 * @method static Builder|ExtraContract whereModelId($value)
 * @method static Builder|ExtraContract whereModelType($value)
 * @method static Builder|ExtraContract whereUpdatedAt($value)
 * @method static Builder|ExtraContract whereUpdatedBy($value)
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereExtraAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraContract whereUpdatedBy($value)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
interface ExtraContract {}
=======
interface ExtraContract
{
}
>>>>>>> 5a14301c (.)
=======
interface ExtraContract
{
}
>>>>>>> 5a14301c (.)
