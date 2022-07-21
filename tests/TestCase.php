<?php

namespace OpenSoutheners\LaravelAttributes\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use OpenSoutheners\LaravelAttributes\ServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
