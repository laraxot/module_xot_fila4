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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Database\Factories\ExtraFactory;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;

/**
 * Model Extra.
 *
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
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property SchemalessAttributes $extra_attributes
 *
 * @method static Builder|BaseModel disableCache()
 * @method static ExtraFactory factory($count = null, $state = [])
 * @method static \Illuminate\Contracts\Database\Eloquent\Builder|Extra newModelQuery()
 * @method static Builder|Extra newQuery()
 * @method static Builder|Extra query()
 * @method static Builder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @method static Builder|Extra withExtraAttributes()
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
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
 * @mixin IdeHelperExtra
 *
 * @mixin IdeHelperExtra
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperExtra
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperExtra
=======
>>>>>>> 5cf46378 (.)
 *
 * @mixin IdeHelperExtra
<<<<<<< HEAD
 * @mixin IdeHelperExtra
 * @mixin IdeHelperExtra
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperExtra
=======
>>>>>>> 53d6a6ba (.)
=======
 *
<<<<<<< HEAD
 * @mixin IdeHelperExtra
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
 * @mixin \Eloquent
 */
class Extra extends BaseExtra
{
}
