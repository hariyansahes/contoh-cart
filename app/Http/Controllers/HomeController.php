<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    public function add_cart()
    {
        Cart::instance('shopping')->add(
            '1', // product id
            'product name', // nama product
            1, // qty
            20.00 // harga
        );
        return redirect()->route("cart");
    }

    public function cart()
    {
        dd(Cart::instance('shopping')->content());
    }
}
