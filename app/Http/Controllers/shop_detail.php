<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cake;
use Gloudemans\Shoppingcart\Facades\Cart;

class shop_detail extends Controller
{
    //
    public function index($id){
        $cakeDetail = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('cake.code_cake',$id)->get();
        $type = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name')->where('cake.code_cake',$id)->get();
        $cakes= cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('type.type_name',$type[0]->type_name)->whereNotIn('cake.code_cake',[$id])->get();
        return view('page.shop_detail',['cakeDetail'=>$cakeDetail,'cakes'=>$cakes]);
    }

    public function add_cart(Request $request)
    {
        $result = ['success' => false, 'fail' => false];
        $data = $request->all();
        $cake = cake::where(['code_cake' => $data['code_cake']])->get()[0];
        Cart::add([
            'id' => $cake->code_cake,
            'name' => $cake->name,
            'qty' => intval($data['qty']),
            'price' => $cake->price,
            'weight' => 2,
            'options'  => ['img'  => $cake->img]
        ]);
        $result['success'] = true;
        $result['total_price'] = Cart::priceTotal();

        return response()->json($result);
    }
}
