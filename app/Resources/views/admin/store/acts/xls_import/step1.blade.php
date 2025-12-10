<?php

declare(strict_types=1);

?>
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


@endsection
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
@endsection
=======
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
