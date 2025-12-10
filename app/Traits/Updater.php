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
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 * @property-read ProfileContract|null $deleter
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 * @property-read ProfileContract|null $deleter
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 * @property-read ProfileContract|null $deleter
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
        return $this->belongsTo($profileClass, 'created_by', 'user_id');
>>>>>>> 73eab74 (.)
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
        return $this->belongsTo($profileClass, 'updated_by', 'user_id');
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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

            if (array_key_exists('created_by', $attributes)) {
                $model->setAttribute('created_by', authId());
            }

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
        );
        });

        static::updating(static function (Model $model): void {
            Assert::isArray($attributes = $model->getAttributes());

            if (array_key_exists('updated_by', $attributes)) {
                $model->setAttribute('updated_by', authId());
            }
        });
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        /*
         * Deleting a model is slightly different than creating or deleting.
         * For deletes we need to save the model first with the deleted_by field
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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

            if (\in_array('deleted_by', array_keys($attributes), false)) {
                $model->setAttribute('deleted_by', authId());
            }
        });
    }
}// end trait Updater
}

// end trait Updater
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
