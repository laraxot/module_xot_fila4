<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Model Extra.
 *
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @property SchemalessAttributes $extra_attributes
 * @method static Builder|BaseModel disableCache()
 * @method static ExtraFactory factory($count = null, $state = [])
 * @method static \Illuminate\Contracts\Database\Eloquent\Builder|Extra newModelQuery()
 * @method static Builder|Extra newQuery()
 * @method static Builder|Extra query()
 * @method static Builder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @method static Builder|Extra withExtraAttributes()
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static Builder|Extra whereCreatedAt($value)
 * @method static Builder|Extra whereCreatedBy($value)
 * @method static Builder|Extra whereDeletedAt($value)
 * @method static Builder|Extra whereDeletedBy($value)
 * @method static Builder|Extra whereExtraAttributes($value)
 * @method static Builder|Extra whereId($value)
 * @method static Builder|Extra whereModelId($value)
 * @method static Builder|Extra whereModelType($value)
 * @method static Builder|Extra whereUpdatedAt($value)
 * @method static Builder|Extra whereUpdatedBy($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel       disableCache()
 * @method static \Modules\Xot\Database\Factories\ExtraFactory          factory($count = null, $state = [])
 * @method static \Illuminate\Contracts\Database\Eloquent\Builder|Extra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extra           newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extra           query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel       withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra           withExtraAttributes()
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereExtraAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extra whereUpdatedBy($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperExtra
 * @mixin \Eloquent
 */
class Extra extends BaseExtra
{
}
