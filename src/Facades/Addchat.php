<?php

namespace g3ntl3m3n\Addchat\Facades;

use Illuminate\Support\Facades\Facade;

class Addchat extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'addchat';
    }
}
