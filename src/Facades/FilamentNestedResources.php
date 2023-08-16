<?php

namespace TimeglitchD\FilamentNestedResources\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TimeglitchD\FilamentNestedResources\FilamentNestedResources
 */
class FilamentNestedResources extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TimeglitchD\FilamentNestedResources\FilamentNestedResources::class;
    }
}
