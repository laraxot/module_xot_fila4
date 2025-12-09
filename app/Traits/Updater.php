<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;

/**
 * Trait Updater.
 * https://dev.to/hasanmn/automatically-update-createdby-and-updatedby-in-laravel-using-bootable-traits-28g9.
 *
 * @property int|null $created_by ID dell'utente che ha creato il record
 * @property int|null $updated_by ID dell'utente che ha aggiornato il record
 * @property int|null $deleted_by ID dell'utente che ha eliminato il record
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 * @property-read ProfileContract|null $deleter
=======
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 * @property-read ProfileContract|null $deleter
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $deleter
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 */
trait Updater
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the user who created the model.
=======
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
=======
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
=======
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
=======
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
     */
    public function creator(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        // @phpstan-ignore return.type
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        // @phpstan-ignore return.type
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        // @phpstan-ignore return.type
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        // @phpstan-ignore return.type
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> b956ebe0 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 0123915b (.)
=======
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 90d386aa (.)
=======
>>>>>>> 4fb9bc4b (.)
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
=======
>>>>>>> 3eee6f79 (.)
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
=======
=======
>>>>>>> origin/develop
        return $this->belongsTo(
            $profileClass,
            'created_by',
            'user_id'
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Get the last user who updated the model.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
=======
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
=======
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
=======
     *
     * @return BelongsTo<ProfileContract&Model, static>
>>>>>>> 5a14301c (.)
     */
    public function updater(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        // @phpstan-ignore return.type
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        // @phpstan-ignore return.type
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        // @phpstan-ignore return.type
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        // @phpstan-ignore return.type
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 5e58b29b (.)
=======
>>>>>>> 1c4bb8cf (.)
=======
>>>>>>> cafe8bed (.)
=======
>>>>>>> e0b8ebe3 (.)
=======
>>>>>>> b956ebe0 (.)
=======
>>>>>>> a62d7646 (.)
=======
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> cc52d333 (.)
=======
>>>>>>> 0123915b (.)
=======
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 90d386aa (.)
=======
>>>>>>> 4fb9bc4b (.)
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
=======
>>>>>>> 3eee6f79 (.)
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
=======
=======
>>>>>>> origin/develop
        return $this->belongsTo(
            $profileClass,
            'updated_by',
            'user_id'
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the user who deleted the model.
     */
    public function deleter(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

        return $this->belongsTo($profileClass, 'deleted_by', 'user_id');
    }

    /**
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     * bootUpdater function.
     */
    protected static function bootUpdater(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        static::creating(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());

            if (array_key_exists('created_by', $attributes)) {
                $model->setAttribute('created_by', authId());
            }

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
        });

        static::updating(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
        });
<<<<<<< HEAD
=======
=======
        static::creating(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->getAttributes());
=======
        static::creating(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());
>>>>>>> b93ef594b4 (.)

            if (array_key_exists('created_by', $attributes)) {
                $model->setAttribute('created_by', authId());
            }

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======
        });

        static::updating(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
        });
>>>>>>> b93ef594b4 (.)
=======
        static::creating(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->getAttributes());

                if (array_key_exists('created_by', $attributes)) {
                    $model->setAttribute('created_by', authId());
                }

                if (array_key_exists('updated_by', $attributes)) {
                    $model->setAttribute('updated_by', authId());
                }
            }
        );

        static::updating(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->getAttributes());

                if (array_key_exists('updated_by', $attributes)) {
                    $model->setAttribute('updated_by', authId());
                }
            }
        );
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        /*
         * Deleting a model is slightly different than creating or deleting.
         * For deletes we need to save the model first with the deleted_by field
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        static::deleting(static function (Model $model): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::isArray($attributes = $model->getAttributes());
=======
            Assert::isArray($attributes = $model->attributes);
>>>>>>> 5a14301c (.)
=======
            Assert::isArray($attributes = $model->attributes);
>>>>>>> 5a14301c (.)
=======
            Assert::isArray($attributes = $model->attributes);
>>>>>>> 5a14301c (.)
=======
            Assert::isArray($attributes = $model->attributes);
>>>>>>> 5a14301c (.)

            if (\in_array('deleted_by', array_keys($attributes), false)) {
                $model->setAttribute('deleted_by', authId());
            }
        });
    }
}

// end trait Updater
<<<<<<< HEAD
=======
=======
        static::deleting(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->attributes);
=======
        static::deleting(static function (Model $model): void {
            Assert::isArray($attributes = $model->attributes);
>>>>>>> b93ef594b4 (.)

            if (\in_array('deleted_by', array_keys($attributes), false)) {
                $model->setAttribute('deleted_by', authId());
            }
        });
    }
<<<<<<< HEAD
}// end trait Updater
>>>>>>> a12f125f4a (.)
=======
}

// end trait Updater
>>>>>>> b93ef594b4 (.)
=======
        static::deleting(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->attributes);

                if (\in_array('deleted_by', array_keys($attributes), false)) {
                    $model->setAttribute('deleted_by', authId());
                }
            }
        );
    }
}// end trait Updater
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
