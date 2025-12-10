<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<?php

declare(strict_types=1);

?>
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
@extends('adm_theme::layouts.app')
@section('content')
PASSO 1
{!! $data_html !!}
<form action="{{ Request::fullUrlWithQuery(['step' => 2]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
    @foreach ($head as $v)
        <div class="col">
        {{ $v }}
        <select name="key[{{ $v }}]" class="form-select custom-select form-input" >
            <option value="">---</option>
            @foreach ($fillable as $vf)
                <option value="{{ $vf }}">{{ $vf }}</option>
            @endforeach
        </select>
        </div>
    @endforeach
    </div>
    <br/>
    <button class="btn btn-success">Import!</button>
</form>


<<<<<<< HEAD
@endsection
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@endsection
@endsection
@endsection
@endsection
=======
=======
@endsection
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
@endsection
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> a12f125f4a (.)
=======
@endsection
>>>>>>> b93ef594b4 (.)
=======
@endsection
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
