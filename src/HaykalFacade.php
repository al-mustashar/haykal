<?php

namespace Almustashar\Haykal;

use Illuminate\Support\Facades\Facade;

class HaykalFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'haykal';
    }
}
