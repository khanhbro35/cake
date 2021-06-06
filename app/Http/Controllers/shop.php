<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cake;

class shop extends Controller
{
    //
    public function index(){
        $cake = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->get();
        return view('page.shop');
    }
}
