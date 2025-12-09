<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Modules\Xot\Models\Traits\HasXotFactory;
use Modules\Xot\Models\Traits\RelationX;
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
>>>>>>> 5a14301c (.)
use Modules\Xot\Traits\Updater;

/**
 * Class XotBaseModel.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
abstract class XotBaseModel extends EloquentModel
{
    use HasXotFactory;
    use RelationX;
=======
abstract class XotBaseModel extends Model
{
    // use Searchable;
>>>>>>> 5a14301c (.)
=======
abstract class XotBaseModel extends Model
{
    // use Searchable;
>>>>>>> 5a14301c (.)
=======
abstract class XotBaseModel extends Model
{
    // use Searchable;
>>>>>>> 5a14301c (.)
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'xot';

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'int';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
            'verified_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 5a14301c (.)
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 5a14301c (.)
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 5a14301c (.)
}
