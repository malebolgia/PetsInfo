<?php namespace Petfinder\Pet\Facades;

use Illuminate\Support\Facades\Facade;

class Pet extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'pet'; }

}
