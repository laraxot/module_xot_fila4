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
