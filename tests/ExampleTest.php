<?php

namespace Codeat3\LaravelLinemaro\Tests;

use Orchestra\Testbench\TestCase;
use Codeat3\LaravelLinemaro\LaravelLinemaroServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelLinemaroServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
