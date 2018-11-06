<?php

namespace Sormagec\OpentokLaravel;

use Illuminate\Support\Facades\Facade;

class OpentokFacade extends Facade {

   /** 
	* Get the registered name of the component.
	*
	* @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'OpentokApi';
    }

}
