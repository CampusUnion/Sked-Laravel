<?php

namespace CampusUnion;

use Illuminate\Support\Facades\Facade;

/**
 * Facade for the Sked service
 */
class SkedFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sked';
    }

}
