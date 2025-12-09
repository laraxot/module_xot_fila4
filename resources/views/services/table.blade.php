<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> f1d4085 (.)
<table border="1" class="table table-bordered">
@foreach ($rows as $row)
    <tr>
        @foreach ($row as $cell)
            <td>{{ is_string($cell)?$cell:'--NOT STRING--' }}</td>
        @endforeach
    </td>
@endforeach
<<<<<<< HEAD
</table>
=======
</table>
>>>>>>> f1d4085 (.)
