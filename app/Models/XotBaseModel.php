<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
>>>>>>> f1570712 (.)
use Modules\Xot\Traits\Updater;
// use Laravel\Scout\Searchable;
// ---- Traits ----
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Traits\HasXotFactory;

/**
 * Class XotBaseModel.
 */
abstract class XotBaseModel extends Model
{
    // use Searchable;
    use Updater;
    use HasXotFactory;

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
