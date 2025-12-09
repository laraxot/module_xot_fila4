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
        $app = require __DIR__.'/../../../bootstrap/app.php';
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> 5a14301c (.)
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> 3fbbf1f5 (.)

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
