<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Spatie\QueueableAction\QueueableAction;

class DestroyAction
{
    use QueueableAction;

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
    public function execute(Model $model, array $_data, array $_rules): Model
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, array $data, array $rules): Model
=======
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 358ba79a7 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> f8f76a284 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 5e6e0d054 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(Model $model, array $_data, array $_rules): Model
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> a12f125f4a (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> b93ef594b4 (.)
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 8fd88dd43 (.)
    public function execute(Model $model, array $_data, array $_rules): Model
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> f1d4085 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> aba62c408 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 5cb992cc6 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 3c8d62b79 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> f1d4085 (.)
>>>>>>> efbf15eba (.)
=======
>>>>>>> 9f27fc9a6 (.)
=======
>>>>>>> 0117b849c (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 60f0a1820 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
=======
    public function execute(Model $model, array $data, array $rules): Model
>>>>>>> f1d4085 (.)
>>>>>>> f2dd5676b (.)
=======
>>>>>>> 8cf76e7 (.)
>>>>>>> 8fd88dd43 (.)
=======
    public function execute(Model $model, array $_data, array $_rules): Model
>>>>>>> 851793957 (.)
    {
        // prende la chiave del modello

        // $id = $row->getKey();

        // nel mio caso nella pivot è la chiave 14 ma non nella tabella finale,
        // ma probabilmente è giusto perchè va disassociata se è many to many
        // ma forse il problema è che il modello è Keyword e non KeywordReport

        // DA FIXARE: se le tabelle pivot e tabella finale hanno id sfasati allora non CANCELLA giusto
        // e nemmeno EDIT lo fa giusto

        $res = $model->delete();
        if ($res) {
            Session::flash('status', 'eliminato');
        } else {
            Session::flash('status', 'NON eliminato');
        }

        return $model;
    }
}
