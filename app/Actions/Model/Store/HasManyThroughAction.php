<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;

class HasManyThroughAction
{
    use QueueableAction;

<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $_relationDTO): void
=======
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $_relationDTO): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $_relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $_model, RelationDTO $_relationDTO): void
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    {
        // Assert::isInstanceOf($rows = $relationDTO->rows, BelongsToMany::class);
        dddx('wip');
    }
}
