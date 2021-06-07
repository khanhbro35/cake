<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cake;


class shop_detail extends Controller
{
    //
    public function index($id){
        $cakeDetail = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('cake.code_cake',$id)->get();
        $type = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name')->where('cake.code_cake',$id)->get();
        $cakes= cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('type.type_name',$type[0]->type_name)->whereNotIn('cake.code_cake',[$id])->get();
        return view('page.shop_detail',['cakeDetail'=>$cakeDetail,'cakes'=>$cakes]);
    }
}
