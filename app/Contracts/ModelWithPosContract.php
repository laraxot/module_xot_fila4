<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Spatie\ModelStatus\Status;

/**
 * Modules\Xot\Contracts\ModelWithPosContract.
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $post_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $title
 * @property PivotContract|null $pivot
 * @property string $tennant_name
 * @property UserContract|null $user
 * @property string $status
 * @property Collection|array<Status> $statuses
 * @property int|null $statuses_count
 * @property int|null $pos
 *
 * @method mixed getKey()
 * @method string getRouteKey()
 * @method string getRouteKeyName()
 * @method string getTable()
 * @method mixed with($array)
 * @method array getFillable()
 * @method mixed fill($array)
 * @method mixed getConnection()
 * @method mixed update($params)
 * @method mixed delete()
 * @method mixed detach($params)
 * @method mixed attach($params)
 * @method mixed save($params)
 * @method array treeLabel()
 * @method array treeSons()
 * @method array toArray()
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int                      $id
 * @property int|null                 $user_id
 * @property string|null              $post_type
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property string|null              $created_by
 * @property string|null              $updated_by
 * @property string|null              $title
 * @property PivotContract|null       $pivot
 * @property string $tennant_name
 * @property UserContract|null        $user
 * @property string $status
 * @property Collection|array<Status> $statuses
 * @property int|null                 $statuses_count
 * @property int|null                 $pos
 *
 * @method mixed     getKey()
 * @method string    getRouteKey()
 * @method string    getRouteKeyName()
 * @method string    getTable()
 * @method mixed     with($array)
 * @method array     getFillable()
 * @method mixed     fill($array)
 * @method mixed     getConnection()
 * @method mixed     update($params)
 * @method mixed     delete()
 * @method mixed     detach($params)
 * @method mixed     attach($params)
 * @method mixed     save($params)
 * @method array     treeLabel()
 * @method array     treeSons()
 * @method array     toArray()
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
 * @method BelongsTo user()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract {}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
interface ModelWithPosContract {}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
interface ModelWithPosContract {}
=======
interface ModelWithPosContract
{
}
>>>>>>> 5a14301c (.)
=======
interface ModelWithPosContract
{
}
=======
interface ModelWithPosContract
{
}
>>>>>>> 399f46d3 (.)
=======
interface ModelWithPosContract
{
}
>>>>>>> 17684f52 (.)
=======
interface ModelWithPosContract
{
}
>>>>>>> 399f46d3 (.)
=======
interface ModelWithPosContract
{
}
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
interface ModelWithPosContract
{
}
=======
interface ModelWithPosContract {}
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
interface ModelWithPosContract
{
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
interface ModelWithPosContract {}
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
interface ModelWithPosContract
{
}
>>>>>>> ca9324a4 (.)
=======
interface ModelWithPosContract
{
}
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
interface ModelWithPosContract {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
interface ModelWithPosContract {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
interface ModelWithPosContract
{
}
=======
interface ModelWithPosContract {}
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
interface ModelWithPosContract
{
}
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
<<<<<<< HEAD
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
interface ModelWithPosContract
{
}
interface ModelWithPosContract {}
interface ModelWithPosContract
{
}
=======
>>>>>>> ca9324a4 (.)
=======
interface ModelWithPosContract
{
}
=======
interface ModelWithPosContract {}
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
interface ModelWithPosContract
{
}
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
interface ModelWithPosContract
{
}
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
interface ModelWithPosContract
{
}
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
interface ModelWithPosContract {}
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
interface ModelWithPosContract {}
>>>>>>> 551c768c4 (.)
=======
interface ModelWithPosContract {}
>>>>>>> 414a4ffcb (.)
