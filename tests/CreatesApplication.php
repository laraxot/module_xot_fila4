<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;
use Webmozart\Assert\Assert;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../../../bootstrap/app.php';
        Assert::isInstanceOf($app, Application::class, 'Bootstrap file must return Application instance');

        $kernel = $app->make(Kernel::class);
        Assert::isInstanceOf($kernel, Kernel::class, 'Kernel must be instance of Kernel');
        $kernel->bootstrap();

        return $app;
    }
}
