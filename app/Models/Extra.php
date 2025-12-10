<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

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
>>>>>>> laraxot/develop
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Spatie\SchemalessAttributes\SchemalessAttributes;
<<<<<<< HEAD
=======
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;
<<<<<<< HEAD

/**
 * Model Extra.
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
 * Model Extra.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
 * @property string $id
 * @property string $model_type
 * @property string $model_id
 * @property SchemalessAttributes|null $extra_attributes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static ExtraFactory factory($count = null, $state = [])
 * @method static Builder<static>|Extra newModelQuery()
 * @method static Builder<static>|Extra newQuery()
 * @method static Builder<static>|Extra query()
 * @method static Builder<static>|Extra whereCreatedAt($value)
 * @method static Builder<static>|Extra whereCreatedBy($value)
 * @method static Builder<static>|Extra whereDeletedAt($value)
 * @method static Builder<static>|Extra whereDeletedBy($value)
 * @method static Builder<static>|Extra whereExtraAttributes($value)
 * @method static Builder<static>|Extra whereId($value)
 * @method static Builder<static>|Extra whereModelId($value)
 * @method static Builder<static>|Extra whereModelType($value)
 * @method static Builder<static>|Extra whereUpdatedAt($value)
 * @method static Builder<static>|Extra whereUpdatedBy($value)
 * @method static Builder<static>|Extra withExtraAttributes()
 *
 * @mixin \Eloquent
 */
final class Extra extends BaseExtra {}
<<<<<<< HEAD
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property SchemalessAttributes $extra_attributes
 *
 *
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @property SchemalessAttributes $extra_attributes
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 5a14301c (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @method static Builder|BaseModel disableCache()
 * @method static ExtraFactory factory($count = null, $state = [])
 * @method static \Illuminate\Contracts\Database\Eloquent\Builder|Extra newModelQuery()
 * @method static Builder|Extra newQuery()
 * @method static Builder|Extra query()
 * @method static Builder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @method static Builder|Extra withExtraAttributes()
<<<<<<< HEAD
 *
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 5a14301c (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
<<<<<<< HEAD
 * @property string|null                     $deleted_by
 * @property string|null                     $deleted_by
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string|null                     $deleted_by
=======
 * @property string|null $deleted_by
 *
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
 * @property string|null                     $deleted_by
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
=======
 * @property string|null                     $deleted_by
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperExtra
 * @mixin IdeHelperExtra
 *
 * @mixin IdeHelperExtra
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperExtra
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperExtra
=======
 *
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperExtra
>>>>>>> 53d6a6ba (.)
=======
 *
 * @mixin IdeHelperExtra
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> laraxot/develop
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
<<<<<<< HEAD
 * @mixin IdeHelperExtra
 * @mixin IdeHelperExtra
 * @mixin IdeHelperExtra
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperExtra
>>>>>>> 53d6a6ba (.)
=======
 * @mixin IdeHelperExtra
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
 * @mixin IdeHelperExtra
>>>>>>> 71586de2 (.)
=======
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperExtra
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
class Extra extends BaseExtra
{
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
