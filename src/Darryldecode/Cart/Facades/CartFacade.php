<?php namespace Darryldecode\Cart\Facades;

use Illuminate\Support\Facades\Facade;
use Darryldecode\Cart\Cart;

/**
 * @see Cart
 * 
 * Package: Darryldecode\Cart
 * */
class CartFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
