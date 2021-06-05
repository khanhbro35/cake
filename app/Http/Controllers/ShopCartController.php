<?php

namespace App\Http\Controllers;

use App\Models\cake;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShopCartController extends Controller
{
    public function index()
    {
        Cart::destroy();
    }

    public  function add_shop(Request $request, $id)
    {
        $cake = cake::where(['code_cake' => $id])->get()[0];
        Cart::add([
            'id' => $cake->code_cake,
            'name' => $cake->name,
            'qty' => 1,
            'price' => $cake->price,
            'weight' => 2,
            'options'  => ['img'  => $cake->img]
        ]);

        return Cart::total();
    }
}
