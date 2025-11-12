<?php

declare(strict_types=1);

namespace Modules\Xot\Models\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory as EloquentHasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;

trait HasXotFactory
{
<<<<<<< HEAD
    use EloquentHasFactory {
        newFactory as parentNewFactory;
    }
=======
    use EloquentHasFactory;
>>>>>>> eeaa032 (.)

    /**
     * Create a new factory instance for the model.
     *
<<<<<<< HEAD
     * @return Factory<static>|null
     */
    protected static function newFactory()
=======
     * @return Factory<static>
     */
    protected static function newFactory(): Factory
>>>>>>> eeaa032 (.)
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }
}
<<<<<<< HEAD

=======
>>>>>>> eeaa032 (.)
