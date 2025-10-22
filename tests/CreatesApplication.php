<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Application */
        $app = require __DIR__.'/../../../bootstrap/app.php';
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $app = require __DIR__ . '/../../../bootstrap/app.php';
=======
        $app = require __DIR__.'/../../../bootstrap/app.php';
>>>>>>> f1d4085 (.)
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> 300ef70 (.)

        assert($app instanceof Application);
        /* @phpstan-ignore-next-line method.nonObject */
        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
