<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Auth\RequestGuard;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // add logout method to RequestGuard
        RequestGuard::macro('logout', function() {
            $this->user = null;
        });
    }

    // add method to base TestCase class
    public function actingAsGuest(): void
    {
        $this->app['auth']->logout();
    }
}
