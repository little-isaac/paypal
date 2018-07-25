<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Milind\Paypal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of PayPal
 *
 * @author milind
 */
class Paypal extends Facade {

    //put your code here

    protected static function getFacadeAccessor() {
        return 'Paypal';
    }

}
