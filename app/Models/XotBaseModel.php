<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Modules\Xot\Models\Traits\HasXotFactory;
use Modules\Xot\Models\Traits\RelationX;
// ---- Traits ----
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
// ---- Traits ----
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
// ---- Traits ----
// ---- Traits ----
=======
<<<<<<< HEAD
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
=======
// ---- Traits ----
>>>>>>> 71586de2 (.)
=======
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Modules\Xot\Traits\Updater;

/**
 * Class XotBaseModel.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
abstract class XotBaseModel extends EloquentModel
{
    use HasXotFactory;
    use RelationX;
<<<<<<< HEAD
    // use Searchable;
abstract class XotBaseModel extends Model
{
    // use Searchable;
abstract class XotBaseModel extends Model
{
    // use Searchable;
abstract class XotBaseModel extends Model
{
    // use Searchable;
    // use Searchable;
    // //use Cachable;
abstract class XotBaseModel extends Model
{
    // use Searchable;
    // use Searchable;
    // //use Cachable;
=======
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
    // use Searchable;
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
=======
abstract class XotBaseModel extends Model
{
    // use Searchable;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
    /** @var string */
    protected $connection = 'xot';
=======
    // protected $connection = 'xot';
>>>>>>> cc7fb225 (.)
>>>>>>> laraxot/develop

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'int';
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/develop
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/develop
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
    // protected $connection = 'xot';

    /** @var list<string> */
    protected $fillable = ['id'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
    /** @return array<string, string> */
=======
<<<<<<< HEAD
<<<<<<< HEAD
    /** @return array<string, string> */
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
    /**
     * The accessors to append to the model's array form.
     *
     * @var list<string>
     */
    protected $appends = [];

    /** @return array<string, class-string|string> */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
<<<<<<< HEAD
            'verified_at' => 'datetime',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'verified_at' => 'datetime',
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> laraxot/develop
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
<<<<<<< HEAD
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
=======
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
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 71586de2 (.)
=======
    /** @var int */
    protected $perPage = 30;
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
}
