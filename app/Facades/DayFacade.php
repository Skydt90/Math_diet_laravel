<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class DayFacade extends Facade 
{
    public static function getFacadeAccessor()
    {
        return 'App\Contracts\DayServiceContract';
    }
}