<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cake;


class shop extends Controller
{
    //
    public function index(){
        $cake = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->paginate(12);
        $cake->withPath('/shop');
        return view('page.shop',['cake'=>$cake]);
    }
}
