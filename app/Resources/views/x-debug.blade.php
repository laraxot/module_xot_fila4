<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8cf76e7 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 8cf76e7 (.)
<div>
    @php
     if (! extension_loaded('xdebug')) {
            throw new RuntimeException('XDebug must be installed to use this function');
        }

        xdebug_set_filter(
            XDEBUG_FILTER_TRACING,
            XDEBUG_PATH_EXCLUDE,
            [LARAVEL_DIR.'/vendor/']
            // [__DIR__.'/../../vendor/']
        );

        xdebug_print_function_stack();
    @endphp
</div>
