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

        $cakecup = cake::with('type')->where('code_type','cc')->limit(8)->get();
        $buter = cake::with('type')->where('code_type','bt')->limit(8)->get();
        $redvelet = cake::with('type')->where('code_type','rv')->limit(8)->get();
        $biscuit = cake::with('type')->where('code_type','bc')->limit(8)->get();
        $donut = cake::with('type')->where('code_type','dn')->limit(8)->get();
        return view('page.home',['cupcake'=>$cakecup,'butter'=>$buter,'redvelet'=>$redvelet,'biscuit'=>$biscuit,'donut'=>$donut]);
    }
}
