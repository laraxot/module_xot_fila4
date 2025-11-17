<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Laravel\Scout\Searchable;
// ---- Traits ----
use Modules\Xot\Models\Traits\HasXotFactory;
use Modules\Xot\Traits\Updater;

/**
 * Class XotBaseModel.
 */
abstract class XotBaseModel extends Model
{
    use HasXotFactory;

    use SoftDeletes;
    // use Searchable;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var int */
    protected $perPage = 30;
}
