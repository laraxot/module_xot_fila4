<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
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
<<<<<<< HEAD
@endsection
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
