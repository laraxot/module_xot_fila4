<?php

declare(strict_types=1);

?>
<table border="1" class="table table-bordered">
@foreach ($rows as $row)
    <tr>
        @foreach ($row as $cell)
            <td>{{ is_string($cell)?$cell:'--NOT STRING--' }}</td>
        @endforeach
    </td>
@endforeach
</table>
<<<<<<< HEAD
<<<<<<< HEAD
</table>
</table>
</table>
</table>
=======
=======
</table>
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
</table>
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
