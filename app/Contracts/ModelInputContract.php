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
 * @property string|null $name
 * @property string|null $type
 * @property mixed $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $title
 * @property bool $is_reclamed
 * @property bool $table_enable
<<<<<<< HEAD
 * @property int                $id
 * @property int|null           $user_id
 * @property string|null        $name
 * @property string|null        $type
 * @property mixed              $value
 * @property Carbon|null        $created_at
 * @property Carbon|null        $updated_at
 * @property string|null        $created_by
 * @property string|null        $updated_by
 * @property string|null        $title
 * @property bool               $is_reclamed
 * @property bool               $table_enable
=======
>>>>>>> 551c768c4 (.)
 * @property PivotContract|null $pivot
 * @property string $tennant_name
 * @property string $mail_subject
 * @property string $mail_body
 * @property string $sms_from
 * @property string $mobile_phone
 * @property string $sms_body
 * @property string $sms_count
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
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
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
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract {}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
interface ModelInputContract {}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract {}
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
interface ModelInputContract {}
=======
interface ModelInputContract
{
}
>>>>>>> 5a14301c (.)
=======
interface ModelInputContract
{
}
=======
interface ModelInputContract
{
}
>>>>>>> 399f46d3 (.)
=======
interface ModelInputContract
{
}
>>>>>>> 17684f52 (.)
=======
interface ModelInputContract
{
}
>>>>>>> 399f46d3 (.)
=======
interface ModelInputContract
{
}
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
interface ModelInputContract
{
}
=======
interface ModelInputContract {}
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
interface ModelInputContract
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
interface ModelInputContract {}
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
interface ModelInputContract
{
}
>>>>>>> ca9324a4 (.)
=======
interface ModelInputContract
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
interface ModelInputContract {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
interface ModelInputContract {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
interface ModelInputContract
{
}
=======
interface ModelInputContract {}
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
interface ModelInputContract
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
interface ModelInputContract
{
}
interface ModelInputContract
{
}
<<<<<<< HEAD
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract {}
interface ModelInputContract
{
}
interface ModelInputContract
{
}
interface ModelInputContract {}
interface ModelInputContract
{
}
=======
>>>>>>> ca9324a4 (.)
=======
interface ModelInputContract
{
}
=======
interface ModelInputContract {}
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
interface ModelInputContract
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
interface ModelInputContract
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
interface ModelInputContract
{
}
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
interface ModelInputContract {}
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
interface ModelInputContract {}
>>>>>>> 551c768c4 (.)
