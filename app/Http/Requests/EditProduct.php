<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProduct extends FormRequest
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
            'products_code' => 'required',
            'product_name' => 'required',
            'categories' => 'required',
            'description' => 'required',
            'price' =>  'required|numeric',
            'counts_in_stock' => 'required|numeric',
            'images.*' => 'required|max:600'
        ];
    }
}
