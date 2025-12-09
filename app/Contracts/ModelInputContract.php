<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Modules\Xot\Contracts\ModelContract.
 *
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @property PivotContract|null $pivot
 * @property string $tennant_name
 * @property string $mail_subject
 * @property string $mail_body
 * @property string $sms_from
 * @property string $mobile_phone
 * @property string $sms_body
 * @property string $sms_count
 *
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @method BelongsTo user()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
interface ModelInputContract
{
}
=======
interface ModelInputContract {}
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
interface ModelInputContract
{
}
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
interface ModelInputContract {}
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
