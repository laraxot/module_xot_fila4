<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

// use Laravel\Scout\Searchable;
// ---------- traits
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 5cf46378 (.)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Traits\Updater;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

/**
 * Class BaseModel.
 */
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
abstract class BaseModel extends XotBaseModel
=======
>>>>>>> 5cf46378 (.)
abstract class BaseModel extends Model
{
    use HasFactory;
=======
    protected $connection = 'xot';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)

    // use Searchable;
    // //use Cachable;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

    protected $connection = 'xot';
abstract class BaseModel extends Model
abstract class BaseModel extends XotBaseModel
abstract class BaseModel extends Model
abstract class BaseModel extends Model
abstract class BaseModel extends XotBaseModel
abstract class BaseModel extends Model
abstract class BaseModel extends Model
=======
abstract class BaseModel extends XotBaseModel
>>>>>>> b7afadf9 (.)
{
    protected $connection = 'xot';
<<<<<<< HEAD
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)

    /** @var list<string> */
    protected $fillable = ['id'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory(): Factory
    {
        // return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
        return app(GetFactoryAction::class)->execute(static::class);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    /** @return array<string, class-string|string> */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
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



























=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> cc1bbf15 (.)
=======
>>>>>>> e769883c (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
<<<<<<< HEAD
>>>>>>> 9f27fc9a6 (.)
=======
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
<<<<<<< HEAD
>>>>>>> 3c8d62b79 (.)
=======
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3ae5e299 (.)
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======

>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> 6a1fe786 (.)
<<<<<<< HEAD
>>>>>>> cc1bbf15 (.)
=======
=======
>>>>>>> 34579462 (.)
<<<<<<< HEAD
>>>>>>> e769883c (.)
=======
=======
>>>>>>> b3cc10f7 (.)
=======
=======

>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
<<<<<<< HEAD
>>>>>>> 2bad128c (.)
=======
=======
>>>>>>> ba1d49f3 (.)
<<<<<<< HEAD
>>>>>>> 59259b43 (.)
=======
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 1c4bb8cf (.)
<<<<<<< HEAD
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> cafe8bed (.)
=======
=======

>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
=======
>>>>>>> b956ebe0 (.)
<<<<<<< HEAD
>>>>>>> aba62c408 (.)
=======
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> a62d7646 (.)
<<<<<<< HEAD
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> d79d36e0 (.)
<<<<<<< HEAD
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5cd593a5 (.)
=======
=======

>>>>>>> 6cba4fe (.)
>>>>>>> cc52d333 (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
=======
>>>>>>> 0123915b (.)
<<<<<<< HEAD
>>>>>>> 5cb992cc6 (.)
=======
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> 099ab7a0 (.)
<<<<<<< HEAD
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 96276392 (.)
<<<<<<< HEAD
>>>>>>> f7e6113c6 (.)
=======
=======
>>>>>>> 3baa48bd (.)
=======
=======

>>>>>>> 6cba4fe (.)
>>>>>>> 90d386aa (.)
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
=======
=======
>>>>>>> 4fb9bc4b (.)
<<<<<<< HEAD
>>>>>>> 3c8d62b79 (.)
=======
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> 6d1255a8 (.)
<<<<<<< HEAD
>>>>>>> efbf15eba (.)
=======
=======
>>>>>>> 3ae5e299 (.)
>>>>>>> 9f27fc9a6 (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
<<<<<<< HEAD
    protected $connection = 'xot';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
}
