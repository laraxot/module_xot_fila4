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
     * Get the user who created the model.
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
=======
        // @phpstan-ignore return.type
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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
=======
        // @phpstan-ignore return.type
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
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
            Assert::isArray($attributes = $model->getAttributes());
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
