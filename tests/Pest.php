<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Tests\TestCase;
use Illuminate\Support\Facades\Cache;

uses(TestCase::class)->in(__DIR__);

// LaravelTokenCache is a singleton and Laravel's array cache persists within
// the Testbench process, so prior tests can poison cache state for the next
// test (e.g. an authenticator finds a stale token instead of hitting its mock
// auth endpoint). Flushing here keeps each test hermetic.
uses()->beforeEach(function (): void {
    Cache::flush();
})->in(__DIR__);
