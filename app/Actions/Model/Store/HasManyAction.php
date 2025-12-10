<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class HasManyAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
    public function execute(Model $_model, RelationDTO $relationDTO): void
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
    {
        Assert::isInstanceOf($rows = $relationDTO->rows, HasMany::class);

        $rows->create($relationDTO->data);
    }
}
