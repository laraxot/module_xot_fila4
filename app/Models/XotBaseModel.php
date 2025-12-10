<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
<<<<<<< HEAD
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
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// ---- Traits ----
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Modules\Xot\Models\Traits\HasXotFactory;
use Modules\Xot\Models\Traits\RelationX;
>>>>>>> 551c768c4 (.)
use Modules\Xot\Traits\Updater;

/**
 * Class XotBaseModel.
 */
abstract class XotBaseModel extends EloquentModel
{
    use HasXotFactory;
    use RelationX;
<<<<<<< HEAD
    // use Searchable;
abstract class XotBaseModel extends Model
{
    use Traits\HasXotFactory;
    use Traits\RelationX;

    // use Searchable;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5cf46378 (.)
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
abstract class XotBaseModel extends Model
{
    // use Searchable;
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
    // //use Cachable;
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

<<<<<<< HEAD
=======
    /** @var string */
    protected $connection = 'xot';
>>>>>>> 551c768c4 (.)

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'int';
<<<<<<< HEAD
<<<<<<< HEAD
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

=======
=======
>>>>>>> 5cf46378 (.)
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

    // protected $connection = 'xot';

    /** @var list<string> */
    protected $fillable = ['id'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /** @return array<string, string> */
=======
>>>>>>> 5cf46378 (.)
    /**
     * The accessors to append to the model's array form.
     *
     * @var list<string>
     */
    protected $appends = [];

    /** @return array<string, class-string|string> */
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
    /** @return array<string, string> */
>>>>>>> 551c768c4 (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'verified_at' => 'datetime',
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            'verified_at' => 'datetime',
>>>>>>> 551c768c4 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
    /** @var int */
    protected $perPage = 30;
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
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
}
