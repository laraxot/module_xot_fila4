<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;

class HasManyDeepAction
{
    use QueueableAction;

<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $_relationDTO): void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function execute(Model $_model, RelationDTO $_relationDTO): void
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
    {
        // Assert::isInstanceOf($relation = $relationDTO->rows, HasMany::class);
        dddx('wip');
    }
}
