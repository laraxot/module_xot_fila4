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
<<<<<<< HEAD
@endsection
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
