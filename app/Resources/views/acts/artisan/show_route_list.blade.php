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
=======
=======
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
<?php

declare(strict_types=1);

?>
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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
@extends('pub_theme::layouts.app')
@section('title', 'Web Routes List')
@section('content')
<div class="text-center">
    <h3>Web Routes List</h3>
</div>

<table id="routetable" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th scope="col">HTTP Method</th>
            <th scope="col">Route</th>
            <th scope="col">Name</th>
            <th scope="col">Corresponding Action</th>
        </tr>
    </thead>
    <tbody>
        @if (request()->has('only') == true)
        @foreach ($routeCollection->getIterator() as $data)
        @if (strpos($data->uri, 'api') !== false)
        <tr>
            <td>{{ $data->methods()[0] }}</td>
            <td>{{ $data->uri() }}</td>
            <td>{{ $data->getName() }}</td>
            <td>{{ $data->getActionName() }}</td>
        </tr>
        @endif
        @endforeach
        @else
        @foreach ($routeCollection as $data)
        <tr>
            <td>{{ $data->methods()[0] }}</td>
            <td>{{ $data->uri() }}</td>
            <td>{{ $data->getName() }}</td>
            <td>{{ $data->getActionName() }}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
@section('script-footer')
<script>
    $(document).ready(function() {
        $('#routetable').DataTable({
            "order": [
                [3, "desc"]
            ]
        });
    });
</script>
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
@endsection
<<<<<<< HEAD
<<<<<<< HEAD
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
@endsection
>>>>>>> 358ba79a7 (.)
=======
@endsection
>>>>>>> f8f76a284 (.)
=======
@endsection
>>>>>>> 5e6e0d054 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
@endsection
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
@endsection
=======
@endsection
>>>>>>> f1d4085 (.)
=======
@endsection
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
@endsection
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
@endsection
=======
@endsection
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
@endsection
>>>>>>> aba62c408 (.)
=======
@endsection
=======
@endsection
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f8f76a284 (.)
=======
@endsection
>>>>>>> 5cb992cc6 (.)
=======
@endsection
=======
@endsection
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
=======
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
@endsection
>>>>>>> 3c8d62b79 (.)
