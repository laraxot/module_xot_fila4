<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Modules\Xot\Contracts\ModelContract.
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
 * @property int                $id
 * @property int|null           $user_id
 * @property string|null        $post_type
 * @property Carbon|null        $created_at
 * @property Carbon|null        $updated_at
 * @property string|null        $created_by
 * @property string|null        $updated_by
 * @property string|null        $title
 * @property PivotContract|null $pivot
 * @property string $tennant_name
 * @property UserContract|null  $user
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
 * @method BelongsTo user()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
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
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract {}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
interface ModelWithUserContract {}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
interface ModelWithUserContract {}
=======
interface ModelWithUserContract
{
}
>>>>>>> 5a14301c (.)
=======
interface ModelWithUserContract
{
}
=======
interface ModelWithUserContract
{
}
>>>>>>> 399f46d3 (.)
=======
interface ModelWithUserContract
{
}
>>>>>>> 17684f52 (.)
=======
interface ModelWithUserContract
{
}
>>>>>>> 399f46d3 (.)
=======
interface ModelWithUserContract
{
}
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
interface ModelWithUserContract
{
}
=======
interface ModelWithUserContract {}
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
interface ModelWithUserContract
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
interface ModelWithUserContract {}
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
interface ModelWithUserContract
{
}
>>>>>>> ca9324a4 (.)
=======
interface ModelWithUserContract
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
interface ModelWithUserContract {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
interface ModelWithUserContract {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
interface ModelWithUserContract
{
}
=======
interface ModelWithUserContract {}
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
interface ModelWithUserContract
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
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
<<<<<<< HEAD
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
interface ModelWithUserContract
{
}
interface ModelWithUserContract {}
interface ModelWithUserContract
{
}
=======
>>>>>>> ca9324a4 (.)
=======
interface ModelWithUserContract
{
}
=======
interface ModelWithUserContract {}
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
interface ModelWithUserContract
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
interface ModelWithUserContract
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
interface ModelWithUserContract
{
}
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
interface ModelWithUserContract {}
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
interface ModelWithUserContract {}
>>>>>>> 551c768c4 (.)
