<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'delivery_method_id' => 'required',
            'payment_type_id' => 'required|numeric',
            'sum' => 'nullable',
            'products' => 'required',
            'products.*.product_id' => 'required|numeric',
            'products.*.stock_id' => 'nullable|numeric',
            'products.*.quantity' => 'required|numeric',
            'comment' => 'nullable|max:500',
            'address' => 'nullable'
        ];
    }
}
