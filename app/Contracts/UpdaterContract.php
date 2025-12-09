<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
=======
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)

/**
 * Modules\Xot\Contracts\UpdaterContract.
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
<<<<<<< HEAD
 * @property string|null $created_by
 * @property string|null $updated_by
=======
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
>>>>>>> 5a14301c (.)
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
interface UpdaterContract {}
=======
interface UpdaterContract
{
}
>>>>>>> 5a14301c (.)
