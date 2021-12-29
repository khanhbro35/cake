<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\CheckoutForm;
use PDF;

class Check_Out extends Controller
{
    //
    public function index()
    {
        if(Cart::count() == 0) { 
            return redirect('/');
        }
        $carts = Cart::content()->reduce(function($carry, $item) {
            array_push($carry['items'],
                [
                    'rowid' => $item->rowId,
                    'id' => $item->id,
                    'name' => $item->name,
                    'price' => $item->price * $item->qty,
                ]
            );
            return $carry;
        }, ['items' => []]);
        $carts['total'] = Cart::priceTotal();
        return view('page.check_out', ['carts' => $carts]);
    }

    public function store(CheckoutForm $Request)
    {
        $data = $Request->validated();
        return redirect('/checkout/checkout_pdf')->with('data_form', $data);
    }

    public function checkout_pdf() {
        $carts = Cart::content()->reduce(function($carry, $item) {
            array_push($carry['items'],
                [
                    'rowid' => $item->rowId,
                    'id' => $item->id,
                    'name' => $item->name,
                    'price' => $item->price * $item->qty,
                ]
            );
            return $carry;
        }, ['items' => []]);
        $carts['total'] = Cart::priceTotal();
        $dataForm = session('data_form');
        if($dataForm != null && $carts != null)
        {
            $pdf_data = array_merge($carts, $dataForm);
            //dd($carts);
            $pdf = PDF::loadView('page.check_out_pdf', $pdf_data)->setOptions(['defaultFont' => 'sans-serif', 'defaultPaperSize' => 'A6']);
            Cart::destroy();
            return $pdf->stream();
        }
        return redirect('/');
    }
}
