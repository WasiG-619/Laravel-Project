<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
        [
            'product_type' => 'required|in:Song,Game,Book', //in_array function used to only accept the three valid product_types        
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'price' => 'required|numeric',
        ];
    }
}
