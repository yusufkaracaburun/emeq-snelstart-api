<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Tests;

use Emeq\SnelstartApi\SnelstartServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }
    protected function getPackageProviders($app): array
    {
        return [
            SnelstartServiceProvider::class,
        ];
    }
}
