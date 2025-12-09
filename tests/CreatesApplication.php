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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $app = require __DIR__.'/../../../bootstrap/app.php';
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> 5a14301c (.)
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> ca9324a4 (.)
=======
        $app = require __DIR__ . '/../../../bootstrap/app.php';
>>>>>>> 5a14301c (.)

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
