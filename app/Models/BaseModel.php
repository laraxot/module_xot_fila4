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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 53d6a6ba (.)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Traits\Updater;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> cc7fb225 (.)
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
>>>>>>> 53d6a6ba (.)
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 8b18e4bff (.)

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 8b18e4bff (.)
abstract class BaseModel extends XotBaseModel
=======
abstract class BaseModel extends Model
>>>>>>> 53d6a6ba (.)
{
    use HasFactory;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
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
=======
>>>>>>> 53d6a6ba (.)
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)

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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> 1c4bb8cf (.)
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> 6a1fe786 (.)
=======
>>>>>>> 34579462 (.)
=======
>>>>>>> b3cc10f7 (.)
=======
=======

>>>>>>> 6cba4fe (.)
>>>>>>> 88e35986 (.)
=======
>>>>>>> ba1d49f3 (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
=======

>>>>>>> 6cba4fe (.)
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> b956ebe0 (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
}
