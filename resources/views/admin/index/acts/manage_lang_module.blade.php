<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
@extends('adm_theme::layouts.app')
@section('content')
    {{-- <table class="table">
    @foreach ($files as $file)
    <tr>
        <td>{{ $file->getFilenameWithoutExtension() }}</td>
        <td>{{ $file->getSize() }}</td>
        <td>     </td>
    </tr>
    @endforeach
</table> --}}
    {{--
    @livewire('manage_lang_module', ['module_name' => 'progressioni'])
    --}}
    <livewire:manage-lang-module module_name="progressioni" />
@endsection
