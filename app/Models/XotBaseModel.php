<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Modules\Xot\Models\Traits\HasXotFactory;
use Modules\Xot\Models\Traits\RelationX;
<<<<<<< HEAD
=======
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
use Modules\Xot\Traits\Updater;

/**
 * Class XotBaseModel.
 */
abstract class XotBaseModel extends EloquentModel
{
    use HasXotFactory;
    use RelationX;
<<<<<<< HEAD
=======
=======
abstract class XotBaseModel extends Model
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
    use Traits\HasXotFactory;
    use Traits\RelationX;

>>>>>>> cc7fb225 (.)
    // use Searchable;
>>>>>>> 5a14301c (.)
=======
abstract class XotBaseModel extends Model
{
    // use Searchable;
>>>>>>> 5a14301c (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
    // use Searchable;
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

<<<<<<< HEAD
    /** @var string */
    protected $connection = 'xot';
=======
    // protected $connection = 'xot';
>>>>>>> cc7fb225 (.)

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
<<<<<<< HEAD
=======
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
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
}
