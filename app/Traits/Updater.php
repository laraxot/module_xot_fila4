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
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 * @property-read ProfileContract|null $deleter
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 * @property-read ProfileContract|null $deleter
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
     * Get the user who created the model.
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Get the user who created the model.
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     * Summary of creator.
     *
     * @return BelongsTo<ProfileContract&Model, static>
     */
    public function creator(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

        // @phpstan-ignore return.type
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
>>>>>>> 2f3197ab (.)
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
<<<<<<< HEAD
        // @phpstan-ignore return.type
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
        return $this->belongsTo(
            $profileClass,
            'created_by',
            'user_id'
        );
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
=======
        return $this->belongsTo(
            $profileClass,
            'created_by',
            'user_id'
        );
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
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
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     *
     * @return BelongsTo<ProfileContract&Model, static>
     */
    public function updater(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

        // @phpstan-ignore return.type
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
>>>>>>> 2f3197ab (.)
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
<<<<<<< HEAD
        // @phpstan-ignore return.type
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
    }

    /**
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        // @phpstan-ignore return.type
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
        return $this->belongsTo(
            $profileClass,
            'updated_by',
            'user_id'
        );
=======
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
=======
        return $this->belongsTo(
            $profileClass,
            'updated_by',
            'user_id'
        );
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
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
     * Get the user who deleted the model.
     */
    public function deleter(): BelongsTo
    {
        /** @var class-string<ProfileContract&Model> $profileClass */
        $profileClass = XotData::make()->getProfileClass();

        return $this->belongsTo($profileClass, 'deleted_by', 'user_id');
    }

    /**
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        static::creating(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->getAttributes());
=======
        static::creating(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)

            if (array_key_exists('created_by', $attributes)) {
                $model->setAttribute('created_by', authId());
            }

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
<<<<<<< HEAD
        );
=======
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        });

        static::updating(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
        });
<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
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
            Assert::isArray($attributes = $model->getAttributes());
            Assert::isArray($attributes = $model->attributes);
            Assert::isArray($attributes = $model->attributes);
            Assert::isArray($attributes = $model->attributes);
            Assert::isArray($attributes = $model->attributes);
        static::deleting(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());
            Assert::isArray($attributes = $model->attributes);
            Assert::isArray($attributes = $model->attributes);
            Assert::isArray($attributes = $model->attributes);
            Assert::isArray($attributes = $model->attributes);
            Assert::isArray($attributes = $model->attributes);

            if (\in_array('deleted_by', array_keys($attributes), false)) {
                $model->setAttribute('deleted_by', authId());
            }
        });
    }
}

// end trait Updater
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        static::deleting(
            static function (Model $model): void {
                Assert::isArray($attributes = $model->attributes);
=======
        static::deleting(static function (Model $model): void {
            Assert::isArray($attributes = $model->attributes);
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)

            if (\in_array('deleted_by', array_keys($attributes), false)) {
                $model->setAttribute('deleted_by', authId());
            }
        });
    }
<<<<<<< HEAD
}// end trait Updater
}

// end trait Updater
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
}// end trait Updater
>>>>>>> a12f125f4a (.)
=======
}

// end trait Updater
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
