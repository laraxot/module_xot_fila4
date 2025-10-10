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
        $app = require __DIR__ . '/../../../bootstrap/app.php';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $app = require __DIR__ . '/../../../bootstrap/app.php';
=======
        $app = require __DIR__.'/../../../bootstrap/app.php';
>>>>>>> a12f125f4a (.)
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> b93ef594b4 (.)
=======
        $app = require __DIR__.'/../../../bootstrap/app.php';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
