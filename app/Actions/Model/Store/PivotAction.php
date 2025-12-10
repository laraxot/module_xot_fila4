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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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
    {
        // Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);
        dddx('wip');

=======
=======
>>>>>>> 218dfed3 (.)
=======
    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // Assert::isInstanceOf($rows = $relationDTO->rows, MorphToOne::class);
        dddx('wip');
>>>>>>> 2f3197ab (.)
        /*

            $parent_panel = $this->panel->getParent();
            if (null !== $parent_panel) {
                $parent_row = $parent_panel->getRow();
                $panel_name = $this->panel->getName();
                $parent_row->{$panel_name}()->updateExistingPivot($model->getKey(), $data);
            }


        */
<<<<<<< HEAD
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    }
}
