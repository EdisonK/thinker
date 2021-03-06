<?php 

namespace Thinker\Facades;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Facade;
use Thinker\Testing\Fakes\UCenterApiFake;
use Thinker\UCenter\Api as Origin;

class UCenterApi extends Facade
{

    /**
     * Replace the bound instance with a fake.
     *
     * @return void
     */
    public static function fake()
    {
        $fake = new UCenterApiFake(app(Client::class));
        
        static::swap($fake);

        return $fake;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
        return Origin::class; 
    }
}
