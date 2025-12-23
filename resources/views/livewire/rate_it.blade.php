<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
<div>
    @component('ui::components.modal.simple', ['guid' => $modal_guid, 'title' => $modal_title])
        @slot('content')
            @livewire('rate_single')
        @endslot
        @slot('btns')
        @endslot
    @endcomponent

    <button data-toggle="modal" data-target="#{{ $modal_guid }}" class="btn btn-primary mb-2">
        Vota <i class="fas fa-star"></i>
    </button>

</div>
