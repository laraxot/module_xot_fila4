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
        /** @var Application */
        $app = require __DIR__.'/../../../bootstrap/app.php';
        $app = require __DIR__ . '/../../../bootstrap/app.php';
        $app = require __DIR__.'/../../../bootstrap/app.php';
        $app = require __DIR__ . '/../../../bootstrap/app.php';
        $app = require __DIR__ . '/../../../bootstrap/app.php';

        assert($app instanceof Application);
        /* @phpstan-ignore-next-line method.nonObject */
        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
