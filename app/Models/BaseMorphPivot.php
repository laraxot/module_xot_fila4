<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
abstract class BaseMorphPivot extends MorphPivot
{
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'xot';

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'id',
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
        'post_id',
        'post_type',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'post_id', 'post_type',
=======
=======
        'post_id', 'post_type',
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
        'post_id',
        'post_type',
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
        'post_id',
        'post_type',
=======
        'post_id', 'post_type',
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
        'post_id',
        'post_type',
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
        'post_id',
        'post_type',
>>>>>>> 358ba79a7 (.)
=======
        'post_id',
        'post_type',
>>>>>>> f8f76a284 (.)
=======
        'post_id',
        'post_type',
>>>>>>> 5e6e0d054 (.)
=======
        'post_id',
        'post_type',
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'post_id',
        'post_type',
=======
        'post_id', 'post_type',
>>>>>>> a12f125f4a (.)
=======
        'post_id',
        'post_type',
>>>>>>> b93ef594b4 (.)
=======
        'post_id', 'post_type',
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
        'post_id',
        'post_type',
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
        'post_id',
        'post_type',
=======
        'post_id', 'post_type',
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
        'post_id',
        'post_type',
>>>>>>> aba62c408 (.)
=======
        'post_id',
        'post_type',
=======
        'post_id', 'post_type',
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
        'post_id',
        'post_type',
>>>>>>> 5cb992cc6 (.)
=======
        'post_id',
        'post_type',
=======
        'post_id', 'post_type',
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
        'post_id',
        'post_type',
>>>>>>> 3c8d62b79 (.)
=======
        'post_id',
        'post_type',
=======
        'post_id', 'post_type',
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
        'post_id',
        'post_type',
>>>>>>> 60f0a1820 (.)
=======
        'post_id',
        'post_type',
=======
        'post_id', 'post_type',
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
=======
        'post_id',
        'post_type',
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
        'related_type',
        'user_id',
        'note',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string', // must be string else primary key of related model will be typed as int
            'uuid' => 'string',
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
<<<<<<< HEAD

=======
>>>>>>> 6be8834c2 (.)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 5cf46378 (.)
=======
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
<<<<<<< HEAD
>>>>>>> 5e6e0d054 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 358ba79a7 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> f8f76a284 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 5e6e0d054 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
>>>>>>> efbf15eba (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 0117b849c (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
>>>>>>> f2dd5676b (.)

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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f8f76a284 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 0117b849c (.)
=======
>>>>>>> 8fd88dd43 (.)
=======
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
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> aba62c408 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 60f0a1820 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
