<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "fist_name" => 'required|string|max:10',
            "last_name" => 'required|string|max:10',
            "address"  => 'required|max:100',
            "city" => 'required|max:90',
            "phone" => 'required|min:9|numeric',
            "email" => 'required|email',
            "oder_note" => 'max:100'
            ] ;
    }
}
