<?php

namespace App\Http\Controllers;

use App\Models\cake;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


use function Ramsey\Uuid\v1;

class ShopCartController extends Controller
{
    public function index()
    {
        $cart = Cart::content()->toArray();
        $data = [];

        foreach ($cart as $key => $value)
        {
            array_push($data, [
                'rowid' => $key,
                'id' => $value['id'],
                'name' => $value['name'],
                'price' => $value['price'],
                'qty' => $value['qty'],
                'img' => $value['options']['img']
            ]);
        }

        return view('page.shop_cart',['data' => $data, 'total'  => Cart::priceTotal()]);
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

        return Cart::priceTotal();
    }

    public function update_shop(Request $request)
    {
        if(isset($request->all()['data']))
        {
            $data = $request->all()['data'];
            foreach ($data as $value)
            {
                if(filter_var($value['remove'], FILTER_VALIDATE_BOOLEAN) == false)
                {
                    Cart::update($value['rowid'], ['qty' => intval($value['qty'])]);
                }
                else
                {
                    Cart::remove($value['rowid']);
                }
            }
        }

        return '/';
    }

    public function check_cart() {
        $result = ['hasContent' => Cart::count() > 0];
        return response()->json($result);
    }
}
