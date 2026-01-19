<?php

declare(strict_types=1);

namespace Modules\Xot\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

/**
 * Base test case for Xot module.
 *
 * Uses MySQL from .env.testing (NOT SQLite).
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // Ensure xot connection is configured (Laraxot requirement)
        if (! config()->has('database.connections.xot')) {
            config(['database.connections.xot' => config('database.connections.mysql')]);
        }
    }
}
