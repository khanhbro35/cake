<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cake;
use App\Models\type;

use function PHPSTORM_META\type;

class shop extends Controller
{
    //
    public function index(){
        $cake = cake::join('type','cake.code_type','=','type.code_type')->select('type.type_name','cake.*')->paginate(12);
        $cake->withPath('/shop');
        $type = type::all();
        return view('page.shop',['cake'=>$cake,'type' => $type, 'active' => 'shop']);
    }

    public function get_by_category(Request $request, $category_id)
    {
        if($category_id == '_')
        {
            $cake = cake::join('type', 'cake.code_type', '=', 'type.code_type')->select('type.type_name', 'cake.*')->paginate(12);
        }
        else
        {
            $cake = cake::join('type', 'cake.code_type', '=', 'type.code_type')->where(['type.code_type' => $category_id])->select('type.type_name', 'cake.*')->paginate(12);
        }

        return response()->json($cake);

        // return view('page.shop', ['cake' => $cake, 'active' => 'shop']);
    }

    public function search(Request $request)
    {
        $data = $request->all();

        if($data['type'] == '_')
        {
            $cake = cake::join('type', 'cake.code_type', '=', 'type.code_type')->select('type.type_name', 'cake.*')->where('cake.name', 'like', '%' . strtoupper($data['search']) . '%')->get();
        }
        else
        {
            $cake = cake::join('type', 'cake.code_type', '=', 'type.code_type')->select('type.type_name', 'cake.*')->where('cake.name', 'like', '%' . strtoupper($data['search']) . '%')->where('cake.code_type' , '=', $data['type'])->get();
        }

        return response()->json($cake);
    }
}
