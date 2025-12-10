<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Modules\Xot\Models\Traits\HasXotFactory;
use Modules\Xot\Models\Traits\RelationX;
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// ---- Traits ----
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
<<<<<<< HEAD
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
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
// ---- Traits ----
>>>>>>> 71586de2 (.)
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
>>>>>>> 5a14301c (.)
=======
// ---- Traits ----
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
use Modules\Xot\Traits\Updater;

/**
 * Class XotBaseModel.
 */
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    use Traits\HasXotFactory;
    use Traits\RelationX;

<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
>>>>>>> cc7fb225 (.)
    // use Searchable;
>>>>>>> 5a14301c (.)
=======
abstract class XotBaseModel extends Model
{
    use Traits\HasXotFactory;
    use Traits\RelationX;

    // use Searchable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    // use Searchable;
>>>>>>> 53d6a6ba (.)
=======
    // //use Cachable;
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
abstract class XotBaseModel extends Model
{
    // use Searchable;
>>>>>>> 5a14301c (.)
=======
    // use Searchable;
>>>>>>> 53d6a6ba (.)
=======
    // //use Cachable;
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

=======
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

>>>>>>> b7afadf9 (.)
    // protected $connection = 'xot';

    /** @var list<string> */
    protected $fillable = ['id'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    /** @return array<string, string> */
=======
=======
>>>>>>> b7afadf9 (.)
    /**
     * The accessors to append to the model's array form.
     *
     * @var list<string>
     */
    protected $appends = [];

    /** @return array<string, class-string|string> */
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD
            'verified_at' => 'datetime',
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 5a14301c (.)
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 71586de2 (.)
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 5a14301c (.)
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
}
