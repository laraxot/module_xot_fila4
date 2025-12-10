<?php

declare(strict_types=1);

?>
@extends('xot::layouts.email')

@section('content')
<div class="record-data">
    <h2>Dati Record</h2>
    
    <table class="data-table">
        @foreach($data as $key => $value)
            <tr>
                <th>{{ ucfirst($key) }}</th>
                <td>{{ is_array($value) ? json_encode($value) : $value }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
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
=======
>>>>>>> 091f883c (.)
