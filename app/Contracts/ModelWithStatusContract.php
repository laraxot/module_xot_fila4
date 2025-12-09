<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;
use Spatie\ModelStatus\Status;

/**
 * Modules\Xot\Contracts\ModelWithStatusContract.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property int $id
 * @property int|null $user_id
 * @property string|null $post_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $title
 * @property PivotContract|null $pivot
 * @property string $tennant_name
 * @property UserContract|null $user
 * @property string $status
 * @property Collection|array<Status> $statuses
 * @property int|null $statuses_count
 *
 * @method mixed getKey()
 * @method string getRouteKey()
 * @method string getRouteKeyName()
 * @method string getTable()
 * @method mixed with($array)
 * @method array getFillable()
 * @method mixed fill($array)
 * @method mixed getConnection()
 * @method mixed update($params)
 * @method mixed delete()
 * @method mixed detach($params)
 * @method mixed attach($params)
 * @method mixed save($params)
 * @method array treeLabel()
 * @method array treeSons()
 * @method array toArray()
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @property int                      $id
 * @property int|null                 $user_id
 * @property string|null              $post_type
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property string|null              $created_by
 * @property string|null              $updated_by
 * @property string|null              $title
 * @property PivotContract|null       $pivot
 * @property string $tennant_name
 * @property UserContract|null        $user
 * @property string $status
 * @property Collection|array<Status> $statuses
 * @property int|null                 $statuses_count
 *
 * @method mixed     getKey()
 * @method string    getRouteKey()
 * @method string    getRouteKeyName()
 * @method string    getTable()
 * @method mixed     with($array)
 * @method array     getFillable()
 * @method mixed     fill($array)
 * @method mixed     getConnection()
 * @method mixed     update($params)
 * @method mixed     delete()
 * @method mixed     detach($params)
 * @method mixed     attach($params)
 * @method mixed     save($params)
 * @method array     treeLabel()
 * @method array     treeSons()
 * @method array     toArray()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
 * @method BelongsTo user()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface ModelWithStatusContract
{
    public function statuses(): MorphMany;

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
    public function status(): ?Status;

    public function setStatus(string $name, ?string $reason = null): self;
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 399f46d3 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 17684f52 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 399f46d3 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 399f46d3 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> ed734516 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 7131bd09 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> ed734516 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> ed734516 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 7131bd09 (.)
=======
    public function status(): ?Status;

    public function setStatus(string $name, ?string $reason = null): self;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 17684f52 (.)
    public function status(): ?Status;

    public function setStatus(string $name, ?string $reason = null): self;
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 399f46d3 (.)
    public function status(): ?Status;

    public function setStatus(string $name, ?string $reason = null): self;
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function status(): ?Status;

    public function setStatus(string $name, ?string $reason = null): self;
>>>>>>> a12f125f4a (.)
>>>>>>> 17684f52 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
    public function status(): ?Status;

    public function setStatus(string $name, ?string $reason = null): self;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> ca9324a4 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 9db27d12 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> ca9324a4 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public function status(): null|Status;

    public function setStatus(string $name, null|string $reason = null): self;
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
}
