<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shop_detail extends Controller
{
    //
    public function index($id){
        return view('page.shop_detail',['id'=>$id]);
    }
}
