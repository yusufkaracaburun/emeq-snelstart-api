<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Emeq\SnelstartApi\Snelstart
 */
class Snelstart extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Emeq\SnelstartApi\Snelstart::class;
    }
}
