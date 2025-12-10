<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Datas\RelationData as RelationDTO;
use Spatie\QueueableAction\QueueableAction;

class PivotAction
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function execute(Model $_model, RelationDTO $_relationDTO): void
    {
        // Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);
        dddx('wip');

        /*
         *
         * $parent_panel = $this->panel->getParent();
         * if (null !== $parent_panel) {
         * $parent_row = $parent_panel->getRow();
         * $panel_name = $this->panel->getName();
         * $parent_row->{$panel_name}()->updateExistingPivot($model->getKey(), $data);
         * }
         *
         *
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
=======
    public function execute(Model $_model, RelationDTO $_relationDTO): void
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
    {
        // Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);
        dddx('wip');

<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
        /*
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);
        dddx('wip');
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        /*
=======
        /*
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)

            $parent_panel = $this->panel->getParent();
            if (null !== $parent_panel) {
                $parent_row = $parent_panel->getRow();
                $panel_name = $this->panel->getName();
                $parent_row->{$panel_name}()->updateExistingPivot($model->getKey(), $data);
            }


        */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
         *
         * $parent_panel = $this->panel->getParent();
         * if (null !== $parent_panel) {
         * $parent_row = $parent_panel->getRow();
         * $panel_name = $this->panel->getName();
         * $parent_row->{$panel_name}()->updateExistingPivot($model->getKey(), $data);
         * }
         *
         *
         */
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
    }
}
