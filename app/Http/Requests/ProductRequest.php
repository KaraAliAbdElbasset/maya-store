<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:200',
            'excerpt' => 'required|string|max:200',
            'description' => 'sometimes|nullable|string',
            'description_seo' => 'sometimes|nullable|string|max:200',
            'brand_id' => 'required|numeric|gt:0',
            'form_id' => 'sometimes|nullable|numeric|gt:0',
            'type_id' => 'sometimes|nullable|numeric|gt:0',
            'functionality_id' => 'sometimes|nullable|numeric|gt:0',
            'consumable_id' => 'sometimes|nullable|numeric|gt:0',
            'computerConsumable_id' => 'sometimes|nullable|numeric|gt:0',
            'categories' => 'sometimes|nullable|array',
            'categories.*' => 'required|numeric|gt:0',
            'qte' => 'required|numeric|gte:0',
            'price' => 'required|numeric|between:0000000000000.00,9999999999999.99',
            'old_price' => 'sometimes|nullable|numeric|between:0000000000000.00,9999999999999.99|gt:price',
            'image' => 'sometimes|nullable|file|image|max:5000',
        ];
    }
}
