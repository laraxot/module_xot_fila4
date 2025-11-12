<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class XotBaseUuidModel.
 *
 * Base class for models using UUIDs.
 */
abstract class XotBaseUuidModel extends Model
{
<<<<<<< HEAD
        /** @var bool */
=======
    /** @var bool */
>>>>>>> f1570712 (.)
    public $incrementing = false;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;
}
