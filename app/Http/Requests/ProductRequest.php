<?php

namespace App\Http\Requests;

use App\Models\Product;
use App\types;
use App\sizes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','max:255', Rule::unique(Product::class)->ignore($this->id)],
            'type' => ['required', 'string', new Enum(types::class)],
            'size' => ['required', 'string', new Enum(sizes::class)]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The field is required',
            'name.unique' => 'The name already exists',
            'name.max' => 'The name must be less than 255 characters',
            'type.required' => 'The field is required',
            'size.required' => 'The field is required',
        ];

    }
}
