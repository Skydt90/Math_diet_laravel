<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class DietFacade extends Facade 
{
    public static function getFacadeAccessor()
    {
        return 'App\Contracts\DietServiceContract';
    }
}