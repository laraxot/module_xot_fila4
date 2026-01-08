<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> f1d4085 (.)
=======
@endsection
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
