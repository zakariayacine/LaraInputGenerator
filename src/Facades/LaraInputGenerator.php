<?php

namespace Zakariayacine\LaraInputGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zakariayacine\LaraInputGenerator\LaraInputGenerator
 */
class LaraInputGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Zakariayacine\LaraInputGenerator\LaraInputGenerator::class;
    }
}
