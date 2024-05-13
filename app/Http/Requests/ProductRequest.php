<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'name' => 'required|string',
                'description' => 'required|string',
                'quantity' => 'required|integer',
                'price' => 'required|numeric',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:3000',
                'status' => 'required|boolean',
                // Add other rules as needed
            ];	
        } elseif ($this->isMethod('put')) {
            return [
                'name' => 'required|string',
                'description' => 'required|string',
                'quantity' => 'required|integer',
                'price' => 'required|numeric',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:3000',
                'status' => 'required|boolean',
                // Add other rules as needed
            ];
        }
    }
}
