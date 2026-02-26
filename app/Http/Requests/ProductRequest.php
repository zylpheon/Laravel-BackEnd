<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer|min:0',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}