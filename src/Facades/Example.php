<?php

namespace Idfx\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Idfx\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Idfx\Example\Example::class;
    }
}
