<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cake;

// use App\Models\cake;

class home extends Controller
{
    //
    public function index()
    {
        # code...

        $cakecup = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('cake.code_type','cc')->limit(8)->get();
        $buter = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('cake.code_type','bt')->limit(8)->get();
        $redvelet = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('cake.code_type','rv')->limit(8)->get();
        $biscuit = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('cake.code_type','bc')->limit(8)->get();
        $donut = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->where('cake.code_type','dn')->limit(8)->get();
        return view('page.home',['cupcake'=>$cakecup,'butter'=>$buter,'redvelet'=>$redvelet,'biscuit'=>$biscuit,'donut'=>$donut, 'active' => 'home']);
    }
}
